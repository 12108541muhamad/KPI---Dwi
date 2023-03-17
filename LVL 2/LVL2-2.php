<?php
    $datas = [
        [
            "id" => "E001",
            "name" => "John Doe",
            "birthdate" => "05-11-1998",
            "gender" => "Male",
            "salary" => 8000000
        ],[
            "id" => "E002",
            "name" => "Lyra",
            "birthdate" => "13-01-1998",
            "gender" => "Female",
            "salary" => 10650000
        ],[
            "id" => "E003",
            "name" => "Grace",
            "birthdate" => "21-08-1995",
            "gender" => "F",
            "salary" => 3450000
        ],[
            "id" => "E004",
            "name" => "Idris",
            "birthdate" => "21-07-1993",
            "gender" => "M",
            "salary" => 12300000
        ],[
            "id" => "E005",
            "name" => "Gwen",
            "birthdate" => "05-09-2000",
            "gender" => "F",
            "salary" => 1500000
        ],
    ];
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<table style="width:100%">
  <tr>
    <th>EmployeeID</th>
    <th>Name</th>
    <th>Birthdate</th>
    <th>Gender</th>
    <th>Salary</th>
  </tr>
  <?php
  foreach($datas as $data){
    $gender = ($data["gender"] == 'F') ? 'Female' : 'Male';
    $birthdate = date('d F Y', strtotime($data['birthdate']));
    $salary = "Rp" . number_format($data['salary'], 0,',', '.');
  ?>
  <tr>
    <td><?= $data["id"] ?></td>
    <td><?= $data["name"] ?></td>
    <td><?= $birthdate ?></td>
    <td><?= $gender ?></td>
    <td style="text-align: right;"><?= $salary ?></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>