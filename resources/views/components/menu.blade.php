<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
    @foreach(getCategories() as $cat)
      <a class="p-2 text-muted" href="{{route('category.show', ['id' => $cat->id])}}">{{$cat->title}}</a>
    @endforeach
    </nav>

</div>
