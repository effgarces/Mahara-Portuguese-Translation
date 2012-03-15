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

$string['administration'] = 'Administração';

// Installer
$string['installation'] = 'Instalação';
$string['release'] = 'versão %s (%s)';
$string['copyright'] = 'Copyright &copy; 2006 onwards, <a href="http://wiki.mahara.org/Contributors">Catalyst IT Ltd and others</a>';
$string['installmahara'] = 'Instalar Mahara';
$string['component'] = 'Componente ou plugin';
$string['continue'] = 'Continuar';
$string['coredata'] = 'dados básicos';
$string['coredatasuccess'] = 'Dados básicos copiados com sucesso';
$string['fromversion'] = 'Da versão';
$string['information'] = 'Informação';
$string['installsuccess'] = 'Instalação com sucesso da versão ';
$string['toversion'] =  'Para a versão';
$string['localdatasuccess'] = 'Personalizações locais instaladas com sucesso';
$string['notinstalled'] = 'Não instalado';
$string['nothingtoupgrade'] = 'Nada para actualizar';
$string['performinginstallation'] = 'Instalação a decorrer...';
$string['performingupgrades'] = 'Actualização a decorrer...';
$string['runupgrade'] = 'Executar actualização';
$string['successfullyinstalled'] = 'Mahara instalado com sucesso!';
$string['thefollowingupgradesareready'] = 'As seguintes actualizações estão prontas:';
$string['registerthismaharasite'] = 'Registe esta instalação do Mahara';
$string['upgradeloading'] = 'Carregando...';
$string['upgrades'] = 'Actualizações';
$string['upgradesuccess'] = 'Actualização efectuada com sucesso';
$string['upgradesuccesstoversion'] = 'Actualizado com sucesso para a versão ';
$string['upgradefailure'] = 'Ocorreu um erro na actualização!';
$string['noupgrades'] = 'Nada para actualizar! A sua instalação já está actualizada!';
$string['youcanupgrade'] = 'Pode actualizar o Mahara da versão %s (%s) para %s (%s)!';
$string['Plugin'] = 'Plugin';
$string['jsrequiredforupgrade'] = 'É necessário activar o javascript para executar uma instalação ou actualização.';
$string['dbnotutf8warning'] = 'Não está a utilizar uma base de dados UTF-8. O Mahara guarda todos os dados internamente em formato UTF-8. Pode mesmo assim tentar efectuar a actualização mas é recomendado que converta a sua base de dados para UTF-8.';
$string['dbcollationmismatch'] = 'Uma coluna da sua base de dados está a utilizar uma "collation" que não é a mesma da base de dados. Deverá garantir que todas as colunas utilizam a mesma "collation" da base de dados.';

// Admin navigation menu
$string['adminhome']      = 'Página do Administrador';
$string['configsite']  = 'Configurar Site';
$string['configusers'] = 'Gerir Utilizadores';
$string['groups'] = 'Grupos';
$string['managegroups'] = 'Gerir Grupos';
$string['Extensions']   = 'Extensões';
$string['configextensions']   = 'Administrar Extensões';
$string['manageinstitutions'] = 'Gerir Instituições';

// Admin homepage strings
$string['siteoptions']    = 'Opções do Site';
$string['siteoptionsdescription'] = 'Configure opções básicas do site como o nome, língua e tema';
$string['editsitepages']     = 'Editar páginas do site';
$string['editsitepagesdescription'] = 'Permite a edição do conteúdo de várias páginas do site';
$string['menus'] = 'Menus';
$string['menusdescription'] = 'Gere as hiperligações e ficheiros contidos nas Hiperligações e Recursos e nos Menus de Rodapé';
$string['sitefiles']          = 'Ficheiros do Site';
$string['sitefilesdescription'] = 'Permite o envio e administração de ficheiros que podem ser adicionados às Hiperligações e Recursos e nas Páginas do Site';
$string['siteviews']          = 'Páginas do Site';
$string['siteviewsdescription'] = 'Criar e administrar Páginas e Modelos de Páginas para todo o site';
$string['networking']          = 'Rede';
$string['networkingdescription'] = 'Configure a rede para o Mahara';

$string['staffusers'] = 'Gestores';
$string['staffusersdescription'] = 'Atribuir permissões de Gestor';
$string['adminusers'] = 'Administradores';
$string['adminusersdescription'] = 'Atribuir permissões de Administrador';
$string['institution']   = 'Instituição';
$string['institutions']   = 'Instituições';
$string['institutiondetails']   = 'Detalhes da Instituição';
$string['institutionauth']   = 'Autoridades da Instituição';
$string['institutionsdescription'] = 'Instalar e gerir Instituições instaladas';
$string['adminnotifications'] = 'Notificações de Administrador';
$string['adminnotificationsdescription'] = 'Resumo de como os administradores recebem notificações de sistema';
$string['uploadcsv'] = 'Adicionar Utilizadores por CSV';
$string['uploadcsvdescription'] = 'Enviar um ficheiro CSV contendo novos utilizadores';
$string['usersearch'] = 'Pesquisa de Utilizadores';
$string['usersearchdescription'] = 'Pesquisar todos os utilzadores e realizar acções administrativas sobre os mesmos';
$string['usersearchinstructions'] = 'Pode pesquisar por utilizadores clicando sobre as iniciais do seu primeiro e último nomes, ou introduzindo o nome no campo de pesquisa. Também pode introduzir um endereço de email no campo de pesquisa se desejar procurar por endereço de email.';

$string['administergroups'] = 'Administrar Grupos';
$string['administergroupsdescription'] = 'Nomear administradores de grupo e apagar grupos';
$string['groupcategoriesdescription'] = 'Adicionar e editar categorias de grupo';

$string['institutionmembersdescription'] = 'Associar utilizadores a instituições';
$string['institutionstaffdescription'] = 'Atribuir permissões de Gestor';
$string['institutionadminsdescription'] = 'Atribuir permissões de Administrador de Instituição';
$string['institutionviews']          = 'Páginas da Instituição';
$string['institutionviewsdescription'] = 'Crie e administre as Páginas e os Modelos de Páginas de uma Instituição';
$string['institutionfiles']          = 'Ficheiros da Instituição';
$string['institutionfilesdescription'] = 'Enviar e gerir ficheiros para uso nas Páginas da Instituição';

$string['pluginadmin'] = 'Administração de Plugins';
$string['pluginadmindescription'] = 'Instalar e configurar plugins';
$string['missingplugin'] = 'Um plugin instalado (%s) não foi encontrado';
$string['installedpluginsmissing'] = 'Os seguintes plugins estão instalados nas não puderam ser encontrados';
$string['ensurepluginsexist'] = 'Por favor verifique se os seus plugins instalados estão disponíveis em %s, e legiveis pelo servidor.';

$string['htmlfilters'] = 'Filtros HTML';
$string['htmlfiltersdescription'] = 'Active novos filtros para o HTML Purifier';
$string['newfiltersdescription'] = 'Se efectuou o download de um novo conjunto de filtros HTML, pode instala-los descompactando o ficheiro na pasta %s e de seguida clicando no botão abaixo';
$string['filtersinstalled'] = 'Filtros instalados.';
$string['nofiltersinstalled'] = 'Não existem filtros HTML instalados.';

// sanity check warnings
$string['warnings'] = 'Aviso';

