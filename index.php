<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Leave Feedback</title>
</head>

<body>
    <?php 
        include "inc/header.php";
    ?>

    <?php 
        $name = $email = $body = "";
        $nameErr = $emailErr = $bodyErr ="";

        //form validation - form submit
        if(isset($_POST["submit"])){
            //validating the name
            if(empty($_POST["name"])){
                $nameErr= "Name is required";
            } else {
                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
            }

            //validating the email
            if(empty($_POST["email"])){
                $emailErr= "Email is required";
            } else {
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            }

            //validating the body
            if(empty($_POST["body"])){
                $bodyErr= "Feedback is required";
            } else {
                $body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        
        if(empty($nameErr) && empty($emailErr) && empty($bodyErr)){
            //adding to the database
            $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";

            if(mysqli_query($conn, $sql)){
                //Success
                header('Location: feedback.php');
            } else{
                echo 'Error:' . mysqli_error($conn);
            }
        } 
    ?>



    <main>
        <div class="container d-flex flex-column align-items-center">
            <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="">
            <h2>Feedback</h2>
            <p class="lead text-center">Leave feedback for Traversy Media</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method= "POST" class="mt-4 w-75">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter your name">
                    <div class="invalid-feedback">
                        <?php echo $nameErr; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter your email">
                    <div class="invalid-feedback">
                        <?php echo $emailErr; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Feedback</label>
                    <textarea class="form-control <?php echo $bodyErr ? 'is-invalid' : null; ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
                    <div class="invalid-feedback">
                        <?php echo $bodyErr; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
                </div>
            </form>
        </div>
    </main>

    <?php
        include "inc/footer.php"
    ?>

</body>

</html>