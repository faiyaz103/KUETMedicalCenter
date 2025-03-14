<x-admin-layout>
    <section class="container px-2 py-6 mx-auto max-w-6xl">

        <div class="max-w-sm mx-auto py-2 bg-green-200 flex justify-center items-center">
            <h2 class="text-lg font-bold py-2 text-teal-800">Upload Notice</h2>
        </div>

    <form action="{{ route('notices.store') }}" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto pt-4">
        @csrf
        <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-teal-800 ">Title</label>
        <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-800 focus:border-teal-800 block w-full p-2.5" required />
        </div>
        <div class="mb-5">
        <label for="file" class="block mb-2 text-sm font-medium text-teal-800 ">Upload PDF</label>
        <input type="file" name="file" accept="application/pdf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-800 focus:border-teal-800 block w-full p-2.5" required />
        </div> 
        <button type="submit" class="text-white bg-teal-800 hover:bg-gray-300 hover:text-teal-800 hover:border hover:border-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>
  

    </section>
</x-admin-layout>

