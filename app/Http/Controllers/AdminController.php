<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Email;
use App\AAL;
use App\Log;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
    
       
      $emails=DB::table('emails')->get();
      $emailInput=$request->input('email');
      $active=false;

       foreach($emails as $email){
       
           if($email->email==$emailInput){
            $active=true;
            
           break;
           }}

         if($active==true){
           $email=Email::where('email','like',$emailInput)->first(); 
           $admin=new Admin();  
           $admin->name=$request->input('name');
           $admin->password=$request->input('pswd');
           $aal=AAl::where('id',$email->aal_id)->first();
           $aal_name=$aal->name;
           if($aal_name=="Wilaya Souss Massa"){
             $label="Admin_Wilaya";
           }
           else{
            $label="Admin_AAL";
           }
           $role=Role::where('label',$label)->first();
           $admin->role()->associate($role);
           $admin->email()->associate($email)->save();
          return redirect('/');
        }
        else{
          return redirect('/register_error');
        }
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    session_start();
       /*
       $admins=DB::table('admins')->get();
        $username=$request->input('uname');
        $password=$request->input('pswd');
        $active=false;
 
        foreach($admins as $admin){
        
            if($admin->name==$username){
             $active=true;
             
            break;
            }}

if($active==true){
    $admin=Admin::where('name',$username)->where('password',$password)->get();
  return redirect('/home');
} */

  $emails=DB::table('emails')->get();
  $emailInput=$request->input('email');
  $active=false;

  foreach($emails as $email){
  
      if($email->email==$emailInput){
       $active=true;
       
      break;
      }}

    if($active==true){
      $email=Email::where('email','like',$emailInput)->first(); 
     $password=$request->input('pswd');
     $admins=DB::table('admins')->get();
     $aal_id=$email->aal_id;
    
   $act=false;
     foreach($admins as $admin){
     
         if($admin->email_id==$email->id && $admin->password==$password){
     $admin=Admin::where('email_id',$email->id)->where('password',$password)->first();  
          $act=true;
          $role=Role::where('id',$admin->role_id)->first();
          $name=$admin->name;
         break;



         }}

     if($act==true){




  $_SESSION['name']=$name;
      $_SESSION['role']=$role->label;
      $_SESSION['aalId']=$aal_id;
     return redirect('/home/'.$aal_id);
     }
     else{
  
   return redirect('/login_error');
     }
   }
   else{
    
    return redirect('/login_error');
   }
    

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
