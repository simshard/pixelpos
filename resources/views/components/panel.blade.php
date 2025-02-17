@php
    $classes = 'group p-4 bg-white/5 rounded-xl border border-transparent
     hover:border-violet-800  transition-colors duration-300';
@endphp
<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div> 