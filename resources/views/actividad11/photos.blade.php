@extends('layouts.app') {{-- Extiende la plantilla principal --}}

@section('content') {{-- Define la sección de contenido --}}
<div class="text-center">
    <h1 class="display-4">Nuestra Galería de Fotos</h1>
    <p class="lead">Aquí te mostramos algunas de nuestras mejores capturas.</p>
    <div class="row mt-4">
        <div class="col-md-4 mb-4">
            <img src="https://placehold.co/400x300/E0BBE4/FFFFFF?text=Foto+1" class="img-fluid rounded shadow-sm" alt="Foto 1">
            <p class="mt-2">Paisaje Urbano</p>
        </div>
        <div class="col-md-4 mb-4">
            <img src="https://placehold.co/400x300/957DAD/FFFFFF?text=Foto+2" class="img-fluid rounded shadow-sm" alt="Foto 2">
            <p class="mt-2">Naturaleza Viva</p>
        </div>
        <div class="col-md-4 mb-4">
            <img src="https://placehold.co/400x300/FFC72C/FFFFFF?text=Foto+3" class="img-fluid rounded shadow-sm" alt="Foto 3">
            <p class="mt-2">Retrato Abstracto</p>
        </div>
    </div>
    <p class="mt-4">Esperamos que disfrutes de nuestra colección.</p>
</div>
@endsection