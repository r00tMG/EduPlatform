@extends('etudiant.home')
@section('title','Bienvenu sur votre page d\'accueil EduPlateForme')
@section('content')
    <div class="shadow m-5 p-5">
        <h3 class="text-center my-3">@yield('title')</h3>
        <p class="text-center">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
            "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</p>
    </div>
    <div class="container me-auto w-75">
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
