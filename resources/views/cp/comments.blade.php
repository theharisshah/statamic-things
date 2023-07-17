@extends('statamic::layout')
@section('content')

    <div class="card p-0">
        <table class="data-table">
            <thead>
            <tr>
                <th>Post</th>
                <th>Author</th>
                <th>Content</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->related_id }}</td>
                    <td>{{ $comment->comment }}</td>
                    <td>{{ $comment->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
