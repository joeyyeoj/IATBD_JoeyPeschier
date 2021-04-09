@extends('default')

@section('content')
    <x-header></x-header>
    <ul class="grid">
        @foreach(Auth::user()->myPets as $pet)
            @foreach($pet->myAanvragen as $aanvraag)
                @if($aanvraag->acceptedByAanbieder == 0 && $aanvraag->deniedByAanbieder == 0)
                    @include('aanvraag.components.aanvraaggridCard')
                @endif
            @endforeach
        @endforeach
    </ul>
@endsection