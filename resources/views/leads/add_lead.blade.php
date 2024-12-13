@extends('main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Add Lead</h1>
            <ol class="breadcrumb">
                <li><a href="#">Leads</a></li>
                <li><i class="fa fa-angle-right"></i> Add Lead</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black m-b-3">Lead Information</h4>
                    <div id="row">
                        <div class="col-lg-10 offset-lg-1">

                            <div class="step-tab-panel" id="step1">
                                <form action="{{ route('add-lead') }}" method="POST">
                                    @csrf
                                    <div class="row m-t-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstName ">First Name:
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="first_name"
                                                    value="{{ old('first_name') }}">
                                                @error('first_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastName">Last Name:
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="last_name"
                                                    value="{{ old('last_name') }}">
                                                @error('last_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Title :
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="title"
                                                    value="{{ old('title') }}">
                                                @error('title')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company">Company:
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="company"
                                                    value="{{ old('company') }}">
                                                @error('company')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email Address:
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="email"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone :
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="phone"
                                                    value="{{ old('phone') }}">
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @php
                                                $lead_status = [
                                                    'Qualifications',
                                                    'Need Analysis',
                                                    'Proposal/Price Quote',
                                                    'Negotation',
                                                    'Closed Won',
                                                    'Closed Lost',
                                                ];
                                            @endphp
                                            <div class="form-group">
                                                <label for="location1">Lead Status :</label>

                                                <select class="form-control" name="lead_status">
                                                    @foreach ($lead_status as $lead_status)
                                                        <option value="{{ $lead_status }}">{{ $lead_status }}
                                                        </option>
                                                    @endforeach



                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            @php
                                                $lead_sources = [
                                                    'Advertising',
                                                    'Social Media',
                                                    'Direct Call',
                                                    'Search',
                                                ];
                                            @endphp
                                            <div class="form-group">
                                                <div class="form-group ">
                                                    <label for="location1">Lead Sources :</label>
                                                    <select class="form-control" name="lead_source">
                                                        @foreach ($lead_sources as $lead_source)
                                                            <option value="{{ $lead_source }}">{{ $lead_source }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                            </div>



                        </div>
                    </div>
                    {{-- <hr class="m-t-5 m-b-5"> --}}
                    <h4 class="text-black m-b-3">Address Information</h4>
                    <div id="row">
                        <div class="col-lg-10 offset-lg-1">

                            <div class="step-tab-panel" id="step1">

                                <div class="row m-t-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="street">Street :</label>
                                            <input class="form-control" type="text" name="street">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">City:</label>
                                            <input class="form-control" type="text" name="city">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="state">State :</label>
                                            <input class="form-control" type="text" name="state">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="zipCode">Zip Code:</label>
                                            <input class="form-control" type="text" name="zip_code">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Country :</label>
                                            <input class="form-control" type="text" name="country">
                                        </div>
                                    </div>


                                </div>



                            </div>



                        </div>
                    </div>
                    <hr class="m-t-5 m-b-5">

                    <h4 class="text-black m-b-3">Description Information</h4>
                    <div id="row">
                        <div class="col-lg-10 offset-lg-1">

                            <div class="step-tab-panel" id="step1">

                                <div class="row m-t-2">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            {{-- <label for="firstName1">Description :</label> --}}
                                            <label class="control-label">Description :</label>
                                            <textarea class="form-control" id="placeTextarea" placeholder="Description" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit" name="submit" value="submit">Save</button>
                    <button class="btn btn-light btn-sm" type="text">Cancel</button>

                    </form>
                </div>
            </div>
            <!-- Main row -->
        </div>
        <!-- /.content -->
    </div>
@endsection