// Group management
$string['groupcategories'] = 'Categorias de Grupo';
$string['allowgroupcategories'] = 'Permitir Categorias de Grupo';
$string['enablegroupcategories'] = 'Activar Categorias de Grupo';
$string['addcategories'] = 'Adicionar Categorias';
$string['allowgroupcategoriesdescription'] = 'Se marcado, os administradores poderão criar categorias que os utilizadores poderão atribuir aos seus grupos';
$string['groupoptionsset'] = 'As opções de Grupo foram actualizadas.';
$string['groupcategorydeleted'] = 'Categoria Eliminada';
$string['confirmdeletecategory'] = 'Tem a certeza que deseja eliminar esta categoria?';
$string['groupcategoriespagedescription'] = 'As categorias listadas aqui poderão ser atribuidas a grupos durante a criação de um grupo, e utilizadas para filtrar grupos durante as pesquisas.';
$string['groupadminsforgroup'] = "Administradores de Grupo para '%s'";
$string['potentialadmins'] = 'Administradores Potenciais';
$string['currentadmins'] = 'Administradores Actuais';
$string['groupadminsupdated'] = 'Os admnistradores de Grupo foram actualizados';

// Register your Mahara
$string['Field'] = 'Campo';
$string['Value'] = 'Valor';
$string['datathatwillbesent'] = 'Os dados que serão enviados';
$string['sendweeklyupdates'] = 'Enviar actualizações semanais?';
$string['sendweeklyupdatesdescription'] = 'Se marcado, o seu site irá enviar actualizações semanais para mahara.org contendo algumas estatísticas sobre o seu site';
$string['Register'] = 'Registar';
$string['registrationfailedtrylater'] = 'Ocorreu um erro no Registo, com o código de erro %s. Por favor tente mais tarde.';
$string['registrationsuccessfulthanksforregistering'] = 'Registo efectuado com sucesso - obrigado por se registar!';
$string['registeryourmaharasite'] = 'Registe o seu site Mahara';
$string['registeryourmaharasitesummary'] = '
<p>Pode registar o site Mahara em <a href="http://mahara.org/">mahara.org</a>, e ajudar-nos a construir uma imagem das instalações do Mahara em redor do mundo. Este aviso desaparecerá após o registo.</p>
<p>Pode registar o seu site, e pré-visualizar a informações que serão enviadas através da <strong><a href="%sadmin/registersite.php">página de Registo do Site.</a></strong></p>';
$string['registeryourmaharasitedetail'] = '
<p>Pode registar o seu site Mahara em <a href="http://mahara.org/">mahara.org</a>. O registo é gratuito e ajuda-nos a construir uma imagem das instalações do Mahara em redor do mundo.</p>
<p>Pode ver a informação que será enviada para mahara.org - nada que o possa identificar si ou algum dos seus utilizadores será enviado.</p>
<p>Se marcar &quot;enviar actualizações semanais&quot;, o Mahara irá enviar automaticamente uma actualização semanal para mahara.org com informações actualizadas.</p>
<p>Ao registar-se este aviso será removido. Após o registo poderá alterar a opção de envio de actualizações semanais na página de <a href="%sadmin/site/options.php">opções do site</a> page.</p>';
$string['siteregistered'] = 'O seu site foi registado. Pode activar/desactivar as actualizações semanais nas <a href="%sadmin/site/options.php">opções do site</a> page.</p>';

// Close site
$string['Close'] = 'Fechar';
$string['closesite'] = 'Fechar o Site';
$string['closesitedetail'] = 'Pode fechar o site para todos excepto os administradores. Esta opção é útil quando for necessário preparar o site para uma actualização da base de dados. Apenas os administradores poderão efectuar a autenticação até que reabra o site, ou até que a actualização seja efectuada com sucesso.';
$string['Open'] = 'Abrir';
$string['reopensite'] = 'Reabrir o Site';
$string['reopensitedetail'] = 'O seu site está fechado. Os administradores poderão continuar autenticados até que uma actualização seja detectada.';

// Statistics
$string['siteinformation'] = 'Informações do Site';
$string['viewfullsitestatistics'] = 'Ver todas as estatísticas do site';
$string['sitestatistics'] = 'Estatísticas do site';
$string['siteinstalled'] = 'Site Instalado';
$string['databasesize'] = 'Tamanho da base de dados';
$string['diskusage'] = 'Utilização do disco';
$string['maharaversion'] = 'Versão do Mahara';
$string['activeusers'] = 'Utilizadores activos';
$string['loggedinsince'] = '%s hoje, %s desde %s, %s no total';
$string['groupmemberaverage'] = 'Em média, cada utilizador está em %s grupos';
$string['viewsperuser'] = 'Utilizadores que podem criar Páginas têm cerca de %s Páginas cada';
$string['Cron'] = 'Cron';
$string['runningnormally'] = 'Funcionando normalmente';
$string['cronnotrunning'] = 'O Cron não está em execução.<br>Veja o <a href="http://wiki.mahara.org/System_Administrator\'s_Guide/Installing_Mahara">guia de instalação</a> para instrucções sobre como configurá-lo.';
$string['Loggedin'] = 'Autenticados';
$string['youraverageuser'] = 'O utilizador médio...';
$string['statsmaxfriends'] = 'Tem %s amigos (o utilizador com mais amigos é <a href="%s">%s</a> com %d)';
$string['statsnofriends'] = 'Tem 0 amigos :(';
$string['statsmaxviews'] = 'Criou %s páginas (o utilizador com mais páginas é <a href="%s">%s</a> com %d)';
$string['statsnoviews'] = 'Criou 0 páginas :(';
$string['statsmaxgroups'] = 'Está em %s grupos (o utilizador que está associado a mais grupos é <a href="%s">%s</a> com %d)';
$string['statsnogroups'] = 'Está em 0 grupos :(';
$string['statsmaxquotaused'] = 'Utilizou cerca de %s de espaço de disco (o utilizador que está a ocupar mais espaço é <a href="%s">%s</a> com %s)';
$string['groupcountsbytype'] = 'Número de grupos por Tipo de Grupo';
$string['groupcountsbyjointype'] = 'Número de grupos por Tipo de Acesso';
$string['blockcountsbytype'] = 'Blocos mais utilizados nas Páginas de Portefólio:';
$string['uptodate'] = 'atualizado';
$string['latestversionis'] = 'a última versão é <a href="%s">%s</a>';
$string['viewsbytype'] = 'Páginas por Tipo';
$string['userstatstabletitle'] = 'Estatísticas Diárias de Utilizadores';
$string['groupstatstabletitle'] = 'Os Maiores Grupos';
$string['viewstatstabletitle'] = 'As Páginas Mais Populares';

