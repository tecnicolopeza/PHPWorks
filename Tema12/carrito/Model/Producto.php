<?php require_once 'CarritoBD.php';

class Producto
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $image;
    private $stock;

    function __construct($id, $name = "", $description = "", $price = 0, $image = "", $stock = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->stock = $stock;
    }


    #METODOS
    public function insert()
    {
        $conexion = CarritoDB::connectDB();
        $insercion = "INSERT INTO products (name, description, price, image, stock) VALUES ('$this->name', 
        '$this->description', $this->price, '$this->image', $this->stock)";
        $conexion->exec($insercion);
    }

    #BORRAR ARTICULOS
    public function delete()
    {
        $conexion = CarritoDB::connectDB();
        $borrado = "DELETE FROM products WHERE id='$this->id'";
        $conexion->exec($borrado);
    }

    #ACTUALIZA ARTICULOS
    public function update()
    {
        $conexion = CarritoDB::connectDB();
        $update = "UPDATE products SET name='$this->name', description='$this->description', 
        price=$this->price, image='$this->image', stock=$this->stock WHERE id='$this->id'";
        $conexion->exec($update);
    }
    

    public static function searchProduct($name){
        $conexion = CarritoDB::connectDB();
        $selection = "SELECT * FROM products WHERE  name LIKE '%".$name."%'";
        $consult = $conexion->query($selection);
        $products = [];
        while ($registro = $consult->fetchObject()) {
            $products[] = new Producto(
                $registro->id,
                $registro->name,
                $registro->description,
                $registro->price,
                $registro->image,
                $registro->stock
            );
        }
        return $products;
    }

    public static function getProducts()
    {
        $conexion = CarritoDB::connectDB();
        $selection = "SELECT * FROM products";
        $consult = $conexion->query($selection);
        $products = [];
        while ($registro = $consult->fetchObject()) {
            $products[] = new Producto(
                $registro->id,
                $registro->name,
                $registro->description,
                $registro->price,
                $registro->image,
                $registro->stock
            );
        }
        return $products;
    }

    public static function getProductById($id)
    {
        $conexion = CarritoDB::connectDB();
        $selection = "SELECT * FROM products WHERE id=".$id."";
        $consult = $conexion->query($selection);
        $product = "";
        while ($registro = $consult->fetchObject()) {
            $product = new Producto(
                $registro->id,
                $registro->name,
                $registro->description,
                $registro->price,
                $registro->image,
                $registro->stock
            );
        }
        return $product;
    }

    public static function getCart(){
        $conexion = CarritoDB::connectDB();
        // $selection = "SELECT * FROM products WHERE id IN (SELECT prodId FROM cart WHERE userId = \"".$_SESSION['user']['id']."\")";
        $selection = "SELECT * FROM products p JOIN cart c ON p.id = c.prodId WHERE c.userId = \"".$_SESSION['user']['id']."\"";
        $consult = $conexion->query($selection);
        $cart = [];
        while ($registro = $consult->fetchObject()) {
            $cart[] = ([
                $registro->prodId,
                $registro->name,
                $registro->description,
                $registro->price,
                $registro->image,
                $registro->stock,
                $registro->quantity]
            );
        }
        return $cart;
    }

    public static function totalPrice(){
        $conexion = CarritoDB::connectDB();
        $selection = "SELECT SUM(price) as total FROM products p JOIN cart c ON p.id = c.prodId WHERE c.userId = \"".$_SESSION['user']['id']."\"";
        $consult = $conexion->query($selection);
        $registro = $consult->fetchObject();
        return $registro;
    }

    #GETTERS Y SETTERS
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     */
    public function setStock($stock): self
    {
        $this->stock = $stock;

        return $this;
    }
}