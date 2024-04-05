<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tailwindcss</title>
</head>
<body>
    <div class="container mx-auto py-12">
        {{-- <div class="grid grid-cols-4 gap-4">
            rows es para filas y col para columnas, col-start es para decir desde que columna comienza, 
            el gap es para darles espacios entre columnas, 
            md:grid-cols-2 es para decir que en tamaño mediano ocupe 2 columnas y asi con los demas tamaños(sm,md,lg)
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400 col-span-2 row-span-2">C</div> 
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div> 
        </div> --}}
        {{-- <div class="grid grid-flow-col grid-rows-3">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div> --}}

        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2">
                <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/ubbE6gyBf8k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="bg-red-400 aspect-video"></div>
            </div>
            <div class="col-span-1 bg-blue-200">

            </div>
        </div>
    </div>
</body>
</html>