// Site options
$string['adminsonly'] = 'Apenas para Administradores';
$string['adminsandstaffonly'] = 'Apenas para Administradores e Gestores';
$string['advanced'] = 'Avançado';
$string['allowpublicviews'] = 'Permitir Páginas públicas';
$string['allowpublicviewsdescription'] = 'Se activado, os utilizadores poderão criar Páginas de portefólio que podem ser acedidas pelo público em geral em vez de apenas estarem disponiveis para os utilizadores autenticados.';
$string['allowpublicprofiles'] = 'Permitir perfis públicos';
$string['allowpublicprofilesdescription'] = 'Se activado, os utilizadores poderão permitir que as suas Páginas de perfil sejam acessiveis ao público em geral em vez de apenas estarem disponiveis para os utilizadores autenticados.';
$string['anonymouscomments'] = 'Comentários Anónimos';
$string['anonymouscommentsdescription'] = 'Se activado, utilizadores não registados poderão colocar comentários em Páginas públicas ou Páginas que possam aceder através de um URL secreto.';
$string['antispam'] = 'Anti-spam';
$string['antispamdescription'] = 'Tipo de medidas anti-spam utilizadas nos formulários disponíveis publicamente';
$string['defaultaccountinactiveexpire'] = 'Data de expiração da conta por inactividade';
$string['defaultaccountinactiveexpiredescription'] = 'Por quanto tempo a conta do utilizador irá ficar activa sem que o utilizador tenha que voltar a efectuar a autenticação';
$string['defaultaccountinactivewarn'] = 'Aviso de inactividade/expiração';
$string['defaultaccountinactivewarndescription'] = 'Antecedência com que será enviado um aviso de expiração ou de inactividade para os utilzadores';
$string['defaultaccountlifetime'] = 'Tempo de vida por omissão da conta';
$string['defaultaccountlifetimedescription'] = 'Se activado, as contas de utilizadores expirarão após este período de tempo';
$string['embeddedcontent'] = 'Conteúdo embebido';
$string['embeddedcontentdescription'] = 'Se pretender que os utilizadores possam embeber videos ou conteúdos externos nos seus portefólios, pode escolher em quais os sites em que confia.';
$string['Everyone'] = 'Todos';
$string['homepageinfo'] = 'Exibir informação na página de entrada';
$string['homepageinfodescription'] = 'Se activado, será disponibilizada informação sobre o Mahra e como é usado na página de entrada. Utilizadores autenticados poderão esconder estas informações.';
$string['institutionautosuspend'] = 'Auto-suspender instituições expiradas';
$string['institutionautosuspenddescription'] = 'Se marcado, insituições expiradas serão automaticamente suspensas';
$string['institutionexpirynotification'] = 'Aviso sobre expiração da instituição';
$string['institutionexpirynotificationdescription'] = 'Uma mensagem de notificação será enviada para o site e os administradores da instituição antes da expiração da instituição';
$string['language'] = 'Língua';
$string['none'] = 'Nenhum';
$string['country'] = 'País';
$string['pathtoclam'] = 'Caminho para o ClamAV';
$string['pathtoclamdescription'] = 'Caminho do sistema para o clamscan ou clamdscan';
$string['registerterms'] = 'Acordo de Registo';
$string['registertermsdescription'] = "Força os utilizadores a concordar com os Termos e Condições antes de efectuarem o registo. Deverá editar os Termos e Condições do site antes de activar esta opção.";
$string['allowmobileuploads'] = 'Permitir envios móveis';
$string['allowmobileuploadsdescription'] = 'Se activado os utilizadores terão a opção de definir um token - conteúdo enviado com este token será salvo como um artefacto.';
$string['remoteavatars'] = 'Exibir avatares remotos';
$string['remoteavatarsdescription'] = 'Se marcado, o serviço <a href="http://www.gravatar.com">Gravatar</a> será utilizado por omissão para os icons de perfil dos utilizadores.';
$string['searchplugin'] = 'Plugin de pesquisa';
$string['searchplugindescription'] = 'Plugin de pesquisa a usar';
$string['searchusernames'] = 'Pesquisar nomes de utilizador';
$string['searchusernamesdescription'] = 'Permite que os nomes de utilizador possam ser pesquisados como parte da "Pesquisa de Utilizadores".';
$string['sessionlifetime'] = 'Tempo de vida da Sessão';
$string['sessionlifetimedescription'] = 'Tempo em minutos após o qual um utilizador autenticado inactivo sairá automaticamente';
$string['setsiteoptionsfailed'] = 'O ocorreu um erro ao definir a opção %s';
$string['showonlineuserssideblock'] = 'Exibir utilizadores autenticados';
$string['showonlineuserssideblockdescription'] = 'Se activado, os utilizadores verão um bloco no lado direito do site com uma lista de utilizadores autenticados';
$string['showselfsearchsideblock'] = 'Activar a Pesquisa de Portefólio';
$string['showselfsearchsideblockdescription'] = 'Mostra o bloco lateral "Procurar o Meu Portefólio" na secção o "Meu Portefólio" do site';
$string['showtagssideblock'] = 'Activar Nuvem de Tags';
$string['showtagssideblockdescription'] = 'Se activado, os utilizadores verão um bloco lateral na secção o "Meu Portefólio" do site com uma lista das suas tags mais frequentes';
$string['simple'] = 'Simples';
$string['sitedefault'] = 'Padrão';
$string['sitelanguagedescription'] = 'A língua padrão do site';
$string['sitecountrydescription'] = 'O país padrão do site';
$string['sitename'] = 'Nome do site';
$string['sitenamedescription'] = 'O nome do site aparece em vários locais em redor do site e em emails enviados a partir do site site';
$string['siteoptionspagedescription'] = 'Aqui pode definir algumas opções globais que serão aplicadas por omissão em todo o site. <BR> Nota: Opções desactivadas são sobrepostas pelas que estiverem presentes no ficheiro config.php.';
$string['siteoptionsset'] = 'As opções do site foram actualizadas.';
$string['sitethemedescription'] = 'O tema padrão do site';
$string['smallviewheaders'] = 'Cabeçalhos de Páginas';
$string['smallviewheadersdescription'] = 'Se activado, um pequeno cabeçalho e bloco de navegação será exibido quando estiver a ver ou a editar Páginas.';
$string['spamhaus'] = 'Activar a lista negra Spamhaus';
$string['spamhausdescription'] = 'Se activado, os URLs serão verificados através da Spamhaus DNSBL';
$string['surbl'] = 'Activar a lista negra SURBL';
$string['surbldescription'] = 'Se activado, os URLs serão verificados através da SURBL DNSBL';
$string['disableexternalresources'] = 'Desactivar recursos externos no HTML do utilizador';
$string['disableexternalresourcesdescription'] = 'Desactiva a inserção de recursos externos, impedindo os utilizadores de inserir imagems de outros servidores';
$string['tagssideblockmaxtags'] = 'Número Máximo de Tags na Núvem';
$string['tagssideblockmaxtagsdescription'] = 'O número por omissão de tags a exibir nas nuvens de tags dos utilizadores';
$string['trustedsites'] = 'Sites de confiança';
$string['updatesiteoptions'] = 'Actualizar opções do site';
$string['usersallowedmultipleinstitutions'] = 'Utilizadores pertencentes a múltiplas instituições';
$string['usersallowedmultipleinstitutionsdescription'] = 'Se marcado, os utilizadores poderão ser membros de várias instituições ao mesmo tempo';
$string['userscanchooseviewthemes'] = 'Os utilizadores podem escolher temas para as Páginas';
$string['userscanchooseviewthemesdescription'] = 'Se activado, os utilizadores podem escolher um tema quando estiverem a editar uma Página. A Página será apresentada aos utilizadores com o tema escolhido.';
$string['userscanhiderealnames'] = 'Os utilizadores podem esconder os nomes reais';
$string['userscanhiderealnamesdescription'] = 'Se marcado, os utilizadores que definiram um nome de visualização podem escolher apenas serem pesquisáveis através desse nome, e não serão encontrados em pesquisas pelo seu nome real. (Na secção de administração do site, os utilizadores são sempre pesquisáveis pelo seu nome real).';
$string['usersseenewthemeonlogin'] = 'Os outros utilizadores irão ver o novo tema da próxima vez que efectuarem a autenticação no site.';
$string['viruschecking'] = 'Verificação de Virus';
$string['viruscheckingdescription'] = 'Se marcado, a verificação de virus através do ClamAV será activada para todos os ficheiros enviados';
$string['whocancreategroups'] = 'Quem pode criar Grupos';
$string['whocancreategroupsdescription'] = 'Que utilizadores poderão criar novos grupos';
$string['whocancreatepublicgroups'] = 'Quem pode criar Grupos Públicos';
$string['whocancreatepublicgroupsdescription'] = 'Que utilizadores poderão criar grupos que serão visiveis para o público em geral';
$string['wysiwyg'] = 'Editor HTML';
$string['wysiwygdescription'] = 'Define se o editor HTML está activado globalmente ou se os utilizadores podem activá-lo/desactivá-lo individualmente.';
$string['wysiwyguserdefined'] = 'Definido pelo utilizador';

