@props([
    'content' => $content ?? '',
    'side' => $side ?? 'top',
    // 'direction' => $direction ?? 'right',
])
@php
    switch ($side) 
    {
        case 'left':
            $stylingSide = 'left-[calc(100%+1em)] top-1/2 -translate-y-1/2';
            break;

        case 'right':
            $stylingSide = 'right-[calc(100%+1em)] top-1/2 -translate-y-1/2';
            break;  

        case 'top':
            $stylingSide = '-top-10 left-1/2 -translate-x-1/2';
            break;

        case 'bottom':
            $stylingSide = '-bottom-10 left-1/2 -translate-x-1/2';
            break;
    }

    // switch ($direction) 
    // {
    //     case 'left':
    //         $stylingDirection = 'right-[calc(100%-2rem)]';
    //         break;

    //     case 'right':
    //         $stylingDirection = '';
    //         break;  

    //     case 'top':
    //         $stylingDirection = ' ';
    //         break;

    //     case 'bottom':
    //         $stylingDirection = ' ';
    //         break;
        
    //     default:
    //         # code...
    //         break;
    // }
@endphp

<div class="group-hover:block w-max hidden bg-black p-2 px-4 font-semibold rounded-sm w-fit text-sm absolute {{ $stylingSide }} 
{{-- {{ $stylingDirection }} --}}
before:absolute before:top-full before:left-3 before:w-0 before:h-0 before:border-l-[6px] before:border-l-transparent before:border-t-[8px] before:border-t-black before:border-r-[6px] before:border-r-transparent">

    <p>{{ $content }}</p>
</div>