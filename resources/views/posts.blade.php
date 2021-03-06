@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">

            <h1>Lista de artículos</h1>

            @foreach($posts as $post)
            <div class="card mb-4">
                @if ($post->image)
                    <img src="{{ $post->image }}" class="img-responsive">
                @elseif ($post->iframe)
                    <div class="embed-responsive embed-responsive-16by9">
                    {!! $post->iframe !!}
                    </div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }} </h5>
                    <p class="card-text">
                        {{ $post->excerpt }}
                        <a href="{{ route('posts.single', ['slug' => $post->slug]) }}">Leer mas</a>
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
