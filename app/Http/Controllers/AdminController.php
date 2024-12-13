<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Contact;
use App\Models\Deal;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $submit = $request['submit'];
        if ($submit == 'submit') {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            if (Auth::attempt($request->only('email', 'password'))) {
                return redirect('/home');
            } else {
                return redirect('/login')->withErrors("Incorrect Username or Passowrd");
            }
        }
        return view('login');
    }

    public function dashboard()
    {
        $data['leads'] = Lead::count();
        $data['accounts'] = Account::count();
        $data['contacts'] = Contact::count();
        $data['deals'] = Deal::count();

        return view('dashboad')->with($data);
    }


    public function logout()

    {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }





    // ------------------Leads---------------------------//
    public function add_lead(Request $request)
    {
        $submit = $request['submit'];
        if ($submit == 'submit') {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'title' => 'required',
                'company' => 'required',
                'email' => 'required',
                'phone' => 'required|min:10'

            ]);

            $lead = new Lead();
            $lead->first_name = $request['first_name'];
            $lead->last_name = $request['last_name'];
            $lead->title = $request['title'];
            $lead->company = $request['company'];
            $lead->email = $request['email'];
            $lead->phone = $request['phone'];
            $lead->lead_status = $request['lead_status'];
            $lead->lead_source = $request['lead_source'];
            $lead->street = $request['street'];
            $lead->city = $request['city'];
            $lead->state = $request['state'];
            $lead->country = $request['country'];
            $lead->description = $request['descripton'];
            $lead->save();

            return redirect('leads/manage-leads');
        }
        return view('leads/add_lead');
    }

    public function manage_leads()
    {
        $data['leads'] = Lead::all();
        return view('leads/manage_leads')->with($data);
    }

    public function delete_lead($id)
    {
        $lead = Lead::find($id);
        if ($lead == "") {
            return redirect('/leads/manage-leads');
        } else {
            $lead->delete();
            return redirect('/leads/manage-leads');
        }
    }

    public function edit_lead($id, Request $request)
    {
        $lead = Lead::find($id);
        if ($lead == "") {
            return redirect('/leads/manage-leads');
        } else {
            $submit = $request['submit'];
            if ($submit == 'submit') {
                $request->validate([
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'title' => 'required',
                    'company' => 'required',
                    'email' => 'required',
                    'phone' => 'required|min:10'

                ]);

                $lead->first_name = $request['first_name'];
                $lead->last_name = $request['last_name'];
                $lead->title = $request['title'];
                $lead->company = $request['company'];
                $lead->email = $request['email'];
                $lead->phone = $request['phone'];
                $lead->lead_status = $request['lead_status'];
                $lead->lead_source = $request['lead_source'];
                $lead->street = $request['street'];
                $lead->city = $request['city'];
                $lead->state = $request['state'];
                $lead->zip_code = $request['zip_code'];
                $lead->country = $request['country'];
                $lead->description = $request['description'];
                $lead->save();

                return redirect('leads/manage-leads');
            }
            $data['lead_detail'] = $lead;
            return view('leads/edit_lead')->with($data);
        }
    }

    public function view_lead($id, Request $request)
    {
        $lead = Lead::find($id);
        if ($lead == "") {
            return redirect('/leads/manage-leads');
        }
        $data['lead_detail'] = $lead;
        return view('leads/view_lead')->with($data);
    }
    public function convert_lead($id, Request $request)
    {
        $lead = Lead::find($id);
        if ($lead == "") {
            return redirect('/leads/manage-leads');
        }

        $submit = $request['submit'];
        if ($submit == "submit") {
            $request->validate([
                'deal_name' => 'required',
                'closing_date' => 'required',
                'deal_stage' => 'required'
            ]);
            // create account
            $account = new Account();
            $account->account_name = $lead->company;
            $account->phone = $lead->phone;
            $account->save();

            $account_id = $account->id;

            // create contact
            $contact = new Contact();
            $contact->contact_name = $lead->first_name . '' . $lead->last_name;
            $contact->account_id = $account_id;
            $contact->email = $lead->email;
            $contact->phone = $lead->phone;
            $contact->save();

            $contact_id = $contact->id;

            //create deal
            $deal = new Deal();
            $deal->amount = $request['amount'];
            $deal->deal_name = $request['deal_name'];
            $deal->closing_date = $request['closing_date'];
            $deal->deal_stage = $request['deal_stage'];
            $deal->account_id = $account_id;
            $deal->contact_id = $contact_id;
            $deal->save();

            //delete old lead
            $lead->delete();

            return redirect('/deals/manage-deals');
        }


        $data['lead_detail'] = $lead;
        return view('leads/convert_lead')->with($data);
    }


    // ------------------Accounts---------------------------//
    public function manage_accounts()
    {
        $data['accounts'] = Account::all();
        return view('accounts/manage_accounts')->with($data);
    }

    public function add_account(Request $request)
    {

        $submit = $request['submit'];
        if ($submit == 'submit') {
            $request->validate([
                'account_name' => 'required',
                'phone' => 'required'
            ]);
            $account = new Account();
            $account->account_name = $request['account_name'];
            $account->phone = $request['phone'];
            $account->website = $request['website'];
            $account->save();

            return redirect('/accounts/manage-accounts');
        }
        return view('accounts/add_account');
    }

    public function edit_account($id, Request $request)
    {
        $account = Account::find($id);
        if ($account == "") {
            return redirect('/accounts/manage-accounts');
        } else {
            $submit = $request['submit'];
            if ($submit == 'submit') {
                $request->validate([
                    'account_name' => 'required',
                    'phone' => 'required'
                ]);
                $account = new Account();
                $account->account_name = $request['account_name'];
                $account->phone = $request['phone'];
                $account->website = $request['website'];
                $account->save();

                return redirect('/accounts/manage-accounts');
            }
            $data['account_detail'] = $account;
            return view('accounts/edit_account')->with($data);
        }
    }

    // public function edit_account($id = 0)
    // {
    //     $data['account_detail'] = Account::find($id);
    //     if ($data['account_detail'] == "") {

    //         return redirect('/accounts/manage-accounts');
    //     }
    //     return view('accounts/edit_account')->with($data);
    // }


    public function delete_account($id)
    {
        $account = Account::find($id);
        if ($account == "") {
            return redirect('/accounts/manage-accounts');
        } else {
            $account->delete();
            return redirect('/accounts/manage-accounts');
        }
    }



    // ------------------Contacts---------------------------//
    public function manage_contacts()
    {
        $data['contacts'] = Contact::with('getAccountDetail')->get();
        return view('contacts/manage_contacts')->with($data);
    }

    public function add_contact(Request $request)
    {

        $submit = $request['submit'];
        if ($submit == 'submit') {
            $request->validate([
                'contact_name' => 'required',
                'account_id' => 'required',
                'phone' => 'required'

            ]);
            $contact = new Contact();
            $contact->contact_name = $request['contact_name'];
            $contact->account_id = $request['account_id'];
            $contact->phone = $request['phone'];
            $contact->email = $request['email'];
            $contact->save();

            return redirect('/contacts/manage-contacts');
        }
        $data['account_list'] = Account::all();
        return view('contacts/add_contact')->with($data);
    }

    public function edit_contact($id, Request $request)
    {
        $contact = Contact::find($id);
        if ($contact == "") {
            return redirect('/contacts/manage-contacts');
        } else {
            $submit = $request['submit'];
            if ($submit == 'submit') {
                $request->validate([
                    'contact_name' => 'required',
                    'account_id' => 'required',
                    'phone' => 'required'
                ]);
                $contact = new Contact();
                $contact->contact_name = $request['contact_name'];
                $contact->account_id = $request['account_id'];
                $contact->phone = $request['phone'];
                $contact->email = $request['email'];
                $contact->save();

                return redirect('/contacts/manage-contacts');
            }
            $data['contact_detail'] = Contact::find($id);
            if ($data['contact_detail'] == "") {
                return redirect('contacts/manage-contacts');
            }
            $data['account_list'] = Account::all();
            return view('contacts/edit_contact')->with($data);
        }
    }

    public function delete_contact($id)
    {
        $contact = Contact::find($id);
        if ($contact == "") {
            return redirect('/contact/manage-contacts');
        } else {
            $contact->delete();
            return redirect('/contacts/manage-contacts');
        }
    }


    // ------------------Deals---------------------------//
    public function manage_deals()
    {
        $data['deals'] = Deal::with('get_account_detail')->with('get_contact_detail')->get();
        return view('deals/manage_deals')->with($data);
    }

    public function add_deal(Request $request)
    {
        // return $request->all();
        $data['accounts'] = Account::all();
        $data['contacts'] = Contact::all();

        $submit = $request['submit'];
        if ($submit == 'submit') {
            $request->validate([
                'deal_name' => 'required',
                'closing_date' => 'required',
                'deal_stage' => 'required',
                'account_id' => 'required',
                'contact_id' => 'required'
            ]);
            $deal = new Deal();
            $deal->amount = $request['amount'];
            $deal->deal_name = $request['deal_name'];
            $deal->closing_date = $request['closing_date'];
            $deal->deal_stage = $request['deal_stage'];
            $deal->account_id = $request['account_id'];
            $deal->contact_id = $request['contact_id'];
            $deal->save();
            return redirect('/deals/manage-deals');
        }

        return view('deals/add_deal')->with($data);
    }

    public function delete_deal($id)
    {
        $deal = Deal::find($id);
        if ($deal == "") {
            return redirect('/deals/manage-deals');
        } else {
            $deal->delete();
            return redirect('/deals/manage-deals');
        }
    }



    public function edit_deal($id, Request $request)
    {
        $deal = Deal::find($id);
        if ($deal == "") {
            return redirect('/deals/manage-deals');
        }
        $submit = $request['submit'];
        if ($submit == 'submit') {
            $request->validate([
                'deal_name' => 'required',
                'closing_date' => 'required',
                'deal_stage' => 'required',
                'account_id' => 'required',
                'contact_id' => 'required'
            ]);

            $deal->amount = $request['amount'];
            $deal->deal_name = $request['deal_name'];
            $deal->closing_date = $request['closing_date'];
            $deal->deal_stage = $request['deal_stage'];
            $deal->account_id = $request['account_id'];
            $deal->contact_id = $request['contact_id'];
            $deal->save();
            return redirect('/deals/manage-deals');
        }
        $data['deal_detail'] = $deal;
        $data['accounts'] = Account::all();
        $data['contacts'] = Contact::all();
        return view('deals/edit_deal')->with($data);
    }
}
