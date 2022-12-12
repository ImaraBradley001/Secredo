@props(['note'])

<div class="item rounded overflow-hidden shadow-lg text-center p-10">
    <h3 class="title">{{ $note->title }}</h3>
    <div class="body">
        <p>
            {{ $note->body }} 
            @php
                if ($note->attachment){
                    echo '<a href="' . asset('storage/' . $note->attachment)  . '">Attachment</a>';
                };               
            @endphp
        </p>
    </div>
    <p class="date">{{ $note->updated_at }}</p>
    <div class="operations">
        <a href="/journal/{{ $note->id }}/edit"><i class="fa-solid fa-pencil"></i></a>
        <form action="/journal/{{ $note->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="text-red-600">
                <i class="fa-solid fa-trash-can"></i>
            </button>
        </form>
    </div>
</div>