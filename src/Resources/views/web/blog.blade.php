<x-learningchurch::layouts.web pageName="Blog">
    <div class="container">
        <h1>{{$blog->title}}</h1>
        <b>{{$blog->person->fullname}}</b> <span class="text-secondary"><small>{{date('j F Y',strtotime($blog->published_at))}}</small></span>
        <div>
            @foreach ($blog->tags as $tag)
                <span class="badge bg-dark">{{strtoupper($tag->name)}}</span>
            @endforeach
        </div>
        <img src="{{asset('storage/' . $blog->image)}}" style="max-width: 500px; padding-bottom:15px; padding-top:15px;">
        {!! $blog->content !!}
    </div>
</x-learningchurch::layouts.web>