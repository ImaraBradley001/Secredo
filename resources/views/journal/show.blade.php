<x-layout>
@include('partials._search')


<section class="journal container mx-auto">
@unless(count($notes) == 0)

@foreach ($notes as $note)
<x-note-card :note="$note"/>
@endforeach
@else
<div class="item rounded overflow-hidden shadow-lg text-center p-10" style="height: 50%">
<h3 style="margin-bottom: 5rem">Nothing to show</h3>
<div class="body">
    <a href="/journal/create"><i class="fa fa-plus"></i>Add To Your Journal</a>
</div>
</div>
@endunless
</section>
</x-layout>