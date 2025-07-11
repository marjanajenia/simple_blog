@extends('backend.mastertemplate.template');
@section('content')
    <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4 dashboard-content">
        <div class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom">
            <h2>Welcome, John Doe!</h2>
            <a href="#" class="btn btn-primary">+ New Post</a>
        </div>
        <!-- Recent Posts -->
        <h4>Your Recent Posts</h4>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                📘 My First Blog Post <small class="text-muted float-end">July 10, 2025</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                ✍️ Thoughts on Web Development <small class="text-muted float-end">July 5, 2025</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                🌟 Best Coding Practices <small class="text-muted float-end">June 30, 2025</small>
            </a>
        </div>
    </main>
@endsection
