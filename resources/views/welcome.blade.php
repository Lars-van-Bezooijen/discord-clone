@extends('layouts.base')
@section('content')

<!-- Left navigation -->
<div id="leftNavigation" class="hidden w-auto h-full flex md:flex lg:flex">
    <!-- Left pane -->
    <div class="w-[72px] bg-gray-800 h-full p-[10px] pt-1">
        <img src="{{ asset('images/discord_logo_text.png') }}" alt="logo" class="w-full mb-2">
        <!-- DM -->
        <div class="mb-2">
            <!-- Hover -->
            <div class="bg-gray-600 mb-2 aspect-square flex justify-center items-center rounded-full hover:rounded-[16px] hover:cursor-pointer hover:bg-blue-600 relative
            hover:before:absolute hover:before:-inset-[10px] hover:before:rounded-tr-full hover:before:rounded-br-full hover:before:bg-white hover:before:w-1 hover:before:h-6 hover:before:top-[50%] hover:before:-translate-y-[50%]">
                <img src="{{ asset('images/discord_logo_white.png') }}" alt="logo" class="w-8">
            </div>
            <!-- Active -->
            <div class="bg-gray-600 mb-2 aspect-square flex justify-center items-center rounded-full hover:rounded-[16px] hover:cursor-pointer hover:bg-blue-600 relative
            before:absolute before:-inset-[10px] before:rounded-tr-full before:rounded-br-full before:bg-white before:w-1 before:h-[80%] before:top-[50%] before:-translate-y-[50%]">
                <img src="{{ asset('images/discord_logo_white.png') }}" alt="logo" class="w-8">
            </div>
            <!-- Unread messages -->
            <div class="bg-gray-600 mb-2 aspect-square flex justify-center items-center rounded-full hover:rounded-[16px] hover:cursor-pointer hover:bg-blue-600 relative
            before:absolute before:-inset-[10px] before:rounded-tr-full before:rounded-br-full before:bg-gray-400 before:w-1 before:h-2 before:top-[50%] before:-translate-y-[50%]">
                <img src="{{ asset('images/discord_logo_white.png') }}" alt="logo" class="w-8">
            </div>
        </div>

        <!-- Server list -->
        <div>

        </div>

        <!-- Create server -->
        <div>

        </div>
    </div> 

    <!-- Right pane -->
    <div class="w-[240px] h-full bg-gray-700">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic facere iste delectus consequuntur accusantium blanditiis! Ullam asperiores error dignissimos enim.</p>
    </div>

</div> <!-- End of left navigation -->

<!-- Main page -->
<div id="mainPage" class="overflow-hidden w-screen h-full flex">
    <!-- Main area -->
    <div class="bg-gray-600 w-screen h-full">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic facere iste delectus consequuntur accusantium blanditiis! Ullam asperiores error dignissimos enim.</p>
    </div>
    
</div> <!-- End of main page -->

<!-- Right navigation -->
<div id="rightNavigation" class="hidden w-auto h-full flex lg:flex">
   <!-- Sidebar right -->
   <div class="w-[340px] bg-gray-700">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic facere iste delectus consequuntur accusantium blanditiis! Ullam asperiores error dignissimos enim.</p>
    </div>
</div> <!-- End of right navigation -->

</div> <!-- End of all -->





<!-- Swipe script -->
<script src="https://cdn.jsdelivr.net/npm/hammerjs@2.0.8"></script>

<!-- Swipe functionality -->
<script>
document.addEventListener("DOMContentLoaded", function () 
{
    // Get the elements by their IDs
    const fullPage = document.getElementById("fullPage");
    const leftNavigation = document.getElementById("leftNavigation");
    const mainPage = document.getElementById("mainPage");
    const rightNavigation = document.getElementById("rightNavigation");

    // Initialize Hammer.js on the whole page element
    const hammertime = new Hammer(fullPage);

    // Define swipe directions

    // Swipe right
    // When left navigation is visible, show main page and hide left and right navigation. When main page is visible, show right navigation.
    hammertime.on("swiperight", function () 
    {
        mainPage.style.userSelect = "text";
        if(leftNavigation.classList.contains("hidden") && rightNavigation.classList.contains("hidden")) {
            // When left navigation is hidden, show it
            leftNavigation.classList.remove("hidden");
        } else if (!leftNavigation.classList.contains("hidden") && rightNavigation.classList.contains("hidden")) {
            // When left navigation is visible, hide it
            leftNavigation.classList.add("hidden");
        } else if (leftNavigation.classList.contains("hidden") && !rightNavigation.classList.contains("hidden")) {
            // When right navigation is visible, hide it
            rightNavigation.classList.add("hidden");
        } else {
            // When left and right navigation are visible, hide them
            leftNavigation.classList.add("hidden");
            rightNavigation.classList.add("hidden");
        }
    });


    // Swipe left
    // When left navigation is visible, show main page and hide left and right navigation. When main page is visible, show right navigation.
    hammertime.on("swipeleft", function () {
        mainPage.style.userSelect = "text";
        // When main page is shown, show right navigation
        if(leftNavigation.classList.contains("hidden") && rightNavigation.classList.contains("hidden")) {
            // When right navigation is hidden, show it
            rightNavigation.classList.remove("hidden");
        } else if (!leftNavigation.classList.contains("hidden") && rightNavigation.classList.contains("hidden")) {
            // When left navigation is visible, hide it
        } else if (leftNavigation.classList.contains("hidden") && !rightNavigation.classList.contains("hidden")) {
            // When right navigation is visible, hide it
            rightNavigation.classList.add("hidden");
        } else {
            // When left and right navigation are visible, hide them
            leftNavigation.classList.add("hidden");
            rightNavigation.classList.add("hidden");
        }
    });
});
</script>

@endsection