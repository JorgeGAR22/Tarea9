@extends('layouts.app') {{-- Extiende la plantilla principal --}}

@section('content') {{-- Define la sección de contenido --}}
<div class="text-center">
    <h1 class="display-4">Contáctanos</h1>
    <p class="lead">Estamos aquí para ayudarte. No dudes en enviarnos un mensaje.</p>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="name" placeholder="Tu nombre">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico:</label>
                            <input type="email" class="form-control" id="email" placeholder="tu.email@ejemplo.com">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensaje:</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Escribe tu mensaje aquí"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p class="mt-4">También puedes encontrarnos en nuestras redes sociales.</p>
</div>
@endsection