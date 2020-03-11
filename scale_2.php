<?php

$weights = array_map('intval', explode(',', $argv[3]));
rsort($weights);
$weight1 = $argv[1];
$weight2 = $argv[2];

if ($weight1 == $weight2) {
    echo "In balans\n";
}
else {
    $lowest_weight = min($weight1, $weight2);
    $highest_weight = max($weight1, $weight2);
    $difference = ($highest_weight - $lowest_weight);
}
	$required_weight = [];
    foreach ($weights as $weight) {
        if ($weight <= $difference) {
			$required_weight[] = $weight;
			$difference = $difference - $weight;
		}
	}
    if ($difference != 0) {
		echo "Niet in balans\n";
	} 
    else {
		echo implode(", ", $required_weight) . "\n"; 
    }
