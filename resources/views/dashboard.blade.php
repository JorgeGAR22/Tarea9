@extends('adminlte::page')

@section('title', 'Dashboard - Halcon')

@section('content_header')
    <h1>Dashboard de Órdenes</h1>
@stop

@section('content')
    <p>Bienvenido al panel de administración de Halcon.</p>
    <div class="row">
        <div class="col-md-6">
            <x-adminlte-card title="Usuarios" theme="info" icon="fas fa-users" collapsible>
                Aquí podrás gestionar todos los usuarios del sistema.
                <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm float-right">Ver Usuarios</a>
            </x-adminlte-card>
        </div>
        <div class="col-md-6">
            <x-adminlte-card title="Órdenes" theme="success" icon="fas fa-boxes" collapsible>
                Gestiona todas las órdenes de tus clientes.
                <a href="{{ route('orders.index') }}" class="btn btn-success btn-sm float-right">Ver Órdenes</a>
            </x-adminlte-card>
        </div>
    </div>
    {{-- Puedes añadir más contenido aquí, como estadísticas o resúmenes --}}
@stop

@section('css')
    {{-- Agrega CSS personalizado si es necesario --}}
@stop

@section('js')
    {{-- Agrega JS personalizado si es necesario --}}
@stop
