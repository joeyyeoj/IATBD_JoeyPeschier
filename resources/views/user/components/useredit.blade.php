@extends('default')

@section('title')
Bewerk informatie
@endsection



@section('scripts')
<script src="/js/checkboxes.js" defer></script>
@endsection



@section('content')
<x-header></x-header>
<form method="POST" action="/user/edit" class="form" id="editform" name="editform" enctype="multipart/form-data">
    <h2 class="form__header">Bewerk Informatie</h2>
    @csrf
    <section class="form__fieldgroup">
        <label class="form__labels" for="name">Naam</label>
        <input class="form__input" name="name" id="name" type="text" value="{{ $user->name }}" required>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="email">Email-adres</label>
        <input class="form__input" name="email" id="email" type="email" value="{{ $user->email }}" required>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="leeftijd">Leeftijd</label>
        <input class="form__input" name="leeftijd" id="leeftijd" type="number" value="{{ $user->leeftijd }}" required>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="omschrijving">Vertel wat over jezelf</label>
        <textarea name="omschrijving" id="omschrijving" value="{{ $user->omschrijving }}" class="form__input form__input--big" rows="10" cols=30 form="editform">{{ $user->omschrijving }}</textarea>
    </section>
    
    @if($user->role == "Oppasser")
    <section class="form__fieldgroup form__fieldgroup--checkboxes form__fieldgroup--checkboxes--visible">
        <label class="form__labels">Ik wil passen op:</label>
        <section class="form__checkbox">
            <input name="honden" id="honden" value="1" type="checkbox"  @{{@if($user->honden) checked=checked @endif}} >
            <input name="honden" id="hondenHidden" value="0" type="hidden" @{{@if($user->honden) disabled=true @endif}}>
            <label class="form__labels" for="honden">Honden</label>
        </section>
        <section class="form__checkbox">
            <input name="katten" id="katten" value="1" type="checkbox" @{{@if($user->katten) checked=checked @endif}}>
            <input name="katten" id="kattenHidden" value="0" type="hidden" @{{@if($user->katten) disabled=true @endif}}>
            <label class="form__labels" for="katten">Katten</label>
        </section>
        <section class="form__checkbox">
            <input name="vogels" id="vogels" value="1" type="checkbox" @{{@if($user->vogels) checked=checked @endif}}>
            <input name="vogels" id="vogelsHidden" value="0" type="hidden" @{{@if($user->vogels) disabled=true @endif}}>
            <label class="form__labels" for="vogels">Vogels</label>
        </section>
        <section class="form__checkbox">
            <input name="reptielen" id="reptielen" value="1" type="checkbox" @{{@if($user->reptielen) checked=checked @endif}}>
            <input name="reptielen" id="reptielenHidden" value="0" type="hidden" @{{@if($user->reptielen) disabled=true @endif}}>
            <label class="form__labels" for="reptielen">Reptielen</label>      
        </section>
        <section class="form__checkbox">
            <input name="knaagdieren" id="knaagdieren" value="1" type="checkbox" @{{@if($user->knaagdieren) checked=checked @endif}}>
            <input name="knaagdieren" id="knaagdierenHidden" value="0" type="hidden" @{{@if($user->knaagdieren) disabled=true @endif}}>
            <label class="form__labels" for="knaagdieren">Knaagdieren</label>      
        </section>
    </section>
    <section class="form__fieldgroup">
        <label class="form__labels" for="afbeelding">Afbeelding uploaden</label>
        <input class="form__input" name="afbeelding" id="afbeelding" type="file" accept=".jpg,.png,.jpeg">
    </section>
    @endif


    
    <section class="form__fieldgroup">
        <input class="form__input form__input--submit" type="submit" value="Opslaan">
    </section>
</form>
@endsection
