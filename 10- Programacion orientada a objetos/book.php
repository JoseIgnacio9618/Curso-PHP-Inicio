

<?php
/**
 * Una clase es como una fabrica de objetos 
 */

class Book 
{
  //Propiedades Caracteristicas de nuestros objetos 
 
    /**
   * Esta es la funcion constructora que recibe las propiedades que tendran nuestros libros
   * tanto la funcion constructora como los atributos que pueden tener deben ser publicos.
   */
  public function __construct(
    //Publicas se pueden ver y cambiar, privadas solo ver 
    //Podemos opcionalmente definir un tipo de dato
    public string $autor,
    public string $title,
    public float $price,
    public int $stock,
    public int $id

){}
    //Metodos Funciones asignadas solamente para el objeto 
    public function getInfo(){
                //Con this autor nos de el autor de el libro que indiquemos en el codigo
        echo " ".htmlspecialchars($this->title)." lo escribió ".htmlspecialchars($this->autor)." 
        y lo vendemos en nuestra tienda por ".htmlspecialchars($this->price).". 
        ¡Date prisa, solo nos quedan ".htmlspecialchars($this->stock)." unidades!";
    }

}








//Esto es instaciar, es decir, crear un libro en nuestro ejemplo
$book1=new Book("George.O","Revelión en la granja",19.99,100,1);
$book2=new Book("Schoponehaurer","El arte de tener la razon",25.50,200,2);

//Asi se accede a los propiedades 
echo $book2->autor ;
echo "<br>";

//Asi se utiliza un metodo 
echo $book1 -> getInfo();

echo "<br> <br> <br>";

echo $book2 -> getInfo();



?>