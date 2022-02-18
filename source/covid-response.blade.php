@extends('_layouts.master')

@section('content')
<section class="content-section">
    <div class="container" style="padding-top: 92px">
        <div class="row">
            <div class="col-sm-12">
                <h1>
                   COVID-19 Response
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="list-group list-group-flush">
                @foreach($covid_response as $s)
                <a href="{{$s->getPath()}}" class="list-group-item list-group-item-action">{{$s->title}}</a>
                @endforeach
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection
