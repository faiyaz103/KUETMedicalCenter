<x-admin-layout>

    <section class="container mx-auto px-2 py-6 max-w-7xl">
        <div class="flex flex-col">
            <label class="block bg-teal-800 text-white px-4 py-2 text-lg font-semibold rounded-md w-full">
                Weekly Schedule
            </label>
            <div class="overflow-x-auto py-2">
                <div class="border border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-green-200">
                            <tr>
                                <th class="px-2 py-2 text-left text-gray-800">Doctor</th>
                                <th class="px-2 py-2 text-left text-gray-800">Sat</th>
                                <th class="px-2 py-2 text-left text-gray-800">Sun</th>
                                <th class="px-2 py-2 text-left text-gray-800">Mon</th>
                                <th class="px-2 py-2 text-left text-gray-800">Tue</th>
                                <th class="px-2 py-2 text-left text-gray-800">Wed</th>
                                <th class="px-2 py-2 text-left text-gray-800">Thu</th>
                                <th class="px-2 py-2 text-left text-gray-800">Fri</th>
                                <th class="px-2 py-2 text-left text-gray-800">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-teal-800">
                            @foreach ($doctors as $index => $doctor)
                            <tr>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->name }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->saturday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->sunday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->monday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->tuesday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->wednesday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->thursday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->friday ?? '---' }}</td>
                                <td class="px-2 py-2 text-xs text-center whitespace-nowrap">
                                    <a href="{{ route('schedule.edit', $doctor->id) }}">
                                        <button class="px-2 py-1 text-xs text-white bg-blue-600 rounded hover:bg-blue-700">Edit</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>   



</x-admin-layout>