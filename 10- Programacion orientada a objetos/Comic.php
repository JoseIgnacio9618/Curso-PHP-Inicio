<?php
include_once 'book.php';

class Comic extends Book 
{
    public function __construct(
        //Publicas se pueden ver y cambiar, privadas solo ver 
        //Los datos ya definidos en la clase padre van con esta sintaxis 
        $autor,
        $title,
        $price,
        $stock,
        $id,
        public string $volumenes,
        

        
    
    )
    {
        //De esta forma le indicamos que use las variables de el constuctor padre
        parent::__construct($autor,$title,$price,$stock,$id);
    }
    //Se pueden sobreescribir los metodos 
    
}


$comic1 = new Comic("Alan Moore","Batman: The killing joke",12,50,50,1,1);

$comic1->getInfo();
?>