<style>
    @layer reset {
        button {
            all: unset;
        }
    }
</style>
<ul class="nav nav-tabs">

    <li class="nav-item">
        <a class="nav-link @if(request()->route()->getName() == 'etudiant.cours.accueil') active @endif " href="{{route('etudiant.cours.accueil')}}">Home</a>
    </li>
    <li class="nav-item me-auto">
        <a class="nav-link @if(request()->route()->getName() == 'etudiant.cours.index') active @endif " aria-current="page" href="{{ route('etudiant.cours.index') }}">Cours</a>
    </li>
    <li class="nav-item">
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="nav-link">Se deconncter</button>

            </form>
        @endauth
    </li>

</ul>
