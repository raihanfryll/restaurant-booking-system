<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use RealRashid\SweetAlert\Facades\Alert;

class AccountController extends Controller
{
    public function profil()
    {
        $user = Auth::user();

        return view('admin.account.profil', compact('user'));
    }

    public function profil_update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = isset($request->name) ? $request->name : $user->name;
        $user->email = isset($request->email) ? $request->email : $user->email;
        $user->MobileNumber = isset($request->mobilenumber) ? $request->mobilenumber : $user->MobileNumber;

        $user->update();

        Alert::success('Berhasil', 'Profile updated');
        return back();
    }

    public function changepassword()
    {
        return view('admin.account.change-password');
    }

    public function managesubadmin()
    {
        $user = User::role('subadmin')->get();
        return view('admin.subadmin.manage', compact('user'));
    }

    public function subadmin()
    {
        return view('admin.subadmin.add');
    }

    public function addadmin(Request $request)
    {
        User::create([
            'username' => $request->sadminusername,
            'name' => $request->fullname,
            'email' => $request->emailid,
            'MobileNumber' => $request->mobilenumber,
            'password' => Hash::make($request->inputpwd),
        ])->assignRole('subadmin');
        Alert::success('Berhasil', 'Sub-Admin created');
        return to_route('managesubadmin');
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.subadmin.edit', compact('user'));

    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = isset($request->fullname) ? $request->fullname : $user->name;
        $user->email = isset($request->emailid) ? $request->emailid : $user->email;
        $user->email = isset($request->mobilenumber) ? $request->mobilenumber : $user->email;
        $user->update();

        Alert::success('Berhasil', 'Sub-Admin updated');
        return to_route('managesubadmin');

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Alert::success('Successfully', 'Table details deleted successfully.');
        return back();
    }

    public function resetPassword(Request $request, $id)
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $user = User::find($id);

        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        return to_route('managesubadmin');
    }

    public function password($id)
    {
        return view('admin.subadmin.reset-subadmin', compact('id'));
    }
}
