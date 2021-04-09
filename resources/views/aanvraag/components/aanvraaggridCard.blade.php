<li class="griditem">
    <article class="gridCard">
        <section class="gridCard__infowrapper">
        <section class="gridCard__info gridCard__info--overzicht">
            <h3>Oppasser: <a href="/user/{{$aanvraag->myOppasser->id}}">{{ $aanvraag->myOppasser->name }}</a></h3>
        </section>
        <section class="gridCard__info gridCard__info--overzicht">
            <h3>Huisdier: {{ $aanvraag->myPet->naam }}</h3>
        </section>
        <section class="gridCard__info gridCard__info--overzicht">
            <h3>Start datum: {{ $aanvraag->myPet->startDatum }}</h3>
            <h3>Eind datum: {{ $aanvraag->myPet->endDatum }}</h3>
        </section>
        <section class="gridCard__info gridCard__info--overzicht">
            <h3>Uurtarief: {{ $aanvraag->myPet->uurtarief }}</h3>
        </section>
        
        </section>
        <section class="gridCard__info gridCard__info--buttons">
            @if(Auth::user()->role == "Aanbieder")
            <form action="/aanvraag/{{$aanvraag->id}}/accept" method="POST">
                @csrf
                <input type="hidden" name="oppasserId" value="{{$aanvraag->myOppasser->id}}">
                <input type="submit" value="Accepteren" class="form__input form__input--submit form__input--accept">
            </form>
            <form action="/aanvraag/{{$aanvraag->id}}/deny" method="POST" >
                @csrf
                <input type="submit" value="Afwijzen" class="form__input form__input--submit form__input--deny">
            </form>
            @endif
            @if(Auth::user()->role == "Admin")
            <form action="/aanvraag/{{$aanvraag->id}}/delete" method="POST" >
                @csrf
                <input type="submit" value="Afwijzen" class="form__input form__input--submit form__input--deny">
            </form>
            @endif
        </section>
    </article>
</li>