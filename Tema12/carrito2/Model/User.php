<?php require_once 'CarritoBD.php';

class User{
    
    private $id;
    private $name;
    private $password;
    private $type;
    private $token;
    private $petitions;

    function __construct($id, $name = "", $password = "", $type = "user", $token="", $petitions=0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->type = $type;
        $this->token = $token;
        $this->petitions = $petitions;
    }

    #METODOS
    public function insert(){
        $conexion = CarritoDB::connectDB();
        $insercion = "INSERT INTO users (name, password, token, petitions) VALUES ('$this->name', '$this->password',
        '$this->token', '$this->petitions')";
        $conexion->exec($insercion);
    }
    
    public static function getUser($name){
        $conexion = CarritoDB::connectDB();
        $selection = "SELECT * FROM users WHERE name='".$name."'";
        $consult = $conexion->query($selection);
        $user = "";
        while ($registro = $consult->fetchObject()) {
            $user = new User(
                $registro->id,
                $registro->name,
                $registro->password,
                $registro->type,
                $registro->token,
                $registro->petitions
            );
        }
        return $user;
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
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of petitions
     */
    public function getPetitions()
    {
        return $this->petitions;
    }

    /**
     * Set the value of petitions
     */
    public function setPetitions($petitions): self
    {
        $this->petitions = $petitions;

        return $this;
    }

    /**
     * Get the value of token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of token
     */
    public function setToken($token): self
    {
        $this->token = $token;

        return $this;
    }
}

?>