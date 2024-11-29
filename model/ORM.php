<?php
class ORM {
    protected $db; // Conexión a la base de datos
    protected $table; // Nombre de la tabla
    protected $columns = []; // Columnas de la tabla

    public function __construct($db, $table, $columns) {
        $this->db = $db;
        $this->table = $table;
        $this->columns = $columns;
    }

    function insert($data) {
        // Construir la consulta SQL con los nombres de columnas
        $sql = "INSERT INTO {$this->table} (";
        foreach($data as $key => $value) {
            $sql .= "{$key},";
        }
    
        // Eliminar la última coma
        $fin = strrpos($sql, ",");
        $sql = substr($sql, 0, $fin);
        $sql .= ") VALUES (";
    
        // Añadir los marcadores de posición para los valores
        foreach($data as $key => $value) {
            $sql .= "?,";
        }
    
        // Eliminar la última coma
        $fin = strrpos($sql, ",");
        $sql = substr($sql, 0, $fin);
        $sql .= ")";
    
        // Preparar la consulta
        $stm = $this->db->prepare($sql);
    
        // Obtener los valores en el orden correcto
        $values = array_values($data);
    
        // Ejecutar la consulta y manejar errores
        $success = false;
        try {
            $success = $stm->execute($values);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    
        return $success;
    }
}
?>
