@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          {{ $viewData["review"]["title"] }}
        </h5>
        <p class="card-text">{{ $viewData["review"]["body"] }}</p>
        <p class="card-text">{{ $viewData["review"]["rating"] }} / 5</p>
      </div>
    </div>
  </div>
  <a href="{{ route('review.delete', $viewData['id'])}}" class="btn bg-primary text-white">DELETE</a>
</div>

@endsection
