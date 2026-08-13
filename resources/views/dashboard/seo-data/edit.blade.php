@extends('dashboard.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3 d-none d-sm-flex">SEO Data</div>
                <div class="ps-3 d-none d-sm-flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit SEO Data</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <h6 class="mb-0 text-uppercase">Edit SEO Data</h6>
            <hr />

            <div class="card col-8">
                <div class="card-body">
                    <form action="{{ route('dashboard.seo-data.update', $seoData->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="page_slug" class="form-label">Page Slug </label>
                            <input class="form-control" type="text" name="page_slug" id="page_slug"
                                placeholder="Enter Page Slug" value="{{ old('page_slug', $seoData->page_slug) }}">
                            @error('page_slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="seo_title" class="form-label">SEO Title</label>
                            <input class="form-control" type="text" name="seo_title" id="seo_title"
                                placeholder="Enter SEO Title" value="{{ old('seo_title', $seoData->seo_title) }}">
                            @error('seo_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description"
                                placeholder="Enter Description">{{ old('description', $seoData->seo_description) }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="keywords" class="form-label">Keywords</label>
                            <textarea class="form-control" name="keywords" id="keywords"
                                placeholder="Enter Keywords (comma-separated)">{{ old('keywords', $seoData->seo_keywords) }}</textarea>
                            @error('keywords')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

