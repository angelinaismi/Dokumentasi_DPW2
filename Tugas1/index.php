<?php


class animal {
    public $jumlah_kaki,$bisa_terbang;
}

class Rubah extends animal
{
    function bersuara()
    {
        return "Auuuu";
    }
}

class Bebek extends animal
{
    function bersuara()
    {
        return "kwek kwek";
    }
}

class kucing extends animal
{
    function bersuara()
    {
        return "meong meong";
    }
}

class kambing extends animal
{
    function bersuara()
    {
        return "mbek mbek";
    }
}

echo "animal <br>";
echo "<hr>";

// Rubah
$rubi = new rubah;
$rubi-> jumlah_kaki = 4;
$rubi-> bisa_terbang = "tidak bisa terbang";

echo "rubi adalah rubah yang liar dan ganas <br>";
echo "punya kaki sebanyak : " . $rubi-> jumlah_kaki. "<br>";
echo $rubi->bisa_terbang. "<br>";
echo "suaranya : " . $rubi->bersuara() . "<br>";

echo "<hr>";

// Bebek
$duckie = new Bebek;
$duckie-> jumlah_kaki = 2;
$duckie-> bisa_terbang = "tidak bisa terbang";

echo "duckie adalah seekor bebek yang lucu <br>";
echo "punya kaki sebanyak : " . $duckie-> jumlah_kaki. "<br>";
echo $duckie->bisa_terbang. "<br>";
echo "suaranya : " . $duckie->bersuara() . "<br>";

echo "<hr>";
 
// Kucing
$katie = new Kucing;
$katie-> jumlah_kaki = 4;
$katie-> bisa_terbang = "tidak bisa terbang";

echo "katie adalah seekor kucing yang menggemaskan <br>";
echo "punya kaki sebanyak : " .  $katie-> jumlah_kaki. "<br>";
echo $katie->bisa_terbang. "<br>";
echo "suaranya : " . $katie-> bersuara() . "<br>";

echo "<hr>";

// Kambing
$goti = new Kambing;
$goti-> jumlah_kaki = 4;
$goti-> bisa_terbang = "tidak bisa terbang";

echo "goti adalah seekor kambing <br>";
echo "punya kaki sebanyak : " . $goti-> jumlah_kaki. "<br>";
echo $goti-> bisa_terbang. "<br>";
echo "suaranya : " . $goti-> bersuara() . "<br>";

echo "<hr>";

?>