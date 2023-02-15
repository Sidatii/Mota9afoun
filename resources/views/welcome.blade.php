
<h1>
    {{$title}}
</h1>
@foreach ($books as $book)
<h3>
    <a href="/books/{{$book['id']}}">{{$book['name']}}</a>
</h3>
<h4>
    {{$book['description']}}    
</h4>    
@endforeach