@extends('default')
@section('content')
<x-header></x-header>
<article class="profile">
    <section class="profile__infogroup">
        <h2>{{ $user->name }}, {{ $user->leeftijd}}</h2>
    </section>
    <section class="profile__infogroup profile__infogroup--aboutme">
        <h3>Over mij:</h3><p>{{ $user->omschrijving }}</p>
    </section>
    @if($user->role == "Oppasser")
        @include('user.components.animalprefs')
        @include('user.components.userfotos')
    @endif

    @if($user->role == "Aanbieder")
        @include('user.components.aanbiedingen')
    @endif
    <section class="profile__infogroup">
        @if(Auth::user()->id == $user->id)
        <a href="/user/editView" class="profile__button">Gegevens bewerken</a>
        @endif
        @if(Auth::user()->admin && !$user->admin)
        <section>
            <form class="" action="/user/{{$user->id}}/block" method="POST" >
                    @csrf
                    <input type="submit" value="Blokkeren" class="form__input form__input--submit form__input--deny">
            </form>
        </section>
        @endif
    </section>
</article>
@if($user->role == "Oppasser")
        @include('review.components.myreviews')
@endif
@endsection