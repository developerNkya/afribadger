
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
                                <div class="col-xl-6" onclick="move_to_tour('{{$tour->id}}')">
                                    <a  class="card-link">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">{{$tour->name}}</h4>
                                                <p class="card-title-desc">{{$tour->subtitle}}</p>
                                                <div id="carouselExampleControls{{$tour->id}}" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner" role="listbox">
                                                        @foreach($tour->image_paths as $index => $imagePath)
                                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                            <img class="d-block img-fluid" src="{{ $imagePath }}" alt="Slide {{ $index + 1 }}">
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
                                
                        </div>                        
                    </div> <!-- container-fluid -->
                </div>
            <div class="main-content">

            
                <script>
                    function move_to_tour(tour_id) {
                        var url = '/admin-tour-detail/' + tour_id;       
                        // Redirect to the constructed URL
                        window.location.href = url;
                    }
                    </script>

            @include('admin.partials.footer')

            