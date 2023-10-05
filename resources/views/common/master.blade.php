<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- normalize css -->
    <link rel="stylesheet" href="{{asset("assets/css/normalize.css")}}" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}" />
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{asset("assets/css/all.min.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css.map")}}" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <title>
        @yield('title')
    </title>
    <link rel="icon" type="image/x-icon"
          href="{{asset("assets/img/admin/Rectangle_1__1_-removebg-preview.png")}}" />
</head>
<body>

@yield('content')


<!-- bootstrap js -->
<script src=" {{asset("assets/")}} js/bootstrap.bundle.min.js"></script>
<!-- font awesome js -->
<script src="{{asset("assets/js/all.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/js/all.min.js")}}"></script>
<script type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
