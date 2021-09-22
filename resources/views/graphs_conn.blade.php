@extends('layout')
@section('content')
@if(session_start())
<nav class="navbar navbar-expand-sm bg-dark navbar-dark"> 
  <div class="phone">
    <a class="navbar-brand" href="/home/{{$_SESSION['aalId']}}"><i class='fas fa-home' style='font-size:24px'></i>Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item active">
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
      <li class="nav-item  ">
        
        <a class="nav-link" href="/home/{{$_SESSION['aalId']}}"><i class='fas fa-home' style='font-size:24px'></i> Home</a>
      </li>
      <li class="nav-item active">
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

<div style="margin-top:50px;text-align:center;" class="container">
  @if($_SESSION['role']=="Admin_Wilaya")
  <h3>annexe administrative locale 1</h3>
  <div class="chart" style="">
  <canvas id="lineChart"></canvas>
  </div>
  <h3 style="margin-top:-220px;">annexe administrative locale 2</h3>
<div class="chart"  style="">
 <canvas  id="lineChart2"></canvas>
  </div>
  @endif
  @if($_SESSION['role']=="Admin_AAL")
 
  <div class="chart chartAAL" style="">
    <canvas id="lineChart"></canvas>
    </div>
  @endif
</div>
  <script>
    //line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["27/06", "28/06", "29/06", "30/06", "1/06", "2/06", "3/06"],
datasets: [
{
label: "connection statut",
data: [1, 1, 1, 0, 1, 1, 1],
backgroundColor: [
'rgba(0, 137, 132, .2)',
],
borderColor: [
'rgba(0, 10, 130, .7)',
],
borderWidth: 2
}
]
},
options: {
responsive: true
}
});

var ctxL = document.getElementById("lineChart2").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["27/06", "28/06", "29/06", "30/06", "1/06", "2/06", "3/06"],
datasets: [
{
label: "connection statut",
data: [1, 1, 1, 1, 1, 0, 1],
backgroundColor: [
'rgba(0, 137, 132, .2)',
],
borderColor: [
'rgba(0, 10, 130, .7)',
],
borderWidth: 2
}
]
},
options: {
responsive: true
}
});
</script>
  @endsection
  @endif