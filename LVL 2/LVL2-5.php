<?php
$datas = [
    [
        "id" => "E001",
        "name" => "John Doe",
        "absen" => [
            ["status" => "Hadir"],
            ["status" => "Hadir"],
            ["status" => "Hadir"],
            ["status" => "Hadir"],
            ["status" => "Hadir"],
            ["status" => "Hadir"],
        ]
    ],
    [
        "id" => "E002",
        "name" => "Lyra",
        "absen" => [
            ["status" => "Hadir"],
            ["status" => "Hadir"],
            ["status" => "Sakit"],
            ["status" => "Hadir"],
            ["status" => "Hadir"],
            ["status" => "Hadir"],
        ]
    ],
    [
        "id" => "E003",
        "name" => "Grace",
        "absen" => [
            ["status" => "Sakit"],
            ["status" => "Sakit"],
            ["status" => "Kabur"],
            ["status" => "Hadir"],
            ["status" => "Hadir"],
            ["status" => "Cuti"],
        ]
    ],
    [
        "id" => "E004",
        "name" => "Idris",
        "absen" => [
            ["status" => "Hadir"],
            ["status" => "Hadir"],
            ["status" => "Hadir"],
            ["status" => "Sakit"],
            ["status" => "Cuti"],
            ["status" => "Cuti"],
        ]
    ],
    [
        "id" => "E005",
        "name" => "Gwen",
        "absen" => [
            ["status" => "Sakit"],
            ["status" => "Hadir"],
            ["status" => "Hadir"],
            ["status" => "Hadir"],
            ["status" => "Cuti"],
            ["status" => "Hadir"],
        ]
    ],
];
$rekap = [];

foreach ($datas as $data) {
    $name = $data['name'];
    $id = $data['id'];
    $hadir = 0;
    $sakit = 0;
    $cuti = 0;
    $kabur = 0;
    foreach ($data['absen'] as $absen) {

        if ($absen['status'] == 'Hadir') {
            $hadir++;
        }elseif ($absen['status'] == 'Cuti'){
            $cuti++;
        }elseif ($absen['status'] == 'Sakit'){
            $sakit++;
        }elseif ($absen['status'] == 'Kabur'){
            $kabur++;
        }
    }
    $rekap[$id] = [
        'name' => $name,
        'Hadir' => $hadir,
        'Cuti' => $cuti,
        'Sakit' => $sakit,
        'Kabur' => $kabur
    ];
}

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
        <th>Hadir</th>
        <th>Sakit</th>
        <th>Cuti</th>
        <th>Kabur</th>
    </tr>
    <?php
    foreach($rekap as $id => $jumlah){
        ?>
  <tr>
      <td><?= $id ?></td>
      <td><?= $jumlah['name'] ?></td>
      <td><?= $jumlah["Hadir"] ?></td>
      <td><?= $jumlah["Sakit"]?></td>
      <td><?= $jumlah["Cuti"]?></td>
      <td><?= $jumlah["Kabur"]?></td>
    </tr>
  <?php } ?>
</table>

</body>
</html>