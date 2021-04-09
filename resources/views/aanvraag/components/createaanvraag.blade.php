@extends('default')

@section('content')
<x-header></x-header>
<form method="POST" action="/huisdier/create" class="form" id="editform" name="editform" enctype="multipart/form-data">
    <h2 class="form__header">Huisdier aanbieden</h2>
    @csrf
    <section class="form__fieldgroup">
        <label class="form__labels" for="name">Naam</label>
        <input class="form__input" name="name" id="name" type="text" required>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="leeftijd">Leeftijd</label>
        <input class="form__input" name="leeftijd" id="leeftijd" type="number"  required>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="soort">Soort</label>
        <select class="form__input" name="soort" id="soort">
            @foreach($soorten as $soort)
                <option  value="{{$soort->soort}}">{{$soort->soort}}</option>
            @endforeach
        </select>
    </section>
    <section class="form__fieldgroup">
        <p class="form__labels">Geslacht</p>
        <section class="form__radio">
            <input name="geslacht" id="geslacht1" type="radio" value="1" required checked>
            <label for="geslacht1" class="form__labels">Mannetje</label>
        </section>
        <section class="form__radio">
            <input name="geslacht" id="geslacht2" type="radio" value="2" required>
            <label for="geslacht2" class="form__labels">Vrouwtje</label>
        </section>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="leeftijd">Start datum</label>
        <input class="form__input" name="startDatum" id="startDatum" type="date"  required>
        <label class="form__labels" for="leeftijd">Eind datum</label>
        <input class="form__input" name="endDatum" id="endDatum" type="date"  required>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="uurtarief">Uurtarief</label>
        <input class="form__input" name="uurtarief" id="uurtarief" type="number"  required>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="omschrijving">Vertel wat over je huisdier</label>
        <textarea name="omschrijving" id="omschrijving" class="form__input form__input--big" rows="10" cols=30 form="editform"></textarea>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="afbeelding">Afbeelding uploaden</label>
        <input class="form__input" name="afbeelding" id="afbeelding" type="file" accept=".jpg,.png,.jpeg">
    </section>
    <section class="form__fieldgroup">
        <input class="form__input form__input--submit" type="submit" value="Opslaan">
    </section>
</form>


@endsection