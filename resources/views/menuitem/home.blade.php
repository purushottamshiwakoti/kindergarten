@extends('menu.common')

@section('content')

    <div class="cf nestable-lists">
        <div class="dd" id="nestable">
            <ol class="dd-list">
                @foreach ($menuItem as $menu)
                    <li class="dd-item" data-id="6">
                        <div class="dd-handle">{{ $menu->title }}</div>
                    </li>
                @endforeach

            </ol>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            var updateOutput = function(e) {
                var list = e.length ? e : $(e.target),
                    output = list.data('output');
                console.log(list.nestable('serialize'));
            }

            $('#nestable').nestable({
                group: 1,
                maxDepth: 7,
            }).on('change', updateOutput);
        })
    </script>


@stop
