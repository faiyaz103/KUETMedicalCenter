<x-mainlayout :title="'Contact - KUET Medical Center'" :heading="'Contact Us'">

    <div class="flex justify-center items-center h-[380px]">
        <div class="overflow-x-auto pt-12 h-[350px] w-full max-w-4xl">
            @if($contact)
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
    
                <tbody class="divide-y divide-teal-800">
                    <tr>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-800">
                            <p>{{ $contact->title }}</p>
                            <p>{{ $contact->organization }}</p>
                            <p>{{ $contact->location }}</p>
                        </td>

                        
                        
                    </tr>

                    <tr>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-800">
                            <p>{{ $contact->telephone }}</p>
                            <p>{{ $contact->mobile }}</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="whitespace-nowrap px-4 py-2 text-red-600">{{ $contact->email }}</td>
                    </tr>
    
                    
                </tbody>
            </table>
            @else 
            <h1>Information Not Available</h1>
            @endif
        </div>
    </div>
    

</x-mainlayout>