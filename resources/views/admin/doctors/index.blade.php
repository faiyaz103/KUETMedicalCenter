<section class="container px-2 py-6 mx-auto max-w-6xl">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold text-gray-800">Doctors List</h2>
        <button class="px-4 py-2 text-white bg-green-600 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
            + Create
        </button>
    </div>

    <!-- Table for large screens -->
    <div class="hidden md:block overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-green-200">
                <tr>
                    <th class="px-4 py-3.5 text-sm font-medium text-left text-gray-800">#</th>
                    <th class="px-4 py-3.5 text-md font-medium text-left text-gray-800">Name</th>
                    <th class="px-4 py-3.5 text-md font-medium text-left text-gray-800">Designation</th>
                    <th class="px-4 py-3.5 text-md font-medium text-left text-gray-800">Specialization</th>
                    <th class="px-4 py-3.5 text-md font-medium text-left text-gray-800">Contact</th>
                    <th class="px-4 py-3.5 text-md font-medium text-left text-gray-800">Email</th>
                    <th class="px-4 py-3.5 text-md font-medium text-center text-gray-800">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-teal-800">
                <!-- Example Row -->
                <tr>
                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">1</td>
                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                            <img class="object-cover w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Dr. John Doe">
                            <span class="text-sm font-medium text-gray-800">Dr. John Doe</span>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">Chief Surgeon</td>
                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">Surgery</td>
                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">+1234567890</td>
                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">johndoe@example.com</td>
                    <td class="px-4 py-4 text-sm text-center whitespace-nowrap">
                        <button class="px-3 py-1 mr-2 text-sm text-white bg-blue-600 rounded hover:bg-blue-700">Edit</button>
                        <button class="px-3 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700">Delete</button>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">1</td>
                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                            <img class="object-cover w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Dr. John Doe">
                            <span class="text-sm font-medium text-gray-800">Dr. John Doe</span>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">Chief Surgeon</td>
                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">Surgery</td>
                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">+1234567890</td>
                    <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">johndoe@example.com</td>
                    <td class="px-4 py-4 text-sm text-center whitespace-nowrap">
                        <button class="px-3 py-1 mr-2 text-sm text-white bg-blue-600 rounded hover:bg-blue-700">Edit</button>
                        <button class="px-3 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Card View for small screens -->
    <div class="space-y-4 md:hidden">
        <!-- Example Card -->
        <div class="p-4 bg-white rounded-lg shadow border border-gray-200">
            <div class="flex items-center space-x-4 mb-2">
                <img class="object-cover w-12 h-12 rounded-full" src="https://via.placeholder.com/150" alt="Dr. John Doe">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Dr. John Doe</h3>
                    <p class="text-sm text-gray-500">Chief Surgeon</p>
                </div>
            </div>
            <p class="text-sm text-gray-600"><span class="font-semibold">Specialization:</span> Surgery</p>
            <p class="text-sm text-gray-600"><span class="font-semibold">Contact:</span> +1234567890</p>
            <p class="text-sm text-gray-600"><span class="font-semibold">Email:</span> johndoe@example.com</p>
            <div class="flex justify-end gap-2 mt-3">
                <button class="px-3 py-1 text-sm text-white bg-blue-600 rounded hover:bg-blue-700">Edit</button>
                <button class="px-3 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700">Delete</button>
            </div>
        </div>
        <!-- Add more cards as needed -->
    </div>
</section>