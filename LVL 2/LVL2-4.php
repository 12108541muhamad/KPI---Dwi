<?php
$datas = array(
    array(
        "id" => "E001",
        "name" => "John Dea",
        26 => "Hadir",
        27 => "Hadir",
        28 => "Hadir",
        29 => "Hadir",
        30 => "Hadir",
        31 => "Hadir"
    ),
    array(
        "id" => "E002",
        "name" => "Lyra",
        26 => "Hadir",
        27 => "Hadir",
        28 => "Sakit",
        29 => "Hadir",
        30 => "Hadir",
        31 => "Hadir"
    ),
    array(
        "id" => "E003",
        "name" => "Grace",
        26 => "Sakit",
        27 => "Sakit",
        28 => "Kabur",
        29 => "Hadir",
        30 => "Hadir",
        31 => "Cuti"
    ),
    array(
        "id" => "E004",
        "name" => "Idris",
        26 => "Hadir",
        27 => "Hadir",
        28 => "Hadir",
        29 => "Sakit",
        30 => "Cuti",
        31 => "Cuti"
    ),
    array(
        "id" => "E005",
        "name" => "Gwen",
        26 => "Sakit",
        27 => "Hadir",
        28 => "Hadir",
        29 => "Hadir",
        30 => "Cuti",
        31 => "Kabur"
    )
);
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
        <th>26-12-2022</th>
        <th>27-12-2022</th>
        <th>28-12-2022</th>
        <th>29-12-2022</th>
        <th>30-12-2022</th>
        <th>31-12-2022</th>
    </tr>
    <?php
    foreach($datas as $data){
        ?>
  <tr>
      <td><?= $data["id"] ?></td>
      <td><?= $data["name"] ?></td>
      <td><?= $data["26"] ?></td>
      <td><?= $data["27"]?></td>
      <td><?= $data["28"]?></td>
      <td><?= $data["29"]?></td>
      <td><?= $data["30"]?></td>
      <td><?= $data["31"]?></td>
    </tr>
  <?php } ?>
</table>

</body>
</html>