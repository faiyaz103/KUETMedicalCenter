<x-admin-layout>
    <section class="container px-2 py-6 mx-auto max-w-6xl">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">User Feedback</h2>
        </div>
    
        <div class="md:block overflow-x-auto">
            <div class="min-w-full table-responsive">
                <table class="min-w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-green-200">
                        <tr>
                            <th class="px-2 py-2 text-xs font-medium text-left text-gray-800">Name</th>
                            <th class="px-2 py-2 text-xs font-medium text-left text-gray-800">Email</th>
                            <th class="px-2 py-2 text-xs font-medium text-left text-gray-800">Message</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-teal-800">
                        @foreach ($feedbacks as $feedback)
                        <tr>
                            <td class="px-2 py-2 text-xs text-gray-800 whitespace-nowrap">{{ $feedback->name }}</td>
                            <td class="px-2 py-2 text-xs text-gray-800 whitespace-nowrap">{{ $feedback->email }}</td>
                            <td class="px-2 py-2 text-xs text-gray-800 whitespace-nowrap">{{ $feedback->message }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-admin-layout>
