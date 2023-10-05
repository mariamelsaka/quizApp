@extends ('common.master')
<link rel="stylesheet" href="{{asset("assets/css/home2.css")}}">

@section('title')
    Dashboard
@endsection


@section('content')

@include('admin.common.navbar')
<!-- start questions -->
<div id="questions">

    <div class="row">
        <h2 id="qustionlist">question's list</h2>
        @foreach($questions as $question)
{{--                @if($blog->blog_img and $blog->blog_iframe !==Null)--}}

            <div class="col-4" >
                <div class="card" >
                    <div class="card-body">

                        <p>{{$question->questionName}}</p>
                        <p>{{$question->answer}}</p>

{{--                        <p>question 1 Lorem ipsum dolor sit amet.</p>--}}
{{--                        <p>question 1 Lorem ipsum dolor sit amet.</p>--}}
                    </div>
                </div>
            </div>

{{--            @endif--}}


        @endforeach
    </div>

</div>
<!-- end questions -->
<!-- header start -->
<div class="header" class="container">
    <div class="row">
        <div class="col-6 col-lg-6" id="headd1">
            <h1 style="line-height: 0px;">
                Take a simple
            </h1>
            <h1 id="quiz_head">Quiz
                <h1 style="display: inline;">in Different topics to</h1>
            </h1>
            <h1 style="line-height: 20px;margin-bottom: 40px;">increase
                your knowledge on it! .</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            <p style="line-height: 1px;">Lorem ipsum, dolor sit amet
                consectetur. </p>
            <button type="button" id="quiz_btn" class="btn">Take a Quiz</button>
        </div>

        <div class="col-6 col-lg-6" id="headd2">

        </div>
    </div>
</div>
<!-- header end -->

<!-- start main -->
<div class="main">
    <div class="row" id="main_sec1">
        <h2 id="qumk">Quiz maker is a</h2>
        <h2 id="life">Life Changer</h2>
        <h2 id="complete">to help you, and let you know <br>
            your weakness & to be great in different skills.</h2>
    </div>
    <div class="row">
        <div class="col-6">
            <p id="txt2">grammar skill</p>
            <p style="margin-left: 50px;">Lorem ipsum dolor sit amet
                consectetur, adipisicing elit.
                <br> Ut, asperiores sequi architecto voluptatum ipsum
                accusamus!</p>
            <i class="fa fa-quote-left" id="ic2" aria-hidden="true"></i>
            <p id="icon2">Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Nihil, provident!</p>
            <p id="txt2">deal with math</p>
            <p style="margin-left: 50px;">Lorem ipsum dolor sit, amet
                consectetur adipisicing elit.
                <br>Non vero rerum, corporis accusamus sit neque.</p>
            <i class="fa fa-quote-left" id="ic2" aria-hidden="true"></i>
            <p id="icon2">Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Nihil, provident!</p>
        </div>
        <div class="col-6">
            <p id="txt3">general info skill that help you in different
                topics</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                <br>Id eius quisquam, expedita consequatur vero dolor!</p>
            <i class="fa fa-quote-left" id="ic2" aria-hidden="true"></i>
            <p id="icon3">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Culpa tempora dolore harum corporis
                nesciunt neque, assumenda, velit, provident atque id
                quae ut dolorem aut. Laborum, ducimus. Quisquam laborum
                omnis dolores?</p>
            <button type="button" style="width: 250px;" id="quiz_btn"
                    class="btn">Take a Quiz</button>
        </div>
    </div>
</div>
<!-- start main -->
<!-- start section -->
<div class="section2">
    <h1>Everything your brand needs to</h1>
    <h1 id="txt3">make your brand unforgettable</h1>
    <div class="row">
        <div class="col-4" id="one">

            <h1 id="hh1">calculation skill </h1>
            <img src="{{asset("assets/img/user/Untitled Project.jpg")}}" class="mask2"
                 alt>
        </div>
        <div class="col-4" id="two">
            <h1>english skill </h1>
            <img src="{{asset("assets/img/user/eng.jpg")}}"  height="80%" class="mask3"
                 alt>
        </div>
        <div class="col-4" id="three">
            <h1> Science skill</h1>
            <img
                src="{{asset("assets/img/user/pexels-polina-tankilevitch-3735703.jpg")}}"
                class="mask" width="200px" height="220px" alt>
        </div>
    </div>
    <div class="row">
        <div class="col-4" id="two">
            <h1>grammar skill </h1>
            <img src="{{asset("assets/img/user/eng.jpg")}}" height="80%" class="mask4"
                 alt>
        </div>
        <div class="col-4" id="one">
            <h1>Algebra skill </h1>
            <img src="{{asset("assets/img/user/Untitled Project.jpg")}}" class="mask1"
                 alt>
        </div>
        <div class="col-4" id="three2">
            <h1>general info </h1>
            <img
                src="{{asset("assets/img/user/pexels-polina-tankilevitch-3735703.jpg")}}"
                width="300px" height="250px" class="mask5" alt>
        </div>
    </div>

</div>
<!-- end section -->

<!-- section5 contact us -->

<section class="contact_us" id="contact_us">
    <div class="row">
        <div class="col-6" id="formback">

        </div>

        <div class="col-6 " id="FORM">
            <form action class="form">
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control"
                           placeholder="enter your name" />
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input
                        class="form-control"
                        placeholder="Enter Your Phone Number" />
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="form-control"
                           placeholder="Enter Your Email" />
                </div>
                <div class="form-group">
                    <label>Message</label>

                    <textarea name id style="margin-bottom: 26px;"
                              class="form-control"
                              placeholder="Enter Your Message" cols="30"
                              rows="4"></textarea>
                </div>

                <div class="form-group submit">
                    <button type="button" id="quiz_btn2" class="btn">
                        <a href="register.html" style="text-decoration: none; color:white;">Submit</a>
                    </button>

                </div>
            </form>
        </div>
    </div>
</section>
@include('admin.common.navbar')
@endsection
