<?php

include "addition.php";

//  Array of test data
$tests = [
    [
        's1' => '999',
        's2' => '100',
        'result' => '1099',
    ],
    [
        's1' => '001',
        's2' => '100',
        'result' => 'error',
    ],
    [
        's1' => '100000000000000000000000000000',
        's2' => '100000000000000000000000000000',
        'result' => '200000000000000000000000000000',
    ],
    [
        's1' => '111111111111111111111111111111',
        's2'     => '888888888888888888888888888889',
        'result' => '1000000000000000000000000000000',
    ],
];

foreach ($tests as $key => $test){

    $result = addition($test['s1'], $test['s2']);

    printf(
        "%s +\r\n%s =\r\n%s\r\n%s\r\n--------------------------\r\n\r\n",
        $test['s1'],
        $test['s2'],
        $result,
        ($test['result'] == $result) ? "GOOD " : "BAD "
    );
}
