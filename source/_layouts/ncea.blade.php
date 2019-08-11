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
            </div>
        </div>
        <div class="row">
            @if ($page->image)
            <img src="{{ $page->imageCdn($page->image) }}" style="object-fit: cover; height: 250px; width: 100%;">
            @endif
            <div class="col">
                @yield('postContent')

                <div class="list-group">
                @foreach($departments as $department)
                    <a href="{{$department->getPath()}}" class="list-group-item list-group-item-action bg-primary text-white">{{ $department->title}}</a>
                    <ul class="list-group">
                    @foreach($subjects->filter( function($s) use ($department){
                        return $s->department == $department->title;
                    }) as $subject)
                    <li class="list-group-item">
                    <a href="{{$subject->getPath()}}" class="">{{ $subject->title}}</a>
                    </li>
</ul>
                    @endforeach
                    </ul>
                @endforeach
                </div>


                @if($page->date) 
                <p>
                    <strong>Updated {{ date('F j, Y', $page->date) }}</strong><br>
                    <!-- @foreach ($page->tags as $tag)
                    <a href="/tags/{{ $tag }}">{{ $tag }}</a>
                    {{ $loop->last ? '' : '-' }}
                    @endforeach -->
                </p>
                @endif

                <blockquote data-phpdate="{{ $page->date }}">
                    <em>WARNING: This post is over a year old. Some of the information this contains may be outdated.</em>
                </blockquote>
            </div>

            <div class="col-sm-12 col-md-3">
                @include('_partials.nav.sidebar')
            </div>

        </div>
    </div>
</section>

<hr>

@endsection