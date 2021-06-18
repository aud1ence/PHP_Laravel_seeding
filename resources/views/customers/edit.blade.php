@extends('home')
@section('title', 'Edit information')
@section('content')
<div class="card" style="width: 500px; margin-left: 30%; margin-top: 20px">
    <div class="card-title">
        <h1>Edit Information</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('customers.update', $customer->id) }}">
            @csrf
            <div class="form-group">
                <label>Customer name</label>
                <input type="text" class="form-control" name="name" value="{{ $customer->name }}" >
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" value="{{ $customer->email }}">
            </div>
            <div class="form-group">
                <label>Birthday</label>
                <input type="text" class="form-control" value="{{ $customer->dob }}">
            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            <button class="btn btn-outline-danger" style="float: right" onclick="window.history.go(-1); return false">Cancel</button>
        </form>
    </div>
</div>
@endsection
