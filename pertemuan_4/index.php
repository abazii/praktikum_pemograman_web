<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Pertemuan 4</title>
</head>

<body>
    <h1>
        Pertemuan 4
    </h1>

    <hr>
    <!-- echo/prit -->
    <?php echo "mbg hebat<br>" ?>
    <br>
    <?= "mbg sama dengan <br><br>" ?>

    <!-- variabel -->
    <?php
    $nama = "Raka";
    $umur = 19;
    $date = date('d F Y H:i:s');
    echo "Halo nama saya: $nama<br>";
    echo "Umur saya = " . ($umur + 2) . "<br>";
    echo "Tanggal = " . $date . "<br>";
    print "<br>";
    print("inin pake print wok");
    ?>


    <p style="color: aqua;">
        <?= $nama ?>
    </p>

    <!-- IF/ELSE -->
    <?php
    if ($umur <= 19):
        echo $umur;
        echo "<h1>Siapa</h1>";
    else: ?>
        <h1>Siapa?</h1>
    <?php
    endif;
    ?>

    <hr>
    <!-- IF/ELSE -->
    <?php
    if ($umur <= 19):
        echo $umur;
        echo "<h1>Siapa</h1>";
    else: ?>
        <h1>Siapa?</h1>
    <?php
    endif;
    ?>
    <hr>

    <!-- while loop -->
    <?php
    $num = 0;
    ?>
    <div class="d-flex flex-warp gap-2">
        <?php// while ($num < 20) ?>

        <div class="card " style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    <?php 
        $num++;
    ?>
    <?php// endwhile; ?>

</body>

</html>