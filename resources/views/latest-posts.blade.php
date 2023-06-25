<!DOCTYPE html>
<html>
<head>
    <title>Latest Posts</title>
</head>
<body>
<div>
    @foreach ($categories as $category)
        <div style="border-bottom: 1px solid gray; width: 320px; background-color: #f2f2f4; width: 200px; float: left; margin: 0 25px 25px 0; padding: 30px">
            <h1>Category: {{ $category->category_name }}</h1>
            @if ($category->latestPost)
                <h2>Latest Post:</h2>
                <h3>{{ $category->latestPost->title }}</h3>
                <p>{{ $category->latestPost->description }}</p>
            @else
                <p>No posts found for this category.</p>
            @endif
        </div>
    @endforeach
</div>
</body>
</html>
