@include('menu.common')

<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {{-- @php
        $menuId = $menuItem->first();
    @endphp --}}

    {{-- @dd($menuItem)menuItem --}}
    {{-- <form action="{{ route('menuitem.store', $menuId->menu_id) }}" method="post"> --}}
    {{-- @csrf --}}
    <a href="{{ route('menuitem.create', $menu->id) }}"><button class="btn btn-success">New Menu Items</button></a>
    <form action="">
        <div class="sortablebody" id="sortContainer">
            @foreach ($menuItem as $menu)
                <div class="card my-3">
                    <div id="{{ $menu->sort_by }}" class="card-body d-flex justify-content-between menu-item">
                        {{ $menu->title }}
                        <div>
                            <a href="{{ route('menuitem.edit', $menu->id) }}"><button
                                    class="btn btn-success">Edit</button></a>
                            <a href="{{ route('menuitem.destroy', $menu->id) }}">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </div>

                    </div>
                </div>
                {{-- @if ($menu->children->isNotEmpty())
                @foreach ($menu->children as $child)
                    <div class="card mx-3 my-3">
                        <div class="card-body d-flex justify-content-between">
                            {{ $child->title }}
                            <div>
                                <a href="{{ route('menuitem.edit', $child->id) }}"><button
                                        class="btn btn-success">Edit</button></a>
                                <a href="{{ route('menuitem.destroy', $child->id) }}">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            </div>

                        </div>
                    </div>
                    @if ($child->children->isNotEmpty())
                        @foreach ($child->children as $subchild)
                            <div class="card mx-5 my-3">
                                <div class="card-body d-flex justify-content-between">
                                    {{ $subchild->title }}
                                    <div>
                                        <a href="{{ route('menuitem.edit', $subchild->id) }}"><button
                                                class="btn btn-success">Edit</button></a>
                                        <a href="{{ route('menuitem.destroy', $subchild->id) }}">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            @endif --}}
            @endforeach

        </div>
    </form>
    {{-- </form> --}}

</div>
<script>
    $(document).ready(function() {
        const dragArea = document.querySelector('.sortablebody');
        new Sortable(dragArea, {
            swap: true,
            swapClass: 'highlight',
            animation: 150,
            sort: true
        });

    })


    // var sortContainer = document.getElementById('sortContainer');
    // new Sortable(sortContainer, {
    //     onSort: function(evt) {
    //         var sortedItems = Array.from(sortContainer.getElementsByClassName('sortItem')).map(function(
    //             element) {
    //             return element.innerText; // you can get value from html here
    //         });



    //         $.ajax({

    //             url: '{{ route('menuitem.updateorder') }}', // use your custom route name instead of url
    //             method: 'POST',
    //             data: {
    //                 _token: '{{ csrf_token() }}',
    //                 menu_items: data
    //             },
    //             success: function(response) {
    //                 console.log(response);
    //             },
    //             error: function(xhr, status, error) {
    //                 console.log(xhr.responseText);
    //             }
    //         });
    //     }
    // });
</script>
