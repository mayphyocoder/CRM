@extends('main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Convert Lead</h1>
            <ol class="breadcrumb">
                <li><a href="#">Leads</a></li>
                <li><i class="fa fa-angle-right"></i> Convert Lead</li>
            </ol>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('manage-leads') }}" method="POST" class="form-horizontal form-bordered">
                        @csrf
                        <div class="row ">
                            <div class="col-lg-12">

                                <h4 class="text-black m-b-3">Convert Lead<span style="font-size:16px;">
                                        ({{ $lead_detail->first_name }} {{ $lead_detail->last_name }} -
                                        {{ $lead_detail->company }})
                                    </span>
                                </h4> <br />
                                <h6>Create new Account<span class="badge badge-primary">
                                        &nbsp;{{ $lead_detail->company }}</span>
                                </h6>
                                <h6>Create new Account<span class="badge badge-primary">
                                        &nbsp;{{ $lead_detail->first_name }}
                                        {{ $lead_detail->last_name }}</span></h6><br />
                                <h6>Create New Deal for this Account</h6>
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-1">
                                            <table class="table">
                                                <tr>
                                                    <td class="text-right">
                                                        Amount
                                                    </td>
                                                    <td>
                                                        <fieldset class="form-group">
                                                            <input class="form-control" type="text" name="amount">
                                                        </fieldset>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right">
                                                        Deal Name <span class="text-danger">*</span>
                                                    </td>
                                                    <td>
                                                        <fieldset class="form-group">
                                                            <input class="form-control" type="text" name="deal_name">
                                                            @error('deal_name')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </fieldset>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right">
                                                        Closing Date <span class="text-danger">*</span>
                                                    </td>
                                                    <td>
                                                        <fieldset class="form-group">
                                                            <input class="form-control" type="date" name="closing_date">
                                                            @error('closing_date')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </fieldset>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right">
                                                        Stage <span class="text-danger">*</span>
                                                    </td>
                                                    <td>
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
                                                        <fieldset class="form-group">
                                                            {{-- <label for="location1">Lead Status :</label> --}}
                                                            <select class="form-control" name="deal_stage">

                                                                @foreach ($lead_status as $lead_status)
                                                                    <option value="{{ $lead_status }}">{{ $lead_status }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('lead_stage')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </fieldset>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>


                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm" name="submit" value="submit">
                                        Convert</button>
                                    <a href="{{ route('manage-leads') }}" class="btn btn-secondary btn-sm ml-2">
                                        Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
