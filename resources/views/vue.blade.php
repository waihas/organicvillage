<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Organic Village</title>

    <meta name="robots" content="noodp,noydir">
    <meta name="description" content="Cosmétiques naturels et BIO products and packs for your beauty.">
    <meta name=”keywords” content="Cosmétique, agadir, maroc, argan, soussbeauty, naturel, bio, beauty" />

    <meta property="og:title" content="Cosmétiques naturels et BIO" />
    <meta property="og:description" content="Cosmétiques naturels et BIO products and packs for your beauty." />
    <meta property="og:site_name" content="Organic Village" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://organicvillage.ma/" />
    
    <meta property="og:image" content="{{ url(asset('images/main-logo.svg')) }}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

     <!-- Fonts -->
     <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

    <body class="antialiased">

        <div id="app">
            <app></app>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>