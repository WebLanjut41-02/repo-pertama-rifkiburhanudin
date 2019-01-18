<html>
<head> 
<title>Menghitung Berat Badan Ideal</title>
</head>
<body>
   <form method="post">
    <h4>Menghitung Berat Badan Ideal</h4>
      <table>
         <tr>
              <td>Tinggi Badan</td>
              <td>:</td>
              <td><input type="text"  name="tingban" size="10"> cm</td> 
         </tr> 
          <tr>
              <td>berat Badan</td>
              <td>:</td>
              <td><input type="text"  name="berban" size="10"> km</td> 
         </tr> 
         <tr>
              <td>jenis kelamin</td>
              <td>:</td>
              <td><input type="radio"  name="jenkel" value="laki-laki">laki-laki</td>
              <td><input type="radio"  name="jenkel" value="perempuan">perempuan</td> 
         </tr> 
          <tr>
              <td></td>
              <td></td>
              <td><input type="submit" name="submit" value="hitung"></td> 
         </tr> 
      </table>
    </form>
</body>
</html>

<?php 
if(isset($_POST['submit'])){
  $tingban = $_POST['tingban'];
  $berban = $_POST['berban'];
  $jenkel = $_POST['jenkel'];
  $bbn = $tingban/100;
  $bbi = $bbn/($bbn*$bbn);

echo "$tingban<br>";
echo "$berban<br>";
echo "$jenkel<br>";
echo "jadi berat badan ideal : $bbi";
}

class jumlah{
  public $tingban;
  public $berban;
  public $jenkel;

  function tampil($tingban,$berban,$jenkel){
    echo "tinggi :".$tingban"<br>";
    echo "berat :".$berban"<br>";
    echo "kelamin :".$jenkel"<br>";
  }
}

 ?>