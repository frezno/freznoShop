<nav class="bg-blue-lightest pb-2 pl-4 pr-2">

    <div class="font-semibold">

        <ul class="flex flex-wrap list-reset">
            <li class="mr-2 sm:mr-4">
                <a href="/"
                    class="block border border-grey-darker rounded mt-2 px-4 py-2 sm:text-center text-grey-darker hover:text-black no-underline">
                    <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 20H3V10H0L10 0l10 10h-3v10h-5v-6H8v6z"/>
                    </svg>
                    Home
                </a>
            </li>

            @foreach ($categories as $category)
                <li class="flex-grow mr-2">
                    <a href="{{ url('/'. $category->slug .'') }}"
                        class="block border border-grey-darker rounded mt-2 px-4 py-2 sm:text-center text-grey-darker hover:text-black no-underline">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
</nav>
