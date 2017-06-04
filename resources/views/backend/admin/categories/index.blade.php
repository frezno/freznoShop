@inject('cat', 'App\Models\Category')

@extends('backend.admin.layouts.admin', ['breadcrumb' => 'Categories'])

@section('content')
<div class="row">

    @include('backend.admin.navigation.left-nav')

    <div class="col-md-9">
    
        @include('backend.admin.categories.partials.create')

        <hr>
    </div>
    
    <div class="col-md-9">

        @include('backend.admin.categories.partials.list')

    </div>
</div>
@endsection
