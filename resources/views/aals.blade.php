
@extends('layout')
@section('content')
@if(session_start())

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top"> 
  <div class="phone">
    <a class="navbar-brand" href="/home/{{$_SESSION['aalId']}}"><i class='fas fa-home' style='font-size:24px'></i>Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/graphs_conn"><i class='fas fa-chart-line' style='font-size:24px'></i>Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/graphs_bande"><i class='fas fa-chart-area' style='font-size:24px'></i>Bande passante</a>
        </li>
        @if($_SESSION['role']=="Admin_Wilaya") 
        <li class="nav-item active">
          <a class="nav-link" href="/configuration_aals">
            <i class='fas fa-cogs' style='font-size:24px'></i>aals configuration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/configuration_admins">
            <i class='fas fa-user-cog' style='font-size:24px'></i>admins configuration</a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
          </li>   
      </ul>
    </div>  
    </div>
      <ul class="navbar-nav PC">
        <li class="nav-item  ">
          
          <a class="nav-link" href="/home/{{$_SESSION['aalId']}}"><i class='fas fa-home' style='font-size:24px'></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/graphs_conn"><i class='fas fa-chart-line' style='font-size:24px'></i> Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/graphs_bande"><i class='fas fa-chart-area' style='font-size:24px'></i> Bande passante</a>
        </li>
        @if($_SESSION['role']=="Admin_Wilaya") 
        <li class="nav-item active">
          <a class="nav-link" href="/configuration_aals"><i class='fas fa-cogs' style='font-size:24px'></i>
            AALs configuration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/configuration_admins"><i class='fas fa-user-cog' style='font-size:24px'></i>
           Admin configuration</a>
        </li>
        @endif
        <li class="nav-item dropdown right">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            {{ $_SESSION['name'] }}
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>
           </div>
        </li>
      </ul>
    
    </nav>
@endif 
<div class="container  col-md-3 mylist"> 
<ul class="list-group " style="position:fixed;left:0px;top:200px;">
  <li id="l1" onclick="color();"  class="list-group-item myl"><i style="font-size:25px;color:white;margin-left:-15px;" class="material-icons">create</i><a href="#ajouter" class="myli" >create</a></li>
  <li id="l2" onclick="color2();"  class="list-group-item myl"><i style="font-size:25px;color:white;margin-left:-15px;" class="material-icons">update</i><a href="#modifier" class="myli">update</a></li>
  <li id="l3" onclick="color3();"  class="list-group-item myl"><i style="font-size:25px;color:white;margin-left:-15px;" class="material-icons">delete</i><a href="#supprimer" class="myli">delete</a></li>
</ul>
</div>
<div class="container  text-center">
  
  <div class="col-sm-9 col-lg-7  main-section">
    
    <div class="modal-content">
  <h2 style="margin-bottom:50px;color:white;" id="ajouter">create a new AAL:</h2> 
      <div class="form-input">
<form action="{{ route('aals.create')}}" class="needs-validation" novalidate>
        @csrf
        <i class="fas fa-user icons iconsa"  ></i>  
  <div class="form-group col-md-8 col-sm-12  col-lg-7 ">
            
            <input type="text" class="form-control my_input" id="name" placeholder="Enter full name" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <i class="fas fa-info-circle icons iconsa" ></i>
       <div class="form-group  col-lg-7 col-md-8  col-sm-12  ">
        
         <input type="text" class="form-control my_input" id="type" placeholder="Enter type" name="type" required>
         <div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div>
       </div>
      
      
       <button type="submit" class="btn btn-success col-lg-3 col-md-4 col-sm-5 ">create</button>
     </form>
      </div>
    </div>
  </div>
   </div>

   <div class="container  text-center">
  
    <div  class="col-sm-9 col-lg-7  main-section">
    
      <div class="modal-content">
        <h2 style="margin-bottom:50px;color:white;" id="modifier" >update an AAL:</h2> 
        <div class="form-input">
  <form action="{{ route('aals.create')}}" class="needs-validation" novalidate>
          @csrf
          <!--select-->
          <div class="form-group  col-lg-7 col-md-8  col-sm-12  ">
          <select name="aalname" class="my_input col-lg-12 col-md-13">
           
            @foreach($aals as $aal) 
               <option value="{{$aal->name}}">{{$aal->name}}</option>
            @endforeach  
            
         
           </select></div>
           <i class="fas fa-user icons iconsa "></i>
    <div class="form-group col-md-8 col-sm-12  col-lg-7 ">
              
              <input type="text" class="form-control my_input" id="name" placeholder="Modifier name" name="name" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <i class="fas fa-info-circle icons iconsa" ></i>
         <div class="form-group  col-lg-7 col-md-8  col-sm-12  ">
         
           <input type="text" class="form-control my_input" id="type" placeholder="Modifier type" name="type" required>
           <div class="valid-feedback">Valid.</div>
           <div class="invalid-feedback">Please fill out this field.</div>
         </div>
         <i class="material-icons icons iconsa" >security</i>
         <div class="form-group  col-lg-7 col-md-8  col-sm-12  ">
         <input type="text" class="form-control my_input" id="name" placeholder="Modifier token" name="token" required>
         <div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div>
         </div>
         <button type="submit" class="btn btn-success col-lg-3 col-md-4 col-sm-5 ">update</button>
         </div>
    
        
        
        
       </form>
        </div>
      </div>
    </div>
     </div>

     <div class="container  text-center " style="margin-bottom:50px;">
  
      <div class="col-sm-9 col-lg-7  main-section">
        
        <div class="modal-content">
          <h2 style="margin-bottom:50px;color:white;" id="supprimer">delete an AAL:</h2> 
          <div class="form-input">
    <form action="{{ route('aals.create')}}" class="needs-validation" novalidate>
            @csrf
      <!--select-->
      <div class="form-group  col-lg-7 col-md-8  col-sm-12  ">
      <select name="aalname" class="my_input col-lg-12 col-md-13">
           
        @foreach($aals as $aal) 
           <option value="{{$aal->name}}">{{$aal->name}}</option>
        @endforeach  
        
     
       </select>
      </div>
          
           <button type="submit" class="btn btn-success col-lg-3 col-md-4 col-sm-5 ">delete</button>
         </form>
          </div>
        </div>
      </div>
       </div>
   
   <script>
   // Disable form submissions if there are invalid fields
   (function() {
     'use strict';
     window.addEventListener('load', function() {
       // Get the forms we want to add validation styles to
       var forms = document.getElementsByClassName('needs-validation');
       // Loop over them and prevent submission
       var validation = Array.prototype.filter.call(forms, function(form) {
         form.addEventListener('submit', function(event) {
           if (form.checkValidity() === false) {
             event.preventDefault();
             event.stopPropagation();
           }
           form.classList.add('was-validated');
         }, false);
       });
     }, false);
   })();

  var l1=document.getElementById('l1');
  var l2=document.getElementById('l2');
  var l3=document.getElementById('l3');
 
  function color(){
     l1.style.backgroundColor="green";
     l2.style.backgroundColor="Black";
     l3.style.backgroundColor="black";
  }
  function color2(){
     l2.style.backgroundColor="green";
     l1.style.backgroundColor="Black";
     l3.style.backgroundColor="black";
  }
  function color3(){
     l3.style.backgroundColor="green";
     l2.style.backgroundColor="Black";
     l1.style.backgroundColor="black";
  }
  
   </script>
    
   @endsection