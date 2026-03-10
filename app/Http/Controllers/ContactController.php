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

    
    public function create(Request $request){
        // return $request->input();

        $contact = new Contact();
        $contact->user_name = $request->input('user_name');
        $contact->user_email = $request->input('user_email');
        $contact->user_desc = $request->input('user_desc');
        if($contact->save()){
            return ["success" => "contact saved successfully"];
        }
        else{
            return ["error" => "something wrong"];
        }
    }

    public function update(Request $request,$id ){
        $contact =Contact::find($id);

        if(!$contact){
            return response()->json(["message"=>"contact not found"],404);
        }

        $contact->update([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_desc' => $request->user_desc
        ]);

        return response()->json(["message"=>"contact updated successfully"]);
    }
}
