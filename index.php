<?php
    #Exercise1
/*Écrivez une classe PHP Calculator qui acceptera 
deux valeurs comme arguments, puis les additionnera, 
les soustraira, les multipliera ou les divisera sur demande.
*/

class Calculator{
    #définition des variables
    public int $nombre1;
    public int $nombre2;
//
    public function __construct($nbre1,$nbre2)
    {

        $this->nombre1 = $nbre1;
        $this->nombre2 = $nbre2;
    }
//methode d'addition
    public function add(){
        return $this->nombre1 + $this->nombre2;
    }
    //methode de multiplication
    public function multiply(){
        return $this->nombre1 * $this->nombre2;
    }
//methode de soustraction
    public function difference(){
        return $this->nombre1 - $this->nombre2;

    }
    //methode de division
    public function diviser(){
        return $this->nombre1 / $this->nombre2;
    }
}
//instanciation de la classe
$mycalc = new Calculator(12, 6);
echo"l'addition est: ". $mycalc->add();
PHP_EOL;
echo"la mutliplication est: ". $mycalc->multiply();
PHP_EOL;
echo "la difference est : ".$mycalc->difference();
PHP_EOL;
echo"La division est : " .$mycalc->diviser();
?>

<?php
    #Exercise2

    class Produit{
        //definition des variables
    public String $name;
    public string $description;

    public float $price;


    }

  

    //instanciation de la classe 
$product1 = new Produit();
echo $product1->name="iphone 14";
PHP_EOL;
$product2 = new Produit();
echo" " .$product2->name="iPhone 14 Pro";
?>

<?php
    #Exercise3

    class Product{
        //definition des variables
    public String $name;
    public string $description;

    public float $price;
//Ajout de la methode d'initialisation
public function __construct($name,$description,$price){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;

}

  
    }

  

    //instanciation de la classe 
$product1 = new Product('iphone 12','this is a great iphone ',799.99);
echo $product1->name;
echo $product1->description;
echo $product1->price;
echo "  ";
$product2 = new Product('iphone 14 Pro ','this is a best iphone ',999.99);
echo $product2->name;
echo $product2->description;
echo $product2->price;
?>