@extends('auth.extend')
@section('title','S\'inscrire')
@section('content')
    <div class="container mt-5 w-50">
        <h3 class="text-center">@yield('title')</h3>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            @include('shared.input',['name' => 'email', 'type' => 'email','value' => 'email@gmail.com'])
            @include('shared.input',['name' => 'password', 'type' => 'password','value' => 'password'])
            <div class="text-center mt-2">
                <button class="btn btn-primary">Login</button>
            </div>
            <p class="mt-3">Si vous n'êtes pas inscrites, <a href="{{route('register')}}">Cliquez Ici</a></p>
        </form>
    </div>
@endsection
