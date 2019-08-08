@extends('_layouts.master')

@section('content')
@foreach($enrolment as $e)
<a href="{{$e->getPath()}}">{{$e->title}}</a>
@endforeach
@endsection