// Site content
$string['about']               = 'Sobre';
$string['discardpageedits']    = 'Descartar as alterações efectuadas a esta página?';
$string['editsitepagespagedescription'] = 'Aqui pode editar os conteúdos de algumas das páginas do site, como a página de entrada (para utilizadoers autenticados e não autenticados separadamente), e as páginas presentes no rodapé.';
$string['home']                = 'Entrada';
$string['loadsitepagefailed']  = 'Ocorreu um erro ao carregar a página do site';
$string['loggedouthome']       = 'Página de saída';
$string['pagename']            = 'Nome da página';
$string['pagesaved']           = 'Página guardada';
$string['pagetext']            = 'Texto da página';
$string['privacy']             = 'Política de Privacidade';
$string['savechanges']         = 'Guardar alterações';
$string['savefailed']          = 'Não foi possível guardar';
$string['sitepageloaded']      = 'Página do site carregada';
$string['termsandconditions']  = 'Termos e Condições';
$string['uploadcopyright']     = 'Política de Copyrights para envios';

// Links and resources menu editor
$string['sitefile']            = 'Ficheiro do Site';
$string['adminpublicdirname']  = 'público';  // Name of the directory in which to store public admin files
$string['adminpublicdirdescription'] = 'Ficheiro acessiveis por utilizadores não registados';
$string['badmenuitemtype']     = 'Tipo de item desconhecido';
$string['confirmdeletemenuitem'] = 'Tem a certeza que deseja eliminar este item?';
$string['deletingmenuitem']    = 'Eliminando item';
$string['deletefailed']        = 'Ocorreu um erro ao eliminar este item';
$string['externallink']        = 'Hiperligação externa';
$string['editlinksandresources'] = 'Editar hiperligações e recursos';
$string['linkedto']            = 'Ligado a';
$string['linksandresourcesmenu'] = 'Menu de Hiperligações e Recursos';
$string['linksandresourcesmenupagedescription'] = 'O menu Hiperligações e Recursos está disponível para todos os utilizadores na maioria das páginas. Pode adicionar hiperligações para outros sites e ficheiros enviados para a secção de %sFicheiros de Administração%s.';
$string['loadingmenuitems']    = 'Carregando items';
$string['loadmenuitemsfailed'] = 'Ocorreu um erro ao carregar os items';
$string['loggedinmenu']        = 'Autenticado em hiperligações e recursos';
$string['loggedoutmenu']       = 'Hiperligações e recursos públicos';
$string['menuitemdeleted']     = 'Item eliminado';
$string['menuitemsaved']       = 'Item guardado';
$string['menuitemsloaded']     = 'Items carregados';
$string['name']                = 'Nome';
$string['nositefiles']         = 'Não existem ficheiro de site disponíveis';
$string['public']              = 'público';
$string['savingmenuitem']      = 'Guardando item';
$string['type']                = 'Tipo';
$string['footermenu']          = 'Menu de Rodapé';
$string['footermenudescription'] = 'Activar ou desactivar as hiperligações no rodapé.';
$string['footerupdated']       = 'Rodapé actualizado';

// Admin Files
$string['adminfilespagedescription'] = 'Aqui podem enviar ficheiros que podem ser incluídos no %smenu de Hiperligações e Recursos%s. Ficheiros na pasta de entrada poderão ser adicionados ao menu para utilizadores autenticados, enquanto que os ficheiros na pasta pública poderão ser adicionados ao menu público.';

// Networking options
$string['networkingextensionsmissing'] = 'Desculpe, não pode configurar a Rede Mahara porque falta na sua instalação do PHP uma ou mais extensões necessárias:';
$string['publickey'] = 'Chave Pública';
$string['publickeydescription2'] = 'Esta chave pública é gerada automaticamente, e alterada a cada %s dias';
$string['publickeyexpires'] = 'Expiração da chave pública';
$string['enablenetworkingdescription'] = 'Permite que o seu servidor Mahra possa comunicar com servidores que estejam a executar o Moodle ou outras aplicações';
$string['enablenetworking'] = 'Activar Rede';
$string['networkingenabled'] = 'A Rede foi activada. ';
$string['networkingdisabled'] = 'A Rede foi desactivada. ';
$string['networkingpagedescription'] = 'As capacidades de Rede do Mahara permitem-lhe comunicar com o sites Mahara ou sites Moodle que estejam a ser executados na mesma ou noutra máquina. Se a Rede estiver activada, pode usá-la para configurar uma autenticação única para utilizadores que efectuem a autenticação quer no Moodle quer no Mahara.';
$string['networkingunchanged'] = 'As definições de Rede não foram alteradas';
$string['promiscuousmode'] = 'Auto-registar todos os hosts';
$string['promiscuousmodedisabled'] = 'A funcionalidade de auto-registar foi desactivada. ';
$string['promiscuousmodeenabled'] = 'A funcionalidade de auto-registar foi activada. ';
$string['promiscuousmodedescription'] = 'Cria um registo de instituição para cada host que se ligue a si, e permite que os seus utilizadores possam efectuar a autenticação no Mahara';
$string['wwwroot'] = 'Raiz WWW';
$string['wwwrootdescription'] = 'Este é o endereço através do qual os seus utilizadores acederam a esta instalação do Mahara, e também o endereço para o qual serão geradas as chaves SSL';
$string['proxysettings'] = 'Definições do Proxy';
$string['proxyaddress'] = 'Endereço do Proxy';
$string['proxyaddressdescription'] = 'Se o seu site utiliza um servidor proxy para aceder á internet, especifique os proxies no formato <em>nome do host:número de porta</em>';
$string['proxyaddressset'] = 'Endereço do Proxy definido';
$string['proxyauthmodel'] = 'Método de autenticação no Proxy';
$string['proxyauthmodeldescription'] = 'Escolha o método de autenticação no servidor proxy, se necessário';
$string['proxyauthmodelbasic'] = 'Basico (NCSA)';
$string['proxyauthmodelset'] = 'O método de autenticação no servidor Proxy foi definido';
$string['proxyauthcredentials'] = 'Credenciais do Proxy';
$string['proxyauthcredentialsdescription'] = 'Introduza as credenciais necessárias para efectuar autenticação no servidor proxy no formato <em>nome de utilizador:senha</em>';
$string['proxyauthcredntialsset'] = 'Credenciais do Proxy definidas';
$string['emailsettings'] = 'Definições de Email';
$string['emailsmtphosts'] = 'Servidor SMTP';
$string['emailsmtphostsdescription'] = 'Servidor SMTP que será usado para envio de emails, e.g. <em>smtp1.example.com</em>';
$string['emailsmtpport'] = 'Porta SMTP';
$string['emailsmtpportdescription'] = 'Especifique o número de porta se o servidor SMTP utiliza uma porta diferente de 25';
$string['emailsmtpuser'] = 'Utilizador';
$string['emailsmtpuserdescription'] = 'Se o servidor SMTP requer autenticação, introduza as credenciais nos campos correspondentes';
$string['emailsmtppass'] = 'Senha';
$string['emailsmtpsecure'] = 'Encriptação SMTP';
$string['emailsmtpsecuredescription'] = 'Se o servidor SMTP suporta encryption, active-a aqui.';
$string['emailsmtpsecuressl'] = 'SSL';
$string['emailsmtpsecuretls'] = 'TLS';
$string['emailnoreplyaddress'] = 'Endereço de Email do Sistema';
$string['emailnoreplyaddressdescription'] = 'Os emails são enviados deste endereço';




