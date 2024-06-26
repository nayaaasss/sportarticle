@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">

        @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Article List
                    <a href="{{ route('articles-create') }}" class="btn btn-primary btn-sm text-white float-end">
                        Add Article
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Article Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->status ? 'Hidden' : 'Visible'}}</td>
                        
                            <td>
                                <a href="{{ route( 'articles-edit', $article->id )}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{route( 'articles-delete', $article->id )}}" onclick="return confirm('are you sure want to delete this article?')" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @empty
                        
                        <tr>
                            <td colspan="7">No Article Available</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection