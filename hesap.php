<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özel Nur Hastanesi</title>
</head>
<body>
    <div class="hesabim_content">
        <div class="label">
            <label>ADINIZ SOYADINIZ</label>
            <input type="text" placeholder="<?php echo $kullanicicek['kullanici_adsoyad'];?>">

        </div><br>
        
        <div class="label">
            <label>TC NO</label>
            <input type="text" placeholder="<?php echo $kullanicicek['kullanici_tc'];?>">

        </div><br>
      



<label for="aktivite"><em>*</em> Klinik Muayene Ücretlerimizin Bilgilendirilmesi:</label> <select name="aktivite" id="aktivite">
<option selected="selected" value="1">Klinik Muayene Ücretlerimizin Bilgilendirilmesi:</option>
<option value="2">Göz Muayenesi Ücreti: 100 TL</option>
<option value="3">Dahiliye veya Kulak Burun Boğaz Muayenesi Ücreti: 150 TL</option>
<option value="4">Ortapedi Muayenesi Ücreti: 200 TL</option>
</select>
</li>

         <br>
         <br>
    </div>
    
</body>
</html>