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
    <main>
        <div class="container d-flex flex-column align-items-center">
            <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="">
            <h2>Feedback</h2>
            <p class="lead text-center">Leave feedback for Traversy Media</p>
            <form action="" class="mt-4 w-75">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Feedback</label>
                    <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback"></textarea>
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