<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
        <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
        <style>
                body {
                        background-image: linear-gradient(180deg, rgba(0%, 40%, 100%, 0.4), rgba(0%, 20%, 100%, 0.1));
                    }
        </style>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Presto.it</title>
    @livewireStyles
</head>

<body>
    
    
    <x-navbar></x-navbar>
    
    <div class="min-vh-100">
        {{$slot}}
    </div>


    <x-footer/>
    @livewireScripts
</body>
</html>