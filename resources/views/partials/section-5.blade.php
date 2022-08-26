<h1>les femmes en condition</h1>
@foreach ($femmesEnCondition as $femme)
{{-- @if (($membre -> genre == "Femme")&& ($membre -> age >= 18 && $membre -> age <= 24))
 {{$membre -> nom}}
@endif --}}
{{$femme -> nom}}
@endforeach
