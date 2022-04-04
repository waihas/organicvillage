@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>{{ config('app.name') }}</title>
        
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

        <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}">
    </head>
    <body>
        <div id="app"></div>

        <script>
            window.config = @json($config);
        </script>

        {{-- Load the application scripts --}}
        <script src="{{ mix('dist/js/app.js') }}"></script>
    </body>
</html>