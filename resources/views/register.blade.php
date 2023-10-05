@extends ('common.master')
<link rel="stylesheet" href="{{asset("assets/css/register.css")}}">

@section('title')
    Register
@endsection


@section('content')

<div class="row">

    <div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xl-12">
        <img src="{{asset("assets/img/user/colorful-party-plates.jpg")}}"  class="mask" alt="">
    </div>
    <div class="container" style="    width: 50%;
    margin-left: 25%;">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div id="hello" class="col-6 col-md-6 col-lg-6 col-sm-6 col-xl-6">
                        <h5 class="card-title">Create An Account</h5>
                    </div>
                    <div id="smile" class="col-6 col-md-6 col-lg-6 col-sm-6 col-xl-6">
                        <img src="{{asset("assets/img/admin/appique-logo122-01-removebg-preview.png")}}" alt="">
                    </div>
                </div>
                <form action={{ url('registerRequest') }} method="post">
                    @csrf


                    <div class="form-group">
                        <label for="user_name" class="form-label">user name</label>
                        <div class="input-group has-validation">

                            <input type="text"name="user_name" placeholder="Enter your user name" class="form-control"
                                   id="user_name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email address</label>

                            <input type="text" name="email" placeholder=" Enter email" class="form-control"
                                   id="email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>


                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group has-validation">

                            <input type="password"name="password" class="form-control"
                                   placeholder="enter Password" id="password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="year_of_birth" class="form-label">year of birth</label>
                        <div class="input-group has-validation">
                            <input type="number"name="year_of_birth" placeholder="year of birth" class="form-control"
                                   id="year_of_birth" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="form-label">address</label>

                            <input type="text"name="address" class="form-control"
                                   placeholder="enter your address" id="address" required>

                    </div>

                    <div class="form-group">
                        <label for="gender" class="form-label">gender </label>

                            <input type="text"name="gender" class="form-control" placeholder="male-female"
                                    required>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">phone number</label>

                            <input type="number"name="phone" class="form-control" placeholder="enter your phone number"
                                   id="phone" required>

                    </div>

                    <input type="int"name="role" hidden value="3">


                    <span style="margin-right: 10px;position:relative;top:20px;">already hava an account!!</span>
                    <a href="/login" style="color: #FF6D2C;position:relative;top:20px;">sign in</a>

                    <button id="but2" name="register" type="submit" class="btn btn-primary">Submit</button>


                </form>
            </div>
        </div>
    </div>
</div>

@endsection
