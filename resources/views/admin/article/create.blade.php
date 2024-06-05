@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-header">
        <h3>Add Article
          <a href="{{ route('articles-index') }}" class="btn btn-danger btn-sm text-white float-end">
            Back
          </a>
        </h3>
      </div>
      <div class="card-body">
        <form action="{{ route('articles-store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                Home
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">
                Product Image
              </button>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              </div>

              <!-- product name field -->
              <div class="mb-3">
                <label for="">Article Name</label>
                <input type="text" name="name" class="form-control">
              </div>

              <!-- product slug field -->
              <div class="mb-3">
                <label for="">Article Slug</label>
                <input type="text" name="slug" class="form-control">
              </div>
            </div>

            <!-- Content -->
            <div class="form-group">
                <label for="">Isi Content</label>
                <textarea class="form-control mt-4 fs shadow" style="border-style: none; " name="content"
                    placeholder="Tell about the story" rows="6">{{ old('content') }}</textarea>
                    @error('content')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
            </div>

            <!-- Status field -->
            <div class="mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status" style="width: 20px; height: 20px;">
                  </div>

            <div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
              <div class="mb-3">
                <label for="">Upload Product Image</label>
                <input type="file" name="image" multiple class="form-control">
              </div>
            </div>

            <div>
            <button type="submit" class="btn btn-primary text-white">Submit</button>
          </div>
        </div>
         

        </form>
      </div>
    </div>
  </div>
</div>
@endsection