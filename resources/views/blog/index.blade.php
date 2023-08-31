<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- @if (count($posts)< 100)
        <h1> 
            {{ dd($posts) }}
        </h1>
    @elseif (count($posts)=== 102)
    <h1> 
       You have exactly 102 posts 
    </h1>
    @else
    <h1> 
       No posts  
    </h1>
    @endif --}}

    @forelse ($posts as $post)
        {{ $post->title }}
    @empty
        <p> No posts has been set </p>
    @endforelse
</body>
</html>