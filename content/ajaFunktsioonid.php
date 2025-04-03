<?php
echo "<h2>Aja funktsioonid</h2>";
date_default_timezone_set('Europe/Tallinn');
// kui timezone ei ole määratud, siis näitab serveri-localhosti aeg
echo "<br>";
echo "time() - aeg sekundides". time();
echo "<br>";
echo "date()  - ". date('d.m.Y G:i:s', time());
echo "<br>";
echo "date('d.m.Y G:i:s', time())";
echo "<br>";
echo "d- päev 01...31";
echo "<br>";
echo "m- kuu 01...12";
echo "<br>";
echo "Y - aasta - neljakohane arv";
echo "<br>";
echo "G - 24-tundiline formaat";
echo "<br>";
echo "i- minutid 0-59";
echo "<br>";
echo date('Y');
echo "<br>";
echo "<strong>Tehted kuupäevaga :</strong>";
echo "<br>";
echo "+1 min = ".date('d.m.Y G:i:s', time()+60);
echo "<br>";
echo "+1 tund = ".date('d.m.Y G:i:s', time()+60*60);
echo "<br>";
echo "+24 tund = ".date('d.m.Y G:i:s', time()+60*60*24);
echo "<br>";
echo "<strong>Kuupäeva genireerimine :</strong>";
echo "<br>";
echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
echo "<br>";
echo "Minu sünnipäev: ";
$s=mktime(5,5,10,7,4,1976);
echo date('d.m.Y G:i:s', $s);
//4 hooaja pilti - kevad, suvi, sygis, talv
echo "<br>";
?>
<div id="hooaeg">
    <h2>Kuvada hooajapilti(kevad, suvi, sygis, talv)
    vastavalt tänasele kuupäevale</h2>
    <?php
    $tana=new DateTime();

    echo "Täna on (m-d-Y)". $tana->format('m-d-Y');
    echo "<br>";
    //hooaja punktid
    $kevad=new DateTime('March 20');
    $suvi=new DateTime('June 21');
    $sygis=new DateTime('September 22');
    $talv=new DateTime('December 22');

    switch (true){
        //kevad
        case $tana>=$kevad && $tana<$suvi:
            echo "Kevad";
            $pilt="content/img/kevad.jpg";
            break;
        //suvi
        case $tana>=$suvi && $tana<$sygis:
            echo "Suvi";
            $pilt="content/img/suvi.jpg";
            break;
    }
    ?>
    <br>
    <img src="<?=$pilt?>" alt="hooaja pilt" width="100px">
    //Ülesanded
    /*1.
    <h2>Massivi abil näidata kuu nimega tänases kuupäevas.</h2>
    $kuud=array(1=>'jaanuar', 'veebruar', )
    $paev=date('d');
    $year=date('Y');
    $kuu=$kuud[date('n')];
    echo ??? .' '.
    */
    //2. Leia mitu päeva on koolivaheajani - 16.06.2025 (kasuta date_diff funktsiooni)
   // 3. Oma näide, mis arvutab midagi ajafunktsiooniga.



</div>


