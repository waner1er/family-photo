<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 my-5">
    @foreach ($photos as $key => $photo)
        <div>
            <div class="relative">

                <a href="{{ $photo->src }}" data-lightbox="category" data-title="{{ $photo->title }}">
                    <div
                        class="border w-full h-full absolute top-0 left-0 
                            flex justify-center items-center hover:bg-black hover:bg-opacity-50 ">
                        <h2 class="text-white">{{ $photo->title }} {{ $photo->isPublic }}</h2>
                    </div>
                    <img src="{{ $photo->src }}" alt="{{ $photo->title }}">
                </a>
            </div>
            <p>catégorie : {{ $photo->category->name}}</p>
            <a href="{{ route('photos.edit', ['photo' => $photo]) }}">editer</a>
        </div>
    @endforeach
</div>
