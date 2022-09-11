<?php
require 'init.database.php';
include 'fetch.vwnotes.database.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StickToIt!</title>
    <link rel="stylesheet" type='text/css' media='screen' href='foundation.css' />
    <link rel="stylesheet" type='text/css' media='screen' href='foundation.min.css' />
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favcion 2.png" type="image/x-icon" />
    <!-- Teko Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <div id="whole-container">
        <div id="foot-wrap">
            <div class="back-wrap">
                <img class="back-bg" src="assets/background.jpg" alt="">
                <div class="back-content">
                    <div class="grid-container-full">
                        <div class="grid-x grid-margin-x">
                            <div class="medium-2 cell">
                            </div>
                            <div class="medium-8 cell">
                                <header class="fixed-header">
                                    <h1>
                                        <ul class="menu expanded">

                                            <li><a href="makenotes.php">Make</a></li>
                                            <li><a href="projeto.html">Home</a></li>
                                        </ul>
                                    </h1>
                                    </h1>




                                </header>




                                <div class="grid-x grid-margin-x small-up-2 medium-up-3">
                                    <?php
                                    if (empty($toReturn)) {
                                    ?>
                                        <div class="warning callout large" data-closable="slide-out-right">
                                            <h5><i class="fa-regular fa-folder-open fa-fade"></i> No Notes have been added yet
                                            </h5>
                                            <p></p>
                                            <a href="makenotes.php">Add notes through the option 'MAKE' or press here to get started!</a>
                                            <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php } else { ?>

                                        <ul>
                                            <?php foreach ($toReturn as $item) { ?>
                                                <li class="note">
                                                    <a>
                                                        <h4><?php echo $item["title"] ?></h4>
                                                        <p><?php echo $item["content"] ?></p>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </div>




                            </div>
                            <div class="medium-2 cell">
                            </div>
                        </div>
                    </div>


                    <br><br><br>
                </div>
            </div>


            <footer id="foot">

                <hr>
                <h6>Copyright 2022 | Todos os direitos reservados | Desenvolvido por Pedro</h6>
            </footer>
        </div>
    </div>
    <script src="jquery.js"></script>
    <script src="what-input.js"></script>
    <script src="foundation.js"></script>
    <script src="foundation.min.js"></script>
    <script src="javascripting.js"></script>


    <script>
        $(document).foundation();
    </script>
</body>

</html>