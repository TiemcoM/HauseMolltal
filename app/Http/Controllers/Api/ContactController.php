<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function get()
    {
        return Contact::all();
    }

    public function delete(Request $request): string
    {
        if (!Contact::find($request['id'])) {
            return response('contact not found', 404);
        } else {
            Contact::find($request['id'])->delete();
            return 'contact deleted';
        }
    }
}
