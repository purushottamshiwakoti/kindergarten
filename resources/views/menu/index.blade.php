@include('menu.common')

<div class="container mt-3">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a href="{{ route('menu.create') }}">
        <button type="button" class="btn btn-success">Add</button>

    </a>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @if (count($menu) > 0)
                    @foreach ($menu as $menus)
                        <tr>
                            <td>{{ $menus->title }}</td>
                            <td>
                                <a href="{{ route('menuitem', $menus->slug) }}"><button
                                        class="btn btn-info">Builder</button></a>
                                <a href="{{ route('menu.edit', $menus->id) }}"><button
                                        class="btn btn-success">Edit</button></a>
                                <a href="{{ route('menu.destroy', $menus->id) }}"><button
                                        class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p class="text-danger">No records found in our database!</p>

                @endif

            </tbody>
        </table>
    </div>

</div>
