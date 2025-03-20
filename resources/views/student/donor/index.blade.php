<x-bloodbanklayout>

    <section class="container mx-auto px-2 py-6 max-w-7xl">
        <div class="flex flex-col">
            <label class="block bg-teal-800 text-white px-4 py-2 text-lg font-semibold rounded-md w-full">
                Available {{$bloodtype}} Donors
            </label>
            
            <div class="overflow-x-auto py-2">
                <div class="border border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-green-200">
                            <tr>
                                <th class="px-2 py-2 text-left text-gray-800">Name</th>
                                <th class="px-2 py-2 text-left text-gray-800">Blood Group</th>
                                <th class="px-2 py-2 text-left text-gray-800">Phone</th>
                                <th class="px-2 py-2 text-left text-gray-800">Email</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-teal-800">
                            @foreach ($donors as $index => $donor)
                            @if($donor->bloodType && $donor->bloodType->type==$bloodtype)
                            <tr>
                                <td class="px-2 py-2 text-gray-800">{{ $donor->name }}</td>
                                <td class="px-2 py-2 text-lg font-bold text-red-700">{{ $donor->bloodType->type}}</td>
                                <td class="px-2 py-2 text-lg text-black">{{ $donor->bloodType->phone}}</td>
                                <td class="px-2 py-2 text-gray-800">{{ $donor->email }}</td>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section> 

</x-bloodbanklayout>