// Upload CSV and CSV errors
$string['csvfile'] = 'Ficheiro CSV';
$string['emailusersaboutnewaccount'] = 'Enviar mensagem de email para os utilizadores, sobre a sua conta?';
$string['emailusersaboutnewaccountdescription'] = 'Define se um email será enviado aos utilizadores informando-os sobre os detalhes da sua nova conta';
$string['forceuserstochangepassword'] = 'Forçar a alteração da senha?';
$string['forceuserstochangepassworddescription'] = 'Define se os utilizadores serão forçados a alterar a sua senha quando efectuarem a sua autenticação pela primeira vez';
$string['uploadcsvinstitution'] = 'A Instituição e o método de autenticação para os novos utilizadores';
$string['configureauthplugin'] = 'É necessário configurar um plugin de autenticação antes de poder adicionar utilizadores';
$string['csvfiledescription'] = 'O ficheiro que contém os utilizadores a adicionar';
$string['csverroremptyfile'] = 'O ficheiro csv está vazio.';
$string['invalidfilename'] = 'O ficheiro "%s" não existe';
$string['uploadcsverrorinvalidfieldname'] = 'O campo "%s" é inválido, ou tem mais campos no cabeçalho do que o especificado';
$string['uploadcsverrorrequiredfieldnotspecified'] = 'Um campo necessário "%s" não foi especificado na linha de formato';
$string['uploadcsverrornorecords'] = 'O ficheiro parece não conter quaisquer registos (apesar do cabeçalho estar correcto)';
$string['uploadcsverrorunspecifiedproblem'] = 'Os registos no seu ficheiro CSV não puderam ser inseridos. Se o seu ficheiro estiver no formato correcto então isto é um bug e deverá <a href="https://eduforge.org/tracker/?func=add&group_id=176&atid=739">criar um relatório de bug</a>, anexando o ficheiro CSV (lembre-se apagar as senhas!) e, se for possível, anexar o ficheiro de log de erros';
$string['uploadcsverrorinvalidemail'] = 'Erro na linha %s do seu ficheiro: O endereço de email para este utilizador não está no formato correcto';
$string['uploadcsverrorincorrectnumberoffields'] = 'Erro na linha %s do seu ficheiro: Esta linha não possui o número correcto de campos';
$string['uploadcsverrorinvalidpassword'] = 'Erro na linha %s do seu ficheiro: A senha para este utilizador não está no formato correcto';
$string['uploadcsverrorinvalidusername'] = 'Erro na linha %s do seu ficheiro: O nome de utilizador para este utilizador não está no formato correcto';
$string['uploadcsverrormandatoryfieldnotspecified'] = 'A linha %s do ficheiro não tem o campo "%s" necessário';
$string['uploadcsverroruseralreadyexists'] = 'A linha %s do ficheiro especifica um nome de utilizador ("%s") que já existe';
$string['uploadcsverroremailaddresstaken'] = 'A linha %s do ficheiro especifica um endereço de email ("%s") que já está em uso por outro utilizador';
$string['uploadcsvpagedescription2'] = '<p>Pode utilizar esta funcionalidade para criar novos utilizadores através de um ficheiro <acronym title="Comma Separated Values">CSV</acronym>.</p>
   
<p>Na primeira linha do ficheiro CSV deverá especificar o formato dos seus dados. Por exemplo, deverá ser semelhante a isto:</p>

<pre>username,password,email,firstname,lastname,studentid</pre>

<p>Esta linha tem que incluir os campos <tt>username</tt>, <tt>password</tt>, <tt>email</tt>, <tt>firstname</tt> e <tt>lastname</tt>. Deverá também incluir os campos que definiu como obrigatório no registo dos utilizadores, e quaisquer campos específicos da instituição para a qual está a criar os utilizadores. Pode <a href="%s">configurar os campos obrigatórios</a> para todas as instituições, ou <a href="%s">configurar os campos específicos para cada instituição</a>.</p>

<p>O seu ficheiro CSV pode incluir  quaisquer outros campos do perfil que deseje. A lista completa de campos é:</p>

%s';
$string['uploadcsvpagedescription2institutionaladmin'] = '<p>Pode utilizar esta funcionalidade para criar novos utilizadores através de um ficheiro <acronym title="Comma Separated Values">CSV</acronym>.</p>

<p>Na primeira linha do ficheiro CSV deverá especificar o formato dos seus dados. Por exemplo, deverá ser semelhante a isto:</p>

<pre>username,password,email,firstname,lastname,studentid</pre>

<p>Esta linha tem que incluir os campos <tt>username</tt>, <tt>password</tt>, <tt>email</tt>, <tt>firstname</tt> e <tt>lastname</tt>. Deverá também incluir os campos que o administrador do site definiu como obrigatório, e quaisquer campos específicos da sua instituição. Pode <a href="%s">configurar os campos específicos</a> para a instituição que gere.</p>

<p>O seu ficheiro CSV pode incluir  quaisquer outros campos do perfil que deseje. A lista completa de campos é:</p>

%s';
$string['uploadcsvsomeuserscouldnotbeemailed'] = 'Não foi possível enviar emails para alguns utilizadores. Os endereços de email podem ser inválidos, ou o servidor onde o Mahara está a ser executado não está configurado correctamente para o envio de emails. O ficheiro de log de erros do servidor tem mais detalhes. Por agora, pode querer contactar estes utilizadores manualmente:';
$string['uploadcsvusersaddedsuccessfully'] = 'Os utilizadores que estavam no ficheiro foram adicionados com sucesso';
$string['uploadcsvfailedusersexceedmaxallowed'] = 'Não foram adicionados utilizadores porque existem demasiados utilizadores no seu ficheiro. O número máximo de utilizadores na instituição teria excedido o número máximo permitido.';

// Bulk Leap2A import
$string['bulkleap2aimport'] = 'Importar utilizadores a partir de ficheiros Leap2A';
$string['bulkleap2aimportdescription'] = '<p>Podem importar utilizadores em massa, a partir de uma coleccção de ficheiros Leap2A files que estejam no seu servidor. Tem que especificar o ficheiro zip, no servidor, que contém todos os ficheiros zip Leap2A, e um ficheiro CSV único chamado usernames.csv, que associa os nomes de utilizador a um ficheiro.</p>
<p>o ficheiro usernames.csv deverá ser semelhante a isto:</p>
<pre>
&nbsp;&nbsp;bob,mahara-export-leap-user8-1265165366.zip<br>
&nbsp;&nbsp;nigel,mahara-export-leap-user1-1266458159.zip
</pre>
<p>onde mahara-export-leap-user8-1265165366.zip and mahara-export-leap-user1-1266458159.zip são ficheiros numa subpasta chamada users.</p>
<p>Este ficheiro zip deverá ser gerado normalmente utilizando a funcionalidade exportação em massa do Mahara.</p>
<p>Se estiver a importar muitos utilizadores, por favor seja paciente. O processo de importação poderá demorar muito tempo.</p>';
$string['importfile'] = 'Ficheiro de exportação em massa';
$string['importfilemissinglisting'] = 'Falta um ficheiro chamado usernames.csv ao ficheiro de exportação em massa. Usou a funcionalidade do Mahara para exportar em massa estes utilizadores?';
$string['importfilenotafile'] = 'Ocorreu um erro durante a submissão do formulário: o ficheiro não foi reconhecido';
$string['importfilenotreadable'] = 'Ocorreu um erro durante a submissão do formulário: não foi possível ler o ficheiro';
$string['bulkleap2aimportfiledescription'] = 'O ficheiro zip que está no servidor e que contém todos os utilizadores exportados (no formato Leap2A) juntamente com um ficheiro CSV com uma lista de nomes de utilizador';
$string['unzipnotinstalled'] = 'O seu sistema não tem o comando unzip, ou a variavél $cfg->pathtounzip não está configurada. Por favor instale o unzip para activar a importação de ficheiros de exportação compactados em zip ou altere a variável $cfg->pathtounzip.';
$string['importednuserssuccessfully'] = 'Foram importados %d de %d utilizadores com sucesso';
$string['Import'] = 'Importar';
$string['bulkimportdirdoesntexist'] = 'A pasta %s não existe';
$string['unabletoreadbulkimportdir'] = 'A pasta %s não está legível';
$string['unabletoreadcsvfile'] = 'Não foi possível ler o ficheiro CSV %s';
$string['importfilenotreadable'] = 'Não possivível ler o ficheiro Leap2A %s';
$string['importfileisnotazipfile'] = 'O ficheiro para importação %s não é um ficheiro zip';
$string['unzipfailed'] = 'Ocorreu um erro ao descompactar o ficheiro Leap2A %s. Verifique o log de erros para mais informações.';
$string['importfailedfornusers'] = 'Ocorreu um erro na importação em %d de %d utilizadores';
$string['invalidlistingfile'] = 'Listagem inválida de nomes de utilizador. Usou a funcionalidade do Mahara para exportar em massa estes utilizadores?';

