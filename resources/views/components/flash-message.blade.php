@if(session()->has('success'))

    <div x-data="{show: true}" x-init="{setTimeout(() => show = false, 3000)}" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-[#1da1f2] text-white px-16 py-3 rounded-full">
        {{ session()->get('success') }}
    </div>

@endif
