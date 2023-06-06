@include('menu.common')

<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {{-- @dd($menuItem)menuItem --}}

    <a href="{{ route('menuitem.create', $menu->id) }}"><button class="btn btn-success">New Menu Items</button></a>
    <div class="sortablebody">
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
</div>
<script>
    $(document).ready(function() {
        const dragArea = document.querySelector('.sortablebody');
        new Sortable(dragArea, {
            swap: true,
            swapClass: 'highlight',
            animation: 150,
        });

    })
    
</script>
