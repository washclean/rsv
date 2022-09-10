<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
   .b4 a:link, a:visited {
   
   background-color: #f44336;
   color: white;
   padding: 12px 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;

 }
 
 .b4 a:hover, a:active{
   
   background-color: red;
 
 } 
    </style>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Kërko sipas datave</h4>
                    </div>
                    <div class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nga data:</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Deri më datë:</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kliko për të gjetur të dhënat</label> <br>
                                      <button type="submit" class="btn btn-primary">Kërko</button>
                                    </div>
                                    
                                    <div class="b4">
                                    <a href="Home.html">Mbyll</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                <th>Nr.Procesverbalit</th>                         
<th>Data e inspekimit</th>
<th>Lloji i subjektit të inspektuar</th>
<th>NUI</th>
<th>Emri i subjektit</th>
<th>Adresa e subjektit</th>
<th>Qëllimi i inspektimit</th>
<th>Lloji i mostres</th>
<th>Nr. i mostrave të marrura</th>
<th>Sasia e mostrave të marrura</th>
<th>Analiza e kërkuar</th>
<th>Lloji i mallit që asgjësohet</th>
<th>Sasia e mallit që asgjësohet</th>
<th>Vendi i asgjësimit</th>
<th>Llloji i kafshëve të inspektuara</th>
<th>Numri i kafshëve të inspektuara</th>
<th>Veprimi i marrur</th>
<th>Nr. i kafshëve të therrura</th>
<th>Lloji i mallit që eksportohet</th>
<th>Sasia e mallit që eksportohet</th>
<th>Nr. CVE</th>
<th>Vendi importues</th>
<th> (Ç.origjines)- Lloji i mallit</th>
<th>Sasia e mallit</th>
<th>Nr.Ç.origjines</th>
<th>Vendi i destinimit</th>
<th>Lloji i kafshëve të kontrabanduara</th>
<th>Nr. i kafshëve të kontrabanduara</th>

                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                $con = mysqli_connect("localhost","root","","doc");

                                if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                {
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];

                                    $query = "SELECT * FROM home WHERE dt BETWEEN '$from_date' AND '$to_date' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                            <td><?= $row['np']; ?></td>
                                            <td><?= $row['dt']; ?></td>
                                            <td><?= $row['llsi']; ?></td>
                                            <td><?= $row['nui']; ?></td>
                                            <td><?= $row['es']; ?></td>
                                            <td><?= $row['ad']; ?></td> 
                                            <td><?= $row['qi']; ?></td>
                                            <td><?= $row['llm']; ?></td>
                                            <td><?= $row['nmm']; ?></td>
                                            <td><?= $row['smm']; ?></td> 
                                            <td><?= $row['ak']; ?></td>
                                            <td><?= $row['llma']; ?></td> 
                                            <td><?= $row['smqa']; ?></td>
                                            <td><?= $row['va']; ?></td> 
                                            <td><?= $row['llki']; ?></td>
                                            <td><?= $row['nki']; ?></td> 
                                            <td><?= $row['vm']; ?></td>
                                            <td><?= $row['nkth']; ?></td>     
                                            <td><?= $row['llme']; ?></td>
                                            <td><?= $row['sme']; ?></td> 
                                            <td><?= $row['cve']; ?></td>
                                            <td><?= $row['vi']; ?></td>             
                                            <td><?= $row['llmo']; ?></td>
                                            <td><?= $row['smo']; ?></td> 
                                            <td><?= $row['cve']; ?></td>
                                            <td><?= $row['vd']; ?></td>            
                                            <td><?= $row['llkk']; ?></td>
                                            <td><?= $row['nkk']; ?></td>         
                                                   
                                                   
                                               
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>