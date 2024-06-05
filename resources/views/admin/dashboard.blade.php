@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        @if(session('message'))
        <h2 class="alert alert-success">{{session('message')}}</h2>
        @endif
        <div class="me-md-3 me-xl-5">
            <h2>Dashboard</h2>
            <p class="mb-md-0">Your analytics dashboard template.</p>
            <hr>
        </div>

        <h2 class="mt-3">Article News</h2>
        <hr>
        

        <h2 class="mt-3">Items</h2>
        <hr>
     


        <h2 class="mt-3">Users</h2>
        <hr>
   
    </div>
</div>
@endsection