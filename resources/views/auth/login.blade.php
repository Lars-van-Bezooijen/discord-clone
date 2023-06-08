{{-- 

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
 --}}

@extends('layouts.base')
@section('content')

<div class="select-none w-full h-full sm:bg-[url({{ asset('images/discord_background.jpg') }})] bg-no-repeat bg-center bg-cover flex justify-center items-center">
    <div class="bg-discord-backgroundlight pt-6 px-6 sm:p-6 sm:m-6 h-full sm:h-auto sm:rounded-md w-full md:max-w-[500px]">
        <div class="text-center mb-4">
            <img src="{{ asset('images/discord_logo_with_text.png') }}" alt="logo" class="w-32 mb-6 m-auto sm:hidden">
            <p class="text-xl font-bold">Welcome back!</p>
            <p class="text-discord-graytext">We're so excited to see you again!</p>
        </div>
        
        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            <div class="flex flex-col mb-4">
                @if($errors->any())
                    <label for="email" class="text-discord-error font-bold text-xs mb-2">EMAIL - <span class="italic font-semibold">Login or password is invalid</span></label>
                @else
                    <label for="email" class="text-discord-graytext font-bold text-xs mb-2 after:content-['*'] after:text-red-500">EMAIL </label>
                @endif
                <input type="email" name="email" id="email" class="bg-discord-backgrounddark border-none rounded-md p-2 focus:ring-0">
            </div>
            <div class="flex flex-col">
                @if($errors->any())
                    <label for="email" class="text-discord-error font-bold text-xs mb-2">PASSWORD - <span class="italic font-semibold">Login or password is invalid</span></label>
                @else
                    <label for="password" class="text-discord-graytext font-bold text-xs mb-2 after:content-['*'] after:text-red-500">PASSWORD </label>
                @endif
                <input type="password" name="password" id="password" class="bg-discord-backgrounddark border-none rounded-md p-2 focus:ring-0">
            </div>
            <a href="{{ route('password.request') }}" class="basic-link inline-block mb-4">Forgot your password?</a>
            <div>
                <div class="bg-discord-blue hover:bg-discord-bluehover mb-2 rounded-md">
                    <button type="submit" class="w-full text-white p-2 font-semibold rounded-md focus:ring-discord-bluetext focus:ring-2 focus:outline-none">Log In</button>
                </div>
                <p class="text-sm text-discord-graytext">Need an account? <a href="{{ route('register') }}" class="basic-link">Register</a></p>
            </div>
        </form>
    </div>
</div>

@endsection
