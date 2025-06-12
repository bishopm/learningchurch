<x-learningchurch::layouts.web pageName="Videos">
    <div class="container">
        <h1>Videos</h1>
        <ul class="list-unstyled">
        @foreach ($videos as $video)
            <li>
                <a href="{{url('/videos/' . substr($video->published_at,0,4) . '/' . substr($video->published_at,5,2) . '/' . $video->slug)}}">{{$video->title}}</a><br>
                {{date('d M Y',strtotime($video->published_at))}} 
                @foreach ($video->tags as $tag)
                    <span class="badge bg-dark">{{strtoupper($tag->name)}}</span>
                @endforeach
            </li>
        @endforeach
        </ul>
    </div>
</x-learningchurch::layouts.web>