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
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input statusToggleCls" type="checkbox"
                                                    id="statusToggle{{ $row->id }}"
                                                    {{ $row->status == 'active' ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    for="statusToggle{{ $row->id }}"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-outline-primary getTableData"
                                                data-bs-toggle="modal" data-bs-target="#editModal"
                                                data-id="{{ $row->id }}" data-name="{{ $row->name }}"
                                                data-designation="{{ $row->designation }}"
                                                data-resume="{{ $row->resume }}">Edit</a>
                                            <a href="#" class="btn btn-outline-danger deleteBtn"
                                                data-id="{{ $row->id }}">Delete</a>

                                        </td>
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

    <!-- Add Modal -->
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
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                {{-- <option selected disabled>Choose...</option> --}}
                                <option selected value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary submitBtnModal">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form id="updateModalForm" action="" method="" class="row g-3">
                        @csrf
                        <div class="errMsgShow"></div>

                        <input type="hidden" id="edit_id">

                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Your Name</label>
                            <input type="text" name="name" id="edit_name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Designation</label>
                            <input type="text" name="designation" id="edit_designation"
                                value="{{ old('designation') }}"
                                class="form-control @error('designation') is-invalid @enderror">
                            @error('designation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword5" class="form-label">Resume</label>
                            <input type="text" name="resume" id="edit_resume" value="{{ old('resume') }}"
                                class="form-control
                            @error('resume') is-invalid @enderror">
                            @error('resume')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="col-6">
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
                        </div> --}}
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary updateBtnForm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================= Script ======================== -->

    @push('scripts')
        <script>
            // <!-- Create Submit AJAX Form -->
            $(document).on('click', '.submitBtnModal', function(e) {
                e.preventDefault();
                let name = $('#name').val();
                let designation = $('#designation').val();
                let resume = $('#resume').val();
                let github_link = $('#github_link').val();
                let linkedin_link = $('#linkedin_link').val();
                let others_link = $('#others_link').val();
                let status = $('#status').val();

                $.ajax({
                    url: '{{ url('home/store') }}',
                    method: 'post',
                    data: {
                        name: name,
                        designation: designation,
                        resume: resume,
                        github_link: github_link,
                        linkedin_link: linkedin_link,
                        others_link: others_link,
                        status: status,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            toastr.success('Created successfully');
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
            });

            // <!-- Edit Update AJAX Form -->
            $(document).on('click', '.getTableData', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let name = $(this).data('name');
                let designation = $(this).data('designation');
                let resume = $(this).data('resume');

                $('#edit_id').val(id);
                $('#edit_name').val(name);
                $('#edit_designation').val(designation);
                $('#edit_resume').val(resume);
            });

            $(document).on('click', '.updateBtnForm', function(e) {
                e.preventDefault();
                let id = $('#edit_id').val();
                let name = $('#edit_name').val();
                let designation = $('#edit_designation').val();
                let resume = $('#edit_resume').val();

                $.ajax({
                    url: "{{ url('home/update/') }}/" + id,
                    method: "POST",
                    data: {
                        id: id,
                        name: name,
                        designation: designation,
                        resume: resume,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        if (response.status == "success") {
                            $('#editModal').modal('hide');
                            $('.table').load(location.href + ' .table');
                        }
                    },
                    error: function(err) {},
                });
            });

            // <!-- Edit Update AJAX Form -->
            $(document).on('click', '.deleteBtn', function(e) {
                e.preventDefault();
                let id = $(this).data('id')

                $.ajax({
                    url: "{{ url('home/delete/') }}/" + id,
                    method: "DELETE",
                    data: {
                        id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        toastr.success("Deleted Successfully!");
                        $('.table').load(location.href + ' .table');
                    },
                    error: function(err) {
                        console.log(err)
                    }
                });
            });
        </script>


        <!-- Status Change AJAX -->
        <script>
            $(document).on('change', '.statusToggleCls', function() {
                let id = $(this).attr('id').replace('statusToggle', '');
                let status = $(this).prop('checked') ? 'active' : 'inactive';

                $.ajax({
                    url: "{{ url('home/status-change/') }}/" + id,
                    method: 'PUT',
                    data: {
                        id: id,
                        status: status,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            toastr.success('Status changed successfully');
                        }
                    }
                });
            });
        </script>
    @endpush
@endsection
