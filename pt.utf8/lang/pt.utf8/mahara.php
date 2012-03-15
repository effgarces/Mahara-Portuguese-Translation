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

// General form strings
$string['add']     = 'Adicionar';
$string['cancel']  = 'Cancelar';
$string['delete']  = 'Apagar';
$string['edit']    = 'Editar';
$string['editing'] = 'Editando';
$string['save']    = 'Guardar';
$string['submit']  = 'Submeter';
$string['update']  = 'Actualizar';
$string['change']  = 'Alterar';
$string['send']    = 'Enviar';
$string['go']      = 'Avançar';
$string['default'] = 'Por omissão';
$string['upload']  = 'Enviar';
$string['complete']  = 'Complete';
$string['Failed']  = 'Falhou';
$string['loading'] = 'Carregando ...';
$string['showtags'] = 'Exibir as minhas tags';
$string['errorprocessingform'] = 'Ocorreu um erro com a submissão deste formulário. Por favor verifique os campos marcados e tente novamente.';
$string['description'] = 'Descrição';
$string['remove']  = 'Remover';
$string['Close'] = 'Fechar';
$string['Help'] = 'Ajuda';
$string['applychanges'] = 'Aplicar alterações';

$string['no']     = 'Não';
$string['yes']    = 'Sim';
$string['none']   = 'Nenhum';
$string['at'] = 'no(a)';
$string['From'] = 'De';
$string['To'] = 'Até';
$string['All'] = 'Todos';

$string['enable'] = 'Activar';
$string['disable'] = 'Desactivar';
$string['show'] = 'Mostrar';
$string['hide'] = 'Esconder';
$string['pluginenabled'] = 'O plugin está agora visível';
$string['plugindisabled'] = 'O plugin está agora escondido';
$string['pluginnotenabled'] = 'O Plugin está escondido. É ncessário torná-lo visível %s em primeiro lugar.';
$string['pluginexplainaddremove'] = 'Os plugins no Mahara estão sempre instalados e podem ser acedidos se os utilizadores conhecerem os URLs e se tiverem permissões para acdê-los. Em vez de activá-los ou desactivá-los os plugins estão escondidos ou estão visíveis clicando nas hiperligações \'Esconder\' ou \'Mostrar\' junto aos plugins abaixo.';
$string['pluginexplainartefactblocktypes'] = 'Quando esconde um plugin to tipo \'artefacto\', o Mahara também esconde os blocos relacionados com o mesmo.';

$string['next']      = 'Seguinte';
$string['nextpage']  = 'Próxima página';
$string['previous']  = 'Anterior';
$string['prevpage']  = 'Página anterior';
$string['first']     = 'Primeiro';
$string['firstpage'] = 'Página inicial';
$string['last']      = 'Último';
$string['lastpage']  = 'Última pagina';

$string['accept'] = 'Aceitar';
$string['memberofinstitutions'] = 'Membro de %s';
$string['reject'] = 'Rejeitar';
$string['sendrequest'] = 'Enviar pedido';
$string['reason'] = 'Razão';
$string['select'] = 'Seleccionar';

// Tags
$string['tags'] = 'Tags';
$string['tagsdesc'] = 'Introduza as tags para este item separadas por virgulas.';
$string['tagsdescprofile'] = 'Introduza as tags para este item separadas por virgulas. Os items marcados com \'profile\' estão visiveis na barra lateral.';
$string['youhavenottaggedanythingyet'] = 'Ainda não marcou nada.';
$string['mytags'] = 'As minhas Tags';
$string['Tag'] = 'Tag';
$string['itemstaggedwith'] = 'Items marcados com "%s"';
$string['numitems'] = '%s items';
$string['searchresultsfor'] = 'Resultados da procura por';
$string['alltags'] = 'Todas as Tags';
$string['sortalpha'] = 'Ordenar tags alfabeticamente';
$string['sortfreq'] = 'Ordenar tags por frequência';
$string['sortresultsby'] = 'Ordenar resultados por:';
$string['date'] = 'Data';
$string['dateformatguide'] = 'Use o formato AAAA/MM/DD';
$string['datetimeformatguide'] = 'Use o formato AAAA/MM/DD HH:MM';
$string['filterresultsby'] = 'Filtrar resultados por:';
$string['tagfilter_all'] = 'Todas';
$string['tagfilter_file'] = 'Ficheiros';
$string['tagfilter_image'] = 'Imagens';
$string['tagfilter_text'] = 'Texto';
$string['tagfilter_view'] = 'Páginas';
$string['edittags'] = 'Editar Tags';
$string['selectatagtoedit'] = 'Seleccione uma tag para editar';
$string['edittag'] = 'Editar <a href="%s">%s</a>';
$string['editthistag'] = 'Editar esta Tag';
$string['edittagdescription'] = 'Todos os items no seu portefólio marcados com "%s" serão actualizados';
$string['deletetag'] = 'Remover <a href="%s">%s</a>';
$string['confirmdeletetag'] = 'Tem a certeza que deseja remover esta tag?';
$string['deletetagdescription'] = 'Remove esta tag de todos os items no seu portefólio';
$string['tagupdatedsuccessfully'] = 'Tag actualizada com sucesso';
$string['tagdeletedsuccessfully'] = 'Tag eliminada com sucesso';

$string['selfsearch'] = 'Procurar no meu Portefólio';

// Quota strings
$string['quota'] = 'Quota';
$string['quotausage'] = 'Você já usou <span id="quota_used">%s</span> da sua <span id="quota_total">%s</span> quota.';

$string['updatefailed'] = 'A actualização falhouUpdate failed';

$string['strftimenotspecified']  = 'Não especificado';

// profile sideblock strings
$string['invitedgroup'] = 'convite de grupo';
$string['invitedgroups'] = 'convites de grupo';
$string['logout'] = 'Sair';
$string['pendingfriend'] = 'amigo em espera';
$string['pendingfriends'] = 'amigos em espera';
$string['profile'] = 'perfil';
$string['views'] = 'Páginas';

// Online users sideblock strings
$string['onlineusers'] = 'Utilizadores Online';
$string['lastminutes'] = 'Últimos %s minutos';

