<x-mainlayout  :title="'Blood Bank - KUET Medical Center'" :heading="'Blood Bank'">

    <section class="container px-2 py-6 mx-auto max-w-6xl">

        <div class="max-w-sm mx-auto py-2 bg-green-200 flex justify-center items-center">
            <h2 class="text-lg font-bold py-2 text-teal-800">{{ auth()->user()->bloodType ? 'Update' : 'Register'}} Donor Information</h2>
        </div>

        <form action="{{ route('donor.update') }}" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto pt-4">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="type" class="block mb-2 text-sm font-medium text-teal-800 ">Select Blood Type:</label>
                <select name="type" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-800">
                    <option disabled>Pick a blood type</option>
                    <option value="A+" {{ $donor->bloodType->type == 'A+' ? 'selected' : '' }}>A+</option>
                    <option value="A-" {{ $donor->bloodType->type == 'A-' ? 'selected' : '' }}>A-</option>
                    <option value="B+" {{ $donor->bloodType->type == 'B+' ? 'selected' : '' }}>B+</option>
                    <option value="B-" {{ $donor->bloodType->type == 'B-' ? 'selected' : '' }}>B-</option>
                    <option value="AB+" {{ $donor->bloodType->type == 'AB+' ? 'selected' : '' }}>AB+</option>
                    <option value="AB-" {{ $donor->bloodType->type == 'AB-' ? 'selected' : '' }}>AB-</option>
                    <option value="O+" {{ $donor->bloodType->type == 'O+' ? 'selected' : '' }}>O+</option>
                    <option value="O-" {{ $donor->bloodType->type == 'O-' ? 'selected' : '' }}>O-</option>
                </select>
            </div>
            @error('type')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="mb-5">
                <label for="phone" class="block mb-2 text-sm font-medium text-teal-800 ">Phone Number:</label>
                <input type="text" name="phone" value="{{ $donor->bloodType->phone}}" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-800 focus:border-teal-800 block w-full p-2.5">
            </div>
            @error('phone')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            
        
            <button type="submit" class="text-white bg-teal-800 hover:bg-gray-300 hover:text-teal-800 hover:border hover:border-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                {{ auth()->user()->bloodType ? 'Update' : 'Register'}}
            </button>
        </form>
        @if(auth()->user()->bloodType)
        <form action="{{route('donor.destroy')}}" method="POST" class="max-w-sm mx-auto pt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white bg-red-600 hover:bg-black hover:border hover:border-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                Withdraw
            </button>
        </form>
        @endif
        
    </section>

    
    

</x-mainlayout>