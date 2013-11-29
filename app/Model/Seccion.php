<?php
class Seccion extends AppModel{
	public $hasMany = 'Noticia';
	public $displayField = 'titulo';
}
?>