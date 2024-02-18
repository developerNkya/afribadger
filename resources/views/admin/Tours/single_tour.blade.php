@include('admin.partials.header')
<!-- ========== Left Sidebar Start ========== -->
@include('admin.partials.sidebar')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Tour Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All Tours</a></li>
                                <li class="breadcrumb-item active">Tour Details</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @foreach ($tours as $tour)
                                <div class="col-xl-5" onclick="move_to_tour('{{$tour->id}}')">
                                    <a  class="card-link">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="carouselExampleControls{{$tour->id}}" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner" role="listbox">
                                                        @foreach($tour->image_paths as $index => $imagePath)
                                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                            <img class="d-block img-fluid" src="{{ asset('storage/images/' . basename($imagePath)) }}" alt="Slide {{ $index + 1 }}">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <!-- Previous control -->
                                                    <a class="carousel-control-prev {{ count($tour->image_paths) <= 1 ? 'd-none' : '' }}" href="#carouselExampleControls{{$tour->id}}" role="button" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </a>
                                                    <!-- Next control -->
                                                    <a class="carousel-control-next {{ count($tour->image_paths) <= 1 ? 'd-none' : '' }}" href="#carouselExampleControls{{$tour->id}}" role="button" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="row">
                                @foreach ($tours as $tour)
                                <div class="col-xl-7">
                                    <div class="mt-4 mt-xl-3">
                                        <a href="#" class="text-primary">{{$tour->name}}</a>
                                        <h5 class="mt-1 mb-3">{{$tour->subtitle}}</h5>

                                        <div class="d-inline-flex">
                                            <div class="text-muted me-3">
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                            <div class="text-muted">( 132 )</div>
                                        </div>

                                        <h5 class="mt-2">$240 </h5>
                                        <hr class="my-4">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- end row -->

                            <div class="mt-4">
                                <h5 class="font-size-14 mb-3">Tour description: </h5>
                                <div class="product-desc">
                                    <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="desc-tab" data-bs-toggle="tab" href="#desc"
                                                role="tab">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="specifi-tab" data-bs-toggle="tab"
                                                href="#specifi" role="tab">Summary</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content border border-top-0 p-4">
                                        <div class="tab-pane fade" id="desc" role="tabpanel">
                                            <div>
                                                <p>If several languages coalesce, the grammar of the resulting language
                                                    is more simple and regular than that of the individual </p>
                                                <p>To achieve this, it would be necessary to have uniform grammar,
                                                    pronunciation and more common several languages coalesce, the
                                                    grammar of the resulting.</p>
                                                <p>It will be as simple as occidental in fact.</p>

                                                <div>
                                                    <p class="mb-2"><i
                                                            class="mdi mdi-circle-medium me-1 align-middle"></i> If
                                                        several languages coalesce</p>
                                                    <p class="mb-2"><i
                                                            class="mdi mdi-circle-medium me-1 align-middle"></i> To an
                                                        English person, it will seem like simplified</p>
                                                    <p class="mb-0"><i
                                                            class="mdi mdi-circle-medium me-1 align-middle"></i> These
                                                        cases are perfectly simple.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show active" id="specifi" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table table-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" style="width: 400px;">No. Bookings</th>
                                                            <td>T-Shirt</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ratings</th>
                                                            <td>Jack & Jones</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Price</th>
                                                            <td>Blue</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Images</th>
                                                            <td>Cotton</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <h5 class="font-size-14">Reviews : </h5>
                                <div class="d-inline-flex mb-3">
                                    <div class="text-muted me-3">
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star"></span>
                                    </div>
                                    <div class="text-muted">( 132 customer Review)</div>
                                </div>
                                <div class="border p-4 rounded">
                                    <div class="d-flex border-bottom pb-3">
                                        <div class="flex-1">
                                            <p class="text-muted mb-2">To an English person, it will seem like
                                                simplified English, as a skeptical Cambridge</p>
                                            <h5 class="font-size-15 mb-3">James</h5>

                                            <ul class="list-inline product-review-link mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"><i
                                                            class="mdi mdi-thumb-up align-middle me-1"></i> Like</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i
                                                            class="mdi mdi-message-text align-middle me-1"></i>
                                                        Comment</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="float-sm-end font-size-12">11 Feb, 2020</p>
                                    </div>
                                    


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    @include('admin.partials.footer')
