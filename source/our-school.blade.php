@extends('_layouts.master')

@section('content')
<section class="content-section">
    <div class="container" style="padding-top: 92px">
        <div class="row">
            <div class="col-sm-12">
@foreach($our_school as $s)
<a href="{{$s->getPath()}}">{{$s->title}}</a>
@endforeach
            </div></div></div></section>
@endsection