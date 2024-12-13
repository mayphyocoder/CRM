@extends('main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Manage Leads</h1>
            <ol class="breadcrumb">
                <li><a href="#">Leads</a></li>
                <li><i class="fa fa-angle-right"></i> Manage Leads</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black">All Leads</h4>
                    <p>Export data to Copy, CSV, Excel, PDF &amp; Print</p>
                    <div class="table-responsive">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table export_table table-bordered table-hover dataTable"
                                        data-name="cool-table" role="grid" aria-describedby="example2_info">

                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Lead Name</th>
                                                <th scope="col">Company</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Lead Source</th>
                                                <th scope="col">Admin </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($leads as $lead)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a href="{{ route('view-lead', $lead->id) }}">{{ $lead->first_name }}
                                                            {{ $lead->last_name }}</a>
                                                    </td>
                                                    <td>{{ $lead->company }}</td>
                                                    <td>{{ $lead->email }}</td>
                                                    <td>{{ $lead->phone }}</td>
                                                    <td>{{ $lead->lead_source }}</td>
                                                    <td>


                                                        <form action="{{ route('delete-lead', $lead->id) }}" method="post">

                                                            @csrf
                                                            <a href="{{ route('edit-lead', $lead->id) }}"
                                                                class="btn btn-primary btn-sm">
                                                                <span class="fa fa-edit"></span>
                                                            </a>
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                onclick="return confirm('Are you sure delete this lead.')">
                                                                <span class="fa fa-trash">

                                                                </span>

                                                            </button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.content -->
    </div>
@endsection
