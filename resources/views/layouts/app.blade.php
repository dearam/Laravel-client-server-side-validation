<html lang="en">
<head>
    <title>form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/jquery-3.6.2.js') }}"></script>
</head>
<body>
{{--    @yield('content')--}}
    <div class="title"><h2>Contact us Today!</h2></div>
    <div class="form-content">
        <form class="mainform" action="dataInsert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-content">
                <h3 class="input-title" id="firstname">First Name</h3>
                <label  class="input-box">
                    <input id="input-firstname" class="i-box" name="name" type="text" placeholder="First Name"/>
                    <span id="emptyfirst" class="emptyfirst"></span>
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
                <h3 class="input-title" id="address">Location</h3>
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
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
