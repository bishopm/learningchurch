<x-learningchurch::layouts.web pageName="Blog">
    <div class="container my-5">
        <h1>Blog</h1>
        <ul class="list-unstyled">
        @forelse ($blogs as $blog)
            <li>
                <a href="{{url('/blog/' . substr($blog->published_at,0,4) . '/' . substr($blog->published_at,5,2) . '/' . $blog->slug)}}">{{$blog->title}}</a><br>
                <b>{{$blog->person->fullname}}</b> {{date('d M Y',strtotime($blog->published_at))}} 
                @foreach ($blog->tags as $tag)
                    <span class="badge bg-dark">{{strtoupper($tag->name)}}</span>
                @endforeach
                {!! $blog->excerpt !!} 
            </li>
        @empty
            Sorry - nothing posted here yet!
        @endforelse
        </ul>
    </div>
</x-learningchurch::layouts.web>