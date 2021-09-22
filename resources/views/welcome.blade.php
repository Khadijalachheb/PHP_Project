@extends('layout')
@section('content')


<div class="container   text-center">
  <div class="col-sm-12 col-lg-4 col-md-4 col-12 main-section"> 
    <div class="modal-content welcome">
      <div class="form-input">
<form method="POST" action="{{route('admins.store')}}" class="needs-validation" novalidate>
       @csrf
       <i class="fas fa-at icons"></i>
  <div class="form-group  ">
      
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <i class="material-icons icons">vpn_key</i>
  
    <div class="form-group  ">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <button type="submit" class="btn btn-success">Login</button>
  
    
  </form>
      
    </div>
    <div class="linkL ">
      <p >Don't have an account?<a href="/Register"> Sign up</a></p>
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