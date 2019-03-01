@extends('frontend.layouts.app')

@section('content')
    <h1 class="text-center mt-5"><i class="fas fa-home"></i> Homepage</h1>
    <div id="articles-wrapper" class="mt-5">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <td>{{ $article['id'] }}</td>
                    <td>{{ $article['title'] }}</td>
                    <td>{{ $article['description'] }}</td>
                    <td>
                        <a href="/articles/{{ $article['id'] }}" class="btn btn-success" role="button">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection