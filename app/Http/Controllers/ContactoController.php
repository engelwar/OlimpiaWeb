<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnvioMail;
use Validator;
use Session;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        
        $rules = [
        'name' => 'required|string|max:255',

        'email' => 'required|string|email|max:255',
        
        'phoneNumber' => 'required|string|max:255',
        
        'message' => 'required',
        
        'g-recaptcha-response' => 'required|captcha'];        
         
        
        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();
    
        }
        else
        {
            $details = [
                'title'=>'CONTACTO VIA PAGINA WEB',
                'name' => $request->name,
                'email'=>$request->email,
                'phone'=>$request->phoneNumber,
                'message'=>$request->message,
            ];
        
            Mail::to('ecommerce@libreriaolimpia.com')
            ->cc([
                'magdy.villarroel@libreriaolimpia.com',
                'rodrigo.duran@libreriaolimpia.com',
                'victor.sullca@libreriaolimpia.com'])
            ->send(new \App\Mail\EnvioMail($details)); 
            return back();
        }
        //$mail = Mail::to('victor.sullca@libreriaolimpia.com');
        //return dd($mail);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
