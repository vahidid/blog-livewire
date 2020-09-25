<x-app-layout>
{{--    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>--}}

    <div>
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="h-screen py-5">
                <div class="max-h-full shadow-xl sm:rounded-lg bg-white flex">
                    <livewire:categories-list :selectedCategoryId="$selectedCategoryId"/>
                    <livewire:post-list :posts="$posts"/>
                    <livewire:content/>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:show-posts />
            </div>
        </div>
    </div>--}}
</x-app-layout>
