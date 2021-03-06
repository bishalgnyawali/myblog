@extends('layouts.master')

@section('title')
    User Page!
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h2>User Blog</h2>
                    <p class="lead">laravel php framework with the release of 4.2 it has gone through major changes in the time. Blading, eloquent, route has good maintaned also database migration is also quite easy for team work development</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8">

                <div class="post">

                    @foreach($posts as $post)
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->body}}</p>
                        <p><a href="#" class="btn btn-primary btn-lg">Read More</a></p>
                        <p>created at {{$post->created_at}}</p>
                    @endforeach

                </div>

            </div>
            <div class="col-md-3 col-md-offset-1">
                <h1>Sidebar</h1>
            </div>
        </div>
    </div>

@endsection