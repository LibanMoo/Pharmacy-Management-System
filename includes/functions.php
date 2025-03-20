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
function update($table, $data, $id)
{
  global $conn;

  // "update tablename set column=:column,column1=:column1 ... where id = :id"
  $pairs = [];
  foreach (array_keys($data) as $k) {
    $pairs[] = $k . "=:" . $k;
  }
  $keyEqualColonKey = implode(',', $pairs);
  // echo $keyEqualColonKey;
  $sql = "update $table set $keyEqualColonKey where admin_id=:id";
  $stm = $conn->prepare($sql);
  $data ['id'] = $id;
  $result =  $stm->execute($data);
  return $result ? true : false;
}
// function update_admin ($table, $data){
//   // foreach (array_keys($data) as $k){
//   //   $pairs [] = $k . "=:" . $k;
//   // }
//   // $keyEqualColonKey = implode(',', $pairs);

//   $sql = "update $table set (admin_ where admin_id=:id";

// }
function update_where($table, $data, $where) {
  // Ensure we have data to update
  global $conn;
  if (empty($data) || empty($where)) {
      return false;
  }

  // Create SET part of SQL dynamically
  $setParts = [];
  $values = [];

  foreach ($data as $column => $value) {
      $setParts[] = "`$column` = ?";
      $values[] = $value;
  }

  $setClause = implode(", ", $setParts);

  // Create WHERE clause dynamically
  $whereParts = [];
  $whereValues = [];

  foreach ($where as $column => $value) {
      $whereParts[] = "`$column` = ?";
      $whereValues[] = $value;
  }

  $whereClause = implode(" AND ", $whereParts);

  // Combine values for binding
  $values = array_merge($values, $whereValues);

  // Prepare SQL
  $sql = "UPDATE `$table` SET $setClause WHERE $whereClause";

  $stmt = $conn->prepare($sql);
  
  // Dynamically bind parameters
  $types = str_repeat("s", count($values)); // Generate type string
$params = array_merge([$types], $values); // Merge types with values

// Convert values into references
$refs = [];
foreach ($params as $key => $value) {
    $refs[$key] = &$params[$key];
}

// Use call_user_func_array to bind parameters correctly
$stmt = call_user_func_array([$stmt, "bind_param"], $refs);
  
$stmt->excute();

  // Execute and check success
  // if ($stmt->execute()) {
  //     return true;
  // } else {
  //     return false;
  // }
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