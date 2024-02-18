
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

                            @foreach ($data as $key => $value)
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <b>{{ ucfirst($key) }}</b>
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="card-blockquote mb-0">
                                            <p>{!! nl2br(e($value)) !!}</p>
                                            <footer class="blockquote-footer font-size-12 m-0">
                                                Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                            
                            {{-- <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <b>Subtitle</b>
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="card-blockquote mb-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer class="blockquote-footer font-size-12 m-0">
                                                Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <b>Dialog Infomation</b>
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="card-blockquote mb-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer class="blockquote-footer font-size-12 m-0">
                                                Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">UPDATE</h4>
                                </div>
                            </div>
                        </div>

                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                       @endif
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-title-desc">Using the below fields, update the existing text with your new existing text.</p>
                                        <form class="needs-validation" method="post" action="{{url('/update-intro-text')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label>Description</label>
                                                    <div>
                                                        <textarea required class="form-control" rows="5" cols="30" name="info"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-6">
                                                        <label for="validationCustom03" class="form-label">Option</label>
                                                        <select class="form-select" id="validationCustom03" name="option" required>
                                                            <option selected value="Home-Header" name="Home-Header">Header</option>
                                                            <option value="Home-Subtitle" name="Home-Subtitle">Subtitle</option>
                                                            <option value="Home-Dialog" name="Home-Dialog">Dialog</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a valid state.
                                                        </div>
        
                                                    </div>
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