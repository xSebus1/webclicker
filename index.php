<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <?php

        try {
            $conn = mysqli_connect("localhost", "root", "", "gra");

            if (mysqli_connect_errno()) {
                throw new Exception('xd');
            } else {
                $status = "Połączono";
            }
        } catch (Exception $e) {
            $err =  $e->getMessage();
        }

        $getDataSql = "SELECT * from uzytkownicy";
        $result2 = mysqli_query($conn, $getDataSql);
        while ($row = mysqli_fetch_assoc($result2)) {
            $monety = $row['monety'];
            $UpgradesStep = array();
            array_push($UpgradesStep, $row['ulepszenie_1']);
            array_push($UpgradesStep, $row['ulepszenie_2']);
            array_push($UpgradesStep, $row['ulepszenie_3']);
            array_push($UpgradesStep, $row['ulepszenie_4']);
            array_push($UpgradesStep, $row['ulepszenie_5']);
        }

        $punkty = $monety;
    ?>

    <header>
        <section>
            <p>Twoje punkty: <?php echo htmlspecialchars($punkty); ?></p>
            <form action="index.php" method="POST">
                <label for="increase_points">
                    <button name="increase_points">KLIKNIJ PPM, ABY ZDOBYĆ PUNKTY</button>
                </label>
            </form>
        </section>
        <nav>

            <?php
                if ($UpgradesStep[0] == 0) {
                    echo "<p class='nav_p_not_unlocked'>ULEPSZENIE #1 - NAWIGACJA <br><br>Nie odbłokowałeś tego elementu: <br>Koszt: 100 MONET <br>Bonus do kliknięć: +2<button class=ulepsz_p_nav>KLIKNIJ, ABY ZAKUPIĆ</button></p>";
                } else {
                    echo "<p>ELEMENT - ZBUDOWANY <br>Bonus do kliknięć: +2";
                }
            ?>
        </nav>
    </header>

    <section class="sekcja-main">
        <article>
            <?php
                if ($UpgradesStep[1] == 0) {
                    echo "<p class='article_p_not_unlocked'>ULEPSZENIE #2 - ARTYKUŁ <br><br>Nie odbłokowałeś tego elementu: <br>Koszt: 500 MONET <br>Bonus do kliknięć: +4<button class=ulepsz_p_article>KLIKNIJ, ABY ZAKUPIĆ</button></p>";
                }
            ?>
        </article>

        <aside>
            <?php
                if ($UpgradesStep[2] == 0) {
                    echo "<p class='aside_p_not_unlocked'>ULEPSZENIE #3 - POBOCZNY <br><br>Nie odbłokowałeś tego elementu: <br>Koszt: 600 MONET <br>Bonus do kliknięć: +3<button class=ulepsz_p_aside>KLIKNIJ, ABY ZAKUPIĆ</button></p>";
                }
            ?>
        </aside>
    </section>

    <footer></footer>
</body>
</html>
