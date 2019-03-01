@extends('backend.layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $article['id'] }}</th>
                    <td>{{ $article['title'] }}</td>
                    <td>{{ $article['description'] }}</td>
                    <td>
                        <a href="{{ BASE_URL . '/admin/articles/edit/' . $article['id'] }}" class="btn btn-info" role="button">Edit</a>
                        <button class="btn btn-danger btn-destroy-article" type="button" data-id="{{ $article['id'] }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        $('.btn-destroy-article').on('click', function () {
            var r = confirm("Delete this article?");

            if (r == true) {
                let id = $(this).data('id'); 
                $.ajax({ 
                    type: "POST", 
                    url: "articles/destroy", 
                    data: {id},
                    success: function () {
                        location.reload();
                    }
                });
            }
        });
    </script>
@endsection