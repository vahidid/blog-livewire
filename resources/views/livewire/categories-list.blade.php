<div class="flex-initial w-1/5">
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="border-solid border-r border-red-100 h-full">
        <div class="logo w-full text-center">
            <h1 class="text-5xl inline-block text-red-600">Vahi</h1>
            <h1 class="text-3xl inline-block text-red-500">.Dev</h1>
        </div>
        <div class="py-5">
            <ul>
                @foreach($categories as $category)
                    @if($selectedCategoryId === $category->id)
                        <li class="px-5 py-2 bg-gray-200 border-l-2 border-red-700"><a href="{{route('getPostsByCategory', ['category' => $category])}}">{{ $category->title }}</a></li>
                    @else
                        <li class="px-5 py-2"><a href="{{route('getPostsByCategory', ['category' => $category])}}">{{ $category->title }}</a></li>
                    @endif
                @endforeach
{{--                    wire:click="selectCategory({{$category->id}})"--}}
                {{--<li class="px-5 py-2"><a href="#">list 2</a></li>
                <li class="px-5 py-2 bg-gray-200 border-l-2 border-red-700">
                    <a href="#">list</a>
                </li>
                <li class="px-5 py-2"><a href="#">list 2</a></li>
                <li class="px-5 py-2"><a href="#">list 2</a></li>
                <li class="px-5 py-2"><a href="#">list 2</a></li>
                <li class="px-5 py-2"><a href="#">list 2</a></li>
                <li class="px-5 py-2"><a href="#">list 2</a></li>
                <li class="px-5 py-2"><a href="#">list 2</a></li>
                <li class="px-5 py-2"><a href="#">list 2</a></li>--}}

            </ul>
        </div>
    </div>
</div>
