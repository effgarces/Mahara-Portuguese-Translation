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

$string['changepassworddesc'] = 'Nova senha';
$string['changepasswordotherinterface'] = 'Pode <a href="%s">alterar a sua senha</a> através de uma outra interface';
$string['oldpasswordincorrect'] = 'Esta não é a sua senha actual';

$string['changeusernameheading'] = 'Alterar nome de utilizador';
$string['changeusername'] = 'Novo nome de utilizador';
$string['changeusernamedesc'] = 'O nome de utilizador que utiliza para autenticar-se %s. Os nomes de utilizadores têm ente 3 a 30 caracteres, e podem conter letras, números, e a maioria dos símbolos comuns exceptuando espaços.';

$string['usernameexists'] = 'Este nome de utilizador já se encontra em utilização, por favor escolha outro.';

$string['accountoptionsdesc'] = 'Opções gerais de conta';
$string['friendsnobody'] = 'Ninguém pode adicionar-me como amigo';
$string['friendsauth'] = 'Novos amigos requerem a minha autorização';
$string['friendsauto'] = 'Novos amigos são autorizados automáticamente';
$string['friendsdescr'] = 'Controlo de amigos';
$string['updatedfriendcontrolsetting'] = 'Controlo de amigos actualizado';

$string['wysiwygdescr'] = 'Editor HTML';
$string['on'] = 'Ligado';
$string['off'] = 'Desligado';
$string['disabled'] = 'Desactivado';
$string['enabled'] = 'Activado';

$string['messagesdescr'] = 'Mensagens de outros utilizadores';
$string['messagesnobody'] = 'Não permitir que me enviem mensagens';
$string['messagesfriends'] = 'Apenas pessoas que estão na minha lista de amigos podem enviar-me mensagens';
$string['messagesallow'] = 'Qualquer pessoa pode enviar-me mensagens';

$string['language'] = 'Língua';

$string['showviewcolumns'] = 'Exibir controlos para adicionar e remover colunas quando editar a página';

$string['tagssideblockmaxtags'] = 'Número máximo de tags na nuvem';
$string['tagssideblockmaxtagsdescription'] = 'Número máximo de tags a exibir na sua Nuvem de Tags';

$string['enablemultipleblogs'] = 'Activar diários múltiplos';
$string['enablemultipleblogsdescription']  = 'Por omissão, tem um diário. Se quiser manter mais de um diário, active esta opção.';
$string['disablemultipleblogserror'] = 'Não pode desactivar a opção diários múltiplos, a não ser que apenas tenha um só diário';

$string['hiderealname'] = 'Esconder nome real';
$string['hiderealnamedescription'] = 'Marque esta caixa se definiu um cognome e não quer os outros utilizadores o possam encontrar através do seu nome real.';

$string['showhomeinfo'] = 'Exibir informação sobre o Mahara na página de entrada';

$string['mobileuploadtoken'] = 'Código para envios via dispositivo móvel';
$string['mobileuploadtokendescription'] = 'Introduza o código aqui e no seu telemóvel para activar os envios (nota: o código irá mudar automáticamente após cada envio. <br/>Se se deparar com qualquer problema - reinicie aqui e no seu telemóvel).';

$string['prefssaved']  = 'As Preferências foram salvas';
$string['prefsnotsaved'] = 'Ocorreu um erro ao guardar as suas preferências!';

$string['maildisabled'] = 'E-mail desactivado';
$string['maildisabledbounce'] =<<< EOF
O envio de emails para o seu endereço de email foi desactivado devido a demasiadas mensagens que foram devolvidas ao servidor.
Por favor verifique que a sua conta de email está a funcionar correctamente antes de reactivar o seu email nas preferências de conta em %s.
EOF;
$string['maildisableddescription'] = 'O envio de emails para o seu endereço de email foi desactivado. Pode <a href="%s">reactivar o seu email</a> na página de preferências de conta.';

$string['deleteaccount']  = 'Eliminar Conta';
$string['deleteaccountdescription']  = 'Se eliminar a sua conta, o seu Perfil e Páginas já não serão visíveis para outros utilizadores. O conteúdo de qualquer mensagem colocada no fórum ainda será visível, mas nome do autor já não será exibido.';
$string['accountdeleted']  = 'A sua conta foi eliminada.';
?>
