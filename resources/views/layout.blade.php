<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion de connexion</title>
        
       
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Styles -->
   
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">

     <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  <link href="{{ mix('/css/theme.css') }}" rel="stylesheet">

    <style>
     
    body{
        margin: 0%;
    }
    
        .main-section{
            margin:0 auto;
            margin-top:50px;
            padding:0;
        }
        .modal-content{
            background-color: #434e5a;
            opacity:0.8;
            margin-top:100px;
            padding:30px 40px;
            padding-top:50px;
            padding-bottom: 50px;
            border-radius:20px;
        /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
           */
           box-shadow:10px 10px 5px rgb(8, 8, 8); 
        }
        .welcome{
            padding-top:100px;
            padding-bottom: 100px;
        }
        .erreur{
            position: absolute;
           color:rgb(241, 105, 105);
           font-size:20px;
           top:30px;
           left:10px;
           

        }
        .form-group{
            margin-bottom: 25px;
        
        }
        .form-group input{
            height: 42px;
            border-radius: 5px;
            border:0;
            font-size: 18px;
            letter-spacing: 2px;
           padding-left:54px;
          
           
           
        }
     
        .form-group select{
            height: 42px;
            border-radius: 5px;
            border:0;
            font-size: 18px;
            letter-spacing: 2px;
          
        }
       .icons{
          
           position: absolute;
           font-size: 30px;
           left:45px;
           padding-top:7px;
           color:#555e60; 
           z-index: 1;


       }

    
       .form-input button{
           width:60%;
           margin:5px 0 25px;
       }
       .btn-success{
           background-color: #1c6288;
           font-size: 19px;
           padding:7px 14px;
           border-radius: 5px;
           border:1px solid #daf1ff; 
           
       }
       .btn-success:hover{
           background-color: #13445e;
           border:1px solid #daf1ff;
       }
       .linkL{
           padding:5px 0 25px;
           color:#daf1ff;
       } 
       .linkL a{
           color:#8ad2fc;
       }

    
    .right{
       position: absolute;
       right:20px;
    }
    .navbar{
        font-size:20px;
       
    }
  
     .my_input{
         margin-left:100px;
     }
      .my_icons{
         position: absolute;
         color:black;
         top:400px;
         left:0;
      }
      .phone{
        display:none;
      }
      .phoneTable{
        display:none;
      }
      
      .aal:first-of-type{
        left:12.1%;
       
      }
      .aal2{
        margin-left:-40px;
        position: absolute;
       
      }
      .aal{
         list-style: none;
         line-height:60px;
         position: relative;
        left:15%;    
         top:100px;
      }
      .myl{
        background-color: black;
        padding:20px 30px;
      }
      .titre{
          position: absolute;
          top:100px;
          left:30%;
      }
      .myaal{
          background-color: rgb(6, 8, 10);
          display: inline;
          color:white;
          padding:20px 20px;
          margin-top:10px;
          position: relative;
          
          
         
      }
     
      .myli{
        color:white;
        margin-left:5px;
     }
     .myl:hover{
         
      }
      .myl:active{
         
      }
      .myli:hover{
        color: white;
        text-decoration: none;
      }
      .connect{
          font-size:24px;
          position: relative;
          left:10px;
      }
      .myaal:hover{
          color:ivory;
          text-decoration: none;
          background-color: rgb(10, 192, 34);
      }
      .big{
          height:120px;
      }
    table{
       margin-top:10%; 
    }
    .myth{
        background-color: green;   
    }
    .mytr{
     background-color: green;
    }
    .iconsa{
       left:160px;
    }
    .chart{
        width:600px;
        height:600px;
        margin-left:250px;
    }
    .chartAAL{
        width:800px;
        height:800px;
        margin-left:150px;
    }
     
    @media screen and (max-width:1000px){
        
        .chart{
            width:450px;
           height:450px;
            margin-left:5%;
        }
        .chartAAL{
            width:450px;
           height:450px;
            margin-left:5%;
    }
        .aal:first-of-type{
        
       left:0.7%;
      }
      .aal{
         list-style: none;
         line-height:50px;
         position: relative;
         left:5%;    
         top:200px;
      }
     
     .connect{
         font-size:20px;
         margin-left:-2%;
     }
    
    
      .myaal{
          background-color: rgb(6, 8, 10);
          display: inline;
          color:white;
          padding:20px 20px;
          margin-top:10px;
          position: relative;
          
          
      }
      
        body{
         
      }
        .main-section{
            margin:0 auto;
            margin-top:50px;
            padding:0;
        
        }
        .my_input{
         margin-left:10px;
     }
       
        .PC{
          display:none;
        }
        .phone{
            display: block;
        }
        .PCTable{
            margin-top:200px;
        }
        
        
    }
    @media screen and (max-width:550px){
        .mylist{
         display:none;
        }
        .chart{
            width:350px;
           height:450px;
            margin-left:0%;
        }
        .chartAAL{
            width:350px;
           height:450px;
            margin-left:0%;
    }
        .aal:first-of-type{
        
       left:4.9%;
      }
      .aal{
         list-style: none;
         line-height:40px;
         position: relative;
        left:5%;    
         top:100px;
      }
      .aal2{
        margin-left:0px;
        position: relative;
       
      }
     .connect{
         font-size:15px;
         margin-left:-2%;
     }
    
    
      .myaal{
          background-color: rgb(6, 8, 10);
          display: inline;
          color:white;
          padding:10px 15px;
          margin-top:10px;
          position: relative;
          
          
      }
      body{
        text-align: center;
      }
        .modal-content{
            background-color: #434e5a;
            opacity:0.8;
            padding-top:30%;
            padding-bottom:30%;
            margin-top:10%;
            box-shadow:0px 0px 0px grey; 
        }
        .main-section{
            margin:0 auto;
            margin-top:0;
            padding:0px;
        
        }
        .my_input{
         margin-left:10px;
     }
      .my_icons{
         position: absolute;
         color:black;
         top:400px;
         left:0;
      }
      .iconsa{
        position: absolute;
        
         left:80px;
      }
       
        .PC{
          display:none;
        }
        .phone{
            display:block;
           
        }
        .PCTable{
            display:none;
        }
        .phoneTable{
            display:block;
            margin-top:100px;
            margin-left:0%;
        }
    }

   
    
    
    

    </style>
    
    </head>
        <body>
           
         @yield('content')
        </body>
       
</html>        