// Links and resources sideblock
$string['linksandresources'] = 'Hiperligações e Recursos';

// auth
$string['accesstotallydenied_institutionsuspended'] = 'A sua instituição %s, foi suspensa. Aguarde até que a suspensão seja retirada, será incapaz de efectuar a autenticação em %s.
Por favor contacte a sua instituição para obter ajuda.';
$string['accessforbiddentoadminsection'] = 'Você não tem autorização para aceder à área de administrador';
$string['accountdeleted'] = 'Desculpe, a sua conta foi removida';
$string['accountexpired'] = 'Desculpe, a sua conta expirou';
$string['accountcreated'] = '%s: Nova conta';
$string['accountcreatedtext'] = 'Caro(a) %s,

Uma nova conta foi criada para si em %s. Os seus detalhes de acesso são os seguintes:

Utilizador: %s
Senha: %s

Visite %s para começar!

Atentamente, %s o Administrador';
$string['accountcreatedchangepasswordtext'] = 'Caro(a) %s,

Uma nova conta foi criada para si em %s. Os seus detalhes de acesso são os seguintes:

Utilizador: %s
Senha: %s

Assim que efectue a sua autenticação pela primeira vez, ser-lhe-á pedido que altere a sua senha.

Visite %s para começar!

Atentamente, %s o Administrador';
$string['accountcreatedhtml'] = '<p>Caro(a) %s</p>

<p>Uma nova conta foi criada para si em <a href="%s">%s</a>. Os seus detalhes de acesso são os seguintes:</p>

<ul>
    <li><strong>Utilizador:</strong> %s</li>
    <li><strong>Senha:</strong> %s</li>
</ul>

<p>Visite <a href="%s">%s</a> para começar!</p>

<p>Atentamente, %s o Administrador</p>
';
$string['accountcreatedchangepasswordhtml'] = '<p>Caro(a) %s</p>

<p>Uma nova conta foi criada para si em <a href="%s">%s</a>. Os seus detalhes de acesso são os seguintes:</p>

<ul>
    <li><strong>Utilizador:</strong> %s</li>
    <li><strong>Senha:</strong> %s</li>
</ul>

<p>Assim que efectue a sua autenticação pela primeira vez, ser-lhe-á pedido que altere a sua senha.</p>

<p>Visite <a href="%s">%s</a> para começar!</p>

<p>Atentamente, %s o Administrador</p>
';
$string['accountexpirywarning'] = 'Aviso de expiração de conta';
$string['accountexpirywarningtext'] = 'Caro(a) %s,

A sua conta em %s irá expirar dentro de %s.

Recomendamos que salve os conteúdos do seu portefólio utilizando a Ferramenta de Exportação. Instrucções sobre como utilizar esta funcionalidade, podem ser encontradas no guia do utilizador.

Se desejar extender a seu acesso á conta ou se tem alguma questão sobre o que foi mencionado acima, poderá entrar em contacto connosco:

%s

Atentamente, %s o Administrador';
$string['accountexpirywarninghtml'] = '<p>Caro(a) %s,</p>
    
<p>A sua conta em %s irá expirar dentro de %s.</p>

<p>Recomendamos que salve os conteúdos do seu portefólio utilizando a Ferramenta de Exportação. Instrucções sobre como utilizar esta funcionalidade, podem ser encontradas no guia do utilizador.</p>

<p>Se desejar extender a seu acesso á conta ou se tem alguma questão sobre o que foi mencionado acima, poderá entrar em <a href="%s">contacto connosco</a>.</p>

<p>Atentamente, %s o Administrador</p>';
$string['institutionmembershipexpirywarning'] = 'Aviso de expiração da adesão á Instituição';
$string['institutionmembershipexpirywarningtext'] = 'Caro(a) %s,

A sua adesão de %s em %s irá expirar dentro de %s.

Se desejar extender a sua adesão ou se tem alguma questão sobre o que foi mencionado acima, poderá entrar em contacto connosco:

%s

Atentamente, %s o Administrador';
$string['institutionmembershipexpirywarninghtml'] = '<p>Caro(a) %s,</p>

<p>A sua adesão de %s em %s irá expirar dentro de %s.</p>

<p>Se desejar extender a sua adesão ou se tem alguma questão sobre o que foi mencionado acima, poderá entrar em <a href="%s">contacto connosco</a>.</p>

<p>Atentamente, %s o Administrador</p>';
$string['institutionexpirywarning'] = 'Aviso de expiração da Instituição';
$string['institutionexpirywarningtext_institution'] = 'Caro(a) %s,

A conta da %s\'s no %s irá expirar dentro de %s.

Se desejar extender a conta da sua Instituição hip ou se tem alguma questão sobre o que foi mencionado acima, poderá entrar em contacto connosco:

%s

Atentamente, %s o Administrador';
$string['institutionexpirywarninghtml_institution'] = '<p>Caro(a) %s,</p>

<p>A conta da %s\'s no %s irá expirar dentro de %s.</p>

<p>Se desejar extender a conta da sua Instituição hip ou se tem alguma questão sobre o que foi mencionado acima, poderá entrar em <a href="%s">contacto connosco</a>.</p>

<p>Atentamente, %s o Administrador</p>';
$string['institutionexpirywarningtext_site'] = 'Caro(a) %s,

A conta da Instituição \'%s\' irá exirar dentro de %s.

Pode desejar entrar em contacto com a Instituição com página a extender a sua conta em %s.

Atentamente, %s o Administrador';
$string['institutionexpirywarninghtml_site'] = '<p>Caro(a) %s,</p>

<p>A conta da Instituição \'%s\' irá exirar dentro de %s.</p>

<p>Pode desejar entrar em contacto com a Instituição com página a extender a sua conta em %s.</p>

<p>Atentamente, %s o Administrador</p>';
$string['accountinactive'] = 'Desculpe, de momento a sua conta está desactivada';
$string['accountinactivewarning'] = 'Aviso de inactividade de contaAccount inactivity warning';
$string['accountinactivewarningtext'] = 'Caro(a) %s,

A sua conta em %s irá ser desactivada dentro de %s.

Uma vez desactivada, não será possivel efectuar a autenticação até que um administrador reactive a sua conta.

