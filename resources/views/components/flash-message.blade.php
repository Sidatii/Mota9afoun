@if(session()->has('success'))

    <div x-data="{show: true}" x-init="{setTimeout(() => show = false, 3000)}" x-show="show" class="bg-[#1da1f2] text-white px-16 py-3 rounded-full">
        {{ session()->get('success') }}
    </div>
@elseif(session()->has('error'))
    <div x-data="{show: true}" x-init="{setTimeout(() => show = false, 3000)}" x-show="show" class="bg-red-500 text-white px-16 py-3 rounded-full">
        {{ session()->get('error') }}
    </div>
@elseif(session()->has('warning'))
    <div x-data="{show: true}" x-init="{setTimeout(() => show = false, 3000)}" x-show="show" class="bg-yellow-500 text-white px-16 py-3 rounded-full">
        {{ session()->get('warning') }}
    </div>

@endif
