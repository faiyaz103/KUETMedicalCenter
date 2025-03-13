<!-- resources/views/home.blade.php -->
<x-mainlayout :title="'Notices - KUET Medical Center'" :heading="'Notices'">
    <!-- Your main content goes here -->

    <section class="container mx-auto px-2 py-6 max-w-7xl">
        <div class="flex flex-col">
            {{-- <label class="block bg-teal-800 text-white px-4 py-2 text-lg font-semibold rounded-md w-full">
                Weekly Schedule
            </label> --}}
            <div class="overflow-x-auto py-2">
                <div class="border border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-green-200">
                            <tr>
                                <th class="px-2 py-2 text-left text-gray-800">Date</th>
                                <th class="px-2 py-2 text-left text-gray-800">Notice</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-teal-800">
                            @foreach ($notices as $index => $notice)
                            <tr>
                                <td class="px-2 py-2 text-gray-500">{{ $notice->created_at->format('d M, Y h:i A') }}</td>
                                <td class="px-2 py-2">
                                    <a href="{{ route('notices.show', $notice->id) }}" target="_blank" class="font-medium text-red-700 hover:underline hover:text-blue-600">
                                        {{ $notice->title }}
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                            @if ($notices->isEmpty())
                                <tr>
                                    <td colspan="3" class="px-2 py-4 text-center text-gray-800">No notices available</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>   

</x-mainlayout>