Você pode impedir a sua conta de ser desactivada se efectuar a autenticação.

Atentamente, %s o Administrador';
$string['accountinactivewarninghtml'] = '<p>Caro(a) %s,</p>

<p>A sua conta em %s irá ser desactivada dentro de %s.</p>

<p>Uma vez desactivada, não será possivel efectuar a autenticação até que um administrador reactive a sua conta.</p>

<p>Você pode impedir a sua conta de ser desactivada se efectuar a autenticação.</p>

<p>Atentamente, %s o Administrador</p>';
$string['accountsuspended'] = 'A sua conta foi suspensa em %s. A razão para a suspensão é:<blockquote>%s</blockquote>';
$string['youraccounthasbeensuspended'] = 'A sua conta foi suspensa';
$string['youraccounthasbeenunsuspended'] = 'A suspensão da sua conta foi retirada';
$string['changepasswordinfo'] = 'É necessário alterar a sua senha antes de continuar.';
$string['chooseusernamepassword'] = 'Escolha o seu nome de utilizador e senha';
$string['chooseusernamepasswordinfo'] = 'É necessário um nome de utilizador e senha para efectuar a autenticação em %s. Por favor escolha-os agora.';
$string['confirmpassword'] = 'Confirmar senha';
$string['javascriptnotenabled'] = 'O seu browser não tem o javascript activo para esta página. O javascript deverá estar activo antes que possa efectuar a autenticação';
$string['cookiesnotenabled'] = 'O seu browser não tem as cookies activadas, ou está a bloquear as cookies desta página. As cookies deverão estar activas antes que possa efectuar a autenticação';
$string['institution'] = 'Instituição';
$string['loggedoutok'] = 'Efectuou a saída com sucesso';
$string['login'] = 'Autenticação';
$string['loginfailed'] = 'Os dados de acesso estão incorrectos. Por favor verifique se o seu nome de utilizador e senha estão correctos';
$string['loginto'] = 'Efectuar autenticação em %s';
$string['newpassword'] = 'Nova senha';
$string['nosessionreload'] = 'Actualize a página para efectuar a autenticação';
$string['oldpassword'] = 'Senha actual';
$string['password'] = 'Senha';
$string['passworddescription'] = ' ';
$string['passwordhelp'] = 'A senha que usa para aceder a esta página';
$string['passwordnotchanged'] = 'Não alterou a sua senha, por favor escolha uma nova senhap';
$string['passwordsaved'] = 'A sua nova senha foi guardada';
$string['passwordsdonotmatch'] = 'As senhas são diferentes';
$string['passwordtooeasy'] = 'A sua senha é muito fácil! Por favor escolha uma senha mais segura';
$string['register'] = 'Registar';
$string['sessiontimedout'] = 'A sua sessão expirou, por favor efectue a autenticação para continuar';
$string['sessiontimedoutpublic'] = 'A sua sessão expirou. Você pode efectuar a <a href="%s">autenticação</a> para continuar a navegar';
$string['sessiontimedoutreload'] = 'A sua sessão expirou. Actualize a página para efectuar a autenticação novamente';
$string['username'] = 'Utilizador';
$string['preferredname'] = 'Nome';
$string['usernamedescription'] = ' ';
$string['usernamehelp'] = 'O nome de utilizador que lhe foi atribuido para poder entrar nesta página.';
$string['youaremasqueradingas'] = 'Você está "disfarçado" como %s.';
$string['yournewpassword'] = 'A sua nova senha. As senhas deverão ter pelo menos seis caracteres e conter pelo menos um algarismo e duas letras';
$string['yournewpasswordagain'] = 'A sua nova senha novamente';
$string['invalidsesskey'] = 'Chave de sessão inválida';
$string['cannotremovedefaultemail'] = 'Você não pode remover o seu endereço de email primário';
$string['emailtoolong'] = 'Os endereços de email não podem ser mais de 255 caracteres';
$string['mustspecifyoldpassword'] = 'É necessário especificar a sua senha actual';
$string['Site'] = 'Site';

// Misc. register stuff that could be used elsewhere
$string['emailaddress'] = 'Endereço de Email';
$string['emailaddressdescription'] = ' ';
$string['firstname'] = 'Primeiro nome';
$string['firstnamedescription'] = ' ';
$string['lastname'] = 'Último nome';
$string['lastnamedescription'] = ' ';
$string['studentid'] = 'Código de estudante';
$string['displayname'] = 'Cognome';
$string['fullname'] = 'Nome completo';
$string['registerwelcome'] = 'Bem-vindo! Para poder utilizar esta página tem que se registar primeiro.';
$string['registeragreeterms'] = 'Tem que concordar com os <a href="terms.php">termos e condições</a>.';
$string['registerprivacy'] = 'Os dados recolhidos serão armazenados segundo a nossa <a href="privacy.php">política de privacidade</a>.';
$string['registerstep3fieldsoptional'] = '<h3>Escolha uma foto (opcional) de perfil</h3><p>Efectou o seu registo com sucesso em %s! Pode agora escolher uma foto para ser utilizada como o seu avatar.</p>';
$string['registerstep3fieldsmandatory'] = '<h3>Preencha os campos obrigatórios</h3><p>Os campos seguintes são de preenchimento obrigatório. É necessário preenchê-los antes de terminar a seu registo.</p>';
$string['registeringdisallowed'] = 'Desculpe, neste momento não é possivel efectuar um registo';
$string['membershipexpiry'] = 'Expiração da adesão';
$string['institutionfull'] = 'A Instituição que escolheu não está a aceitar novos registos.';
$string['registrationnotallowed'] = 'A Instituição que escolheu não permite auto-registos.';
$string['registrationcomplete'] = 'Obrigado por efectuar o seu registo em %s';
$string['language'] = 'Língua';

