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

// my groups
$string['groupname'] = 'Nome do Grupo';
$string['creategroup'] = 'Criar Grupo';
$string['groupmemberrequests'] = 'Pedidos de adesão em espera';
$string['membershiprequests'] = 'Pedidos de adesão';
$string['sendinvitation'] = 'Enviar convite';
$string['invitetogroupsubject'] = 'Foi convidado para aderir a um grupo';
$string['invitetogroupmessage'] = '%s convidou-o a aderir ao grupo, \'%s\'. Clique na hiperligação para mais informações.';
$string['inviteuserfailed'] = 'Ocorreu um erro ao convidar o utilizador';
$string['userinvited'] = 'Convite enviado';
$string['addedtogroupsubject'] = 'Foi adicionado a um grupo';
$string['addedtogroupmessage'] = '%s foi adicionado ao grupo, \'%s\'. Clique na hiperligação abaixo para ver o grupo';
$string['adduserfailed'] = 'Ocorreu um erro ao adicionar o utilizador';
$string['useradded'] = 'Utilizador adicionado';
$string['editgroup'] = 'Editar Grupo';
$string['savegroup'] = 'Guardar Grupo';
$string['groupsaved'] = 'Grupo Salvo com Sucesso';
$string['invalidgroup'] = 'O grupo não existe';
$string['canteditdontown'] = 'Não pode editar este grupo porque não lhe pertence';
$string['groupdescription'] = 'Descrição do Grupo';
$string['membershiptype'] = 'Tipo de Adesão de Grupo';
$string['membershiptype.controlled'] = 'Adesão Controlada';
$string['membershiptype.invite']     = 'Apenas por Convite';
$string['membershiptype.request']    = 'Pedir Adesão';
$string['membershiptype.open']       = 'Adesão Livre';
$string['membershiptype.abbrev.controlled'] = 'Controlada';
$string['membershiptype.abbrev.invite']     = 'Convite';
$string['membershiptype.abbrev.request']    = 'Pedido';
$string['membershiptype.abbrev.open']       = 'Livre';
$string['pendingmembers']            = 'Membros em espera';
$string['reason']                    = 'Razão';
$string['approve']                   = 'Aprovar';
$string['reject']                    = 'Rejeitar';
$string['groupalreadyexists'] = 'Um Grupo com este nome já existe';
$string['Created'] = 'Criado';
$string['groupadmins'] = 'Administradores de grupo';
$string['Admin'] = 'Administrador';
$string['grouptype'] = 'Tipo de grupo';
$string['publiclyviewablegroup'] = 'Grupo Vísivel Publicamente?';
$string['publiclyviewablegroupdescription'] = 'Permite a pessoas que ainda não se autenticaram ver este grupo, incluindo os fórums?';
$string['Type'] = 'Tipo';
$string['publiclyvisible'] = 'Visível publicamente';
$string['Public'] = 'Público';
$string['usersautoadded'] = 'Utilizadores adicionados automaticamente?';
$string['usersautoaddeddescription'] = 'Colocar automaticamente todos os novos utilizadores neste grupo?';
$string['groupcategory'] = 'Categoria do Grupo';
$string['allcategories'] = 'Todas as categorias';
$string['groupoptionsset'] = 'As opções do grupo foram actualizadas.';
$string['nocategoryselected'] = 'Nenhuma categoria seleccionada';
$string['categoryunassigned'] = 'Categoria não atribuída';
$string['hasrequestedmembership'] = 'pediu adesão a este grupo';
$string['hasbeeninvitedtojoin'] = 'foi convidado para aderir a este grupo';
$string['groupinvitesfrom'] = 'Convidado a aderir:';
$string['requestedmembershipin'] = 'Pediu adesão em:';
$string['viewnotify'] = 'Ver notificações';
$string['viewnotifydescription'] = 'Se marcado, a notificação será enviada para todos os membros do grupo sempre que um membro partilha uma das suas Páginas com o grupo. Ao activar esta definição num grupo muito grande pode produzir muitas notificações.';

