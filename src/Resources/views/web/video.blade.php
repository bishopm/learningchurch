<x-learningchurch::layouts.web pageName="Video">
    <div class="container my-5">
        <h1>{{$video->title}}</h1>
        <span class="text-secondary"><small>{{date('j F Y',strtotime($video->published_at))}}</small></span>
        <div>
            @foreach ($video->tags as $tag)
                <a href="{{url('/subjects/' . $tag->slug)}}"><span class="badge bg-dark">{{strtoupper($tag->name)}}</span></a>
            @endforeach
        </div>
        <iframe height="500px" width="100%" src="{{$video->url}}"></iframe>
        {!! $video->description !!}
    </div>
</x-learningchurch::layouts.web>