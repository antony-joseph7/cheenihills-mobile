@extends('web.layouts.master')
@section('content')
<main id="rlr-main" class="rlr-main--fixed-top">
    <section class="rlr-section mt-5">
        <div class="rlr-cta rlr-cta--no-button">
          <h2>Accommodation</h2>
          {{-- <p>Welcome to Cheeni Hills Resort-Your Serene Mountain Retreat</p> --}}
        </div>
      </section>
    <section>
        <div class="container">
            @if(1>2)
            <div class="row rlr-section rlr-section__mt row align-items-center">
                <div class="col-md-6">
                  <div class="rlr-newsletter">
                      <div class="rlr-newsletter__content aos-init" data-aos="fade-down" data-aos-offset="250" data-aos-duration="700">
                        <div class="rlr-newsletter__subtitle mb-2">Double Cottage of Family Room</div>
                        <!--<h2 class="rlr-newsletter__title"></h2>-->
                        <p class="fs-6">Cheeni Hills Resort in Kanthalloor offers a serene and luxurious retreat nestled amidst the lush greenery and breathtaking views of the Western Ghats. The resort features beautifully crafted wooden cottages that blend harmoniously with the natural surroundings. Each cottage is perched on a hillside, offering panoramic views of the rolling hills, towering eucalyptus trees, and mist-covered valleys.</p>
                        <div class="button-row mb-3">
                            <a class='btn rlr-button rlr-button--large rlr-button--rounded rlr-button--brand' href='{{route('web.cottage-rooms')}}'> More Details </a>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="rlr-gallery--newsletter">
                      <div class="rlr-gallery--newsletter__thumbs">
                        <div class="rlr-gallery--newsletter__thumbs__col-1">
                          <img src="{{asset('site/images/hsk_image1804879259.jpeg')}}" id="image_1" alt="gallery image">
                        </div>
                        <div class="rlr-gallery--newsletter__thumbs__col-2">
                          <img src="{{asset('site/images/IMG-20231016-WA0045.jpg')}}" alt="gallery image">
                          <img src="{{asset('site/images/IMG20241016102857.jpg')}}" alt="gallery image">
                        </div>
                      </div>
                  </div>

                </div>
            </div>
            @endif

            <hr class="featurette-divider">
            <div class="row rlr-section rlr-section__mt row align-items-center mt-0">
                <div class="col-lg-4 p-0">
                    <a href="{{route('web.wooden-rooms')}}" class="btn">

                        <div class="card" style="border: 0;">
                            <div class="card-body p-0" style="border-radius: 8px; border: 0;">
                                <img src="{{asset('site/images/cheenihills-rooms-img/Wooden_Hut_img.png')}}" class="img-fluid card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Wooden Huts</h5>
                              <p class="card-text">The wooden hut accommodation at Kanthalloor, offering all the facilities necessary, indeed ensures comfort with a personal balcony, a pretty view of...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 p-0">
                    <a href="{{route('web.cottage-rooms')}}" class="btn">

                        <div class="card" style="border: 0;">
                            <div class="card-body p-0" style="border-radius: 8px; border: 0;">
                                <img src="{{asset('site/images/cheenihills-rooms-img/DSC_5536.jpg')}}" class="img-fluid card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Private Villa</h5>
                              <p class="card-text">The private villa offers an exclusive retreat surrounded by lush greenery and beautiful balcony views. With elegant interiors and modern amenities, ....</p>
                            </div>

                          </div>


                    </a>


                </div>
                <div class="col-lg-4 p-0">
                    <a href="{{route('web.private-villa-rooms')}}" class="btn">

                        <div class="card" style="border: 0;">
                            <div class="card-body p-0" style="border-radius: 8px; border: 0;">
                                <img src="{{asset('site/images/cheenihills-rooms-img/DSC_7711.JPG')}}" class="img-fluid card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Premium Villa</h5>
                              <p class="card-text">premium villa in Kanthalloor- where luxury meets nature, offering amazing views, modern comforts, and a serene retreat in the heart of the hills.</p>
                            </div>

                          </div>


                    </a>


                </div>


            </div>
        </div>



    <hr class="featurette-divider">

        <div class="container">
            <div class="row featurette">
                <div class="col-lg-4 p-0">
                    <a href="{{route('web.single-cottage')}}" class="btn">
                        <div class="card" style="border: 0;">
                            <div class="card-body p-0" style="border-radius: 8px; border: 0;">
                                <img src="{{asset('site/images/cheenihills-rooms-img/DSC_5487.jpg')}}" class="img-fluid card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Single Cottage Rooms</h5>
                              <p class="card-text">Experience tranquility at our single cottage resort in Kanthalloor, offering a private and cozy retreat amidst the serene hills and lush greenery.</p>
                            </div>
                          </div>
                    </a>
                </div>
                <div class="col-lg-4 p-0">
                    <a href="{{route('web.double-cottage')}}" class="btn">

                        <div class="card" style="border: 0;">
                            <div class="card-body p-0" style="border-radius: 8px; border: 0;">
                                <img src="{{asset('site/images/cheenihills-rooms-img/cheeni-f/2.png')}}" class="img-fluid card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Double Cottage Rooms</h5>
                              <p class="card-text">Experience a cozy and comfortable stay at our Double Cottage, offering spacious accommodations, stunning mountain views, and a perfect retreat for.... {{--families and groups seeking a peaceful getaway in nature.--}}</p>
                            </div>
                          </div>
                    </a>


                </div>

                <div class="col-lg-4 p-0">
                    <a href="{{route('web.private-villa-rooms')}}" class="btn">

                        <div class="card" style="border: 0;">
                            <div class="card-body p-0" style="border-radius: 8px; border: 0;">
                                <img src="{{asset('site/images/474893564_588283527281071_8402338932923922762_n (1).jpg')}}" class="img-fluid card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Glass House</h5>
                              <p class="card-text">A glass house is a modern architectural marvel that blends transparency with nature, offering panoramic views and an open, airy ambiance. Its sleek... {{--design allows natural light to flood the interiors, creating a seamless connection between indoor and outdoor spaces.--}}</p>
                            </div>
                          </div>
                    </a>


                </div>
            </div>
        </div>

    <hr class="featurette-divider">
        </div>


    <!-- /END THE FEATURETTES -->

    </section>
    @if (1>5)
    <section id="rlr-main" class="rlr-main--fixed-top mt-0">
        <div class="rlr-icon-font-page rlr-section rlr-section__content--md-top mt-3">
          <div class="container">
            <!-- Section heading -->
            <div class="rlr-section-header">
              <!-- Section heading -->
              <div class="rlr-section__title">
                <h2 class="rlr-section__title--main">all images</h2>
                <span class="rlr-section__title--sub">Lightbox to showcase the amazing travel photos.</span>
              </div>
              <div class="button-row">
                <a class='btn rlr-button rlr-button--large rlr-button--rounded rlr-button--brand' href='#'> View tours </a>
              </div>
            </div>
            <div class="rlr-lightbox--gallery">
              <div class="rlr-lightbox--gallery__wrapper">
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20220205-WA0015.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20220205-WA0015.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>1</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20220205-WA0016.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20220205-WA0016.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>2</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20231016-0060.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20231016-0060.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>3</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20220205-WA0034.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20220205-WA0034.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>4</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20231016-WA0039.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20231016-WA0039.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>5</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20231016-WA0051.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20231016-WA0051.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>6</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG20240913174.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG20240913174.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>7</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20231016-WA0038.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20231016-WA0038.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>8</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20231016-WA0045.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20231016-WA0045.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>9</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20220205-WA0072.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20220205-WA0072.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>10</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG20240913174.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG20240913174.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>11</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20231016-WA0044.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20231016-WA0044.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>12</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20220205-WA0077.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20220205-WA0077.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>13</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20231016-WA0046.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20231016-WA0046.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>14</span>
                    </figcaption>
                  </figure>
                </a>
                <a data-fslightbox="demo-images" data-foo="bar" href="{{asset('site/images/IMG-20231016-WA0055.jpg')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/IMG-20231016-WA0055.jpg')}}" alt="Anchor Button" />
                    <figcaption class="rlr-lightbox--gallery__figcaption">
                      <span>15</span>
                    </figcaption>
                  </figure>
                </a>

                <a data-fslightbox="demo-images" data-foo="bar"  href="{{asset('site/images/')}}">
                  <figure class="rlr-lightbox--gallery__figure">
                    <img class="rlr-lightbox--gallery__img" src="{{asset('site/images/')}}" alt="">
                    <figcaption class="rlr-lightbox--galler__figcaption">
                      <span>15</span>
                    </figcaption>
                  </figure>
                </a>

              </div>
            </div>
          </div>
        </div>
    </section>
    @endif
</main>

<style>


@media (min-width: 700px){
    #image_1
    {
        height: 280px;
    }
}

@media (min-width: 700px){
    #image_2
    {
        height: 250px;
    }
}

@media (min-width: 700px){
    #image_3
    {
        height: 325px;
    }
}

@media (max-width: 700px){
    #image_1
    {
        height: 89%;
    }
}

@media (max-width: 700px){
    #image_2
    {
        height: 89%;
    }
}

@media (max-width: 700px){
    #image_3
    {
        height: 89%;
    }
}



.card-body {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
  }

  .card-body img {
    width: 100%;
    transition: transform 1s ease;
  }

  .card-body:hover img {
    transform: scale(1.2);
  }

  .card {

background-color: white;
border-radius: 8px;
overflow: hidden;
transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
transform: translateY(-10px);
box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.btn:focus
{
    box-shadow: none;
}

.btn:focus
{
    border: none;
}

</style>

@endsection