$string['editgroupmembership'] = 'Editar adesão de grupo';
$string['editmembershipforuser'] = 'Editar adesão para %s';
$string['changedgroupmembership'] = 'Adesão de grupo actualizada com sucesso.';
$string['changedgroupmembershipsubject'] = 'As adessões de grupo foram alteradas';
$string['addedtogroupsmessage'] = "%s adicionou-o ao grupo(s):\n\n%s\n\n";
$string['removedfromgroupsmessage'] = "%s removeu-o do grupo(s):\n\n%s\n\n";
$string['cantremoveuserisadmin'] = "O tutor não pode remover administradores ou tutores de outros membros.";
$string['cantremovemember'] = "O tutor não pode remover membros.";
$string['current'] = "Actual";
$string['requests'] = "Pedidos";
$string['invites'] = "Convites";

// Used to refer to all the members of a group - NOT a "member" group role!
$string['member'] = 'membro';
$string['members'] = 'membros';
$string['Members'] = 'Membros';

$string['memberrequests'] = 'Pedidos de adesão';
$string['declinerequest'] = 'Recusar pedido';
$string['submittedviews'] = 'Páginas submetidas';
$string['releaseview'] = 'Libertar página';
$string['invite'] = 'Convidar';
$string['remove'] = 'Eliminar';
$string['updatemembership'] = 'Actualizar adesão';
$string['memberchangefailed'] = 'Ocorreu um erro ao actualizar a informação de adesão';
$string['memberchangesuccess'] = 'O estado da adesão foi alterado com sucesso';
$string['viewreleasedsubject'] = 'A sua página "%s" foi libertada de %s por %s';
$string['viewreleasedmessage'] = 'A sua página "%s" foi libertada de %s por %s';
$string['viewreleasedsuccess'] = 'A página foi libertada com sucesso';
$string['groupmembershipchangesubject'] = 'Adesão de grupo: %s';
$string['groupmembershipchangedmessagetutor'] = 'Foi promovido a tutor neste grupo';
$string['groupmembershipchangedmessagemember'] = 'Foi despromovido de tutor neste grupo';
$string['groupmembershipchangedmessageremove'] = 'Foi eliminado deste grupo';
$string['groupmembershipchangedmessagedeclinerequest'] = 'O seu pedido para aderir a este grupo foi recusado';
$string['groupmembershipchangedmessageaddedtutor'] = 'Foi adicionado como tutor neste grupo';
$string['groupmembershipchangedmessageaddedmember'] = 'Foi adicionado como membro deste grupo';
$string['leavegroup'] = 'Abandonar este grupo';
$string['joingroup'] = 'Aderir a este grupo';
$string['requestjoingroup'] = 'Pedir adesão';
$string['grouphaveinvite'] = 'Foi convidado a aderir a este grupo';
$string['grouphaveinvitewithrole'] = 'Foi convidado a aderir a este grupo com o cargo de';
$string['groupnotinvited'] = 'Não foi convidado a aderir a este grupo';
$string['groupinviteaccepted'] = 'Convite aceite com sucesso! É agora membro deste grupo';
$string['groupinvitedeclined'] = 'Convite recusado com sucesso!';
$string['acceptinvitegroup'] = 'Aceitar';
$string['declineinvitegroup'] = 'Recusar';
$string['leftgroup'] = 'Abandou este grupo';
$string['leftgroupfailed'] = 'Ocorreu um erro ao abandonar este grupo';
$string['couldnotleavegroup'] = 'Não pode abandonar este grupo';
$string['joinedgroup'] = 'É agora membro do grupo';
$string['couldnotjoingroup'] = 'Não pode aderir a este grupo';
$string['grouprequestsent'] = 'Pedido de adesão ao grupo enviado';
$string['couldnotrequestgroup'] = 'Não foi possível enviar um pedido de adesão a este grupo';
$string['cannotrequestjoingroup'] ='Não pode efectuar um pedido de adesão a este grupo';
$string['groupjointypeopen'] = 'A adesão a este grupo é livre. Pode a qualquer momento aderir a este grupo!';
$string['groupjointypecontrolled'] = 'A adesão a este grupo é controlada. Não pode aderir a este grupo.';
$string['groupjointypeinvite'] = 'A adesão a este grupo é apenas por convite.';
$string['groupjointyperequest'] = 'A adesão a este grupo é apenas por pedido.';
$string['grouprequestsubject'] = 'Novo pedido de adesão ao grupo';
$string['grouprequestmessage'] = '%s gostaria de aderir a este grupo %s';
$string['grouprequestmessagereason'] = "%s gostaria de aderir a este grupo %s. A razão para aderir é:\n\n%s";
$string['cantdeletegroup'] = 'Não pode eliminar este grupo';
$string['groupconfirmdelete'] = 'Tem a certeza que deseja eliminar este grupo?';
$string['deletegroup'] = 'Grupo Eliminado com Sucesso';
$string['deletegroup1'] = 'Eliminar Grupo';
$string['allmygroups'] = 'Todos os Meus Grupos';
$string['groupsimin']  = 'Grupos a que pertenço';
$string['groupsiown']  = 'Grupos que me pertencem';
$string['groupsiminvitedto'] = 'Grupos que me convidaram';
$string['groupsiwanttojoin'] = 'Grupos a que quero aderir';
$string['requestedtojoin'] = 'Efectuou um pedido de adesão a este grupo';
$string['groupnotfound'] = 'O grupo com o id %s não foi encontrado';
$string['groupconfirmleave'] = 'Tem a certeza que deseja abandonar este grupo?';
$string['cantleavegroup'] = 'Não pode abandonar este grupo';
$string['usercantleavegroup'] = 'Este utilizador não pode abandonar este grupo';
$string['usercannotchangetothisrole'] = 'O utilizador não pode assumir este cargo';
$string['leavespecifiedgroup'] = 'Abandonar o grupo \'%s\'';
$string['memberslist'] = 'Membros: ';
$string['nogroups'] = 'Sem grupos';
$string['deletespecifiedgroup'] = 'Eliminar grupo \'%s\'';
$string['requestjoinspecifiedgroup'] = 'Pedido de adesão ao grupo \'%s\'';
$string['youaregroupmember'] = 'É um membro deste grupo';
$string['youaregrouptutor'] = 'É um tutor neste grupo';
$string['youaregroupadmin'] = 'É um administrador neste grupo';
$string['youowngroup'] = 'Este grupo pertence-lhe';
$string['groupsnotin'] = 'Grupos aos quais não pertenço';
$string['allgroups'] = 'Todos os grupos';
$string['allgroupmembers'] = 'Todos os membros do grupo';
$string['trysearchingforgroups'] = 'Tente %spesquisar por grupos%s para aderir!';
$string['nogroupsfound'] = 'Não foram encontrados grupos.';
$string['group'] = 'grupo';
$string['Group'] = 'Grupo';
$string['groups'] = 'grupos';
$string['notamember'] = 'Não é um membro deste grupo';
$string['notmembermayjoin'] = 'Tem que aderir a este grupo \'%s\' para ver esta página.';
$string['declinerequestsuccess'] = 'O pedido de adesão a este grupo foi recusado com sucesso.';
$string['notpublic'] = 'Este grupo não é público.';

