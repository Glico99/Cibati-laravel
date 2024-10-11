<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap">
    @vite('resources/css/homeStyle.css')
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <header>
        <div id="logo">
            <img src="{{ Vite::asset('resources/imgs/logocibati-removebg-preview.png') }}" alt="logo">
        </div>
        <div id="titolo">
            <h1>Cibati</h1>
            <h2>La vera qualità solo per veri ricchi</h2>
        </div>
    </header>

    <img src="{{ Vite::asset('resources/imgs/fiorentina.jpg') }}" alt="fiorentina" id="fiorentina">
    <!--Freccia presa da https://codepen.io/postor -->
    <div id="freccia">
        <svg class="arrows">
            <path class="a1" d="M0 0 L30 32 L60 0"></path>
            <path class="a2" d="M0 20 L30 52 L60 20"></path>
            <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg>
    </div>
    <!--Fine freccia-->
    <main>
        <div class="vetrina">
            <div class="imgs">
                <img src="{{Vite::asset('resources/imgs/hotel-1191725_1920_3_500x333.jpg')}}" alt="locale">
                <img src="{{Vite::asset('resources/imgs/hotel-1191725_1920_3_500x333.jpg')}}" alt="locale">
            </div>
            <h3>Vieni per la qualità, torni per il sapore</h3>
        </div>
        <div class="vetrina">
            <div class="imgs">
                <img src="{{Vite::asset('resources/imgs/hotel-1191725_1920_3_500x333.jpg')}}" alt="locale">
                <img src="{{Vite::asset('resources/imgs/hotel-1191725_1920_3_500x333.jpg')}}" alt="locale">
            </div>
            <h3>Solo il miglior personale specializzato</h3>
        </div>
    </main>
    <footer class="utili">
        <div>
            <a href="{{route('menu')}}" class="buttons"><button>Menu</button></a>
            <a href="" class="buttons"><button>Prenota</button></a>
            <a href="" class="buttons"><button>Location</button></a>
        </div>
        <p>Maggiori informazioni:</p>
        <ul class="contatti">
            <li>Tel./Fax.:555-1234567</li>
            <li>Cell.: 5551234567</li>
            <li>Email: text@test.com</li>
        </ul>
        <span>Terms and conditions</span>
    </footer>
</body>

</html>