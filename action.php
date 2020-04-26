<?php
$needle = $_POST['needle'];

$numbers = range(1, 100, 1);
function gamePlay(array $numbers, int $needle)
{
    $low = 0;
    $high = count($numbers) - 1;
    $checkWin = false;
    for ($i = 1; $i < 4; $i++) {
        $randomNum = rand($numbers[$low], $numbers[$high]);
        echo 'Máy tính chọn lần ' . $i . ' : ' . $randomNum . '<br>';
        if ($randomNum < $needle) {
            echo 'Không đúng ! Số bạn chọn nhỏ hơn :))' . '<br>';
            $low = $randomNum;
        } else if ($randomNum > $needle) {
            echo 'Không đúng ! Số bạn chọn lớn hơn :))' . '<br>';
            $high = $randomNum;
        } else {
            echo 'Đúng rồi !';
            $checkWin = true;
            break;
        }
    }

    if ($checkWin) {
        echo '';
    } else {
        echo 'Bạn đã thua';
    }
}


gamePlay($numbers, $needle);