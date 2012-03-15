<?php
/**
 * Mahara: Electronic portefólio, weblog, resume builder and social networking
 * Copyright (C) 2006-2008 Catalyst IT Ltd (http://www.catalyst.net.nz)
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
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Comentários';
$string['Comment'] = 'Comentário';
$string['Comments'] = 'Comentários';
$string['comment'] = 'comentário';
$string['comments'] = 'comentários';

$string['Allow'] = 'Permitir';
$string['allowcomments'] = 'Permitir comentários';
$string['approvalrequired'] = 'Os comentários são moderados, se escolher tornar este comentário público, não será visível para outros utilizadores até que seja aprovado pelo proprietário.';
$string['attachfile'] = "Anexar ficheiro";
$string['Attachments'] = "Anexos";
$string['cantedithasreplies'] = 'Apenas pode editar o comentário mais recente';
$string['canteditnotauthor'] = 'Não é o autor deste comentário';
$string['cantedittooold'] = 'Apenas pode editar comentários que tenham menos de %d minutos';
$string['commentmadepublic'] = "Comentários tornados públicos";
$string['commentdeletedauthornotification'] = "O seu comentário em %s foi eliminado:\n%s";
$string['commentdeletednotificationsubject'] = 'O comentário em %s foi eliminado';
$string['commentnotinview'] = 'O comentário %d não está na página %d';
$string['commentratings'] = 'Activar avaliação de comentários';
$string['commentremoved'] = 'Comentário eliminado';
$string['commentremovedbyauthor'] = 'Comentário eliminado pelo autor';
$string['commentremovedbyowner'] = 'Comentário eliminado pelo proprietário';
$string['commentremovedbyadmin'] = 'Comentário eliminado por um administrador';
$string['commentupdated'] = 'Comentário actualizado';
$string['editcomment'] = 'Editar Comentário';
$string['editcommentdescription'] = 'Pode actualizar os seus comentários se tiverem menos de %d minutos e se não existem respostas ao comentário. Passado este tempo, ainda poderá eliminar os seus comentários e adicionar novos.';
$string['entriesimportedfromleapexport'] = 'Entradas importadas de uma importação LEAP, que não possível importar em outro lugar';
$string['feedback'] = 'Feedback';
$string['feedbackattachdirname'] = 'anexoscomentarios';
$string['feedbackattachdirdesc'] = 'Ficheiros anexados aos comentários do seu portefólio';
$string['feedbackattachmessage'] = 'Os ficheiros anexados foram adicionados á pasta %s';
$string['feedbackonviewbyuser'] = 'Feedback em %s por %s';
$string['feedbacksubmitted'] = 'Feedback submetido';
$string['lastcomment'] = 'Último comentário';
$string['makepublic'] = 'Tornar público';
$string['makepublicnotallowed'] = 'Não está autorizado a tornar este comentário público';
$string['makepublicrequestsubject'] = 'Pedido para tornar púbico um comentário privado';
$string['makepublicrequestbyauthormessage'] = '%s pediu que tornasse públicos os seus comentários.';
$string['makepublicrequestbyownermessage'] = '%s pediu que tornasse públicos os comentários que efectuou.';
$string['makepublicrequestsent'] = 'Foi enviada uma mensagem para %s a pedir que o comentário fosse tornado público.';
$string['messageempty'] = 'A mensagem está vazia. Mensagens vazias apenas são permitidas se anexou o ficheiro.';
$string['Moderate'] = 'Moderar';
$string['moderatecomments'] = 'Moderar comentários';
$string['moderatecommentsdescription'] = 'Os comentário iram continuar privados até que sejam aprovados por si.';
$string['newfeedbacknotificationsubject'] = 'Novo feedback em %s';
$string['placefeedback'] = 'Colocar feedback';
$string['rating'] = 'Avaliação';
$string['reallydeletethiscomment'] = 'Tem a certeza que deseja eliminar este comentário?';
$string['thiscommentisprivate'] = 'Este comentário é privado';
$string['typefeedback'] = 'Feedback';
$string['viewcomment'] = 'Ver comentário';
$string['youhaverequestedpublic'] = 'Efectuou um pedido para tornar este comentário público.';

$string['feedbacknotificationhtml'] = "<div style=\"padding: 0.5em 0; border-bottom: 1px solid #999;\"><strong>%s comentou em %s</strong><br>%s</div>

<div style=\"margin: 1em 0;\">%s</div>

<div style=\"font-size: smaller; border-top: 1px solid #999;\">
<p><a href=\"%s\">Responder a este comentário</a></p>
</div>";
$string['feedbacknotificationtext'] = "%s comentou em %s
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Para ver e responder ao comentário, siga a seguinte hiperligação:
%s";
$string['feedbackdeletedhtml'] = "<div style=\"padding: 0.5em 0; border-bottom: 1px solid #999;\"><strong>Um comenário em %s foi removido</strong><br>%s</div>

<div style=\"margin: 1em 0;\">%s</div>

<div style=\"font-size: smaller; border-top: 1px solid #999;\">
<p><a href=\"%s\">%s</a></p>
</div>";
$string['feedbackdeletedtext'] = "Um comentário em %s foi removido
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Para ver %s , siga a seguinte hiperligação:
%s";

$string['artefactdefaultpermissions'] = 'Permissões por omissão dos comentários';
$string['artefactdefaultpermissionsdescription'] = 'Os tipos de artefatos seleccionados terão comentários activados na criação.  Os utilizador podem alterar estas definições para cada artefato individual.';
?>
