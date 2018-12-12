<nav class="bg-blue-lightest p-4">

    <div class="flex-wrap container mx-auto md:flex md:items-center md:w-auto">
        <div class="flex-grow font-semibold sm:mx-6">

            <ul class="flex flex-col sm:flex-row list-reset">
                <li class="sm:mr-4 whitespace-no-wrap">
                    <a href="{{ url('/') }}"
                        class="block border border-grey-darker rounded mt-2 sm:mt-0 px-4 py-2 sm:text-center text-grey-darker hover:text-black no-underline">
                        <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 20H3V10H0L10 0l10 10h-3v10h-5v-6H8v6z"/>
                        </svg>
                        Home
                    </a>
                </li>

                @foreach ($categories as $category)
                    <li class="flex-1 sm:mr-2">
                        <a href="{{ url('/'. $category->slug .'') }}"
                            class="block border border-grey-darker rounded mt-2 sm:mt-0 px-4 py-2 sm:text-center text-grey-darker hover:text-black no-underline">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</nav>
