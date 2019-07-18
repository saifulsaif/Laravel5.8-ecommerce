@extends('admin.layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Product
        </div>
        <div class="card-body">

          <table class="table table-hover table-striped">
      <tr>
        <th>#</th>
        <th>Product Title</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
              @php
              $i=1;
              @endphp
              @foreach ($products as $product)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{ $product->title }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td><a href="{{ route('admin.product.edit', $product->id) }}"> <button class="btn btn-success" type="button" name="button">Edit</button> </a>
                    <a href="{{ route('admin.product.delete', $product->id) }}"> <button class="btn btn-danger"type="button" name="button">Delete</button> </a>
                  </td>
                </tr>
                @php
                $i++;
                @endphp
              @endforeach

    </table>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
