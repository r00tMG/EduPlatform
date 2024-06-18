@extends('etudiant.home')
@section('title','Liste des cours')
@section('content')
    <div class="container me-auto w-75">
        <h3 class="text-center my-3">@yield('title')</h3>
        <div class="row">
            @foreach($cours as $cour)
                <div class="col">
                    @include('shared.card')
                </div>
            @endforeach
        </div>


    </div>

@endsection
