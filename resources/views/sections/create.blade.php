@extends('layouts.app')
@include('includes.temp.navbar')
@section('content')
<a style="font-size: 50px" class="btn btn-succes" href={{route('home')}}>
    <i class="fa-solid fa-house"></i>
</a>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action={{route('sections.savenew')}} enctype="multipart/form-data" method="POST">
                @csrf
            <label>Section Image</label>
            <input type="file" name="sec_image" class="form-control mb-4">

            <label>ID</label>
            <input type="text" name="id" class="form-control mb-4">
            @error('id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>Name_en</label>
            <input type="text" name="name_en" class="form-control mb-4">
            @error('name_en')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Name_ar</label>
            <input type="text" name="name_ar" class="form-control mb-4">
            @error('name_ar')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>Description_en</label>
            <input type="text" name="descripton_en" class="form-control mb-4">
            @error('descripton_en')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Description_ar</label>
            <input type="text" name="descripton_ar" class="form-control mb-4">
            @error('descripton_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>Status</label>
            <select name="status" class="form-control mb-4">
                <option value="0">Block</option>
                <option value="1">Open</option>
            </select>
            @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="submit" class="btn btn-primary btn-block " value="Creat New Section">
        </form>
        </div>
</div>
@endsection
