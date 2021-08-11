@extends('admin.layouts.main')
@section("pageTitle","Edit customer")

@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Cập nhật liên hệ</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8 offset-sm-2">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <br/>
                                @endif
                                <form method="post" action="{{ route('customers.update', $customer->id) }}">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="first_name"><b>First Name:</b></label>
                                        <input type="text" class="form-control" name="first_name" value={{ $customer->first_name }} />
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="last_name"><b>Last Name:</b></label>
                                        <input type="text" class="form-control" name="last_name" value={{ $customer->last_name }} />
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="email"><b>Email:</b></label>
                                        <input type="text" class="form-control" name="email" value={{ $customer->email }} />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="city"><b>City:</b></label>
                                        <input type="text" class="form-control" name="city" value={{ $customer->city }} />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="country"><b>Country:</b></label>
                                        <input type="text" class="form-control" name="country" value={{ $customer->country }} />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="job_title"><b>Job Title:</b></label>
                                        <input type="text" class="form-control" name="job_title" value={{ $customer->job_title }} />
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
