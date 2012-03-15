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

$string['typemaharamessage'] = 'Mensagem do sistema';
$string['typeusermessage'] = 'Mensagens de outros utilizadores';
$string['typewatchlist'] = 'Lista de monitorização';
$string['typeviewaccess'] = 'Novo acesso á página';
$string['typecontactus'] = 'Contacte-nos';
$string['typeobjectionable'] = 'Conteúdo Objectável';
$string['typevirusrepeat'] = 'Envio repetido de virus';
$string['typevirusrelease'] = 'Remover aviso de virus';
$string['typeadminmessages'] = 'Mensagens de administração';
$string['typeinstitutionmessage'] = 'Mensagem de instituição';
$string['typegroupmessage'] = 'Mensagem de grupo';

$string['type'] = 'Tipo de actividade';
$string['attime'] = 'em';
$string['prefsdescr'] = 'Se seleccionar qualquer das opções de email, as notificações ainda irão chegar á sua caixa de entrada, mas serão marcadas automaticamente como lidas.';

$string['subject'] = 'Assunto';
$string['date'] = 'Data';
$string['read'] = 'Lido';
$string['unread'] = 'Não lido';

$string['markasread'] = 'Marcar como lido';
$string['selectall'] = 'Seleccionar tudo';
$string['recurseall'] = 'Contrair todas';
$string['alltypes'] = 'Todos os tipos';

$string['markedasread'] = 'Marcar as suas notificações como lidas';
$string['failedtomarkasread'] = 'Ocorreu um erro ao marcar as suas notificções como lidas';

$string['deletednotifications'] = ' %s notificações eliminadas';
$string['failedtodeletenotifications'] = 'Ocorreu um erro ao eliminar as suas notifições';

$string['stopmonitoring'] = 'Parar a monitorização';
$string['artefacts'] = 'Artefactos';
$string['groups'] = 'Grupos';
$string['monitored'] = 'Monitorizado';

$string['stopmonitoringsuccess'] = 'Monitorização parada com sucesso';
$string['stopmonitoringfailed'] = 'Ocorreu um erro ao parar a monitorização';

$string['newwatchlistmessage'] = 'Nova actividade na sua lista de monitorização';
$string['newwatchlistmessageview'] = '%s alterou a página "%s"';

$string['newviewsubject'] = 'Nova página criada';
$string['newviewmessage'] = '%s criou uma nova página "%s"';

$string['newcontactusfrom'] = 'Novo contacto de';
$string['newcontactus'] = 'Novo contacto';

$string['newviewaccessmessage'] = 'Foi adicionado á lista de acessos para a página chamada "%s" de %s';
$string['newviewaccessmessagenoowner'] = 'Foi adicionado á lista de acessos da página "%s"';
$string['newviewaccesssubject'] = 'Novo acesso a página';

$string['viewmodified'] = 'alterou a sua página';
$string['ongroup'] = 'no Grupo';
$string['ownedby'] = 'autor';

$string['objectionablecontentview'] = 'Conteúdo objectável na Página "%s" notificado por %s';
$string['objectionablecontentviewartefact'] = 'Conteúdo objectável na Página "%s" em "%s" notificado por %s';

$string['objectionablecontentviewhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">Conteúdo objectável em  "%s" notificado por %s<strong></strong><br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p>A queixa está relaccionad com: <a href="%s">%s</a></p>
<p>Notificado por: <a href="%s">%s</a></p>
</div>';
$string['objectionablecontentviewtext'] = 'Conteúdo objectável em "%s" notificado por %s
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Para ver a página, siga a seguinte hiperligação:
%s
Para ver o perfil do utilizador que efectuou a notificação, siga seguinte hiperligação:
%s';

$string['objectionablecontentviewartefacthtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">Conteúdo objectável em "%s" no "%s" notificado por %s<strong></strong><br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p>A queixa está relaccionad com: <a href="%s">%s</a></p>
<p>Notificado por: <a href="%s">%s</a></p>
</div>';
$string['objectionablecontentviewartefacttext'] = 'Conteúdo objectável em "%s" noin "%s" notificado por %s
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Para ver a página, siga a seguinte hiperligação:
%s
Para ver o perfil do utilizador que efectuou a notificação, siga seguinte hiperligação:
%s';

$string['newgroupmembersubj'] = '%s faz agora parte do grupo!';
$string['removedgroupmembersubj'] = '%s já não é membro do grupo';

$string['addtowatchlist'] = 'Adicionar á lista de monitorização';
$string['removefromwatchlist'] = 'Remover da lista de monitorização';

$string['missingparam'] = 'O parâmetro %s estava vazio para o tipo de actividade %s';

$string['institutionrequestsubject'] = '%s pediu adesão a %s.';
$string['institutionrequestmessage'] = 'Pode adicionar utilizadores a instituições na página de Membros da Instituição:';

$string['institutioninvitesubject'] = 'Foi convidado a aderir á instituição %s.';
$string['institutioninvitemessage'] = 'Pode confirmar a sua adesão a esta instituição na página de Definições da Instituição:';

$string['deleteallnotifications'] = 'Eliminar todas as notificações';
$string['reallydeleteallnotifications'] = 'Tem a certeza que deseja eliminar todas as suas notificações?';

$string['viewsubmittedsubject'] = 'página submetida para %s';
$string['viewsubmittedmessage'] = '%s submeteu a sua sua página "%s" para %s';

$string['adminnotificationerror'] = 'O erro de notificação do utilizador foi provavelmente causado pela sua configuração do servidor.';

?>
