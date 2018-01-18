<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class DivulgaController extends Controller
{
	public function index(){
		return view('divulga');
	}
	public function enviar(Request $request, Contact $contact){
		$contact = Contact::create($request->all());
		if($contact){
			return redirect('/#form-contato')->with('status', 'Sua mensagem foi armazenada com sucesso!');   
		}
	} 
}
