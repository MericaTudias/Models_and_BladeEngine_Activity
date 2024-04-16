@include('Partials.header')
    <ul>
        @foreach ($book as $boo)
            <li>{{$boo->id}} {{$boo->isbn}} {{$boo->title}} {{$boo->author}} {{$boo->description}} {{$boo->date_published}}</li>
        @endforeach
    </ul>
@include('Partials.footer')