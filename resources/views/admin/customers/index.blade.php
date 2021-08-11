@extends('admin.layouts.main')

@section("pageTitle","Contacts")

@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3>Khách hàng</h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
                <a href="{{route('customers.create')}}" class="btn btn-primary">New Contact</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-12">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Số ĐT</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th colspan=2>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{$customer->id}}</td>
                                        <td>Tên: {{$customer->name}}</td>
                                        <td>{{$customer->phone}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->address}}</td>
                                        <td>{{$customer->city}}</td>
                                        <td>{{$customer->country}}</td>
                                        <td>
                                            <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('customers.destroy', $customer->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-6">
                                </div>
                                <div class="col-6">
                                    <div class="d-flex flex-row-reverse">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
