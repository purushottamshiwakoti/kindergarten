@include('menu.common')


<div class="container mt-3">
    {{-- @dd($menu->id) --}}
    {{-- @dd($sortByValue) --}}


    <h5>Create Menu Items</h5>
    <form action="{{ route('menuitem.store', $menu->id) }}" method="post">
        {{-- <form> --}}
        @csrf
        <div class="mb-3">
            <label class="form-label">Title Of Menu Item <span style="color:red">*</span> </label>
            <input type="name" class="form-control w-50" name="title" placeholder="title">
            @if ($errors->has('title'))
                <span style="color:red">{{ $errors->first('title') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Url <span style="color:red">*</span></label>
            <input type="text" class="form-control w-50" name="url" placeholder="url">
            @if ($errors->has('url'))
                <span style="color:red">{{ $errors->first('url') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Children of</label>
            <select class="form-select w-50" name="parent_id">
                <option value="0">None</option>

                @foreach ($menuItem as $menuItems)
                    <option value="{{ $menuItems->id }}">{{ $menuItems->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form_label">Sort By</label>
            <br>
            <input type="text" name="sort_by">
        </div>


        <input type="submit" class="btn btn-success " style="margin-left: 20%">
    </form>
</div>
