@extends('main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Manage Accounts</h1>
            <ol class="breadcrumb">
                <li><a href="#">Account</a></li>
                <li><i class="fa fa-angle-right"></i> Manage Accounts</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black">All Accounts</h4>
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
                                                <th scope="col">Account Name</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Website</th>
                                                <th scope="col">Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($accounts as $account)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>

                                                    <td>{{ $account->account_name }}</td>
                                                    <td>{{ $account->phone }}</td>
                                                    <td>{{ $account->website }}</td>
                                                    <td>


                                                        <form action="{{ route('delete-account', $account->id) }}"
                                                            method="post">

                                                            @csrf
                                                            <a href="{{ route('edit-account', $account->id) }}"
                                                                class="btn btn-primary btn-sm">
                                                                <span class="fa fa-edit"></span>
                                                            </a>
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                onclick="return confirm('Are you sure delete this account.')">
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
