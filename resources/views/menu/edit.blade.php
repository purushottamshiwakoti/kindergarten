@include('menu.common')

<div class="container mt-3">

    <h5>Update Menu</h5>
    <form action="{{ route('menu.update', $menu->id) }}" method="post">
        {{-- <form> --}}
        @csrf
        <div class="mb-3">
            <label class="form-label">Title Of Menu <span style="color:red">*</span> </label>
            <input type="name" class="form-control w-50" name="title" value="{{ $menu->title }}" placeholder="title">
            @if ($errors->has('title'))
                <span style="color:red">{{ $errors->first('title') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Slug <span style="color:red">*</span></label>
            <input type="text" class="form-control w-50" name="slug" value="{{ $menu->slug }}"
                placeholder="slug">
            @if ($errors->has('slug'))
                <span style="color:red">{{ $errors->first('slug') }}</span>
            @endif

        </div>
        <input type="submit" class="btn btn-success " style="margin-left: 20%">
    </form>
</div>
