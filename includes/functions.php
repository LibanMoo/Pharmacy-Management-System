<?php
include 'connection.php';

function read($table){
  global $conn;
  $result = $conn->query("select * from $table")->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
function read_where($table, $condition)
{
  global $conn;
  $result = $conn->query("select * from $table where $condition ")->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
function read_limit($table, $order_entity, $limit){
  global $conn;
  $result = $conn->query("select * from $table order by $order_entity desc limit $limit ; ")->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
function escape($input){
    return htmlspecialchars($input);
}
function insert($table, $data)
{
  global $conn;
  // "insert into tablename(column list) values(values list)"
  $keys = implode(",", array_keys($data));
  $namedKeys = ":" . implode(",:", array_keys($data));

  // $sql= "insert into $table ( name, email, phone ) values(:name, :email, :phone)";
  $sql = "insert into $table ( $keys ) values($namedKeys)";
  $stm = $conn->prepare($sql);
  $result =  $stm->execute($data);
  return $result ? true : false;
}
function update($table, $data)
{
  global $conn;

  // "update tablename set column=:column,column1=:column1 ... where id = :id"
  $pairs = [];
  foreach (array_keys($data) as $k) {
    $pairs[] = $k . "=:" . $k;
  }
  $keyEqualColonKey = implode(',', $pairs);
  $sql = "update $table set $keyEqualColonKey where id=:id";
  $stm = $conn->prepare($sql);
  $result =  $stm->execute($data);
  return $result ? true : false;
}
function updatePassword ($table, $id, $input){

  global $conn;
  $sql = "UPDATE `$table` SET `name` = \'$input\' WHERE `$table`.`id` = $id;";
  $stm = $conn->prepare($sql);
  $result = $stm->execute();
  return $result ? true : false;
}
function delete ($table, $id){
  global $conn;
  $sql = "delete from $table where id=$id";
  $stm = $conn->prepare($sql);
  $result = $stm->execute();
  return $result ? true : false;
}
?>