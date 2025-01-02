<div
  class="bg-teal-800 px-4 py-3 text-white sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 mt-1 relative overflow-hidden w-full"
>
  <!-- Marquee text -->
  <div
    style="
      display: inline-block;
      white-space: nowrap;
      animation: marquee 10s linear infinite;
    "
  >
    <a href="notices/id" class="text-center font-medium sm:text-left underline" style="display: inline;">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, excepturi.
    </a>
  </div>


  <a
    class="mt-4 block rounded-lg bg-white px-5 py-3 text-center text-sm font-medium text-teal-800 transition hover:bg-white/90 focus:outline-none focus:ring active:text-teal-600 sm:mt-0 sm:ml-4"
    href="/notices"
    style="margin-left: auto; display: block; text-align: center; margin-top: 10px;"
  >
    Notice Board
  </a>
</div>

<style>
  @keyframes marquee {
    0% {
      transform: translateX(100%);
    }
    100% {
      transform: translateX(-100%);
    }
  }

  /* Mobile view adjustments */
  @media (max-width: 640px) {
    .bg-teal-800 {
      padding-bottom: 10px; /* Add padding at the bottom to create space between text and button */
    }

    .text-center {
      padding-left: 10px;
      padding-right: 10px;
    }

    /* Ensure the button stays on the bottom and doesn’t overlap text */
    .bg-teal-800 a {
      margin-top: 10px;
    }
  }
</style>
