@extends('layouts.master')

@section('content')
<div class="row">

    @include('navigation.left-nav', ['parent_id' => 1, 'group' => 1])

    <div class="col-md-9">
        <div class="jumbotron">
            <h1>FreznoShop</h1>
            <p>Shop until you drop</p>
        </div>
    </div>
</div>

<!-- Featured Products -->
<div class="row">
    <div class="col-md-12">
        <h3>Featured Products</h3>
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
</div>
@endsection

