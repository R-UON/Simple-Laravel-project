<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>{{ $post->title }}</h4>
            </div>
            <div class="card-body">
                <p>{{ $post->body }}</p>
                <p><strong>Slug:</strong> {{ $post->slug }}</p>
                <p><strong>Likes:</strong> {{ $post->likes_count }}</p>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>

</body>

</html>
