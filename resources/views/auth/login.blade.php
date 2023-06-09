@extends('layouts.base')
@section('content')

<div class="select-none w-full h-full sm:bg-[url({{ asset('images/discord_background.jpg') }})] bg-no-repeat bg-center bg-cover flex justify-center items-center">
    {{-- Container --}}
    <div class="bg-discord-backgroundlight pt-6 px-6 sm:p-6 sm:m-6 h-full sm:h-auto sm:rounded-md w-full md:max-w-[500px]">
        {{-- Heading --}}
        <div class="text-center mb-4">
            <img src="{{ asset('images/discord_logo_with_text.png') }}" alt="logo" class="w-32 mb-6 m-auto sm:hidden">
            <p class="text-xl font-bold">Welcome back!</p>
            <p class="text-discord-graytext">We're so excited to see you again!</p>
        </div>
        
        {{-- Content --}}
        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            {{-- Email --}}
            <div class="flex flex-col mb-4">
                @if($errors->any())
                    <label for="email" class="text-discord-error font-bold text-xs mb-2">EMAIL - <span class="italic font-semibold">{{ $errors->first('email') }}</span></label>
                @else
                    <label for="email" class="text-discord-graytext font-bold text-xs mb-2 after:content-['*'] after:text-discord-error"">EMAIL </label>
                @endif
                <input type="email" name="email" id="email" class="bg-discord-backgrounddark border-none rounded-md p-2 focus:ring-0">
            </div>
            {{-- Password --}}
            <div class="flex flex-col">
                @if($errors->any())
                    <label for="email" class="text-discord-error font-bold text-xs mb-2">PASSWORD - <span class="italic font-semibold">{{ $errors->first('email') }}</span></label>
                @else
                    <label for="password" class="text-discord-graytext font-bold text-xs mb-2 after:content-['*'] after:text-discord-error">PASSWORD </label>
                @endif
                <input type="password" name="password" id="password" class="bg-discord-backgrounddark border-none rounded-md p-2 focus:ring-0">
            </div>
            {{-- Forgot password --}}
            <a href="{{ route('password.request') }}" class="basic-link inline-block mb-4">Forgot your password?</a>
            {{-- Submit --}}
            <div>
                <div class="bg-discord-blue hover:bg-discord-bluehover mb-2 rounded-md">
                    <button type="submit" class="w-full text-white p-2 font-semibold rounded-md focus:ring-discord-bluetext focus:ring-2 focus:outline-none">Log In</button>
                </div>
                {{-- Register link --}}
                <p class="text-sm text-discord-graytext">Need an account? <a href="{{ route('register') }}" class="basic-link">Register</a></p>
            </div>
        </form> {{-- End of form --}}
    </div> {{-- End of container --}}
</div>

@endsection
