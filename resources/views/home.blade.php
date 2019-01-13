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

    @include('partials.newsticker')

    @include('partials.slider')

</div>

@include('partials.coolstuff')

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
