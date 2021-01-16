@extends('template.main')
@section('title','Login')
<body class="bodylogin">
<div class="container1">
    <!-- LOGIN -->
    <h3 class="text-centre">LOGIN</h3>
    <hr>
    <form>
        <div class="form-group">
            <label>Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><img src="img/login2.png" width="24px" height="25px"></div>
                </div>
                <input type="text" name="" class="form-control" placeholder="insert Your Username">
            </div>
        </div>


        <!-- PASSWORD -->
        <div class="form-group">
            <label>Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><img src="/img/key3.png" width="24px" height="25px"></div>
                </div>
                <input type="Password" name="" class="form-control" placeholder="insert Your Password">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">SUBMIT</button>
        <button type="button" class="btn btn-success" onclick="location.href='{{url('/register')}}'"> SIGN UP</button>
    </form>
</div>
</body>
