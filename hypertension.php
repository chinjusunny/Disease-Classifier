<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Disease Classifier</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.html">Company</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</header>
      
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="hypertension.php">
              <span data-feather="file-text"></span>
              Hypertension Calculator
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kidneydisease.php">
              <span data-feather="file-text"></span>
              Kidney Disease Calculator
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hypertension Calculator</h1>
        </div>
        
        <div class="row g-3">
      
      <div class="col-md-7 col-lg-8">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-4">
              <label for="sysbp" class="form-label">SysBP</label>
              <input type="number" class="form-control" id="sysbp1" placeholder="" value="" required>
            </div>

            <div class="col-sm-4">
              <label for="diabp" class="form-label">DiaBP</label>
              <input type="number" class="form-control" id="diabp1" placeholder="" value="" required>
            </div>
              
            <div class="col-sm-4 ">
              <label for="date" class="form-label">Select a Date</label>
                 <div id="datepicker" class="input-group date datepicker" >
                    <input class="form-control" type="text" id="dateVal1" readonly />
                    <span class="input-group-addon"></span>
                </div>
            </div>   

          </div>
          <div class="row g-3">
              
              <div class="col-sm-4">
              <label for="sysbp" class="form-label">SysBP</label>
              <input type="number" class="form-control" id="sysbp2" placeholder="" value="" required>
            </div>

            <div class="col-sm-4">
              <label for="diabp" class="form-label">DiaBP</label>
              <input type="number" class="form-control" id="diabp2" placeholder="" value="" required>
            </div>
              
            <div class="col-sm-4 ">
              <label for="date" class="form-label">Select a Date</label>
                 <div id="datepicker" class="input-group date datepicker " >
                    <input class="form-control" type="text" id="dateVal2" readonly />
                    <span class="input-group-addon"></span>
                </div>
            </div>   
                       
          </div>            
            <hr class="my-4">
            <input type="button" id="calc" class="btn btn-success" name="submit" value="Calculate"/>
            <input type="reset" class="btn btn-success" value="Reset" />
          </form>
            </div>            
                <div class="row g-3">
                    <div class="col-sm-6 ">
                         <div id="summary">
                            <h3>Summary</h3>
                             <p id="date"></p>
                             <p id="message"></p>
                         </div>
                    </div>
                </div>
        </div>
    </main>
  </div>
</div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.2/lodash.min.js"></script>

    <script type="text/javascript">
        $(function () {
          $("#summary").hide();
          $(".datepicker").datepicker({ 
                autoclose: true, 
                format: 'yyyy/mm/dd',
                todayHighlight: true
          }).datepicker();
            
          $("#calc").click(function () {
              
              var params=[];   
               
              var s1 = $("#sysbp1").val();
              var d1 = $("#diabp1").val();
              var date1 = $("#dateVal1").val();
              
              params.push({SysBP:s1,DiaBP:d1,atDate:date1});
              
              var s2 = $("#sysbp2").val();
              var d2 = $("#diabp2").val();
              var date2 = $("#dateVal2").val();
              
             params.push({SysBP:s2,DiaBP:d2,atDate:date2});
              
              params = _.sortBy(params, function(dateObj) {
                  return new Date(dateObj.atDate);
              });
              
              var eDate=params[1]['atDate'];
              var sVal=params[1]['SysBP'];
              var dVal=params[1]['DiaBP'];
              
               $("#summary").show();
               $('p#date').html("Date:"+eDate);
              if(sVal>=180 && dVal>=120){
                  $('p#message').html("SysBP:"+sVal+"<br/>DiaBP:"+dVal+"<br/>Classification:Stage 3");
              }
              else if(sVal>=160&&sVal<180 || dVal>=100&&dVal<110){
                  $('p#message').html("SysBP:"+sVal+"<br/>DiaBP:"+dVal+"<br/>Classification:Stage 2");
              }
              else if(sVal>=140&&sVal<160 || dVal>=90&&dVal<100){
                  $('p#message').html("SysBP:"+sVal+"<br/>DiaBP:"+dVal+"<br/>Classification:Stage 1");
              }
              else{
                  $('p#message').html("SysBP:"+sVal+"<br/>DiaBP:"+dVal+"<br/>Classification:No Hypertension");
                  
              }

          });
        });

    </script>
  </body>
</html>

