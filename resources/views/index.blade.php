<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
    <div name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('notes')}}
        </h2>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto-sm:px-6 lg:px-8">
            <a href="{{ route('notes.create') }}" class="btn-link btn-lg mb-2">+ New Note</a>
            @forelse ($notes as $note)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        <a href="{{ route('notes.show', $note->uuid) }}">{{ $note->title }}</a>
                    </h2>
                    <p class="mt-2">
                        {{ Str::limit($note->text, 200) }}
                    </p>
                    <span class="blade mt-4 text-sm opacity-70">{{ $note->updated_at->diffForHumans() }}</span>
                </div>
            @empty
               <p>You have no notes yet.</p> 
            @endforelse
            {{$notes->links()}}
        </div>
    </div>
</body>
</html>

