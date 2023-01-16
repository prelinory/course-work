<?php
session_start();
require_once 'vendor/connect.php';

// для вывода результатов - отладка
function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    exit();
}
// проверка на наличие ошибок
function dbCheck($query){
    // Ошибка - массив
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}

// запрос на получение всех строк из таблицы
function selectAll($table, $params = []){
    global $pdo;

    $sql = "SELECT * FROM $table";
    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            // если не число, добаляем скобки
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
    // предварительная подготовка
    $query = $pdo->prepare($sql);
    // отправка запроса
    $query->execute();
    // проверка на ошибку
    dbCheck($query);
    // возврат всех строк
    return $query->fetchAll();
}

// запрос на получение одной строки с выбранной таблицы
function selectOne($table, $params = []){
    global $pdo;

    $sql = "SELECT * FROM $table";
    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheck($query);
    // возврат одной строки
    return $query->fetch();
}


