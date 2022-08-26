@extends('layouts.app')

@section('content')
    @if (!$carts->isEmpty())
        <cart-items :carts="{{ $carts }}" />
    @else
        <p class="text-danger text-center">Sin Productos</p>
    @endif
@endsection