// Forgot password
$string['cantchangepassword'] = 'Desculpe, não é possível alterar a sua senha através desta área - por favor utilize a área da sua instituição';
$string['forgotusernamepassword'] = 'Esqueceu-se do seu nome de utilizador ou senha?';
$string['forgotusernamepasswordtext'] = '<p>Se esqueceu o seu nome de utilizador ou senha, introduza o endereço de email que está no seu perfil e enviaremos uma mensagem que poderá utilizar para alterar a sua senha.</p>
<p>Se sabe o seu nome de utilizador e esqueceu a sua senha, pode introduzir o seu nome de utilizador em vez do endereço de email.</p>';
$string['lostusernamepassword'] = 'Esqueceu o nome de Utilizador/Senha';
$string['emailaddressorusername'] = 'Email ou o nome de utilizador';
$string['pwchangerequestsent'] = 'Irá receber em breve um email com uma hiperligação que pode usar para alterar a senha para a sua conta';
$string['forgotusernamepasswordemailsubject'] = 'Nome de utilizador/Senha de %s';
$string['forgotusernamepasswordemailmessagetext'] = 'Caro(a) %s,

Um pedido de alteração do nome de utilizador/senha foi efectuado para a sua conta em %s.

O seu nome de utilizador é %s.

Se desejar efectuar um reset á sua senha, por favor utilize a seguinte hiperligação:

%s

Se não efectou um pedido de reset da senha, por favor ignore este email.

Se tem alguma questão sobre o que foi mencionado acima, poderá entrar em contacto connosco:

%s

Atentamente, %s o Administrador';
$string['forgotusernamepasswordemailmessagehtml'] = '<p>Caro(a) %s,</p>

<p>Um pedido de alteração do nome de utilizador/senha foi efectuado para a sua conta em %s.</p>

<p>O seu nome de utilizador é <strong>%s</strong>.</p>

<p>Se desejar efectuar um reset á sua senha, por favor utilize a seguinte hiperligação:</p>

<p><a href="%s">%s</a></p>

<p>Se não efectou um pedido de reset da senha, por favor ignore este email.</p>

<p>Se tem alguma questão sobre o que foi mencionado acima, poderá entrar em <a href="%s">contacto connosco</a>.</p>

<p>Atentamente, %s o Administrador</p>';
$string['forgotpassemailsendunsuccessful'] = 'Desculpe, infelizmente não foi possível enviar este email com sucesso. Por favor tente novamente';
$string['forgotpassemailsentanyway'] = 'Um emai foi enviado para o endereço armazenado para este utilizador, mas o endereço poderá estar incorrecto ou o servidor de destino está a devolver  as mensagems. Por favor contacte os administrador do Mahara para alterar a sua senha se ainda não recebeu o email.';
$string['forgotpassnosuchemailaddressorusername'] = 'O endereçode email ou nome de utilizador que indicou não pertence a nenhum utilizador desta página';
$string['forgotpasswordenternew'] = 'Por favor introduza a sua nova senha para continuar';
$string['nosuchpasswordrequest'] = 'Pedido senha não encontrado';
$string['passwordchangedok'] = 'A sua senha foi alterada com sucesso';

// Reset password when moving from external to internal auth.
$string['noinstitutionsetpassemailsubject'] = '%s: Adesão de %s';
$string['noinstitutionsetpassemailmessagetext'] = 'Caro(a) %s,

Já não é um membro de %s.
Pode continuar a usar %s com o seu nome de utilizador %s, mas terá que modificar a senha da sua conta.

Por favor siga a hiperligação seguinte para continuar com o processo de reset da senha.

%sforgotpass.php?key=%s

Se tem alguma questão sobre o que foi mencionado acima, poderá entrar em contacto connosco:

%scontact.php

Atentamente, %s o Administrador

%sforgotpass.php?key=%s';
$string['noinstitutionsetpassemailmessagehtml'] = '<p>Caro(a) %s,</p>

<p>Já não é um membro de %s.</p>
<p>Pode continuar a usar %s com o seu nome de utilizador %s, mas terá que modificar a senha da sua conta.</p>

<p>Por favor siga a hiperligação seguinte para continuar com o processo de reset da senha.</p>

<p><a href="%sforgotpass.php?key=%s">%sforgotpass.php?key=%s</a></p>

<p>Se tem alguma questão sobre o que foi mencionado acima, poderá entrar em <a href="%scontact.php">contacto connosco</a>.</p>

<p>Atentamente, %s o Administrador</p>

<p><a href="%sforgotpass.php?key=%s">%sforgotpass.php?key=%s</a></p>';
$string['debugemail'] = 'AVISO: Esta mensagem era dirigida a %s <%s> mas foi enviada para si de acordo com a configuração "sendallemailto".';
$string['divertingemailto'] = 'Alteração direcção do email para %s';


// Expiry times
$string['noenddate'] = 'Sem data de fim';
$string['day']       = 'dia';
$string['days']      = 'dias';
$string['weeks']     = 'semanas';
$string['months']    = 'meses';
$string['years']     = 'anos';
// Boolean site option

// Site content pages
$string['sitecontentnotfound'] = 'O texto %s, não está disponível';

// Contact us form
$string['name']                     = 'Nome';
$string['email']                    = 'Email';
$string['subject']                  = 'Assunto';
$string['message']                  = 'Mensagem';
$string['messagesent']              = 'A sua mensagem foi enviada';
$string['nosendernamefound']        = 'Não foi encontrado o nome do destinatário';
$string['emailnotsent']             = 'Falha ao enviar o email de contacto. Mensagem de erro: "%s"';

// mahara.js
$string['namedfieldempty'] = 'O campo obrigatório "%s" está vazio';
$string['processing']     = 'Processando';
$string['requiredfieldempty'] = 'Um campo obrigatório está vazio';
$string['unknownerror']       = 'Ocorreu um erro desconhecido';

// menu
$string['home']        = 'Entrada';
$string['Content']     = 'Conteúdo';
$string['myportfolio'] = 'Portefólio';
$string['settings']    = 'Definições';
$string['myfriends']          = 'Os meus amigos';
$string['findfriends']        = 'Encontrar amigos';
$string['groups']             = 'Grupos';
$string['mygroups']           = 'Os meus grupos';
$string['findgroups']         = 'Encontrar grupos';
$string['returntosite']       = 'Voltar para o site';
$string['siteadministration'] = 'Administração do site';
$string['institutionadministration'] = 'Administração de Instituições';

$string['unreadmessages'] = 'mensagens não lidas';
$string['unreadmessage'] = 'mensagem não lida';

