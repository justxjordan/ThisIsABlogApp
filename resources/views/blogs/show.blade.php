<x-app-layout>
    <style>
        .container {
            max-width: 600px;
            margin: auto;
            padding: 1.5rem;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            text-align: center;
        }

        .title {
            color: #2d3748;
            font-size: 1.75rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .content {
            margin-top: 1rem;
            color: #4a5568;
            font-size: 1.125rem;
            text-align: left;
        }

        .actions {
            margin-top: 1.5rem;
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .btn {
            padding: 0.5rem 1rem;
            font-weight: 600;
            border-radius: 0.5rem;
            color: white;
            text-align: center;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-indigo {
            background-color: #5A67D8;
        }

        .btn-indigo:hover {
            background-color: #434190;
        }

        .btn-red {
            background-color: #E53E3E;
        }

        .btn-red:hover {
            background-color: #C53030;
        }

        .btn-gray {
            background-color: #A0AEC0;
        }

        .btn-gray:hover {
            background-color: #718096;
        }
    </style>

<div class="container">
        <h1 class="title">{{ $blog->title }}</h1>
        <div class="content">
            <p>{{ $blog->content }}</p>
        </div>
        <div class="actions">
    @if ($blog->user_id == auth()->id())
        <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-indigo">{{ __('Edit') }}</a>
        <form method="POST" action="{{ route('blogs.destroy', $blog) }}" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-red">{{ __('Delete') }}</button>
        </form>
    @endif
    <a href="{{ route('blogs.index') }}" class="btn btn-gray">{{ __('Close') }}</a>
</div>
    </div>
</x-app-layout>
