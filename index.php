<?php include("component/header.php"); ?>
<?php
$dataSiswa = [
    [
        "siswa_id" => "855212",
        "siswa" => "Brama",
        "Kelas" => "XI-PPLG1",
        "Jurusan" => "PPLG",
        "Kehadiran" => "Hadir"
    ],
    [
        "siswa_id" => "855212",
        "siswa" => "Soward",
        "Kelas" => "XI-PPLG1",
        "Jurusan" => "PPLG",
        "Kehadiran" => "Tidak"
    ],
];
?>
<!-- main content start -->
<div class="main-content">
    <div class="col-xxl-8">
        <div class="panel">
            <div class="panel-header">
                <h5>Daftar Siswa</h5>
                <div id="tableSearch"></div>
            </div>
            <div class="panel-body">
                <table class="table table-dashed recent-order-table" id="myTable">
                    <thead>
                        <tr>
                            <th>Siswa ID</th>
                            <th>Siswa</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Kehadiran</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataSiswa as $data) { ?>
                        <tr>
                            <td><?php echo($data['siswa_id']); ?></td>
                            <td><?php echo($data['siswa']); ?></td>
                            <td><?php echo($data['Kelas']); ?></td>
                            <td><?php echo($data['Jurusan']); ?></td>
                            <td><span class="badge <?php echo $data['Kehadiran'] == 'Hadir' ? 'bg-success' : 'bg-warning'; ?>"><?php echo $data['Kehadiran']; ?></span></td>
                            <td>
                                <div class="btn-box">
                                    <button><i class="fa-light fa-eye"></i></button>
                                    <button><i class="fa-light fa-pen"></i></button>
                                    <button><i class="fa-light fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
</div>

<!-- footer start -->
<?php include("component/footer.php"); ?>