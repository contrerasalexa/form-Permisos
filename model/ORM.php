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

    public function insert($data) {
        $sql = "INSERT INTO {$this->table} (";
        foreach ($data as $key => $value) {
            $sql .= "{$this->columns[$key]},";
        }

        // Eliminar la última coma
        $sql = rtrim($sql, ',') . ") VALUES (";

        // Añadir los marcadores de posición para los valores
        $sql .= rtrim(str_repeat('?,', count($data)), ',') . ")";

        // Preparar la consulta
        $stm = $this->db->prepare($sql);

        // Obtener los valores en el orden correcto
        $values = array_values($data);

        try {
            return $stm->execute($values);
        } catch (PDOException $ex) {
            echo "Error: " . $ex->getMessage();
            return false;
        }
    }
}
?>
