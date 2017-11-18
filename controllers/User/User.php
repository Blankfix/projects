<?php
include '/models/inc/database.php';
class User{
	public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $role;
    public $group;
    public $phone;
    public function __construct($id, $email, $password, $role){
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->group = $group;
        $this->phone = $phone;
    }
    /*
    Méthodes validation ( statiques )
    @return bool
    @param string
    */
    public static function verifierEmail($value){
        $value = strtolower(trim(strip_tags($value)));
        if(!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/", $value)){
            return false;
        }
        return true;
    }
    public static function verifierpassword($value){
        $value = strtolower(trim(strip_tags($value)));
        if(mb_strlen($value) < 4){
            return false;
        }
        return true;
    }
    public static function crypterpassword($value){
        return md5($value);
    }
    public static function identifier($email, $password, $role){
        global $cnx;
        $val = array(':email'=>$email, ':password'=>$password, ':role'=>$role);
        $req = "SELECT id, COUNT(id) as nb FROM user WHERE email = :email AND password = :password AND role = :role";
        $res = $cnx->prepare($req);
        $res->execute($val);
        $row = $res->fetch(PDO::FETCH_OBJ);
        if($row->nb == 0){
            return false;
        }
        return $row->id;
    }
    /*
    Méthode new object user from db ( statique )
    @return object
    @param id
    */
    public static function constructFromDb($id){
        global $cnx;
        $val = array(':id'=>$id);
        $req = "SELECT * FROM user WHERE id = :id";
        $res = $cnx->prepare($req);
        $res->execute($val);
        $row = $res->fetch(PDO::FETCH_OBJ);
        $user = new user($row->id, $row->email, $row->password, $row->role);
        return $user;
    }
    /*
    Méthode collection new objects user from db ( statique )
    @return object collection
    @param user role ( 0 = membre || 1 = admin ), limit ( x,y )
    */
    public static function constructAllFromDb($param){
        global $cnx;
        $where = null; $limit = null;
        $val = null;
        $collection = new collection();
        if(isset($param[0])){
            /*$where = "WHERE role = :id";
            $val[':id'] = $param[0];*/
            $where = "WHERE role = ".$param[0];
        }
        if(isset($param[1])){
            /*$limit = "LIMIT :limit";
            $val[':limit'] = $param[1];*/
            $limit = "LIMIT ".$param[1];
        }
        $req = "SELECT * FROM user ".$where.' '.$limit;
        $res = $cnx->prepare($req);
        $res->execute($val);
        while($row = $res->fetch(PDO::FETCH_OBJ)){
            $user = new user($row->id, $row->email, $row->password, $row->role);
            $collection->add($user);
        }
        return $collection;
    }
    /*
    Méthode user operations
    */
    public function loguer(){
        $_SESSION['user'] = serialize($this);
    }
    public function updateDb(){
        global $cnx;
        if($this->id == null){
            $val = array(':email'=>$this->email, ':firstname'=>$this->firstname, ':lastname'=>$this->lastname, ':password'=>$this->password, ':role'=>$this->role);
            $req = "INSERT INTO user (id, email, password, role) VALUES ('', :email, :password, :role)";
        }
        else{
            $val = array(':id'=>$this->id, ':email'=>$this->email, ':role'=>$this->role);
            $req = "UPDATE user SET email = :email, role = :role WHERE id = :id";
        }
        $res = $cnx->prepare($req);
        $res->execute($val);
        $row = $res->fetch(PDO::FETCH_OBJ);
    }
    public function delFromDb(){
        global $cnx;
        $val = array(':id'=>$this->id);
        $req = "DELETE FROM user WHERE id = :id";
        $res = $cnx->prepare($req);
        $res->execute($val);
    }
     
}