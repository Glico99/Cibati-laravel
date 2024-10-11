<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap">
    @vite('resources/css/menuStyle.css')
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <header>
        <div id="logo">
            <a href="{{route('home')}}"><img src="{{ Vite::asset('resources/imgs/logocibati-removebg-preview.png') }}" alt="logo"></a>
        </div>
        <div id="titolo">
            <h1>Cibati</h1>
            <h2>I migliori tagli frollati 16-24 mesi</h2>
        </div>
    </header>
    <h1 class="titoloPortate" >Piatti di carne:</h1>
    <div id="portate">
        @include('piatti.piatto1')
        @include('piatti.piatto1')
        @include('piatti.piatto1')
        @include('piatti.piatto1')
        @include('piatti.piatto1')
        @include('piatti.piatto1')
        @include('piatti.piatto1')
    </div>
    <h1 class="titoloPortate" >Contorni:</h1>
    <div id="portate">
        @include('piatti.piatto1')
        @include('piatti.piatto1')
        @include('piatti.piatto1')
        @include('piatti.piatto1')
        @include('piatti.piatto1')
        @include('piatti.piatto1')
        @include('piatti.piatto1')
    </div>
    <footer class="utili">
        <div>
            <a href="" class="buttons"><button>Prenota</button></a>
            <a href="" class="buttons"><button>Location</button></a>
        </div>
    </footer>
</body>

</html>