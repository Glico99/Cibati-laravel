<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap">
    @vite('resources/css/locationStyle.css')
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <header>
        <div id="logo">
            <a href="{{route('home')}}"><img src="{{ Vite::asset('resources/imgs/logocibati-removebg-preview.png') }}"
                    alt="logo"></a>
        </div>
        <div id="titolo">
            <h1>Cibati</h1>
            <h2>Solo carne cresciuta nei nostri pascoli</h2>
        </div>
    </header>
    <main>
        <div class="presentazione">
            <img src="{{Vite::asset('resources/imgs/pimonte.jpg')}}" alt="pimonte">
            <div>
                <h2>Il luogo</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis laboriosam maxime est sunt quam?
                    Dolores earum vitae amet nam modi iusto ratione autem, quo ut beatae, odio adipisci, repudiandae
                    nemo!
                </p>
            </div>
        </div>
        <div class="presentazione">
            <img src="{{Vite::asset('resources/imgs/interno.jpg')}}" alt="interno">
            <div>
                <h2>Le sale</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis laboriosam maxime est sunt quam?
                    Dolores earum vitae amet nam modi iusto ratione autem, quo ut beatae, odio adipisci, repudiandae
                    nemo!
                </p>
            </div>
        </div>
        <h1><a href="#" id="via">Via .......................</a></h1>
    </main>
    <footer class="utili">
        <div>
            <a href="{{route('menu')}}" class="buttons"><button>Menu</button></a>
            <a href="{{route('prenota')}}" class="buttons"><button>Prenota</button></a>
        </div>
    </footer>
</body>

</html>