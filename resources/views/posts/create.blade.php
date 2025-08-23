<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Posts</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        <br>
        <label for="body">Body:</label>
        <textarea name="body" id="body">{{ old('body') }}</textarea>
        <br>
        <button type="submit">Save</button>
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