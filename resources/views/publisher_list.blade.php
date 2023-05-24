@extends('layouts.master')

@section('content')
<div class="row">
  <p class="fs-3 bg-secondary text-light">Publisher List</p>
</div>
<div class="row">
  @foreach ($publishers as $pub)
  <div class="col-3 p-1">
    <div class="card">
      <img src="{{ $pub->image }}" alt="img" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{ $pub->name }}</h5>
        <p class="card-text">{{ $pub->address }}</p>
        <a href="{{route('pub_detail', $pub->id)}}" class="btn btn-primary">Detail</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection