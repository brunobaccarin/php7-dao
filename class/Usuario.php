<?php 

class Usuario {
	
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $descadastro;

	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario($value){
		$this->idusuario = $value;
	}

	public function getDeslogin(){
		return $this->deslogin;
	}

	public function setDeslogin($value){
		$this->deslogin = $value;
	}

	public function getDessenha(){
		return $this->dessenha;
	}

	public function setDessenha($value){
		$this->dessenha = $value;
	}

	public function getDescadastro(){
		return $this->descadastro;
	}

	public function setDescadastro($value){
		$this->descadastro = $value;
	}


	public function loadById($id){

		$sql = new sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if (count($results) > 0){
			$row = $results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDescadastro(new DateTime ($row['descadastro']));
		}
	}

	public function __toString(){

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"descadastro"=>$this->getDescadastro()->format("d/m/Y H:i:s")
		));
	}

}


 ?>