@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <h1>{{ __('Dashboard Page') }}</h1>

        <button
            type="button"
            class="bg-[#0d6efd] text-white px-3 py-2 rounded-md hover:bg-[#0b5ed7] active:bg-[#0a58ca] focus:outline-none focus:ring-4 focus:ring-[#0d6efd]/50 transition-colors duration-150"
        >
            Primary Button
        </button>

        {{ $posts->links() }}

        <div class="grid grid-cols-4 gap-2">
            @foreach ($posts as $post)
                @include('partials.post-card')
            @endforeach
        </div>
    </div>
@endsection
