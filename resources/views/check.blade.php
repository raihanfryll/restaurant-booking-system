@extends('layouts.user', ['title' => 'Table Booking Form'])

@section('content')
    <form action="{{ route('search') }}" method="post">
        @csrf
        @method('POST')

        <div class="personal">

            <div class="main">
                <div class="form-left-w3l">

                    <input type="text" class="top-up" name="searchdata" placeholder="Search by booking no or contact no"
                        required="">
                </div>

            </div>



            <div class="btnn">
                <input type="submit" value="Search" name="submit">
            </div>
            <div class="copy">
                <p>Check Booking <a href="{{ route('check') }}">Status</a></p>
            </div>
            <div class="copy">
                <p>Admin Panel<a href="/login"> Login here</a></p>
            </div>
    </form>
@endsection
