<?php

/**
* Plugin Name: Busca pelo Cep.
* Description: Este plugin busca os dados de endereço de uma pessoa pelo cep.
* Version: 1.0
* Author: Raphaela Candido Zanirato. 3MIN.
*/


function buscador()
{
	echo file_get_contents(plugins_url().'/busca-cep/formBusca.php');
}

add_shortcode('buscaCep','buscador');