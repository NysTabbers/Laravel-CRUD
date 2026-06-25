<x-layout>
    <x-slot:title>Keep Notes</x-slot:title>
    <div class="max-w-2xl mx-auto px-6 py-10">

        <div class="rounded-3xl bg-white shadow-sm ring-1 ring-stone-200 p-6 mb-10">
            <form method="POST" action="/notes" class="space-y-4">
                @csrf
                <div>
                    <input type="text" name="title" value="{{ old('title') }}"
                        placeholder="Give it a title..."
                        class="w-full bg-transparent text-xl font-semibold placeholder:text-stone-300 focus:outline-none {{ $errors->has('title') ? 'text-red-600' : '' }}"
                        required>
                    @error('title')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="h-px bg-stone-200"></div>
                <div>
                    <textarea name="notesContent" placeholder="Write something..."
                        class="w-full bg-transparent placeholder:text-stone-300 focus:outline-none resize-none {{ $errors->has('notesContent') ? 'text-red-600' : '' }}"
                        rows="3" maxlength="255" required>{{ old('notesContent') }}</textarea>
                    @error('notesContent')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="rounded-full bg-emerald-700 text-white text-sm font-medium px-6 py-2 hover:bg-emerald-800 transition">
                        Add note
                    </button>
                </div>
            </form>
        </div>

        <div class="grid gap-4">
            @forelse ($notes as $note)
                <x-note :note="$note" />
            @empty
                <div class="text-center py-20">
                    <p class="text-5xl mb-3">🌱</p>
                    <p class="text-stone-400 text-sm">Nothing here yet — plant your first note.</p>
                </div>
            @endforelse
        </div>

    </div>
</x-layout>