 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Upload Image File</title>
 </head>
 <!--kunci agar file bisa terbaca secara binery atau bukan hanya sekedar tulisan saja maka gunakan enctype-->
 <body>
     <form method="POST" action="target.php" enctype="multipart/form-data">
         <label>Browse Image File</label>
         <input type='file' name="IMGFILE" accept=".jpg, .png"></input>
        <button type="submit" name="KIRIMFILE">Upload Image File</button>
    </form>
<!--accept digunakan sebagai filter agar tidak semua jenis file bisa mengakses-->
 </body>
 </html>