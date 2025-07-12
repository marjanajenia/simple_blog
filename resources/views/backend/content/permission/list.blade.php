@extends('backend.mastertemplate.template');
@section('content')

<main class="col-md-10 ms-sm-auto col-lg-10 px-md-4 dashboard-content">
    <div class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom">
        <h2>Welcome, John Doe!</h2>
        <a href="{{ route('permission.create') }}" class="btn btn-primary">+ New Permission</a>
    </div>
    <div >
        <table class="table" style="width: 85%" align="center">
            <thead>
                <tr>
                    <th>sl</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $permission->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
