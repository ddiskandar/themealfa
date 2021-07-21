<!-- Banner (bottom bubble) -->
<div x-data="{ open : true }" x-show="open" class="fixed bottom-0 right-0 z-10 flex items-center justify-between p-3 m-2 bg-indigo-800 rounded-lg shadow-lg sm:m-4 sm:px-4">
    <div class="inline-flex items-center text-indigo-100">
        <p>
            Portal Aplikasi Ikatan Keluarga Alumni SMK Plus Al-Farhan. <a href="https://ikafa.smkplusalfarhan.sch.id/" class="underline hover:opacity-75">Buka sekarang</a>
        </p>
    </div>
    <div class="flex items-center ml-2">
        <button x-on:click="open = false" aria-label type="button" class="inline-flex items-center justify-center p-1 text-white rounded opacity-75 focus:outline-none hover:opacity-100 focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:opacity-75">
            <svg class="inline-block w-6 h-6 hi-outline hi-x" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
<!-- END Banner (bottom bubble) -->