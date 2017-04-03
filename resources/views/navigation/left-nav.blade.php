@inject('nav', 'App\Models\Category')

<!-- Left Navigation -->
<div class="col-md-3">
    <div class="panel-group category-products" id="accordian">
        @foreach ($nav::getCategories($parent_id, $group) as $parent)
        <?php
            $children = $nav::getCategories($parent->id, $group);
            $subcat = count($children);
        ?>
            {{-- If there are any sub-categories --}}
            @if ($subcat >= 1)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#{{ $parent->slug }}">
                                {{ $parent->name }}
                                <span class="glyphicon glyphicon-plus text-right" aria-hidden="true"></span>
                            </a>
                        </h4>
                    </div>

                    <div id="{{ $parent->slug }}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul style="list-style: none">
                                @foreach ($children as $child)
                                    <li style="margin-bottom: 8px; margin-left: -40px">
                                        <a href="{{ url('/'.$child->slug) }}">{!! $child->name !!}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            {{-- No sub-categories --}}
            @else
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="{{ url('/'.$parent->slug) }}">{!! $parent->name !!}</a></h4>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
