<x-mainlayout :title="'Facilities - KUET Medical Center'" :heading="'Explore Facilities'">
        
    <section class="container px-4 py-8 mx-auto">
        
        <div class="m-5 pt-5">
            <label for="collapse" class="block border-2 border-teal-800 bg-gray-100 hover:bg-green-200 px-5 py-3 text-3xl font-semibold cursor-pointer rounded-md w-full"> 
                Available Units
            </label>
            <input type="checkbox" id="collapse" class="peer hidden">
    
            <div class="peer-checked:block hidden flex flex-col py-4">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach ($units as $index => $unit)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{$index+1}}</td>

                                        <td class="px-4 py-4 text-md font-semibold text-gray-800 whitespace-nowrap">{{$unit->name}}</td>
                                        
                                    </tr>       
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="m-5 pt-10">
            <label for="collapse1" class="block border-2 border-teal-800 bg-gray-100 hover:bg-green-200 px-5 py-3 text-3xl font-semibold cursor-pointer rounded-md w-full"> 
                Available Tests
            </label>
            <input type="checkbox" id="collapse1" class="peer hidden">
    
            <div class="peer-checked:block hidden flex flex-col py-4">
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
                                            Name of the Test
                                        </th>
        
                                        <th scope="col" class="px-4 py-3.5 text-md font-medium text-left text-gray-800">
                                            Fees(BDT)
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach ($tests as $index => $test)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{$index+1}}</td>

                                        <td class="px-4 py-4 text-md font-semibold text-gray-800 whitespace-nowrap">{{$test->name}}</td>

                                        <td class="px-4 py-4 text-sm font-semibold text-gray-800 whitespace-nowrap">{{$test->fees}}</td>
                                        
                                    </tr>       
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </section>
        
        {{-- <div class="peer-checked:block hidden bg-gray-100 p-3 text-lg rounded-md w-full">
            Click the "Sign Up" button in the top right corner and follow the registration process.
        </div> --}}
    {{-- </div> --}}

</x-mainlayout>
