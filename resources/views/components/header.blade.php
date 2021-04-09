<nav class="navigation">
    <section class="navigation__titlearea">
        <h3 class="navigation__title">PassenOpJeDier</h3>
        <span class="navigation__hamburger expanded" id="js--hamburger">
        </span>
    </section>
    <section class="navigation__links" id="js--navlinks">
        <a class="navigation__link" href="/huisdier">Overzicht</a>
        @if(Auth::user()->role == "Aanbieder")
        <a class="navigation__link" href="/huisdier/createView">Huisdier aanbieden</a>
        <a class="navigation__link" href="/aanvragen">Reacties</a>
        @endif
        <a class="navigation__link" href="/dashboard">Mijn profiel</a>
        <form action="/logout" method="POST">
            {{ csrf_field() }}
            <button type="submit" name="logout" value="Uitloggen" class="navigation__link navigation__link--buttonfix">Uitloggen</button>
        </form>
    </section>
</nav>
