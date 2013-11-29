<?php
class Noticia extends AppModel{
	public $belongsTo = 'Seccion';
	public $displayField = 'titulo';
}
?>