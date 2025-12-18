<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h4 class="mb-4">Update post Information</h4>
    <form method="POST" action={{ route('posts.update', $post->id) }}>
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="User_id" class="form-label">User_id</label>
            <input type="text" name="user_id" class="form-control" value="{{ $post->user_id }}"required>
        </div>
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">

                <Body></Body>
            </label>
            <input type="text" name="body" class="form-control" value={{ $post->body }} required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">

                <Body></Body>
            </label>
            <input type="text" name="slug" class="form-control" value={{ $post->slug }} required>
        </div>
        <div class="mb-3">
            <label for="likes_count" class="form-label">

                <Body></Body>
            </label>
            <input type="number" name="likes_count" class="form-control" value={{ $post->likes_count }} required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</body>

</html>
