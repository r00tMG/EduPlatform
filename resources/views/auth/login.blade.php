@extends('enseignant.enseignant')
@section('title','Se connecter')
@section('content')
    <div class="container mt-5 w-50">
        <h3 class="text-center">@yield('title')</h3>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            @include('shared.input',['name' => 'email', 'type' => 'email'])
            @include('shared.input',['name' => 'password', 'type' => 'password'])
            <div class="text-center mt-2">
                <button class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>
@endsection
