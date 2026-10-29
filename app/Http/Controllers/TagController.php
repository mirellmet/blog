<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Support\Facades\Gate;

class TagController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Tag::class);
        $tags = Tag::withCount('posts')
            ->orderBy('name')
            ->paginate(16);

        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        Gate::authorize('create', Tag::class);
        return view('tags.create');
    }

    public function store(StoreTagRequest $request)
    {
        Gate::authorize('create', Tag::class);
        Tag::create($request->validated());

        return redirect()->route('tags.index');
    }

    public function show(Tag $tag)
    {
        Gate::authorize('view', $tag);
        $tag->load('posts');

        return view('tags.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        Gate::authorize('update', $tag);
        return view('tags.edit', compact('tag'));
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        Gate::authorize('update', $tag);
        $tag->update($request->validated());

        return redirect()->route('tags.index');
    }

    public function destroy(Tag $tag)
    {
        Gate::authorize('delete', $tag);
        $tag->delete();

        return redirect()->route('tags.index');
    }
}
