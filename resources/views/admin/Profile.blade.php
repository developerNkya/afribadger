@include('admin.partials.header')
<!-- ========== Left Sidebar Start ========== -->
@include('admin.partials.sidebar')

<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">PERSONAL INFORMATION</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-6">
                    @foreach ($infos as $info)
                    @endforeach
                    <div class="card">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="{{ $info->username }}"
                                        id="username" readonly>
                                </div>
                            </div>
                          
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" placeholder="{{ $info->password }}" id="password" readonly>
                        
                                    <div class="input-group-append" style="padding-top:1% ">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="{{ $info->address }}"
                                        id="address" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" placeholder="{{ $info->email }}"
                                        id="email" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="{{ $info->phone_no }}"
                                        id="phone" readonly>
                                </div>
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                id="editBtn">Update</button>
                            <button type="button" class="btn btn-success waves-effect waves-light d-none"
                                id="saveBtn">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Nazox.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a
                            href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#togglePassword').click(function() {
        var passwordField = $('#password');
        var icon = $(this).find('i');

        // Toggle password visibility
        if (passwordField.attr('type') === 'password') {
            passwordField.attr('type', 'text');
            icon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            passwordField.attr('type', 'password');
            icon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
    });

        // Function to switch to edit mode
        $('#editBtn').on('click', function() {
        // Enable the input fields for editing
        $('#username, #password, #address, #email, #phone').prop('readonly', false);
        
        // Hide the "Update" button and show the "Save" button
        $('#editBtn').addClass('d-none');
        $('#saveBtn').removeClass('d-none');
        
        // Populate input fields with existing values
        $('#username').val('{{ $info->username }}');
        $('#password').val('{{ $info->password }}');
        $('#address').val('{{ $info->address }}');
        $('#email').val('{{ $info->email }}');
        $('#phone').val('{{ $info->phone_no }}');
    });

        // Function to switch back to read-only mode and post data to update/user_info
        $('#saveBtn').click(function() {
    // Check if any of the input fields are empty
    if ($('#username').val() === '' || $('#password').val() === '' || $('#address').val() === '' || $('#email').val() === '' || $('#phone').val() === '') {
        alert('Please fill in all fields.');
        return;
    }

    // Disable input fields to prevent further editing
    $('input').attr('readonly', 'readonly');

    // Hide the "Save" button and show the "Update" button
    $(this).addClass('d-none');
    $('#editBtn').removeClass('d-none');

    // Post data to update/user_info
    $.ajax({
        url: '/update/user_info',
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            username: $('#username').val(),
            password: $('#password').val(),
            address: $('#address').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
        },
        success: function(response) {
            // Handle success response
            console.log('Data updated successfully');
            console.log(response);
            alert(response.message)
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.error('Error updating data:', error);
            alert('An error occurred while updating data. Please try again.');
        }
    });


});

    });
</script>
@include('admin.partials.footer')
