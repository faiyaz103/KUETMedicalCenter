<x-admin-layout>
    <section class="container px-2 py-6 mx-auto max-w-6xl">

        <div class="max-w-sm mx-auto py-2 bg-green-200 flex justify-center items-center">
            <h2 class="text-lg font-bold py-2 text-teal-800">Update Service</h2>
        </div>

        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto pt-4">
            @csrf
            @method('PUT')

            <div class="mb-5">
                <label for="image" class="block mb-2 text-sm font-medium text-teal-800">Upload Image</label>
                <input type="file" name="image" accept="image/jpeg, image/jpg, image/png, image/gif"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-800 focus:border-teal-800 block w-full p-2.5" />
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                @if ($service->file_path)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $service->file_path) }}" alt="Service Image" class="w-32 h-32 object-cover rounded-lg">
                        <div class="mt-2">
                            <input type="checkbox" name="remove_image" id="remove_image" value="1">
                            <label for="remove_image" class="text-sm font-medium text-red-600">Remove Image</label>
                        </div>
                    </div>
                @endif
            </div>

            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-teal-800">Service Name</label>
                <input type="text" name="name" value="{{ $service->name }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-800 focus:border-teal-800 block w-full p-2.5"
                    required />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-teal-800">Description</label>
                <textarea name="description"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-800 focus:border-teal-800 block w-full p-2.5"
                    required>{{ $service->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="text-white bg-teal-800 hover:bg-gray-300 hover:text-teal-800 hover:border hover:border-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                Update Service
            </button>
        </form>

    </section>
</x-admin-layout>
