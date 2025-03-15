<x-admin-layout>
    <section class="container px-2 py-6 mx-auto max-w-6xl">

        <div class="max-w-sm mx-auto py-2 bg-green-200 flex justify-center items-center">
            <h2 class="text-lg font-bold py-2 text-teal-800">Add Staff</h2>
        </div>

    <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto pt-4">
        @csrf
        <div class="mb-5">
        <label for="image" class="block mb-2 text-sm font-medium text-teal-800 ">Upload Image</label>
        <input type="file" name="image" accept="image/jpeg, image/jpg, image/png, image/gif" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-800 focus:border-teal-800 block w-full p-2.5" />
        </div>
        @error('image')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-teal-800 ">Name</label>
            <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-800 focus:border-teal-800 block w-full p-2.5" required />
        </div>
        @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <div class="mb-5">
            <label for="designation" class="block mb-2 text-sm font-medium text-teal-800 ">Designation</label>
            <input type="text" name="designation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-800 focus:border-teal-800 block w-full p-2.5" required />
        </div>
        @error('designation')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <div class="mb-5">
            <label for="contact" class="block mb-2 text-sm font-medium text-teal-800 ">Contact</label>
            <input type="text" name="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-800 focus:border-teal-800 block w-full p-2.5" required />
        </div> 
        @error('contact')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-teal-800 ">Email</label>
            <input type="text" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-800 focus:border-teal-800 block w-full p-2.5" required />
        </div>
        @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        
        <button type="submit" class="text-white bg-teal-800 hover:bg-gray-300 hover:text-teal-800 hover:border hover:border-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Add</button>
    </form>
  

    </section>
</x-admin-layout>