// Bulk add, invite
$string['addmembers'] = 'Adicionar membros';
$string['invitationssent'] = '%d convites enviados';
$string['newmembersadded'] = 'Adicionados %d novos membros';
$string['potentialmembers'] = 'Membros potenciais';
$string['sendinvitations'] = 'Enviar convites';
$string['userstobeadded'] = 'Utilizadores a serem adicionados';
$string['userstobeinvited'] = 'Utilizadores a serem convidados';

// friendslist
$string['reasonoptional'] = 'Razão (opcional)';
$string['request'] = 'Pedido';

$string['friendformaddsuccess'] = '%s foi adicionado(a) á sua lista de amigos';
$string['friendformremovesuccess'] = '%s foi retirado(a) da sua lista de amigos';
$string['friendformrequestsuccess'] = 'Enviar pedido de amizade a %s';
$string['friendformacceptsuccess'] = 'Pedido de amizade aceite';
$string['friendformrejectsuccess'] = 'Pedido de amizade rejeitado';

$string['addtofriendslist'] = 'Adicionar á lista de amigos';
$string['requestfriendship'] = 'Pedido de amizade';

$string['addedtofriendslistsubject'] = '%s adicionou-o(a) á lista de amigos';
$string['addedtofriendslistmessage'] = '%s adicionou-o(a) á lista de amigos! Isto significa que %s agora também está na sua lista de amigos. '
    . ' Clique na hiperligação abaixo para ver a sua página de perfil';

