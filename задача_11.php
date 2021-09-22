<form method="post">
    <label>Год:</label>
    <input type="text" name="year" size="4">
    <input type="submit" value="Показать">
</form>

<?php
if (!empty($_POST['year'])) {
    $year = $_POST['year'];
    if ($year >= 1900) {
        if ($year <= 1911) {
            $value = $year % 1900;
        } else {
            $value = ($year - 1900) % 12;
        }
    } else {
        echo 'Вы ввели неверное значение';
        exit();
    }
} else {
    echo 'Вы не заполнили поле';
    exit();
}

switch ($value) {
    case 0:
        echo 'Год Крысы';
        break;
    case 1:
        echo 'Год Быка';
        break;
    case 2:
        echo 'Год Тигра';
        break;
    case 3:
        echo 'Год Кролика';
        break;
    case 4:
        echo 'Год Дракона';
        break;
    case 5:
        echo 'Год Змеи';
        break;
    case 6:
        echo 'Год Лошади';
        break;
    case 7:
        echo 'Год Овцы';
        break;
    case 8:
        echo 'Год Обезьяны';
        break;
    case 9:
        echo 'Год Петуха';
        break;
    case 10:
        echo 'Год Собаки';
        break;
    case 11:
        echo 'Год Свиньи';
        break;

    default:
        break;
}

?>