@extends('layout')
@section('content')
<div class="container  text-center">
  <div class="col-sm-12 col-12 col-lg-4 col-md-4 main-section"> 
    <div class="modal-content welcome">
      <div class="form-input">
<form action="{{ route('admins.create')}}" class="needs-validation" novalidate>
        @csrf
  <div class="form-group ">
           <i class="fas fa-user icons"></i>
            <input type="name" class="form-control" id="name" placeholder="Enter full name" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
       <div class="form-group ">
         <i class="fas fa-at icons"></i>
         <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
         <div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div>
       </div>
       <div class="form-group ">
        <i class="material-icons icons">vpn_key</i>
         <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
         <div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div>
       </div>
      
       <button type="submit" class="btn btn-success ">Continue</button>
     </form>
   </div>
   <div class="linkL ">
    <p >Already have an account?<a href="\"> Sign in</a></p>
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
   </script>
    
   @endsection