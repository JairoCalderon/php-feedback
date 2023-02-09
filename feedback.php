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

            <?php
                $feedback = [
                    [
                        "id"=> "1",
                        "name"=> "Beth Williams",
                        "email"=> "beth@gmail.com",
                        "body"=> "TV shows sucks"
                    ],
                    [
                        "id"=> "2",
                        "name"=> "Walt William",
                        "email"=> "walt@gmail.com",
                        "body"=> "TV shows are great"
                    ],
                    [
                        "id"=> "3",
                        "name"=> "Bill Johnson",
                        "email"=> "bill@gmail.com",
                        "body"=> "TV shows are a wate of time"
                    ]
                ];
            ?>

            <h2>Past Feedback</h2>

            <?php if(empty($feedback)): ?>
                <p class="lead mt3">There is no feedback</p>
            <?php endif ?>

            <?php foreach($feedback as $item): ?>
                <div class="card my-3 w-75">
                    <div class="card-body text-center">
                        <?php echo $item["body"] ?>
                        <div class="text-secondary mt-2">
                            By <?php echo $item["name"] ?>
                        </div>
                    </div>
                </div>  
            <?php endforeach ?>          
        </div>
    </main>

    <?php
        include "inc/footer.php"
    ?>

</body>

</html>