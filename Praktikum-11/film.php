<?php

require_once('db.php');

class Film{
    private $db;
    
    function __construct(){
        sleep(1);
        $this->db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if($this->db->connect_error){
            http_response_code(500);
            die("Connection Failed: {$this->db->connect_error}");
        }
    }

    function read(){
        $mode = isset($_GET['mode']) ? $_GET['mode'] : 0;
        $query = "SELECT * FROM film ORDER BY title ASC LIMIT {$mode}, 12";
        $sql = $this->db->query($query);
        $data = [];

        while($row = $sql->fetch_assoc()){
            if(file_exists("assets/{$row['film_id']}.jpg")){
                $row['img'] = "assets/{$row['film_id']}.jpg";
            } else{
                $row['img'] = "assets/no-image.png";
            }
            array_push($data, $row);
        }

        header("Content-Type: application/json");
        echo json_encode($data);
    }

    function add($data){

        foreach ($data as $key => $value) {
            $value = is_array($value) ? trim(implode(',', $value)) : trim($value);
            $data[$key] = (strlen($value) > 0 ? $value : NULL);
        }

        $query = "INSERT INTO film VALUES(NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $sql = $this->db->prepare($query);
        $sql -> bind_param(
            'ssiiiididss',
            $data['title'],
            $data['description'],
            $data['release_year'],
            $data['language_id'],
            $data['original_language_id'],
            $data['rental_duration'],
            $data['rental_rate'],
            $data['length'],
            $data['replacement_cost'],
            $data['rating'],
            $data['special_features']
        );

        try {
            $sql->execute();
        } catch (\Exception $e) {
            $sql->close();
            http_response_code(500);
            die($e->getMessage());
        }
        $sql->close();
    }
}

$film = new Film();
$condition = $_GET['mode'];

if ($condition == 'add') {
    $film->add($_POST);
} else {
    $film->read();
}

?>