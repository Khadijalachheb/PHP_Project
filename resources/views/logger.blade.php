
@extends('layout')
@section('content')
@if(session_start())

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top"> 
  <div class="phone">
    <a class="navbar-brand" href="/home"><i class='fas fa-home' style='font-size:24px'></i>Home</a>
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
        <li class="nav-item">
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
        <li class="nav-item  active">
          
          <a class="nav-link" href="/home"><i class='fas fa-home' style='font-size:24px'></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/graphs_conn"><i class='fas fa-chart-line' style='font-size:24px'></i> Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/graphs_bande"><i class='fas fa-chart-area' style='font-size:24px'></i> Bande passante</a>
        </li>
        @if($_SESSION['role']=="Admin_Wilaya") 
        <li class="nav-item">
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
  <div class="container text-center PCTable">
       
    <table class="table table-dark table-striped " style="width:100%;">
     <tr class="myth" >
         <th>date</th>
         <th>connection status</th>
         <th>the last date that connection was lost</th>
         <th>the last update of IP</th>
         <th>the last update of token</th>
     </tr>
     
     @foreach ($logs as $log)
         <tr class="mytr">
           <td> {{ $log->date  }}</td>
           <td> {{ $log->connection_status }}</td>
           <td> {{ $log->date_last_disconnection  }}</td>
           <td> {{ $log->date_last_update_IP  }}</td>
           <td> {{ $log->date_last_update_token  }}</td>
         </tr>
     @endforeach
    </table>
    
  </div>

  <div  class="container text-center phoneTable">
    
<table class="table table-dark table-striped " style="width:100%;">
  <h4>Conection statut:</h4>
 <tr class="myth" >
     <th>date</th>
     <th>CS</th>
     <th>LCD</th>
     
 </tr>
 
 @foreach ($logs as $log)
     <tr class="mytr">
       <td> {{ $log->date  }}</td>
       <td> {{ $log->connection_status }}</td>
       <td> {{ $log->date_last_disconnection  }}</td>
      
     </tr>
 @endforeach
</table>
<table class="table table-dark table-striped " style="width:100%;">
<h4>Update:</h4>

 <tr class="myth" >
     <th>date</th>
     <th>LUIP</th>
     <th>LUT</th>
 </tr>
 
 @foreach ($logs as $log)
     <tr class="mytr">
       <td> {{ $log->date  }}</td>
      
       <td> {{ $log->date_last_update_IP  }}</td>
       <td> {{ $log->date_last_update_token  }}</td>
     </tr>
 @endforeach
</table>

</div>
@endif
@endsection
