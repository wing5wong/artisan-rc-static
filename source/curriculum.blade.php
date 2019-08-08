@extends('_layouts.master')

@section('content')
<section class="content-section">
    <div class="container" style="padding-top: 92px">
        <div class="row">
            <div class="col-sm-12">
@foreach($curriculum as $c)
<a href="{{$c->getPath()}}">{{$c->title}}</a>
@endforeach
            </div>
        </div></div>
</section>
@endsection