@extends('enseignant.enseignant')
@section('title','Liste des cours')
@section('content')
    <div class="container me-auto w-75">
        <div class="container w-75 my-3 d-flex justify-content-between align-item-center">
            <h4>@yield('title')</h4>
            <a href="{{ route('enseignant.cours.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
        </div>
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Déscription</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cours as $cour)
                    <tr>
                        <td>{{ $cour->libelle }}</td>
                        <td>{{ $cour->describ }}</td>
                        <td>
                            <a href="{{ route('enseignant.cours.edit',$cour) }}" class="btn btn-primary btn-sm">Editer</a>
                        </td>
                        @can('delete',$cour)
                        <td>
                            <form action="{{ route('enseignant.cours.destroy',$cour) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        <div class="container w-75 d-flex justify-content-end align-items-left">
            {{ $cours->links() }}
        </div>
@endsection
