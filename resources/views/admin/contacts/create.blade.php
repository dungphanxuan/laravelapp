@extends('admin.layouts.appkit')
@section("pageTitle","Add a contact")

@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Add a contact</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-body">
                            <div class="col-sm-8 offset-sm-2">
                                <div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div><br/>
                                    @endif
                                    <form method="post" action="{{ route('admin.contacts.store') }}">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="first_name"><b>First Name:</b></label>
                                            <input type="text" class="form-control" name="first_name"/>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="last_name"><b>Last Name:</b></label>
                                            <input type="text" class="form-control" name="last_name"/>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="email"><b>Email:</b></label>
                                            <input type="text" class="form-control" name="email"/>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="city"><b>City:</b></label>
                                            <input type="text" class="form-control" name="city"/>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="country"><b>Country:</b></label>
                                            <input type="text" class="form-control" name="country"/>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="job_title"><b>Job Title:</b></label>
                                            <input type="text" class="form-control" name="job_title"/>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="job_title"><b>Content:</b></label>
                                        <textarea>Next, use our Get Started docs to setup Tiny!</textarea>
                                        </div>
                                        <br>
                                        <div class="d-flex justify-content-center bd-highlight mb-3">
                                            <div class="p-2 bd-highlight"> <button type="submit" class="btn btn-primary">Add contact</button></div>
                                            <div class="p-2 bd-highlight"><a class="btn btn-light" href="{{route('admin.contacts.index')}}" role="button">Go back</a></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script2')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.1/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>
@endsection
