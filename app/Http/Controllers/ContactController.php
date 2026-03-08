<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return response()->json([
            'status' => true,
            'data' => $contacts
        ]);
    }
}
