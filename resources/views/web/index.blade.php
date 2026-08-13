@extends('web.layouts.master')
@section('content')
    <main id="rlr-main" class="rlr-main--fixed-top">

        <!-- Hero Banner -->
        <aside class="rlr-hero--half-mast">
            <div class="container-fluid">
                <div id="rlr_banner_slider" class="splide rlr-banner-splide rlr-banner-splide--v3">
                    <div class="splide__track rlr-banner-splide__track">
                        <ul class="splide__list">
                            <!-- Banner slide 1 -->
                            <li class="splide__slide rlr-banner-splide__slide">
                                <div class="rlr-banner-splide__image-wrapper">
                                    <img class="rlr-banner-splide__banner-img lazyload" data-sizes="auto"
                                        data-src="{{ asset('site/images/DSC_5561.jpg') }}"
                                        src="{{asset('site/images/DSC_5561.jpg')}}" alt="#"/>
                                </div>
                                <article class="rlr-banner-splide__content-wrapper">
                                    <header class="rlr-banner-splide__header">
                                        <h2 class="rlr-banner-splide__slogan">Cheeni Hills Resort- A Serene Hills Resorts in Kanthalloor</h2>
                                        <span class="rlr-banner-splide__sub-title"></span>
                                    </header>
                                    <div class="rlr-banner-splide__content-desc">
                                        <div class="rlr-banner-splide__temperature">
                                            <span>-02° C Very Cold</span>
                                            <div class="rlr-banner-splide__arrows">
                                                <button
                                                    class="rlr-banner-splide__arrow rlr-banner-splide__arrow--prev rlr-banner-js-arrow-prev"
                                                    aria-label="prev button">
                                                    <span> <i class="rlr-icon-font flaticon-left"> </i> </span>
                                                </button>
                                                <button
                                                    class="rlr-banner-splide__arrow rlr-banner-splide__arrow--next rlr-banner-js-arrow-next"
                                                    aria-label="next button">
                                                    <span> <i class="rlr-icon-font flaticon-right"> </i> </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <!-- Banner slide 2 -->
                            <li class="splide__slide rlr-banner-splide__slide">
                                <div class="rlr-banner-splide__image-wrapper">
                                    <img class="rlr-banner-splide__banner-img lazyload" data-sizes="auto"
                                        data-src="{{ asset('site/images/IMG20240817162304 .jpg') }}"
                                        src="{{ asset('site/images/IMG20240817162304 .jpg') }}" alt="#" />
                                </div>
                                <article class="rlr-banner-splide__content-wrapper">
                                    <header class="rlr-banner-splide__header">
                                        <h2 class="rlr-banner-splide__slogan"> A Serene Hills Resorts in Kanthalloor</h2>
                                        <span class="rlr-banner-splide__sub-title">Cheeni Hills Resort-</span>
                                    </header>
                                    <div class="rlr-banner-splide__content-desc">
                                        <div class="rlr-banner-splide__temperature">
                                            <span>27° C Moderate</span>
                                            <div class="rlr-banner-splide__arrows">
                                                <button
                                                    class="rlr-banner-splide__arrow rlr-banner-splide__arrow--prev rlr-banner-js-arrow-prev"
                                                    aria-label="prev button">
                                                    <span> <i class="rlr-icon-font flaticon-left"> </i> </span>
                                                </button>
                                                <button
                                                    class="rlr-banner-splide__arrow rlr-banner-splide__arrow--next rlr-banner-js-arrow-next"
                                                    aria-label="next button">
                                                    <span> <i class="rlr-icon-font flaticon-right"> </i> </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
      </aside>

        <!-- Product Carousel -->
        <section>
            <div class="container">
                <div class="home-content mt-5">
                    <p class="rlr-section__title--sub" style="font-size: 20px">Cheeni Hills Resort is one of the <b>best resorts in Kanthalloor</b>, which is situated in the peaceful community. Located on an angle, our unique wooden houses provide an actual mountain resort. These quiet huts offer incredible views of the surrounding nature, making them the ideal retreat for anyone wanting quiet. The refreshing mountain breeze and quiet natural sounds of Cheeni Hills Resort offer an enjoyable break from the busy life of cities.</p>
                </div>
            </div>
        </section>
        <!-- Category Carousel -->
        <section class="rlr-section rlr-section__mb mb-3">
            <div class="container">
                <!-- Swiper -->
                <div class="rlr-carousel__items">
                    <div class="swiper rlr-js-category-card-swiper">
                        <!-- Carousel header -->
                        <div class="rlr-section-header" style="padding-bottom: 10px; float: inline-end;">
                            <!-- Section heading -->

                            <div class="button-row mt-3">
                                <button type="button" class="btn rlr-button button button--previous rlr-button--carousel"
                                    aria-label="Previous">
                                    <i class="rlr-icon-font flaticon-left-chevron"> </i>
                                </button>
                                <div class="button-group button-group--cells">
                                    <button class="button is-selected">1</button>
                                    <button class="button">2</button>
                                </div>
                                <button type="button" class="btn rlr-button button button--next rlr-button--carousel"
                                    aria-label="Next">
                                    <i class="rlr-icon-font flaticon-chevron"> </i>
                                </button>
                            </div>
                        </div>
                        <div class="swiper-wrapper">

                            <x-home-cat-card rating="2" title="Keezhanthoor Waterfalls" subtitle=" Distance"
                                icon="<i class='rlr-icon-font flaticon-jungle'> </i>" link="" />

                            <x-home-cat-card rating="3" title="Lakkam Waterfalls" subtitle=" Distance"
                                icon='<i class="rlr-icon-font flaticon-bungee"> </i>' link="" />

                            <x-home-cat-card rating="4" title="kacharam Waterfalls" subtitle="3 Km Distance"
                                icon='<i class="rlr-icon-font flaticon-bungee"> </i>'/>

                            <x-home-cat-card rating="5" title="Arumpuli Waterfalls" subtitle="2 Km Distance"
                                icon='<i class="rlr-icon-font flaticon-hiking"> </i>'/>

                            <x-home-cat-card rating="6" title="Peradipallam Waterfalls" subtitle="9 km Distance"
                                icon='<i class="rlr-icon-font flaticon-hiking"> </i>'/>

                            <x-home-cat-card rating="1" title="Irachilpara Waterfalls" subtitle="10 Km Distance"
                                icon='<i class="rlr-icon-font flaticon-beach"> </i>'/>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
           <div class="container">
            <div class="plaice-content my-5">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="rlr-section__title--sub" style="font-size: 20px">Cheeni Hills, also a <b>family-friendly resorts in Kanthalloor</b>, which is only 14 miles from Pampadum Shola National Park, has free private parking, free Wi-Fi, and rooms with views of the hills. There are balconies with garden views at our resort.</p>
                    </div>
                </div>
            </div>
           </div>
        </section>

        <!-- Destination Masonary Grid -->
        <section class="rlr-section rlr-section__mb mb-3">
            <!-- resources/views/top-destinations.blade.php -->
            <div class="container">
                <!-- Section heading -->
                <div class="rlr-section__title">
                    <h2 class="rlr-section__title--main">Near By Destinations</h2>
                    <span class="rlr-section__title--sub">Top destinations are based on user search volumes.</span>
                </div>
                <div class="rlr-masonary-grid__container">
                    <!-- Destination cards -->
                    <div class="rlr-masonary-grid__one">
                        <x-destination-card link="#"
                            image="{{ asset('uploads/places/bhramaram-view-point.jpg') }}" badge="200+"
                            title="Bhramaram view Point" distance="1.8 KM away" />
                    </div>


                    <div class="rlr-masonary-grid__two">
                        <a class='rlr-destination-card' href="#">
                            <img data-sizes="auto" src="{{ asset('uploads/places/Keezhantoor-view-point.png') }}" data-srcset="{{ asset('uploads/places/Keezhantoor-view-point.png') }}" class="rlr-destination-card__img lazyload image-tow" alt=""/>
                            <span class="rlr-badge rlr-badge--left rlr-badge--abs rlr-badge--abs-dest">406 Tours</span>
                            <div class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                                <h2 class="rlr-destination-card__info--main">Keezhantoor view point</h2>
                                <p class="rlr-destination-card__info--sub">271 KM away</p>
                                <p class="rlr-destination-card_indo"></p>
                            </div>
                        </a>

                    </div>

                    <div class="rlr-masonary-grid__three">

                        <a class='rlr-destination-card' href="#">

                            <img data-sizes="auto" src="{{ asset('uploads/places/kanthaloor-water-falls.jpg') }}" data-srcset="{{ asset('uploads/places/kanthaloor-water-falls.jpg') }}" class="rlr-destination-card__img lazyload" id="image_three" alt=""/>

                            <span class="rlr-badge rlr-badge--left rlr-badge--abs rlr-badge--abs-dest">320 Tours</span>

                            <div class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">

                                <h2 class="rlr-destination-card__info--main">Kanthalloor Waterfalls</h2>

                                <p class="rlr-destination-card__info--sub">3.4 KM away</p>

                            </div>
                        </a>

                    </div>

                    <div class="rlr-masonary-grid__four">
                        <x-destination-card link="#"
                            image="{{ asset('uploads/places/anamudi-shola-national-park.jpg') }}" badge="58 Tours"
                            title="Anamudi Shola National Park" distance="3.9 KM away" />
                    </div>

                    <div class="rlr-masonary-grid__five">
                        <a class='rlr-destination-card' href="#">

                            <img data-sizes="auto" src="{{ asset('site/images/_luxuryfamilyvilla4.jpg') }}" data-srcset="{{ asset('site/images/_luxuryfamilyvilla4.jpg') }}" class="rlr-destination-card__img lazyload" id="image_five" alt=""/>

                            <span class="rlr-badge rlr-badge--left rlr-badge--abs rlr-badge--abs-dest">37 Tours</span>

                            <div class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">

                                <h2 class="rlr-destination-card__info--main">Views from</h2>

                                <p class="rlr-destination-card__info--sub">Where our cottage is</p>

                            </div>
                        </a>

                    </div>

                    <div class="rlr-masonary-grid__six">

                        <a class='rlr-destination-card' href="#">

                            <img data-sizes="auto" src="{{ asset('site/images/1622037_17.jpg') }}" data-srcset="{{ asset('site/images/1622037_17.jpg') }}" class="rlr-destination-card__img lazyload" id="image_six" alt=""/>

                            <span class="rlr-badge rlr-badge--left rlr-badge--abs rlr-badge--abs-dest">74 Tours</span>

                            <div class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">

                                <h2 class="rlr-destination-card__info--main">kanthalloor</h2>

                                <p class="rlr-destination-card__info--sub">Views from the Resort</p>

                            </div>
                        </a>

                    </div>

                </div>

            </div>

        </section>
        <!-- Best Sellers -->
        <section class="rlr-section rlr-section__mb rlr-section__cards">
            <div class="container">
                <div class="plaice-content my-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="rlr-section__title--sub" style="font-size: 20px">Cheeni Hills Resort provides an experience that is comparable to other <b>luxury resorts in Kanthalloor</b>, guaranteeing an unmatched getaway into nature with its flawless fusion of rustic charm and contemporary conveniences.</p>
                        </div>
                    </div>
                </div>

                <!-- Section heading -->
                <div class="rlr-section-header mb-2">

                    <!-- Section heading -->
                    <div class="rlr-section__title">
                        <h2 class="rlr-section__title--main">Three Types Of Rooms</h2>
                        <span class="rlr-section__title--sub">There are three kinds of wonderful rooms</span>
                    </div>
                    <div class="button-row">
                        <a class='btn rlr-button rlr-button--large rlr-button--rounded rlr-button--brand'
                            href='{{route('web.rooms')}}'> Check All </a>
                    </div>
                </div>
                <div class="row rlr-featured__cards">
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
                        <!-- Featured prodcut card -->
                        <article class="rlr-product-card rlr-product-card--featured" itemscope
                            itemtype="https://schema.org/Product">
                            <!-- Image -->
                            <figure class="rlr-product-card__image-wrapper">
                                <img itemprop="image" data-src="{{ asset('site/images/cheenihills-rooms-img/DSC_7716.JPG') }}"
                                    data-srcset="{{ asset('site/images/cheenihills-rooms-img/DSC_7716.JPG') }}" data-sizes="auto"
                                    class="lazyload" alt="" />
                            </figure>
                            <!-- Card body -->
                            <div class="rlr-product-card--featured__inner">
                                @if(1>2)
                                <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right">
                                    4.9 </span>
                                @endif
                                <div class="rlr-product-card--featured__body card-img-overlay">
                                    @if(1>1)
                                    <div class="rlr-product-card--featured__duration">
                                        <p class="body">01 Days | 01 Nights</p>
                                        <h4 class="type-h4">$0000.00</h4>
                                    </div>
                                    @endif
                                    <div class="rlr-product-detail-header__actions">
                                        <div class="const">
                                            <a class='btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand'
                                            href='{{route("web.cottage-rooms")}}'> Explore </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class='rlr-product-card__anchor rlr-product-card__anchor--featured'
                                href='{{route("web.cottage-rooms")}}'></a>
                        </article>
                        <!-- Summary -->
                        <div class="rlr-product-card--featured__summary">
                            <h4 class="type-h6-semi-bold">Private Villa Rooms</h4>
                            <p class="type-body">The private villa offers an exclusive retreat surrounded by lush greenery and beautiful balcony views. With elegant interiors and modern amenities...</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="300" data-aos-duration="725">
                        <!-- Featured prodcut card -->
                        <article class="rlr-product-card rlr-product-card--featured" itemscope
                            itemtype="https://schema.org/Product">
                            <!-- Image -->
                            <figure class="rlr-product-card__image-wrapper">
                                <img itemprop="image" data-src="{{ asset('site/images/cheenihills-rooms-img/DSC_7711.JPG') }}"
                                    data-srcset="{{ asset('site/images/cheenihills-rooms-img/DSC_7711.JPG') }}" data-sizes="auto"
                                    class="lazyload" alt="" />
                            </figure>
                            <!-- Card body -->
                            <div class="rlr-product-card--featured__inner">
                                @if(1>2)
                                <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right">
                                    4.9 </span>
                                @endif
                                <div class="rlr-product-card--featured__body card-img-overlay">
                                    @if(1>1)
                                    <div class="rlr-product-card--featured__duration">
                                        <p class="body">01 Days | 01 Nights</p>
                                        <h4 class="type-h4">$0000.00</h4>
                                    </div>
                                    @endif
                                    <div class="rlr-product-detail-header__actions">
                                        <a class='btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand'
                                            href='{{route('web.private-villa-rooms')}}'> Explore </a>
                                    </div>
                                </div>
                            </div>
                            <a class='rlr-product-card__anchor rlr-product-card__anchor--featured'
                                href='{{route('web.private-villa-rooms')}}'></a>
                        </article>
                        <!-- Summary -->
                        <div class="rlr-product-card--featured__summary">
                            <h4 class="type-h6-semi-bold">Premium Villa Rooms</h4>
                            <p class="type-body">premium villa in Kanthalloor- where luxury meets nature, offering amazing views, modern comforts, and a serene retreat in the heart of the hills...</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="300" data-aos-duration="725">

                        <!-- Featured prodcut card -->

                        <article class="rlr-product-card rlr-product-card--featured" itemscope
                            itemtype="https://schema.org/Product">
                            <!-- Image -->
                            <figure class="rlr-product-card__image-wrapper">
                                <img itemprop="image" data-src="{{ asset('site/images/cheenihills-rooms-img/Wooden_Hut_img.png') }}"
                                    data-srcset="{{ asset('site/images/cheenihills-rooms-img/Wooden_Hut_img.png') }}" data-sizes="auto"
                                    class="lazyload" alt="" />
                            </figure>
                            <!-- Card body -->
                            <div class="rlr-product-card--featured__inner">
                                @if(1>2)
                                <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right">
                                    4.9 </span>
                                @endif
                                <div class="rlr-product-card--featured__body card-img-overlay">
                                    @if(1>1)
                                    <div class="rlr-product-card--featured__duration">
                                        <p class="body">01 Days | 01 Nights</p>
                                        <h4 class="type-h4">$0000.00</h4>
                                    </div>
                                    @endif
                                    <div class="rlr-product-detail-header__actions">

                                        <a class='btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand'
                                            href='{{route('web.wooden-rooms')}}'> Explore </a>
                                    </div>
                                </div>
                            </div>
                            <a class='rlr-product-card__anchor rlr-product-card__anchor--featured'
                                href='{{route('web.wooden-rooms')}}'></a>
                        </article>
                        <!-- Summary -->
                        <div class="rlr-product-card--featured__summary">
                            <h4 class="type-h6-semi-bold">Wooden Hut Rooms</h4>
                            <p class="type-body">The wooden hut accommodation at Kanthalloor, offering all the facilities necessary, indeed ensures comfort with a personal balcony, a pretty view of...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Logo Carousel -->

        <!-- Sales and Support -->

    </main>

    <style>


.rlr-button--brand:hover
{
    color: #10a5b2;
}

.const:hover
{
    color: #10a5b2;
}

.rlr-product-card--featured .rlr-button--brand {
    background-color: var(--brand);
    padding: .5rem 1rem;
}
.rlr-product-card--featured .rlr-button--brand:hover
{
    color: white;
}

.rlr-masonary-grid__container {
    grid-column-gap: 12px;
    grid-row-gap: 12px;
    display: grid

}

@media (min-width: 700px){
    .rlr-masonary-grid__two{
        margin-top: -60px;

    }
}

@media (min-width: 700px){
    .image-tow{
        height: 270px;
    }
}

@media (min-width: 700px){
    #image_three
    {
        height: 474px;
    }
}

@media (min-width: 700px){
    #image_five
    {
        height: 210px;
    }
}

@media (min-width: 700px){
    #image_six
    {
        height: 210px;
    }
}


    </style>
@endsection
