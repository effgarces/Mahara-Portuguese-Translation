<?php

defined('INTERNAL') || die();

$string['completeregistration'] = 'Concluir Registo';
$string['confirmcancelregistration'] = 'Tem a certeza de que pretende cancelar este registo? Fazendo isso,  o seu pedido será removido do sistema.';
$string['confirmemailmessagehtml'] = '<p>Olá %s,</p>
<p>Obrigado por registar uma conta em %s. Por favor selecione a hiperligação seguinte para confirmar o seu endereço de correio electrónico.
O administrador da instituição será notificado e o seu pedido será considerado para aprovação e será notificado do resultado.</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>O hiperligação expira num prazo de 24 houras.</p>

<pre>--
Atenciosamente,
A equipa %s</pre>';
$string['confirmemailmessagetext'] = 'Olá %s,

Obrigado por solicitar o registo de uma conta em %s. Selecione a hiperligação seguinte para confirmar o seu endereço de correio electrónico. O administrador da instituição será notificado do seu pedido. Receberá uma mensagem de correio eletrónico se o seu registo foi aprovado ou não.

%sregister.php?key=%s

Esta hiperligação expira num prazo de 24 hours.

--
Atenciosamente,
A equipad%s';
$string['confirmemailsubject'] = 'Confirme o endereço de correio eletrónico para o registo em %s';
$string['description'] = 'Autenticação através da base de dados do Mahara';
$string['emailalreadytaken'] = 'Este endereço de correio eletrónico já se encontra registado';
$string['emailconfirmedok'] = '<p>Confirmou com sucesso o seu correio eletrónico. Será notificado com os detalhes adicionais de registo em breve.<p>';
$string['iagreetothetermsandconditions'] = 'Concordo com os Termos e Condições';
$string['internal'] = 'Interno';
$string['passwordformdescription'] = 'A sua senha deverá ter pelo menos 6 caracteres e conter pelo menos um digito e duas letras';
$string['passwordinvalidform'] = 'A sua senha deverá ter pelo menos 6 caracteres e conter pelo menos um digito e duas letras';
$string['pendingregistrationadminemailhtml'] = '<p>Hi %s,</p>
<p>Um novo utilizador pediu autorização para afiliar-se à instituição \'%s\'.</p>
<p>Porque está listado como administrador desta instituição deverá aprovar ou recusar este pedido de registo. Para fazê-lo selecione a seguinte hiperligação: <a href=\'%s\'>%s</a></p>
<p>Deverá aprovar ou recusar este pedido de registo num prazo de 2 semanas.</p>
<p>Detalhes do pedido de registo:</p>
<p>Nome: %s</p>
<p>Email: %s</p>
<p>Razões para o registo:</p>
<p>%s</p>
<pre>--
Atenciosamente,
A equipa %s</pre>';
$string['pendingregistrationadminemailsubject'] = 'Novo registo de um utilizador da instituição \'%s\' em %s.';
$string['pendingregistrationadminemailtext'] = 'Olá %s,

Um novo utilizador pediu autorização para afiliar-se à instituição \'%s\'.

Porque está listado como administrador desta instituição deverá aprovar ou recusar este pedido de registo. Para fazê-lo selecione a seguinte hiperligação: %s

Deverá aprovar ou recusar este pedido de registo num prazo de 2 semanas.

Detalhes do pedido de registo:

Nome: %s
Email: %s
Razões para o registo:
%s

--
Atenciosamente,
A equipa %s';
$string['registeredemailmessagehtml'] = '<p>Olá %s,</p>
<p>Obrigado por criar uma conta em %s. Por favor siga a seguinte hiperligaçlão para concluir:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>A hiperligação irá expirar dentro 24 horas.</p>

<pre>--
Atentamente,,
A equipa %s</pre>';
$string['registeredemailmessagetext'] = 'Olá %s,

Obrigado por criar uma conta em %s. Por favor siga a seguinte hiperligaçlão para concluir
o processo de registo:

%sregister.php?key=%s

A hiperligação irá expirar dentro 24 horas.

--
Atentamente,
A equipa %s';
$string['registeredemailsubject'] = 'Registou-se em %s';
$string['registeredok'] = '<p>Efetuou o registo com sucesso. Por favor verifique o seu correio eletrónico para obter instruções sobre como ativar a sua conta.</p>';
$string['registeredokawaitingemail'] = 'Submeteu com sucesso o pedido de registo. Uma mensagem email foi-lhe enviada para a sua caixa de correio para confirmar o seu endereço e continuar o processo.';
$string['registrationcancelledok'] = 'Cancelou com sucesso o seu pedido de registo.';
$string['registrationconfirm'] = 'Confirmar registo?';
$string['registrationconfirmdescription'] = 'O registo tem que ser aprovado pelos administradores da instituição.';
$string['registrationdeniedemailsubject'] = 'Tentativa de registo foi %s negada.';
$string['registrationdeniedmessage'] = 'Olá %s,

Recebemos o seu pedido para se juntar à nossa instituição em %s e 
decidimos negar-lhe o acesso.

Se acha que esta decisão é incorreta, por favor entre em contacto comigo através de correio eletrónico.

Cumprimentos
%s';
$string['registrationdeniedmessagereason'] = 'Olá %s,

Recebemos o seu pedido para se juntar à nossa instituição em %s e 
decidimos negar-lhe o acesso pelas seguintes razões:

%s


Se acha que esta decisão é incorreta, por favor entre em contacto comigo através correio eletrónico.

Cumprimentos
%s';
$string['registrationnosuchkey'] = 'Desculpe, não foi encontrado um registo com esta chave. Provavelmente já passaram mais de 24 horas desde que efectuou o registo? Caso contrário, poderá ser um problema no nosso site';
$string['registrationreason'] = 'Razão para o registo';
$string['registrationreasondesc'] = 'O motivo invocado para o pedido de registo com a instituição escolhida e quaisquer outras informações que possam ser úteis para o administrador no processamento do seu pedido. O registo não pode ser concluído sem esta informação.';
$string['registrationunsuccessful'] = 'Desculpe, a sua tentativa de registo não foi bem sucedida. O problema deve-se ao nosso site. Por favor tente novamente mais tarde.';
$string['title'] = 'Interno';
$string['usernamealreadytaken'] = 'Desculpe, este nome de utilizador já se encontra registado';
$string['usernameinvalidadminform'] = 'Os nomes de utilizador podem conter letras, números, a maioria dos símbolos e têm que ter entre 3 a236 caracteres de tamanho. Espaços não são permitidos.';
$string['usernameinvalidform'] = 'Os nomes de utilizador podem conter letras, números e a maioria dos símbolos e terão que ter entre 3 a 30 caracteres de dimensão. Não são permitidos espaços.';
$string['youmaynotregisterwithouttandc'] = 'Não pode efctuar o registo a não ser que concorde com <a href="terms.php">Termos e Condições</a>';
