@extends('layouts.master')

@section('content')
<div class="row">
  <p class="fs-3 bg-secondary text-light">
    {{ $pub->name }} <br>
    Address - {{ $pub->address }} <br>
    Phone - {{ $pub->phone }} <br>
    Email - {{ $pub->email }}
  </p>
</div>
<div class="row">
  @foreach ($books as $book)
  <div class="col-3 p-1">
    <div class="card">
      <img src="{{ $book->image }}" alt="img" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{ $book->title }}</h5>
        <p class="card-text">by <br> {{ $book->author }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection