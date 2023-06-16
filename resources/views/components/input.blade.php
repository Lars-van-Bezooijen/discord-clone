@props([
    'type' => $type ?? "text",
    'title' => $title ?? "TITLE",
    'name' => $name,
    'placeholder' => $placeholder ?? "",
    'errorCheck' => $errorCheck ?? false,
    'errorMessage' => $errorMessage ?? "Unknown error",


    ])

<div class="flex flex-col mb-2">
    <div class="group relative mb-2 w-fit">
        {{-- Hover content --}}
        <x-hover content="Must be of type email"  direction="right"/>

        {{-- Label --}}
        @if($errors->has($errorCheck))
            <label for="{{ $name }}" class="text-discord-error font-bold text-xs">{{ $title }} - <span class="italic font-semibold">{{ $errorMessage }}</span></label>
        @else
            <label for="{{ $name }}" class="text-discord-graytext font-bold text-xs mb-2">{{ $title }}</label>
        @endif
    </div>
    
    {{-- Input --}}
    <input value="{{ old($name) }}" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" class="bg-discord-backgrounddark border-none rounded-md p-2 focus:ring-0 placeholder:text-gray-500">
</div>