@extends('_layouts.master')

@section('content')
<section class="content-section">
    <div class="container" style="padding-top: 92px">
        <div class="row">
            <div class="col-sm-12">
@foreach($international as $i)
<a href="{{$i->getPath()}}">{{$i->title}}</a>
@endforeach
            </div>
        </div></div>
</section>
@endsection