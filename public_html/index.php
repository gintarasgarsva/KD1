<?php
// Uzkraunam visus reikalingus failus
require '../config.php';
require ROOT . '/functions/file.php';
require ROOT . '/functions/html/builder.php';
require ROOT . '/functions/form/core.php';

//////////////////////////////////////////////////////////////////////////


class FileDb {

    private $file_name;
    private $data;

    public function __construct($file_name) {
        $this->file_name = $file_name;
    }

    public function load() {

        if (file_exists($this->file_name)) {
            $encoded_string = file_get_contents($this->file_name);

            if ($encoded_string !== false) {
                $this->data = $encoded_string;
            }
        }
    }

    public function getData() {

        if ($this->data == null) {
            $this->load();
        }
        return $this->data;
    }

    public function setData($data_array) {
        $this->data = $data_array;
    }

    public function save() {

        array_to_file($this->data_array, STORAGE_FILE);

        $string = json_encode($this->data_array);
        $file = file_put_contents($this->file_name, $string);

        if ($file !== false) {
            return true;
        } else {
            return false;
        }
    }

    public function tableExists($table_name) {
        if (isset($this->data[$table_name])) {
            return true;
        } else {
            return false;
        }
    }

    public function createTable($table_name) {
        if (!$this->tableExists($table_name)) {
            $this->data[$table_name] = [];
            return true;
        }
        return false;
    }

    public function dropTable($table_name) {
        if ($this->tableExists($table_name)) {
            unset($this->data[$table_name]);
            return true;
        } else {
            return false;
        }
    }

    public function truncateTable($table_name) {
        if ($this->tableExists($table_name)) {
            $this->data[$table_name] = [];
            return true;
        } else {
            return false;
        }
    }

    public function insertRow($table_name, $row, $row_id = null) {
        if ($this->tableExists($table_name)) {
            if ($row_id === null) {
                $this->data[$table_name][] = $row;
                return;
            } else {
                $this->data[$table_name][$row_id] = $row;
            }
        }
    }

}

$db = new FileDb(STORAGE_FILE);

$db->createTable('belekas');
$db->truncateTable('belekas');

var_dump($db);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome To PHP FightClub!</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
        <script src="media/js/app.js"></script>    
    </head>
    <body>

    </body>
</html>
