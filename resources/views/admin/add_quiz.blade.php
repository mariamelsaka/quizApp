@extends ('common.master')
<link rel="stylesheet" href="{{asset("assets/css/add quiz.css")}}">

@section('title')
    Add quiz
@endsection


@section('content')

    @include('admin.common.navbar')
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
                        <h5 class="card-title">add quiz</h5>
                    </div>
                    <div id="smile" class="col-6 col-md-6 col-lg-6 col-sm-6 col-xl-6">
                        <img src="{{asset("assets/img/admin/appique-logo122-01-removebg-preview.png")}}" alt="">
                    </div>
                </div>
                <form method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">question name</label>
                        <input type="text" name="questionName" class="form-control" id="user_name" aria-describedby="" placeholder="Enter question name">
                    </div>
                    <div class="form-group">
                        <label for="">answer</label>
                        <input type="text" name="answer" class="form-control" id="first_name" aria-describedby="" placeholder="Enter the answer">
                    </div>

                    <button id="but2" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
