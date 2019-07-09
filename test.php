<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<style>
    html {
        min-height: 100%; //so gradient fills entire height
    }
    body{
        background: -webkit-linear-gradient(#93B874, #C9DCB9); 
        background: -o-linear-gradient(#93B874, #C9DCB9); 
        background: -moz-linear-gradient(#93B874, #C9DCB9); 
        background: linear-gradient(to left, #93B874, #C9DCB9); 
        background-color: #93B874;
    }
</style>
<title>Your page was created on <?php echo date("l F d, Y") ?></title>
</head>
<body>
    <?php
    echo "The current date is ";
    echo date("l F d, Y");
    ?>
    
    <h1>Título 1</h1>
    <h2>Título 2</h2>
    <h3>Título 3</h3>
    
    <p>Isso é um parágrafo de texto.</p>
    <p>Isso é outro parágrafo de texto.</p>
    
    <?php
    //comentário de 1 linha
    
    # outro comentário de 1 linha
    
    /* comentário em
    várias linhas
    */
    $x = 5 /* + 15*/ + 5;
    $txt= "W3Schools.com";
    $y = 10.5;
    ?>
    
    <?php
    //isso mostra que as seções de código php continuam vivas após o ? >
    echo $x;//same $x declared above
    echo $txt;
    echo $y;
    echo $x + $y;
    
    echo "<br>";
    echo "Hello Wold!<br>";
    echo "Hello there!<br>";
    
    //duas formas equivalentes de imprimir numa string:
    echo "I love $txt!<br>";
    echo "I love " . $txt . "!<br>";# like C++ << operator
    
    //exercício de escopo de variáveis (x é global, mas diferente do C, não pode ser acessada de dentro da função abaixo)
    function myFunction (){
        $z = 2;//local scope like C/C++
        echo "Value of z INSIDE myFunction is $z<br>";
        
        //must re-declare x with global keyword to acess global variable x
        global $x,$y;
        echo "Value of x INSIDE myFunction is $x<br>";
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    echo "Value of y BEFORE myFunction is $y<br>"; 
    myFunction();
    
    echo "Value of x OUTSIDE myFunction is $x<br>";
    echo "Value of y AFTER myFunction is $y<br>";
    
    //static variables exercise (works like C/C++ static variable)
    function myCounter(){
        static $x = 0;
        echo "$x<br>";
        $x++;
    }
    echo "<br>myCounter:<br>";
    myCounter();
    myCounter();
    myCounter();
    myCounter();
    
    var_dump($y);//returns the data type
    $t = true;
    echo "<br>";
    var_dump($t);
    var_dump($txt);
    //Array examples
    $cars = array("Toyota","BMW","Volvo");
    echo "<br>";
    var_dump($cars);
    echo "<br>";
    echo "//GLOBALS:<br>";
    var_dump($GLOBALS);
    
    //Object example
    class Car{
        function Car(){
            $this->model = "VW";
        }
    }
    $herbie = new Car();
    echo "<br><br>//Object example:<br>";
    echo $herbie->model;
    
    $w = null;
    echo "<br><br>";
    var_dump($w);
    
    echo "<br><br> length of " . $txt . " is " . strlen($txt) . " .";
    
    define("pi",3.141592653589793);
    echo "<br><br> pi =" . pi . " .<br><br>";
    var_dump(pi);
    function myTest() {
        echo pi;
    }
    echo "<br><br>";
    myTest();
    
    ?>
</body>
</html>