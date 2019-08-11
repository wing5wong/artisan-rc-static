<h3>Other Sections</h3>
    @php
    $col = $page->getCollection();
    @endphp
    <ul class="list-group list-group-flush">
    @foreach($$col->filter(function($p) use ($page) {
        return $p->getPath() != $page->getPath();
    })->sortBy('title') as $sub)
    <a href="{{$sub->getPath()}}" class="list-group-item list-group-item-action">{{$sub->title}}</a>
    @endforeach
    </ul>