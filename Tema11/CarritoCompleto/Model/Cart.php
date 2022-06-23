<?php require_once 'CarritoBD.php';
include_once '../Controllers/session.php';

class Cart
{

    private $id;
    private $userId;
    private $prodId;
    private $quantity;

    function __construct($id, $userId, $prodId, $quantity = 0)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->prodId = $prodId;
        $this->quantity = $quantity;
    }


    #BORRAR PRODUCTOS DEL CARRITO
    public function delete($prodId)
    {
        $conexion = CarritoDB::connectDB();
        if (isset($_SESSION['user'])) {

            $quantity = "SELECT quantity FROM cart WHERE prodId=" . $prodId . " AND userId = " . $_SESSION['user']['id'] . "";
            $consultQuantity = $conexion->query($quantity);
            $consultQuantity = $consultQuantity->fetchObject();

            $quantityToSum = $consultQuantity->quantity; //cantidad de productos a sumar al borrar producto

            $sumStock = "UPDATE products SET stock = stock + $quantityToSum WHERE id = " . $prodId . "";
            $conexion->exec($sumStock);

            $borrado = "DELETE FROM cart WHERE prodId=" . $prodId . " AND userId = " . $_SESSION['user']['id'] . "";
            $conexion->exec($borrado);
        }
    }

    #VACIAR CARRITO
    public static function emptyCart()
    {
        $conexion = CarritoDB::connectDB();
        if (isset($_SESSION['user'])) {
            //Obtengo el carrito del user logueado
            $select = "SELECT * FROM cart WHERE userId = " . $_SESSION['user']['id'] . "";
            $consult = $conexion->query($select);
            $cart = [];
            while ($registro = $consult->fetchObject()) {
                $cart[] = ([
                    $registro->id,
                    $registro->userId,
                    $registro->prodId,
                    $registro->quantity]
                );
            }

            //Recorro el carrito actualizando y borrando los productos
            foreach ($cart as $product => $value) { 
    
                $sumStock = "UPDATE products SET stock = stock + $value[3] WHERE id = " . $value[2] . "";
                $conexion->exec($sumStock);
    
                $borrado = "DELETE FROM cart WHERE prodId=" . $value[2] . " AND userId = " . $_SESSION['user']['id'] . "";
                $conexion->exec($borrado);

            }

        }
    }

    #AÑADE PRODUCTOS AL CARRITO
    public function insert()
    {
        $conexion = CarritoDB::connectDB();

        //comprobamos el stock > 0 para restarlo al insertar
        $stock = "SELECT stock FROM products WHERE id = " . $this->prodId . "";
        $consultStock = $conexion->query($stock);
        $consultStock = $consultStock->fetchObject();

        if ($consultStock->stock > 0) {
            //consulta para comprobar si existe producto con ese id en carrito
            $contain = "SELECT * FROM cart WHERE prodId = " . $this->prodId . " AND userId = " . $this->userId . "";
            $consult = $conexion->query($contain);
            $consult = $consult->fetchObject();

            if (!$consult) { //si no devuelve valor inserta en carrito
                $insercion = "INSERT INTO cart (userId, prodId, quantity) VALUES ('$this->userId', 
            '$this->prodId', $this->quantity)";
                $conexion->exec($insercion);
            } else { //si existe ya en el cart de ese user ese prodId suma 1 a la cantidad
                $insercion = "UPDATE cart SET quantity = quantity + 1 WHERE prodId = " . $this->prodId . " AND userId = " . $this->userId . "";
                $conexion->exec($insercion);
            }

            //restamos 1 al stock
            $subtractStock = "UPDATE products SET stock = stock - 1 WHERE id = " . $this->prodId . "";
            $conexion->exec($subtractStock);
        }

    }

    #CUENTA LOS PRODUCTOS EN CARRITO
    public static function totalQuantity()
    {
        $conexion = CarritoDB::connectDB();
        if (isset($_SESSION['user'])) {

            $selection = "SELECT SUM(quantity) as total FROM cart WHERE userId = " . $_SESSION['user']['id'] . "";
            $consult = $conexion->query($selection);
            $registro = $consult->fetchObject();
            return $registro;
        }
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
     * Get the value of userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     */
    public function setUserId($userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of prodId
     */
    public function getProdId()
    {
        return $this->prodId;
    }

    /**
     * Set the value of prodId
     */
    public function setProdId($prodId): self
    {
        $this->prodId = $prodId;

        return $this;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     */
    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
