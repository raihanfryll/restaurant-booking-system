@extends('layouts.user', ['title' => 'Table Booking Form'])

@section('content')
    <form action="#" method="post" action="{{ route('booking.store') }}">
        @csrf
        @method('POST')
        <div class="personal">

            <div class="main">
                <div class="form-left-w3l">

                    <input type="text" class="top-up" name="name" placeholder="Name" required="">
                </div>
                <div class="form-left-w3l">

                    <input type="email" name="email" placeholder="Email" required="">
                </div>
                <div class="form-right-w3ls ">

                    <input class="buttom" type="text" name="phonenumber" placeholder="Phone Number" required="">
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
        <div class="information">


            <div class="main">


                <div class="form-left-w3l">
                    <input id="datepicker" name="bookingdate" type="text" placeholder="Booking Date &" required="">
                    <input type="text" id="timepicker" name="bookingtime" class="timepicker form-control hasWickedpicker"
                        placeholder="Time" required="" onkeypress="return false;">
                    <div class="clear"></div>
                </div>
            </div>

            <div class="main">

                <div class="form-left-w3l">
                    <select class="form-control" name="noadults" required>
                        <option value="">Number of Adults</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="form-right-w3ls">
                    <select class="form-control" name="nochildrens" required>
                        <option value="">Number of Children</option>
                        <option value="1">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>

        </div>


        <div class="btnn">
            <input type="submit" value="Reserve a Table" name="submit">
        </div>
        <div class="copy">
            <p>Check Booking <a href="{{ route('check') }}">Status</a></p>
        </div>
        <div class="copy">
            <p>Admin Panel<a href="/login"> Login here</a></p>
        </div>
    </form>
@endsection
