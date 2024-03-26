@include('admin.partials.header')
<!-- ========== Left Sidebar Start ========== -->
@include('admin.partials.sidebar')
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">EDIT ABOUT SECTION</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Edit About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end page title -->
        </div>

        <div class="row">
            <div class="col-xl-12">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                 @endif
                <div class="card">


                    <div class="card-body">
                        <!-- Display validation errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        @if ($error == 'The image paths field must be an array.')
                                            <li>Please upload at least one image.</li>
                                        @else
                                            <li>{{ $error }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <p class="card-title-desc">Fill in the information below to add a new Tour</p>
                        <form class="needs-validation" method="post" action="{{ url('/edit_about') }}" enctype="multipart/form-data" id="tourForm">
                            @csrf
                            <div class="row">
                                <!-- Header -->
                                <div class="col-md-12 mb-3">
                                    <label for="header" class="form-label">Header</label>
                                    <input type="text" class="form-control" id="header" name="header" required>
                                    <div class="invalid-feedback">
                                        Please provide a header for the tour.
                                    </div>
                                </div>
                        
                                <!-- Reasons -->
                                <div class="col-md-6 mb-3">
                                    <label for="reasons" class="form-label">Reasons</label>
                                    <textarea required class="form-control" rows="5" id="reasons" name="reasons[]"></textarea>
                                    <div class="invalid-feedback">
                                        Please provide reasons for the tour.
                                    </div>
                                </div>
                        
                                <!-- Plus button for more reasons -->
                                <div class="col-md-6 mb-3">
                                    <!-- Placeholder for dynamically added reasons fields -->
                                    <div id="reasonsContainer"></div>
                                    <button type="button" class="btn btn-success mt-2" id="addReason">+ Add More Reasons</button>
                                </div>
                        
                                <!-- History -->
                                <div class="col-md-6 mb-3">
                                    <label for="history" class="form-label">History</label>
                                    <textarea required class="form-control" rows="5" id="history" name="history"></textarea>
                                    <div class="invalid-feedback">
                                        Please provide history for the tour.
                                    </div>
                                </div>
                        
                                <!-- Founders -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Founders</label>
                                    <!-- Placeholder for dynamically added founder fields -->
                                    <div id="foundersContainer">
                                        <div class="founder-item mb-3">
                                            <input type="text" class="form-control" name="founder_names[]" placeholder="Founder Name" required><br>
                                            <input type="text" class="form-control" name="founder_titles[]" placeholder="Founder Title" required><br>
                                            <input type="file" class="form-control" name="founder_images[]" accept="image/*" multiple required>
                                            <button type="button" class="btn btn-secondary mt-2 remove-founder">Remove</button>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success mt-2" id="addFounder">+ Add Founder</button>
                                </div>
                            </div>
                        
                            <!-- Hidden input for image paths -->
                            <input type="hidden" name="imagePaths" id="imagePathsInput">
                        
                            <div style="padding-top:2%">
                                <button class="btn btn-success" type="submit" id="submitBtn">Save</button>
                            </div>
                        </form>

                    </div>
                    {{-- <button id="upload_widget" class="cloudinary-button">Upload files</button> --}}
                    <script>

                        // Function to add more founders
                        document.getElementById('addFounder').addEventListener('click', function() {
                            var foundersContainer = document.getElementById('foundersContainer');
                            var newFounderField = document.createElement('div');
                            newFounderField.classList.add('founder-item', 'mb-3');
                            newFounderField.innerHTML =
                                '<input type="text" class="form-control" name="founder_names[]" placeholder="Founder Name"><br>' +
                                '<input type="text" class="form-control" name="founder_titles[]" placeholder="Founder Title"><br>' +
                                '<input type="file" class="form-control" name="founder_images[]" multiple>' +
                                '<button type="button" class="btn btn-secondary mt-2 remove-founder">Remove</button>';
                            foundersContainer.appendChild(newFounderField);
                        });

                        // Function to remove founder
                        document.addEventListener('click', function(event) {
                            if (event.target.classList.contains('remove-founder')) {
                                event.target.parentElement.remove();
                            }
                        });


                        // submit listener:::

                        document.getElementById('submitBtn').addEventListener('click', function() {
                            document.getElementById('tourForm').submit();
                        });
                    </script>
                    <script>
                        // Function to add more reasons dynamically
                        function addReason() {
                            var reasonsContainer = document.getElementById('reasonsContainer');
                            var newReasonField = document.createElement('div');
                            newReasonField.innerHTML = `
                                <div class="founder-item mb-3">
                                    <input type="text" class="form-control" name="reasons[]" placeholder="Reason" required><br>
                                    <button type="button" class="btn btn-secondary mt-2 remove-reason">Remove</button>
                                </div>`;
                            reasonsContainer.appendChild(newReasonField);
                        }
                    
                        // Event listener for the "Add More Reasons" button
                        document.getElementById('addReason').addEventListener('click', function() {
                            addReason();
                        });
                    
                        // Event listener for dynamically added "Remove" buttons for reasons
                        document.addEventListener('click', function(e) {
                            if (e.target && e.target.classList.contains('remove-reason')) {
                                e.target.parentNode.parentNode.remove();
                            }
                        });
                    </script>
                    


                </div>
                <!-- end card -->
            </div> <!-- end col -->

        </div>
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@include('admin.partials.footer')
