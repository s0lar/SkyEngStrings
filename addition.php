<?php


/**
 * Сложить 2 строки
 *
 * @param string $string1
 * @param string $string2
 * @return string
 */
function addition($string1, $string2)
{
    //  Итоговый результат
    $result = '';

    //  Является ли строка "числом"?
    $pattern = "/^[1-9][0-9]*$/";
    if (!preg_match($pattern, $string1)) {
        // return printf("ERROR. String '%s' is not INT", $string1);
        return "error";
    }
    if (!preg_match($pattern, $string2)) {
        // return printf("ERROR. String '%s' is not INT", $string1);
        return "error";
    }

    //  Длина исходных строк
    $len1 = strlen($string1);
    $len2 = strlen($string2);

    //  Берем максимальную длину
    $len = ($len1 > $len2) ? $len1 : $len2;

    //  1 в уме
    $addition = 0;

    //  Проходим обе строки с конца к началу +1 итерация,
    //  чтобы сохранить еденицу для последнего десятка, если она будет
    $i = 1;
    while ($i <= $len) {

        //  Индекс символа
        $index1 = $len1 - $i;
        $index2 = $len2 - $i;

        //  Индексы
        $int1 = ($index1 >= 0) ? (int) $string1[$index1] : 0;
        $int2 = ($index2 >= 0) ? (int) $string2[$index2] : 0;

        //  Считаем сумму из
        $sum = $addition + $int1 + $int2;

        if ($sum >= 10) {
            $addition = 1;
            $sum = $sum % 10;
        } else {
            $addition = 0;
        }

        $result = $sum . $result;

        // printf(
        //     "%s+%s=%s (%s) \n\r",
        //     $int1,
        //     $int2,
        //     $result,
        //     $addition
        // );

        $i++;
    }

    //  Если закончили весь обход и осталась еденица в "уме" - добавляем ее
    if ($addition == 1) {
        $result = $addition . $result;
    }

    return $result;
}
