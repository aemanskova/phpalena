<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="3lab.css">
</head>

<body>
    <header>
        <img id="logo" src="../1Lab/logo.jpg" alt="">
        <h1>Домашняя работа №4</h1>
    </header>
    <main>
        <form class="form" method="post">
            <div class="form_container">
                <div class="equation">
                    <span>x</span>
                    <select name="operator" id="">
                        <option value="*">*</option>
                        <option value="/">/</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                    </select>
                    <input name="a" type="number">
                    <span>=</span>
                    <input name="b" type="number">
                </div>
                <button type="submit">Решить уравнение</button>
            </div>
            <?php $a = $_POST['a'];
        $b = $_POST['b'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '*':
                $x = $b / $a;
                break;
            case '/':
                $x = $b * $a;
                break;
            case '+':
                $x = $b - $a;
                break;
            default:
                $x = $b + $a;
        }
        echo "<p class='answer'> Ответ: x=$x.</p>";
        ?>
        </form>
        
    </main>
    <footer>
        <p class="php_footer">Манскова Алёна 221-321</p>
    </footer>
</body>

</html>