$string['siteclosed'] = 'O site está temporariamente encerrado para uma actualização da base de dados. Os administradores podem efectuar a autenticação.';
$string['siteclosedlogindisabled'] = 'O site está temporariamente fechado para uma actualização da base de dados.  <a href="%s">Efectuar a actualização agora.</a>';

// footer
$string['termsandconditions'] = 'Termos e condições';
$string['privacystatement']   = 'Política de privacidade';
$string['about']              = 'Sobre';
$string['contactus']          = 'Contacte-nos';

// my account
$string['account'] =  'A minha conta';
$string['accountprefs'] = 'Preferências da conta';
$string['preferences'] = 'Preferências';
$string['activityprefs'] = 'Preferências das actividades';
$string['changepassword'] = 'Alterar a senha';
$string['notifications'] = 'Notificações';
$string['inbox'] = 'Caixa de entrada';
$string['gotoinbox'] = 'Ir para a caixa de entrada';
$string['institutionmembership'] = 'Adesões a Instituições';
$string['institutionmembershipdescription'] = 'Se for membro de alguma instituição, elas serão listadas aqui. Também pode efectuar pedidos de adesão a Instituições, aceitar ou recusar convites de Instituições.';
$string['youareamemberof'] = 'É um membro de %s';
$string['leaveinstitution'] = 'Sair da instituição';
$string['reallyleaveinstitution'] = 'Tem a certeza que deseja sair desta instituição?';
$string['youhaverequestedmembershipof'] = 'Efectou um pedido de adesão á %s';
$string['cancelrequest'] = 'Cancelar pedido';
$string['youhavebeeninvitedtojoin'] = 'Foi convidado a juntar-se á %s';
$string['confirminvitation'] = 'Confirme o convite';
$string['joininstitution'] = 'Juntar-se á instituição';
$string['decline'] = 'Recusar';
$string['requestmembershipofaninstitution'] = 'Efectuar um pedido de adesão a uma instituição';
$string['optionalinstitutionid'] = 'ID da Instituição (opcional)';
$string['institutionmemberconfirmsubject'] = 'Confirmação da adesão á Instituição';
$string['institutionmemberconfirmmessage'] = 'Foi adicionado como membro de %s.';
$string['institutionmemberrejectsubject'] = 'Pedido de adesão á Instituição recusado';
$string['institutionmemberrejectmessage'] = 'O seu pedido de adesão á %s foi recusado.';
$string['Memberships'] = 'Membros';
$string['Requests'] = 'Pedidos';
$string['Invitations'] = 'Convites';

$string['config'] = 'Configuração';

$string['sendmessage'] = 'Enviar mensagem';
$string['spamtrap'] = 'Armadilha de Spam';
$string['formerror'] = 'Ocorreu um erro ao processar a sua submissão. Por favor tente novamente.';
$string['formerroremail'] = 'Contacte-nos em %s se continuar com problemas.';
$string['blacklisteddomaininurl'] = 'Um endereço neste campo comtém o domínio banido %s.';

$string['notinstallable'] = 'Não instalável!';
$string['installedplugins'] = 'Plugins Instalados';
$string['notinstalledplugins'] = 'Plugins não Instalados';
$string['plugintype'] = 'Tipo de Plugin';

$string['settingssaved'] = 'Definições Guardadas';
$string['settingssavefailed'] = 'Ocorreu uma falha ao guardar as definições';

$string['width'] = 'Largura';
$string['height'] = 'Altura';
$string['widthshort'] = 'c';
$string['heightshort'] = 'a';
$string['filter'] = 'Filtro';
$string['expand'] = 'Expandir';
$string['collapse'] = 'Contrair';
$string['more...'] = 'Mais ...';
$string['nohelpfound'] = 'Não foi encontrado nenhum tópico de ajuda para este item';
$string['nohelpfoundpage'] = 'Não foi encontrado nenhum tópico de ajuda para esta página';
$string['couldnotgethelp'] = 'Ocorreu erro ao aceder á págian de ajuda';
$string['profileimage'] = 'Imagem de Perfil';
$string['primaryemailinvalid'] = 'O endereço de email primário é inválido';
$string['addemail'] = 'Adicionar um endereço de email';

// Search
$string['search'] = 'Pesquisar';
$string['searchusers'] = 'Pesquisar utilizadores';
$string['Query'] = 'Consulta';
$string['query'] = 'consulta';
$string['querydescription'] = 'As palavras que deseja consultar';
$string['result'] = 'resultado';
$string['results'] = 'resultados';
$string['Results'] = 'Resultados';
$string['noresultsfound'] = 'Não foram encontrados resultados';
$string['users'] = 'Utilizadores';

// artefact
$string['artefact'] = 'artefacto';
$string['Artefact'] = 'Artefacto';
$string['Artefacts'] = 'Artefactos';
$string['artefactnotfound'] = 'O artefacto com o id %s não foi encontrado';
$string['artefactnotrendered'] = 'O artefacto não foi executado';
$string['nodeletepermission'] = 'Não tem permissão para apagar este artefacto';
$string['noeditpermission'] = 'Não tem permissão para editar este artefacto';
$string['Permissions'] = 'Permissões';
$string['republish'] = 'Publicar';
$string['view'] = 'Página';
$string['artefactnotpublishable'] = 'O Artefacto %s não é publicável na página %s';

$string['belongingto'] = 'Pertence a';
$string['allusers'] = 'Todos os utilizadores';
$string['attachment'] = 'Anexo';

