<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap">
    @vite('resources/css/prenotaStyle.css')
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <header>
        <div id="logo">
            <a href="{{route('home')}}"><img src="{{ Vite::asset('resources/imgs/logocibati-removebg-preview.png') }}" alt="logo"></a>
        </div>
        <div id="titolo">
            <h1>Cibati</h1>
            <h2>Prenota per un'esperienza esclusiva</h2>
        </div>
    </header>

    <main>
        <form action="#" method="post" id="prenotazione">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Inserisci qui il tuo nome">
            </div>
            <div>
                <label for="cognome">Cognome</label>
                <input type="text" name="cognome" id="cognome" placeholder="Inserisci qui il tuo cognome">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="emai" id="email" placeholder="Inserisci qui la tua email">
            </div>
            <div>
                <label for="tavolo">Numero di persone al tavolo:</label>
                <input type="number" name="tavolo" id="tavolo" placeholder="1">
            </div>
            <div>
                <label for="data">Data prenotazione</label>
                <input type="date" name="data" id="data">
            </div>
            <div class="buttons">
            <input type="submit" value="Procedi al pagamento">
            </div>
        </form>
    </main>
    <footer class="utili">
        <div>
            <a href="{{route('menu')}}" class="buttons"><button>Menu</button></a>
            <a href="{{route('location')}}" class="buttons"><button>Location</button></a>
        </div>
    </footer>
</body>

</html>