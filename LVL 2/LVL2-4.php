<?php
$dates = array(
    '26-12-2022' => array(
        'E001' => 'Hadir',
        'E002' => 'Hadir',
        'E003' => 'Sakit',
        'E004' => 'Hadir',
        'E005' => 'Sakit'
    ),
    '27-12-2022' => array(
        'E001' => 'Hadir',
        'E002' => 'Hadir',
        'E003' => 'Sakit',
        'E004' => 'Hadir',
        'E005' => 'Hadir'
    ),
    '28-12-2022' => array(
        'E001' => 'Hadir',
        'E002' => 'Sakit',
        'E003' => 'Kabur',
        'E004' => 'Hadir',
        'E005' => 'Hadir'
    ),
    '29-12-2022' => array(
        'E001' => 'Hadir',
        'E002' => 'Hadir',
        'E003' => 'Hadir',
        'E004' => 'Sakit',
        'E005' => 'Hadir'
    ),
    '30-12-2022' => array(
        'E001' => 'Hadir',
        'E002' => 'Hadir',
        'E003' => 'Hadir',
        'E004' => 'Cuti',
        'E005' => 'Cuti'
    ),
    '31-12-2022' => array(
        'E001' => 'Hadir',
        'E002' => 'Hadir',
        'E003' => 'Cuti',
        'E004' => 'Cuti',
        'E005' => 'Hadir'
    ),
);
$datas = array(
    array(
        "id" => "E001",
        "name" => "John Dea",
        "birthdate" => "05-11-1998",
        "gender" => "M",
        "salary" => 8000000
    ),
    array(
        "id" => "E002",
        "name" => "Lyra",
        "birthdate" => "13-01-1998",
        "gender" => "F",
        "salary" => 10650000
    ),
    array(
        "id" => "E003",
        "name" => "Grace",
        "birthdate" => "21-08-1995",
        "gender" => "F",
        "salary" => 3450000
    ),
    array(
        "id" => "E004",
        "name" => "Idris",
        "birthdate" => "21-07-1993",
        "gender" => "M",
        "salary" => 12300000
    ),
    array(
        "id" => "E005",
        "name" => "Gwen",
        "birthdate" => "05-09-2000",
        "gender" => "F",
        "salary" => 1500000
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
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Salary</th>
        <?php 
        foreach ($dates['date'] as $tanggal) {
                echo '<th>'. $tanggal. '</th>';
        }
        ?>
    </tr>
    <?php
    foreach($datas as $data){
        $gender = ($data["gender"] == 'F') ? 'Female' : 'Male';
        $birthdate = date('d F Y', strtotime($data['birthdate']));
        $salary = "Rp" . number_format($data['salary'], 0,',');
        ?>
    <tr>
        <td><?= $data["id"] ?></td>
        <td><?= $data["name"] ?></td>
        <td><?= $birthdate ?></td>
        <td><?= $gender ?></td>
        <td style="text-align: right;"><?= $salary ?></td>
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