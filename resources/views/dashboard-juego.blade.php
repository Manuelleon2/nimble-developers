<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            Dashboard Prueba
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Codigo Aleatorio</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="nombre" id="nombre" disabled value="{{ $azar }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>

    </html>
</x-app-layout>
