@extends('layouts.master')

@section('content')
<div class="row">
  @include('navigation.left-nav', ['parent_id' => 1, 'group' => 1])

    <div class="col-xs-12 col-sm-9 pull-right">
        <div class="row">

            <div class="col-sm-5">
                <div>
                    <img src="http://placehold.it/300x400" alt="">
                </div>
            </div>

            <div class="col-sm-7">
                <div>
                    <h1>Product 1</h1>
                    <p>SKU: 123456</p>
                    
                    <label>Lorem ipsum dolor sit amet</label>
                    <br><br>
                    <h4>Our Price: 100,00 &euro;<a href="#"> *</a></h4>
                    <br>
                    <label>Qty: </label>
                    <input type="text" name="quantity" id="quantity" value="1" size="2" maxlength="2">

                    <button type="submit" class="btn btn-success">
                        Add to Cart
                    </button>
                    <p>* incl. VAT excl. <a href="{{ url('/zahlung-und-lieferung') }}">shipping costs</a></p>
                </div>
            </div>

            <div class="col-sm-12"><hr>
                <div class="product-text">
                    <p><h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3></p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
