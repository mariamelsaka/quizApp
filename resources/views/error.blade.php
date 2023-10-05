@extends ('common.master')
<link rel="stylesheet" href="{{asset("assets/css/home.css")}}">

@section('title')
    ERROR
@endsection


@section('content')
    @include('common.navbar')


<div style="height: 300px;margin-top: 130px;text-align: center;">
    <div class="card" style="background-color: tomato;">
        <div class="card-body">
            <h1>error you don't have access to this page</h1>
        </div>
    </div>
</div>

    @include('common.navbar')
@endsection
