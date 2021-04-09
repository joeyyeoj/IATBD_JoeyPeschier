@extends('default')
@section('content')
<x-header></x-header>
<article class="gridCard">
    <section class="huisdiercard__fotoholder">
        <img class="gridCard__foto" src="{{ Storage::url($huisdier->fotolocatie) }}" alt="">
    </section>
    <section class="gridCard__info">
        <h3>Naam: {{ $huisdier->naam }}</h3>
    </section>
    <section class="gridCard__info">
        <h3>Leetijd: {{ $huisdier->leeftijd }}</h3>
    </section>
    <section class="gridCard__info">
        <h3>Soort: {{ $huisdier->soort }}</h3>
    </section>
    <section class="gridCard__info">
        <h3>Eigenaar: <a href="/user/{{$huisdier->myOwner->id}}">{{ $huisdier->myOwner->name }}</a></h3>
    </section>
    <section class="gridCard__info">
        <h3>Omschrijving:</h3>
        <p>{{$huisdier->description}}</p>
    </section>
    <section class="gridCard__info">
        <h3>Datum: {{ DateTime::createFromFormat('Y-m-d', $huisdier->startDatum)->format('d-m-Y') }} tot {{ DateTime::createFromFormat('Y-m-d', $huisdier->endDatum)->format('d-m-Y') }} </h3>
    </section>
    <section class="gridCard__info">
        <h3>Uurtarief: {{ $huisdier->uurtarief }} euro</h3>
    </section>
        
    
    <section class="gridCard__info">
        @if(Auth::user()->role == "Oppasser")
                @include('huisdier.components.aanvraagmaken')
        @endif
        @if(Auth::user()->admin)
            <form action="/huisdier/{{$huisdier->id}}/delete" method="POST" >
                    @csrf
                    <input type="submit" value="Verwijder" class="form__input form__input--submit form__input--deny">
            </form>
        @endif
        </section>
</article>
@endsection