@switch($status)
@case('de')
    @php
    $i=0;
    @endphp
    @foreach($ort as $orte)
    @if ($i++ < 50)
    <a class="link-dark" href="/{{$orte->stadt_umlaut}}/immobilienbewertung">Immobilienbewertung {{$orte['stadt_lang']}}</a>
    @else
    @endif
    @endforeach
@break
 
@case('at')
    @php
    $i=0;
    @endphp
    @foreach($ortat as $orte)
    @if ($i++ < 50)
    <a class="link-dark" href="/{{$orte->ort}}/immobilienbewertung">Immobilienbewertung {{$orte['ort']}}</a>
    @else
    @endif
    @endforeach
@break
 
@default

@endswitch