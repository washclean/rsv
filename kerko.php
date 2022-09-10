<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Kërko të dhëna</title>
</head>
<style>
    .b3 a:link, a:visited {
   
   background-color: #f44336;
   color: white;
   padding: 12px 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
 }
 
 .b3 a:hover, a:active{
   
   background-color: red;
 
 }

    </style>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Raporti i inspektimeve të sektorit Veterinar</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Kërko të dhëna">
                                        <button type="submit" class="btn btn-primary">Kerko</button>
                                    </div>
                                    <div class="b3">
                                    <a href="Home.html">Mbyll</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
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

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM home WHERE CONCAT (np,dt,llsi,nui,es,ad,qi,llm,nmm,smm,ak,llma,smqa,va,llki,nki,vm,nkth,llme,sme,cve,vi,llmo,smo,cveo,vd,llkk,nkk) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                              
                                                <td><?= $items['np']; ?></td>
                                                    <td><?= $items['dt']; ?></td>
                                                    <td><?= $items['llsi']; ?></td>
                                                    <td><?= $items['nui']; ?></td>
                                                    <td><?= $items['es']; ?></td>
                                                    <td><?= $items['ad']; ?></td>
                                                    <td><?= $items['qi']; ?></td>
                                                    <td><?= $items['llm']; ?></td>
                                                    <td><?= $items['nmm']; ?></td>
                                                    <td><?= $items['smm']; ?></td>
                                                    <td><?= $items['ak']; ?></td>
                                                    <td><?= $items['llma']; ?></td>
                                                    <td><?= $items['smqa']; ?></td>
                                                    <td><?= $items['va']; ?></td>
                                                    <td><?= $items['llki']; ?></td>
                                                    <td><?= $items['nki']; ?></td>
                                                    <td><?= $items['vm']; ?></td>
                                                    <td><?= $items['nkth']; ?></td>
                                                    <td><?= $items['llme']; ?></td>
                                                    <td><?= $items['sme']; ?></td>
                                                    <td><?= $items['cve']; ?></td>
                                                    <td><?= $items['vi']; ?></td>
                                                    <td><?= $items['llmo']; ?></td>
                                                    <td><?= $items['smo']; ?></td>
                                                    <td><?= $items['cve']; ?></td>
                                                    <td><?= $items['vd']; ?></td>
                                                    <td><?= $items['llkk']; ?></td>
                                                    <td><?= $items['nkk']; ?></td>
                                               
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
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