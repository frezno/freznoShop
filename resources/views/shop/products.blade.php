@extends('layouts.master')

@section('content')
<div class="row">

    {{-- If the parent_id equals 0, we are navigating from the top category --}}
    @if ($cat[0]->parent_id == 0)
        @include('navigation.left-nav', ['parent_id' => 1, 'group' => $cat[0]->id])
    @else
        {{-- We are using the left navigation. --}}
        @include('navigation.left-nav', ['parent_id' => 1, 'group' => $cat[0]->c_group])
    @endif

    <div class="col-md-4">
        <div class="jumbotron">
            <h1>{{ $cat[0]->name }}</h1>
            <p>Shop until you drop</p>
        </div>
    </div>
    <div class="col-md-5">
        <div class="jumbotron">
            <h1>FreznoShop</h1>
            <p>Shop until you drop</p>
        </div>
    </div>
</div>

<!-- Products -->
<div class="row">
    <div class="col-md-12">
        <h3>Products</h3>
    </div>
</div>

<div class="row text-center">
    <div class="col-md-3">
        <div class="thumbnail">
            <img src="http://placehold.it/400x250" alt="">
            <div class="caption">
                <h3>Product 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="{{ url('/product/slug') }}" class="btn btn-default">More Info</a> <a href="#" class="btn btn-success">Buy Me!</a></p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="thumbnail">
            <img src="http://placehold.it/400x250" alt="">
            <div class="caption">
                <h3>Product 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="#" class="btn btn-default">More Info</a> <a href="#" class="btn btn-success">Buy Me!</a></p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="thumbnail">
            <img src="http://placehold.it/400x250" alt="">
            <div class="caption">
                <h3>Product 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="#" class="btn btn-default">More Info</a> <a href="#" class="btn btn-success">Buy Me!</a></p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="thumbnail">
            <img src="http://placehold.it/400x250" alt="">
            <div class="caption">
                <h3>Product 4</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="#" class="btn btn-default">More Info</a> <a href="#" class="btn btn-success">Buy Me!</a></p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="thumbnail">
            <img src="http://placehold.it/400x250" alt="">
            <div class="caption">
                <h3>Product 5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="#" class="btn btn-default">More Info</a> <a href="#" class="btn btn-success">Buy Me!</a></p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="thumbnail">
            <img src="http://placehold.it/400x250" alt="">
            <div class="caption">
                <h3>Product 6</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="#" class="btn btn-default">More Info</a> <a href="#" class="btn btn-success">Buy Me!</a></p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="thumbnail">
            <img src="http://placehold.it/400x250" alt="">
            <div class="caption">
                <h3>Product 7</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="#" class="btn btn-default">More Info</a> <a href="#" class="btn btn-success">Buy Me!</a></p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="thumbnail">
            <img src="http://placehold.it/400x250" alt="">
            <div class="caption">
                <h3>Product 8</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="#" class="btn btn-default">More Info</a> <a href="#" class="btn btn-success">Buy Me!</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
