<section class="profile__infogroup">
    <h3>Ik pas op:</h3>
    <ul class="profile__animalprefs">
        @if($user->honden)
            <li>Honden</li>
        @endif
        @if($user->katten)
            <li>Katten</li>
        @endif
        @if($user->vogels)
            <li>Vogels</li>
        @endif
        @if($user->reptielen)
            <li>Reptielen</li>
        @endif
        @if($user->knaagdieren)
            <li>Knaagdieren</li>
        @endif
    </ul>    
</section>