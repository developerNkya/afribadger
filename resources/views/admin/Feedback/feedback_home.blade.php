@include('admin.partials.header')
<!-- ========== Left Sidebar Start ========== -->
@include('admin.partials.sidebar')
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Feedback</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Feedback</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @include('admin.Feedback.feedback_table')




    </div>
    <!-- End Page-content -->

    @include('admin.partials.footer')
