@props([
    'type' => $type ?? "text",
    'title' => $title ?? "TITLE",
    'name' => $name,
    'placeholder' => $placeholder ?? "",
    'errorCheck' => $errorCheck ?? false,
    'errorMessage' => $errorMessage ?? "Unknown error",
    'hoverContent' => $hoverContent ?? 'No hover content',
    'hoverSide' => $hoverSide ?? 'top',
    ])

<div class="flex flex-col mb-2">
    <div class="group relative mb-2 w-fit">
        {{-- Hover content --}}
        <x-hover content="{{ $hoverContent }}"  side="{{ $hoverSide }}"/>

        {{-- Label --}}
        @if($errors->has($errorCheck))
            <label for="{{ $name }}" class="text-discord-error font-bold text-xs">{{ $title }} - <span class="italic font-semibold">{{ $errorMessage }}</span></label>
        @else
            <label for="{{ $name }}" class="text-discord-graytext font-bold text-xs mb-2">{{ $title }}</label>
        @endif
    </div>
    
    {{-- Input --}}
    
    <div class="flex justify-between items-center bg-discord-backgrounddark border-none rounded-md focus:ring-0 placeholder:text-gray-500">
        <input value="{{ old($name) }}" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" class="password bg-discord-backgrounddark w-full border-none rounded-md focus:ring-0 placeholder:text-gray-500">
        @if($type == "password")
            <i class="show-password fa-solid fa-eye-slash p-2 mr-2 text-discord-icon hover:cursor-pointer"></i>
        @endif
    </div>
</div>