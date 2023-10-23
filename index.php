<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <title>sm3</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?
    class Animal
    {
        public $weight, $color, $age;

        function info()
        {
            echo 'Weight:' . $this->weight . '<br>' . 
            'Color:' . $this->color . '<br>' . 
            'Age:' . $this->age;
        }
    }



    class Lion extends Animal
    {
        public $arial;
        function info()
        {
            echo  '<span class="color">Arial: </span>' . $this->arial . '<br><br>' . 
            '<span class="color">Weight: </span>' . $this->weight . '<br><br>' . 
            '<span class="color">Color: </span>' . $this->color . '<br><br>' . 
            '<span class="color">Age: </span>' . $this->age;
        }
    }


    class Rabbit extends Animal
    {
        public $speed;
        function info()
        {
            echo '<span class="color">Speed: </span>' . $this->speed . '<br><br>' .
             '<span class="color">Weight: </span>' . $this->weight . '<br><br>' . 
             '<span class="color">Color: </span>' . $this->color . '<br><br>' . 
             '<span class="color">Age: </span>' . $this->age;
        }
    }

    class Wolf extends Animal
    {
        public $length;
        function info()
        {
            echo '<span class="color">Length: </span>' . $this->length . '<br><br>' . 
            '<span class="color">Weight: </span>' . $this->weight . '<br><br>' . 
            '<span class="color">Color: </span>' . $this->color . '<br><br>' . 
            '<span class="color">Age: </span>' . $this->age;
        }
    }


    $lion = new Lion();
    $lion->weight = '100';
    $lion->color = 'yellow';
    $lion->age = '5';
    $lion->arial = 'Africa';


    $rabbit = new Rabbit();
    $rabbit->weight = '10';
    $rabbit->color = 'white';
    $rabbit->age = '1';
    $rabbit->speed = '24';


    $wolf = new Wolf();
    $wolf->weight = '44';
    $wolf->color = 'gray';
    $wolf->age = '7';
    $wolf->length = '1,5';

    ?>


<section>
<div class="container">
        <h2 class="title">Animals</h2>
        <div class="information">
            <div class="info_animal">
                <img src="assets/img/lion.jpg" alt="lion" class="img">
                <div class="animal_text">
                    <h2 class="title_name">
                        Lion
                    </h2>
                    <p class="text">
                        <?
                        $lion->info();
                        ?>
                    </p>
                </div>

            </div>
            <div class="info_animal">
                <img src="assets/img/rabbit.jpg" alt="rabbit" class="img">
                <div class="animal_text">
                    <h2 class="title_name">
                        Rabbit
                    </h2>
                    <p class="text">
                        <?
                        $rabbit->info();
                        ?>
                    </p>
                </div>

            </div>
            <div class="info_animal">
                <img src="assets/img/wolf.jpg" alt="wolf" class="img">
                <div class="animal_text">
                    <h2 class="title_name">
                        Wolf
                    </h2>
                    <p class="text">
                        <?
                        $wolf->info();
                        ?>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
    

</body>

</html>