@extends('web.layouts.master')
@section('content')



<main id="rlr-main" class="rlr-main--fixed-top">

    <section class="rlr-section mb-3">
        <div class="rlr-cta rlr-cta--no-button">
            <h2>About Us</h2>
            <p>More about Cheeni Hills Resort in Kanthalloor</p>
        </div>
    </section>

    <!-- Hero Banner -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center p-3">
                    <h1 class="fw-bold text-center" style="color: rgb(17, 147, 223);">Welcome to Cheeni Hills Resorts in Kanthalloor</h1>
                    <p class="fw-bold text-center" style="font-family: sans-serif">Cheeni Hills is the famous <b>Kanthalloor Resort</b>, which offers a unique getaway for those who are looking for peace and relaxation in the midst of natural beauty. It's located in the center of Kanthalloor; our villas and cottages offer a revitalizing stay with stunning mountain views.</p>
               </div>
            </div>
        </div>
    </section>


    <!-- Our Vision -->
    <section class="rlr-about rlr-section rlr-section__my mt-1 mb-2">
      <div class="container">
        <div class="row mb-3">
            {{-- <div class="rlr-section__title pb-2">
                <h2 class="rlr-section__title--main">About Us – Cheeni Hills Resort, Kanthalloor
                </h2>
            </div> --}}
            <div class="col-lg-6 mb-2">
              <div class="text-" data-aos="text-">
                <!-- Text card -->
                <div class="rlr-text-card rlr-text-card--numbered" style="padding: .5rem;">
                  <!--<h5 class="rlr-text-card__title">1</h5>-->
                  <p class="rlr-text-card__desc mb-1">We ensure a safe, comfortable stay with great hospitality. Whether you want to relax, explore, or enjoy nature, the resort is perfect for a peaceful getaway. Come and create lasting memories surrounded by natural beauty. 20-meter-high waterfall set in the wilderness overlooking the view towards open valleys. You can shower underneath the falls if you are willing to fight the coldness of the waters. </p>
                  <p class="rlr-text-card__desc mb-1">The Cheeni Hills Resorts in Kanthalloor provides a rich 683 sq ft villa ideal for families and groups. There is everything that suits every taste, with two rooms bedrooms, a relaxing living area, and facilities for indoor activities. The resort includes patios and balconies for relaxing, enjoying the fresh mountain air, and experiencing the stunning view of the hills. Witness the charming mist wafting in at dawn and twilight, enhancing the serene beauty of the resort. Our kitchen and dining area are easy to cook and enjoy meals during your stay.</p>
                </div>
              </div>
            </div>
            <div class=" col-lg-6">
                <div class="rlr-img rlr-img--dotted" style="justify-content: center;">
                   <img class="img-fluid" src="{{asset('site/images/IMG-20250507-WA0006.jpg')}}" alt=" image our vision" />
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- Our Values -->
    <section class="rlr-about rlr-section rlr-section__my mt-1 mb-2">
      <div class="container">
            <div class="row rlr-section__mt row align-items-center mt-2">
                {{-- <div class="rlr-section__title pb-2">
                    <h2 class="rlr-section__title--main">Stay at Cheeni Hills Resort-Comfort in the Lap of Nature</h2>
                    <span class="rlr-section__title--sub"></span>
                </div> --}}
                <div class="col-lg-6 order-lg-2">

                    <div class="text-" data-aos="text-">
                      <!-- Text card -->
                      <div class="rlr-text-card rlr-text-card--numbered" style="padding: .5rem;">
                        <!--<h5 class="rlr-text-card__title">1</h5>-->
                        <h2 class="featurette-heading">Why Choose Us?</h2>
                        <h5><span class="text-muted">We are the <b>best Kanthalloor stay</b>-providing resort.</span></h5>
                        <div class="text-list">
                          <p class="lead fs-6" style=" display: list-item; font-size: 1.125rem; font-weight: 400; line-height: 1.5;"><b  class="fw-bold">24/7 Service:</b>  <span style="color: #546078;">Our team is always available to assist you, ensuring a stress-free experience.</span>
                          </p>

                          <p class="lead fs-6" style="display: list-item; font-size: 1.125rem; font-weight: 400; line-height: 1.5;"><b class="fw-bold text-dark">Hospitality:</b>  <span style="color: #546078;">Enjoy warm and welcoming service throughout your stay.</span>
                          </p>
                          <p class="lead fs-6" style="display: list-item; font-size: 1.125rem; font-weight: 400; line-height: 1.5;"><b class="fw-bold">Free Wi-Fi:</b>  <span style="color: #546078;">Offering high-speed internet access.</span>
                          </p>
                          <p class="lead fs-6" style="display: list-item; font-size: 1.125rem; font-weight: 400; line-height: 1.5;"><b class="fw-bold">Free Parking:</b>  <span style="color: #546078;">Secure parking for your vehicle.</span></p>
                          <p class="lead fs-6" style="display: list-item; font-size: 1.125rem; font-weight: 400; line-height: 1.5;"><b class="fw-bold">Wooden Hut Experience:</b>  <span style="color: #546078;">Stay in our cozy wooden huts for a charming and rustic vibe.</span></p>
                          <p class="lead fs-6" style="display: list-item; font-size: 1.125rem; font-weight: 400; line-height: 1.5;"><b class="fw-bold">Elegant Rooms:</b>  <span style="color: #546078;">Relax in beautifully designed rooms with all modern amenities.</span></p>
                          </p>
                        </div>
                        <p class="rlr-text-card__desc">Choose Kanthalloor Resort for comfort, convenience, and unforgettable memories amidst nature!</p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="rlr-gallery--newsletter">
                      <div class="rlr-gallery--newsletter__thumbs">
                        <div class="rlr-gallery--newsletter__thumbs__col">
                            <img class="img-fluid" src="{{asset('site/images/cheeni resorts-img.png')}}" alt=" image our values" style="border-radius: 15px;"/>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
      </div>
    </section>


    <section class="my-2">
        <div class="container">
            <div class="property-description">
                <div class="row featurette py-1">

                    <div class="col-lg-12">

                      <p class="rlr-text-card__desc">Cheeni Hills <b>Resorts in Kanthalloor,</b> just 14 km away from Pampadum Shola National Park, offers lodging with mountain views, complimentary Wi-Fi, and free private parking. Our resort has balconies with garden views.</p>
                      <p class="rlr-text-card__desc py-3">We offer 24/7 front desk service and room service.The room comes with a television. Visitors have the option to enjoy the atmosphere of their surroundings either in an outdoor dining space or next to a fireplace to stay cozy during chilly weather. </p>
                      <p class="rlr-text-card__desc">The accommodation has a private entrance for increased privacy. Visitors can also unwind in the garden.
                    </p>
                    </div>

            </div>
        </div>
    </section>


    <!-- Our Team -->

  </main>
  <style>
    @media (min-width: 768px) {
    .rlr-about-hero__content-inner {
        padding: 0rem 5rem 0;
    }
}

@media (min-width: 768px) {
    .rlr-about-hero__content-inner {
        padding: 0rem 5rem 0;
    }
}
.rlr-text-card.rlr-text-card.rlr-text-card--numbered
{
    width: 100%;
    height: 100%;
}

@media (min-width:700px)
{
    .text-list
    {
        padding-left: 50px;
    }
}


</style>

@endsection
