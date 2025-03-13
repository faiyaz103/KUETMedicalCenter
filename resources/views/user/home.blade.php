<!-- resources/views/home.blade.php -->
<x-mainlayout :title="'Home - KUET Medical Center'" :heading="'Welcome to Central Medical Center'">

    <x-carousel :images="['c1.jpg', 'c2.jpg', 'c3.jpg', 'c4.jpg']" />
    <x-latest-notice />
    <x-services-home />
    <x-facilities-home />
    <x-feedback-and-complaint />
    
</x-mainlayout>
