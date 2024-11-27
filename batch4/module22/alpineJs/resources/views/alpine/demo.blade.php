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

        <button @click="open=false" class="click">Hide</button>
        <button @click="date=true" class="click">Show</button>

        <div x-show="open" style="height: 200px; width:500px">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla inventore maiores id? Minima, fugit voluptate quibusdam, ullam, perspiciatis asperiores similique doloribus qui alias quaerat quae.</p>
        </div>
    </div>

    <script>
       
        const data = {
            
            open:false
                 
        }
    </script>
</body>
</html>