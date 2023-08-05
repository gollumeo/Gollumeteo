<div class="w-full border-b border-b-gray-700 md:h-28 sticky bg-blue-200 text-gray-700 dark:bg-slate-900 dark:text-gray-300 dark:border-b-gray-300 flex">
    <div class="flex flex-row items-center">
        <h1 class="my-auto p-4 md:text-3xl text-xl">Golluméteo</h1>
        <img src="{{asset('img/meteo.png')}}"
             alt="brand icon"
        class="md:w-12 md:h-12 w-8 h-8"></div>
    <nav class="w-4/5 m-auto flex flex-row items-center justify-end">
        <div class="flex flex-col pr-4">
            <label for="theme" class="flex flex-row items-center relative hover:cursor-pointer">
                <svg class="w-6 md:w-8 dark:fill-amber-200 fill-amber-700 hv"
                     xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 207.628 207.628"><circle cx="103.814" cy="103.814" r="45.868"/><path d="M103.814 157.183c-29.427 0-53.368-23.941-53.368-53.368s23.941-53.368 53.368-53.368 53.368 23.941 53.368 53.368-23.941 53.368-53.368 53.368zm0-91.737c-21.156 0-38.368 17.212-38.368 38.368s17.212 38.368 38.368 38.368 38.368-17.212 38.368-38.368-17.212-38.368-38.368-38.368zM103.814 39.385a7.5 7.5 0 0 1-7.5-7.5V7.5a7.5 7.5 0 0 1 15 0v24.385a7.5 7.5 0 0 1-7.5 7.5zM103.814 207.628a7.5 7.5 0 0 1-7.5-7.5v-24.385a7.5 7.5 0 0 1 15 0v24.385a7.5 7.5 0 0 1-7.5 7.5zM200.128 111.314h-24.385a7.5 7.5 0 0 1 0-15h24.385a7.5 7.5 0 0 1 0 15zM31.885 111.314H7.5a7.5 7.5 0 0 1 0-15h24.385a7.5 7.5 0 0 1 0 15zM154.676 60.452a7.474 7.474 0 0 1-5.303-2.197 7.5 7.5 0 0 1 0-10.606l17.243-17.242a7.498 7.498 0 0 1 10.606 0 7.5 7.5 0 0 1 0 10.606l-17.243 17.242a7.474 7.474 0 0 1-5.303 2.197zM35.709 179.419a7.474 7.474 0 0 1-5.303-2.197 7.5 7.5 0 0 1 0-10.606l17.243-17.243a7.5 7.5 0 0 1 10.606 0 7.5 7.5 0 0 1 0 10.606l-17.243 17.243a7.472 7.472 0 0 1-5.303 2.197zM171.918 179.419a7.474 7.474 0 0 1-5.303-2.197l-17.243-17.243a7.5 7.5 0 0 1 0-10.606 7.5 7.5 0 0 1 10.606 0l17.243 17.243a7.5 7.5 0 0 1 0 10.606 7.472 7.472 0 0 1-5.303 2.197zM52.952 60.452a7.474 7.474 0 0 1-5.303-2.197L30.406 41.013a7.5 7.5 0 0 1 0-10.606 7.498 7.498 0 0 1 10.606 0l17.243 17.242a7.5 7.5 0 0 1 0 10.606 7.472 7.472 0 0 1-5.303 2.197z"/></svg>
                <span class="sr-only">Toggle</span>
                <button id="theme" name="theme"
                        x-on:click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode.toString());"
                        x-bind:class="darkMode ? 'after:translate-x-5' : 'after:translate-x-0'"
                        class="dark:bg-gray-300 md:w-12 md:h-7 w-10 h-5 rounded-full flex flex-shrink-0 items-center dark:after:bg-slate-900 bg-gray-700 after:bg-blue-100 md:after:w-5 after:w-3 md:after:h-5 after:h-3 after:rounded-full p-1 ease-in-out duration-500 after:ease-in-out after:duration-500 ml-4 mr-4">
                </button>
                <svg class="w-6 md:w-8 dark:fill-gray-300 fill-slate-700"
                     xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 30.457 30.457"><path d="M29.693 14.49a1.18 1.18 0 0 0-1.32.353 9.37 9.37 0 0 1-7.27 3.446c-5.183 0-9.396-4.216-9.396-9.397a9.3 9.3 0 0 1 2.963-6.835 1.18 1.18 0 0 0 .264-1.343A1.171 1.171 0 0 0 13.75.03 15.172 15.172 0 0 0 0 15.194c0 8.402 6.836 15.238 15.238 15.238 8.303 0 14.989-6.506 15.219-14.812a1.169 1.169 0 0 0-.764-1.13z"/></svg>
            </label>
        </div>
    </nav>
</div>


