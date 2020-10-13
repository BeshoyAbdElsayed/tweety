<div class="border border-blue-400 rounded-lg p-5">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" id="" class="w-full" placeholder="What's up doc?" required> </textarea>
        <hr class="my-4">
        <div class="flex justify-between">
            <img class="rounded-full mr-2" src="{{ Auth::user()->avatar }}" alt="user">
            <button type="submit" class="bg-blue-500 rounded-lg text-white px-2 py-2 shadow">Tweet-a-roo!</button>
        </div>
    </form>
    @error('body')
        <p class="text-red-800 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
