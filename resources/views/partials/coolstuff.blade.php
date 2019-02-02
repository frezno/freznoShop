<!-- Cool Products -->
<div class="border-t-2 mx-20"></div>
<div>
    <h2 class="ml-4 mt-4 text-center">You might like this:</h2>

    <div class="flex flex-wrap mx-auto my-4">

        @foreach($teasers as $teaser)
            <div class="flex flex-col w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5">
                <a href="#" class="flex flex-col flex-1 no-underline rounded shadow m-4 text-center">
                    <img src="{{ url('https://via.placeholder.com/320x180') }}" class="rounded-t" alt="">

                    <div class="flex flex-col flex-1 pb-3 pt-6 px-6">
                        <p class="font-bold text-xl mb-2">{!! $teaser->name !!}</p>
                        <p class="font-bold text-2xl mb-6">&#36;18.95</p>
                        <p class="mt-auto inline-block bg-grey-light rounded-full px-3 py-2 font-semibold text-blue-darker hover:uppercase hover:text-blue">
                           more details &#62;
                        </p>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</div>
