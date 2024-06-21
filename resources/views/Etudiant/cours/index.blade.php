@extends('etudiant.home')
@section('title','Liste des cours')
@section('content')
    <div class="container me-auto w-75">
        <div class="w-25 mt-5 m-auto">
        <form method="GET">
            <input name="libelle" type="text" class="form-control" value="{{ $input['libelle'] ?? '' }}" placeholder="Rechercher">
        </form>
        </div>
        @if(session('success'))
            <div class="w-25 m-auto alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <h3 class="text-center my-3">@yield('title')</h3>
        <div class="row">
            @forelse($cours as $cour)
                <div class="col-md-3">
                    @include('shared.card')
                </div>
                @empty
                    <div class="alert alert-danger">
                        <p class="text-center">Aucun élément ne corresponde à cette recherche</p>
                    </div>
            @endforelse
        </div>
        <div class="d-flex align-items-end">
            {{ $cours->links() }}
        </div>
    </div>

@endsection