// Upload manager
$string['quarantinedirname'] = 'quarentena';
$string['clammovedfile'] = 'O ficheiro foi movido para a pasta de quarentena.';
$string['clamdeletedfile'] = 'O ficheiro foi apagado';
$string['clamdeletedfilefailed'] = 'Não foi possível apagar o ficheiro';
$string['clambroken'] = 'O administrador activou a pesquisa de virus para o envio de ficheiros mas cometeu um erro na configuração. O envio do seu ficheiro não foi efectuado com sucesso. O administrador for notificado do erro. Tente enviar este ficheiro novamente mais tarde.';
$string['clamemailsubject'] = '%s :: Notificação Clam AV';
$string['clamlost'] = 'O Clam AV está configurado para analisar os ficheiros enviados, mas o caminho fornecido ao Clam AV, %s, é inválido.';
$string['clamfailed'] = 'Falhou a execução do Clam AV. A mensagem de erro foi %s. Aqui está o output do Clam AV:';
$string['clamunknownerror'] = 'Ocorreu um erro desconhecido com o Clam AV.';
$string['image'] = 'Imagem';
$string['filenotimage'] = 'O ficheiro que enviou não é uma imagem válida. Apenas são aceites imagens PNG, JPEG ou GIF';
$string['uploadedfiletoobig'] = 'O ficheiro é muito grande. Por favor contacte o administrador para mais informação.';
$string['notphpuploadedfile'] = 'O ficheiro foi perdido durante o processo de envio. Este situação não deveria ocorrer, por favor contacte o adminitrador para mais informações.';
$string['virusfounduser'] = 'O ficheiro que enviou, %s, foi analisado por um anti-vírus e foi detectada uma infecção! O envio do seu ficheiro não foi bem sucedido.';
$string['fileunknowntype'] = 'O tipo do ficheiro que enviou não pôde ser determinado. O ficheiro pode estar corrompido, ou poderá ser um problema de configuração. Por favor contacte o seu administrador.';
$string['virusrepeatsubject'] = 'Aviso: %s tem enviado repetidamente virus.';
$string['virusrepeatmessage'] = 'O utilizador %s efectuou, por múltiplas vezes, o envio de ficheiros infectados.';

$string['phpuploaderror'] = 'Ocorreu um erro durante o envio do ficheiro: %s (Código de erro %s)';
$string['phpuploaderror_1'] = 'O ficheiro enviado excede a directiva upload_max_filesize do php.ini.';
$string['phpuploaderror_2'] = 'O ficheiro enviado excede a directiva MAX_FILE_SIZE especificada no formulário HTML.';
$string['phpuploaderror_3'] = 'O ficheiro foi apenas parcialmente enviado.';
$string['phpuploaderror_4'] = 'O ficheiro não enviado.';
$string['phpuploaderror_6'] = 'A pasta temporária está em falta.';
$string['phpuploaderror_7'] = 'Falhou a escrita do ficheiro para o disco.';
$string['phpuploaderror_8'] = 'O envio do ficheiro foi parado devido á extensão.';
$string['adminphpuploaderror'] = 'Um erro no envio do ficheiro foi provavelmente causado pela configuração do servidor.';

$string['youraccounthasbeensuspendedtext2'] = 'A sua conta em %s foi suspensa por %s.'; // @todo: more info?
$string['youraccounthasbeensuspendedreasontext'] = "A sua conta em %s foi suspensa por %s. Razão:\n\n%s";
$string['youraccounthasbeenunsuspendedtext2'] = 'A suspensão da sua conta em %s foi retirada. Pode efectuar a autenticação novamente e utilizar a página.'; // can't provide a login link because we don't know how they log in - it might be by xmlrpc

// size of stuff
$string['sizemb'] = 'MB';
$string['sizekb'] = 'KB';
$string['sizegb'] = 'GB';
$string['sizeb'] = 'b';
$string['bytes'] = 'bytes';

// countries

