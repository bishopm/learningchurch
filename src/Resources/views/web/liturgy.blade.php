<x-learningchurch::layouts.web pageName="Liturgy">
    <div class="container">
        <h1>{{$liturgy->title}}</h1>
        <b>{{$liturgy->person->fullname}}</b> <span class="text-secondary"><small>{{date('j F Y',strtotime($liturgy->created_at))}}</small></span>
        <div>
            @foreach ($liturgy->tags as $tag)
                <span class="badge bg-dark">{{strtoupper($tag->name)}}</span>
            @endforeach
        </div>
        {!! $liturgy->content !!}
    </div>
</x-learningchurch::layouts.web>