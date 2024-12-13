@extends('main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>CRM Dashboard</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><i class="fa fa-angle-right"></i> CRM Dashboard</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">

            <!-- /.row -->

            <div class="row">
                <div class="col-lg-3">
                    <div class="tile-progress tile-pink">
                        <div class="tile-header">
                            <h5>Leads</h5>
                            <h3>
                                {{ $leads }}
                            </h3>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="tile-progress tile-red">
                        <div class="tile-header">
                            <h5>Accounts</h5>
                            <h3>{{ $accounts }}</h3>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="tile-progress tile-cyan">
                        <div class="tile-header">
                            <h5>Contacts </h5>
                            <h3> {{ $contacts }}</h3>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="tile-progress tile-aqua">
                        <div class="tile-header">
                            <h5>No of Deals</h5>
                            <h3>{{ $deals }}</h3>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.row -->



        </div>

    </div>
@endsection
