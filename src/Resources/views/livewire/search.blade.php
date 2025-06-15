<div>
    <input wire:model.live="query" type="text" placeholder="Search..." class="form-control">
    <ul style="position:absolute; background-color:'#dfdfdf';" class="list-unstyled">
        @foreach ($results['blogs'] as $blog)
            <li><a href="{{url('/')}}">{{$blog->title}}</a></li>
        @endforeach
        @foreach ($results['liturgies'] as $liturgy)
            <li><a href="{{url('/')}}">{{$liturgy->title}}</a></li>
        @endforeach
        @foreach ($results['videos'] as $video)
            <li><a href="{{url('/')}}">{{$video->title}}</a></li>
        @endforeach
    </ul>
</div>