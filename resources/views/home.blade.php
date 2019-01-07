@extends('layouts.master')

@section('content')
<!-- Saying hello to the user -->
<div class="container mx-auto">
    <div class="m-4 text-center">
        <h1>Welcome to FreznoShop</h1>
        <small>Shop until you drop</small>
    </div>
</div>

<!-- Let's get started -->
<div class="flex flex-col md:flex-row mb-4">

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

    <!-- Image-Slider -->
    <div class="flex flex-col md:w-1/2 mx-auto px-4">
        <div class="hidden sm:block items-center mb-2 mt-4 mx-auto picSlider">
            <img src="{{ url('/images/promo/freestyle.png') }}" class="rotate" alt="">
            <img src="{{ url('/images/promo/bikes.jpg') }}" class="rotate" alt="">
            <img src="{{ url('/images/promo/race.jpg') }}" class="rotate" alt="">
            <img src="{{ url('/images/promo/mtb.jpg') }}" class="rotate" alt="">
        </div>
    </div>
</div>

<div class="border-t-2 mx-20"></div>
<div>
    <h2 class="ml-4 mt-4 text-center">You might like this:</h2>

    <div class="flex flex-wrap mx-auto my-4">

        <a href="#" class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 no-underline text-center">
            <div class="rounded shadow m-4">
                <img src="{{ url('https://via.placeholder.com/320x180') }}" class="rounded-t" alt="">
                <div class="p-6">
                    <p class="font-bold text-xl mb-2">Lorem ipsum dolor sit amet</p>
                    <p class="font-bold text-2xl">&#36;18,95 €</p>
                    <p class="mt-4 inline-block bg-grey-light rounded-full px-3 py-2 font-semibold text-blue-darker hover:uppercase hover:text-blue">
                       more details &#62;
                    </p>
                </div>
            </div>
        </a>

        <a href="#" class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 no-underline text-center">
            <div class="rounded shadow m-4">
                <img src="{{ url('https://via.placeholder.com/320x180') }}" class="rounded-t" alt="">
                <div class="p-6">
                    <p class="font-bold text-xl mb-2">Lorem ipsum dolor sit amet</p>
                    <p class="font-bold text-2xl">&#36;18,95 €</p>
                    <p class="mt-4 inline-block bg-grey-light rounded-full px-3 py-2 font-semibold text-blue-darker hover:uppercase hover:text-blue">
                       more details &#62;
                    </p>
                </div>
            </div>
        </a>

        <a href="#" class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 no-underline text-center">
            <div class="rounded shadow m-4">
                <img src="{{ url('https://via.placeholder.com/320x180') }}" class="rounded-t" alt="">
                <div class="p-6">
                    <p class="font-bold text-xl mb-2">Lorem ipsum dolor sit amet</p>
                    <p class="font-bold text-2xl">&#36;18,95 €</p>
                    <p class="mt-4 inline-block bg-grey-light rounded-full px-3 py-2 font-semibold text-blue-darker hover:uppercase hover:text-blue">
                       more details &#62;
                    </p>
                </div>
            </div>
        </a>

        <a href="#" class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 no-underline text-center">
            <div class="rounded shadow m-4">
                <img src="{{ url('https://via.placeholder.com/320x180') }}" class="rounded-t" alt="">
                <div class="p-6">
                    <p class="font-bold text-xl mb-2">Lorem ipsum dolor sit amet</p>
                    <p class="font-bold text-2xl">&#36;18,95 €</p>
                    <p class="mt-4 inline-block bg-grey-light rounded-full px-3 py-2 font-semibold text-blue-darker hover:uppercase hover:text-blue">
                       more details &#62;
                    </p>
                </div>
            </div>
        </a>

        <a href="#" class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 no-underline text-center">
            <div class="rounded shadow m-4">
                <img src="{{ url('https://via.placeholder.com/320x180') }}" class="rounded-t" alt="">
                <div class="p-6">
                    <p class="font-bold text-xl mb-2">Lorem ipsum dolor sit amet</p>
                    <p class="font-bold text-2xl">&#36;18,95</p>
                    <p class="mt-4 inline-block bg-grey-light rounded-full px-3 py-2 font-semibold text-blue-darker hover:uppercase hover:text-blue">
                       more details &#62;
                    </p>
                </div>
            </div>
        </a>

        <a href="#" class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 no-underline text-center">
            <div class="rounded shadow m-4">
                <img src="{{ url('https://via.placeholder.com/320x180') }}" class="rounded-t" alt="">
                <div class="p-6">
                    <p class="font-bold text-xl mb-2">Lorem ipsum dolor sit amet</p>
                    <p class="font-bold text-2xl">&#36;18,95</p>
                    <p class="mt-4 inline-block bg-grey-light rounded-full px-3 py-2 font-semibold text-blue-darker hover:uppercase hover:text-blue">
                       more details &#62;
                    </p>
                </div>
            </div>
        </a>
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

        count1++;

        if (count1 > slides.length) {
            count1 = 1;
        }

        slides[count1-1].setAttribute("style", "display:block");

        setTimeout(newsTicker, 7200);
    }

    var count1 = 0;
    newsTicker();
</script>

<script>
        var picSlider = function () {
            var j;
            var slides = document.querySelectorAll(".rotate");

            for (j = 0; j < slides.length; j++) {
              slides[j].setAttribute("style", "display:none");
            }

            count2++;

            if (count2 > slides.length) {
                count2 = 1;
            }

            slides[count2-1].setAttribute("style", "display:block");

            setTimeout(picSlider, 3600);
        }

        var count2 = 0;
        picSlider();
    </script>
@endsection
