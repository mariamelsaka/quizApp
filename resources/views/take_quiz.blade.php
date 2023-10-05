@extends ('common.master')
<link rel="stylesheet" href="{{asset("assets/css/take_quiz.css")}}">

@section('title')
    Take Quiz
@endsection


@section('content')

{{--    @include('common.navbar')--}}
<!-- navbar start -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav" id="nav22">
            <ul class="navbar-nav">
                <li id="logo">

                    <img
                        src="{{asset("assets/img/admin/appique-logo122-01-removebg-preview.png")}}"
                        width="30%" alt />

                </li>
                <li id="sitename"><p>Quiz Maker</p></li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                       href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/take_quiz">Take Quiz</a>
                </li>

                <button type="button" id="logout" class="btn">  <a href="/login">LogOut</a> </button>

            </ul>
        </div>
    </div>
</nav>

<!-- navbar end -->
<div class="parent">

    <div class="container">
        <div class="card">
            <h1>question title</h1>
            <div class="card-body" class="quiz">
                <h3 id="question">question is here</h3>
                <div id="answer-buttons">
                    <button class="Btn" >Answer 1</button>
                    <button class="Btn" >Answer 2</button>
                    <button class="Btn" >Answer 3</button>
                    <button class="Btn" style="margin-bottom: 40px;">Answer 4</button>
                </div>
                <button class="btn" id="next-btn">Next</button>
            </div>
        </div>

    </div>

</div>


<!-- footer start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav" id="nav22">
            <ul class="navbar-nav">
                <li id="logo">

                    <img
                        src="{{asset("assets/img/admin/appique-logo122-01-removebg-preview.png")}}"
                        width="30%" alt />

                </li>
                <li id="sitename"><p>Quiz Maker</p></li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                       href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/take_quiz">Take Quiz</a>
                </li>

                <button type="button" id="logout" class="btn">LogOut</button>

            </ul>
        </div>
    </div>
</nav>
<!-- footer end -->



    <script src="{{asset("assets/js/quiz_script.js")}}"></script>

@endsection
