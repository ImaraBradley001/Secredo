<x-layout>

<form action="/journal/{{ $journal->id }}" method="POST" class="create-note" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Title</label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                placeholder="Eg A Very Wholesome Moment"
                value="{{ $journal->title }}"
            />
            @error('title')
            <p class="text-red-500 text-xs mt-1" style="color: red !important">{{ $message }}</p>    
            @enderror
        </div>


        <div class="mb-6">
            <label for="body" class="inline-block text-lg mb-2">Body</label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="body" rows="10" placeholder="Describe what happened...">{{ $journal->body }}</textarea>
            @error('body')
            <p class="text-red-500 text-xs mt-1" style="color: red !important">{{ $message }}</p>    
            @enderror
        </div>


        <div class="mb-6">
            <label for="attachment" class="inline-block text-lg mb-2">Attach a file for future reference (optional)</label>
            <br>
            <input type="file" class="rounded file-input" name="attachment"/>
        </div>

        <div class="mb-6">
            <button class="btn">
                Update Journal
            </button>
        </div>
</form>

</x-layout>
