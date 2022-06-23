<?php require_once 'CarritoBD.php';

class User{
    
    private $id;
    private $nick;
    private $name;
    private $surnames;
    private $email;
    private $image;
    private $password;
    private $type;

    function __construct($id, $nick = "", $name = "", $surnames = "", $email = "", $image = "", $password = "", $type = "")
    {
        $this->id = $id;
        $this->nick = $nick;
        $this->name = $name;
        $this->surnames = $surnames;
        $this->email = $email;
        $this->image = $image;
        $this->password = $password;
        $this->type = $type;
    }

    #METODOS
    
    public static function getUser($nick){
        $conexion = CarritoDB::connectDB();
        $selection = "SELECT * FROM users WHERE nick='".$nick."'";
        $consult = $conexion->query($selection);
        $user = "";
        while ($registro = $consult->fetchObject()) {
            $user = new User(
                $registro->id,
                $registro->nick,
                $registro->name,
                $registro->surnames,
                $registro->email,
                $registro->image,
                $registro->password,
                $registro->type
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
     * Get the value of nick
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set the value of nick
     */
    public function setNick($nick): self
    {
        $this->nick = $nick;

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
     * Get the value of surnames
     */
    public function getSurnames()
    {
        return $this->surnames;
    }

    /**
     * Set the value of surnames
     */
    public function setSurnames($surnames): self
    {
        $this->surnames = $surnames;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

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
}

?>