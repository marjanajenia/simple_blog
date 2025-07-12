@extends('backend.mastertemplate.template');
@section('content')

<main class="col-md-10 ms-sm-auto col-lg-10 px-md-4 dashboard-content">
    <div class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom">
        <h2>Welcome, John Doe!</h2>
        <a href="#" class="btn btn-primary">+ New Post</a>
    </div>
    <form action="{{ route('role.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Enter the Role">
                </div>
            </div>
            <div class="col-md-4">
                @if ($permissions->isNotEmpty())
                    @foreach ($permissions as $permission)
                    <input type="checkbox" name="permission[]" value="{{ $permission->name }}">
                    <label for="">{{ $permission->name }}</label>
                    @endforeach
                @endif
            </div>
        </div>
        <button class="submit m-3 btn-primary">Submit</button>
    </form>
</main>
@endsection
