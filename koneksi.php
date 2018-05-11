<?php
class koneksi {
    private  $server = "localhost";
    private  $username = "id5720675_dicky";
    private  $password = "dicky";
    private  $db = "id5720675_fathur";
    private  $hubungan;

    function ambilkoneksi() {
    	$hubungan = new mysqli($this->server, $this->username,
    		$this->password, $this->db);
    	return $hubungan;
    }
}
?>
