<x-learningchurch::layouts.web pageName="Subject">
    <div class="container my-5">
        @if (isset($notfound))
            <h1>{{strtoupper($notfound)}}</h1>
            No content tagged "{{$notfound}}" has been added yet.
        @else
            <h1>{{strtoupper($tag)}}</h1>
            @if (count($blogs))
                <h3>Blog posts</h3>
                <ul class="list-unstyled">
                    @foreach ($blogs as $blog)
                        <li>
                            <a href="{{url('/blog/' . substr($blog->published_at,0,4) . '/' . substr($blog->published_at,5,2) . '/' . $blog->slug)}}">
                                {{$blog->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
            @if (count($prayers))
                <h3>Liturgy</h3>
                <ul class="list-unstyled">
                    @foreach ($prayers as $prayer)
                        <li>
                            <a href="{{url('/liturgy/' . substr($prayer->created_at,0,4) . '/' . substr($prayer->created_at,5,2) . '/' . $prayer->slug)}}">
                                {{$prayer->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
            @if (count($videos))
                <h3>Video</h3>
                <ul class="list-unstyled">
                    @foreach ($videos as $video)
                        <li>
                            <a href="{{url('/videos/' . substr($video->published_at,0,4) . '/' . substr($video->published_at,5,2) . '/' . $video->slug)}}">
                                {{$video->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        @endif
    </div>
</x-learningchurch::layouts.web>