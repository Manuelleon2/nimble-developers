<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            Modulos
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
                    <h2>Subida de Imagenes</h2>
                    @if (session('create'))
                        <br>
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                <strong>{{ session('create') }}</strong>
                            </div>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('modulos.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                                    <br>
                                    <br>
                                    <input type="file" name="file" id="" accept="image/*">
                                    <br>
                                    @error('file')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Subir Imagen</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-columns">
                        <br>
                        <div class="d-flex justify-content-between">
                            @foreach ($files as $file)
                                <div class="card mb-3" style="width: 18rem;">
                                    <img class="card-img-top" src="{{ asset($file->img) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
</x-app-layout>
