@extends('_layouts.master')

@section('content')
<section class="content-section">
    <div class="container" style="padding-top: 92px">
        <div class="row">
            <div class="col-sm-12">
@foreach($enrolment as $e)
<a href="{{$e->getPath()}}">{{$e->title}}</a>
@endforeach
            </div>
        </div></div>
</section>
@endsection