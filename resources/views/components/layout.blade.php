<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presto.it</title>
</head>
<body>

    <x-navbar/>
    
    <div class="min-vh-100">
        {{$slot}}
    </div>

    <x-footer/>
</body>
</html>