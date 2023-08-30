@extends('layouts.app')
@section('title', 'Home Page - Review')
@section('content')
<div class="text-center">
    <h1>Taller  #1 clase Review</h1>
    </br>
    <div class="ms-auto">
        <a class="btn bg-primary text-white" href="{{ route('review.index') }}">All Reviews</a> 
        <a class="btn bg-primary text-white" href="{{ route('review.create') }}">Create Review</a>
    </div>
</div>
@endsection
