<form class="form" action="{{ url('/admin/categories/store') }}" method="get">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <legend>Quick-Add or Edit a Category</legend>
    <div class="row">
        <div class="col-md-2">
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
                <input type="text" class="form-control" name="category" id="category" value="{{ old('category') }}">
            </div>
        </div>

        <div class="col-md-1">
            <div class="form-group">
                <label  for="sortorder">Sortorder</label>
                <input type="text" class="form-control" name="sortorder" id="sortorder" value="{{ old('sortorder') }}">
            </div>
        </div>

        <div class="col-md-1">
            <div class="form-group">
                <label for="is_active">Active</label>
                <input type="checkbox" class="form-control input-sm" name="is_active" id="is_active" value="{{ 1 or old('is_active') }}">
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="form-group">
                <input type="submit" value="Add Category" class="btn btn-success" style="margin-top: 27px;">
            </div>
        </div>
    </div>
</form>
