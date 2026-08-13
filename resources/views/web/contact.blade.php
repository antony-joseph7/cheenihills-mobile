@extends('web.layouts.master')
@section('content')

<main id="rlr-main" class="rlr-main--fixed-top">
    <section class="rlr-section">
      <div class="rlr-cta rlr-cta--no-button">
        <h2>Contact us</h2>
        <p class="rlr-text-card__desc">Are you searching for the best hotels in Kanthalloor to relax and enjoy the picturesque beauty of this lovely hill station? Get in touch via phone, email, or fill in the form below.
        </p>
      </div>
    </section>
    <section class="rlr-section rlr-section__my">
      <div class="container-fluid">
        <div class="rlr-contact-details rlr-contact-details--v2">
          <div class="rlr-contact-details__details">
            <div class="rlr-contact-detail-item">
              <span class="rlr-contact-detail-item__icon"> <i class="rlr-icon-font flaticon-map-marker"> </i> </span>
              <div>
                <p class="rlr-contact-detail-item__title">Address</p>
                <h6 class="rlr-contact-detail-item__desc"> KANTHALLOOR KGP/VII/118/322, CHEENI HILL RESORTS, KANTHALLOORKULACHIVAYAL ROAD,KANTHALLOOR, MARAYOOR, Idukki, 685620 Kanthalloor, India..</h6>
              </div>
            </div>
            <div class="rlr-contact-detail-item">
              <span class="rlr-contact-detail-item__icon"> <i class="rlr-icon-font flaticon-phone-receiver-silhouette"> </i> </span>
              <div>
                <p class="rlr-contact-detail-item__title">Phone</p>
                <h6 class="rlr-contact-detail-item__desc"><a href="tel:+918547664598" class="text-decoration-none">8547664598</a></h6>
              </div>
            </div>
            <div class="rlr-contact-detail-item">
              <span class="rlr-contact-detail-item__icon"> <i class="rlr-icon-font flaticon-email"> </i> </span>
              <div>
                <p class="rlr-contact-detail-item__title">Email</p>
                <h6 class="rlr-contact-detail-item__desc"><a href="mailto:cheenihills@gmail.com" class="text-decoration-none">cheenihills@gmail.com</a></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="rlr-contact rlr-contact-details--v2 rlr-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="rlr-contact-form">
                <div class="rlr-contact-form__body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form action="{{ route('web.contact.store') }}" method="POST">
                        @csrf
                        <div class="rlr-contact-form__input-group">
                            <label class="type-body-medium rlr-contact-form__label">Name</label>
                            <input type="text" autocomplete="off" class="form-control @if($errors->has('name')) {{'is-invalid'}} @endif" value="{{ old('name') }}" id="name" name="name" placeholder="Name" />
                            @if($errors->has('name'))
                          <div class="invalid-feedback">{{$errors->first('name')}}</div>
                            @endif
                        </div>
                        <div class="rlr-contact-form__input-group">
                            <label class="type-body-medium rlr-contact-form__label">Phone</label>
                            <input type="tel" autocomplete="off" class="form-control @if($errors->has('phone')) {{'is-invalid'}} @endif" id="phone" name="phone" value="{{ old('phone') }}" placeholder="XXXXXXXXXX" />
                            @if($errors->has('phone'))
                          <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                            @endif
                        </div>
                        <div class="rlr-contact-form__input-group">
                            <label class="type-body-medium rlr-contact-form__label">Email</label>
                            <input type="email" autocomplete="off" class="form-control @if($errors->has('email')) {{'is-invalid'}} @endif" id="email" name="email" value="{{ old('email') }}" placeholder="johndoe@email.com" />
                            @if($errors->has('email'))
                            <div class="invalid-feedback">{{$errors->first('email')}}</div>
                              @endif
                        </div>
                        <div class="rlr-contact-form__input-group">
                            <label class="type-body-medium rlr-contact-form__label">Message</label>
                            <textarea class="form-control form-control--text-area @if($errors->has('message')) {{'is-invalid'}} @endif" id="message" name="message" value="{{ old('message') }}" placeholder="Please explain the issue your are facing." rows="12"></textarea>
                            @if($errors->has('message'))
                            <div class="invalid-feedback">{{$errors->first('message')}}</div>
                              @endif
                        </div>

                        <div class="const">

                            <button type="submit" class="btn rlr-button btn rlr-button custom-class rlr-button--medium rlr-button--rounded rlr-button__color--white rlr-button--brand rlr-button-- rlr-button-- rlr-button__color-- rlr-button-- rlr-button--">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0">
            <!--<div class="rlr-contact-details__map">-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.3784657927185!2d77.18659067400985!3d10.212991669335649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b07829c118597d5%3A0xc0bbcce610c7fe1b!2sCHEENI%20HILL%20RESORTS!5e1!3m2!1sen!2sin!4v1728631260008!5m2!1sen!2sin" height="450" style="border:0; min-width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!--</div>-->


          </div>

        </div>
      </div>
    </section>
  </main>
  <style>
    .rlr-button--brand:hover
    {
        color: #10a5b2;
    }
  </style>
  @endsection