$string['requestedfriendlistsubject'] = 'Novo pedido de amizade';
$string['requestedfriendlistmessage'] = '%s efectuou um pedido para adicioná-lo como amigo.  '
    .' Pode efectuar esta operação clicando na hiperligação abaixo, ou na lista de amigos';

$string['requestedfriendlistmessagereason'] = '%s efectuou um pedido para adicioná-lo como amigo.'
    . ' Pode efectuar esta operação clicando na hiperligação abaixo, ou na lista de amigos.'
    . ' A razão é:
    ';

$string['removefromfriendslist'] = 'Retirar da lista de amigos';
$string['removefromfriends'] = 'Retirar %s da lista de amigos';
$string['confirmremovefriend'] = 'Tem a certeza que deseja retirar este utilizador da sua lista de amigos?';
$string['removedfromfriendslistsubject'] = 'Retirar da lista de amigos';
$string['removedfromfriendslistmessage'] = '%s retirou-o da lista de amigos.';
$string['removedfromfriendslistmessagereason'] = '%s retirou-o da lista de amigos. A razão foi: ';
$string['cantremovefriend'] = 'Não pode retirar este utilizador da sua lista de amigos';

$string['friendshipalreadyrequested'] = 'Efectuou um pedido para ser adicionado á lista de amigos de %s';
$string['friendshipalreadyrequestedowner'] = '%s pediu para ser adicionado á sua lista de amigos';
$string['rejectfriendshipreason'] = 'Razão para rejeitar o pedido';
$string['alreadyfriends'] = 'Já está na lista de amigos de %s';

$string['friendrequestacceptedsubject'] = 'Pedido de amizade aceite';
$string['friendrequestacceptedmessage'] = '%s aceitou o seu pedido de amizade e foi adicionado á sua lista de amigos'; 
$string['friendrequestrejectedsubject'] = 'Pedido de amizade rejeitado';
$string['friendrequestrejectedmessage'] = '%s rejeitou o seu pedido de amizade.';
$string['friendrequestrejectedmessagereason'] = '%s rejeitou o seu pedido de amizade. A razão foi: ';

$string['allfriends']     = 'Todos os Amigos';
$string['currentfriends'] = 'Amigos Actuais';
$string['pendingfriends'] = 'Amigos em espera';
$string['backtofriendslist'] = 'Voltar á Lista de Amigos';
$string['findnewfriends'] = 'Procurar Novos Amigos';
$string['Views']          = 'Páginas';
$string['Files']          = 'Ficheiros';
$string['seeallviews']    = 'Ver todas as páginas de %s ...';
$string['noviewstosee']   = 'Nenhuma que possa ver :(';
$string['whymakemeyourfriend'] = 'É por esta razão que deves adicionar-me á tua lista de amigos:';
$string['approverequest'] = 'Aprovar Pedido!';
$string['denyrequest']    = 'Recusar Pedido';
$string['pending']        = 'em espera';
$string['trysearchingforfriends'] = 'Tente %sprocurar por novos amigos%s para aumentar a sua rede!';
$string['nobodyawaitsfriendapproval'] = 'Ninguém está á espera de aprovação para ser adicionado á sua lista de amigos';
$string['sendfriendrequest'] = 'Enviar Pedido de Amizade!';
$string['addtomyfriends'] = 'Adicionar aos Meus Amigos!';
$string['friendshiprequested'] = 'Pedido de Amizade!';
$string['existingfriend'] = 'amigo existente';
$string['nosearchresultsfound'] = 'Não foram encontrados resultados na pesquisa :(';
$string['friend'] = 'amigo';
$string['friends'] = 'amigos';
$string['user'] = 'utilizador';
$string['users'] = 'utilizadores';
$string['Friends'] = 'Amigos';

