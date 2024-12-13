@extends('main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Edit Contact</h1>
            <ol class="breadcrumb">
                <li><a href="#">Contacts</a></li>
                <li><i class="fa fa-angle-right"></i> Edit Contact</li>
            </ol>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black m-b-3">Edit Contact</h4>
                    <form action="{{ route('edit-contact', $contact_detail->id) }}" method="POST"
                        class="form-horizontal form-bordered">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 offset-lg-1">
                                <table class="table">
                                    <tr>
                                        <td class="text-right">
                                            Contact Name <span class="text-danger">*</span>
                                        </td>
                                        <td>
                                            <fieldset class="form-group">
                                                <input class="form-control" type="text" name="contact_name"
                                                    value="{{ $contact_detail->contact_name }}">
                                                @error('contact_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            Account Name <span class="text-danger">*</span>
                                        </td>
                                        <td>
                                            <fieldset class="form-group">
                                                <select class="form-control" name="account_id">
                                                    <option value="">Select Account</option>
                                                    @foreach ($account_list as $account_single)
                                                        @if ($account_single->id == $contact_detail->account_id)
                                                            <option value="{{ $account_single->id }}" selected>
                                                                {{ $account_single->account_name }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $account_single->id }}">
                                                                {{ $account_single->account_name }}
                                                            </option>
                                                        @endif
                                                    @endforeach

                                                </select>
                                                @error('account_id')
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
                                                    value="{{ $contact_detail->phone }}">
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            Email
                                        </td>
                                        <td>
                                            <fieldset class="form-group">
                                                <input class="form-control" type="text" name="email"
                                                    value="{{ $contact_detail->email }}">

                                            </fieldset>
                                        </td>
                                    </tr>

                                </table>
                            </div>


                        </div>

                        <button class="btn btn-primary btn-sm" type="submit" name="submit" value="submit">Update</button>
                        <a href="{{ route('manage-contacts') }}" class="btn btn-secondary btn-sm ml-2">
                            Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
