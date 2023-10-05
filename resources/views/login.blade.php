@extends ('common.master')
<link rel="stylesheet" href="{{asset("assets/css/login.css")}}">

@section('title')
    Login
@endsection


@section('content')
<div class="row">

    <div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xl-12">
        <img src="{{asset("assets/img/user/colorful-party-plates.jpg")}}"  class="mask" alt="">
    </div>
    <div class="container" style="width: 50%; margin-left: 25%">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div id="hello" class="col-6 col-md-6 col-lg-6 col-sm-6 col-xl-6">
                        <h5 class="card-title">Hello ,Welcome</h5>
                    </div>
                    <div id="smile" class="col-6 col-md-6 col-lg-6 col-sm-6 col-xl-6">
                        <img src="{{asset("assets/img/admin/appique-logo122-01-removebg-preview.png")}}" alt="">
                    </div>
                </div>

                <form  method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="form-label">Email address</label>
                        <div class="input-group has-validation">
                            <input type="text" name="email" class="form-control" placeholder="Enter email" id="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group has-validation">
                            <input type="password"name="password" placeholder="enter Password" class="form-control"
                                   id="password" required>
                        </div>
                    </div>


                    <button id="but2" type="submit" name="login" class="btn btn-primary" style="position: relative;top:30px"> Submit </button>-

                                        <span >you don't have account?</span>
                                        <a href="/register" style="color: #FF6D2C;">sign up</a>

                </form>

            </div>
        </div>
    </div>
</div>


@endsection
