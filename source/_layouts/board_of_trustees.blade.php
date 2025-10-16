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


                @foreach(["Principal","Presiding Member","Finance", "Health and Safety", "Discipline", "Property","Staff Representative", "Student Representative","Iwi Representative","Secretary","Member"] as $group)
                <h2>{{ $group }}</h2>
                    <ul class="list-group list-group-flush mb-5">
                    @foreach($board_of_trustees->filter(function($b) use ($group){
                        return in_array($group,$b->responsibilities);
                    }) as $bot)
                        <li class="list-group-item">
                            {{ $bot->title }}
                        </li>
                    @endforeach
                    </ul>
                @endforeach

                    
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
