@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <h1>add genre</h1>
                        <form action="{{route('add.genre')}}" method="post">
                            @csrf
                            <input type="text" placeholder="name" name="name" >
                            <button type="submit">genre dabamteba</button>
                        </form>
                        @foreach($genres as $row)
                            <p>{{$row->name}}</p>
                        @endforeach
                        <br>
                        <br>
                        <br>
                        <hr>
                        <h1>add movie</h1>
                        <form action="{{route('add.movie')}}" method="post">
                            @csrf
                            <input type="text" placeholder="imdb" name="imdb" >
                            <textarea name="desc" id="" cols="30" rows="10">desc</textarea>
                            <select name="genre_id" id="">
                            @foreach($genres as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                            </select>
                            <button type="submit">filmis dabamteba</button>
                        </form>
                        @foreach($movies as $row)
                            <hr><br>
                            <a href="{{route('edit.movie', ['movie' => $row->id ])}}">edit</a>
                            <form action="{{route('delete.movie', ['movie' => $row->id ])}}" method="post">
                                @csrf
                                <button type="submit">delete</button>
                            </form>

                            <p>{{$row->genre->name}}</p>
                            <p>{{$row->imdb}}</p>
                            <p>{{$row->desc}}</p>
                            <hr><br>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
