@extends('default')

@section('title')
Inloggen
@endsection



<form method="POST" action="{{ route('login') }}" class="form">
    <h2 class="form__header">Login</h2>
    @csrf
    <section class="form__fieldgroup">
        <label class="form__labels" for="email">Email-adres</label>
        <input class="form__input" name="email" id="email" type="email" required>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="password">Wachtwoord</label>
        <input class="form__input" name="password" id="password" type="password" required>
    </section>
    <section class="form__fieldgroup">
        <input class="form__input form__input--submit" type="submit" value="Aanmelden">
    </section>
</form>
