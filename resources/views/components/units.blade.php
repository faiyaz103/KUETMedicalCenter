<section class="container mx-auto px-2 py-6 max-w-7xl">
    <div class="flex flex-col">
        <label for="collapse" class="rounded-md block border-2 border-teal-800 bg-teal-800 text-white h-20 px-4 py-2 text-lg font-semibold cursor-pointer max-w-sm hover:bg-green-200 hover:text-teal-900 flex items-center items-center">
            Available Units
            <svg class="size-5 text-white ml-auto" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
        </label>
        
        <input type="checkbox" id="collapse" class="peer hidden">
        
        <div class="peer-checked:block hidden overflow-x-auto py-2">
            <div class="border border-gray-200 rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <tbody class="bg-white divide-y divide-teal-800">
                        @foreach ($units as $index => $unit)
                        <tr>
                            <td class="px-2 py-2 text-gray-500">{{ $index + 1 }}</td>
                            <td class="px-2 py-2 text-md font-semibold text-gray-800">{{ $unit->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
