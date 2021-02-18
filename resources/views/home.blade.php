@extends('layouts.app')

@section('content')
    <div class="bg-image">
        <div class="container">
            <div class="py-5">
                <h1 class="text-white text-center display-4" style="letter-spacing: 4px; font-weight: 500;">BLOGGO</h1>
                <div class="row mt-5 align-items-center">
                    <div class="col-md">
                        <h2 class="text-white font-weight-light">LET’S JOIN WITH US</h2>
                        <p class="text-white">We provide a lot of features for all your needs with easy and fun using Blog-Go With some of our interesting features. Most people make the mistake of forcing themselves. Or they pretend to look great. With Blog-Go you will get a lot of information about coding.</p>
                        <a href="/register" class="btn btn-success">Join Now</a>
                    </div>
                    <div class="col-md justify-content-end d-flex">
                        <img src="{{ asset('img/illustration.png') }}" alt="" class="w-75">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
