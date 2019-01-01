@extends('layouts.master')

@section('content')
<div class="flex flex-col md:flex-row mb-4">

    <!-- Newsticker -->
    <div class="flex flex-col md:w-1/2 lg:w-1/3 px-4 newsTicker">

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
        @endif
    </div>

    <!-- Info/Slider -->
    <div class="flex flex-col md:w-1/2">
        <div class="pt-10 text-center">
            <h1>Welcome to FreznoShop</h1>
            <small>Shop until you drop</small>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var newsTicker = function () {
        var i;
        var slides = document.querySelectorAll(".slides");

        for (i = 0; i < slides.length; i++) {
          slides[i].setAttribute("style", "display:none");
        }

        count++;

        if (count > slides.length) {
            count = 1;
        }

        slides[count-1].setAttribute("style", "display:block");

        setTimeout(newsTicker, 7200);
    }

    var count = 0;
    newsTicker();
</script>
@endsection
