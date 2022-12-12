<x-layout>

    <form action="/journal/store" method="POST" class="create-note" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Title</label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                placeholder="Eg A Very Wholesome Moment"
                value="{{ old('title') }}"
            />
            @error('title')
            <p class="text-red-500 text-xs mt-1" style="color: red !important">{{ $message }}</p>    
            @enderror
        </div>


        <div class="mb-6">
            <label for="body" class="inline-block text-lg mb-2">Body</label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="body" rows="10" placeholder="Describe what happened...">{{ old('body') }}</textarea>
            @error('body')
            <p class="text-red-500 text-xs mt-1" style="color: red !important">{{ $message }}</p>    
            @enderror
        </div>


        <div class="mb-6">
            <label for="attachment" class="inline-block text-lg mb-2">Attach a file for future reference (optional)</label>
            <br>
            <input type="file" class="rounded file-input" name="attachment"/>
             @error('attachment')
            <p class="text-red-500 text-xs mt-1" style="color: red !important">{{ $message }}</p>    
            @enderror
        </div>

        <div class="mb-6">
            <button class="btn">
                Add To Journal
            </button>
        </div>
    </form>

</x-layout>