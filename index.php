<!DOCTYPE html>
<html>
<head>

</style>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <center><title>CRUD BIODATA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<h2>CRUD BIODATA</h2>
	<br/>
	<b><a href="tambah.php">+ TAMBAH MAHASISWA</a></center></b>
	<br/>
	<br/>
	<div class="container">
      <div class="row"> 
        <table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th colspan="2">Opsi</th>
			
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from biodata");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['email']; ?></td>
				
					<?php echo "<td><a class='btn btn-danger' href='edit.php?id=".$d['id']."'>EDIT</a></td>";?>
					<?php echo "<td><a class='btn btn-danger' data-toggle='modal' data-target='#konfirmasi_hapus' data-href='hapus.php?id=".$d['id']."'>HAPUS</a></td>"; 
					?>
			</tr>
			
		<?php
		$no++;			
		}
		
		?>
	</table>
	</div>
	</div>
	
	 <div class="modal fade" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <b>Anda yakin ingin menghapus data ini ?</b><br><br>
                    <a class="btn btn-danger btn-ok"> Hapus</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                </div>
            </div>
        </div>
    </div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
	
	 //Hapus Data

    $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });

  </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>