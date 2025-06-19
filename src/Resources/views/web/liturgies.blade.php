<x-learningchurch::layouts.web pageName="Liturgies">
    <div class="container my-5">
        <h1>Liturgies</h1>
        <ul class="list-unstyled">
        @foreach ($liturgies as $liturgy)
            <li>
                <a href="{{url('/liturgy/' . substr($liturgy->created_at,0,4) . '/' . substr($liturgy->created_at,5,2) . '/' . $liturgy->slug)}}">{{$liturgy->title}}</a><br>
                <b>{{$liturgy->person->fullname}}</b> {{date('d M Y',strtotime($liturgy->created_at))}} 
                @foreach ($liturgy->tags as $tag)
                    <span class="badge bg-dark">{{strtoupper($tag->name)}}</span>
                @endforeach
                {!! $liturgy->excerpt !!} 
            </li>
        @endforeach
        </ul>
    </div>
</x-learningchurch::layouts.web>