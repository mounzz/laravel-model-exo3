
<div>tous les membres: {{$generalCount}}.</div>

<div style="display: grid; grid-template-columns: repeat(2, 1fr);">
@foreach ($membres as $membre)
@if ($membre -> genre == "Femme")
 <div style="color:pink;grid-column-start: 1;">{{$membre -> nom}}</div>
@else
<div style="color:blue;grid-column-start: 2;">{{$membre -> nom}}</div>
@endif
@endforeach
</div>
