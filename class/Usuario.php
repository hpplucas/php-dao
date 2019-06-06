<?php 

class Usuario {
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;



	public function getIdusuario() {
		return $this->idusuario;
	}

	public function setIdusuario($id) {
		$this->idusuario = $id;
	}

	public function getDeslogin() {
		return $this->deslogin;
	}

	public function setDeslogin($login) {
		$this->deslogin = $login;
	}

	public function getDessenha() {
		return $this->dessenha;
	}

	public function setDessenha($senha) {
		$this->dessenha = $senha;
	}

	public function getDtcadastro() {
		return $this->dtcadastro;
	}

	public function setDtcadastro($dtcadastro) {
		$this->dtcadastro = $dtcadastro;
	}

	public function loadById($id) {
		$sql = new Sql();

		$result = $sql->select("SELECT * FROM db_usuarios WHERE idusuario = :ID", array(
			":ID" => $id
		));

		if (isset($result[0])) {

			$row = $result[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		}

	}

	public function __toString() {
		return json_encode(array(
			"id" => $this->getIdusuario(),
			"login" => $this->getDeslogin(),
			"senha" => $this->getDessenha(),
			"dtcadastro" => $this->getDtcadastro()->format("d/m/Y H:i:s")
		));
	}

}

?>