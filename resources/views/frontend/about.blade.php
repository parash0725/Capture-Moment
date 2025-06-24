<!-- resources/views/about.blade.php -->
@extends('frontend.layout_about')
@section('title', 'About Us - Captured Moments')
@section('content')
<div class="site-section" data-aos="fade">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="row mb-5">
          <div class="col-12 ">
            <h2 class="site-section-heading text-center">About Us</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-7">
        <img src="{{ asset('images/nepali_wedding.png') }}" alt="About Us" class="img-fluid">
      </div>
      <div class="col-md-4 ml-auto">
        <h3 class="text-white">Our Mission</h3>
        <p>At Captured Moments, our mission is to transform special moments into timeless visual stories. 
          We believe in the power of photography to preserve emotions, capture the essence of people and places, 
          and create memories that last a lifetime. Our goal is to deliver high-quality, 
          visually stunning work that speaks to the heart of each client, whether it's a personal milestone, 
          a grand event, or a professional project.</p>
        <p>We are committed to:</p>
        <li>Delivering exceptional customer service</li>
        <li>Bringing creativity and passion to every project</li>
        <li>Bringing creativity and passion to every project</li>
      </div>
    </div>

    <div class="row site-section">
      <h1 class="text-center center">Our Team</h1>
      <hr>
      @foreach($team as $member)
      <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
        <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}" class="img-fluid w-50 
        rounded-circle mb-4">
        <h2 class="text-white font-weight-light mb-4">{{ $member['name'] }}</h2>
        
        <p class="mb-4">{{ $member['description'] }}</p>
        <p>
          <a href="{{ $member['twitter'] }}" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
          <a href="{{ $member['instagram'] }}" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          <a href="{{ $member['facebook'] }}" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
        </p>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
