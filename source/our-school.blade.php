@foreach($our_school as $s)
<a href="{{$s->getPath()}}">{{$s->title}}</a>
@endforeach