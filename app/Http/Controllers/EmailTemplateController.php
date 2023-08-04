<?php

namespace App\Http\Controllers;

use App\Models\EmailTemplate;
use Illuminate\Http\Request;

class EmailTemplateController extends Controller
{
    public function index(Request $request)
    {
        $data = EmailTemplate::latest()->get();
        return view('emailtemplate.index',compact('data'));
    }

    public function create()
    {
        return view('emailtemplate.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);

        EmailTemplate::create($request->all());

        return redirect()->route('emailtemplates.index')->with('success', 'EmailTemplate created successfully.');
    }

    public function show(EmailTemplate $emailtemplate)
    {
        abort(404);
    }

    public function edit(EmailTemplate $emailtemplate)
    {
        return view('emailtemplate.edit', compact('emailtemplate'));
    }

    public function update(Request $request, EmailTemplate $emailtemplate)
    {
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);

        $emailtemplate->update($request->all());

        return redirect()->route('emailtemplates.index')->with('success', 'EmailTemplate updated successfully.');
    }

    public function destroy(EmailTemplate $emailtemplate)
    {
        $emailtemplate->delete();

        return redirect()->route('emailtemplates.index')->with('success', 'EmailTemplate deleted successfully.');
    }
}
