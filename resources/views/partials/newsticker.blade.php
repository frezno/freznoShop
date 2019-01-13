<!-- Newsticker -->
<div class="flex flex-col md:w-1/2 px-4 newsTicker">

    <!-- Any News? -->
    @if (count($news) > 0)

        @foreach($news as $n)
            @if($n->sticky == 1)
                <div class="bg-orange-lightest border rounded overflow-hidden shadow-md my-2">
                    <div class="px-4 py-2">
                        <div class="font-bold text-center text-xl mb-2">{{ $n->title }}</div>
                        <p class="text-grey-darker text-base">{!! $n->body !!}</p>
                    </div>
                </div>
            @endif
        @endforeach

        @foreach($news as $n)
            @if($n->sticky == 0)
                <div class="slides">
                    <div class="border rounded overflow-hidden shadow-md my-4">
                        <div class="px-6 py-2">
                            <div class="font-bold text-center text-xl mb-2">{{ $n->title }}</div>
                            <p class="text-grey-darker text-base">{!! $n->body !!}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @else
        <div class="text-center text-xl tracking-wide md:p-10">
            <p>Thank you for stopping by.<br>
            Look around, there's a bunch of amazing products waiting for you.</p>
        </div>
    @endif
</div>
