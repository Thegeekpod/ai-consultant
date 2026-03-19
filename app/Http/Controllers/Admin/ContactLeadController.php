<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContactLead;

class ContactLeadController extends Controller
{
    public function index()
    {
        $leads = ContactLead::latest()->paginate(20);
        return view('admin.contact-leads.index', compact('leads'));
    }

    public function destroy(ContactLead $contactLead)
    {
        $contactLead->delete();
        return redirect()->back()->with('success', 'Lead deleted successfully');
    }
}
