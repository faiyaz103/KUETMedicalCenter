<x-admin-layout>
    <section class="container mx-auto px-2 py-6 max-w-7xl">
        <div class="flex flex-col items-center">
            <div class="max-w-sm mx-auto py-2 bg-green-200 flex justify-center items-center">
                <h2 class="text-lg font-bold px-2 py-2 text-teal-800">Update Schedule for {{ $doctor->name}}</h2>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-lg mt-6">
                <form action="{{ route('schedule.update', $doctor->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-2 gap-4">
                        <label>Saturday: <input type="text" name="saturday" value="{{ $doctor->schedule->saturday ?? '' }}" class="border rounded p-2 w-full"></label>
                        <label>Sunday: <input type="text" name="sunday" value="{{ $doctor->schedule->sunday ?? '' }}" class="border rounded p-2 w-full"></label>
                        <label>Monday: <input type="text" name="monday" value="{{ $doctor->schedule->monday ?? '' }}" class="border rounded p-2 w-full"></label>
                        <label>Tuesday: <input type="text" name="tuesday" value="{{ $doctor->schedule->tuesday ?? '' }}" class="border rounded p-2 w-full"></label>
                        <label>Wednesday: <input type="text" name="wednesday" value="{{ $doctor->schedule->wednesday ?? '' }}" class="border rounded p-2 w-full"></label>
                        <label>Thursday: <input type="text" name="thursday" value="{{ $doctor->schedule->thursday ?? '' }}" class="border rounded p-2 w-full"></label>
                        <label>Friday: <input type="text" name="friday" value="{{ $doctor->schedule->friday ?? '' }}" class="border rounded p-2 w-full"></label>
                    </div>

                    <div class="mt-4 flex justify-end">
                        <button type="submit" class="px-6 py-2 bg-teal-800 text-white rounded hover:bg-green-700">Update Schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>
