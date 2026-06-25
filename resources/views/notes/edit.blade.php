<x-layout>
    <x-slot:title>Edit Note</x-slot:title>
    <div class="max-w-2xl mx-auto px-6 py-10">

        <a href="/" class="text-sm text-stone-400 hover:text-stone-700 mb-6 inline-block">← Back to notes</a>

        <div class="rounded-3xl bg-white shadow-sm ring-1 ring-stone-200 p-6">
            <form method="POST" action="/notes/{{ $note->id }}" class="space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <input type="text" name="title" value="{{ old('title', $note->title) }}" placeholder="Title"
                        class="w-full bg-transparent text-xl font-semibold placeholder:text-stone-300 focus:outline-none {{ $errors->has('title') ? 'text-red-600' : '' }}"
                        required>
                    @error('title')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="h-px bg-stone-200"></div>
                <div>
                    <textarea name="notesContent" placeholder="Write something..."
                        class="w-full bg-transparent placeholder:text-stone-300 focus:outline-none resize-none {{ $errors->has('notesContent') ? 'text-red-600' : '' }}"
                        rows="6">{{ old('notesContent', $note->notesContent) }}</textarea>
                    @error('notesContent')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="flex justify-end gap-2">
                    <a href="/"
                        class="rounded-full px-5 py-2 text-sm font-medium text-stone-500 hover:bg-stone-100 transition">Cancel</a>
                    <button type="submit"
                        class="rounded-full bg-emerald-700 text-white text-sm font-medium px-6 py-2 hover:bg-emerald-800 transition">
                        Save
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-layout>