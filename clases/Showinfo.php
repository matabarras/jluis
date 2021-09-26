<?php
class Showinfo extends Connection implements CrudInterface {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function get() 
    {

        $nombre = $_GET['alum_nombre'];
        $sql = "SELECT * FROM t_alumnos WHERE alum_nombre = ?";
        
        $result = $this->db->prepare($sql);
        
        $result->execute([$nombre]);

        $alumnos =$result->fetchAll(PDO::FETCH_OBJ);
        //Lo que hace fetch_obj es que ejecuta la consulta y la guarda en alumnos, pero lo que guarda en alumnos es un objeto con el resultado de la consulta
        //Ahora tienes alumnos como un objeto y tiene un array por cada fila que encuentre por la consulta
        //En este caso solo tienes una fila, porque estas filtrando por el nombre que pasas en el get.
        //Lo que haces es recorrer el objeto $alumnos con el foreach, y mostrar sus resultados como es objeto los muestras con ->
        
        foreach($alumnos as $datos){
            echo $datos->alum_nombre;
            echo $datos->alum_dni;
        }

        /*Alternativa
        Esto también funciona, pero yo prefiero utilizar fetch_obj que crea un objeto, fetch_assoc crea un array con la info
        pero es lo mismo a fin de cuentas.

        while ($registro = $result->fetch(PDO::FETCH_ASSOC)) {
            echo  $registro["alum_nombre"] . $registro["alum_dni"] . "<br>";
        }*/

        $result->closeCursor();


    }

    function update()
    {

    }

    function delete($id)
    {

    }

    function add($values)
    {
        /*$db = $this->connect();
        $stmt = $db->prepare("INSERT INTO t_alumnos (alum_dni,alum_nombre,alum_apellido1,alum_apellido2) VALUES (?, ?, ?, ?)");

        $dni = $_POST['alum_dni'];
        $nombre = $_POST['alum_nombre'];
        $apellido1 = $_POST['alum_apellido1'];
        $apellido2 =$_POST['alum_apellido2'];

        $stmt->bindParam(':alum_dni', $dni);
        $stmt->bindParam(':alum_nombre', $nombre);
        $stmt->bindParam(':alum_apellido1', $apellido1);
        $stmt->bindParam(':alum_apellido2', $apellido2);

        if ($stmt->execute()) {
            echo "Datos guardados correctamente!";
        } else {
            echo "No se han podido guardar los datos!";
        }*/
    }
    public function test($param){
        return $param;
    }
}




?>