@extends('layouts.base')
@section('content')

<div class="select-none w-full h-full bg-no-repeat bg-center bg-cover flex justify-center items-center" style="background: url('{{asset('img/discord_background.jpg')}}')">
    {{-- Container --}}
    <div class="bg-discord-backgroundlight pt-6 px-6 sm:p-6 sm:m-6 h-full sm:h-auto sm:rounded-md w-full md:max-w-[500px]">
        {{-- Heading --}}
        <div class="text-center mb-4">
            <img src="{{ asset('img/discord_logo_with_text.png') }}" alt="logo" class="w-32 mb-6 m-auto sm:hidden">
            <p class="text-xl font-bold">Welcome back!</p>
            <p class="text-discord-graytext">We're so excited to see you again!</p>
        </div>
        
        {{-- Content --}}
        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            {{-- Email --}}
            <x-input type="email" title="EMAIL" name="email" placeholder="" errorCheck="email" errorMessage="Email is invalid" hoverContent="Must be an email" hoverSide="top"/>

            {{-- Password --}}
            <x-input type="password" title="PASSWORD" name="password" placeholder="" errorCheck="password" errorMessage="Password is invalid or do not match" hoverContent="Password for the account" hoverSide="top"/>

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

{{-- Show password script --}}
<script type="text/javascript" src="{{ asset('js/show-password.js') }}"></script>

@endsection
