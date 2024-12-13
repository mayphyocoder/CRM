@extends('main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Edit Deal</h1>
            <ol class="breadcrumb">
                <li><a href="#">Deals</a></li>
                <li><i class="fa fa-angle-right"></i> Edit Deal</li>
            </ol>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black m-b-3">Edit Deal</h4>
                    <form action="{{ route('edit-deal', $deal_detail->id) }}" method="POST"
                        class="form-horizontal form-bordered">
                        @csrf
                        <div class="row ">
                            <div class="col-lg-6 offset-lg-1">
                                <table class="table">
                                    <tr>
                                        <td class="text-right">
                                            Amount
                                        </td>
                                        <td>
                                            <fieldset class="form-group">
                                                <input class="form-control" type="text" name="amount"
                                                    value="{{ $deal_detail->amount }}">
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            Deal Name <span class="text-danger">*</span>
                                        </td>
                                        <td>
                                            <fieldset class="form-group">
                                                <input class="form-control" type="text" name="deal_name"
                                                    value="{{ $deal_detail->deal_name }}">
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
                                                <input class="form-control" type="date" name="closing_date"
                                                    value="{{ $deal_detail->closing_date }}">
                                                @error('closing_date')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            Deal Stage <span class="text-danger">*</span>
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
                                                    <option>Select Stage</option>
                                                    @foreach ($lead_status as $lead_stage)
                                                        @if ($lead_stage == $deal_detail->deal_stage)
                                                            <option value="{{ $lead_stage }}" selected>{{ $lead_stage }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $lead_stage }}">{{ $lead_stage }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('deal_stage')
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
                                                    <option>Select Stage</option>

                                                    @foreach ($accounts as $account)
                                                        @if ($account->id == $deal_detail->account_id)
                                                            <option value="{{ $account->id }}" selected>
                                                                {{ $account->account_name }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $account->id }}">
                                                                {{ $account->account_name }}
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
                                            Contact Name <span class="text-danger">*</span>
                                        </td>
                                        <td>

                                            <fieldset class="form-group">
                                                {{-- <label for="location1">Lead Status :</label> --}}
                                                <select class="form-control" name="contact_id">
                                                    <option>Select Stage</option>
                                                    @foreach ($contacts as $contact)
                                                        @if ($contact->id == $deal_detail->contact_id)
                                                            <option value="{{ $contact->id }}" selected>
                                                                {{ $contact->contact_name }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $contact->id }}">
                                                                {{ $contact->contact_name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('contact_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </fieldset>
                                        </td>
                                    </tr>
                                </table>
                            </div>


                        </div>
                        <button type="submit" class="btn btn-primary btn-sm" name="submit" value="submit">
                            Update</button>
                        <a href="{{ route('manage-leads') }}" class="btn btn-secondary btn-sm ml-2">
                            Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
