<x-admin-layout>
    <section class="container px-2 py-6 mx-auto max-w-6xl">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">Notices</h2>
            <a href="{{ route('notices.create') }}">
                <button class="px-4 py-2 text-white bg-green-600 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                    + Upload
                </button>
            </a>
        </div>
    
        <div class="md:block overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-green-200">
                    <tr>
                        <th class="px-4 py-3.5 text-sm font-medium text-left text-gray-800">Date</th>
                        <th class="px-4 py-3.5 text-md font-medium text-left text-gray-800">Notice</th>
                        <th class="px-4 py-3.5 text-md font-medium text-left text-gray-800">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-teal-800">
                    @foreach ($notices as $notice)
                    <tr>
                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $notice->created_at->format('d M, Y h:i A') }}</td>

                        <td class="px-4 py-4">
                            <a href="{{ route('notices.show', $notice->id) }}" target="_blank" class="text-blue-600 hover:underline">
                                {{ $notice->title }}
                            </a>
                        </td>

                        <td class="px-4 py-4 text-sm text-center whitespace-nowrap">
                            <a href="{{route('notices.edit', $notice->id)}}">
                                <button class="px-3 py-1 mr-2 text-sm text-white bg-blue-600 rounded hover:bg-blue-700">Edit</button>
                            </a>

                            <form action="{{ route('notices.destroy', $notice->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this notice?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700">Delete</button>
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