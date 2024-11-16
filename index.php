<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функции массивов</title>
</head>

<body>
    <h1>Функции работы с массивами</h1>
    <?php
    $xyz = [
        'login' => 'iram'
    ];

    if (array_key_exists('pon', $xyz)) {
        echo $xyz['pon'];
    } else {
        echo 'Не найдено';
    }
    echo "<br>";
    $ponn = [1, 2, 3, 4, 5, 10];
    if (in_array(10, $ponn)) {
        echo 'число 10 есть в массиве';
    } else {
        echo 'числа 10 нет в массиве';
    }

    //объединение массивов ААААА

    $a = ['a', 'b', 'd'];
    $b = [1, 3, 4];

    $ab = array_combine($a, $b);
    var_dump($ab);
    $user = [
        'log' => 'Da',
        'password' => 'Poezda'

    ];

    //извлечение

    //выбор всех значений
    var_dump(array_values($user));
    echo "<br>";



    //1
    echo "<br>";
    $t = [];
    for ($i = 0; $i < 11; $i++) {
        $t[] = $i;
    }
    var_dump($t);

    //2
    echo "<br>";
    for ($i = 1; $i < 101; $i++) {
        echo $i;
        echo "<br>";
    }
    $x = 0;
    while ($x < 100) {
        $x++;
        echo $x;
        echo "<br>";
    }
    //3
    echo "<br>";
    $y = 0;
    $u = 0;
    while ($y < 100) {
        $y++;
        $u = $u + $y;
    }
    echo $u;

    //4
    echo "<br>";

    $d = 2; //сумма
    $a = 2; //число для цикла
    while ($a <= 100) {
        $a++;
        if ($a % 2 == 0) {
            $d = $d + $a;
        } else {
            $d = $d + 0;
        }
    }
    echo $d;

    //5
    echo "<br>";
    $po = [1, 5, 2, 1495, 0, 333, 77777, 1056];
    $ty = count($po);
    for ($r = 1; $r <= $ty; $r++) {
        echo $po[$r];
        echo "<br>";
        if ($po[$r] == 0) {
            break;
        }
    }

    //6
    echo "<br>";
    $jkk = 'abcde';
    $arr13 = str_split($jkk);
    var_dump($arr13);


    //7
    echo "<br>";
    $io = '12345';
    $g = str_split($io);
    var_dump($io);
    ?>
</body>

</html>