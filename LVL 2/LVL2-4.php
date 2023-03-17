<?php
$dates = array(
    'date' => [
        "26-12-2022",
        "27-12-2022",
        "28-12-2022",
        "29-12-2022",
        "30-12-2022",
        "31-12-2022"
    ],
    'E001' => array(
        'Hadir',
        'Hadir',
        'Hadir',
        'Hadir',
        'Hadir',
        'Hadir'
    ),
    'E002' => array(
        'Hadir',
        'Hadir',
        'Sakit',
        'Hadir',
        'Hadir',
        'Hadir'
    ),
    'E003' => array(
        'Sakit',
        'Sakit',
        'Kabur',
        'Hadir',
        'Hadir',
        'Cuti'
    ),
    'E004' => array(
        'Hadir',
        'Hadir',
        'Hadir',
        'Sakit',
        'Cuti',
        'Cuti'
    ),
    'E005' => array(
        'Sakit',
        'Hadir',
        'Hadir',
        'Hadir',
        'Cuti',
        'Hadir'
    ),
);
$datas = array(
    array(
        "id" => "E001",
        "name" => "John Dea",
    ),
    array(
        "id" => "E002",
        "name" => "Lyra",

    ),
    array(
        "id" => "E003",
        "name" => "Grace",
    ),
    array(
        "id" => "E004",
        "name" => "Idris",
    ),
    array(
        "id" => "E005",
        "name" => "Gwen",
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
        <?php 
        foreach ($dates['date'] as $tanggal) {
                echo '<th>'. $tanggal. '</th>';
        }
        ?>
    </tr>
    <?php
    foreach($datas as $data){
        ?>
    <tr>
      <td><?= $data["id"] ?></td>
      <td><?= $data["name"] ?></td>
      <?php 
        foreach ($dates[$data['id']] as $keterangan) {
            echo '<td>'.$keterangan.'</td>';
        }
        ?>
    </tr>
  <?php } ?>
</table>

</body>
</html>