<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route ['index'] = 'welcome/index';
$route ['aluno'] = 'aluno/index';
$route ['login'] = 'aluno/login';

$route ['aluno/cadastro'] = 'usuario/cadastro';
$route ['aluno/cadastro/editar'] = 'aluno/editar_cadastro';
$route ['aluno/cadastro-realizado'] = 'aluno/cadastro_realizado';
$route ['aluno/sair'] = 'aluno/sair';

$route ['aluno/avaliacao'] = 'avaliacao/index';
$route ['aluno/avaliacao-realizada'] = 'avaliacao/avaliacao_realizada';
$route ['aluno/estatisticas'] = 'aluno/estatisticas';

$route ['avaliacao/estatisticas'] = 'avaliacao/estatisticas';

$route ['aluno/cadastro/salvar'] = 'Usuario/salvarDados';