@extends('_layouts.master')

@section('title', $page->title)

@section('content')

<section class="content-section">
    <div class="container" style="padding-top: 92px">
        <div class="row">
            <div class="col-sm-12">
                <h1>
                    {{$page->title}}
                </h1>

                <p>
                    <strong>{{ date('F j, Y', $page->date) }}</strong><br>
                    <!-- @foreach ($page->tags as $tag)
                    <a href="/tags/{{ $tag }}">{{ $tag }}</a>
                    {{ $loop->last ? '' : '-' }}
                    @endforeach -->
                </p>

                <blockquote data-phpdate="{{ $page->date }}">
                    <em>WARNING: This post is over a year old. Some of the information this contains may be outdated.</em>
                </blockquote>
            </div>
        </div>
        <div class="row">
        @if ($page->image)
                <img src="{{ $page->imageCdn($page->image) }}" style="object-fit: cover; height: 250px; width: 100%;">
                @endif
            <div class="col">
                
@yield('postContent')


@include('_partials.share')

@if ($page->comments)
@include('_partials.comments')
@else
<p>Comments are not enabled for this post.</p>
@endif
            </div>

            <div class="col-sm-12 col-md-3">
                <pop:include template="partials/sidebar" />
            </div>

        </div>
    </div>
</section>

<hr>

@endsection