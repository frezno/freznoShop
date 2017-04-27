@inject('nav', 'App\Models\Category')

@extends('backend.admin.layouts.admin', ['breadcrumb' => 'Categories'])

@section('content')
<div class="row">

    @include('backend.admin.navigation.left-nav')

    <div class="col-md-9">
        
        <form class="form" action="#" method="post">
            <legend>Add or Edit a Category</legend>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="top_cat">Top Category</label>
                        <select class="form-control" name="top_cat" id="top_cat">
                            <option value="0" selected>Top</option>
                                @foreach ($top_cat as $top)
                                    <option value="{{ $top->id }}">{{ $top->id }} - {{ $top->name }}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="parent">Parent Category</label>
                        <select class="form-control" name="parent" id="parent">
                            <option value="0" selected>Parent</option>
                                @foreach ($parent_cat as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->c_group }} - {{ $parent->id }} - {{ $parent->name }}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="category">Add Category Name</label>
                        <input type="text" class="form-control" name="category" id="category" value="">
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="form-group">
                        <input type="submit" value="Add Category" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
        <hr>
    </div>
    
    <div class="col-md-9">
        <table class="table table-bordered">
            <thead>
                <th>Top/Parent Categories</th>
                <th>Children</th>
                <th></th>
            </thead>
            <tbody>
                {{-- First we need the Top Categories as shown in Top-Nav --}}
                @foreach ($top_cat as $top)
<?php               $parent_categories = $nav::getCategories(1, $top->id); ?>
                    <tr class="bg-primary">
                        <td colspan="2">{{ $top->id }} - {{ $top->name }}</td>
                        
                        <td><a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign"></span></a>
                        </td>
                    </tr>

                    {{-- Here we get the Parent Categories of the Top Category --}}
                    @foreach ($parent_categories as $parent)
<?php                   $children = $nav::getCategories($parent->id, $parent->c_group); ?>
                        <tr class="bg-info">
                            <td class="text-right">{{ $parent->c_group }} - {{ $parent->id }} - {{ $parent->name }}</td>
                            <td></td>
                            <td><a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign"></span></a>
                            </td>
                        </tr>

                        {{-- And last but not least we get the Children of each Parent Category--}}
                        @foreach ($children as $child)
                            <tr class="bg-warning">
                                <td></td>
                                <td>{{ $child->name }}</td>
                                <td><a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
