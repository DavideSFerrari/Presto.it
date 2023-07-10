<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
                body {
                        background-image: linear-gradient(180deg, rgba(0%, 40%, 100%, 0.4), rgba(0%, 20%, 100%, 0.1));
                    }
                .footer-class:hover {
                    border-left: 1px solid black;
                    border-top: 5px solid black;
                    border-right: 1px solid black;
                    border-bottom: 1px solid black;
                    border-radius: 50%;
                    border-width: 100%;
                    transition: border 0.2s linear 0s;
                }
        </style>
    @vite(['resources/css/app.css','resources/js/app.js'])
   
  
 

    <title>Presto.it</title>
    @livewireStyles
</head>

<body>
    
    
    <x-navbar></x-navbar>
    
    <div class="min-vh-100 mt-5">
        <div>
        {{$slot}}
    </div>

    


    <x-footer/>
    @livewireScripts
</body>
</html>