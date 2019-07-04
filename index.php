<html>
<head>
<title>Sudoku Generator Script :: Written By Kheme Omuta</title>
</head>
<body>
<?php
$r1=array(0,0,0,0,0,0,0,0,0);
$r2=array(0,0,0,0,0,0,0,0,0);
$r3=array(0,0,0,0,0,0,0,0,0);
$r4=array(0,0,0,0,0,0,0,0,0);
$r5=array(0,0,0,0,0,0,0,0,0);
$r6=array(0,0,0,0,0,0,0,0,0);
$r7=array(0,0,0,0,0,0,0,0,0);
$r8=array(0,0,0,0,0,0,0,0,0);
$r9=array(0,0,0,0,0,0,0,0,0);

$end=0;$b=0;$a;$c=0;

function sot($a,$c) {if (in_array($c,$a)) {return 1;} else {return 0;}}

function ful($a) {if (in_array(0,$a)) {return 1;} else {return 0;}}

function sor($a,$b) {
global $r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9;--$b;
if ($r1[$b]==$a || $r2[$b]==$a || $r3[$b]==$a || $r4[$b]==$a || $r5[$b]==$a || $r6[$b]==$a || $r7[$b]==$a || $r8[$b]==$a || $r9[$b]==$a) {return 1;}
else {return 0;}
}


while (ful($r1)!=0) {
$a=rand(1,9);
if (sot($r1,$a)==0) {$r1[$c]=$a;$c++;}
}
$c=0;

while (ful($r2)!=0) {
$a=rand(1,9);
if (sot($r2,$a)==0 && $r1[$c]!=$a) {$r2[$c]=$a;$c++;}
}
$c=0;

while (ful($r3)!=0) {
$a=rand(1,9);
if (sot($r3,$a)==0 && $r1[$c]!=$a && $r2[$c]!=$a) {$r3[$c]=$a;$c++;}
}
$c=0;

while (ful($r4)!=0) {
$a=rand(1,9);
if (sot($r4,$a)==0 && $r1[$c]!=$a && $r2[$c]!=$a && $r3[$c]!=$a) {$r4[$c]=$a;$c++;}
}
$c=0;

while (ful($r5)!=0) {
$a=rand(1,9);
if (sot($r5,$a)==0 && $r1[$c]!=$a && $r2[$c]!=$a && $r3[$c]!=$a && $r4[$c]!=$a) {$r5[$c]=$a;$c++;}
}
$c=0;

while (ful($r6)!=0) {
$a=rand(1,9);
if (sot($r6,$a)==0 && $r1[$c]!=$a && $r2[$c]!=$a && $r3[$c]!=$a && $r4[$c]!=$a && $r5[$c]!=$a) {$r6[$c]=$a;$c++;}
}
$c=0;

while (ful($r7)!=0) {
$a=rand(1,9);
if (sot($r7,$a)==0 && $r1[$c]!=$a && $r2[$c]!=$a && $r3[$c]!=$a && $r4[$c]!=$a && $r5[$c]!=$a && $r6[$c]!=$a) {$r7[$c]=$a;$c++;}
}
$c=0;

while (ful($r8)!=0) {
$a=rand(1,9);
if (sot($r8,$a)==0 && $r1[$c]!=$a && $r2[$c]!=$a && $r3[$c]!=$a && $r4[$c]!=$a && $r5[$c]!=$a && $r6[$c]!=$a && $r7[$c]!=$a) {$r8[$c]=$a;$c++;}
}
$c=0;

while (ful($r9)!=0) {
$a=rand(1,9);
if (sot($r9,$a)==0 && $r1[$c]!=$a && $r2[$c]!=$a && $r3[$c]!=$a && $r4[$c]!=$a && $r5[$c]!=$a && $r6[$c]!=$a && $r7[$c]!=$a && $r8[$c]!=$a) {$r9[$c]=$a;$c++;}
}
$c=0;

//while (ful($r2)!=0) {
//$a2=rand(1,9);
//$sot=sot($r2,$a2);
//$sor=sor($a2,$c);
//echo "sot: $sot sor: $sor rand: $a2 col: $c<br>";
//if ($sot==0 && $sor==0) {$r2[$c]=$a2;$c++;}
//}
//$c=0;

//while (ful($r3)!=0) {
//$a=rand(1,9);
//if (sot($r3,$a)==0 && sor($a,$c)==0) {$r3[$c]=$a;$c++;}
//}
//$c=0;

//while (ful($r4)!=0) {
//$a=rand(1,9);
//if (sot($r4,$a)==0 && sor($a,$c)==0) {$r4[$c]=$a;$c++;}
//}
//$c=0;

//while (ful($r5)!=0) {
//$a=rand(1,9);
//if (sot($r5,$a)==0 && sor($a,$c)==0) {$r5[$c]=$a;$c++;}
//}
//$c=0;

//while (ful($r6)!=0) {
//$a=rand(1,9);
//if (sot($r6,$a)==0 && sor($a,$c)==0) {$r6[$c]=$a;$c++;}
//}
//$c=0;

//while (ful($r7)!=0) {
//$a=rand(1,9);
//if (sot($r7,$a)==0 && sor($a,$c)==0) {$r7[$c]=$a;$c++;}
//}
//$c=0;

//while (ful($r8)!=0) {
//$a=rand(1,9);
//if (sot($r8,$a)==0 && sor($a,$c)==0) {$r8[$c]=$a;$c++;}
//}
//$c=0;

//while (ful($r9)!=0) {
//$a=rand(1,9);
//if (sot($r9,$a)==0 && sor($a,$c)==0) {$r9[$c]=$a;$c++;}
//}

echo "<p>&nbsp;</p>";

for ($c=0;$c<9;$c++) {echo "$r1[$c] ";}echo "<br>";
for ($c=0;$c<9;$c++) {echo "$r2[$c] ";}echo "<br>";
for ($c=0;$c<9;$c++) {echo "$r3[$c] ";}echo "<br>";
for ($c=0;$c<9;$c++) {echo "$r4[$c] ";}echo "<br>";
for ($c=0;$c<9;$c++) {echo "$r5[$c] ";}echo "<br>";
for ($c=0;$c<9;$c++) {echo "$r6[$c] ";}echo "<br>";
for ($c=0;$c<9;$c++) {echo "$r7[$c] ";}echo "<br>";
for ($c=0;$c<9;$c++) {echo "$r8[$c] ";}echo "<br>";
for ($c=0;$c<9;$c++) {echo "$r9[$c] ";}echo "<br>";

?>
</body>
