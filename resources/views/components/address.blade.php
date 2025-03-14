<div
    class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
    <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
        marginwidth="0" scrolling="no"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.362894735433!2d89.49794847476659!3d22.899982020892942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9bd98ef2dd63%3A0x18c3948a3a095287!2sKUET%20Medical%20Center!5e0!3m2!1sen!2sbd!4v1735918644856!5m2!1sen!2sbd"
        style="filter: contrast(1.2) opacity(0.4);"></iframe>
    <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-teal-800 tracking-widest text-xs">ADDRESS</h2>
            <p class="mt-1">{{$contact->organization ?? 'N/A'}}</p>
            <p class="mt-1">{{$contact->location ?? 'N/A'}}</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-teal-800 tracking-widest text-xs">EMAIL</h2>
            <a class="text-red-500 leading-relaxed">{{$contact->email ?? 'N/A'}}</a>
            <h2 class="title-font font-semibold text-teal-800 tracking-widest text-xs mt-4">PHONE</h2>
            <p class="leading-relaxed">{{$contact->telephone ?? 'N/A'}}</p>
            <p class="leading-relaxed">{{$contact->mobile ?? 'N/A'}}</p>
        </div>
    </div>
</div>