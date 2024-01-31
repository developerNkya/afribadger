
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

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="zoom-effect">
                                    <img class="card-img-top img-fluid" src="images/images2/small/img-5.jpg" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><b>Intro Text</b></h4>
                                        <p class="card-text">Easily edit the Intro text at the introduction of the website.Make sure that the text is catchy and can be understood by visitors</p>
                                         
                                        <p class="card-text">
                                            {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                                            <a href="/edit-intro-text" class="btn btn-primary waves-effect waves-light">Proceed</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="zoom-effect">
                                    <img class="card-img-top img-fluid" src="images/images2/small/img-5.jpg" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><b>Category Section</b></h4>
                                        <p class="card-text">Easily edit the Category section of the homepage part of website.Make sure that the text is catchy and can be understood by visitors</p>
                                         
                                        <p class="card-text">
                                            {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                                            <a href="#" class="btn btn-primary waves-effect waves-light" >Proceed</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="zoom-effect">
                                        <img class="card-img-top img-fluid" src="images/images2/small/img-5.jpg" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><b>Dialog Information</b></h4>
                                        <p class="card-text">Easily edit the dialog box in the homepage part of the website. Make sure that the text is catchy and can be understood by visitors</p>
                            
                                        <p class="card-text">
                                            <a href="#" class="btn btn-primary waves-effect waves-light">Proceed</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
        




        
                        </div>
                        <!-- end row -->


                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                @include('admin.partials.footer')