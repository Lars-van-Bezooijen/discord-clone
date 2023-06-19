@props([
    'content' => $content ?? '',
    'side' => $side ?? 'top',
])
@php
    switch ($side) 
    {
        case 'left':
            $stylingSide = 'right-[calc(100%+1em)] top-1/2 -translate-y-1/2 before:top-1/2 before:-right-1 before:translate-x-1/2 before:-translate-y-1/2 before:border-l-[6px] before:border-l-transparent before:border-t-[8px] before:border-t-black before:border-r-[6px] before:border-r-transparent before:-rotate-90';
            break;

        case 'right':
            $stylingSide = 'left-[calc(100%+1em)] top-1/2 -translate-y-1/2 before:top-1/2 before:-left-1 before:-translate-x-1/2 before:-translate-y-1/2 before:border-l-[6px] before:border-l-transparent before:border-t-[8px] before:border-t-black before:border-r-[6px] before:border-r-transparent before:rotate-90';
            break;  

        case 'top':
            $stylingSide = '-top-10 left-1/2 -translate-x-1/2 before:top-full before:left-1/2 before:-translate-x-1/2 before:border-l-[6px] before:border-l-transparent before:border-t-[8px] before:border-t-black before:border-r-[6px] before:border-r-transparent';
            break;

        case 'bottom':
            $stylingSide = '-bottom-10 left-1/2 -translate-x-1/2 before:bottom-full before:left-1/2 before:-translate-x-1/2 before:border-l-[6px] before:border-l-transparent before:border-b-[8px] before:border-b-black before:border-r-[6px] before:border-r-transparent';
            break;
    }
@endphp

<div class="group-hover:block w-max hidden bg-black p-2 px-4 font-semibold rounded-sm w-fit text-sm absolute {{ $stylingSide }} before:absolute before:w-0 before:h-0">

    <p>{{ $content }}</p>
</div>