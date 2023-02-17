@extends('layout')
@section('content')
@php
$i=0;
    @endphp
    @foreach($city_data as $ort)
    @if ($i++ < 50)
    <a class="footer__link" href="/{{$ort->stadt_umlaut}}/immobilienbewertung">Immobilienbewertung {{$ort['stadt']}}</a><br>
    @else
    @endif
    @endforeach

@endsection