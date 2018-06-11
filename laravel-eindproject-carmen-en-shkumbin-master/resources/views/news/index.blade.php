@foreach($news as $n)
    <p>{{$n->title}}</p>
    <p>{{$n->content}}</p>
@endforeach