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
                @foreach ($menu as $menu)
                    <tr>
                        <td>{{ $menu->title }}</td>
                        <td>
                            <a href="{{ route('menuitem', $menu->id) }}"><button class="btn btn-info">Builder</button></a>
                            <a href="{{ route('menu.edit', $menu->id) }}"><button
                                    class="btn btn-success">Edit</button></a>
                            <a href="{{ route('menu.destroy', $menu->id) }}"><button
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
