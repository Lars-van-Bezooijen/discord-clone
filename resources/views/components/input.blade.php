@props([
    'type' => $type ?? "text",
    'title' => $title ?? "TITLE",
    'name' => $name,
    'placeholder' => $placeholder ?? "",
    'errorCheck' => $errorCheck ?? false,
    'errorMessage' => $errorMessage ?? "Unknown error"
    ])

<div class="flex flex-col mb-2">
    <div class="group relative mb-2 w-fit">
        {{-- Hover content --}}
        <div class="group-hover:block w-max hidden bg-black p-2 px-4 font-semibold rounded-sm w-fit text-sm absolute -top-10 before:absolute before:top-full before:left-3 before:w-0 before:h-0 before:border-l-[6px] before:border-l-transparent before:border-t-[8px] before:border-t-black before:border-r-[6px] before:border-r-transparent">
            <p>Must be an email</p>
        </div> {{-- End of hover content --}}

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