$string['friendlistfailure'] = 'Ocorreu um erro ao alterar a sua lista de amigos';
$string['userdoesntwantfriends'] = 'Este utilizador não deseja adcionar novos amigos';
$string['cannotrequestfriendshipwithself'] = 'Não pode efectuar um pedido de amizade a si mesmo';
$string['cantrequestfriendship'] = 'Não pode efectuar um pedido de amizade a este utilizador';

// Messaging between users
$string['messagebody'] = 'Mensagem'; // wtf
$string['sendmessage'] = 'Enviar mensagem';
$string['messagesent'] = 'Mensagem enviada!';
$string['messagenotsent'] = 'Ocorreu um erro ao enviar a mensagem';
$string['newusermessage'] = 'Nova mensagem de %s';
$string['newusermessageemailbody'] = '%s enviou-o uma mensagem. Para ver esta mensagem visite,

%s';
$string['sendmessageto'] = 'Enviar mensagem para %s';
$string['viewmessage'] = 'Ver mensagem';
$string['Reply'] = 'Responder';

$string['denyfriendrequest'] = 'Rejeitar Pedido de Amizade';
$string['sendfriendshiprequest'] = 'Enviar pedido de amizade para %s';
$string['cantdenyrequest'] = 'Não é um pedido de amizade válido';
$string['cantmessageuser'] = 'Não pode enviar mensagens para este utilizador';
$string['cantviewmessage'] = 'Não pode ver esta mensagem';
$string['requestedfriendship'] = 'pediu amizade';
$string['notinanygroups'] = 'Não está em nenhum grupo';
$string['addusertogroup'] = 'Adicionar a ';
$string['inviteusertojoingroup'] = 'Convidar para ';
$string['invitemembertogroup'] = 'Convidar %s para aderir a \'%s\'';
$string['cannotinvitetogroup'] = 'Não pode convidar este utilizador para este grupo';
$string['useralreadyinvitedtogroup'] = 'Este utilizador já foi convidado, ou já é um membro deste grupo.';
$string['removefriend'] = 'Retirar amigo';
$string['denyfriendrequestlower'] = 'Rejeitar pedido de amizade';

// Group interactions (activities)
$string['groupinteractions'] = 'Actividades do Grupo';
$string['nointeractions'] = 'Não existem actividades neste grupo';
$string['notallowedtoeditinteractions'] = 'Não está autorizado a adiconar ou editar actividades neste grupo';
$string['notallowedtodeleteinteractions'] = 'Não está autorizado a eliminar activades neste grupo';
$string['interactionsaved'] = '%s salva com sucesso';
$string['deleteinteraction'] = 'Eliminar %s \'%s\'';
$string['deleteinteractionsure'] = 'Tem a certeza que deseja efectuar esta acção? Não pode voltar a atrás.';
$string['interactiondeleted'] = '%s eliminada com sucesso';
$string['addnewinteraction'] = 'Addicionar nova %s';
$string['title'] = 'Título';
$string['Role'] = 'Cargo';
$string['changerole'] = 'Alterar cargo';
$string['changeroleofuseringroup'] = 'Alterar o cargo de %s no grupo %s';
$string['currentrole'] = 'Cargo actual';
$string['changerolefromto'] = 'Alterar cargo de %s para';
$string['rolechanged'] = 'Cargo alterado';
$string['removefromgroup'] = 'Eliminar do grupo';
$string['userremoved'] = 'Utilizador eliminado';
$string['About'] = 'Sobre';
$string['aboutgroup'] = 'Sobre %s';

$string['Joined'] = 'Aderiu';

$string['membersdescription:invite'] = 'A adesão a este grupo é apenas de convite. Pode convidar utilizadores através das suas páginas de perfil ou <a href="%s">enviando múltiplos convites simultaneamente</a>.';
$string['membersdescription:controlled'] = 'A adesão a este grupo é controlada. Pode adicionar utilizadores através das suas páginas de perfil ou <a href="%s">adicionar múltiplos utilizadores simultaneamente</a>.';

// View submission
$string['submit'] = 'Submeter';
$string['allowssubmissions'] = 'Permitir submissões';
?>
