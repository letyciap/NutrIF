<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route ['index'] = 'welcome/index';
$route ['aluno'] = 'aluno/index';
$route ['login'] = 'aluno/login';

$route ['aluno/cadastro'] = 'aluno/cadastro';
$route ['aluno/cadastro/editar'] = 'aluno/editar_cadastro';
$route ['aluno/cadastro-realizado'] = 'aluno/cadastro_realizado';

$route ['aluno/avaliacao'] = 'avaliacao/index';
$route ['aluno/avaliacao-realizada'] = 'avaliacao/avaliacao_realizada';
$route ['aluno/estatisticas'] = 'avaliacao/estatisticas';