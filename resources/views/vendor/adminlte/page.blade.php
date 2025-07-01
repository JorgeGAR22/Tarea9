{{--
|--------------------------------------------------------------------------
| AdminLTE Page Template
|--------------------------------------------------------------------------
|
| This file is the main template for AdminLTE pages.
| It's being modified to ensure the correct sidebar is included.
|
--}}

@extends('adminlte::master')

@section('body')
    <div class="wrapper">

        {{-- Top Navbar --}}
        @include('adminlte::partials.navbar.navbar')

        {{-- Left Sidebar --}}
        {{-- ¡CORRECCIÓN! Incluimos 'left-sidebar' en lugar de 'sidebar' --}}
        @include('adminlte::partials.sidebar.left-sidebar') 

        {{-- Content Wrapper --}}
        <div class="content-wrapper">
            {{-- Content Header --}}
            @hasSection('content_header')
                <div class="content-header">
                    <div class="container-fluid">
                        @yield('content_header')
                    </div>
                </div>
            @endif

            {{-- Main Content --}}
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        {{-- Right Sidebar --}}
        @hasSection('right-sidebar')
            @include('adminlte::partials.right-sidebar.right-sidebar')
        @endif

        {{-- Main Footer --}}
        {{-- Forzamos la inclusión del footer aquí (código del paso anterior) --}}
        @include('adminlte::partials.footer.footer') 

        {{-- Control Sidebar --}}
        @hasSection('control-sidebar')
            @yield('control-sidebar')
        @endif

    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @include('adminlte::plugins', ['type' => 'js'])
    @yield('js')
@stop

@section('adminlte_css')
    @stack('css')
    @include('adminlte::plugins', ['type' => 'css'])
    @yield('css')
@stop
