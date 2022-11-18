@extends('layout')

@section('meta')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{ setting('site.description') }}" />
    <title>{{ $post->title }} - {{ setting('site.title') }}</title>
@endsection

@section('header')

@endsection

@section('content')

        <!-- Post content-->
        <article class="" style="
    display: flex;
    align-items: center;
    flex-direction: column;
">
            <!-- Post header-->
            <header class="mb-4">
                <!-- Post title-->
                <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                <!-- Post meta content-->
                <div class="text-muted fst-italic mb-2">Posted on
                    {{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }} by {{ $post->user->name }}</div>
                <!-- Post Tags-->
                @foreach ($post_tags as $tag)
                    <a class="badge bg-secondary text-decoration-none link-light"
                       href="{{ route('tag.index', ['slug' => $tag->slug]) }}">{{ $tag->name }}</a>
                @endforeach
            </header>
            <!-- Preview image figure-->
            <figure class="mb-4"><img class="img-fluid rounded" src="/images/{{ $post->featured_image}}"
                                      alt="..." /></figure>
            <!-- Post content-->

            <section class="mb-5"  style="width: 700px;
                font-family: Cambria,Georgia,Times New Roman,serif;
            font-style: normal;
            font-weight: normal;

            ">
                {!! $post->content !!}
            </section>

        </article>



@endsection
