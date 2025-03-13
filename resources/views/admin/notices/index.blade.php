<x-mainlayout :title="'Notice Board'" :heading="'Notices'">

    <section class="container mx-auto px-2 py-6 max-w-7xl">
        <div class="flex flex-col">
            <div class="flex justify-between items-center mb-4">
                <label class="block bg-teal-800 text-white px-4 py-2 text-lg font-semibold rounded-md">
                    Notice Board
                </label>
                <a href="{{ route('notices.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
                    + Create Notice
                </a>
            </div>
    
            <div class="overflow-x-auto py-2">
                <div class="border border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-green-200">
                            <tr>
                                <th class="px-2 py-2 text-left text-gray-800">Date</th>
                                <th class="px-2 py-2 text-left text-gray-800">Notice Title</th>
                                <th class="px-2 py-2 text-left text-gray-800">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($notices as $notice)
                                <tr>
                                    <td class="px-2 py-2 text-gray-800">{{ $notice->created_at->format('d M, Y') }}</td>
                                    <td class="px-2 py-2">
                                        <a href="{{ route('notices.show', $notice->id) }}" target="_blank" class="text-blue-600 hover:underline">
                                            {{ $notice->title }}
                                        </a>
                                    </td>
                                    <td class="px-2 py-2">
                                        <a href="{{ route('notices.edit', $notice->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                            Edit
                                        </a>
    
                                        <form action="{{ route('notices.destroy', $notice->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this notice?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
    
                            @if ($notices->isEmpty())
                                <tr>
                                    <td colspan="3" class="px-2 py-4 text-center text-gray-500">No notices available</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    

</x-mainlayout>