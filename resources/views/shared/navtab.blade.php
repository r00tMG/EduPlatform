<ul class="nav nav-tabs">
    <li class="nav-item">
{{--        <a class="nav-link @if(request()->route()->getName() == 'home') active @endif " aria-current="page" href="{{ route('home') }}">Home</a>--}}
    </li>
    <li class="nav-item">
        <a class="nav-link @if(request()->route()->getName() == 'etudiant.cours.index') active @endif " href="{{route('etudiant.cours.index')}}">Cours</a>
    </li>

</ul>
