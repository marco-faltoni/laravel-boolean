<header class="head">
    <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="Boolean logo"></a>
    </div>

    <ul class="menu">
    <li class="home {{ Request::route()->getName() == 'home' ? 'active' : '' }}"> <a href="{{ route('home') }}">Home</a></li>
        <li>Corso</li>
        <li>Dopo il Corso</li>
        <li>Lezione Gratuita</li>
        <li>Assumi i nostri Studenti</li>
        <li><button>Candidati ora</button></li>
    </ul>
</header>