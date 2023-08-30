@extends('layouts.app')
@section('title', 'All reviews')
@section('content')
    <div class="row">
        @foreach ($viewData["reviews"] as $review)
            <!--<div class="col-md-4 col-lg-3 mb-2">-->
                <div class="card mb-1">
                    <!--<div class="card-body text-center">-->
                        <a href="{{ route('review.show', ['id'=> $review["id"]]) }}"
                        class="btn bg-primary text-white"><h3>{{ $review["title"] }}</h3></a>
                        <div class="text-center">
                        <a >ID = {{ $review["id"] }}</a>
                        </div>
                </div>
            
        @endforeach
    </div>
@endsection
