@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">

            <div class="card mb-4">

                {{-- @if ($post->image)
                    <img src="{{ $post->get_image }}" class="card-img-top">
                @endif --}}

                <div class="card-body">
                    <h1 class="card-title">{{ $post->title }} </h1>
                    <div class="panel-heading">
                        Catergoría
                        <a href="{{ route('category', $post->category->slug) }}">
                            {{ $post->category->name }}
                        </a>
                    </div>
                    @if ($post->image)
                        <div class="embed-responsive">
                            <img src="{{ $post->image }}" class="img-responsive">
                            {!! $post->iframe !!}
                        </div>
                    @endif
                    {{ $post->excerpt }}
                    <p class="card-text">
                        {{ $post->body }}
                    </p>

                    {{-- Etiquetas
                    @foreach($post->tags as $tag)
                    <a href="{{ route('tag', $tag->slug) }}">
                        {{ $tag->title }}
                    </a>
                    @endforeach --}}

                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
