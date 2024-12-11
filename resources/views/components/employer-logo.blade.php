@props(['employer','width' => 90])

<!-- <img src="https://picsum.photos/seed/{{ rand(0,1000) }}/100/100" alt="" class="rounded-xl"> -->

<img src="{{ asset($employer->logo) }}" alt="logo" class="rounded-xl" width="{{ $width }}">