// Admin Users
$string['adminuserspagedescription'] = '<p>Aqui pode escolher quais os utilizadores que serão administradores do site. O administradores actuais estão listados á direita, e os potenciais administradores á esquerda.</p><p>O site deverá conter pelo menos um administrador.</p>';
$string['institutionadminuserspagedescription'] = 'Aqui pode escolher quais os utilizadores que serão administradores da instituição. O administradores actuais estão listados á direita, e os potenciais administradores á esquerda.';
$string['potentialadmins'] = 'Potenciais Administradores';
$string['currentadmins'] = 'Administradores Actuais';
$string['adminusersupdated'] = 'Administradores actualizados';

// Staff Users
$string['staffuserspagedescription'] = 'Aqui pode escolher quais os utilizadores que serão gestores do site. Os gestores actuais estão listados á direita, e os potenciais gestores á esquerda.';
$string['institutionstaffuserspagedescription'] = 'Aqui pode escolher quais os utilizadores que serão gestores da sua instituição. Os gestores actuais estão listados á direita, e os potenciais gestores á esquerda.';
$string['potentialstaff'] = 'Potenciais Gestores';
$string['currentstaff'] = 'Gestores Actuais';
$string['staffusersupdated'] = 'Gestores actualizados';

// Admin Notifications

// Suspended Users
$string['deleteusers'] = 'Eliminar utilizadores';
$string['deleteuser'] = 'Eliminar utilizador';
$string['confirmdeleteusers'] = 'Tem a certeza que deseja eliminar os utilizadoers seleccionados?';
$string['exportingnotsupportedyet'] = 'Exportar perfis de utilizadores ainda não é suportado';
$string['exportuserprofiles'] = 'Exportar Perfis de Utilizador';
$string['nousersselected'] = 'Nenhum utilizador seleccionado';
$string['suspenduser'] = 'Suspender Utilizador';
$string['suspendedusers'] = 'Suspender Utilizadores';
$string['suspensionreason'] = 'Razão para a suspensão';
$string['errorwhilesuspending'] = 'Ocorreu um erro durante a suspensão';
$string['suspendedusersdescription'] = 'Suspende ou reactiva utilizadores do site';
$string['unsuspendusers'] = 'Revoga Suspensão de Utilizadores';
$string['usersdeletedsuccessfully'] = 'Utilizadores eliminados com sucesso';
$string['usersunsuspendedsuccessfully'] = 'Utilizadores reintegrados com sucesso';
$string['suspendingadmin'] = 'Suspendendo Administrador';
$string['usersuspended'] = 'Utilizador suspendido';
$string['userunsuspended'] = 'Utilizador reintegrado';

// User account settings
$string['accountsettings'] = 'Definições de conta';
$string['siteaccountsettings'] = 'Definições da conta do site';
$string['changeusername'] = 'Alterar nome de utilizador';
$string['changeusernamedescription'] = 'Altere este nome de utilizador. Os nomes de utilizador têm entre 3 a 236 caracteres e podem conter letras, números e a maioria dos símbolos excluindo os espaços.';
$string['resetpassword'] = 'Esqueci a senha';
$string['resetpassworddescription'] = 'Se introduzir texto aqui, irá substituir a senha actual do utilizador.';
$string['forcepasswordchange'] = 'Forçar a alteração da senha na próxima autenticação';
$string['forcepasswordchangedescription'] = 'O utilizador será redireccionado para a página de alteração de senha da próxima vez que efectuar a autenticação.';
$string['sitestaff'] = 'Gestores do Site';
$string['siteadmins'] = 'Administradores do Site';
$string['siteadmin'] = 'Administrador do Site';
$string['accountexpiry'] = 'A conta expira';
$string['accountexpirydescription'] = 'Data na qual a conta do utilizar será automáticamente desactivada.';
$string['suspended'] = 'Suspendido';
$string['suspendedreason'] = 'Razão para a suspensão';
$string['suspendedreasondescription'] = 'O texto que será exibido ao utilizador na próxima tentativa de autenticação.';
$string['unsuspenduser'] = 'Reintegrar Utilizador';
$string['thisuserissuspended'] = 'Este utilizador foi reintegrado';
$string['suspendedby'] = 'Este utilizador foi suspenso por %s';
$string['deleteuser'] = 'Eliminar Utilizador';
$string['userdeletedsuccessfully'] = 'Utilizador eliminado com sucesso';
$string['confirmdeleteuser'] = 'Tem a certeza que deseja eliminar este utilizador?';
$string['filequota'] = 'Cota de ficheiros (MB)';
$string['filequotadescription'] = 'Espaço total disponível na área de ficheiros do utilizador.';
$string['addusertoinstitution'] = 'Associar Utilizador á Instituição';
$string['removeuserfrominstitution'] = 'Eliminar o utilizador desta instituição';
$string['confirmremoveuserfrominstitution'] = 'Tem a certeza que deseja eliminar este utilizador desta instituição?';
$string['usereditdescription'] = 'Aqui pode ver e definir os detalhes para este conta de utilizador. Abaixo, também pode <a href="#suspend">suspender ou eliminar esta conta</a>, ou alterar as definições deste utilizador nas <a href="#institutions">instituições a que estiver associado</a>.';
$string['usereditwarning'] = 'AVISO: Ao guardar alterações na conta irá desligar automáticamente o utilizador (se estiver autenticado)';
$string['suspenddeleteuser'] = 'Suspender/Eliminar Utilizador';
$string['suspenddeleteuserdescription'] = 'Aqui pode suspender ou eliminar um conta  de utilizador. Utilizadores suspensos não poderão efectuar a autenticação até que a sua conta seja reintegrada. Tenha em atenção que a suspensão pode ser revogada, mas a eliminação <strong>não</strong> pode ser revertida.';
$string['deleteusernote'] = 'Tenha em atenção que esta operação <strong>não pode ser revertida</strong>.';
$string['youcannotadministerthisuser'] = 'Não pode administrar este utilizador';
$string['usernamechangenotallowed'] = 'O método de autenticação escolhido não permite alterações ao nome de utilizador.';
$string['passwordchangenotallowed'] = 'O método de autenticação escolhido não permite alterações á senha.';

// Add User
$string['adduser'] = 'Adicionar Utilizador';
$string['adduserdescription'] = 'Criar novo utilizador';
$string['basicinformationforthisuser'] = 'Informação básica para este utilizador.';
$string['clickthebuttontocreatetheuser'] = 'Clique no botão para criar o utilizador.';
$string['createnewuserfromscratch'] = 'Criar um novo utilizador de raiz';
$string['createuser'] = 'Criar Utilizador';
$string['failedtoobtainuploadedleapfile'] = 'Ocorreum erro na obtenção do ficheiro Leap2A';
$string['failedtounzipleap2afile'] = 'Ocorreu um erro na descompactação do ficheiro Leap2A. Verifique o log de erros para mais informações';
$string['fileisnotaziporxmlfile'] = 'Este ficheiro não é um ficheiro zip ou xml';
$string['howdoyouwanttocreatethisuser'] = 'Como deseja criar este utilizador?';
$string['leap2aimportfailed'] = '<p><strong>Desculpe - Ocorreu um erro na Importação do ficheiro Leap2A.</strong></p><p>Isto pode ter sido devido ao facto de não ter seleccionado um ficheiro Leap2A válido ou porque a versão do ficheiro LEAP2A não é suportada por esta versão do Mahara. Em alternativa, poderá existir um bug no Mahara que provoca este erro, apesar do ficheiro ser válido.</p><p>Por favor <a href="add.php">volte atrás e tente novamente</a>, e se o problema persistir, pode querer colocar uma mensagem no <a href="http://mahara.org/fórums/">Fórum do Mahara</a> pedindo ajuda. Esteja preparado para que lhe peçam uma cópia do seu ficheiro!</p>';
$string['newuseremailnotsent'] = 'Ocorreu um erro ao enviar o email de boas-vindas ao novo utilizador.';
$string['newusercreated'] = 'Uma nova conta de utilizador foi criada com sucesso';
$string['noleap2axmlfiledetected'] = 'Não foi detectado o ficheiro leap2a.xml - por favor verifique o ficheiro exportado novamente';
$string['Or...'] = 'Ou...';
$string['userwillreceiveemailandhastochangepassword'] = 'Os utilizadores receberão um email informando-os sobre os detalhes da sua nova conta. Na primeira autenticação serão forçados a alterar a sua senha.';
$string['uploadleap2afile'] = 'Enviar ficheiro Leap2A';

