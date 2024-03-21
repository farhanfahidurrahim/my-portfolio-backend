@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Form Layouts</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Layouts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Multi Columns Form</h5>
                        <!-- Multi Columns Form -->
                        <form action="{{ route('home-section.store') }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">Your Name</label>
                                <input type="text" name="name" value="{{ old('github_link') }}"
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Desigantion</label>
                                <input type="text" name="designation" value="{{ old('designation') }}"
                                    class="form-control @error('designation') is-invalid @enderror">
                                @error('designation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Resume</label>
                                <input type="text" name="resume" value="{{ old('resume') }}"
                                    class="form-control
                                    @error('resume') is-invalid @enderror">
                                @error('resume')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputAddress5" class="form-label">Github Link</label>
                                <input type="url" name="github_link" value="{{ old('github_link') }}"
                                    class="form-control @error('github_link') is-invalid @enderror">
                                @error('github_link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">Linkedin Link</label>
                                <input type="url" name="linkedin_link" value="{{ old('linkedin_link') }}"
                                    class="form-control @error('linkedin_link') is-invalid @enderror">
                                @error('github_link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">Others Link</label>
                                <input type="url" name="others_link" value="{{ old('others_link') }}"
                                    class="form-control @error('linkedin_link') is-invalid @enderror">
                                @error('others_link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
