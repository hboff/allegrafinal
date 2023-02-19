@extends('layout')
@section('content')
@php
$i=0;
    @endphp
    @foreach($orteDE as $ort)
    @if($ort->bundesland == $ortsname)
    <a class="footer__link" href="/{{$ort->ort}}/immobilienbewertung">Immobilienbewertung {{$ort['ort']}}</a><br>
    @else
    @endif
    @endforeach

@endsection