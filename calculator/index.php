<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My calculator</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <body>

        <div class="container">
            <div class="bord">

                <form action="index.php" method="POST">
                    First number:
                    <br>
                    <input type="text" name="number1">
                    <br>
                    Second number:
                    <br>
                    <input type="text" name="number2">
                    <br>
                    Operation:
                    <br>
                    <input type="radio" name="operator" value="+"> +
                    <br>
                    <input type="radio" name="operator" value="-"> -
                    <br>
                    <input type="radio" name="operator" value="*"> *
                    <br>
                    <input type="radio" name="operator" value="/"> /
                    <br>
                    <input id="btn" type="submit" name="submit" value="=">
                </form>

                <?php
                 $result = null;
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $firstNumber = $_REQUEST['number1'];
                    $secondNumber = $_REQUEST['number2'];
                    $operationType = $_REQUEST['operator'];
                   


                    switch ($operationType) {
                        case '+':
                            $result = $firstNumber + $secondNumber;
                            break;
                        case '-':
                            $result = $firstNumber - $secondNumber;
                            break;
                        case '*':
                            $result = $firstNumber * $secondNumber;
                            break;
                        case '/':
                            $result = $firstNumber / $secondNumber;
                            break;
                        default:
                            $result = "Undefined operation!";
                    }
                }
                ?>

                <h2>

                    <?php
                    print( $result );
                    ?>

                </h2>

            </div>
        </div>


    </body>



</body>

</html>