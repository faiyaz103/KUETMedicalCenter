<div class="relative ites ml-3">
    <button id="profile-button" class="relative px-4 flex rounded-md bg-gray-100 text-red-800 text-lg hover:bg-red-200 focus:ring-2 focus:ring-red-600 focus:ring-offset-2 focus:ring-offset-red-400 focus:outline-none">
        {{auth()->user()->name}} 
    </button>
    <div id="profile-menu" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
        <a href='/profile' class="block px-4 py-2 text-sm text-gray-700">Your Profile</a>

        {{-- Show settings only if user role is admin --}}
        @if(auth()->user()->role == 'admin')
            <a href='/admin/dashboard' class="block px-4 py-2 text-sm text-gray-800">Admin Dashboard</a>
        @elseif(auth()->user()->role == 'student')
            <a href='/student/dashboard' class="block px-4 py-2 text-sm text-gray-800">Student Dashboard</a>
        @endif
        
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-700">Sign out</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const profileButton = document.getElementById("profile-button");
        const profileMenu = document.getElementById("profile-menu");

        profileButton.addEventListener("click", function () {
            profileMenu.classList.toggle("hidden"); // Toggle visibility
        });

        // Close the menu when clicking outside
        document.addEventListener("click", function (event) {
            if (!profileButton.contains(event.target) && !profileMenu.contains(event.target)) {
                profileMenu.classList.add("hidden");
            }
        });
    });
</script>
