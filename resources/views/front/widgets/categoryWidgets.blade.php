<div class="abt-1">



            <h3>Kateqoriyalar</h3>
    <br>



    <ul class="list-group">
        @foreach($categories as $category)
        <li  class="list-group-item d-flex justify-content-between align-items-center @if(Request::segment(2)==$category->slug) active  @endif">
            <a style="color: #000b16" @if(Request::segment(2)!=$category->slug)   href="{{ route('category',$category->slug) }}"@endif >{{$category->name}}</a>
            <span class="badge badge-primary badge-pill">{{$category->articleCount()}}</span>
        </li>

        @endforeach
    </ul>

        </div>

