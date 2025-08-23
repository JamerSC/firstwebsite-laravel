<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit posts</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT') <!-- Put method updating the post -->
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
        <br>
        <label for="body">Body:</label>
        <textarea name="body" id="body">{{ old('body', $post->body) }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>            
        @endforeach
    </ul>
    @endif
</body>
</html>