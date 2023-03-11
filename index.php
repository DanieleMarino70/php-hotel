<?php
// ** Iniziate in modo graduale.

// // Prima stampate in pagina i dati, senza preoccuparvi dello stile. 
// // Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.


// Bonus
// 1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
// 2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
// NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
// Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php hotel</title>


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <ul>
            
        </ul>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to Center</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $key => $hotel){        ?>
                    <tr>
                    <th scope="row"><?php echo $key + 1 ?></th>
                    <?php foreach($hotel as $name_key => $infohotel){        ?>
                        <?php if($name_key === "parking") :    ?>
                            <?php if($infohotel === true) :    ?>
                                <td><?php echo "true"?></td>
                            <?php else : ?>
                                <td><?php echo "false"?></td>
                            <?php endif ?>
                        <?php else : ?>
                        <td><?php echo $infohotel?></td>
                        <?php endif ?>
                    <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
            

    
    </div>
</body>
</html>