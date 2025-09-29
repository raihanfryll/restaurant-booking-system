<?php

namespace App\Http\Controllers;

use App\Models\Restable;
use App\Http\Requests\StoreRestableRequest;
use App\Http\Requests\UpdateRestableRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RestableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.tables.add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $table = Restable::all();

        $results = Restable::leftJoin('users', 'users.ID', '=', 'restables.AddedBy')
            ->select('users.name', 'restables.id as tid', 'restables.tableNumber', 'restables.created_at')
            ->get();
        return view('admin.tables.manage', compact('table', 'results'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Restable::create([
            'tableNumber' => $request->tableno,
            'AddedBy' => Auth::user()->id,
        ]);

        Alert::success('Successfully', 'Table details created successfully.');
        return to_route('managetable');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restable $restable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restable $restable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestableRequest $request, Restable $restable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $restable = Restable::find($id);

        $restable->delete();

        Alert::success('Successfully', 'Table details deleted successfully.');
        return back();
    }
}
