<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Automoviles</title>
</head>
<body>
<div class="container">
<?php 
    $d= new Datos();
    $listadatos = $d->getDatos();
    echo '<hr/>';
    foreach($listadatos as $valores){
        echo "  <div class='card' style='width: 18rem;''>";
        echo "  <img class='card-img-top' src='https://diveusados.divemotor.com/wp-content/uploads/2020/04/Banner-principal-Home.jpg' alt='Card image cap'>";
        echo "  <div class='card-body'>";
        echo "    <h5 class='card-title'>Automovil</h5>";
        echo "    <p class='card-text'>";
        echo "       Id:". $valores->get_id();
        echo '       <br>';
        echo "       Modelo:".$valores->get_modelo();
        echo '       <br>';
        echo "       Marca:".$valores->get_marca();
        echo "    </p>";
        echo "  </div>";
        echo "</div>";
    }
    ?>

</div>
</body>
</html>

<?php 
class Automovil{
    public $id;
    public $modelo;
    public $marca;

    //constructor
    public function __construct($id,$modelo,$marca)
    {
        $this->id=$id;
        $this->modelo=$modelo;
        $this->marca=$marca;
    }

    public function get_id(){
        return $this->id;
    }

    public function get_modelo(){
        return $this->modelo;
    }

    public function get_marca(){
        return $this->marca;
    }
}

class Datos{
    function getDatos(){
        $lista=array();
        $u=new Automovil(1,"Spark","Chevrolet");
        array_push($lista,$u);

        $u=new Automovil(2,"Serie 3","BMW");
        array_push($lista,$u);

        $u=new Automovil(3,"Portofino","Ferrari");
        array_push($lista,$u);

        $u=new Automovil(4,"Tundra","Ford");
        array_push($lista,$u);
        return $lista;
    }
}
?>