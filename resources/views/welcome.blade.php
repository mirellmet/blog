<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    
 
</head>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Home page</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        @foreach ($posts as $post)
            <div class="card bg-base-300 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>

                    <p>{{ $post->snippet }}</p>

                    <div class="card-actions justify-end">
                        <a href="{{ route('post', $post) }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</div>
<body>
    <button class="bg-green-400 hover:bg-green-500 text-white py-1 px-4 rounded">
        free vbucks
    </button>
</body>
</html>