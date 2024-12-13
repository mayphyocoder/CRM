@extends('main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Manage Contacts</h1>
            <ol class="breadcrumb">
                <li><a href="#">Contact</a></li>
                <li><i class="fa fa-angle-right"></i> Manage Contacts</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black">All Contacts</h4>
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
                                                <th scope="col">Contact Name</th>
                                                <th scope="col">Account Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $contact)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>

                                                    <td>{{ $contact->contact_name }}</td>
                                                    <td>{{ $contact->getAccountDetail->account_name }}</td>
                                                    <td>{{ $contact->email }}</td>
                                                    <td>{{ $contact->phone }}</td>
                                                    <td>


                                                        <form action="{{ route('delete-contact', $contact->id) }}"
                                                            method="post">

                                                            @csrf
                                                            <a href="{{ route('edit-contact', $contact->id) }}"
                                                                class="btn btn-primary btn-sm">
                                                                <span class="fa fa-edit"></span>
                                                            </a>
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                onclick="return confirm('Are you sure delete this contact.')">
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
