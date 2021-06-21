<div class="container-fluid mx-auto mt-1">
    <div class="row">
      <div class="col-md-12">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            @for($i=0;$i<5;$i++) @if($i==0) <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              @else
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$i}}" aria-label="Slide 2"></button>
              @endif
              @endfor
          </div>
          <div class="carousel-inner">
            @php $check=0; @endphp
            @forelse($slides as $slide)
            @php $check=$check+1;@endphp
            @if($check==1)
            <div class="carousel-item active">
              <img src="{{$slide->thumbnail}}" class="d-block w-100" alt="!" class="slider_size">
            </div>
            @else
            <div class="carousel-item ">
              <img src="{{$slide->thumbnail}}" class="d-block w-100" alt="!" class="slider_size">
            </div>
            @endif
            @empty
            @endforelse
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>