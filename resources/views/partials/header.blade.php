<header class="head">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Boolean logo">
    </div>

    <ul class="menu">
    <li class="home {{ Request::route()->getName() == 'Home' ? 'active' : '' }}"> <a href="{{ route('Home') }}">Home</a></li>
        <li>Corso</li>
        <li>Dopo il Corso</li>
        <li>Lezione Gratuita</li>
        <li>Assumi i nostri Studenti</li>
        <li><button>Candidati ora</button></li>
    </ul>
</header>