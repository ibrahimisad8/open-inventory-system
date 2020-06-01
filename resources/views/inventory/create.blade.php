@extends('layout.base')
@section('sub-title', 'Add Inventory')
@section('content')
<div class="content">
        <div class="title m-b-md">
            Inventory.ng
        </div>
        @include('layout.nav')
        <p class="small-title">
            <b style="font-size:35px">&#187;</b> Add Inventory
        </p>
        <p style="width:25%;margin:0px auto;text-align:justify">
            @include('inventory.alerts')
            <form action="{{route('inventory.store')}}" method="POST">
            {{ csrf_field() }}
            <p>
                <input type="text" name="name" placeholder="name" required />
            </p>
            <p>
                <input type="number" name="quantity" placeholder="quantity" required />
            </p>
            <p>
                <textarea cols="7" name="description" placeholder="description" required></textarea>
            </p>
            <p>
                <button>SUBMIT</button>
            </p>
            </form>
        </p>
    </div>
@endsection