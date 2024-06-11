<?php 

$user = array();
$ambil = koneksi()->query("SELECT * FROM admin");
while($pecah = $ambil->fetch_assoc()) 
{
    $user[] = $pecah;
}


?>


<div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Admin</b></h5>
</div>

<div class="card shadow bg-white">
    <div class="card-body">
        <table class="table table-boardered table-hover table-striped">
            <thead>
            
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <?php foreach ($user as $key => $value): ?>
            <tbody>
          
                <th width="50"><?php echo $key+1; ?></th>
                <th><?php echo $value['username']; ?></th>
                <th><?php echo $value['email']; ?></th>
                <th class="text-center" width="150">
                    <a href="" class="btn btn-sm btn-info">Hapus</a>
                </th>
                
             
            </tbody>
            <?php endforeach ?>
        </table>
    </div>