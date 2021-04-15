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
$route ['aluno/cadastro-realizado'] = 'usuario/cadastro_realizado';
$route ['aluno/sair'] = 'aluno/sair';

$route ['aluno/avaliacao'] = 'avaliacao/index';
$route ['aluno/avaliacao-realizada'] = 'avaliacao/avaliacao_realizada';


$route ['avaliacao/estatisticas'] = 'avaliacao/estatisticas';

$route ['aluno/cadastro/salvar'] = 'Usuario/salvar';

$route ['alergias/listar'] = 'Alergia/listar';
$route ['alergias/salvar'] = 'Alergia/salvar';
$route ['alergias/editar'] = 'Alergia/editar';
$route ['alergias/excluir'] = 'Alergia/excluir';

$route ['alergiausuario/listar'] = 'AlergiaUsuario/listar';
$route ['alergiausuario/salvar'] = 'AlergiaUsuario/salvar';
$route ['alergiausuario/editar'] = 'AlergiaUsuario/editar';
$route ['alergiausuario/excluir'] = 'AlergiaUsuario/excluir';

$route ['avaliacao/salvar'] = 'avaliacao/salvar';