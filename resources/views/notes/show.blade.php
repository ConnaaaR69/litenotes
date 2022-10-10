<x-app-layout>

<div class="py-12">
    <div class="max-w-7al mx-auto sm:px-6 lg:px-8">
        <div class="flex gap-4">
            <p>
                <strong class="opacity-70">Created:</strong>{{ $note->updated_at->diffForHumans() }}
            </p>
            <p class="opacity-70 ml-8">
                <strong>Updated: </strong>{{ $note->updated_at->diffForHumans() }}
            </p>
            <a href="{{ route('notes.edit', $note )}}" class="btn-link ml-auto">Edit Note</a>
            <form action="{{ route('notes.destroy', $note) }}" method="post">
            @method('Delete')
            @csrf
            <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete this note?')"> Delete note</button>
            </form>
        </div>
        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"> {{ $note->title }}</h2>
        <p class="mt-6 whitespace-pre-wrap">{{ $note->text }}</p>
        
        </div>
    </div>
</div>
</x-app-layout>


