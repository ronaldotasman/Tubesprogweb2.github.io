@extends('template.main')
@section('title','Register For New Member')
<body class="body">

<div class="containerreg">
    <h2 class="alert alert-primary text-dark text-center mt-2">WELCOME OUR NEW MEMBER </h2>
    <form>



        <!-- FULLNAME -->
        <div class="form-group">
            <label for="fullname" class="mt-3">FULL NAME</label>
            <input type="text" name="" class="form-control" placeholder="insert your full name" id="fullname">
        </div>

        <!-- USERNAME -->
        <div class="form-group">
            <label for="username" class="mt-2">USERNAME</label>
            <input type="text" name="" class="form-control" placeholder="insert your username" id="username">
        </div>

        <!-- PASSWORD -->
        <div class="form-group">
            <label for="password" class="mt-2">PASSWORD</label>
            <input type="password" name="" class="form-control" placeholder="insert your password" id="password">
        </div>

        <!-- RE-ENTER PASSWORD -->
        <div class="form-group">
            <label for="re-password" class="mt-2">RE-ENTER PASSWORD</label>
            <input type="password" name="" class="form-control" placeholder="re-enter your password" id="re-password">
        </div>

        <!-- TANGGAL LAHIR -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="place" class="mt-2">PLACE</label>
                    <input type="text" name="" class="form-control" placeholder="example : bandung" id="place">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="mt-2">DATE OF BIRTH</label>
                    <input type="date" name="" class="form-control">
                </div>
            </div>
        </div>

        <button  type="submit" class="btn btn-success mt-3" >REGISTER</button>


    </form>
</div>

</body>
