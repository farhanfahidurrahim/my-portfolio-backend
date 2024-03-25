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
                            <h5 class="card-title">About Section</h5>

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
                                    <th>Description</th>
                                    <th>DOB</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Whatsapp</th>
                                    <th>address</th>
                                    <th>expertise_one</th>
                                    <th>expertise_one_desc</th>
                                    <th>expertise_two</th>
                                    <th>expertise_two_desc</th>
                                    <th>expertise_three</th>
                                    <th>expertise_three_desc</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($aboutSection as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->description ?? '-' }}</td>
                                        <td>{{ $row->dob }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->phone }}</td>
                                        <td>{{ $row->whatsapp }}</td>
                                        <td>{{ $row->address }}</td>
                                        <td>{{ $row->expertise_one }}</td>
                                        <td>{{ $row->expertise_one_desc }}</td>
                                        <td>{{ $row->expertise_two }}</td>
                                        <td>{{ $row->expertise_two_desc }}</td>
                                        <td>{{ $row->expertise_three }}</td>
                                        <td>{{ $row->expertise_three_desc }}</td>
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
                                            <a href="" class="btn btn-outline-primary getFormData"
                                                data-bs-toggle="modal" data-bs-target="#editModal"
                                                data-id="{{ $row->id }}" data-name="{{ $row->name }}"
                                                data-designation="{{ $row->designation }}"
                                                data-resume="{{ $row->resume }}">Edit</a>
                                            <a href="" class="btn btn-outline-danger">Delete</a>
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
                    <form id="addFormModal" action="" method="" class="row g-3">
                        @csrf
                        <div class="errMsgShow">

                        </div>

                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Description</label>
                            <input type="text" name="description" id="description" value="{{ old('description') }}"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Date of Birth</label>
                            <input type="text" name="dob" id="dob" value="{{ old('dob') }}"
                                class="form-control @error('designation') is-invalid @enderror">
                            @error('designation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword5" class="form-label">Email</label>
                            <input type="text" name="email" id="email" value="{{ old('email') }}"
                                class="form-control
                            @error('resume') is-invalid @enderror">
                            @error('resume')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress5" class="form-label">Phone Number</label>
                            <input type="phone" name="phone" id="phone" value="{{ old('phone') }}"
                                class="form-control @error('github_link') is-invalid @enderror">
                            @error('github_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Whatsapp</label>
                            <input type="phone" name="whatsapp" id="whatsapp" value="{{ old('whatsapp') }}"
                                class="form-control @error('linkedin_link') is-invalid @enderror">
                            @error('github_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Address</label>
                            <input type="text" name="address" id="address" value="{{ old('address') }}"
                                class="form-control @error('others_link') is-invalid @enderror">
                            @error('others_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Expertise_one</label>
                            <input type="text" name="expertise_one" id="expertise_one"
                                value="{{ old('expertise_one') }}"
                                class="form-control @error('others_link') is-invalid @enderror">
                            @error('others_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Expertise_one_desc</label>
                            <input type="text" name="expertise_one_desc" id="expertise_one_desc"
                                value="{{ old('Expertise_one_desc') }}"
                                class="form-control @error('others_link') is-invalid @enderror">
                            @error('others_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Expertise_two</label>
                            <input type="text" name="expertise_two" id="expertise_two"
                                value="{{ old('expertise_two') }}"
                                class="form-control @error('others_link') is-invalid @enderror">
                            @error('others_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Expertise_two_desc</label>
                            <input type="text" name="expertise_two_desc" id="expertise_two_desc"
                                value="{{ old('expertise_two_desc') }}"
                                class="form-control @error('others_link') is-invalid @enderror">
                            @error('others_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Expertise_three</label>
                            <input type="text" name="expertise_three" id="expertise_three"
                                value="{{ old('expertise_three') }}"
                                class="form-control @error('others_link') is-invalid @enderror">
                            @error('others_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Expertise_three_desc</label>
                            <input type="text" name="expertise_three_desc" id="expertise_three_desc"
                                value="{{ old('expertise_three_desc') }}"
                                class="form-control @error('others_link') is-invalid @enderror">
                            @error('others_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="col-md-4">
                            <label for="inputState" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                <option selected disabled>Choose...</option>
                                <option selected value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div> --}}
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
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery Ajax -->
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

            // <!-- AJAX Form Create Submit -->
            $(document).on('click', '.submitBtnModal', function(e) {
                e.preventDefault();
                let formData = $('#addFormModal').serialize();

                $.ajax({
                    url: '{{ route('about.store') }}',
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: formData,
                    success: function(response) {
                        if (response.status == 'success') {
                            toastr.success('Created successfully');
                            $('#addModal').modal('hide');
                            $('#addFormModal')[0].reset();
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


            // <!-- AJAX Form Edit Update -->
            $(document).on('click', '.getFormData', function(e) {
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
        });
    </script>

    <!-- AJAX Status Change -->
    <script>
        $(document).ready(function() {
            $('.statusToggleCls').on('change', function() {
                let id = $(this).attr('id').replace('statusToggle', '');
                let status = $(this).prop('checked') ? 'active' : 'inactive';

                $.ajax({
                    url: "{{ url('home/status-change/') }}/" + id,
                    method: 'PUT',
                    data: {
                        id: id,
                        status: status,
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            toastr.success('Status changed successfully');
                        }
                    }
                });
            });
        });
    </script>
@endsection