$string['country.af'] = 'Afghanistan';
$string['country.ax'] = 'Åland Islands';
$string['country.al'] = 'Albania';
$string['country.dz'] = 'Algeria';
$string['country.as'] = 'American Samoa';
$string['country.ad'] = 'Andorra';
$string['country.ao'] = 'Angola';
$string['country.ai'] = 'Anguilla';
$string['country.aq'] = 'Antarctica';
$string['country.ag'] = 'Antigua and Barbuda';
$string['country.ar'] = 'Argentina';
$string['country.am'] = 'Armenia';
$string['country.aw'] = 'Aruba';
$string['country.au'] = 'Australia';
$string['country.at'] = 'Austria';
$string['country.az'] = 'Azerbaijan';
$string['country.bs'] = 'Bahamas';
$string['country.bh'] = 'Bahrain';
$string['country.bd'] = 'Bangladesh';
$string['country.bb'] = 'Barbados';
$string['country.by'] = 'Belarus';
$string['country.be'] = 'Belgium';
$string['country.bz'] = 'Belize';
$string['country.bj'] = 'Benin';
$string['country.bm'] = 'Bermuda';
$string['country.bt'] = 'Bhutan';
$string['country.bo'] = 'Bolivia';
$string['country.ba'] = 'Bosnia and Herzegovina';
$string['country.bw'] = 'Botswana';
$string['country.bv'] = 'Bouvet Island';
$string['country.br'] = 'Brazil';
$string['country.io'] = 'British Indian Ocean Territory';
$string['country.bn'] = 'Brunei Darussalam';
$string['country.bg'] = 'Bulgaria';
$string['country.bf'] = 'Burkina Faso';
$string['country.bi'] = 'Burundi';
$string['country.kh'] = 'Cambodia';
$string['country.cm'] = 'Cameroon';
$string['country.ca'] = 'Canada';
$string['country.cv'] = 'Cape Verde';
$string['country.ky'] = 'Cayman Islands';
$string['country.cf'] = 'Central African Republic';
$string['country.td'] = 'Chad';
$string['country.cl'] = 'Chile';
$string['country.cn'] = 'China';
$string['country.cx'] = 'Christmas Island';
$string['country.cc'] = 'Cocos (Keeling) Islands';
$string['country.co'] = 'Colombia';
$string['country.km'] = 'Comoros';
$string['country.cg'] = 'Congo';
$string['country.cd'] = 'Congo, The Democratic Republic of The';
$string['country.ck'] = 'Cook Islands';
$string['country.cr'] = 'Costa Rica';
$string['country.ci'] = 'Cote D\'ivoire';
$string['country.hr'] = 'Croatia';
$string['country.cu'] = 'Cuba';
$string['country.cy'] = 'Cyprus';
$string['country.cz'] = 'Czech Republic';
$string['country.dk'] = 'Denmark';
$string['country.dj'] = 'Djibouti';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Dominican Republic';
$string['country.ec'] = 'Ecuador';
$string['country.eg'] = 'Egypt';
$string['country.sv'] = 'El Salvador';
$string['country.gq'] = 'Equatorial Guinea';
$string['country.er'] = 'Eritrea';
$string['country.ee'] = 'Estonia';
$string['country.et'] = 'Ethiopia';
$string['country.fk'] = 'Falkland Islands (Malvinas)';
$string['country.fo'] = 'Faroe Islands';
$string['country.fj'] = 'Fiji';
$string['country.fi'] = 'Finland';
$string['country.fr'] = 'France';
$string['country.gf'] = 'French Guiana';
$string['country.pf'] = 'French Polynesia';
$string['country.tf'] = 'French Southern Territories';
$string['country.ga'] = 'Gabon';
$string['country.gm'] = 'Gambia';
$string['country.ge'] = 'Georgia';
$string['country.de'] = 'Germany';
$string['country.gh'] = 'Ghana';
$string['country.gi'] = 'Gibraltar';
$string['country.gr'] = 'Greece';
$string['country.gl'] = 'Greenland';
$string['country.gd'] = 'Grenada';
$string['country.gp'] = 'Guadeloupe';
$string['country.gu'] = 'Guam';
$string['country.gt'] = 'Guatemala';
$string['country.gg'] = 'Guernsey';
$string['country.gn'] = 'Guinea';
$string['country.gw'] = 'Guinea-bissau';
$string['country.gy'] = 'Guyana';
$string['country.ht'] = 'Haiti';
$string['country.hm'] = 'Heard Island and Mcdonald Islands';
$string['country.va'] = 'Holy See (Vatican City State)';
$string['country.hn'] = 'Honduras';
$string['country.hk'] = 'Hong Kong';
$string['country.hu'] = 'Hungary';
$string['country.is'] = 'Iceland';
$string['country.in'] = 'India';
$string['country.id'] = 'Indonesia';
$string['country.ir'] = 'Iran, Islamic Republic of';
$string['country.iq'] = 'Iraq';
$string['country.ie'] = 'Ireland';
$string['country.im'] = 'Isle of Man';
$string['country.il'] = 'Israel';
$string['country.it'] = 'Italy';
$string['country.jm'] = 'Jamaica';
$string['country.jp'] = 'Japan';
$string['country.je'] = 'Jersey';
$string['country.jo'] = 'Jordan';
$string['country.kz'] = 'Kazakhstan';
$string['country.ke'] = 'Kenya';
$string['country.ki'] = 'Kiribati';
$string['country.kp'] = 'Korea, Democratic People\'s Republic of';
$string['country.kr'] = 'Korea, Republic of';
$string['country.kw'] = 'Kuwait';
$string['country.kg'] = 'Kyrgyzstan';
$string['country.la'] = 'Lao People\'s Democratic Republic';
$string['country.lv'] = 'Latvia';
$string['country.lb'] = 'Lebanon';
$string['country.ls'] = 'Lesotho';
$string['country.lr'] = 'Liberia';
$string['country.ly'] = 'Libyan Arab Jamahiriya';
$string['country.li'] = 'Liechtenstein';
$string['country.lt'] = 'Lithuania';
$string['country.lu'] = 'Luxembourg';
$string['country.mo'] = 'Macao';
$string['country.mk'] = 'Macedonia, The Former Yugoslav Republic of';
$string['country.mg'] = 'Madagascar';
$string['country.mw'] = 'Malawi';
$string['country.my'] = 'Malaysia';
$string['country.mv'] = 'Maldives';
$string['country.ml'] = 'Mali';
$string['country.mt'] = 'Malta';
$string['country.mh'] = 'Marshall Islands';
$string['country.mq'] = 'Martinique';
$string['country.mr'] = 'Mauritania';
$string['country.mu'] = 'Mauritius';
$string['country.yt'] = 'Mayotte';
$string['country.mx'] = 'Mexico';
$string['country.fm'] = 'Micronesia, Federated States of';
$string['country.md'] = 'Moldova, Republic of';
$string['country.mc'] = 'Monaco';
$string['country.mn'] = 'Mongolia';
$string['country.ms'] = 'Montserrat';
$string['country.ma'] = 'Morocco';
$string['country.mz'] = 'Mozambique';
$string['country.mm'] = 'Myanmar';
$string['country.na'] = 'Namibia';
$string['country.nr'] = 'Nauru';
$string['country.np'] = 'Nepal';
$string['country.nl'] = 'Netherlands';
$string['country.an'] = 'Netherlands Antilles';
$string['country.nc'] = 'New Caledonia';
$string['country.nz'] = 'New Zealand';
$string['country.ni'] = 'Nicaragua';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.nu'] = 'Niue';
$string['country.nf'] = 'Norfolk Island';
$string['country.mp'] = 'Northern Mariana Islands';
$string['country.no'] = 'Norway';
$string['country.om'] = 'Oman';
$string['country.pk'] = 'Pakistan';
$string['country.pw'] = 'Palau';
$string['country.ps'] = 'Palestinian Territory, Occupied';
$string['country.pa'] = 'Panama';
$string['country.pg'] = 'Papua New Guinea';
$string['country.py'] = 'Paraguay';
$string['country.pe'] = 'Peru';
$string['country.ph'] = 'Philippines';
$string['country.pn'] = 'Pitcairn';
$string['country.pl'] = 'Poland';
$string['country.pt'] = 'Portugal';
$string['country.pr'] = 'Puerto Rico';
$string['country.qa'] = 'Qatar';
$string['country.re'] = 'Reunion';
$string['country.ro'] = 'Romania';
$string['country.ru'] = 'Russian Federation';
$string['country.rw'] = 'Rwanda';
$string['country.sh'] = 'Saint Helena';
$string['country.kn'] = 'Saint Kitts and Nevis';
$string['country.lc'] = 'Saint Lucia';
$string['country.pm'] = 'Saint Pierre and Miquelon';
$string['country.vc'] = 'Saint Vincent and The Grenadines';
$string['country.ws'] = 'Samoa';
$string['country.sm'] = 'San Marino';
$string['country.st'] = 'Sao Tome and Principe';
$string['country.sa'] = 'Saudi Arabia';
$string['country.sn'] = 'Senegal';
$string['country.cs'] = 'Serbia and Montenegro';
$string['country.sc'] = 'Seychelles';
$string['country.sl'] = 'Sierra Leone';
$string['country.sg'] = 'Singapore';
$string['country.sk'] = 'Slovakia';
$string['country.si'] = 'Slovenia';
$string['country.sb'] = 'Solomon Islands';
$string['country.so'] = 'Somalia';
$string['country.za'] = 'South Africa';
$string['country.gs'] = 'South Georgia and The South Sandwich Islands';
$string['country.es'] = 'Spain';
$string['country.lk'] = 'Sri Lanka';
$string['country.sd'] = 'Sudan';
$string['country.sr'] = 'Suriname';
$string['country.sj'] = 'Svalbard and Jan Mayen';
$string['country.sz'] = 'Swaziland';
$string['country.se'] = 'Sweden';
$string['country.ch'] = 'Switzerland';
$string['country.sy'] = 'Syrian Arab Republic';
$string['country.tw'] = 'Taiwan, Province of China';
$string['country.tj'] = 'Tajikistan';
$string['country.tz'] = 'Tanzania, United Republic of';
$string['country.th'] = 'Thailand';
$string['country.tl'] = 'Timor-leste';
$string['country.tg'] = 'Togo';
$string['country.tk'] = 'Tokelau';
$string['country.to'] = 'Tonga';
$string['country.tt'] = 'Trinidad and Tobago';
$string['country.tn'] = 'Tunisia';
$string['country.tr'] = 'Turkey';
$string['country.tm'] = 'Turkmenistan';
$string['country.tc'] = 'Turks and Caicos Islands';
$string['country.tv'] = 'Tuvalu';
$string['country.ug'] = 'Uganda';
$string['country.ua'] = 'Ukraine';
$string['country.ae'] = 'United Arab Emirates';
$string['country.gb'] = 'United Kingdom';
$string['country.us'] = 'United States';
$string['country.um'] = 'United States Minor Outlying Islands';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Uzbekistan';
$string['country.vu'] = 'Vanuatu';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Viet Nam';
$string['country.vg'] = 'Virgin Islands, British';
$string['country.vi'] = 'Virgin Islands, U.S.';
$string['country.wf'] = 'Wallis and Futuna';
$string['country.eh'] = 'Western Sahara';
$string['country.ye'] = 'Yemen';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

