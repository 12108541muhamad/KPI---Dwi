<?php
$datas = [
    [
        "id" => "E001",
        "name" => "John Dea",
        "birthdate" => "05-11-1998",
        "gender" => "M",
        "salary" => 8000000,
        "attendance" => [
            "26-12-2022" => "Hadir",
            "27-12-2022" => "Hadir",
            "28-12-2022" => "Hadir",
            "29-12-2022" => "Hadir",
            "30-12-2022" => "Hadir",
            "31-12-2022" => "Hadir"
        ]
    ],
    [
        "id" => "E002",
        "name" => "Lyra",
        "birthdate" => "13-01-1998",
        "gender" => "F",
        "salary" => 10650000,
        "attendance" => [
            "26-12-2022" => "Hadir",
            "27-12-2022" => "Hadir",
            "28-12-2022" => "Sakit",
            "29-12-2022" => "Hadir",
            "30-12-2022" => "Hadir",
            "31-12-2022" => "Hadir"
        ]
    ],
    [
        "id" => "E003",
        "name" => "Grace",
        "birthdate" => "21-08-1995",
        "gender" => "F",
        "salary" => 3450000,
        "attendance" => [
            "26-12-2022" => "Sakit",
            "27-12-2022" => "Sakit",
            "28-12-2022" => "Kabur",
            "29-12-2022" => "Hadir",
            "30-12-2022" => "Hadir",
            "31-12-2022" => "Cuti"
        ]
    ],
    [
        "id" => "E004",
        "name" => "Idris",
        "birthdate" => "21-07-1993",
        "gender" => "M",
        "salary" => 12300000,
        "attendance" => [
            "26-12-2022" => "Hadir",
            "27-12-2022" => "Hadir",
            "28-12-2022" => "Hadir",
            "29-12-2022" => "Sakit",
            "30-12-2022" => "Cuti",
            "31-12-2022" => "Cuti"
        ]
    ],
    [
        "id" => "E005",
        "name" => "Gwen",
        "birthdate" => "05-09-2000",
        "gender" => "F",
        "salary" => 1500000,
        "attendance" => [
            "26-12-2022" => "Sakit",
            "27-12-2022" => "Hadir",
            "28-12-2022" => "Hadir",
            "29-12-2022" => "Hadir",
            "30-12-2022" => "Cuti",
            "31-12-2022" => "Hadir"
        ]
    ]
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
        <?php 
        foreach ($datas[0]['attendance'] as $tanggal => $keterangan) {
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
            foreach ($data['attendance'] as $keterangan) {
                echo '<td>'.$keterangan.'</td>';
            }
            ?> 
    </tr>
  <?php } ?>
</table>

</body>
</html>