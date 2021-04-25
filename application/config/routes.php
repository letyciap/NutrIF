<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route ['index'] = 'welcome/index';
$route ['aluno'] = 'Usuario/index';
$route ['login'] = 'aluno/login';
$route ['usuario/autenticar'] = 'Usuario/autenticar';
$route ['usuario/sair'] = 'Usuario/logoff';

$route ['aluno/cadastro'] = 'usuario/cadastro';
$route ['usuario/cadastro/editar'] = 'usuario/editar_cadastro';
$route ['aluno/cadastro-realizado'] = 'usuario/cadastro_realizado';
$route ['aluno/sair'] = 'aluno/sair';

$route ['usuario/avaliacao'] = 'Avaliacao/index';
$route ['aluno/avaliacao-realizada'] = 'avaliacao/avaliacao_realizada';


$route ['estatisticas'] = 'avaliacao/estatisticas';

$route ['aluno/cadastro/salvar'] = 'Usuario/salvar';

$route ['alergias/listar'] = 'Alergia/listar';
$route ['alergias/salvar'] = 'Alergia/salvar';
$route ['alergias/editar'] = 'Alergia/editar';
$route ['alergias/excluir'] = 'Alergia/excluir';

$route ['usuario/listar'] = 'Usuario/listar';
$route ['usuario/salvar'] = 'Usuario/salvar';
$route ['usuario/editar'] = 'Usuario/editar';
$route ['usuario/excluir'] = 'Usuario/excluir';

$route ['alergiausuario/listar'] = 'AlergiaUsuario/listar';
$route ['alergiausuario/salvar'] = 'AlergiaUsuario/salvar';
$route ['alergiausuario/editar'] = 'AlergiaUsuario/editar';
$route ['alergiausuario/excluir'] = 'AlergiaUsuario/excluir';

$route ['avaliacao/salvar'] = 'avaliacao/salvar';