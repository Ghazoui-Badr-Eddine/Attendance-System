<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap.min.css"/>  
    <title>Find Timesheet</title>
    <script src="jquery.min.js"></script>
    <script  src="bootstrap.min.js"></script>
    </head>
    <style>
         body{
           background-color:#F2F4F4;
            
        }
        p{
            font-size: 30px;
            
        }
        .rech{
           margin-bottom: 30px;
            padding-top: 50px;
            padding-left: 140px;
            margin-top: 80px
           
          
            
        }
        .pan{margin-left: 200px;
            margin-right: 200px;
          margin-top: 100px;
            padding-bottom: 100px;
            
            
        }
        .btn{
            
               margin-left:5px;
               margin-top: 30px;
            margin-bottom:30px;
              
        }
        .col{
        margin-bottom:20px;
        }

    
    </style>
    <body>
        <header>
        
         <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">
                <a href="#" class="navbar-brand">ENSAM</a>
            </div>

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav ">
                    <li class="active"><a href="home.php">Home</a></li>
                    <li class="dropdown">   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students Management <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a class="lo" href="showing.php">Display</a></li>
                            <li><a class="lo" href="adding.php">Add</a></li>
                            <li><a class="lo" href="delete.html" >Delete</a></li>
                            <li><a class="lo" href="uprech.html" >Update</a></li>
                            <li><a class="lo" href="recherche.php" >Search</a></li>
                        </ul>
                    
                    <li class="active"><a href="carac.php">Validation History </a></li>
                    
                    </li>

                    <!-- drop down menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Timesheet <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="rechemp.php">Display Timesheet</a></li>
                            <li><a href="emploi.php" >Add Timesheet</a></li>
                        </ul>
                    </li>
                </ul>
                <div >
                    <ul class="nav navbar-nav">
               <li> <a href="home.php"  >About</a></li>
                    </ul>
            </div>
                  <div >
                    <ul class="nav navbar-nav">
               <li> <a href="carac.php"  >Help</a></li>
                    </ul>
            </div>

                <!--right align -->
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="logout.php">Sign Out</a></li>
                   
                </ul>


            </div>

        </div>
    </nav>
</header>
        <div class="panel panel-default pan">
            <div class="panel-heading"><p>Find your Timesheet</p></div>
  <div class="panel-body col">
        <div class="rech">
            <form action="affemp.php" method="get">
            <select name="fil" >
                <option> Your Major</option>
           
            <option value="SMA"> SMA</option>
            <option value="SMI"> SMI</option>
            <option value="SMP"> SMP</option>
            <option value="SVT"> SVT</option>
        </select>
             <select name="sem" >
                 <option> Semestre</option>
            <option value="S1"> S1</option>
            <option value="S2"> S2</option>
            <option value="S3"> S3</option>
            <option value="S4"> S4</option>
            <option value="S5"> S5</option>
            <option value="S6"> S6</option>
        </select>
                
        <input type="submit" class="btn btn-default btn " value="Submit">
            </form>
            
            <br>
   
        </div>
            </div>
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </body>