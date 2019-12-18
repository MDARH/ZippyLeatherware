@extends('layouts.master')

@section('page_title')
   {{ __('shop::app.about.page-title') }}
@endsection

@section('content-wrapper')
<main role="main">

  <section class="jumbotron text-center">
      <h1 class="jumbotron-heading">About Us</h1>
      <p class="lead text-muted">We would like to introduce to you one of the leather product manufacturers in bangladesh-<strong>Zippy Leatherware</strong>. Our team consists of two highly experienced leather technologists and one adept leather product technologist. We are trained and experienced in raw leather sourcing, leather processing, product design and development, product manufacturing, and quality control. Our combined effort focuses on bringing innovation in Leather Products, making it durable and trendy at the same time. <strong>Zippy Leatherware</strong> specializes in customized production facility, allowing us to design and manufacture the finest leather products as per the clients' requirement. We are able to develope any kind of finished leather and product design as per your choice. Kindly allow us to send you samples of our work, whenever interested. Our Company will ensure excellent price-quality for your Leather Products Demand.</p>
      
  </section>

  <div class="card bg-dark text-white">
  <img src="{{ asset('storage\slider_images\Default\i5oOKUAHJnNZ6bczLSx8uybowFCi451ZUlhjV7GB.jpeg') }}" class="card-img" alt="Image Backround">

  <div class="fb-share-button" data-href="http://zippyleatherware.com/products/ladies_bag_13" data-layout="button_count" data-size="large">
  	<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
  </div>

</div>

</main>
@endsection