@extends('home')
@section('title', 'Show information')
@section('content')
    <div class="card" style="width: 500px; margin-left: 30%; margin-top: 20px">
        <div class="card-title">
            <h1>Show Information</h1>
        </div>
        <div class="card-body">
                <div class="form-group">
                    <label>Customer name</label>
                    <p>{{ $customer->name }}</p>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <p>{{ $customer->email }}</p>
                </div>
                <div class="form-group">
                    <label>Birthday</label>
                    <p>{{ $customer->dob }}</p>
                </div>
{{--                <button type="submit" class="btn btn-outline-primary">Submit</button>--}}
                <button class="btn btn-outline-danger" style="float: right" onclick="window.history.go(-1); return false">Cancel</button>
        </div>
    </div>
@endsection
