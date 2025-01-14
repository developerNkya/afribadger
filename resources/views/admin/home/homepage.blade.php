
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
                                    <h4 class="mb-sm-0">Cards</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Homepage</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">

                            @foreach ($datas as $data)
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="zoom-effect">
                                        {{-- <img class="card-img-top img-fluid" src="images/images2/small/img-5.jpg" alt="Card image cap"> --}}
                                        <img class="card-img-top img-fluid" src="https://i.ibb.co/7gNdpbC/cat-img1.jpg" alt="cat-img1" border="0">
                                        <div class="homepage-cat1 card-img-top img-fluid "></div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><b>{{ $data['title'] }}</b></h4>
                                        <p class="card-text">{{ $data['text'] }}</p>
                                        <p class="card-text">
                                            {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                                            <a href="{{ $data['url'] }}" class="btn btn-success waves-effect waves-light">Proceed</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                              
                        </div>
                        <!-- end row -->


                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                @include('admin.partials.footer')