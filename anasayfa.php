<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "style.css">
    <title>Özel Nur Hastanesi</title>
</head>
<body>
    <div class= "adsoyad">
        <h4>Sn. <?php echo $kullanicicek['kullanici_adsoyad'];?></h4>

    </div>
    <div class ="orta_div" id="randevu_div">
    <form action="islem.php" method="post">
       <input type ="date" name="tarih">
       <select name="sehir" class="hastane">
         <option value="İl Seçin">İl Seçin</option>
          <option value="Adana">Adana</option>
          <option value="Adıyaman">Adıyaman</option>
          <option value="AFyonarahisar">Afyonkarahisar</option>
          <option value="Ağrı">Ağrı</option>
          <option value="Amasay">Amasya</option>
          <option value="Ankara">Ankara</option>
          <option value="Antalya">Antalya</option>
          <option value="Artvin">Artvin</option>
          <option value="Aydın">Aydın</option>
          <option value="Balıkesir">Balıkesir</option>
          <option value="Bilecik">Bilecik</option>
          <option value="Bingöl">Bingöl</option>
          <option value="Bitlis">Bitlis</option>
          <option value="Bolu">Bolu</option>
          <option value="Burdur">Burdur</option>
          <option value="Bursa">Bursa</option>
          <option value="Çanakkale">Çanakkale</option>
          <option value="Çankırı">Çankırı</option>
          <option value="Çorum">Çorum</option>
          <option value="Denizli">Denizli</option>
          <option value="Diyarbakır">Diyarbakır</option>
          <option value="Edirne">Edirne</option>
          <option value="Elazığ">Elazığ</option>
          <option value="Erzincan">Erzincan</option>
          <option value="Erzurum">Erzurum</option>
          <option value="Eskişehir">Eskişehir</option>
          <option value="Gazianetep">Gaziantep</option>
          <option value="Giresun">Giresun</option>
          <option value="Gümüşhane">Gümüşhane</option>
          <option value="Hakkari">Hakkâri</option>
          <option value="Hatay">Hatay</option>
          <option value="Isparta">Isparta</option>
          <option value="Mersin">Mersin</option>
          <option value="İstanbul">İstanbul</option>
          <option value="izmir">İzmir</option>
          <option value="Kars">Kars</option>
          <option value="Kastamonu">Kastamonu</option>
          <option value="Kayseri">Kayseri</option>
          <option value="Kırklareli">Kırklareli</option>
          <option value="Kırşehir">Kırşehir</option>
          <option value="Kocaeli">Kocaeli</option>
          <option value="Konya">Konya</option>
          <option value="Kütahya">Kütahya</option>
          <option value="Malatya">Malatya</option>
          <option value="Manisa">Manisa</option>
          <option value="Kahramanmaraş">Kahramanmaraş</option>
          <option value="Mardin">Mardin</option>
          <option value="Muğla">Muğla</option>
          <option value="Muş">Muş</option>
          <option value="Nevşehir">Nevşehir</option>
          <option value="Niğde">Niğde</option>
          <option value="Ordu">Ordu</option>
          <option value="Rize">Rize</option>
          <option value="Sakarya">Sakarya</option>
          <option value="Samsun">Samsun</option>
          <option value="Siirt">Siirt</option>
          <option value="Sinop">Sinop</option>
          <option value="Sivas">Sivas</option>
          <option value="Tekirdağ">Tekirdağ</option>
          <option value="Tokat">Tokat</option>
          <option value="Trabzon">Trabzon</option>
          <option value="Tunceli">Tunceli</option>
          <option value="ŞAnlıurfa">Şanlıurfa</option>
          <option value="Uşak">Uşak</option>
          <option value="Van">Van</option>
          <option value="Yozgat">Yozgat</option>
          <option value="Zongldak">Zonguldak</option>
          <option value="Aksaray">Aksaray</option>
          <option value="Bayburt">Bayburt</option>
          <option value="Karaman">Karaman</option>
          <option value="Kırıkkale">Kırıkkale</option>
          <option value="Batman">Batman</option>
          <option value="Şırnak">Şırnak</option>
          <option value="Bartın">Bartın</option>
          <option value="Ardahan">Ardahan</option>
          <option value="Iğdır">Iğdır</option>
          <option value="Yalova">Yalova</option>
          <option value="Karabük">Karabük</option>
          <option value="Kilis">Kilis</option>
          <option value="Osmaniye">Osmaniye</option>
          <option value="Düzce">Düzce</option>
       </select>
       <select name="kurum" class="kurum">
          <option value="kurum">Kurum Seçiniz</option>
          <option value="SSK">SSK</option>
          <option value="Bağ-Kur">Bağ-Kur</option>
          <option value="Emekli">Emekli</option>
          
       </select>
       <select name="klinik" class="klinik">
          <option value="klinik">Klinik Seçin</option>
          <option value="Dahiliye">Dahiliye</option>
          <option value="Kulak Burun Boğaz">Kulak Burun Boğaz</option>
          <option value="Göz">Göz</option>
          <option value="Ortapedi">Ortapedi</option>
       </select>
       <select name="doktor" class="doktor">
          <option value="doktor">Doktor Seçin</option>
          <option value="Betül Sarı Kalın">Betül Sarı Kalın</option>
          <option value="Burhan Kalın">Burhan Kalın</option>
          <option value="Ceren Özdemir">Ceren Özdemir</option>
          <option value="Gamze Kalın Ünver ">Gamze Kalın Ünver</option>
       </select>
       <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek ['kullanici_id'];?>">
       <button name="randevu_kaydet">Randevu Kaydet</button>
       </form>

 

    </div>
    <div class ="orta_div" id="ailehekimi_div">
    <h3>Aile Hekimi</h3>
        <p>Aile Hekiminize Ait Çalışma Saatleriniz:
        <br> Sağlık ocağınızda 08.00'da aile hekiminiz mesaiye başlar ve akşam 17.00'ye kadar hizmet vermektedir.
        <br>

Sağlık ocağınızın öğle arası vakti:
<br>

Sağlık ocağınız öğle arası 12.00 ile 13.00 arasındadır.</p>
    </div>
</body>
</html>