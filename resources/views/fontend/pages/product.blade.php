
@extends('fontend.layouts.master')
@section('content')
<div class="container padding-top-50">
    <div class="row">
        <div class="col-md-4">
          <div class="list-group">
          @include('partials.sidebar')
          </div>
        </div>
        <div class="col-md-8">
          <div class="widget">
            <h3>Feature Products</h3><hr>
            <div class="row">
              @foreach($products as $product)
              <div class="col-md-4">
                  <div class="card">
                        <!-- <img class="card-img-top" src="{{ asset('images/products/'. 'galaxy.png') }}" alt="Card image"> -->
                        @php $i=1; @endphp
                        @foreach($product->images as $img)
                          @if($i>0)
                            <img class="card-img-top" src="{{ asset('images/products/'. $img->image) }}" alt="Card image">
                          @endif
                        @php $i--;  @endphp
                        @endforeach
                        <div class="card-body">
                          <h4 class="card-title">{{$product->title}}</h4>
                          <p class="card-text">{{$product->price}}</p>
                           <a href="#" class="btn btn-outline-warning">Add to cart</a>
                      </div>
                  </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
<!-- end side bar  -->
