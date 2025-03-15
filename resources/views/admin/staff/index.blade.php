<x-admin-layout>
    <section class="container px-2 py-6 mx-auto max-w-6xl">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">Staff</h2>
            <a href="{{ route('staff.create') }}">
                <button class="px-4 py-2 text-white bg-green-600 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                    + Add Staff
                </button>
            </a>
        </div>
    
        <div class="md:block overflow-x-auto">
            <div class="min-w-full table-responsive">
                <table class="min-w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-green-200">
                        <tr>
                            <th class="px-2 py-2 text-xs font-medium text-left text-gray-800">Name</th>
                            <th class="px-2 py-2 text-xs font-medium text-left text-gray-800">Designation</th>
                            <th class="px-2 py-2 text-xs font-medium text-left text-gray-800">Contact</th>
                            <th class="px-2 py-2 text-xs font-medium text-left text-gray-800">Email</th>
                            <th class="px-2 py-2 text-xs font-medium text-left text-gray-800">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-teal-800">
                        @foreach ($staff as $staff)
                        <tr>
                            <td class="px-2 py-2 text-xs text-gray-800 whitespace-nowrap">
                                <div class="flex items-center gap-x-2">
                                    <img class="object-cover w-8 h-8 rounded-full" src="{{ $staff->image ? asset('storage/' . $staff->image ) : 'https://via.placeholder.com/150' }}" alt="">
                                    <div>
                                        <h2 class="text-xs font-medium text-gray-800">{{ $staff->name }}</h2>
                                    </div>
                                </div>
                            </td>

                            <td class="px-2 py-2 text-xs text-gray-800 whitespace-nowrap">{{ $staff->designation }}</td>
                            <td class="px-2 py-2 text-xs text-gray-800 whitespace-nowrap">{{ $staff->contact }}</td>
                            <td class="px-2 py-2 text-xs text-gray-800 whitespace-nowrap">{{ $staff->email }}</td>

                            <td class="px-2 py-2 text-xs text-center whitespace-nowrap">
                                <a href="{{route('staff.edit', $staff->id)}}">
                                    <button class="px-2 py-1 mr-2 text-xs text-white bg-blue-600 rounded hover:bg-blue-700">Edit</button>
                                </a>

                                <form action="{{ route('staff.destroy', $staff->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this Staff?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-2 py-1 text-xs text-white bg-red-600 rounded hover:bg-red-700">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-admin-layout>
