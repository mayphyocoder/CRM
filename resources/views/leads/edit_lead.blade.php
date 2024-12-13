@extends('main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Edit Lead</h1>
            <ol class="breadcrumb">
                <li><a href="#">Leads</a></li>
                <li><i class="fa fa-angle-right"></i> Edit Lead</li>
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
                                <form action="{{ route('edit-lead', $lead_detail->id) }}" method="POST">
                                    @csrf
                                    <div class="row m-t-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstName ">First Name:
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="first_name"
                                                    value="{{ $lead_detail->first_name }}">
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
                                                    value="{{ $lead_detail->last_name }}">
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
                                                    value="{{ $lead_detail->title }}">
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
                                                    value="{{ $lead_detail->company }}">
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
                                                    value="{{ $lead_detail->email }}">
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
                                                    value="{{ $lead_detail->phone }}">
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
                                                        @if ($lead_status == $lead_detail->lead_status)
                                                            <option value="{{ $lead_status }}" selected>
                                                                {{ $lead_status }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $lead_status }}">{{ $lead_status }}
                                                            </option>
                                                        @endif
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
                                                            @if ($lead_source == $lead_detail->lead_source)
                                                                <option value="{{ $lead_source }}" selected>
                                                                    {{ $lead_source }}
                                                                </option>
                                                            @else
                                                                <option value="{{ $lead_source }}">{{ $lead_source }}
                                                                </option>
                                                            @endif
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
                                            <input class="form-control" type="text" name="street"
                                                value="{{ $lead_detail->street }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">City:</label>
                                            <input class="form-control" type="text" name="city"
                                                value="{{ $lead_detail->city }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="state">State :</label>
                                            <input class="form-control" type="text" name="state"
                                                value="{{ $lead_detail->state }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="zipCode">Zip Code:</label>
                                            <input class="form-control" type="text" name="zip_code"
                                                value="{{ $lead_detail->zip_code }}">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Country :</label>
                                            <input class="form-control" type="text" name="country"
                                                value="{{ $lead_detail->country }}">
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
                                            <textarea class="form-control" id="placeTextarea" placeholder="Description" name="description"
                                                value="{{ $lead_detail->description }}">

                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit" name="submit" value="submit">Update </button>
                    <button class="btn btn-light btn-sm" type="text">Cancel</button>

                    </form>
                </div>
            </div>
            <!-- Main row -->
        </div>
        <!-- /.content -->
    </div>
@endsection
