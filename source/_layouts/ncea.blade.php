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

                <div class="list-group mb-5">
                    @foreach($departments as $department)
                    <h3>{{ $department->title}}</h3>
                    <ul class="list-group">
                        @foreach($subjects->filter( function($s) use ($department){
                        return $s->department == $department->title;
                        }) as $subject)
                        <li class="list-group-item">
                            <h4>{{ $subject->title}}</h4>
                            <ul class="list-group">
                                @foreach($courses->filter( function($c) use ($subject){
                                return $c->subject == $subject->title;
                                }) as $course)
                                <li class="list-group-item">
                                    <a href="{{$course->getPath()}}" class="">{{ $course->title}}</a>
                                    <!-- <ul class="list-group">
                                        @foreach($assessments->filter( function($a) use ($course){
                                        return in_array($course->title, $a->courses ?? []);
                                        }) as $assessment)
                                        <li class="list-group-item">
                                            <a href="{{$assessment->getPath()}}" class="">{{ $assessment->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul> -->
                                </li>
                                @endforeach
                            </ul>
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