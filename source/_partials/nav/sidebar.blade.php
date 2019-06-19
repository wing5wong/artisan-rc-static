<h3>Other Sections</h3>
    @php
    $col = $page->getCollection();
    @endphp
    @foreach($$col as $sub)
    <a href="{{$sub->getPath()}}" class="list-group-item list-group-item-action">{{$sub->title}}</a>
    @endforeach