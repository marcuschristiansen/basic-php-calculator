<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <?php require('functions.php'); ?>

    <!-- CUSTOM FUNCTIONS -->

    <!-- 1. Output today's date and time to the screen in H1 tag. -->

    <!-- 2. Write a custom function that echos a greeting & your name to the screen. -->

    <!-- 3. Write a custom function, with 1 required parameter, that checks whether this number is between 1 - 100. Return true or false. -->

    <!-- 4. Write a custom function:
            a. takes 2 parameters. 1 required. 1 optional
            b. must check if both parameters are numeric, else returns a message saying numbers must be numeric
            c. must check, using the custom function written in step 3, if the inputs are between 1 - 100. If false, return a message saying numbers are out of range.
            d. return the sum of both values, if all checks are passed.
     -->

    <div class="container">
        <?php $inputs = 4; ?>
        <form action="" method="POST">
            <div class="row">
                <?php for($counter = 0; $counter < $inputs; $counter++) : ?>
                    <div class="col-md-3">
                        <label for="">Number <?php echo ($counter + 1); ?></label>
                        <input type="text" name="num[]" class="form-control" value="<?php echo (isset($_POST['num'][$counter])) ? $_POST['num'][$counter] : ''; ?>">
                    </div>
                <?php endfor; ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" value="Calculate" class="btn btn-primary" name="submit">
                </div>
                
            </div>
        </form>
    </div>

    



    <?php if(isset($_POST['submit'])) {

        $numbers = $_POST['num']; // array of numbers

        $is_validated = is_validated($numbers);

        echo '<div class="container">';
        if(empty($is_validated)) {
            
            echo '<div class="alert alert-primary" role="alert"><h1>Your total is: ' . calculate($numbers) . '</h1></div>';
        } else {
            echo '<ul class="list-group">';
            foreach($is_validated as $message) {
                echo '<li class="list-group-item">' . $message . '</li>';
            }
            echo '</ul>';
        }
        echo '</div>';
        
        // $operator = $_POST['operator'];

        // if(!is_validated($number_1)) {
        //     echo 'Number 1 must be of type integer and cannot be empty.<br>';
        //     return;
        // } 

        // if(!is_validated($number_2)) {
        //     echo 'Number 2 must be of type integer and cannot be empty.<br>';  
        //     return;     
        // }

        // if(!is_validated($number_3)) {
        //     echo 'Number 3 must be of type integer and cannot be empty.<br>';  
        //     return;     
        // }

        // echo calculate($number_1, $number_2, $number_3, $operator);

    } ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>