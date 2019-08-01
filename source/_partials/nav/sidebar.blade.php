<h3>Other Sections</h3>
    @php
    $col = $page->getCollection();
    @endphp
    @foreach($$col->filter(function($p) use ($page) {
        return $p->getPath != $page->getPath();
    }) as $sub)
    <a href="{{$sub->getPath()}}" class="list-group-item list-group-item-action">{{$sub->title}}</a>
    @endforeach
