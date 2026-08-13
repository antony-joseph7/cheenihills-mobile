<a class='rlr-destination-card' href='{{ $link }}'>
    <img data-sizes="auto" data-src="{{ $image }}" data-srcset="{{ $image }}" class="rlr-destination-card__img lazyload" alt="{{ $title }}" />
    <span class="rlr-badge rlr-badge--left rlr-badge--abs rlr-badge--abs-dest">{{ $badge }}</span>
    <div class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
        <h2 class="rlr-destination-card__info--main">{{ $title }}</h2>
        <p class="rlr-destination-card__info--sub">{{ $distance }}</p>
    </div>
</a>


