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
        {{--<table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Déscription</th>
                    <th colspan="1">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cours as $cour)
                    <tr>
                        <td>{{ $cour->libelle }}</td>
                        <td>{{ $cour->describ }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm">S'inscrire</a>
                        </td>
                       --}}{{-- <td>
                            <a href="{{ route('enseignant.cours.edit',$cour) }}" class="btn btn-primary btn-sm">Editer</a>
                        </td>
                        <td>
                            <form action="{{ route('enseignant.cours.destroy',$cour) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>--}}{{--
                    </tr>
                @endforeach
            </tbody>
        </table>--}}

    </div>

@endsection
