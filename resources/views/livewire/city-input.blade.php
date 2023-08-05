<div class="w-11/12 mx-auto mt-8">
    <form wire:submit.prevent="" action="#" method="get" class="w-full px-3">
        <div class="relative w-full mb-6 group">
            <input type="text" wire:model="" name="city" id="city"
                   class="block py-2.5 px-0 w-2/3 text-sm bg-transparent border-0 border-b-2 appearance-none border-gray-700 focus:border-blue-500 focus:outline-none focus:ring-0 peer invalid:text-rose-700 invalid:ring-rose-700 empty:text-gray-700"
                   placeholder=" "/>
            <label for="city"
                   class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 invalid:text-rose-700 invalid:ring-rose-700">Search for a city</label>
            @error('email')
            <div class="error text-rose-500 mt-2 text-sm">{{ $errors->first('email') }}</div> @enderror
        </div>

    </form>
</div>


{{--<input type="text" name="city" id="city" class="w-1/3 px-4 rounded-2xl block py-2.5 text-sm bg-transparent border-0 border-b-2 appearance-none border-gray-300 focus:border-violet-500 focus:outline-none focus:ring-0 peer" placeholder="">--}}
{{--<label for="city"--}}
{{--       class="peer-focus:font-medium absolute text-sm text-slate-50 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Search for a city</label>--}}
