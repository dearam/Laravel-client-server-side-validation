@extends('app')
@section('table')
    @if ($errors->has('name'))
        <span class="errormsg">{{ $errors->first('name') }}</span>
    @endif
    <div class="title"><h2>Contact us Today!</h2></div>
    <div class="form-content">
        <form class="mainform" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-content">
                <h3 class="input-title" id="firstname">First Name</h3>
                <label  class="input-box">
                    <input id="input-firstname" class="i-box" name="first_name" type="text" placeholder="First Name"/>
                    <span id="emptyfirst" class="emptyfirst"></span>
                </label>
            </div>
            <div class="input-content">
                <h3 class="input-title" id="lastname">Last Name</h3>
                <label  class="input-box">
                    <input id="input-lastname" class="i-box" name="last_name" type="text" placeholder="Last Name"/>
                    <span id="emptylast" class="emptylast"></span>
                </label>
            </div>

            <div class="input-content">
                <h3 class="input-title" id="email">E-mail</h3>
                <label class="input-box">
                    <input id="input-email" class="i-box" name="email" type="text" placeholder="E-mail"/>
                    <span id="emptyemail" class="emptymail"></span>
                </label>
            </div >

            <div class="input-content">
                <h3 class="input-title" id="number">Phone #</h3>
                <label class="input-box">
                    <input class="i-box" id="input-number" name="phonenumber" type="number" placeholder="enter mobile number"/>
                    <span id="emptynumber" class="emptynumber"></span>
                </label>
            </div>

            <div class="input-content">
                <h3 class="input-title" id="date-of-birth">DOB</h3>
                <label class="input-box">
                    <input id="input-date-of-birth" class="i-box" type="date"/>
                </label>
            </div>


            <div class="input-content">
                <h3 class="input-title" id="address">Address</h3>
                <label class="input-box">
                    <input type="text" id="input-address" name="address" placeholder="Enter Location" class="i-box"></input>
                </label>
            </div>

            <div class="input-content">
                <h3 class="input-title" id="profile">Profile Image</h3>
                <label>
                    <input id="input-profile" type="file" name="image" accept="image/jpg,image/jpeg,image/png">
                </label>
            </div>

            <button type="submit" id="submit" name="submit" value="formsubmition">Send</button>

        </form>
    </div>
@endsection
