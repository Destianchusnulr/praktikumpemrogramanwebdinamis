<?php
    echo "
    <h2>User</h2>
    <form method=POST action=form_user.php>
        <input type=submit value='Tambah User'>
    </form>
    <table border='1'>
        <tr>
            <th>No</th> //menampilkan no
            <th>Username</th> //menampilkan user
            <th>NamaLengkap</th> //menampilkan nama lengkap
            <th>Email</th>menampilkan emai
            <th>Aksi</th>
        </tr>";
    include "koneksi.php";
    $sql="select * from users order by id_user";
    $tampil = mysqli_query($conn, $sql);
    if (mysqli_num_rows($tampil) > 0) {
        $no=1;
        while ($r = mysqli_fetch_array($tampil))
        {
            echo "
            <tr>
                <td>$no</td>
                <td>$r[id_user]</td>
                <td>$r[nama_lengkap]</td>
                <td>$r[email]</td>
                <td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
            </tr>";
            $no++;
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
?>
