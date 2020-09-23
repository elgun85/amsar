@foreach($articles as $article)
    <div class="about-two">
        <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}"><img height="350" src= "{{$article->image}}" alt="" /></a>


        <h3><a href="{{route('single',[$article->getCategory->slug,$article->slug])}}">{{$article->title}} </a></h3>
        <div>
            <div>
            </div>
        </div>
        <p>{{Str::limit($article->content,95)}}</p>
        <div class="about-btn">
            <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}">Davamı</a>
        </div>
        <br>

        <p class="text-right"><b><u>{{$article->getCategory->name}}</u></b> || <a href="#"><i class="fa fa-eye"></i></a>  {{ $article->hit }} || <a href="#" style="color: #9f1447">{{$article->created_at->diffForHumans()}}</a></p>

        @if(!$loop->last)
            <hr>
        @endif
    </div>
@endforeach
{{$articles->links()}}
