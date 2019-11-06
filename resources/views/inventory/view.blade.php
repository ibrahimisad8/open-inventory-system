@extends('layout.base')
@section('sub-title', 'Add Inventory')
@section('content')
<div class="content">
        <div class="title m-b-md">
            Inventory.ng
        </div>
        @include('layout.nav')
        <p class="small-title">
            <b style="font-size:35px">&#187;</b> View Inventory
        </p>
        <p class="sub-content">
            @foreach($inventories as $data)
            <p class="items">
                <b>Name :</b> {{$data->name}}<br/>
                <b>Quantity :</b> {{$data->quantity}}<br/>
                <b>Description :</b> {{$data->description}}
            </p>
            @endforeach
        </p>
        <p>
            {{$inventories->links()}}
        </p>
    </div>
@endsection