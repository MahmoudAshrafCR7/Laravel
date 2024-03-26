@extends('layouts.app')
@include('includes.temp.navbar')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">

            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">{{__('languge.ID')}}</th>
                        <th scope="col">{{__('languge.NAME')}} </th>
                        <th scope="col">Name </th>
                        <th scope="col">{{__('languge.DESCRIPTION')}}</th>
                        <th scope="col">Description</th>
                        <th scope="col">{{__('languge.STATUS')}}</th>
                        <th scope="col">{{__('languge.CREATED_AT')}}</th>
                        <th scope="col">{{__('languge.OPERATION')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <th scope="row">{{$section->id}}</th>
                          <th scope="row">{{$section->name_en}}</th>
                          <th scope="row">{{$section->name_ar}}</th>
                          <th scope="row">{{$section->descripton_en}}</th>
                          <th scope="row">{{$section->descripton_ar}}</th>
                          <th scope="row">{{$section->status}}</th>
                          <th scope="row">{{$section->created_at}}</th>
                          <th scope="row">
                            <a  class="btn btn-success" href="{{route('home')}}">
                                <i class="fa-solid fa-house"></i>
                            </a>
                          </th>
                        </tr>
                    </tbody>
                  </table>
            </div>

        </div>
    </div>
</div>
@endsection

