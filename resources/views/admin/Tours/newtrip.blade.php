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
                        <h4 class="mb-sm-0">ADD TOUR</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Add Tours</li>
                            </ol>
                        </div>

                    </div>
                </div>


            </div>
            <!-- end page title -->
        </div>
        <!-- end row -->


        {{-- <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">UPDATE</h4>
                                </div>
                            </div>
                        </div> --}}
        <div class="row">
            <div class="col-xl-12">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="card">


                    <div class="card-body">
                        <p class="card-title-desc">Fill in the information below to add a new Tour</p>
                        <form class="needs-validation" method="post" action="{{ url('/save_tour') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="tourName" class="form-label">Name of Tour</label>
                                    <input type="text" class="form-control" id="tourName" name="tour_name" required>
                                    <div class="invalid-feedback">
                                        Please provide a name for the tour.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea required class="form-control" rows="5" id="description" name="description"></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a description for the tour.
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="subtitle" class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" id="subtitle" name="subtitle">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="images" class="form-label">Images</label>
                                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                                </div>
                            </div>

                            <div style="padding-top:2%">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->

        </div>
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@include('admin.partials.footer')
