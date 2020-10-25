<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zdrowie</title>
    <?php
                    error_reporting(0);
                    $score=0;
                    $a1=$_POST['1'];
                    if($a1=='c')
                    {
                        $score+=1;

                    }
                    $a2=$_POST['2'];
                    if($a2=='d')
                    {
                        $score+=1;
                    }
                    $a3=$_POST['3'];
                    if($a3=='c')
                    {
                        $score+=1;
                    }
                    $a4=$_POST['4'];
                    if($a4=='c')
                    {
                        $score+=1;
                    }
                    $a5=$_POST['5'];
                    if($a5=='b')
                    {
                        $score+=1;
                    }
                    $a6=$_POST['6'];
                    if($a6=='d')
                    {
                        $score+=1;
                    }
                    $a7=$_POST['7'];
                    if($a7=='b')
                    {
                        $score+=1;
                    }
                    $a8=$_POST['8'];
                    if($a8=='a')
                    {
                        $score+=1;
                    }
                    $a9=$_POST['9'];
                    if($a9=='d')
                    {
                        $score+=1;
                    }
                    $a10=$_POST['10'];
                    if($a10=='a')
                    {
                        $score+=1;
                    }
                ?>
</head>
<body>
    <div class="container">
        
        <div class="title">
            <h1>#DBAJOZDROWIE</h1>
           
                    <?php
                    
                    echo "<h3>Twój wynik wynosi: ".$score."</h3>";
                    if($score<=2)
                    {
                        echo "<p>Twoja wiedza w tej dziedzinie nie jest najlepsza. Spróbuj poczytaj więcej ciekawostek dotyczącej tej dziedziny</p>";
                    }
                    else if($score<=6)
                    {
                        echo "<p>Twoja wiedza w tej dziedzinie jest na średnim poziomie.</p>";
                    }
                    else if($score<=8)
                    {
                        echo "<p>Twoja wiedza w tej dziedzinie jest na wysokim poziomie.</p>";
                    }
                    else
                    {
                        echo "<p>Jesteś prawdziwym ekpertem w tej dziedzinie.</p>";
                    }
                    ?> 
    
            <br><br>
        </div>
        <div class="main">
               <form action="index2.php" method="post">
                    <h2>Pytanie 1: Kiedy prawidłowo powinno się zakrywać usta podczas kichania?</h2><br>
                    <input type="radio" name="1" id="a1" value="a">
                    <label for="a">Nie zakrywać, odwrócić się w stronę, gdzie nie ma innych osób </label><br>
                    <input type="radio" name="1" id="b1" value="b">
                    <label for="b">Jedną ręką </label><br>
                    <input type="radio" name="1" id="c1" value="c">
                    <label for="c" id="T">Łokciem</label><br>
                    <input type="radio" name="1" id="d1" value="d">
                    <label for="d">Dwoma rękami</label><br><br>
                    <div class="odp">
                    <?php
                        echo "Twoja odpowiedż to: ".$a1;
                    ?>
                    </div>
                    <br><br>
                    <h2>Pytanie 2: Kiedy prawidłowo powinno się myć ręce?</h2><br>
                    <input type="radio" name="2" id="a2" value="a">
                    <label for="a">Przed i po każdym posiłku </label><br>
                    <input type="radio" name="2" id="b2" value="b">
                    <label for="b">Raz dziennie po obudzeniu się</label><br>
                    <input type="radio" name="2" id="c2" value="c">
                    <label for="c">Tylko przed posiłkiem</label><br>
                    <input type="radio" name="2" id="d2" value="d">
                    <label for="d" id="T">Po powrocie do domu i przed oraz po każdym posiłku </label><br><br>
                    <div class="odp">
                    <?php
                        echo "Twoja odpowiedż to: ".$a2;
                    ?>
                    </div>
                    <br><br>
                    <h2>Pytanie 3: Ile wynosi poziom cukru we krwi?</h2><br>
                    <input type="radio" name="3" id="a3" value="a">
                    <label for="a">0-30mg/dl </label><br>
                    <input type="radio" name="3" id="b3" value="b">
                    <label for="b">31-50mg/dl </label><br>
                    <input type="radio" name="3" id="c3" value="c">
                    <label for="c" id="T">60-100mg/dl</label><br>
                    <input type="radio" name="3" id="d3" value="d">
                    <label for="d">130 i powyżej mg/dl</label><br><br>
                    <div class="odp">
                    <?php
                        echo "Twoja odpowiedż to: ".$a3;
                    ?>
                    </div>
                    <br><br>
                    <h2>Pytanie 4: Ile wynosi prwaidłowa temperatura ciała?</h2><br>
                    <input type="radio" name="4" id="a4" value="a">
                    <label for="a">35°C </label><br>
                    <input type="radio" name="4" id="b4" value="b">
                    <label for="b">38°C </label><br>
                    <input type="radio" name="4" id="c4" value="c">
                    <label for="c" id="T">36.6°C</label><br>
                    <input type="radio" name="4" id="d4" value="d">
                    <label for="d">38.5°C</label><br><br>
                    <div class="odp">
                    <?php
                        echo "Twoja odpowiedż to: ".$a4;
                    ?>
                    </div>
                    <br><br>
                    <h2>Pytanie 5:Ile wynosi prawidłowe ciśnienie krwi?</h2><br>
                    <input type="radio" name="5" id="a5" value="a">
                    <label for="a">80/40</label><br>
                    <input type="radio" name="5" id="b5" value="b">
                    <label for="b" id="T">120/80 </label><br>
                    <input type="radio" name="5" id="c5" value="c">
                    <label for="c">160/100</label><br>
                    <input type="radio" name="5" id="d5" value="d">
                    <label for="d">140/100</label><br><br>
                    <div class="odp">
                    <?php
                        echo "Twoja odpowiedż to: ".$a5;
                    ?>
                    </div>
                    <br><br>
                    <h2>Pytanie 6: Ile człowiek powinien jeść posiłków dziennie?</h2><br>
                    <input type="radio" name="6" id="a6" value="a">
                    <label for="a">2</label><br>
                    <input type="radio" name="6" id="b6" value="b">
                    <label for="b">1</label><br>
                    <input type="radio" name="6" id="c6" value="c">
                    <label for="c">8</label><br>
                    <input type="radio" name="6" id="d6" value="d">
                    <label for="d" id="T">5</label><br><br>
                    <div class="odp">
                    <?php
                        echo "Twoja odpowiedż to: ".$a6;
                    ?>
                    </div>
                    <br><br>
                    <h2>Pytanie 7: Kiedy przypada Światowy Dzień Zdrowia:</h2><br>
                    <input type="radio" name="7" id="a7" value="a">
                    <label for="a">22 marca</label><br>
                    <input type="radio" name="7" id="b7" value="b">
                    <label for="b" id="T">7 kwietnia</label><br>
                    <input type="radio" name="7" id="c7" value="c">
                    <label for="c">12 maja?</label><br>
                    <input type="radio" name="7" id="d7" value="d">
                    <label for="d">1 lipca</label><br><br>
                    <div class="odp">
                    <?php
                        echo "Twoja odpowiedż to: ".$a7;
                    ?>
                    </div>
                    <br><br>
                    <h2>Pytanie 8: Marchew posiada witaminę, która dobrrze wpływa na wzrok. Jaka to witamina?</h2><br>
                    <input type="radio" name="8" id="a8" value="a">
                    <label for="a" id="T">A</label><br>
                    <input type="radio" name="8" id="b8" value="b">
                    <label for="b">C</label><br>
                    <input type="radio" name="8" id="c8" value="c">
                    <label for="c">B</label><br>
                    <input type="radio" name="8" id="d8" value="d">
                    <label for="d">K</label><br><br>
                    <div class="odp">
                    <?php
                        echo "Twoja odpowiedż to: ".$a8;
                    ?>
                    </div>
                    <br><br>
                    <h2>Pytanie 9: Ile godzin snu potrzebuje osoba dorosła?</h2><br>
                    <input type="radio" name="9" id="a9" value="a">
                    <label for="a">3-4 godziny</label><br>
                    <input type="radio" name="9" id="b9" value="b">
                    <label for="b">5-6 godzin</label><br>
                    <input type="radio" name="9" id="c9" value="c">
                    <label for="c">10-11 godzin</label><br>
                    <input type="radio" name="9" id="d9" value="d">
                    <label for="d" id="T">-7-9 godzin</label><br><br>
                    <div class="odp">
                    <?php
                        echo "Twoja odpowiedż to: ".$a9;
                    ?>
                    </div>
                    <br><br>
                    <h2>Pytanie 10: Prawidlowy pozim BMI u człowieka wynosi?</h2><br>
                    <input type="radio" name="10" id="a10" value="a">
                    <label for="a" id="T">18.5-24.99</label><br>
                    <input type="radio" name="10" id="b10" value="b">
                    <label for="b">25-29.99</label><br>
                    <input type="radio" name="10" id="c10" value="c">
                    <label for="c">16-16.99</label><br>
                    <input type="radio" name="10" id="d10" value="d">
                    <label for="d">17-18.49</label><br><br>
                    <div class="odp">
                    <?php
                        echo "Twoja odpowiedż to: ".$a10;
                    ?>
                    </div>
                    <br>
                    <button type="submit">Zakończ</button>
               </form>
               <br><br>  
               
        </div>
        <div class="footer">
            <br><br>
            <p>Stronę przygotował: Patryk Kokowicz</p>   
        </div>
        
    
    
    </div>    
</body>
</html>

