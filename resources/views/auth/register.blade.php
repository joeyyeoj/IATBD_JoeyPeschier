@extends('default')

@section('title')
Registreren
@endsection


@section('scripts')
<script src="/js/checkboxes.js" defer></script>
<script src="/js/register.js" defer></script>
@endsection
@section('content')
<form method="POST" action="{{ route('register') }}" class="form" id="registerform" name="registerform">
    <h2 class="form__header">Registreren</h2>
    @csrf
    <section class="form__fieldgroup">
        <label class="form__labels" for="email">Email-adres</label>
        <input class="form__input" name="email" id="email" type="email" required>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="name">Naam</label>
        <input class="form__input" name="name" id="name" type="text" required>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="leeftijd">Leeftijd</label>
        <input class="form__input" name="leeftijd" id="leeftijd" type="number" required>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="omschrijving">Vertel wat over jezelf</label>
        <textarea name="omschrijving" id="omschrijving" class="form__input form__input--big" rows="10" cols=30 form="registerform"></textarea>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="role">Waarvoor meld jij je aan?</label>
        <select class="form__input" name="role" id="role">
            <option value="">Maak een keuze...</option>
            <option value="Aanbieder">Ik zoek een oppasser</option>
            <option value="Oppasser">Ik wil oppassen</option>
        </select>
    </section>
    
    <section class="form__fieldgroup form__fieldgroup--checkboxes" id="js--checkboxes">
        <h3>Ik wil passen op:</h3>
        <section class="form__checkbox">
            <input name="honden" id="honden" value="1" type="checkbox">
            <input name="honden" id="hondenHidden" value="0" type="hidden">
            <label class="form__labels" for="honden">Honden</label>
        </section>
        <section class="form__checkbox">
            <input name="katten" id="katten" value="1" type="checkbox">
            <input name="katten" id="kattenHidden" value="0" type="hidden">
            <label class="form__labels" for="katten">Katten</label>
        </section>
        <section class="form__checkbox">
            <input name="vogels" id="vogels" value="1" type="checkbox">
            <input name="vogels" id="vogelsHidden" value="0" type="hidden">
            <label class="form__labels" for="vogels">Vogels</label>
        </section>
        <section class="form__checkbox">
            <input name="reptielen" id="reptielen" value="1" type="checkbox">
            <input name="reptielen" id="reptielenHidden" value="0" type="hidden">
            <label class="form__labels" for="reptielen">Reptielen</label>      
        </section>
        <section class="form__checkbox">
            <input name="knaagdieren" id="knaagdieren" value="1" type="checkbox">
            <input name="knaagdieren" id="knaagdierenHidden" value="0" type="hidden">
            <label class="form__labels" for="knaagdieren">Knaagdieren</label>      
        </section>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="password">Wachtwoord</label>
        <input class="form__input" name="password" id="password" type="password" required>
        <label class="form__labels" for="password_confirmation">Wachtwoord bevestigen</label>
        <input class="form__input" name="password_confirmation" id="password_confirm" id type="password" required>
    </section>
    <section class="form__fieldgroup">
        <input class="form__input form__input--submit" type="submit" value="Aanmelden">
    </section>
</form>
@endsection