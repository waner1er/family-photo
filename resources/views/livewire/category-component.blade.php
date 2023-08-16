<div class="grid grid-cols-3 gap-5">
    @foreach ($categories as $category)
        @if (count($category->lastPhotos))
            <div>
                <h2>{{ $category->name }}</h2>
                <div class="grid grid-cols-6">
                    @foreach ($category->lastPhotos as $key => $photo)
                        <a href="{{ $photo->src }}" data-lightbox="{{ $photo->category->name }}"
                            data-title="{{ $photo->title }}">
                            <img src="{{ $photo->src }}" alt="" class="hover:scale-150 transition">
                        </a>
                    @endforeach
                    <a href="{{ route('categories.edit', ['category' => $category])}}">Voir +</a>

                </div>
            </div>
        @endif
    @endforeach
</div>
