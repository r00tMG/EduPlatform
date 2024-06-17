<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>@yield('titre')</title>
</head>
<body>

<div class="w-75 m-auto mt-5">
    @include('shared.navtab')
</div>

@if(session('success'))
    <div class="w-25 m-auto alert alert-success">
        {{session('success')}}
    </div>
@endif
@if($errors->any() !==false)
    <div class="alert alert-danger">
        <ul class="my-0">
            @foreach($errors->all() as $errors)
                <li>{{$errors}}</li>
            @endforeach
        </ul>
    </div>
@endif
@yield('content')


</body>
</html>
