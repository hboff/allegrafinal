
    @php
    $i=0;
    @endphp
    @foreach($orteDE as $orte)
    @if ($i++ < 50)
    <a class="link-dark" href="/{{$orte->ort}}/immobilienbewertung">Immobilienbewertung {{$orte['ort']}}</a>
    @else
    @endif
    @endforeach
