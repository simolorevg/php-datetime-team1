<?php

$datashort = date("d-m-Y");

$date_str = "09-05-2023"; // Stringa
$time = strtotime($date_str);
$date_from_str = date("d-m-Y", $time); // Conversione in data

$time_Stamp = strtotime("now");
$data_odierna = date("d-m-Y", $time_Stamp); // Data con time stamp

$dayafter = date('d-m-Y', strtotime($data_odierna . '+ 1 days'));

$date_convert = date_create_from_format('d-m-Y', $date_str); //da stringa a data
$date_converted = date_format($date_convert, 'Y-m-d'); //conversione data


?>



<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team 1 - Date/Time</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- STYLE-CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- HEADER -->
    <header class="d-flex align-items-center justify-content-center">
    </header>
    <!-- /HEADER -->

    <!-- MAIN -->
    <main>
        <h1 class="text-center py-3">Team 1 - <span>Date/Time</span></h1>
        <div class="container">
            <div class="row row-cols-3">
                <div class="col pb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Corrente</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">$datashort = date("d-m-Y");</h6>
                            <p class="card-text">Risultato: <?php echo $datashort; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col pb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data tramite TimeStamp</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">$time_Stamp = strtotime("now"); <br>$data_odierna = date("d-m-Y", $time_Stamp);</h6>
                            <p class="card-text">Risultato: <?php echo $data_odierna; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col pb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data a partire da una stringa</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">$date_str = "09-05-2023"; <br>$time = strtotime($date_str); <br>$date_from_str = date("d-m-Y", $time);</h6>
                            <p class="card-text">Risultato: <?php echo $date_from_str; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 pb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lista di vari parametri</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary d-flex">
                                <div class="col-6">
                                    <ul>
                                        <li>d numero del giorno (da 1 a 31);</li>
                                        <li>D abbreviazione del nome del giorno in inglese (mon, tue,wed,…);</li>
                                        <li>l nome completo della data;</li>
                                        <li>m numero del mese (da 1 a 12);</li>
                                        <li>M nome del mese;</li>
                                        <li>y anno con le due cifre finali;</li>
                                        <li>Y anno per esteso;</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul>
                                        <li>h ore in formato 12;</li>
                                        <li>H ore in formato 24;</li>
                                        <li>i minuti;</li>
                                        <li>s secondi;</li>
                                        <li>a am pm in minuscolo;</li>
                                        <li>A am e pm in maiuscolo;</li>
                                    </ul>
                                </div>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col pb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data con aggiunta di un giorno</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">$dayafter = date('d-m-Y', strtotime($data_odierna . '+ 1 days'));</h6>
                            <p class="card-text">Risultato: <?php echo $dayafter; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col pb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data con formato convertito</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">$date_convert = date_create_from_format('d-m-Y', $date_str); <br>$date_converted = date_format($date_convert, 'Y-m-d');</h6>
                            <p class="card-text">Risultato: <?php echo $date_converted; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col pb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
                            <p class="card-text">Risultato: </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /MAIN -->

    <!-- FOOTER -->
    <footer class="d-flex align-items-center justify-content-center">
        <h2>Team 1 - Date/Time by <span>Boolean</span> ©</h2>
    </footer>
    <!-- /FOOTER -->
</body>

</html>