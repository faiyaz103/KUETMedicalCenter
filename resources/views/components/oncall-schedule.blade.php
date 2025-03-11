<section class="container mx-auto px-2 py-6 max-w-7xl">
    <div class="flex flex-col">
        <label class="block bg-teal-800 text-white px-4 py-2 text-lg font-semibold rounded-md w-full">
            On Call Doctor's Duty Schedule
        </label>
        <div class="overflow-x-auto py-2">
            <div class="border border-gray-200 rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-green-200">
                        <tr>
                            <th class="px-2 py-2 text-left text-gray-800">Day</th>
                            <th class="px-2 py-2 text-left text-gray-800">Doctor</th>
                            <th class="px-2 py-2 text-left text-gray-800">Duty Hours</th>
                            <th class="px-2 py-2 text-left text-gray-800">Contact</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($doctors as $doctor)
                            @if ($doctor->schedule)
                                @foreach (['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday'] as $day)
                                    @if ($doctor->schedule->$day == "On Call")
                                        <tr>
                                            <td class="px-2 py-2 text-gray-800">{{ ucfirst($day) }}</td>
                                            <td class="px-2 py-2 text-gray-800">{{ $doctor->name }}</td>
                                            <td class="px-2 py-2 text-gray-800">
                                                {{ ucfirst($day) }} 8.00 AM to {{ ucfirst($day == 'friday' ? 'saturday' : date('l', strtotime($day . ' +1 day'))) }} 8.00 AM
                                            </td>
                                            <td class="px-2 py-2 text-gray-800">{{ $doctor->contact }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>