<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-teal-800 text-white">
            <div class="px-4 py-4 bg-teal-600">
                <div class="flex items-center justify-between">
                    {{-- <img src="https://tailwindflex.com/images/logo.svg" alt="Logo" class="h-8 w-auto"> --}}
                    <span class="text-xl font-bold">Admin Dashboard</span>
                    
                </div>
                <p class="mt-1.5 text-md font-semibold text-gray-200">
                    Central Medical Center
                </p>
            </div>


            <nav class="mt-5 px-2">
                <!-- Main Navigation -->
                <div class="space-y-4">
                    
                    <!-- Basic Info -->
                    <x-admin-navlink href="/admin/dashboard" :active="request()->is('admin/dashboard*')">
                        <img src="{{ asset('images/admin/home.png') }}" alt="Doctors" class="h-5 w-5 mr-3 inline">
                        Home
                    </x-admin-navlink>

                    <!-- Doctors List -->
                    <x-admin-navlink href="/admin/doctors" :active="request()->is('admin/doctors') || request()->is('admin/doctors/create') || request()->is('admin/doctors/{id}/edit')">
                        <img src="{{ asset('images/admin/doctor.png') }}" alt="Doctors" class="h-5 w-5 mr-3 inline">
                        Doctors
                    </x-admin-navlink>

                    <!-- Doctors Schedule -->
                    <x-admin-navlink href="/admin/doctors-schedule" :active="request()->is('admin/doctors-schedule*')">
                        <img src="{{ asset('images/admin/schedule.png') }}" alt="Doctors Schedule" class="h-5 w-5 mr-3 inline">
                        Doctors' Schedule
                    </x-admin-navlink>

                    <!-- Staff List -->
                    <x-admin-navlink href="/admin/staff" :active="request()->is('admin/staff*')">
                        <img src="{{ asset('images/admin/staff.png') }}" alt="Staff" class="h-5 w-5 mr-3 inline">
                        Staff
                    </x-admin-navlink>

                    <!-- Units -->
                    <x-admin-navlink href="/admin/units" :active="request()->is('admin/units*')">
                        <img src="{{ asset('images/admin/units.png') }}" alt="Units" class="h-5 w-5 mr-3 inline">
                        Units
                    </x-admin-navlink>

                    <!-- Tests -->
                    <x-admin-navlink href="/admin/tests" :active="request()->is('admin/tests*')">
                        <img src="{{ asset('images/admin/tests.png') }}" alt="Doctors" class="h-5 w-5 mr-3 inline">
                        Tests
                    </x-admin-navlink>

                    <!-- Services -->
                    <x-admin-navlink href="/admin/services" :active="request()->is('admin/services*')">
                        <img src="{{ asset('images/admin/services.png') }}" alt="Doctors" class="h-5 w-5 mr-3 inline">
                        Services
                    </x-admin-navlink>

                    <!-- Notices -->
                    <x-admin-navlink href="{{ route('notices.list') }}" :active="request()->is('admin/notices*')">
                        <img src="{{ asset('images/admin/notices.png') }}" alt="Doctors" class="h-5 w-5 mr-3 inline">
                        Notices
                    </x-admin-navlink>

                    <div class>
                        <a href="{{ route('dashboard')}}" class="flex items-center px-2 py-2 text-sm font-medium bg-blue-600 text-white hover:bg-blue-200 hover:text-blue-600 group transition-all duration-200">
                            <img src="{{ asset('images/admin/site.png') }}" alt="Site" class="h-5 w-5 mr-3 inline">
                            Back to Site
                        </a>
                        <a href="{{ route('profile.edit')}}" class="flex items-center px-2 py-2 text-sm font-medium bg-orange-400 text-white hover:bg-orange-200 hover:text-orange-600 group transition-all duration-200">
                            <img src="{{ asset('images/admin/adminprofile.png') }}" alt="Admin" class="h-5 w-5 mr-3 inline">
                            Admin Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-2 py-2 text-sm font-medium bg-red-600 text-white hover:bg-red-200 hover:text-red-600">
                                <img src="{{ asset('images/admin/logout.png') }}" alt="Admin" class="h-5 w-5 mr-3 inline">
                                Log Out
                            </button>
                        </form>
                    </div>
                    

                </div>
            </nav>
        </aside>

        
        <main class="flex-1 bg-white">
            <header class="bg-gray-200 px-4 py-7 text-teal-800">
                <h1 class="text-2xl font-bold sm:text-3xl">
                    KHULNA UNIVERSITY OF ENGINEERING & TECHNOLOGY
                </h1> 
            </header>
            
            {{ $slot }}
            
        </main>

        
    </div>

</body>
</html>