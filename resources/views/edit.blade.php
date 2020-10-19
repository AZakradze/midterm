@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <form action="{{route('update.movie', ['movie' => $movie->id])}}" method="post">
                            @csrf
                            <input type="text" placeholder="{{ $movie->imdb }}" name="imdb" >
                            <textarea name="desc" id="" cols="30" rows="10">{{ $movie->desc }}</textarea>
                            <select name="genre_id" id="">
                                @foreach($genres as $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                            <button type="submit">filmis redaqtreiba</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
