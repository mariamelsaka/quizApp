<!-- navbar start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li id="logo">
                    <!-- <a href="https://www.linkedin.com/in/mariam-elsaka-7a0138218/"> -->
                    <img
                        src="{{asset('assets/img/admin/appique-logo122-01-removebg-preview.png')}}"
                        width="30%" alt />
                    <!-- </a> -->
                </li>
                <li id="sitename"><p>Quiz Maker</p></li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard">dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/addquiz">add Quiz</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page"--}}
{{--                       href="/home">user's Home</a>--}}
{{--                </li>--}}

                <button type="button" id="logout" class="btn">  <a href="/login">LogOut</a> </button>

            </ul>
        </div>
    </div>
</nav>
<!-- navbar end -->
