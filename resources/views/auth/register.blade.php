@extends('auth.extend')
@section('title','Se connecter')
@section('content')
    <div class="container mt-5 w-50">
        <h3 class="text-center">@yield('title')</h3>
        <form action="{{ route('toRegister') }}" method="POST">
            @csrf
            @include('shared.input',['name' => 'name', 'type' => 'text','value' => 'name'])
            @include('shared.input',['name' => 'email', 'type' => 'email','value' => 'email@gmail.com'])
            @include('shared.input',['name' => 'password', 'type' => 'password','value' => 'password'])
            <div class="text-center mt-2">
                <button class="btn btn-primary">Registrer</button>

            </div>
            <p class="mt-3">Si vous êtes inscrites, <a href="{{route('login')}}">Cliquez Ici</a></p>
        </form>
    </div>
@endsection
