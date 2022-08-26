<h1>les membres hors condition</h1>
@foreach ($horsCondition as $horsConditions)
{{-- @if (($membre -> age < 18 || $membre -> age > 24))
 {{$membre -> nom}}
@endif --}}
{{$horsConditions -> nom}}
@endforeach
