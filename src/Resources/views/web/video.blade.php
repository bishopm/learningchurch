<x-learningchurch::layouts.web pageName="Video">
    <div class="container">
        <h1>{{$video->title}}</h1>
        <span class="text-secondary"><small>{{date('j F Y',strtotime($video->published_at))}}</small></span>
        <div>
            @foreach ($video->tags as $tag)
                <span class="badge bg-dark">{{strtoupper($tag->name)}}</span>
            @endforeach
        </div>
        <iframe height="500px" width="100%" src="{{$video->url}}"></iframe>
        {!! $video->description !!}
    </div>
</x-learningchurch::layouts.web>