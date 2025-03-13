<x-mainlayout :title="'Doctors\' Schedule- KUET Medical Center'" :heading="'Doctors\' Schedule'">

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
                                <th class="px-2 py-2 text-left text-gray-800">#</th>
                                <th class="px-2 py-2 text-left text-gray-800">Doctor</th>
                                <th class="px-2 py-2 text-left text-gray-800">Sat</th>
                                <th class="px-2 py-2 text-left text-gray-800">Sun</th>
                                <th class="px-2 py-2 text-left text-gray-800">Mon</th>
                                <th class="px-2 py-2 text-left text-gray-800">Tue</th>
                                <th class="px-2 py-2 text-left text-gray-800">Wed</th>
                                <th class="px-2 py-2 text-left text-gray-800">Thu</th>
                                <th class="px-2 py-2 text-left text-gray-800">Fri</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-teal-800">
                            @foreach ($doctors as $index => $doctor)
                            @if($doctor->schedule)
                            <tr>
                                <td class="px-2 py-2 text-gray-500">{{ $index + 1 }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->name }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->saturday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->sunday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->monday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->tuesday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->wednesday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->thursday ?? '---' }}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $doctor->schedule->friday ?? '---' }}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>    
 
</x-mainlayout>
