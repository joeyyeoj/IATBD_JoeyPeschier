<section class="profile__infogroup">
    <h3>Foto's van mijn huis:</h3>
    <section class="profile__fotogrid">
        @foreach($user->myPhotos->all() as $foto)
            <img class="profile__foto" src="{{ Storage::url($foto->locatie) }}" alt="Foto van gebruikers huis">
        @endforeach
    </section>
</section>