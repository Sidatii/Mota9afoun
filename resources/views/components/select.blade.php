@props(['categories'])

<label for="{{$categories->name}}" class="inline-block text-md mb-2"></label>
    {{$categories->name}}
<select id="{{$categories->id}}" name="{{$categories->name}}" class="mb-6">
    <option selected="{{$categories->name}}">{{$categories->name}}</option>
    @foreach($categories as $option)
        <option value="{{$option->id}}">{{$option->name}}</option>
    @endforeach
</select>
