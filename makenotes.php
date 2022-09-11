<?php
require 'init.database.php';
include 'fetch.delnotes.database.php';
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
    <link rel="shortcut icon" href="assets/favicon 3.png" type="image/x-icon" />
    <!-- Teko Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400&display=swap" rel="stylesheet">

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
                                            <li><a href="projeto.html">Home</a></li>
                                            <li><a href="viewnotes.php">View</a></li>
                                        </ul>
                                    </h1>
                                </header>



                                <form action="create.note.php" method="post">
                                    <div class="grid-container">
                                        <div class="grid-x grid-padding-x">
                                            <div class="medium-8 cell">
                                                <label>Note Title
                                                    <input type="text" name="title" placeholder="Add a title to your note here" maxlength="255" required>
                                                    &nbsp;
                                                    <button type="submit" class="submit alert button" value="Submit">Add
                                                        Note</button>
                                                </label>
                                            </div>
                                            <div class="medium-4 cell">
                                                <label>Add text to your note! (Optional)
                                                    <textarea id="textbox" type="text" name="content" placeholder="Add text to your note here" align="top"></textarea>

                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <br><br><br><br>
                                <form action="delete.note.php" method="post">
                                    <div class="grid-container">
                                        <div class="grid-x grid-padding-x">
                                            <div class="medium-8 cell">
                                                <label>Delete Notes menu
                                                    <select name="selected_note">
                                                        <?php foreach ($toReturn as $item) { ?>
                                                            <option value="<?php echo $item['id_note'] ?>">
                                                                <?php echo $item['title'] ?>,
                                                                <?php
                                                                $olddate = $item['date_and_time'];
                                                                $newdate = date_create($olddate);
                                                                echo date_format($newdate, "d/m/y h:i A");
                                                                ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    &nbsp;
                                                    <button type="submit" class="submit alert button" value="Submit">Delete
                                                        Note</button>

                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>



                            </div>
                            <div class="medium-2 cell">
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <footer id="foot">
            <hr>
            <h6>Copyright 2022 | Todos os direitos reservados | Desenvolvido por Pedro</h6>
        </footer>
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