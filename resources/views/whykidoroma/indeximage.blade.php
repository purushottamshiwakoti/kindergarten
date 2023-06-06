@extends('menu.common')
<div class="container mt-2">
    <div>
        <h3>Images </h3>
    </div>
    <div>
        <button class="btn btn-success mb-3">Edit</button>
    </div>
    <div class="d-flex">
        <div class="mb-2">
            <div>
                <label for="" class="form-label">Image 1</label>
            </div>
            <img style="width: 200px;height:200px; object-fit: cover;" src="{{ asset("storage/$kidoromaimage->image1") }}"
                alt="img1">
        </div>
        <div class="mb-2">
            <div>
                <label for="" class="form-label">Image 2</label>
            </div>
            <img style="width: 200px;height:200px; object-fit: cover;"
                src="{{ asset("storage/$kidoromaimage->image2") }}" alt="img2">
        </div>
        <div class="mb-2">
            <div>
                <label for="" class="form-label">Image 3</label>

            </div>
            <img style="width: 200px;height:200px; object-fit: cover;"
                src="{{ asset("storage/$kidoromaimage->image3") }}" alt="img3">
        </div>
        <div class="mb-2">
            <div>
                <label for="" class="form-label">Image 4</label>

            </div>
            <img style="width: 200px;height:200px; object-fit: cover;"
                src=" {{ asset("storage/$kidoromaimage->image4") }}" alt="img4">
        </div>
    </div>

</div>
