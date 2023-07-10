@vite(['resources/css/app.css','resources/js/app.js'])

    <div class="container">
        <h1>L'utente {{$user->name}} ha richiesto di lavorare con noi</h1>
        <h2>Ecco i suoi dati</h2>
        <p>Nome: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        <p>Se vuoi renderlo revisore clicca qui:</p>
        <a class="btn anim2" href="{{route('make.revisor',compact('user'))}}">Rendi revisore</a>
    </div>
    
