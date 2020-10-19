@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">


                          <h4>{{ $movie->desc }}</h4>
                            <p>{{ $movie->imdb }}</p>
                            <p>{{$movie->genre->name}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
