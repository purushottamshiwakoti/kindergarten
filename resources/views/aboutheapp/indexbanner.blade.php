@extends('menu.common')

<div class="container mt-2">
    <h1>Banner Image</h1>
    <div class="mt-2 mb-2">
        <button class="btn btn-success">Edit</button>

    </div>
    <img src="{{ asset("storage/$bannerImage->image") }}" class="img-thumbnail" alt="banner image">

</div>
