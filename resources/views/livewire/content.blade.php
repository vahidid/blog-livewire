<div class="flex-1 px-16 overflow-y-auto contentComponent">

    <div class="head mt-5 flex items-center justify-between border-b border-red-100 py-5">
        <div class="flex items-center">
            <img src="/assets/img/avatar.png" class="w-12" alt="Avatar">
            <p class="pl-2 text-gray-400 mr-5 text-sm">
                By
                <span class="text-red-500"> {{ $post->author->name }} </span>
                2 days ago
            </p>
        </div>
        <a href="#" class="bg-red-600 text-white py-1 px-5 rounded-full">Share</a>
    </div>

    <div class="content pt-10 px-2 relative" wire:loading.remove wire:target="updateContent">
        <div class="loader" wire:loading></div>
        {{ $post->content }}
    </div>

</div>
