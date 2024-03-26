
@extends('layouts.app')
@include('includes.temp.navbar')
@section('content')
<a style="font-size: 50px" class="btn btn-succes" href={{route('home')}}>
    <i class="fa-solid fa-house"></i>
</a>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action={{route('orders.savenew')}} enctype="multipart/form-data" method="POST">
                @csrf

            <label>Order Image</label>
            <input type="file" name="ord_image" class="form-control mb-4">
            @error('ord_image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>ID</label>
            <input type="text" name="id" class="form-control mb-4">
            @error('id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>Title_en</label>
            <input type="text" name="title_en" class="form-control mb-4">
            @error('title_en')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <label>Title_ar</label>
            <input type="text" name="title_ar" class="form-control mb-4">
            @error('title_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <label>Description_en</label>
            <input type="text" name="description_en" class="form-control mb-4">
            @error('description_en')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <label>Description_ar</label>
            <input type="text" name="description_ar" class="form-control mb-4">

            @error('description_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>Parent_id</label>
            <select name="parent_id" class="form-control mb-4">
                <option value="0">Main Order</option>
                @foreach ($moda as $item)
                <option value="{{$item->id}}">{{{$item->id}}}-{{$item->title_en}}</option>
                @endforeach
            </select>
            <input type="submit" class="btn btn-primary btn-block " value="Creat New Order">
        </form>
        </div>
</div>
@endsection
