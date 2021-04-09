<ul class="grid grid--review">
    @foreach($user->myReviews as $review)
        <li class="griditem">
            <article class="gridCard gridCard--review">
            <section class="gridCard__info gridCard__info--review">
                    <h3>Review door: <a href="{{$review->myAanbieder->id}}">{{ $review->myAanbieder->name }}</a></h3>
                </section>
                <section class="gridCard__info gridCard__info--review">
                    <h3>Score: {{ $review->stars }}</h3>
                </section>
                <section class="gridCard__info gridCard__info--review">
                    <p>{{ $review->description }}</p>
                </section>
            </article>
        </li>
    @endforeach
</ul>

