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

                @foreach($term_dates as $dates)
                <h2>{{ $dates->title }}</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Event</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>
                    </thead>
                    @foreach($dates->dates as $date)
                    <tr>
                        <td>
                            {{ $date["title"] }}
                        </td>
                        <td>{{ date('F j, Y', $date["start_date"]) }}</td>
                        <td>{{ date('F j, Y', $date["end_date"]) }}</td>
                    </tr>
                    @endforeach
                </table>
                @if(!$loop->last)
                <hr>
                @endif
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

            </div>

            <div class="col-sm-12 col-md-3">
                @include('_partials.nav.sidebar')
            </div>

        </div>
    </div>
</section>

<hr>

@endsection
