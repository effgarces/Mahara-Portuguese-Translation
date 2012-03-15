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

// IMAP
$string['host'] = 'Nome do host or endereço';
$string['wwwroot'] = 'WWW Root';

$string['port'] = 'Número de porta'; 
$string['protocol'] = 'Protocolo';
$string['changepasswordurl'] = 'URL para alteração da senha';
$string['cannotremove']  = "Não é possível eliminar este plugin de autenticação, pois é o único plugin de autenticação que existe para esta instituição.";
$string['cannotremoveinuse']  = "Não é possível eliminar este plugin de autenticação, pois está a ser usado por alguns utilizadores.\nTem que actualizar os registos do utilizadores em questão antes que possa remover este plugin.";
$string['saveinstitutiondetailsfirst'] = 'Por favor salve os detalhes da instituição antes de configurar os plugins de autenticação.';

$string['editauthority'] = 'Editar uma Autoridade';
$string['addauthority']  = 'Adicionar uma Autoridade';

$string['updateuserinfoonlogin'] = 'Actualizar dados do utilizador na autenticação';
$string['updateuserinfoonlogindescription'] = 'Acede aos dados do utilizador no servidor remoto e actualiza os dados locais de cada vez que o utilizador efectuar a autenticação.';
$string['xmlrpcserverurl'] = 'URL do servidor XML-RPC';
$string['ipaddress'] = 'Endereço IP';
$string['shortname'] = 'Nome curto para o seu site';
$string['name'] = 'Nome do Site';
$string['nodataforinstance'] = 'Não foi possível encontrar os dados necessário para efectuar a autenticação na instância ';
$string['authname'] = 'Nome da autoridade';
$string['weautocreateusers'] = 'Nós criamos conta de utilizador automáticamente';
$string['theyautocreateusers'] = 'Eles criam contas de utilizador automáticamente';
$string['parent'] = 'Autoridade superior';
$string['wessoout'] = 'Identificar saídas via SSO';
$string['weimportcontent'] = 'Nós importamos conteúdos';
$string['weimportcontentdescription'] = '(apenas de algumas aplicações)';
$string['theyssoin'] = 'Pedidos SSO';
$string['authloginmsg'] = "Introduza a mensagem a visualizar quando um utilizador tentar efectuar a autenticação via o formulário de autenticação do Mahara";
$string['application'] = 'Applicação';
$string['cantretrievekey'] = 'Ocorreu um erro ao tentar obter a chave pública do servidor remoto.<br>Por favor assegure-se que os campos Aplicação e WWW Root estão correctos, e que o serviço de rede está activado no servidor remoto.';
$string['ssodirection'] = 'Direcção SSO';

$string['errorcertificateinvalidwwwroot'] = 'Este certificado indica que é para %s, no entanto está a tentar utilizá-lo para %s.';
$string['errorcouldnotgeneratenewsslkey'] = 'Não foi possível gerar uma nova chave SSL. Tem a certeza que o openssl e que o módulo openssl para o PHP estão instalados nesta máquina?';
$string['errnoauthinstances']   = 'Parece não existir nenhuma instância de plugins de autenticação configurada para o host em %s';
$string['errornotvalidsslcertificate'] = 'Este não é um Certificado SSL válido';
$string['errnoxmlrpcinstances'] = 'Parece não existir nenhuma instância de plugins de autenticação XMLRPC configurada para o host em %s';
$string['errnoxmlrpcwwwroot']   = 'Não existe nenhum registo de qualquer host em %s';
$string['errnoxmlrpcuser']      = "Não foi possível autenticá-lo neste momento. Causas prováveis:

    * A sua sessão SSO pode ter expirado. Volte á outra aplicação e clique na hiperligação para efectuar a autenticação no Mahara novamente.
    * Pode não ter autorização para efectuar a autenticação no Mahara via SSO. Por favor verifique com o seu administrador se deveria ser autorizado.";

$string['unabletosigninviasso'] = 'Não foi possível autenticar-se via SSO';
$string['xmlrpccouldnotlogyouin'] = 'Desculpe, não foi possível efectuar autenticação :(';
$string['xmlrpccouldnotlogyouindetail'] = 'Desculpe, não foi possível efectuar a autenticação neste momento. Por favor volte a tentar brevemente, e se o problema continuar, contacte o seu administrador';

$string['requiredfields'] = 'Campos de perfil necessários';
$string['requiredfieldsset'] = 'Campos de perfil necessários definidos';
$string['noauthpluginconfigoptions'] = 'Não existem opções de configuração associadas com este plugin';

$string['hostwwwrootinuse'] = 'WWW root já em uso por outra instituição (%s)';

// Error messages for external authentication usernames
$string['duplicateremoteusername'] = 'Este nome de utilizador da autenticação externa já está em uso pelo utilizador %s. Os nomes de utilizador de autenticação externa deverão ser únicos no método de autenticação.';
$string['duplicateremoteusernameformerror'] = 'Os nomes de utilizador de autenticação externa deverão ser únicos no método de autenticação.';
?>
