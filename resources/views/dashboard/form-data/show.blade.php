@extends('dashboard.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3 d-none d-sm-flex">Form Data</div>
                <div class="ps-3 d-none d-sm-flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View User Data</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <h6 class="mb-0 text-uppercase">View Form Data</h6>
            <hr />

            <div class="card col-8">
                <div class="card-body">
                    <!-- Displaying User Data as Read-Only -->

                    <!-- Name Field -->
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Name</label>
                        <p class="form-control-plaintext">{{ $formData->name }}</p>
                    </div>

                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <p class="form-control-plaintext">{{ $formData->email }}</p>
                    </div>

                    <!-- Mobile Field -->
                    <div class="mb-3">
                        <label for="mobile" class="form-label fw-bold">Mobile</label>
                        <p class="form-control-plaintext">{{ $formData->mobile }}</p>
                    </div>

                    <!-- Message Field -->
                    <div class="mb-3">
                        <label for="message" class="form-label fw-bold">Message</label>
                        <p class="form-control-plaintext">{{ $formData->message }}</p>
                    </div>

                    <!-- Back Button or Other Actions -->
                    <div class="mb-3">
                        <a href="{{ route('dashboard.form-data.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
