@extends('enseignant.enseignant')
@section('title',$cour->exists ? 'Editer un cours' : 'Ajouter un cours')
@section('content')
    <div class="container @shadow w-75 m-auto p-5">
        <h3 class="text-center ">@yield('title')</h3>
        <form
            class="vstack gap-2 "
            action = "{{ route($cour -> exists ? 'enseignant.cours.update' : 'enseignant.cours.store',$cour) }}"
            method="POST"
        >
            @csrf
            @method($cour->exists ? 'PUT' : 'POST')

            <div class="row">
                @include('shared.input',['name' => 'libelle', 'value' => $cour->libelle])
            </div>
            <div class="row">
                @include('shared.input',['name' => 'describ', 'value' => $cour->describ])
            </div>

            <div class="container text-center">
                <button class="btn btn-outline-primary" type="submit">
                    {{ $cour->exists ? 'Modifier' : 'Créer' }}
                </button>
            </div>
        </form>
    </div>
@endsection
