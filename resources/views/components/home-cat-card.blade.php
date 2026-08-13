<div class="swiper-slide" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
    <!-- Category card item -->
    <article class="rlr-category-card">
        <div class="rlr-category-card__badge">
            <span class="rlr-badge rlr-badge--right rlr-badge--"> {{$rating}} </span>
        </div>
        <div class="rlr-category-card__icon">

            {!!$icon!!}

        </div>

        <header>
            <a class='rlr-category-card__title' href='{{$link ?? ""}}'>
                <h4>{{$title}}</h4>
            </a>
            <a class='rlr-category-card__sub-title' href='{{$link ?? ""}}'>
                <span>{{$subtitle}}</span>
            </a>
        </header>
    </article>
</div>
