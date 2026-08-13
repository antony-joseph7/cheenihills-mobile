@extends('dashboard.layouts.app', ['themeplugins' => ['select2']])

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3 d-none d-sm-flex">SEO Management</div>
                <div class="ps-3 d-none d-sm-flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.seo-data.index') }}">SEO Data</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create SEO Data</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <h6 class="mb-0 text-uppercase">Add New SEO Data</h6>
            <hr />

            <div class="card col-8">
                <div class="card-body">


                    <form action="{{ route('dashboard.seo-data.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="page_slug" class="form-label">Page Slug </label>
                            <input type="text" class="form-control" id="page_slug" name="page_slug"
                                value="{{ old('page_slug') }}" placeholder="Enter Page Slug" required>
                            @error('page_slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="seo_title" class="form-label">SEO Title</label>
                            <input type="text" class="form-control" id="seo_title" name="seo_title"
                                value="{{ old('seo_title') }}" placeholder="Enter SEO Title" required>
                            @error('seo_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Enter Description" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="keywords" class="form-label">Keywords</label>
                            <textarea class="form-control" id="keywords" name="keywords" placeholder="Enter Keywords (comma-separated)" required>{{ old('keywords') }}</textarea>
                            @error('keywords')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Initialize Select2 or any additional JavaScript as needed
        $('.select2').select2({
            theme: "bootstrap-5",
            placeholder: "Select an option",
            allowClear: true
        });
    </script>
@endsection
