@extends('layouts.master')
@section('content')
<!-- contact us -->
<section class="page-section contact dark mt">
  <div class="container p-1">
    <!-- Get in touch -->
    <h2 class="section-title wow fadeInDown text-center d-flex flex-column" data-wow-offset="200" data-wow-delay="100ms">
      <small class="mb-2 white" >Feel Free to Say Hello!</small>
      <span class="mb-4 white">Get in Touch With Us</span>
    </h2>
    <div class="row" class="p-0">
      <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms" >
        <!-- Contact form -->
        <form name="contact-form" method="post" action="{{ route('contact.store') }}" class="contact-form" id="contact-form" >
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="outer required">
                <div class="form-group af-inner has-icon">
                  <label class="sr-only" for="name">Name</label>
                  <input type="text" name="name" id="name" placeholder="Name"  size="30" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Name is required">
                  <span class="form-control-icon"><i class="fa fa-user"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="outer required">
                <div class="form-group af-inner has-icon">
                  <label class="sr-only" for="email">Email</label>
                  <input type="text" name="email" id="email" placeholder="Email" value="" size="30" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Email is required">
                  <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="outer required">
            <div class="form-group af-inner has-icon">
              <label class="sr-only" for="subject">Subject</label>
              <input type="text" name="subject" id="subject" placeholder="Subject" value="" size="30" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Subject is required">
              <span class="form-control-icon"><i class="fa fa-bars"></i></span>
            </div>
          </div>
          <div class="form-group af-inner has-icon">
            <label class="sr-only" for="input-message">Message</label>
            <textarea name="message" id="input-message" placeholder="Message" rows="4" cols="50" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Message is required"></textarea>
            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
          </div>
          <div class="outer required">
            <div class="form-group af-inner">
              <input type="submit" name="submit" class="form-butt btn-dark  m-auto pt-2 w-25  form-button-submit btn btn-block btn-theme ripple-effect btn-theme-dark" id="submit_btn" value="Send message">
            </div>
          </div>
        </form>
        <!-- /Contact form -->
      </div>
      <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">
        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
        <ul class="media-list contact-list">
          <li class="media d-flex mb-3">
            <div class="media-left"><i class="fa fa-home"></i></div>
            <div class="media-body"><span>Adress: 980 6th ave, New York, NY, United States, New York</span></div>
          </li>
          <li class="media d-flexmb-3 mb-3 d-flex ">
            <a href="tel:+1 646-750-7006" class="d-flex">
              <div class="media-left"><i class="fa fa-phone"></i></div>
              <div class="media-body"><span>Support Phone: +1 646-750-7006</span></div>
            </a>
          </li>
          <li class="media  mb-3">
            <a href="mailto:info@brightempirelimonyc.com" class="d-flex">
              <div class="media-left"><i class="fa fa-envelope"></i></div>
              <div class="media-body">
                <span>E mails:info@brightempirelimonyc.com</span>
              </div>
            </a>
          </li>
          <li class="media d-flex mb-3">
            <div class="media-left"><i class="fa fa-clock"></i></div>
            <div class="media-body"><span>Working Hours: 09:30-21:00 except on Sundays</span></div>
          </li>
          <li class="media d-flex mb-3">
            <a href="" class="d-flex">
              <div class="media-left"><i class="fa fa-map-marker"></i></div>
              <div class="media-body"><span>View on The Map</span></div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /Get in touch -->
  </div>
</section>

@endsection