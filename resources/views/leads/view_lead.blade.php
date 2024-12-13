@extends('main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>View Leads</h1>
            <ol class="breadcrumb">
                <li><a href="#">Leads</a></li>
                <li><i class="fa fa-angle-right"></i> View Leads</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-body">

                    <form action="{{ url('/leads/onvert-lead/', $lead_detail->id) }}" method="POST">
                        @csrf
                        <h4 class="text-black m-b-3">Lead Information</h4>
                        <div class="row">
                            <div class="col-lg-5 offset-lg-1">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td class="text-right">First Name</td>
                                            <td class="text-dark">{{ $lead_detail->first_name }} </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Title</td>
                                            <td class="text-dark"> {{ $lead_detail->title }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Email Address</td>
                                            <td class="text-dark"> {{ $lead_detail->email }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Lead Status</td>
                                            <td class="text-dark"> {{ $lead_detail->lead_status }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div class="col-lg-5 ">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td class="text-right">Last Name</td>
                                            <td class="text-dark">{{ $lead_detail->last_name }} </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Company</td>
                                            <td class="text-dark">{{ $lead_detail->company }} </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Phone</td>
                                            <td class="text-dark"> {{ $lead_detail->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Lead Sources</td>
                                            <td class="text-dark"> {{ $lead_detail->lead_source }}</td>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                        <h4 class="text-black m-b-3">Address Information</h4>
                        <div class="row">
                            <div class="col-lg-5 offset-lg-1">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <td class="text-right">Street </td>
                                            <td class="text-dark">{{ $lead_detail->street }} </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">State</td>
                                            <td class="text-dark"> {{ $lead_detail->state }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Country </td>
                                            <td class="text-dark"> {{ $lead_detail->country }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-lg-4 ">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <td class="text-right">City Name </td>
                                            <td class="text-dark">{{ $lead_detail->city }} </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Zip Code</td>
                                            <td class="text-dark">{{ $lead_detail->zip_code }} </td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <h4 class="text-black m-b-3">Description Information</h4>
                        <div class="row">
                            <div class="col-lg-12 offset-lg-1 ">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <td class="text-right">Description </td>
                                            <td class="text-dark">{{ $lead_detail->description }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <a href="{{ route('convert-lead', $lead_detail->id) }}" class="btn btn-primary btn-sm">
                            Convert</a>
                        <a href="{{ route('edit-lead', $lead_detail->id) }}" class="btn btn-primary btn-sm">
                            Edit</a>
                    </form>
                </div>
            </div>
        </div>

        <!-- /.content -->
    </div>
@endsection
