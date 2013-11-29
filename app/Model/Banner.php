<?php
class Banner extends AppModel{
	public $hasAndBelongsToMany = array(
        'Seccion' =>
            array(
                'className' => 'Seccion',
                'joinTable' => 'seccions_banners',
                'foreignKey' => 'banners_id',
                'associationForeignKey' => 'seccions_id',
                'unique' => true
            )
    );
}
?>