@extends('layouts.welcome')
@section('main')
    <section class="jumbotron text-center lead-jumbotron text-light">
        <div class="container lead-container rounded">
            <h1 class="jumbotron-heading">Eric Seyden</h1>
            <p class="lead text-light">
                This is my personal lab where I try out new and interesting things while sharing a bit with the world along the way.
            </p>
            <p>
                <a href="{{ route('guestbook') }}" class="btn btn-primary my-2">Sign The Guest Book</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header"><h2 class="h3">Software Development</h2></div>
                        <img class="card-img-top" src="{{ asset('img/pipes.jpg') }}" alt="Telecommunications Wires">
                        <div class="card-body">
                            <p class="card-text">
                                Examples of my work, technology tutorials, and resources.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a  href="{{route('apps')}}" class="btn btn-sm btn-outline-secondary">App Programming</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h2 class="h3">The Great Outdoors</h2>
                        </div>
                        <img class="card-img-top" src="{{ asset('img/deer.jpg') }}" alt="Hidden Deer">
                        <div class="card-body">
                            <p class="card-text">
                                All things outside, adventure, exploration, conservancy and bushcraft.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-secondary">Outdoor Hobbies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h2 class="h3">Missoula, Montana</h2>
                        </div>
                        <img class="card-img-top" src="{{ asset('img/missoula.jpg') }}" alt="Missoula Train Tracks">
                        <div class="card-body">
                            <p class="card-text">I love this place! Checkout some of the things that make Missoula awesome.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">About Missoula</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection