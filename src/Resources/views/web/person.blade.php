<x-learningchurch::layouts.web pageName="Home">
    <div class="container my-5">
        <h1>{{$person->fullname}}</h1>
        {!! $person->bio !!}
    </div>
</x-learningchurch::layouts.web>