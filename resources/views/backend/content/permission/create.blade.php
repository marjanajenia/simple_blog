@extends('backend.mastertemplate.template');
@section('content')

<main class="col-md-10 ms-sm-auto col-lg-10 px-md-4 dashboard-content">
    <div class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom">
        <h2>Welcome, John Doe!</h2>
        <a href="#" class="btn btn-primary">+ New Post</a>
    </div>
    <form action="{{ route('permission.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Enter the permission">
                </div>
            </div>
        </div>
        <button class="submit m-3 btn-primary">Submit</button>
    </form>

</main>
@endsection
