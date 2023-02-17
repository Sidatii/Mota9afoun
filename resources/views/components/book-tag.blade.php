@props(['tags'])

@php
    $tags = explode(',', $tags);
@endphp
<ul class="flex gap-1">
    @foreach ($tags as $tag)
        <button class="mt-1 text-sm text-white text-center container bg-black rounded-xl py-0.5 "><a href="/books/?tag={{$tag}}">{{$tag}}</a></button>
    @endforeach
</ul>
