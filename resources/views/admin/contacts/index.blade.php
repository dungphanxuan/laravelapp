@extends('admin.layouts.appkit')

@section("pageTitle","Contacts")

@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3>Contacts</h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
                <a href="{{route('admin.contacts.create')}}" class="btn btn-primary">New Contact</a>
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
                                    <th>Job Title</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th colspan=2>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$contact->id}}</td>
                                        <td>Tên: {{$contact->first_name}} {{$contact->last_name}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->job_title}}</td>
                                        <td>{{$contact->city}}</td>
                                        <td>{{$contact->country}}</td>
                                        <td>
                                            <a href="{{route('admin.contacts.edit', $contact->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.contacts.destroy', $contact->id)}}" method="post">
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
                                        {!! $contacts->appends(request()->input())->links('vendor.pagination.bootstrap-4') !!}
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
