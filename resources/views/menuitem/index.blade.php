@include('menu.common')

<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a class="btn btn-success" href="{{ route('menuitem.create', $slug) }}">
        Create
    </a>
    <div class="cf nestable-lists">
        <div class="dd" id="nestable">
            @php

                if (!function_exists('buildTree')) {
                    function buildTree($menuItem)
                    {
                        $html = recursiveBuild($menuItem);
                        echo $html;
                    }
                    buildTree($menuItem);
                }

                // if (!function_exists('recursiveBuild')) {
                function recursiveBuild($menuItem)
                {
                    $html = '<ol class="dd-list">';
                    foreach ($menuItem as $key => $root) {
                        $html .= '<li class="dd-item" data-id="' . $root->id . '">';
                        $html .= '<div class="d-flex">';
                        $html .= '<div style="width:30%" class="dd-handle d-flex justify-content-between">' . $root->title;
                        $html .= '</div>';
                        $html .= '<div >';
                        $html .= '<a class="mx-3 " href="/menu/items/edit/' . $root->id . '"><button class=" btn btn-sm  btn-success">Edit</button></a>';
                        $html .= '<a class="ms-1 " href="/menu/items/destroy/' . $root->id . '"><button class="btn btn-sm  btn-danger">Delete</button></a>';
                        $html .= '</div>';
                        $html .= '</div>';

                        if (!$root->children->isEmpty()) {
                            $html .= recursiveBuild($root->children);
                        }
                        $html .= '</li>';
                    }
                    $html .= '</ol>';
                    return $html;
                }
                // }
            @endphp
            {{-- <ol class="dd-list">
                @foreach ($menuItem as $menu)
                    <li class="dd-item" data-id="{{ $menu->id }}">
                        <div class="dd-handle d-flex justify-content-between">{{ $menu->title }}
                            <div>
                                <a class="me-4 text-success" href="{{ route('menuitem.edit', $menu->id) }}">Edit</a>
                                <a class="text-danger" href="{{ route('menuitem.destroy', $menu->id) }}">Delete</a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ol> --}}
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-nestable/jquery.nestable.min.js"></script>

<script>
    $(document).ready(function() {
        var updateOutput = function(e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            console.log(list.nestable('serialize'));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "post",
                url: "{{ route('menuitem.order') }}",
                data: {
                    list: JSON.stringify(list.nestable('serialize'))
                },
                dataType: "json",
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, ajaxOptions, error) {
                    console.log(error);
                }
            });
        };

        $('#nestable').nestable({
            group: 1,
            maxDepth: 7,
        }).on('change', updateOutput);
    });
</script>
