<div x-data="{ darkMode: false, sunImage: '{{ asset('img/sun.svg') }}', moonImage: '{{ asset('img/moon.png') }}' }">
    <nav class="w-full border-b border-b-gray-700 h-14 sticky bg-blue-200 text-gray-700 dark:bg-slate-900 dark:text-gray-300 dark:border-b-gray-300 flex justify-end">
        <!-- Toggle button -->
        <button x-on:click="darkMode = !darkMode">
            <img x-show="darkMode" x-bind:src="darkMode ? sunImage : moonImage" alt="">
        </button>
        item 1
        item 2

    </nav>
</div>
