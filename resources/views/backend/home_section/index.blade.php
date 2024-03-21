@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-between align-items-center">
                            <h5 class="card-title">Datatables</h5>

                            <!-- Button trigger modal -->
                            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                                Add New
                            </a>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Resume</th>
                                    <th>Github</th>
                                    <th>LinkedIn</th>
                                    <th>Others</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($HomeSection as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->designation }}</td>
                                        <td>{{ $row->resume }}</td>
                                        <td>{{ $row->github_link }}</td>
                                        <td>{{ $row->linkedin_link }}</td>
                                        <td>{{ $row->others_link }}</td>
                                        <td>Active</td>
                                        <td>Edit</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create New</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form id="addModalForm" action="" method="" class="row g-3">
                        @csrf
                        <div class="errMsgShow">

                        </div>

                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Your Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Designation</label>
                            <input type="text" name="designation" id="designation" value="{{ old('designation') }}"
                                class="form-control @error('designation') is-invalid @enderror">
                            @error('designation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword5" class="form-label">Resume</label>
                            <input type="text" name="resume" id="resume" value="{{ old('resume') }}"
                                class="form-control
                            @error('resume') is-invalid @enderror">
                            @error('resume')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress5" class="form-label">Github Link</label>
                            <input type="url" name="github_link" id="github_link" value="{{ old('github_link') }}"
                                class="form-control @error('github_link') is-invalid @enderror">
                            @error('github_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Linkedin Link</label>
                            <input type="url" name="linkedin_link" id="linkedin_link"
                                value="{{ old('linkedin_link') }}"
                                class="form-control @error('linkedin_link') is-invalid @enderror">
                            @error('github_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Others Link</label>
                            <input type="url" name="others_link" id="others_link" value="{{ old('others_link') }}"
                                class="form-control @error('others_link') is-invalid @enderror">
                            @error('others_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary submitBtnModal">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript code for AJAX form submission -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            //alert("hi");
            $(document).on('click', '.submitBtnModal', function(e) {
                e.preventDefault();
                let name = $('#name').val();
                let designation = $('#designation').val();
                let resume = $('#resume').val();
                let github_link = $('#github_link').val();
                let linkedin_link = $('#linkedin_link').val();
                let others_link = $('#others_link').val();
                // console.log("name ki?", name)
                // console.log("desig ki?", designation)
                // console.log("resume ki?", resume)
                // console.log("git ki?", github_link)
                // console.log("linked ki?", linkedin_link)
                // console.log("other ki?", others_link)

                $.ajax({
                    url: '{{ route('test') }}',
                    method: 'post',
                    data: {
                        name: name,
                        designation: designation,
                        resume: resume,
                        github_link: github_link,
                        linkedin_link: linkedin_link,
                        others_link: others_link,
                    },
                    success: function(response) {
                        console.log("response ki?", response)
                        if (response.status == 'success') {
                            $('#addModal').modal('hide');
                            $('#addModalForm')[0].reset();
                            $('.table').load(location.href + ' .table');
                        }
                    },
                    error: function(err) {
                        let error = err.responseJSON;
                        $.each(error.errors, function(index, value) {
                            console.log("error", error)
                            $('.errMsgShow').append('<span class="text-danger">' +
                                value +
                                '</span>')
                        });
                    },
                });
            })
        });
    </script>
@endsection
