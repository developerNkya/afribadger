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
                            <!-- Add an icon here -->
                            {{-- <i class="fa fa-eye" aria-hidden="true" style="font-size: 24px;"></i> --}}

                        </div>
                    </div>
                    <a href="/view_all_tours">
                        <img src="https://i.ibb.co/Km6d7Zn/eye-removebg-preview.png" alt="eye-removebg-preview"
                            style="height:50px; float:right; padding-bottom:10px">
                    </a>

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
                                    <label for="subtitle" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="images" class="form-label">Images</label>
                                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                                </div>

                                <!-- Category section -->
                                <p class="card-title-desc" style="padding-top: 3%">Fill in the points that will be
                                    visited within the tour (optional)</p>
                                <div class="col-md-6 mb-3">
                                    <label for="category" class="form-label">Point</label>
                                    <div id="categoryContainer">
                                        <div class="category-item mb-3">
                                            <input type="text" class="form-control" name="categories[]"
                                                placeholder="Point"><br>
                                            <textarea class="form-control" rows="2" name="category_descriptions[]" placeholder="Description"
                                                style="padding-top: 3%"></textarea>
                                            <button type="button"
                                                class="btn btn-secondary mt-2 remove-category">Remove</button>
                                        </div>
                                        <button type="button" class="btn btn-primary mt-2 add-category">+</button>
                                    </div>
                                </div>
                                <!-- End Category section -->

                            </div>

                            <div style="padding-top:2%">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const categoryContainer = document.getElementById('categoryContainer');

                            categoryContainer.addEventListener('click', function(e) {
                                if (e.target.classList.contains('remove-category')) {
                                    e.target.closest('.category-item').remove();
                                }
                            });

                            categoryContainer.addEventListener('click', function(e) {
                                if (e.target.classList.contains('add-category')) {
                                    const categoryItem = document.createElement('div');
                                    categoryItem.classList.add('category-item', 'mb-3');
                                    categoryItem.innerHTML = `
                                        <input type="text" class="form-control" name="categories[]" placeholder="Point"><br>
                                        <textarea class="form-control" rows="2" name="category_descriptions[]" placeholder="Description" style="padding-top: 3%"></textarea>
                                        <button type="button" class="btn btn-secondary mt-2 remove-category">Remove</button>
                                    `;
                                    categoryContainer.insertBefore(categoryItem, e.target);
                                }
                            });
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
