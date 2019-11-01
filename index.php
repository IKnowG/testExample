<?php
    
    session_start();
    require_once('functions.php');
    
?>


<!DOCTYPE html>

    <head>

        <meta charset="UTF-8">    
        <title>Test project</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script type="text/javascript" language="javascript"></script>

    </head>

    <body>


    
    <div class="container">

        <div class="row" style="padding-top: 50px">

            <div class="col-md"> 

                    <form>

                        <div class="form-group">
                        
                            <label>Insert area:</label>
                            <input type="text" name="area1" class="form-control" placeholder="Deparature (by name)" id="box1">
                    
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%">Search</button>

                    </form>

                    <div style="background-color:#007bff; margin-top: 20px; padding: 20px; visibility: hidden;" id="vis1">
                    
                        <h5>Deparature weather</h5>
                        <p style="margin: 0; display: inline;"><b>Dewpoint:</b></p>
                        <p id="dewPoint1" style="margin: 0; display: inline;"></p>
                        <p style="margin: 0; display: inline;">&deg;</p><br/>
                        <p style="margin: 0; display: inline;"><b>Humidity:</b></p>
                        <p id="humidity1" style="margin: 0; display: inline;"></p>
                        <p style="margin: 0; display: inline;">%</p><br/>
                        <p style="margin: 0; display: inline;"><b>Temperature:</b></p>
                        <p id="temperature1" style="margin: 0; display: inline;"></p>

                    </div>

                    <div class="row" id="vis12" style="padding-top: 20px; visibility: hidden;">
 
                        <div class="col-md" style="background-color:#0000ff; color:white;">

                            <h5 id="fog1" style="margin:0; display:inline;"></h5>
                            <h5 style="margin:0; display: inline;">%</h5><br/>
                            <p>Fog</p>

                        </div>

                        <div class="col-md" style="background-color:#0000ff; color:white;">

                            <h5 id="lowC1" style="margin:0; display:inline;"></h5>
                            <h5 style="margin:0; display:inline;">%</h5><br/>
                            <p>Low<br/>Clouds</p>

                        </div>

                        <div class="col-md" style="background-color:#0000ff; color:white">

                            <h5 id="midC1" style="margin:0; display:inline;"></h5>
                            <h5 style="margin:0; display:inline;">%</h5><br/>
                            <p>Medium<br/>Clouds</p>

                        </div>

                        <div class="col-md" style="background-color:#0000ff; color:white;">

                            <h5 id="highC1" style="margin:0; display:inline;"></h5>
                            <h5 style="margin:0; display:inline;">%</h5><br/>
                            <p>High<br/>Clouds</p>

                        </div>

                    </div>

                    <div class="row" id="vis123" style="padding-top: 20px; visibility: hidden;">
 
                        <div class="col-md filde">

                            <img src="images/sun.png" id="sun">

                        </div>

                        <div class="col-md filde">

                            <img src="images/c.png" id="low">

                        </div>

                        <div class="col-md filde">

                            <img src="images/c.png" id="mid">

                        </div>

                        <div class="col-md filde">

                            <img src="images/c.png" id="high">

                        </div>

                    </div>

            </div>

            <div class="col-md">

                    <form>

                        <div class="form-group">
                        
                            <label>Insert area:</label>
                            <input type="text" name="area2" class="form-control" placeholder="Destination (by name)" id="box2">
                    
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%">Search</button>

                    </form> 

                    <div style="background-color:#007bff; margin-top: 20px; padding: 20px; visibility: hidden;" id="vis2">
                    
                        <h5>Deparature weather</h5>
                        <p style="margin: 0; display: inline;"><b>Dewpoint:</b></p>
                        <p id="dewPoint2" style="margin: 0; display: inline;"></p>
                        <p style="margin: 0; display: inline;">&deg;</p><br/>
                        <p style="margin: 0; display: inline;"><b>Humidity:</b></p>
                        <p id="humidity2" style="margin: 0; display: inline;"></p>
                        <p style="margin: 0; display: inline;">%</p><br/>
                        <p style="margin: 0; display: inline;"><b>Temperature:</b></p>
                        <p id="temperature2" style="margin: 0; display: inline;"></p>

                    </div> 

                    <div class="row" style="padding-top: 20px; visibility: hidden;" id="vis22">
 
                        <div class="col-md" style="background-color:#0000ff; color:white;">

                            <h5 id="fog2" style="margin:0; display:inline;"></h5>
                            <h5 style="margin:0; display: inline;">%</h5><br/>
                            <p>Fog</p>

                        </div>

                        <div class="col-md" style="background-color:#0000ff; color:white;">

                            <h5 id="lowC2" style="margin:0; display:inline;"></h5>
                            <h5 style="margin:0; display:inline;">%</h5><br/>
                            <p>Low<br/>Clouds</p>

                        </div>

                        <div class="col-md" style="background-color:#0000ff; color:white">

                            <h5 id="midC2" style="margin:0; display:inline;"></h5>
                            <h5 style="margin:0; display:inline;">%</h5><br/>
                            <p>Medium<br/>Clouds</p>

                        </div>

                        <div class="col-md" style="background-color:#0000ff; color:white;">

                            <h5 id="highC2" style="margin:0; display:inline;"></h5>
                            <h5 style="margin:0; display:inline;">%</h5><br/>
                            <p>High<br/>Clouds</p>

                        </div>

                    </div>  

                    <div class="row" style="padding-top: 20px; visibility: hidden;" id="vis223">
 
                        <div class="col-md filde">

                            <img src="images/sun.png" id="sun">

                        </div>

                        <div class="col-md filde">

                            <img src="images/c.png" id="low1">

                        </div>

                        <div class="col-md filde">

                            <img src="images/c.png" id="mid1">

                        </div>

                        <div class="col-md filde">

                            <img src="images/c.png" id="high1">

                        </div>

                    </div>

            </div>

        </div>

    </div>

    </body>

    <?php

    
    if(isset($_GET['area1'])||isset($_SESSION['a1'])){

        echo "<script>document.getElementById('vis1').style.visibility = 'visible';</script>";
        echo "<script>document.getElementById('vis12').style.visibility = 'visible';</script>";
        echo "<script>document.getElementById('vis123').style.visibility = 'visible';</script>";
        
    if(!empty($_GET['area1'])) $_SESSION['a1'] = $_GET['area1'];    
        $exeData = $_SESSION['a1'];

        $rez = geocoding($exeData);

        echo "<script>document.getElementById('dewPoint1').innerHTML=".$rez->dewpointTemperature->value.";</script>";
        echo "<script>document.getElementById('humidity1').innerHTML=".$rez->humidity->value.";</script>";
        echo "<script>document.getElementById('temperature1').innerHTML=".$rez->temperature->value.";</script>";
        echo "<script>document.getElementById('fog1').innerHTML=".$rez->fog->percent.";</script>";
        echo "<script>document.getElementById('lowC1').innerHTML=".$rez->lowClouds->percent.";</script>";
        echo "<script>document.getElementById('midC1').innerHTML=".$rez->mediumClouds->percent.";</script>";
        echo "<script>document.getElementById('highC1').innerHTML=".$rez->highClouds->percent.";</script>";

        $op = visibility($rez->lowClouds->percent);
        echo "<script>document.getElementById('low').style.opacity = ".$op.";</script>";

        $op = visibility($rez->mediumClouds->percent);
        echo "<script>document.getElementById('mid').style.opacity = ".$op.";</script>";
        
        $op = visibility($rez->highClouds->percent);
        echo "<script>document.getElementById('high').style.opacity = ".$op.";</script>";

    }

    if(isset($_GET['area2'])||isset($_SESSION['a2'])){

        echo "<script>document.getElementById('vis2').style.visibility = 'visible';</script>";
        echo "<script>document.getElementById('vis22').style.visibility = 'visible';</script>";
        echo "<script>document.getElementById('vis223').style.visibility = 'visible';</script>";

        if(!empty($_GET['area2'])) $_SESSION['a2'] = $_GET['area2'];   

        $exeData2 = $_SESSION['a2'];

        $rez = geocoding($exeData2);

        echo "<script>document.getElementById('dewPoint2').innerHTML=".$rez->dewpointTemperature->value.";</script>";
        echo "<script>document.getElementById('humidity2').innerHTML=".$rez->humidity->value.";</script>";
        echo "<script>document.getElementById('temperature2').innerHTML=".$rez->temperature->value.";</script>";
        echo "<script>document.getElementById('fog2').innerHTML=".$rez->fog->percent.";</script>";
        echo "<script>document.getElementById('lowC2').innerHTML=".$rez->lowClouds->percent.";</script>";
        echo "<script>document.getElementById('midC2').innerHTML=".$rez->mediumClouds->percent.";</script>";
        echo "<script>document.getElementById('highC2').innerHTML=".$rez->highClouds->percent.";</script>";

        $op = visibility($rez->lowClouds->percent);
        echo "<script>document.getElementById('low1').style.opacity = ".$op.";</script>";

        $op = visibility($rez->mediumClouds->percent);
        echo "<script>document.getElementById('mid1').style.opacity = ".$op.";</script>";
        
        $op = visibility($rez->highClouds->percent);
        echo "<script>document.getElementById('high1').style.opacity = ".$op.";</script>";

    }

    ?>

</html>