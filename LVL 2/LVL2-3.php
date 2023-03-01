<?php
    $hobbies = [
        [
            "H001" => "Reading",
            "H002" => "Yoga",
            "H003" => "Shopping",
            "H004" => "Fishing",
            "H005" => "Sleeping"
        ],[
            "H001",
            "H002",
            "H003",
            "H004",
            "H005"
        ]
    ];
    $datas = [
        [
            "id" => "E001",
            "name" => "John Doe",
            "birthdate" => "05-11-1998",
            "gender" => "Male",
            "salary" => 8000000,
            "hobby" => "H001, H003"
        ],[
            "id" => "E002",
            "name" => "Lyra",
            "birthdate" => "13-01-1998",
            "gender" => "Female",
            "salary" => 10650000,
            "hobby" => "H004, H002, H003"
        ],[
            "id" => "E003",
            "name" => "Grace",
            "birthdate" => "21-08-1995",
            "gender" => "F",
            "salary" => 3450000,
            "hobby" => "H003 , H002"
        ],[
            "id" => "E004",
            "name" => "Idris",
            "birthdate" => "21-07-1993",
            "gender" => "M",
            "salary" => 12300000,
            "hobby" => "H001"
        ],[
            "id" => "E005",
            "name" => "Gwen",
            "birthdate" => "05-09-2000",
            "gender" => "F",
            "salary" => 1500000,
            "hobby" => "H005"
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
    <th>Hobby</th>
  </tr>
  <?php
  foreach($datas as $data){
      $gender = ($data['gender'] == 'F') ? 'Female' : 'Male';
      $birthdate = date('d F Y', strtotime($data['birthdate']));
      $salary = "Rp" . number_format($data['salary'], 0,',', '.');
      ?>
    <tr>
        <td><?= $data["id"] ?></td>
        <td><?= $data["name"] ?></td>
        <td><?= $birthdate ?></td>
        <td><?= $gender ?></td>
        <td><?= $salary ?></td>
        <td><?= str_replace($hobbies[1], $hobbies[0], $data['hobby']) ?></td>
    </tr>
  <?php } ?>
</table>

</body>
</html>