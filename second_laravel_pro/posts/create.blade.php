<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Create a New Post</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">User ID</label>
                        <input type="text" class="form-control" name="user_id" placeholder="Enter User ID">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Body</label>
                        <textarea class="form-control" name="body" rows="3" placeholder="Enter Post Body"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="Enter Slug">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Likes Count</label>
                        <input type="number" class="form-control" name="likes_count" placeholder="Enter Likes Count">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
