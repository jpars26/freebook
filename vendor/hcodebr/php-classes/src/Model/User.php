<?php
namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;

class User extends Model{
    const SESSION = "User";

	public static function login($login, $password){
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM administrador WHERE login = :LOGIN", array(
			":LOGIN"=>$login
		));
		if(count($results) === 0 ){
			throw new \Exception("Usuário Inexistente ou Senha Inválida.");
		}
		$data = $results[0];

		if(password_verify($password, $data["password"]) === true){
			$user = new User();
			$user->setData($data);
			$_SESSION[User::SESSION] = $user->getValues();
		    return $user;
		}else{
			throw new \Exception("Usuário Inexistente ou Senha Inválidaaaaa.");
		}
	}

	public static function verifyLogin($inadmin = true)
    {
        if(
            !isset($_SESSION[User::SESSION])
            ||
            !$_SESSION[User::SESSION]
            ||
            !(int)$_SESSION[User::SESSION]["ID"] > 0
            ||
            (bool)$_SESSION[User::SESSION]["inadmin"] !== $inadmin
        ){
            header("Location: /admin/login");
            exit;
        }
    }

    public static function logout(){
        $_SESSION[User::SESSION] = NULL;
    }

    public static function listAll(){
    	$sql = new Sql();
    	return $sql->select("SELECT * FROM administrador");
    }

    public function save(){
    	$sql = new Sql();
    	$results = $sql->select("CALL sp_users_save(:NOME, :ENDERECO, :TELEFONE, :EMAIL, :password, :login, :inadmin)", array(
    		":NOME"=>$this->getNOME(),
    		":ENDERECO"=>$this->getENDERECO(),
    		":TELEFONE"=>$this->getTELEFONE(),
    		":EMAIL"=>$this->getEMAIL(),
    		":password"=>$this->getpassword(),
    		":login"=>$this->getlogin(),
    		":inadmin"=>$this->getinadmin()
    	));
		$this->setData($results[0]);
    
}

public function get($iduser){
	$sql = new Sql();
	$results = $sql->select("SELECT * FROM administrador where ID = :iduser",array(
		":iduser"=>$iduser
	));		
	$this->setData($results[0]);
}

public function update(){
    	$sql = new Sql();
    	$results = $sql->select("CALL sp_update_save(:ID, :NOME, :ENDERECO, :TELEFONE, :EMAIL, :password, :login, :inadmin)", array(
    		":ID"=>$this->getID(),
    		":NOME"=>$this->getNOME(),
    		":ENDERECO"=>$this->getENDERECO(),
    		":TELEFONE"=>$this->getTELEFONE(),
    		":EMAIL"=>$this->getEMAIL(),
    		":password"=>$this->getpassword(),
    		":login"=>$this->getlogin(),
    		":inadmin"=>$this->getinadmin()
    	));
		$this->setData($results[0]);
    
}

public function delete(){
    $sql = new Sql();
    $sql->query("CALL sp_users_delete(:ID)",array(
        ":ID"=>$this->getID()
    ));

}


}

?>