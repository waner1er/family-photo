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