$string['usercreationmethod'] = '1 - Método de Criação de Utilizadores';
$string['basicdetails'] = '2 - Detalhes Básicos';
$string['create'] = '3 - Criar';

// Login as
$string['loginas'] = 'Autenticado como';
$string['loginasuser'] = 'Autenticado como %s';
$string['becomeadminagain'] = 'Voltar a %s novamente';
// Login-as exceptions
$string['loginasdenied'] = 'Tentativa de autenticação como outro utilizador sem permissão';
$string['loginastwice'] = 'Tentativa de autenticação como outro utilizador enquanto já estava autenticado como outro utilizador';
$string['loginasrestorenodata'] = 'Não existem dados do utilizador para restaurar';
$string['loginasoverridepasswordchange'] = 'Está disfarçado como outro utilizador, pode escolher efectuar a %sauntenticação de qualquer forma%s, ignorando a página de alteração de senha.';

// Institutions
$string['Add'] = 'Adicionar';
$string['admininstitutions'] = 'Administrar Instituições';
$string['adminauthorities'] = 'Administrar Autoridades';
$string['addinstitution'] = 'Adicionar Instituição';
$string['authplugin'] = 'Plugin de Autenticação';
$string['deleteinstitution'] = 'Eliminar Instituição';
$string['deleteinstitutionconfirm'] = 'Tem a certeza que deseja eleminar esta instituição?';
$string['institutionaddedsuccessfully2'] = 'Instituição adicionada com sucesso';
$string['institutiondeletedsuccessfully'] = 'Instituição eliminada com sucesso';
$string['noauthpluginforinstitution'] = 'O administrador do site não configurou um plugin de autenticação para esta instituição.';
$string['adminnoauthpluginforinstitution'] = 'Por favor configure um plugin de autenticação para esta insituição.';
$string['institutionname'] = 'Nome da Instituição';
$string['institutionnamealreadytaken'] = 'Este nome de Instituição já está em uso';
$string['institutiondisplayname'] = 'Cognome da Instituição';
$string['institutionexpiry'] = 'Data de expiração da Instituição';
$string['institutionexpirydescription'] = 'Data a partir da qual a adesão a %s por parte desta instituição será suspensa.';
$string['institutionupdatedsuccessfully'] = 'Instituição actualizada com sucesso.';
$string['registrationallowed'] = 'Registo autorizado';
$string['registrationalloweddescription2'] = 'Caso os utilizadores possam registar-se no site e aderir a esta instituição utilizando o formulário de registo. Se o registo estiver desactivado, os utilizadores que não tenham aderido a esta instituição, não podem pedir a adesão a esta instituição, e os membros associados não podem abandonar esta instituição ou eliminar as suas contas voluntariamente.';
$string['defaultmembershipperiod'] = 'Período por omissão de adesão';
$string['defaultmembershipperioddescription'] = 'Por quanto tempo os novos membros ficarão associados com a instituição';

$string['authenticatedby'] = 'Método de Autenticação';
$string['authenticatedbydescription'] = 'Como este utilizador se autentica ao Mahara';
$string['remoteusername'] = 'Nome de utilizador para autenticação externa';
$string['remoteusernamedescription'] = 'Se este utilizar efectuar a autenticação em %s através de um site remoto utilizando o plugin de autenticação XMLRPC, este será o nome de utilizador que identificará o utilizador no site remoto';
$string['institutionsettings'] = 'Definições da Instituição';
$string['institutionsettingsdescription'] = 'Aqui poderá alterar as definições relativas á adesão deste utilizador com as instituições que estão no site.';
$string['changeinstitution'] = 'Alterar Instituição';
$string['institutionstaff'] = 'Gestores da Instituição';
$string['institutionadmins'] = 'Administradores da Instituição';
$string['institutionadmin'] = 'Administrador da Instituição';
$string['institutionadministrator'] = 'Administrador da Instituição';
$string['institutionadmindescription'] = 'Se marcado, o utilizador poderá administrar todos os utilizadores nesta instituição.';
$string['settingsfor'] = 'Definições para:';
$string['institutionadministration'] = 'Administração da Instituição';
$string['institutionmembers'] = 'Membros da Instituição';
$string['notadminforinstitution'] = 'Não é o administrador para esta instituição';
$string['institutionmemberspagedescription'] = 'Nesta página poderá ver os utilizadores que pediram adesão á sua instituição e adicioná-los como membros. Também poderá remover utilizadores da sua instituição, e convidar utilizadores a aderir.';

$string['institutionusersinstructionsrequesters'] = 'A lista de utilizadores á esquerda mostra todos os utilizadores que pediram adesão á sua instituição. Pode utilizar o caixa de pesquisa para reduzir o número de utilizadores exibidos. Se quiser adicionar utilizadores á instituição, ou recusar os pedidos, em primeiro lugar mova alguns utilizadores para a direita, seleccionando um ou mais utilizadores e clicando na seta direita.  O botão "Adicionar membros" irá adicionar todos os utilizadores á direita á instituição. O botão "Recusar Pedidos" irá remover os pedidos de adesão dos utilizadores á direita.';
$string['institutionusersinstructionsnonmembers'] = 'A lista de utilizadores á esquerda mostra todos os utilizadores que ainda não são membros da sua instituição. Pode utilizar a caixa de pesquisa para reduzir o número de utilizadores exibidos. Para convidar utilizadores a aderir á instituição, em primeiro lugar mova alguns utilizadores para a direita, seleccionando um ou mais utilizadores e clicando na seta direita. Clicando sobre botão "Convidar utilizadores" irá enviar convites para todos os utilizadores á direita. Estes utilizadores não serão associados á instituição até que aceitem o convite.';
$string['institutionusersinstructionsmembers'] = 'A lista de utilizadores á esquerda mostra todos os membros da instituição. Pode utilizar a caixa de pesquisa para reduzir o número de utilizadores exibidos. Para remover utilizadores da instituição, em primeiro lugar mova alguns utilizadores para a direita seleccionando um ou mais utilizadores e clicando na seta direita. Os utilizador que seleccionar irão passar para a direita. Ao clicar no botão "Remover Utilizadores" irá remover todos os utilizadores da direita da instituição. Os utilizadores á esquerda irão manter-se associados á instituição.';

$string['editmembers'] = 'Editar Membros';
$string['editstaff'] = 'Editar Gestores';
$string['editadmins'] = 'Editar Administradores';
$string['membershipexpiry'] = 'Expiração de adesão';
$string['membershipexpirydescription'] = 'Data na qual o utilizador será automáticamente removido da instituição.';
$string['studentid'] = 'Código de estudante';
$string['institutionstudentiddescription'] = 'Um identificador opcional, especifico para a instituição. Este campo não é editável pelo utilizador.';

