@extends('default')


@section('content')
<form class="form" action="/review/create" method="POST" name="reviewform" id="reviewform" enctype="multipart/form-data">
    <h3>Review plaatsen</h3>
    @csrf
    <section class="form__fieldgroup">
        <label for="rating">Score</label>
        <section class="form__starholder">
            <section class="form__star">
                <label for="stars">1</label>
                <input value="1" name="stars" class="form__input" type="radio">
            </section>
            <section class="form__star">
                <label for="stars">2</label>
                <input value="2" name="stars" class="form__input" type="radio">
            </section>
            <section class="form__star">
                <label for="stars">3</label>
                <input value="3" name="stars" class="form__input" type="radio">
             </section>
             <section class="form__star">
                <label for="stars">4</label>
                <input value="4" name="stars" class="form__input" type="radio">
             </section>
             <section class="form__star">
                <label for="stars">5</label>
                <input value="5" name="stars" class="form__input" type="radio">
             </section>
        </section> 
    </section>
    <section class="form__fieldgroup">
        <label for="omschrijving">Omschrijving</label>
        <textarea class="form__input form__input--big" name="description" id="description" cols="30" rows="10" form="reviewform"></textarea>
    </section>
    <section class="form__fieldgroup">
        <input type="hidden" name="aanbiederId" value="{{Auth::user()->id}}">
        <input type="hidden" name="oppasserId" value="{{$oppasserId}}">
        <input type="submit" class="form__input form__input--submit" value="Review plaatsen">
    </section>

</form>
@endsection