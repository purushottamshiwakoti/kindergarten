<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->

    <div class="mb-3">
        <label class="form-label ">{{ $label }} <span style="color: red">*</span></label>
        <input type="{{ $type }}" class="form-control w-50" placeholder="{{ $placeholder }} "
            name="{{ $name }}" value="{{ old($name) }} ">
        @if ($errors->has($name))
            <span style="color:red">{{ $errors->first($name) }}</span>
        @endif

    </div>
</div>
