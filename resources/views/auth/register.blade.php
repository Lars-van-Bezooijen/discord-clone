@extends('layouts.base')
@section('content')

<div class="select-none w-full h-full bg-no-repeat bg-center bg-cover flex justify-center items-center" style="background: url('{{asset('img/discord_background.jpg')}}')">

    {{-- Container --}}
    <div class="bg-discord-backgroundlight pt-6 px-6 sm:p-6 sm:m-6 h-full sm:h-auto sm:rounded-md w-full md:max-w-[500px]">
        {{-- Heading --}}
        <div class="text-center mb-4">
            <img src="{{ asset('img/discord_logo_with_text.png') }}" alt="logo" class="w-32 mb-6 m-auto sm:hidden">
            <p class="text-xl font-bold">Create an account</p>
        </div>
        
        {{-- Content --}}
        <form action="{{ route('register') }}" method="POST">
            @csrf
            
            {{-- Email --}}
            <x-input type="email" title="EMAIL" name="email" placeholder="" errorCheck="email" errorMessage="Email is invalid" hoverContent="Must be an email" hoverSide="top"/>

            {{-- Username --}}
            <x-input type="text" title="USERNAME" name="username" placeholder="" errorCheck="username" errorMessage="Username is invalid or already taken" hoverContent="Username that will be displayed" hoverSide="top"/>

            {{-- Password --}}
            <x-input type="password" title="PASSWORD" name="password" placeholder="" errorCheck="password" errorMessage="Password is invalid or do not match" hoverContent="Password for account" hoverSide="top"/>

            {{-- Password confirmation --}}
            <x-input type="password" title="PASSWORD CONFIRMATION" name="password_confirmation" placeholder="" errorCheck="password" errorMessage="Password is invalid or do not match" hoverContent="Repeat your password" hoverSide="top"/>

            {{-- Date of birth --}}
            <x-input type="date" title="DATE OF BIRTH" name="date_of_birth" placeholder="" errorCheck="date_of_birth" errorMessage="You must be 13 years or older" hoverContent="When you were born" hoverSide="top"/>
            
            {{-- Agree checkbox --}}
            <div class="flex flex-col mb-4 mt-4">
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
        </form> {{-- End of content --}}
    </div> {{-- End of container --}}
</div>

{{-- Submit button interaction --}}
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

{{-- Show password script --}}
<script type="text/javascript" src="{{ asset('js/show-password.js') }}"></script>

@endsection

