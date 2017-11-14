@extends('layout.admin')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Band Management</h4>
                    <ol class="breadcrumb">
                        <li><a href="{{route('admin.index')}}">Dashboard</a></li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <div class="row row-in">
                            <div class="col-lg-3 col-sm-6">
                                <div class="col-in text-center">
                                    <h5 class="text-danger">Registered User</h5>
                                    <h3 class="counter">5645</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="col-in text-center b-r-none">
                                    <h5 class="text-muted text-warning">Total Song Uploaded</h5>
                                    <h3 class="counter">4250</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="col-in text-center">
                                    <h5 class="text-muted text-purple"></h5>
                                    <h3 class="counter">3450</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="col-in text-center b-0">
                                    <h5 class="text-info">Explorer</h5>
                                    <h3 class="counter">2500</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection