<table class="table table-bordered">
    <thead>
        <th>Top/Parent Categories</th>
        <th>Children</th>
        <th>Slug</th>
        <th class="text-center">Active</th>
        <th></th>
    </thead>
    <tbody>
        {{-- First we need the Top Categories as shown in Top-Nav --}}
        @foreach ($top_cat as $top)
            <?php $parent_categories = $cat::getCategories(1, $top->id, 0); ?>
            <tr class="bg-primary">
                <td colspan="2">{{ $top->name }}</td>
                <td>{{ $top->slug }}</td>
                <td class="text-center">
                    @if ($top->active === 1)
                        <span class="glyphicon glyphicon-ok"></span>
                    @else
                        <span class="glyphicon glyphicon-minus"></span>
                    @endif
                </td>
                <td><a href="{{ url('/admin/categories/'. $top->id .'/edit') }}" class="btn btn-xs btn-default" title="Edit">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <a href="#" class="btn btn-xs btn-default" title="Delete">
                        <span class="glyphicon glyphicon-remove"></span>
                    </a>
                </td>
            </tr>

            {{-- Here we get the Parent Categories of each Top Category --}}
            @foreach ($parent_categories as $parent)
                <?php $children = $cat::getCategories($parent->id, $parent->c_group, 0); ?>
                <tr class="bg-info">
                    <td class="text-right">{{ $parent->name }}</td>
                    <td></td>
                    <td>{{ $parent->slug }}</td>
                    <td class="text-center">
                        @if ($parent->active === 1)
                            <span class="glyphicon glyphicon-ok"></span>
                        @else
                            <span class="glyphicon glyphicon-minus"></span>
                        @endif
                    </td>
                    <td><a href="{{ url('/admin/categories/'. $parent->id .'/edit') }}" class="btn btn-xs btn-default" title="Edit">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a href="#" class="btn btn-xs btn-default" title="Delete">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>

                {{-- And last but not least we get the Children of each Parent Category--}}
                @foreach ($children as $child)
                    <tr class="bg-warning">
                        <td></td>
                        <td>{{ $child->name }}</td>
                        <td>{{ $child->slug }}</td>
                        <td class="text-center">
                            @if ($child->active === 1)
                                <span class="glyphicon glyphicon-ok"></span>
                            @else
                                <span class="glyphicon glyphicon-minus"></span>
                            @endif
                        </td>
                        <td><a href="{{ url('/admin/categories/'. $child->id .'/edit') }}" class="btn btn-xs btn-default" title="Edit">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="#" class="btn btn-xs btn-default" title="Delete">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endforeach
        @endforeach
    </tbody>
</table>
