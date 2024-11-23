<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
    <p>{{ $title }}</p>
    <p>demo with alpine js</p>

    <div x-data="data">
        <p x-text="message"></p>
        <p x-text="date"></p>
    </div>

    <script>
       
        const data = {
            
            message: 'Hello from Alpine.js',
            date: '15 nov 2024',
           
                 
        }
    </script>
</body>
</html>