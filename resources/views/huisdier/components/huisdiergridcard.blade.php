<li class="griditem" data-kind-of-animal="{{$huisdier->soort}}">
    <a href="/huisdier/{{$huisdier->id}}">
        <article class="gridCard">
            <section class="gridCard__fotoholder">
                <img class="gridCard__foto" src="{{ Storage::url($huisdier->fotolocatie) }}" alt="">
            </section>
            <section class="gridCard__infowrapper">
                <section class="gridCard__info gridCard__info--overzicht">
                    <h3>Naam: {{ $huisdier->naam }}</h3>
                </section>
                <section class="gridCard__info gridCard__info--overzicht">
                    <h3>Leetijd: {{ $huisdier->leeftijd }}</h3>
                </section>
                <section class="gridCard__info gridCard__info--overzicht">
                    <h3>Soort: {{ $huisdier->soort }}</h3>
                </section>
                <section class="gridCard__info gridCard__info--overzicht">
                    <h3>Eigenaar: {{ $huisdier->myOwner->name }}</h3>
                </section>
                <section class="gridCard__info gridCard__info--overzicht">
                    <h3>Datum: {{ DateTime::createFromFormat('Y-m-d', $huisdier->startDatum)->format('d-m-Y') }} tot {{ DateTime::createFromFormat('Y-m-d', $huisdier->endDatum)->format('d-m-Y') }} </h3>
                </section>
                <section class="gridCard__info gridCard__info--overzicht">
                    <h3>Uurtarief: {{ $huisdier->uurtarief }} euro</h3>
                </section>
            </section>
        </article>
    </a>
</li>