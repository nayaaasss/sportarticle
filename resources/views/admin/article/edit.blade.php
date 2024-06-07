@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Edit Article
                    <a href="{{ route('articles-index') }}" class="btn btn-primary btn-sm text-white float-end">
                        Back
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('articles-update', $articles->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $articles->title }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{$articles->slug}}">
                        @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" class="form-control" rows="5" required>{{ $articles->content }}</textarea>
                    </div>
                    <div class="mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" {{ $articles->status == '1' ? 'checked' : '' }} name="status" style="width:20px;">
                </div>
                
                <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{ asset('/upload/articles/'. $articles->image) }}" alt="{{ $articles->title }}" width="100">
                </div>
                
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

