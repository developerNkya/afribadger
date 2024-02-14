
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
                                        <h4 class="mb-sm-0">ALL Tours</h4>
    
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Total Tours:
                                                    <button type="button" class="btn btn-success waves-effect waves-light" style="padding: 5px 10px;">{{$totalTours}}</button>  
                                                </a></li>
 
                                            </ol>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->
    
                            <div class="row">
                                @foreach ($tours as $tour)
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="card-title">{{$tour->name}}</h4>
                                            <p class="card-title-desc">{{$tour->subtitle}}</p>
            
                                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                {{-- <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid" src="https://images.unsplash.com/photo-1522328130867-8df79ee56d04?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="First slide">
                                                    </div>
                                                </div> --}}

                                                @foreach($tour->image_paths as $index => $imagePath)
                                                <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                    <img class="d-block img-fluid" src="{{ asset('storage/images/' . basename($imagePath)) }}" alt="Slide {{ $index + 1 }}">
                                                    
                                                </div>
                                                </div>
                                            @endforeach
                                            
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div> <!-- end row -->
            
    
                        </div>

                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->



                            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
 <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                
            @include('admin.partials.footer')