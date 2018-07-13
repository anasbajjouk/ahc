
@extends('layouts.master')

@section('title', 'Home')

@section('content')

  <style>

    .carousel-inner{
      height: 640px;
    }

    .carousel-item{
      min-height:640px;
      width:  100% !important;
    }
   
  </style>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{ asset('images/1.jpg') }}')">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('{{ asset('images/1.jpg') }}')">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('{{ asset('images/2.jpg') }}')">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1 class="text-justify-center">Partners</h1>

        <div class="card-deck" style="height:150px; width:auto">

          <div class="card">
            <img class="card-img-top" src="{{ asset('images/partners/1.gif') }}" alt="">
          </div>

          <div class="card">
            <img class="card-img-top" src="{{ asset('images/partners/2.jpg') }}" alt="">
          </div>

          <div class="card">
            <img class="card-img-top" src="{{ asset('images/partners/3.gif') }}" alt="">
          </div>

          <div class="card">
            <img class="card-img-top" src="{{ asset('images/partners/4.gif') }}" alt="">
          </div>

        </div>
      </div>

    </section>


    @endsection
