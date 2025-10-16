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
            Year Level: {{ $page->year }} <br>
            Available Credits: {{ $page->credits }}<br>
Assessment type: {{ $page->assessment_type}}<br>
Course Level: {{ $page->course_level }}<br>

<br>
Available Standards:
<ul class="list-group list-group-flush">
@foreach($assessments->filter( function($a) use ($page){
    return in_array($page->title, $a->courses ?? []);
}) as $assessment)
<li class="list-group-item">
{{ $assessment->title }} ({{ $assessment->credits ?? "N/A"}} credits) <br>
{{ $assessment->description }}

</li>
@endforeach
</ul>
                @if($page->date) 
                <p>
                    <strong>Updated {{ date('F j, Y', $page->date) }}</strong><br>
                    <!-- @foreach ($page->tags as $tag)
                    <a href="/tags/{{ $tag }}">{{ $tag }}</a>
                    {{ $loop->last ? '' : '-' }}
                    @endforeach -->
                </p>
                @endif

            </div>

            <div class="col-sm-12 col-md-3">
                @include('_partials.nav.sidebar')
            </div>

        </div>
    </div>
</section>

<hr>

@endsection
