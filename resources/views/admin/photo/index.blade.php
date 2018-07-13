
@extends('admin.layout.admin')

@section('title', 'All Photos')

@section('pageTitle', 'All Photos')

@section('content')

<section class="content">

  <div class="container px-0">
    <div class="pp-gallery">
      <br>
      <div class="card-columns">

        @foreach($photos as $photo)

          <a href="{{ asset($photo->path) }}" data-gallery="gallery" class="col-md-4" style="margin-bottom:10px">
            <div class="card">
  
              <img src="{{ asset($photo->path) }}" class="img-fluid">
  
              <div class="card-body">
                <h4 class="card-title">{{ $photo->name }}</h4>
              </div>
  
            </div>
          </a>

        @endforeach

        
      </div>
      </div>
  </div>

  <div class="pagination justify-content-center">
    <?php echo $photos->render(); ?>
  </div>

</section>

@endsection


