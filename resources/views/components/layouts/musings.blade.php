<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <link rel="icon" type="image/png" href="/favicon.png" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Lato:wght@300;400;700&family=Nunito:wght@400;600;700;800&family=Fraunces:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet" />
    @vite(['resources/css/musings.css', 'resources/js/musings.js'])
</head>

<body>
    {{ $slot }}
</body>

</html>
