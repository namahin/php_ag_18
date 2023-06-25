<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
<h1>All Posts</h1>
    <div>
@foreach ($posts as $post)
        <div style="border-bottom: 1px solid gray; width: 320px; background-color: #f2f2f4; width: 200px; float: left; margin: 0 25px 25px 0; padding: 30px">
            <h2>{{ $post->title }}</h2>
            <p>Category: {{ $post->category_name }}</p>
            <article>{{ $post->description }}</article>
        </div>
@endforeach
    </div>
</body>
</html>
