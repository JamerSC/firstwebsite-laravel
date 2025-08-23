<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>All Posts</h1>
    <br>
    <a href="{{ route('posts.create') }}">Create Post</a>
    <br>
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}"
             method="post" style="display:inline;">
                @csrf
                @method('DELETE') <!-- spoofs a delete request, html doesnt have delete method -->
                <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">
                    Delete
                </button>
            </form>
        </div>
    @endforeach
</body>
</html>