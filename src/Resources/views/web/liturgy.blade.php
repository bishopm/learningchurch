<x-learningchurch::layouts.web pageName="Liturgy">
    <div class="container my-5">
        <h1>{{$liturgy->title}}</h1>
        <b>{{$liturgy->person->fullname}}</b> <span class="text-secondary"><small>{{date('j F Y',strtotime($liturgy->created_at))}}</small></span>
        <div>
            @foreach ($liturgy->tags as $tag)
                <a href="{{url('/subjects/' . $tag->slug)}}"><span class="badge bg-dark">{{strtoupper($tag->name)}}</span></a>
            @endforeach
        </div>
        {!! $liturgy->content !!}
    </div>
</x-learningchurch::layouts.web>