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

// admin/index
$route ['admin'] = 'Admin/index';

// admin/alergias
$route ['admin/alergias/listar'] = 'Alergia/listar';
$route ['admin/alergias/salvar'] = 'Alergia/salvar';
$route ['admin/alergias/editar'] = 'Alergia/editar';
$route ['admin/alergias/excluir'] = 'Alergia/excluir';

// admin/usuario
$route ['admin/usuarios/listar'] = 'Usuario/listar';
$route ['admin/usuarios/salvar'] = 'Usuario/salvar';
$route ['admin/usuarios/editar'] = 'Usuario/editar';
$route ['admin/usuarios/excluir'] = 'Usuario/excluir';

// admin/alergiausuario
$route ['admin/alergiausuario/listar'] = 'AlergiaUsuario/listar';
$route ['admin/alergiausuario/salvar'] = 'AlergiaUsuario/salvar';
$route ['admin/alergiausuario/editar'] = 'AlergiaUsuario/editar';
$route ['admin/alergiausuario/excluir'] = 'AlergiaUsuario/excluir';

// admin/avaliacoes
$route ['admin/avaliacoes/listar'] = 'Avaliacao/listar';
$route ['admin/avaliacoes/salvar'] = 'Avaliacao/salvar';
$route ['admin/avaliacoes/editar'] = 'Avaliacao/editar';
$route ['admin/avaliacoes/excluir'] = 'Avaliacao/excluir';

// admin/campus
$route ['admin/campus/listar'] = 'Campus/listar';
$route ['admin/campus/salvar'] = 'Campus/salvar';
$route ['admin/campus/editar'] = 'Campus/editar';
$route ['admin/campus/excluir'] = 'Campus/excluir';


//admin/estatisticas
$route ['admin/estatisticas'] = 'Admin/estatisticas';

// usuario
$route ['aluno/cadastro'] = 'usuario/cadastro';
$route ['usuario/cadastro/editar'] = 'usuario/editar_cadastro';
$route ['aluno/cadastro-realizado'] = 'usuario/cadastro_realizado';
$route ['aluno/sair'] = 'aluno/sair';

$route ['usuario/avaliacao'] = 'Avaliacao/index';
$route ['aluno/avaliacao-realizada'] = 'avaliacao/avaliacao_realizada';


$route ['estatisticas'] = 'avaliacao/estatisticas';

$route ['aluno/cadastro/salvar'] = 'Usuario/salvar';

$route ['avaliacao/salvar'] = 'avaliacao/salvar';