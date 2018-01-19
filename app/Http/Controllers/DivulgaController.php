<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Service;
use App\Developer;
use App\About;
class DivulgaController extends Controller
{
	public function index(){
		return view('divulga', array('service' => Service::all(),'developers'=>Developer::all(),'about'=>About::all()));
	}
	public function enviar(Request $request, Contact $contact){
		$contact = Contact::create($request->all());
		if($contact){
			return redirect('/#form-contato')->with('status', 'Sua mensagem foi armazenada com sucesso!');   
		}
	} 
}