$string['nocountryselected'] = 'Nenhum país selecionado';

// general stuff that doesn't really fit anywhere else
$string['system'] = 'Sistema';
$string['done'] = 'Pronto';
$string['back'] = 'Voltar';
$string['backto'] = 'Back to %s';
$string['alphabet'] = 'A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z';
$string['formatpostbbcode'] = 'Pode formatar a sua mensagem utilizando >BBCode. %sLer mais%s';
$string['Created'] = 'Criado';
$string['Updated'] = 'Actualizado';
$string['Total'] = 'Total';
$string['Visits'] = 'Visitas';
$string['after'] = 'depois';
$string['before'] = 'antes';

// import related strings (maybe separated later)
$string['importedfrom'] = 'Importado de %s';
$string['incomingfolderdesc'] = 'Ficheiros importados de outros anfitriões na rede';
$string['remotehost'] = 'Anfitrião remoto %s';

$string['Copyof'] = 'Cópia de %s';

// Profile views
$string['loggedinusersonly'] = 'Apenas utilizadores autenticados';
$string['allowpublicaccess'] = 'Permitir acesso público';
$string['thisistheprofilepagefor'] = 'Esta é a página de perfil para %s';
$string['viewmyprofilepage']  = 'Ver página de perfil';
$string['editmyprofilepage']  = 'Editar página de prefil';
$string['usersprofile'] = "Perfil de %s";
$string['profiledescription'] = 'O seu perfil é o que os utilizadores verão quando clicarem no seu nome ou na foto do seu perfil.';

// Dashboard views
$string['mydashboard'] = 'O meu painel';
$string['editdashboard'] = 'Editar';
$string['usersdashboard'] = "Painel de %s";
$string['dashboarddescription'] = 'O seu painel é a primeira página que vê quando efectua a autenticação. Apenas você tem acesso a essa página';
$string['topicsimfollowing'] = "Tópicos que estou a seguir";
$string['recentactivity'] = 'Actividade Recente';
$string['mymessages'] = 'As minhas mensagens';

$string['pleasedonotreplytothismessage'] = "Por favor não responda a esta mensagem.";
$string['deleteduser'] = 'Utilizador eliminado';

$string['theme'] = 'Tema';
$string['choosetheme'] = 'Escolha um tema ...';

// Home page info block
$string['Hide'] = 'Esconder';
$string['createcollect'] = 'Criar e Coleccionar';
$string['createcollectsubtitle'] = 'Desenvolva o seu portefólio';
$string['updateyourprofile'] = 'Actualize o seu <a href="%s">Perfil</a>';
$string['uploadyourfiles'] = 'Envie os seus <a href="%s">Ficheiros</a>';
$string['createyourresume'] = 'Crie o seu <a href="%s">Currículo</a>';
$string['publishablog'] = 'Publicar um <a href="%s">Diário</a>';
$string['Organise'] = 'Organizar';
$string['organisesubtitle'] = 'Disponibilize o seu portefólio através das Páginas';
$string['organisedescription'] = 'Organize o seu portefólio utilizando <a href="%s">Páginas.</a>  Crie diferentes páginas para diferentes audiências - você escolhe os elementos a incluir.';
$string['sharenetwork'] = 'Partilha e Rede';
$string['sharenetworksubtitle'] = 'Conheça amigos e junte-se a grupos';
$string['findfriendslinked'] = 'Encontre <a href="%s">amigos</a>';
$string['joingroups'] = 'Junte-se a <a href="%s">Grupos</a>';
$string['sharenetworkdescription'] = 'Você pode definir quem tem acesso a cada página e por quanto tempo.';
$string['howtodisable'] = 'Escondeu a caixa de informação. Pode controlar a visibilidade da caixa de informação em <a href="%s">Definições</a>.';

// Blocktype
$string['setblocktitle'] = 'Defina um título para o bloco';
?>
