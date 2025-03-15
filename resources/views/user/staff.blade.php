<!-- resources/views/home.blade.php -->
<x-mainlayout :title="'Staff - KUET Medical Center'" :heading="'Staff'">
    <!-- Your main content goes here -->
    <section class="container px-2 py-6 mx-auto max-w-7xl">
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-green-200">
                                <tr>
    
                                    <th scope="col" class="px-4 py-3.5 text-sm font-medium text-left text-gray-800">
                                       #
                                    </th>
    
                                    <th scope="col" class="px-4 py-3.5 text-md font-medium text-left text-gray-800">
                                        Name
                                    </th>
    
                                    <th scope="col" class="px-4 py-3.5 text-md font-medium text-left text-gray-800">
                                        Designation
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 text-md font-medium text-left text-gray-800">
                                        Contact
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 text-md font-medium text-left text-gray-800">
                                        Email
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-teal-800">
                                @foreach ($staff as $index => $staff)
                                <tr>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $index + 1 }}</td>

                                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-12 h-12 rounded-full" src="{{ $staff->image ? asset('storage/' . $staff->image ) : 'https://via.placeholder.com/150' }}" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800">{{ $staff->name }}</h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $staff->designation }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $staff->contact }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $staff->email }}</td>
                                    
                                </tr>
    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    

    </section>
</x-mainlayout>
