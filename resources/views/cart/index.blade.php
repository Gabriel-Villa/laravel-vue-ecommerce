@extends('layouts.app')

@section('content')
    @if (!$carts->isEmpty())
        <cart-items :carts="{{ $carts }}" />
    @else
        <td colspan="5">Sin Productos</td>
    @endif
@endsection
