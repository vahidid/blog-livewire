<div class="p-2 flex">
    <div class="thumbnail w-64 flex-10 p-2">
        <img src="/assets/img/placeholder_600x400.svg" alt="thumb_image" class="thumb rounded-md w-full" />
    </div>
    <div class="content px-4">
        <span class="created_at text-xs pl-2 text-gray-400">{{ $post->created_at }}</span>
        <a
            href="#"
            class="block"
            wire:click="$emit('updateContent', {{ $post->id }})"
        >{{ $post->title }}</a>
        <p class="author text-sm text-red-400">
            <span class="text-gray-400">by:</span>
            <a href="#">{{ $post->author->name }}</a>
        </p>
    </div>
</div>
{{--{{ route('getPost', ['post' => $post]) }}--}}
