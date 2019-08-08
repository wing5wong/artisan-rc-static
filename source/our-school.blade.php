@extends('_layouts.master')

@section('content')
@foreach($our_school as $s)
<a href="{{$s->getPath()}}">{{$s->title}}</a>
@endforeach
@endsection