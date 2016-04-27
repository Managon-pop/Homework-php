<?php

$window = [];

$v = 0;

$z = 0;

for ($i=1; $i <= 9; $i++) { 
	for ($j=0; $j <= 9; $j++) { 
		$a = 1000*$i;
		$b = 100*$j;
		$c = 10*$j;
		$d = $i;
		$res = $a+$b+$c+$d;
		if(($a+$b+$c+$d) % 11 === 0){
			$window[$z] = $res;
			$z++;
			echo "  $res\n";
			if($z === 90){
				echo "+"." $res\n";
				echo "------------\n";
			}
		}
	}
}


for ($s=0; $s < $z; $s++) { 
	$v += $window[$s];
}
echo "$v\n";