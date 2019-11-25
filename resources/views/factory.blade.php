@extends('layouts.master')

@section('content-wrapper')
<main role="main">

    <section class="jumbotron text-center">
      <h1 class="jumbotron-heading">Our Factory</h1>
    </section>
    <div class="row">
        
        @foreach($images as $image)
        
        <div class='col-md-4 text-center'>
            <img src='{{asset('images/factory/'.$image->image_source)}}' alt='factory_image' class="img-thumbnail mx-auto">
        </div>
        
        @endforeach
        
    </div>

</main>
@endsection