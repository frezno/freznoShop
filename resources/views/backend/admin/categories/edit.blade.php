@inject('nav', 'App\Models\Category')

@extends('backend.admin.layouts.admin', ['breadcrumb' => 'Categories'])

@section('content')
<div class="row">

    @include('backend.admin.navigation.left-nav')

    <div class="col-md-9">
        <div class="col-sm-offset-2 col-sm-10">
            <h3>Edit Category: {{ $category->name }}</h3><br>
        </div>
        
        <form class="form-horizontal" action="#" method="get">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                @if ($errors->has('parent_id')) <span class="alert-danger"> {{ $errors->first('parent_id') }} </span> @endif
                <label for="parent_id" class="col-sm-2 control-label">Parent ID <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" name="parent_id" id="parent_id" class="form-control" value="{{ $category->parent_id or old('parent_id') }}" required>
                </div>
            </div>

            <div class="form-group">
                @if ($errors->has('c_group')) <span class="alert-danger"> {{ $errors->first('c_group') }} </span> @endif
                <label for="c_group" class="col-sm-2 control-label">Category Group <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" name="c_group" id="c_group" class="form-control" value="{{ $category->c_group or old('c_group') }}" required>
                </div>
            </div>

            <div class="form-group">
                @if ($errors->has('name')) <span class="alert-danger"> {{ $errors->first('name') }} </span> @endif
                <label for="name" class="col-sm-2 control-label">Product Name <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" name="name" id="name" class="form-control" value="{{ $category->name or old('name') }}" required>
                </div>
            </div>

            <div class="form-group">
                @if ($errors->has('slug')) <span class="alert-danger"> {{ $errors->first('slug') }} </span> @endif
                <label for="slug" class="col-sm-2 control-label">Product Slug <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" name="slug" id="slug" class="form-control" value="{{ $category->slug or old('slug') }}" required>
                </div>
            </div>

            <div class="form-group">
                @if ($errors->has('sortorder')) <span class="alert-danger"> {{ $errors->first('sortorder') }} </span> @endif
                <label for="sortorder" class="col-sm-2 control-label">Sortorder <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" name="sortorder" id="sortorder" class="form-control" value="{{ $category->sortorder or old('sortorder') }}" required>
                </div>
            </div>

            <div class="form-group">
                @if ($errors->has('active')) <span class="alert-danger"> {{ $errors->first('active') }} </span> @endif
                <label for="active" class="col-sm-2 control-label">Is Active? <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" name="active" id="active" class="form-control" value="{{ $category->active or old('active') }}" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Save Changes</button>&nbsp;&nbsp;
                    <a href="{{ url('/admin/categories') }}" class="btn btn-default" role="button">Cancel</a>
                </div>
            </div>
        </form>
        <hr>
    </div>

</div>
@endsection
