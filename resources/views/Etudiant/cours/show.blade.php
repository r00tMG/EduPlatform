@extends('etudiant.home')
@section('title','Consultation du cours: '.$cour->libelle.' ')
@section('content')
    <div class="container me-auto w-75">
        <h3 class="text-center my-5 text-decoration-underline">@yield('title')</h3>
        <div class="row">
                <h4>Libellé : {{ $cour->libelle }}</h4>
                <p>Description: {{ $cour->describ }}</p>
        </div>
        <hr class="my-5">
        <div class="w-75 border shadow p-5 m-auto">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @else
                <h3>S'inscrire</h3>

                <form action="{{ route('cours.inscrire',$cour->id) }}" method="POST">
                    @csrf
                    @include('shared.input',['name' => 'user','class' => 'col' ,'type' => 'hidden','label'=>'User', 'value'=>Auth::user()->email])
                    <div class="row">
                        @include('shared.input',['name' => 'firstname','class' => 'col' ,'type' => 'text','label'=>'Prenom', 'value'=>'John'])
                        @include('shared.input',['name' => 'lastname','class' => 'col' , 'type' => 'text','label'=>'Nom','value'=>'Doe'])
                    </div>
                    <div class="row">
                        @include('shared.input',['name' => 'email','class' => 'col' ,'type' => 'email','label'=>'Email','value'=>'john@doe.com'])
                        @include('shared.input',['name' => 'phone','class' => 'col' , 'type' => 'text','label'=>'Phone','value'=>'07 73 63 85 84'])
                    </div>
                    <div class="row">
                        @include('shared.input',['name' => 'describ','class' => 'col' ,'type' => 'text','label'=>'Message','value'=>'Mon message'])
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-sm">S'inscrire</button>
                    </div>
                </form>
            @endif

        </div>



    </div>

@endsection
