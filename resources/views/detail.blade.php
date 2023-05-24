@extends('layouts.master')

@section('content')
<div class="row">
  <p class="fs-3 bg-secondary text-light">Book Detail</p>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <img src="{{ $book->image }}" alt="img" class="card-img-top">
      <div class="card-body">
        <h4 class="card-title">Title: {{ $book->title }}</h4>
        <p class="card-text">Author: {{ $book->author }}</p>
        <p class="card-text">Publisher: {{ $book->publisher->name }}</p>
        <p class="card-text">Year: {{ $book->year }}</p>
        <p class="card-text">
          Synopsis: <br>
          {{ $book->synopsis }}
        </p>
      </div>
    </div>
  </div>
</div>
@endsection