<div class="card">
  <div class="card-header bg-primary text-white border-dark"><strong>Data Users</strong></div>
    <div class="card-body">
    <a class="btn btn-primary mb-2" href="?page=users&action=tambah">Tambah</a>
    <table class="table table-bordered" id="myTable">
        <thead>
        <tr>
            <th width="100px">No.</th>
            <th width="150px">Username</th>
            <th width="300px">Password</th>
            <th width="100px">Level</th>
            <th width="80px"></th>
        </tr>
        </thead>
        <tbody>

    <?php
    $i=1;
     $sql = "SELECT*FROM users ORDER BY username ASC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
    ?>
     <tr>
    <td><?php echo $i++; ?></td>
	<td><?php echo $row['username']; ?></td>
	<td><?php echo $row['pass']; ?></td>
    <td><?php echo $row['level']; ?></td>
	<td align="center">
    <a class="btn btn-warning" href="?page=users&action=update&id=<?php echo $row['id']; ?>">
<span class="fas fa-edit"></span>
</a>
<a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=users&action=hapus&id=<?php echo $row['id']; ?>">
<span class="fas fa-times"></span>
</a>
</td>
</tr>
 <?php
     }
     $conn->close();
 ?>


    </tbody>
    </table>
    </div>
    </div>