<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Keep Notes' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-stone-100 text-stone-800">
    <header class="border-b border-stone-200 bg-white/80 backdrop-blur sticky top-0 z-10">
        <div class="max-w-2xl mx-auto px-6 py-4 flex items-center gap-2">
            <span class="text-2xl">🌿</span>
            <a href="/" class="text-lg font-bold tracking-tight text-stone-900">Keep Notes</a>
        </div>
    </header>
    <main class="pb-20">
        {{ $slot }}
    </main>
</body>
</html>