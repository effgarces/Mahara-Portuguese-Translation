<?php
/**
 * Mahara: Electronic portefólio, weblog, resume builder and social networking
 * Copyright (C) 2006-2009 Catalyst IT Ltd and others; see:
 *                         http://wiki.mahara.org/Contributors
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage pt.utf8
 * @author     Direcção de Serviços de Tecnologias Educativas
 * @author     Emanuel Garcês & Rosa Silva
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2009 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Perfil';

$string['profile'] = 'Perfil';

$string['mandatory'] = 'Obrigatório';
$string['public'] = 'Público';

$string['aboutdescription'] = 'Introduza o seu primeiro e último nome. Se desejar exibir um nome diferente para os utilizadores, defina esse nome no apelido.';
$string['infoisprivate'] = 'Esta informação é privada até que decida incluí-la numa página que esteja a ser partilhada com outros utilizadores.';
$string['viewmyprofile'] = 'Ver o meu perfil';

// profile categories
$string['aboutme'] = 'Geral';
$string['contact'] = 'Informação de contacto';
$string['messaging'] = 'Mensagens';
$string['general'] = 'Ocupação';

// profile fields
$string['firstname'] = 'Primeiro Nome';
$string['lastname'] = 'Último Nome';
$string['fullname'] = 'Nome Completo';
$string['institution'] = 'Instituição';
$string['studentid'] = 'ID de Estudante';
$string['preferredname'] = 'Cognome';
$string['introduction'] = 'Introdução';
$string['email'] = 'Endereço de Email';
$string['maildisabled'] = 'Email Desactivado';
$string['officialwebsite'] = 'Endereço do Site Oficial';
$string['personalwebsite'] = 'Endereço do Site Pessoal';
$string['blogaddress'] = 'Endereço do Blogue';
$string['address'] = 'Endereço Postal';
$string['town'] = 'Município';
$string['city'] = 'Cidade';
$string['country'] = 'País';
$string['homenumber'] = 'Telefone de Casa';
$string['businessnumber'] = 'Telefone do Trabalho';
$string['mobilenumber'] = 'Telemóvel';
$string['faxnumber'] = 'Número de Fax';
$string['icqnumber'] = 'Número de ICQ';
$string['msnnumber'] = 'ID do MSN';
$string['aimscreenname'] = 'ID do AIM';
$string['yahoochat'] = 'ID do Yahoo';
$string['skypeusername'] = 'ID do Skype';
$string['jabberusername'] = 'ID do Jabber';
$string['occupation'] = 'Ocupação';
$string['industry'] = 'Indústria';

// Field names for view user and search user display
$string['name'] = 'Nome';
$string['principalemailaddress'] = 'Email primário';
$string['emailaddress'] = 'Email alternativo';

$string['saveprofile'] = 'Guardar Perfil';
$string['profilesaved'] = 'Perfil salvo com sucesso';
$string['profilefailedsaved'] = 'Ocorreu um erro ao guardar o perfil';


$string['emailvalidation_subject'] = 'Validação de email';
$string['emailvalidation_body'] = <<<EOF
Olá %s,

Adicionou o endereço de email %s á sua conta de utilizador no Mahara. Por favor visite a hiperligação abaixo para activar este endereço.

%s

Se este email pertence-lhe mais não efectuou um pedido para adicioná-lo á sua conta do Mahara, siga a seguinte hiperligação para recusar a activação do email.

%s
EOF;

$string['validationemailwillbesent'] = 'um email de validação será enviado quando guardar o seu perfil';
$string['validationemailsent'] = 'um email de validação foi enviado';
$string['emailactivation'] = 'Email de Activação';
$string['emailactivationsucceeded'] = 'Activação do email efectuada com sucesso';
$string['emailalreadyactivated'] = 'Email já activado';
$string['emailactivationfailed'] = 'Ocorreu um erro na activação do email';
$string['emailactivationdeclined'] = 'Activação do email recusada com sucesso';
$string['verificationlinkexpired'] = 'A hiperligação de verificação expirou';
$string['invalidemailaddress'] = 'Endereço de email inválido';
$string['unvalidatedemailalreadytaken'] = 'O endereço de email que está a tentar validar já está em utilização';
$string['addbutton'] = 'Adicionar';

$string['emailingfailed'] = 'Perfil salvo, mas os emails não foram enviados para: %s';

$string['loseyourchanges'] = 'Ignorar as suas alterações?';

$string['Title'] = 'Título';

$string['Created'] = 'Criado';
$string['Description'] = 'Descrição';
$string['Download'] = 'Descarregar';
$string['lastmodified'] = 'Última Modificação';
$string['Owner'] = 'Proprietário';
$string['Preview'] = 'Pré-visualizar';
$string['Size'] = 'Tamanho';
$string['Type'] = 'Tipo';

$string['profileinformation'] = 'Informação do Perfil';
$string['profilepage'] = 'Página do Perfil';
$string['viewprofilepage'] = 'Ver a página do perfil';
$string['viewallprofileinformation'] = 'Ver todas as informações do perfil';

?>
