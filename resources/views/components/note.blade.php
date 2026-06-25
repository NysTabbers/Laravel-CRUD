@props(['note'])

<div class="group rounded-2xl bg-white shadow-sm ring-1 ring-stone-200 p-5 transition hover:shadow-md hover:-translate-y-0.5">
    <div class="flex items-start justify-between gap-4">
        <h2 class="font-semibold text-base leading-snug text-stone-900">{{ $note->title }}</h2>
        <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition shrink-0">
            <a href="/notes/{{ $note->id }}/edit"
               class="w-7 h-7 flex items-center justify-center rounded-full hover:bg-stone-100 text-sm" title="Edit">✏️</a>
            <form method="POST" action="/notes/{{ $note->id }}">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="w-7 h-7 flex items-center justify-center rounded-full hover:bg-red-50 text-sm" title="Delete"
                    onclick="return confirm('Delete this note?')">🗑️</button>
            </form>
        </div>
    </div>
    <p class="text-sm text-stone-600 mt-2 whitespace-pre-line">{{ $note->notesContent }}</p>
</div>