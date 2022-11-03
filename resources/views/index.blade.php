<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <title>Test App</title>
    <style>

    </style>
</head>
<body style="position: relative">
<div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center vh-100">
                            @include('login')
          </div>
    </div>
    <div style="position: absolute; bottom: 0">
        <div class='toggle-switch py-2'>
            <label class="switch-label">
                <input class="checkbox" type='checkbox'>
                <span class='slider'></span>
            </label>
        </div>
        {{--        <img src="{{URL::asset('images/vector-light.png')}}" class="vw-100" alt="">--}}
        <img src="{{URL::asset('images/vector-dark.png')}}" class="vw-100" alt="">
    </div>
</div>
</body>
</html>
