@include('menu.common')

@php
    $sortByValue = count($headerMenu->where('parent_id', 0));
@endphp
<div class="container mt-3">



    <h5>Update Menu Items</h5>
    <form action="{{ route('menuitem.update', $menuItem->id) }}" method="post">

        {{-- <form> --}}
        @csrf
        <div class="mb-3">
            <label class="form-label">Title Of Menu Item <span style="color:red">*</span> </label>
            <input type="name" class="form-control w-50" name="title" placeholder="title"
                value="{{ $menuItem->title }}">
            @if ($errors->has('title'))
                <span style="color:red">{{ $errors->first('title') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Url <span style="color:red">*</span></label>
            <input type="text" class="form-control w-50" name="url" placeholder="url"
                value="{{ $menuItem->title }}">
            @if ($errors->has('url'))
                <span style="color:red">{{ $errors->first('url') }}</span>
            @endif

        </div>
        <div class="mb-3">
            <select class="form-select w-50" name="parent_id" disabled>


                <option value="{{ $menuItem->id }}">{{ $menuItem->title }}</option>
            </select>
        </div>

        {{-- @dd($menuItem->parent_id) --}}
        <div class="mb-3">
            <label for="" class="form_label">Sort Order</label>
            <br>
            <input type="text" name="sort_order"
                value="@if (isset($menuItem->sort_order)) {{ $menuItem->sort_order }}@else'' @endif">
        </div>




        <input type="submit" class="btn btn-success " style="margin-left: 20%">
    </form>
</div>
