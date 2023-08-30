@extends('layouts.app')
@section("title", 'Create review')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create product</div>
                        <div class="card-body">
                            @if($errors->any())
                                <ul id="errors" class="alert alert-danger list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            @endif

                            <form method="POST" action="{{ route('review.save') }}">
                                @csrf
                                <input type="text" class="form-control mb-2" placeholder="Enter your title" name="title" value="{{ old('title') }}" />
                                <p>Enter your review</p>
                                <textarea row="8" cols="33" type="text" class="form-control mb-2"   name="body" value="{{ old('body') }}"> </textarea>
                                </br>
                                <select name="rating" id="rating">
                                    <option value="">  </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                    <option value="4"> 4 </option>
                                    <option value="5"> 5 </option>
                                </select>
                                </br>
                                </br>
                                <input type="submit" class="btn btn-primary" value="Send" href="{{ route('review.verification') }}"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
