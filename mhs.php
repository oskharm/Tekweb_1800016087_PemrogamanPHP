<html>
    <head>
        <style>
            table, tr, td { border: 1px solid;
                            border-collapse: collapse;             
            }
         </style>
    </head>
    <body>
        <table style="width:50%">
            <tr> 
                <td>NIM</td>
                <td><?php echo $_POST['nim']; ?>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $_POST['nama'];?>
            </tr>
            <tr> 
                <td>Jenis kelamin</td>
                <td><?php echo $_POST['kelamin'];?>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php  echo $_POST['alamat'];?>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td><?php echo $_POST['prodi'];?>
            </tr>
            <tr>
                <td>Bahasa Pemrogaman yang disukai</td>
                <td><?php  $bahasapemrogaman = $_POST['bahasapemrogaman'];
					       foreach ($bahasapemrogaman as $bhs) {
                             echo "$bhs<br>";
                           }
                    ?>
            </tr>
            </table>
    </body>
</html>