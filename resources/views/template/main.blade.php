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
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonimous" referrerpolicy="no-referrer"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">

    <title>Presto.it</title>
    @livewireStyles
</head>

<body>
    
    
    <x-navbar></x-navbar>
    
    <div class="min-vh-100 mt-5">
        {{$slot}}
    </div>




    <x-footer/>
    @livewireScripts
</body>
</html>