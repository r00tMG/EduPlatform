@extends('etudiant.home')
@section('title','Liste de inscriptions')
@section('content')
    <div class="container me-auto w-75">
        {{--<div class="w-25 mt-5 m-auto">
            <form method="GET">
                <input name="libelle" type="text" class="form-control" value="{{ $input['libelle'] ?? '' }}" placeholder="Rechercher">
            </form>
        </div>--}}
        {{--@if(session('success'))
            <div class="w-25 m-auto alert alert-success">
                {{session('success')}}
            </div>
        @endif--}}
        <h3 class="text-center my-3">@yield('title')</h3>
        <div class="row">
            @for($i=0;$i<$cours->count();$i++)
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-title">
{{--                            <a href="{{ route('cours.show',$cours[$i]->id) }}">--}}
                                {{ $cours[$i]->libelle }}
{{--                            </a>--}}
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            @endfor
        </div>
        {{--<div class="d-flex align-items-end">
            {{ $cours->links() }}
        </div>--}}

    </div>

@endsection
