<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burgers & Frankfurt's</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./xml/menu_carta.xml">
    <link rel="Keyboard Icon" href="./icono/icono.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>


<body>
    <?php
        if (file_exists('./xml/menu_carta.xml')) {
            $carta = simplexml_load_file('./xml/menu_carta.xml');
        } else {
            exit('Error abriendo menu_carta.xml');
        }
    ?>


    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Burgers & Frankfurt's</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#Hamburgesas">Hamburgesas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#Frankfurts">Frankfurts</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#Bocadillos">Bocadillos</a> 
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="carousel">  
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/carrousel/foto2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/carrousel/foto3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/carrousel/foto1.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <br>
    <br>

<div class="container">
        <h3 id="Hamburgesas">Hamburgesas</h3>
                <div class='eslogan'>
                    <p>Descubre el arte de las Hamburgesas</p>
                <div>
                <table class="table">
                    <thead class="titulo">
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Descripción (kcal)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($carta->plato as $plato){
                            if ($plato['name'] == 'Hamburgesas') {
                            echo '<tr>';
                            echo '<td>'.$plato->name.'</td>';
                            echo '<td>'.$plato->price.'</td>';
                            echo '<td>'.$plato->description.'</td>';
                            echo '<td><img src="'.$plato->imagen.'" alt="'.$plato->nombre.'" width="70" height="70"></td>';
                            echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>   
</div>
<br>
<br>
<br>

<div class="container">
    <h3 id="Frankfurts">Frankfurts</h3>
            <div class='eslogan'>
                <p>Descubre los buenos Frankfurts</p>
            <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripción (kcal)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($carta->plato as $plato){
                        if ($plato['name'] == 'Frankfurts') {
                        echo '<tr>';
                        echo '<td>'.$plato->name.'</td>';
                        echo '<td>'.$plato->price.'</td>';
                        echo '<td>'.$plato->description.'</td>';
                        echo '<td><img src="'.$plato->imagen.'" alt="'.$plato->nombre.'" width="80" height="80"></td>';
                        echo '</tr>';
                        }
                    }
                    ?>
                 </tbody>
            </table>
</div>
<br>
<br>
<br>

<div class="container">
    <h3 id="Bocadillos">Bocadillos</h3>
            <div class='eslogan'>
                <p>Descubre los buenos Bocadillos</p>
            <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripción (kcal)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($carta->plato as $plato){
                        if ($plato['name'] == 'Bocadillos') {
                        echo '<tr>';
                        echo '<td>'.$plato->name.'</td>';
                        echo '<td>'.$plato->price.'</td>';
                        echo '<td>'.$plato->description.'</td>';
                        echo '<td><img src="'.$plato->imagen.'" alt="'.$plato->nombre.'" width="80" height="80"></td>';
                        echo '</tr>';
                        }
                    }
                    ?>
                 </tbody>
            </table>
</div>
</body>
</html>