$string['userstodisplay'] = 'Utilizadores a visualizar:';
$string['institutionusersrequesters'] = 'Pessoas que pediram adesão á instituição';
$string['institutionusersnonmembers'] = 'Pessoas que ainda não pediram adesão';
$string['institutionusersmembers'] = 'Pessoas que já são membros da instituição';

$string['addnewmembers'] = 'Adicionar novos membros';
$string['usersrequested'] = 'Utilizadores que efectuaram um pedido de adesão';
$string['userstobeadded'] = 'Utilizadores a serem adicionados como membros';
$string['userstoaddorreject'] = 'Utilizadores a serem adicionados/rejeitados';
$string['addmembers'] = 'Adicionar membros';
$string['inviteuserstojoin'] = 'Convidar utilizadores para aderirem á instituição';
$string['Non-members'] = 'Utilizadores não associados';
$string['userstobeinvited'] = 'Utilizadores a sem convidados';
$string['inviteusers'] = 'Convidar utilizadores';
$string['removeusersfrominstitution'] = 'Eliminar utilizadores da instituição';
$string['currentmembers'] = 'Membros Actuais';
$string['userstoberemoved'] = 'Utilizadores a serem eliminados';
$string['removeusers'] = 'Eliminar Utilizadores';
$string['declinerequests'] = 'Recusar pedidos';
$string['nousersupdated'] = 'Nenhum utilizador foi actualizado';

$string['institutionusersupdated_addUserAsMember'] = 'Utilizadores adicionados';
$string['institutionusersupdated_declineRequestFromUser'] = 'Pedidos recusados';
$string['institutionusersupdated_removeMembers'] = 'Utilizadores eliminados';
$string['institutionusersupdated_inviteUser'] = 'Convites enviados';

$string['maxuseraccounts'] = 'Número Máximo de Membros';
$string['maxuseraccountsdescription'] = 'O número máximo de membros da instituição. Se não existir um limite, este campo deverá ser deixado em branco.';
$string['institutionmaxusersexceeded'] = 'Esta instituição está cheia, terá que aumentar o número máximo de membros antes que este utilizador possa ser adicionado.';
$string['institutionuserserrortoomanyusers'] = 'Os utilizadores não foram adicionados. O número de membros não poderá exceder o número máximo de de membros permitidos para a instituição. Poderá adicionar menos utilizadores, eliminar alguns utilizadores da instituição, ou pedir ao administrador para aumentar o número máximo de membros.';
$string['institutionuserserrortoomanyinvites'] = 'Os seus convites não foram enviados. O número de membros actuais mais o número de convites não pode exceder o número máximo de membros da instituição. Poderá adicionar menos utilizadores, eliminar alguns utilizadores da instituição, ou pedir ao administrador para aumentar o número máximo de membros.';

$string['Members'] = 'Membros';
$string['Maximum'] = 'Máximo';
$string['Staff'] = 'Gestores';
$string['Admins'] = 'Administradores';

$string['noinstitutions'] = 'Sem Instituições';
$string['noinstitutionsdescription'] = 'Se quiser associar utilizadores a uma instituição, é necessário criar uma instituição primeiro.';

$string['Lockedfields'] = 'Campos bloqueados';
$string['disabledlockedfieldhelp'] = 'Nota: A caixas de verificação desactivadas são para campos de perfis que estão bloqueados nas definições da instituição para "%s". Estes campos de perfis estão bloqueados ao nível do site e não podem ser desbloqueados aqui.';

// Suspend Institutions
$string['errorwhileunsuspending'] = 'Ocorreu um erro ao tentar revogar a suspensão';
$string['institutionsuspended'] = 'Instituição suspensa';
$string['institutionunsuspended'] = 'Suspensão da Instituição revogada';
$string['suspendedinstitution'] = 'SUSPENDIDA';
$string['suspendinstitution'] = 'Suspender Instituição';
$string['suspendinstitutiondescription'] = 'Aqui poderá suspender uma instituição. Os membros de instituições suspendidas não poderão efectuar a autenticação até que a suspensão da instituição seja revogada.';
$string['suspendedinstitutionmessage'] = 'Esta instituição foi suspendida';
$string['unsuspendinstitution'] = 'Revogar suspensão da Instituição';
$string['unsuspendinstitutiondescription'] = 'Aqui poderá revogar a suspensão de uma instituição. Os membros de instituições suspendidas não poderão efectuar a autenticação até que a suspensão da instituição seja revogada.<br /><strong>Atenção:</strong> Revogar a suspensão de uma instituição sem modificar ou desligar a data de expiração poderá resultar em que a instituição seja suspendida diariamente.';
$string['unsuspendinstitutiondescription_top'] = '<em>Atenção:</em> Revogar a suspensão de uma instituição sem modificar ou desligar a data de expiração poderá resultar em que a instituição seja suspendida diariamente.';
$string['unsuspendinstitutiondescription_top_instadmin'] = 'Os membros de instituições suspensas não podem efectuar a autenticação. Contacte o administrador para revogar a suspensão.';

// Bulk Leap2A User export
$string['bulkexport'] = 'Exportar utilizadores';
$string['bulkexportempty'] = 'Nada adequado para exportação. Por favor verifique a lista de nomes de utilizador.';
$string['bulkexportinstitution'] = 'A instituição da qual todos os utilizadores serão exportados';
$string['bulkexporttitle'] = 'Exportar utilizadores para ficheiros Leap2A';
$string['bulkexportdescription'] = 'Escolha uma instituição para exportar <b>OU</b> especifique a lista de nomes de utilizador:';
$string['bulkexportusernames'] = 'Nomes de utilizador para exportar';
$string['bulkexportusernamesdescription'] = 'A lista de utilizadores (um nome de utilizador por linha) para serem exportados juntamente com os seus dados';
$string['couldnotexportusers'] = 'Os seguintes utilizadores não puderam ser exportados: %s';
$string['exportingusername'] = 'Exportando \'%s\'...';

// Admin User Search
$string['Search'] = 'Pesquisar';
$string['Institution'] = 'Instituição';
$string['confirm'] = 'confirmar';
$string['invitedby'] = 'Convidado por';
$string['requestto'] = 'Pedir a';
$string['useradded'] = 'Utilizador adicinado';
$string['invitationsent'] = 'Convite enviado';

// general stuff
$string['notificationssaved'] = 'Definições de notificações guardadas';
$string['onlyshowingfirst'] = 'Apenas visualizando as primeiras';
$string['resultsof'] = 'results of';

$string['installed'] = 'Instalado';
$string['errors'] = 'Erros';
$string['install'] = 'Instalar';
$string['reinstall'] = 'Reinstalar';

// spam trap names
$string['None'] = 'Nenhum';
$string['Simple'] = 'Simples';
$string['Advanced'] = 'Avançado';

//admin option fieldset legends
$string['sitesettingslegend'] = 'Definições do Site';
$string['usersettingslegend'] = 'Definições de Utilizadores';
$string['groupsettingslegend'] = 'Definições de Grupos';
$string['searchsettingslegend'] = 'Definições de Pesquisa';
$string['institutionsettingslegend'] = 'Definições de Instituições';
$string['accountsettingslegend'] = 'Definições de Contas';
$string['securitysettingslegend'] = 'Definições de Segurança';
$string['generalsettingslegend'] = 'Definições Gerais';

$string['groupname'] = 'Nome do Grupo';
$string['groupmembers'] = 'Membros';
$string['groupadmins'] = 'Administradores';
$string['grouptype'] = 'Tipo de Grupo';
$string['groupvisible'] = 'Visibilidade';
$string['groupmanage'] = 'Gerir';
$string['groupdelete'] = 'Eliminar';
$string['managegroupdescription'] = 'Utilize o formulário abaixo para promover e despromover administradores para este grupo. Se eliminar um administrador de grupo ele continuará membro do grupo.';

?>