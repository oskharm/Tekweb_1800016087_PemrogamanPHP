<html>
    <head>
        <style>
            table, tr, td { border: 1px solid;
                            border-collapse: collapse;             
            }
         </style>
    </head>
    <body>
        <table style="width:100%">
            <tr> 
                <td>NIM</td>
                <td><?php echo $_POST['nim']."br>"; ?>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $_POST['nama']."<br>";?>
            </tr>
            <tr> 
                <td>Jenis kelamin</td>
                <td><?php echo $_POST['kelamin']."<br>";?>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php  echo $_POST['alamat']."<br>";?>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td><?php echo $_POST['prodi']."<br>";?>
            </tr>
            <tr>
                <td>Bahasa Pemrogaman yang disukai</td>
                <td><?php  echo $_POST['bahasapemrogaman']."<br>";?>
            </tr>
            </table>
    </body>
</html>