@extends('layouts.base')
@section('content')

<div class="select-none w-full h-full sm:bg-[url({{ asset('images/discord_background.jpg') }})] bg-no-repeat bg-center bg-cover flex justify-center items-center">
    {{-- Container --}}
    <div class="bg-discord-backgroundlight pt-6 px-6 sm:p-6 sm:m-6 h-full sm:h-auto sm:rounded-md w-full md:max-w-[500px]">
        {{-- Heading --}}
        <div class="text-center mb-4">
            <img src="{{ asset('images/discord_logo_with_text.png') }}" alt="logo" class="w-32 mb-6 m-auto sm:hidden">
            <p class="text-xl font-bold">Create an account</p>
        </div>
        
        {{-- Content --}}
        <form action="{{ route('register') }}" method="POST">
            @csrf
            
            {{-- Email --}}
            <div class="flex flex-col mb-4">
                @if($errors->has('email'))
                    <label for="email" class="text-discord-error font-bold text-xs mb-2">EMAIL - <span class="italic font-semibold">Email is invalid</span></label>
                @else
                    <label for="email" class="text-discord-graytext font-bold text-xs mb-2">EMAIL </label>
                @endif
                <input type="email" name="email" id="email" class="bg-discord-backgrounddark border-none rounded-md p-2 focus:ring-0">
            </div>
            {{-- Username --}}
            <div class="flex flex-col mb-4">
                @if($errors->has('username'))
                    <label for="username" class="text-discord-error font-bold text-xs mb-2">USERNAME - <span class="italic font-semibold">Username is not valid or already taken</span></label>
                @else
                    <label for="email" class="text-discord-graytext font-bold text-xs mb-2">USERNAME </label>
                @endif
                <input type="text" name="username" id="username" class="bg-discord-backgrounddark border-none rounded-md p-2 focus:ring-0">
            </div>
            {{-- Password --}}
            <div class="flex flex-col mb-4">
                @if($errors->has('password'))
                    <label for="email" class="text-discord-error font-bold text-xs mb-2">PASSWORD - <span class="italic font-semibold">Password is not valid or do not match</span></label>
                @else
                    <label for="password" class="text-discord-graytext font-bold text-xs mb-2">PASSWORD </label>
                @endif
                <input type="password" name="password" id="password" class="bg-discord-backgrounddark border-none rounded-md p-2 focus:ring-0">
            </div>
            {{-- Password confirmation --}}
            <div class="flex flex-col mb-4">
                @if($errors->has('password'))
                    <label for="password_confirmation" class="text-discord-error font-bold text-xs mb-2">PASSWORD CONFIRMATION - <span class="italic font-semibold">Password is not valid or do not match</span></label>
                @else
                    <label for="password_confirmation" class="text-discord-graytext font-bold text-xs mb-2">PASSWORD CONFIRMATION </label>
                @endif
                <input type="password" name="password_confirmation" id="password_confirmation" class="bg-discord-backgrounddark border-none rounded-md p-2 focus:ring-0">
            </div>
            {{-- Date of birth --}}
            <div class="flex flex-col mb-4">
                @if($errors->has('date_of_birth'))
                    <label for="date_of_birth" class="text-discord-error font-bold text-xs mb-2">DATE OF BIRTH - <span class="italic font-semibold">You must be 13 years or older</span></label>
                @else
                    <label for="date_of_birth" class="text-discord-graytext font-bold text-xs mb-2">DATE OF BIRTH </label>
                @endif
                <input type="date" name="date_of_birth" id="date_of_birth" class="bg-discord-backgrounddark border-none rounded-md p-2 focus:ring-0">
            </div>
            {{-- Agree checkbox --}}
            <div class="flex flex-col mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="agree" id="agree" class="w-6 h-6 bg-transparent text-discord-blue border-1 border-discord-graytext rounded-md p-2 focus:ring-0">
                    <p class="ml-2 text-xs">I have read and agree to Discord's <a href="https://discord.com/terms" class="basic-link text-xs">Terms of Service</a> and <a href="https://discord.com/privacy" class="basic-link text-xs">Privacy Policy</a>.</p>
                </div>
                
            </div>
            {{-- Submit --}}
            <div>
                <div id="button-container" class="bg-discord-blue hover:bg-discord-bluehover mb-2 rounded-md opacity-50">
                    <button disabled id="continue" type="submit" class="cursor-not-allowed w-full text-white p-2 font-semibold rounded-md focus:ring-discord-bluetext focus:ring-2 focus:outline-none">Continue</button>
                </div>
                <p class="text-sm text-discord-graytext"><a href="{{ route('login') }}" class="basic-link">Already have an account?</a></p>
            </div>
        </form>
    </div>
</div>

{{-- Button interaction --}}
<script>
    // Get elements
    var buttonContainer = document.getElementById('button-container');
    var continueBtn = document.getElementById('continue');
    var agree = document.getElementById('agree');
    
    // Disable submit button if agree checkbox is not checked and vice versa
    agree.addEventListener('click', function() 
    {
        if (agree.checked) // If agree checkbox is checked
        {
            continueBtn.disabled = false;
            continueBtn.classList.remove('cursor-not-allowed');
            buttonContainer.classList.remove('opacity-50');
        } 
        else // If agree checkbox is not checked
        {
            continueBtn.disabled = true;
            continueBtn.classList.add('cursor-not-allowed');
            buttonContainer.classList.add('opacity-50');
        }
    });

    
</script>

@endsection

