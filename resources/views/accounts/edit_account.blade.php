@extends('main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Edit Account</h1>
            <ol class="breadcrumb">
                <li><a href="#">Accounts</a></li>
                <li><i class="fa fa-angle-right"></i> Edit Account</li>
            </ol>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('edit-account', $account_detail->id) }}" method="POST"
                        class="form-horizontal form-bordered">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 offset-lg-1">
                                <table class="table">
                                    <tr>
                                        <td class="text-right">
                                            Account Name <span class="text-danger">*</span>
                                        </td>
                                        <td>
                                            <fieldset class="form-group">
                                                <input class="form-control" type="text" name="account_name"
                                                    value="{{ $account_detail->account_name }}">
                                                @error('account_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            Phone <span class="text-danger">*</span>
                                        </td>
                                        <td>
                                            <fieldset class="form-group">
                                                <input class="form-control" type="text" name="phone"
                                                    value="{{ $account_detail->phone }}">
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            Website
                                        </td>
                                        <td>
                                            <fieldset class="form-group">
                                                <input class="form-control" type="text" name="webiste"
                                                    value="{{ $account_detail->website }}">

                                            </fieldset>
                                        </td>
                                    </tr>

                                </table>
                            </div>


                        </div>

                        <button class="btn btn-primary btn-sm" type="submit" name="submit" value="submit">Update</button>
                        <a href="{{ route('manage-accounts') }}" class="btn btn-secondary btn-sm ml-2">
                            Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
