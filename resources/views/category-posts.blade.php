<!DOCTYPE html>
<html>
<head>
    <title>{{ $category->name }}</title>
</head>
<body>
<h1>Posts by {{ $category->name }} Category</h1>
    <div>
@foreach ($posts as $post)
        <div style="border-bottom: 1px solid gray; width: 320px; background-color: #f2f2f4; width: 200px; float: left; margin: 0 25px 25px 0; padding: 30px">
            <h2>{{ $post->title }}</h2>
            <article>{{ $post->description }}</article>
        </div>
@endforeach
    </div>
</body>
</html>
