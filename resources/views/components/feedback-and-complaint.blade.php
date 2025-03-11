<x-dividerhz text="Contact Us" logo="{{ asset('images/logos/feedback.png') }}" />

<section class="text-gray-600 body-font relative mt-[-1rem] mb-[-3rem]">
    <div class="container px-5 py-12 mx-auto flex sm:flex-nowrap flex-wrap">
        <div
            class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                marginwidth="0" scrolling="no"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.362894735433!2d89.49794847476659!3d22.899982020892942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9bd98ef2dd63%3A0x18c3948a3a095287!2sKUET%20Medical%20Center!5e0!3m2!1sen!2sbd!4v1735918644856!5m2!1sen!2sbd"
                style="filter: contrast(1.2) opacity(0.4);"></iframe>
            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-semibold text-teal-800 tracking-widest text-xs">ADDRESS</h2>
                    <p class="mt-1">Khulna University of Engineering & Technology (KUET)</p>
                    <p class="mt-1">Khulna-9203, Bangladesh.</p>                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                    <h2 class="title-font font-semibold text-teal-800 tracking-widest text-xs">EMAIL</h2>
                    <a class="text-red-500 leading-relaxed">cmo@kuet.ac.bd</a>
                    <h2 class="title-font font-semibold text-teal-800 tracking-widest text-xs mt-4">PHONE</h2>
                    <p class="leading-relaxed">02477732986 (Ext. 8930)</p>
                    <p class="leading-relaxed">01714087203</p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 md:w-1/2 bg-gray-100 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
            <h2 class="text-teal-800 text-lg mb-1 font-medium title-font">Feedback & Complaint</h2>

            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button class="text-white bg-teal-800 border-0 py-2 px-6 focus:outline-none hover:bg-teal-600 rounded text-lg">Submit</button>
        </div>
    </div>
</section>