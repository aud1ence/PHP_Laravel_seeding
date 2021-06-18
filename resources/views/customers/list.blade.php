@extends('home')
@section('title', 'List customers')
@section('content')

    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>List Customers</h1></div>
            <a class="btn btn-primary" href="{{ route('customers.create') }}">Add customer</a>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col">Email</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @forelse($customers as $key => $customer)

                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td><a style=" text-decoration: none" href="{{ route("customers.show", $customer->id)  }}">{{ $customer->name }}</a> </td>
                            <td>{{ $customer->dob }}</td>
                            <td>{{ $customer->email }}</td>
                            <td><a href="{{ route('customers.edit', $customer->id) }}">config</a></td>
                            <td><a href="{{ route('customers.destroy', $customer->id) }}" class="text-danger" onclick="return confirm('Are you sure?')">delete</a></td>
                        </tr>
                    @empty
                        <tr><td colspan="4">Not data</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
