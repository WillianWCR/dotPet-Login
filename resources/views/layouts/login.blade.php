@extends('layouts.app')

@section('content')
<div class="container row">
    <div class="sidebar col-7" style="background-image: url('{{ asset('/img/background-image.jpeg') }}')">
        <div class="logo">
            <img src="{{ asset('/img/logo-white.png') }}" alt="Logo dotpet White">
        </div>
        <div class="footer">
            <span>Feito com 💗 por Equipe dotpet.</span>
        </div>
    </div>
    <div class="content col-5">
        <div class="logo">
            <img src="{{ asset('/img/logo-color.png') }}" alt="Logo dotpet White">
        </div>
        @yield('form')
        <div class="footer">
            @yield('footer')
        </div>
    </div>
</div>
@endsection