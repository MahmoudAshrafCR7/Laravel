
@extends('layouts.app')
@include('includes.temp.navbar')
@section('content')
<a style="font-size: 50px" class="btn btn-succes" href={{route('home')}}>
    <i class="fa-solid fa-house"></i>
</a>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action={{route('orders.update')}} enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" name="old_id" value={{$moda->id}}>

            <label>Order Image</label>
            <input type="file" name="ord_image" class="form-control mb-4">
            @error('ord_image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>ID</label>
            <input type="text" name="id" class="form-control mb-4" value="{{$moda->id}}">
            @error('id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>Title_en</label>
            <input type="text" name="title_en" class="form-control mb-4" value="{{$moda->title_en}}">
            @error('title_en')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <label>Title_ar</label>
            <input type="text" name="title_ar" class="form-control mb-4" value="{{$moda->title_ar}}">
            @error('title_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <label>Description_en</label>
            <input type="text" name="description_en" class="form-control mb-4" value="{{$moda->description_en}}">
            @error('description_en')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <label>Description_ar</label>
            <input type="text" name="description_ar" class="form-control mb-4" value="{{$moda->description_en}}">

            @error('description_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>Parent_id</label>
            <select name="parent_id" class="form-control mb-4">
                <option value={{$moda->parent_id}} selected>{{$moda->parent_id}}</option>
                @if ($moda->parent_id==0)

                @else
                <option value="0">Main Order</option>
                @endif
                @foreach ($alldata as $item )
                <option value={{$item->id}}>{{$item->id}}-{{$item->title_en}}</option>
                @endforeach
            </select>
            <input type="submit" class="btn btn-primary btn-block " value=" Save Edit">
        </form>
        </div>
</div>
@endsection
