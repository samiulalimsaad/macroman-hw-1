<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW | Macroman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once 'utils.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = explode(" ", $name);
    $firstName = $name[0];
    $lastName = $name[1];
    $content = "FirstName : {$firstName}\nLastName : {$lastName}\nEmail : {$email}\nPassword : {$password}\nfile saved as :{$fileName}.php\n";

    $fp = fopen(time() . ".txt", 'w');
    fwrite($fp, $content);
    fclose($fp);
    ?>
    <div class="container-md my-5 p-5 mx-auto d-flex justify-content-center align-items-center w-100">
        <div>
            <div class="card p-5">
                <div class="card-title">
                    <h2 class='text-success text-center'>Successfully Submitted</h2>
                </div>
                <hr>
                <div class="card-body">
                    <h3 class="lead">
                        <?php
                        echo "FirstName : " . $firstName;
                        ?>
                    </h3>
                    <h3 class="lead">
                        <?php
                        echo "LastName : " . $lastName;
                        ?>
                    </h3>
                    <h3 class="lead">
                        <?php
                        echo "Email : " . $email;
                        ?>
                    </h3>
                    <h3 class="lead">
                        <?php
                        echo "Password : " . $password;
                        ?>
                    </h3>
                    <h3 class="lead">
                        <?php
                        echo "file saved as : " . $fileName . ".php <br/>";
                        ?>
                    </h3>
                </div>
            </div>
            <div class="card p-5">
                <div class="card-title">
                    <h2 class='text-success text-center'>Fibonacci (first 10<sup>th</sup>)</h2>
                </div>
                <h1>
                    <?php
                    $fib = fibonacci();
                    for ($i = 0; $i < count($fib); $i++) {
                        # code...
                        echo $fib[$i] . ', ';
                    }
                    ?>
                </h1>
            </div>
            <div class="card p-5">
                <div class="card-title">
                    <h2 class='text-success text-center'>BODMAS</h2>
                </div>
                <h1>
                    <?php
                    bracket();
                    division();
                    multiplication();
                    addition();
                    sub();

                    ?>
                </h1>
            </div>
            <div class="card p-5">
                <div class="card-title">
                    <h2 class='text-success text-center'>Optional</h2>
                </div>
                <h1>
                    <?php
                    optional(1, 2)
                    ?>
                </h1>
            </div>
        </div>
    </div>
</body>

</html>