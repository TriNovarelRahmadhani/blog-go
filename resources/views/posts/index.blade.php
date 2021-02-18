@extends('layouts.app')
@section('content')
        <div>
            <div>
                @isset ($category)
                    <div class="bg-header">
                        <div class="container">
                            <h4 class="text-white" style="line-height: 80px;">Category : {{ $category->name }}</h4>
                        </div>
                    </div> 
                @endisset

                @isset ($tag)
                    <div class="bg-header">
                        <div class="container">
                            <h4 class="text-white" style="line-height: 80px;">Tag : {{ $tag->name }}</h4>
                        </div>
                    </div> 
                @endisset

                @if (!isset($category) && !isset($tag))
                    <div class="bg-header">
                        <div class="container">
                            <h4 class="text-white" style="line-height: 80px;">All Post</h4>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        
    <div class="py-4">
        <div class="container">
            <div class="row">
                
                    @forelse ($posts as $post)
                    <div class="col-md-6">
                        <div class="card mb-4">
    
                            @if ($post->thumbnail)
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <img style="height: 300px; object-fit: cover; object-position: center;" class="card-img-top" src="{{ $post->takeImage }}">
                                </a>
                            @endif
    
                            <div class="card-body">
    
                                <div>
                                    <a href="{{ route('categories.show', $post->category->slug) }}" class="text-secondary">
                                        <small>
                                            {{ $post->category->name }} - 
                                        </small>
                                    </a>
    
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('tags.show', $tag->slug) }}" class="text-secondary">
                                            <small>
                                                {{ $tag->name }}
                                            </small>
                                        </a>
                                    @endforeach
                                </div>
    
                                <h5 class="mt-2">
                                    <a href="{{ route('posts.show', $post->slug) }}" class="card-title text-dark">
                                        {{ $post->title }}
                                    </a>
                                </h5>
    
                                <div class="text-secondary my-3">
                                    {{ Str::limit($post->body, 130, '.') }}
                                </div>
    
                                <div class="d-flex justify-content-between align-items-center mt-2">
    
                                    <div class="media align-items-center">
                                        <img width="40" class="rounded-circle mr-3" src="{{ $post->author->gravatar() }}" alt="">
                                        <div class="media-body">
                                            <div>
                                                {{ $post->author->name }}
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="text-secondary">
                                        <small>
                                            Published on {{ $post->created_at->diffForHumans() }}
                                        </small>
                                    </div>
    
                                </div>
    
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="col-md-7">
                            <div class="alert alert-info">
                                There's no posts.
                            </div>
                        </div>
                    @endforelse
            </div>
            {{ $posts->links() }}
        </div>
    </div>
@endsection