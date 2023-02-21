
{{--@php--}}
{{--dd($options);--}}
{{--@endphp--}}

<label for="{{$name}}" class="inline-block text-md mb-2"></label>
    {{$label}}
<select id="{{$name}}" name="{{$name}}" class="mb-6">
    <option selected="{{$idc}}">{{$label}}</option>
    @foreach($options as $option)
        <option {{ $idc = $option->id ? 'selected': ''}} value="{{$option->id}}">{{$option->name}}</option>
    @endforeach
</select>
