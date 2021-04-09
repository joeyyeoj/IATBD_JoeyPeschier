<section class="aanvraagmaken">
    <section class="aanvraagmaken__buttons">
        <form action="/aanvraag/create" method="POST">
            @csrf
            <input type="hidden" name="oppasserId" value="{{Auth::user()->id}}">
            <input type="hidden" name="huisdierId" value="{{$huisdier->id}}">
            <input type="submit" value="Ik wil oppassen" class="form__input form__input--submit">
        </form>

    </section>
</section>