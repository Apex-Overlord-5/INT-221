<!-- resources/views/admin/dashboard.blade.php -->
<h1>Admin Dashboard</h1>
<p>Welcome to the admin dashboard.</p>
<!-- resources/views/posts/index.blade.php -->

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- The rest of your index view -->
@foreach ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    </div>
@endforeach
