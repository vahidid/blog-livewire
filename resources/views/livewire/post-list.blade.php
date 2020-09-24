<div class="flex-1 overflow-y-auto">
    {{-- Stop trying to control. --}}
    <div class="border-r border-red-100">
        <div class="tabs border-b border-red-200 pt-5 px-2">
            <ul class="flex">
                <li class="-mb-px mr-1">
                    <a
                        class="bg-white inline-block py-2 px-4 text-red-700 font-semibold"
                        href="#"
                    >Newest</a
                    >
                </li>
                <li class="mr-1">
                    <a
                        class="bg-white inline-block py-2 px-4 text-red-400 hover:text-blue-800 font-semibold"
                        href="#"
                    >Popular</a
                    >
                </li>
            </ul>
        </div>
        <div class="posts-container">
            <livewire:post />
            <livewire:post />
            <livewire:post />
            <livewire:post />
            <livewire:post />
            <livewire:post />
            <livewire:post />
            <livewire:post />
            <livewire:post />
            <livewire:post />
        </div>
    </div>

</div>
