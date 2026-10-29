@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        <div class="card bg-base-300 shadow-sm">
            <table class="table table-zebra">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $post->id }}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>{{ $post->title }}</td>
                    </tr>
                    <tr>
                        <th>Content</th>
                        <td>{{ $post->body }}</td>
                    </tr>
                    <tr>
    <th>Images</th>
    <td>
        <div class="flex flex-wrap gap-3">
            @foreach ($post->images as $image)
                <img
                    src="{{ $image->path }}"
                    alt="Post image"
                    class="w-48 rounded-lg"
                >
            @endforeach
        </div>
    </td>
</tr>
                    <tr>
                        <th>Created</th>
                        <td>{{ $post->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Updated</th>
                        <td>{{ $post->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection