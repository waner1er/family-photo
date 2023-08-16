<div>
    {{ $category->name}}
    <div class="grid grid-cols-6">
        @foreach ($category->photos as $key => $photo)
        @dump(storage_path($photo->src))
            <a href="{{ $photo->src }}" data-lightbox="{{ $photo->category->name }}"
                data-title="{{ $photo->title }}">
                <img src="{{ $photo->src }}" alt="" class="hover:scale-150 transition">
            </a>
        @endforeach
        <a href="{{ route('categories.edit', ['category' => $category])}}">Voir +</a>

    </div>
</div>
