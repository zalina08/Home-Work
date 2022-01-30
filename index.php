<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="Zadanie">
        <h2>Задание 1</h2>
        Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и 
результат присвойте переменной $c. Затем создайте переменную $d, 
присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите 
в переменную $result. Выведите на экран значение переменной $result.
    </div>
    <div class="Otvet">

    <?php 
        $a=17;
        $b=10;
        $c=$a-$b;
        $d=7;
        $result=$c+$d;
    ?>
    Ответ: <?=$result ?>
    </div>
    <div class="Zadanie">
    <h2>Задание 2</h2>
    Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат 
присвойте переменной $result. Выведите на экран значение 
переменной $result. 
    </div>
    <div class="Otvet">

    <?php
        $c=15;
        $d=2;
        $result=$c+$d;
    ?>
    Ответ: <?=$result ?>
    </div>
    <div class="Zdanie">
    <h2>Задание 3</h2>
    Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих 
переменных и операции сложения строк выведите на экран фразу 'Привет, 
Мир!'.
    </div>
    <div class="Otvet">

    <?php
    $text1='Привет, ';
    $text2='Мир!';
    $result=$text1.$text2;
    ?>
    Ответ: <?=$result ?>
    </div>
    <div class="Zadanie">
    <h2>Задание 4</h2>
    Создайте переменную $name и присвойте ей ваше имя. Выведите на 
экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.
    </div>

    <div class="Otvet">
        <?php
        $text1='Привет, ';
        $name= 'Залина!';
        $result=$text1.$name;
        ?>
        Ответ: <?=$result ?>
    </div>
    <div class="Zadanie">
    <h2>Задание 5</h2>
    Создайте переменную $age и присвойте ей ваш возраст. Выведите на 
экран 'Мне %Возраст% лет!'.
    </div>

    <div class="Otvet">
       <?php
       $text1='Мне ';
       $age='19 лет!';
       $result=$text1.$age;
       ?> 
       Ответ: <?=$result ?>
    </div>
    <div class="Zadanie">
    <h2>Задание 6</h2>
    Если переменная $a равна 10, то выведите 'Верно', иначе выведите 
'Неверно'. 
    </div>

    <div class="Otvet">
    Ответ: <?=$echo ?>
        <?php
        $a=10;
        if ($a == 10) {
            echo 'Верно';
        } else {
            echo 'Неверно';
        }
        ?>
    </div>
    <div class="Zadanie">
    <h2>Задание 7</h2>
    В переменной $min лежит число от 0 до 59. Определите в 
какую четверть часа попадает это число (в первую, вторую, третью или 
четвертую).
    </div>

    <div class="Otvet">
    Ответ: <?=$echo ?>
        <?php
        $min = 10; //("Введите число от 0 до 59");
        if ($min >= 0 and $min <= 14) {
            echo 'В первую четверть';
        }
        if ($min <= 15 and $min >= 30) {
            echo 'Во вторую четверть';
        }
        if ($min <= 31 and $min >= 45) {
            echo 'В третью четверть';
        }
        if ($min >= 46 and $min <= 59) {
            echo 'В четвертую четверть';
        }
        ?>
    </div>
</body>
</html>