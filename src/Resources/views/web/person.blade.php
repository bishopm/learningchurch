<x-learningchurch::layouts.web pageName="Home">
    <div class="container">
        <h1>{{$person->fullname}}</h1>
        {!! $person->bio !!}
    </div>
</x-learningchurch::layouts.web>