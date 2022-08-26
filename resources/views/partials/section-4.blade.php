<h1>les hommes en condition</h1>
@foreach ($hommesEnCondition as $homme)
{{-- @if (($membre -> genre == "Homme")&& ($membre -> age >= 18 && $membre -> age <= 24))
 {{$membre -> nom}}
@endif --}}
{{$homme -> nom}}
@endforeach
