<?php

defined('INTERNAL') || die();

$string['accessdenied'] = 'Acesso negado';
$string['accessdeniedexception'] = 'Não tem permissões para ver esta página';
$string['apcstatoff'] = 'O seu servidor parece estar a funcionar com apc.stat=0. O Mahara não suporta esta configuração. Tem que definir apc.stat=1 no ficheiro php.ini.

Se estiver num alojamento partilhado, é provável que não possa fazer nada para ativar o apc.stat, excetuando contactar o fornecedor de alojamento. Deverá também considerar mudar de alojamento.';
$string['artefactnotfound'] = 'O artefacto com o id %s não foi encontrado';
$string['artefactnotfoundmaybedeleted'] = 'O artefacto com o id %s não foi encontrado (talvez já tenha sido eliminado?)';
$string['artefactnotinview'] = 'O artefacto %s não está na Página %s';
$string['artefactonlyviewableinview'] = 'Artefactos deste tipo apenas são visíveis numa Página';
$string['artefactpluginmethodmissing'] = 'O plugin de artefacto %s tem que implementar %s e não o faz';
$string['artefacttypeclassmissing'] = 'Tipos de artefactos têm de implementar a class. Em falta %s';
$string['artefacttypemismatch'] = 'Incompatibilidade com o tipo de artefacto, está a tentar usar %s como %s';
$string['artefacttypenametaken'] = 'O nome do tipo de artefacto %s já está em uso por outro plugin (%s)';
$string['blockconfigdatacalledfromset'] = 'Os dados de configuração não podem ser definidos directamente, deverá utilizar PluginBlocktype::instance_config_save';
$string['blockinstancednotfound'] = 'Instância do bloco com o id %s não foi encontrada';
$string['blocktypelibmissing'] = 'Ficheiro lib.php está em falta para o bloco %s no plugin de artefacto %s';
$string['blocktypemissingconfigform'] = 'O tipo de bloco %s tem que implementar instance_config_form';
$string['blocktypenametaken'] = 'O nome do tipo de bloco %s já está em uso por outro plugin (%s)';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'Este tipo de bloco será instalado como parte da instalação do plugin de artefacto %s';
$string['classmissing'] = 'a class %s para o tipo %s no plugin %s está em falta';
$string['couldnotmakedatadirectories'] = 'Por razões desconhecidas algumas das pastas de dados centrais não puderam ser criadas. Isto não deveria acontecer, porque o Mahara verificou, anteriormente, a pasta de raiz dos dados e era possível escrever. Por favor verifique as permissões na pasta raiz dos documentos.';
$string['curllibrarynotinstalled'] = 'A configuração do seu servidor não inclui a extensão curl. O Mahara precisa desta extensão de forma a poder a ir buscar canais externos. Por favor certifique-se que a extensão está activada non php.ini, ou instale-a se se não estiver instalada.';
$string['datarootinsidedocroot'] = 'Definiu a raiz dos dados no interior da raiz dos seus documentos. Este é um gravíssimo problema de segurança, pois qualquer um pode pedir dados de sessão directamente (de forma a poder "assaltar" as sessões das outras pessoas), ou ficheiros que não estão autorizados a aceder e que foram enviados por outras pessoas. Por favor configure a raiz dos dados fora da raiz dos documentos.';
$string['datarootnotwritable'] = 'Não tem permissões de escrita na pasta %s, que definiu para raiz dos dados. Isto significa que os dados de sessão, ficheiros dos utilizadores ou qualquer outro ficheiro pode ser salvo no seu servidor. Por favor crie a pasta se a mesma não existir, ou atribua permissões de proprietário ao utilizador do servidor web web.';
$string['dbconnfailed'] = 'O Mahara não consegui estabalecer uma ligação á base de dados.

 * Se está a utilizar o Mahara, espere um minuto e tente novamente
 * Se é o administrador, por favor verifique as definições da base de dados e confirme se a base de dados está disponível

O erro recebido foi:
';
$string['dbnotutf8'] = 'Não está a utilizar uma base de dados UTF-8. O Mahara armazena internamente todos os dados em formato UTF-8. Por favor efectue um drop e torne a criar a base de dados utilizando UTF-8.';
$string['dbversioncheckfailed'] = 'A versão do seu servidor de base de dados não é suficiente para executar o Mahara. O seu servidor é %s %s, mas o Mahara precisade de pelo menos a versão %s.';
$string['domextensionnotloaded'] = 'A configuração do seu servidor não inclui a extensão dom. O Mahara precisa desta extensão de forma a poder analisar dados XML de uma variedade de fontes.';
$string['gdextensionnotloaded'] = 'A configuração do seu servidor não inclui a extensão gd. O Mahara precisa desta extensão de forma a poder redimensionar ou efetuar outras operações nas imagens enviadas. Por favor certifique-se que a extensão está ativada non php.ini, ou instale-a se se não estiver instalada.';
$string['gdfreetypenotloaded'] = 'A configuração do seu servidor para a extensão gd não inclui o suporte para Freetype. O Mahara precisa do Freetype de forma a poder gerar imagens CAPTCHA. Por favor certifique-se que a extensão gd estã configurada com o Freetype.';
$string['gdlibrarylacksgifsupport'] = 'A biblioteca PHP GB não suporta a criação e leitura de imagens GIF. É necessário suporte completo para poder enviar imagens GIF.';
$string['gdlibrarylacksjpegsupport'] = 'A biblioteca PHP GD não suporta imagens JPEG/JPG imagens. Suporte completo é necessário para enviar imagens JPEG/JPG.';
$string['gdlibrarylackspngsupport'] = 'A biblioteca PHP GD não suporta imagens PNG. Suporte completo é necessário para enviar imagens PNG.';
$string['interactioninstancenotfound'] = 'Instância da actividade com o id %s não foi encontrada';
$string['invaliddirection'] = 'Direccção inválida %s';
$string['invalidviewaction'] = 'Acção de controlo de página inválida: %s';
$string['jsonextensionnotloaded'] = 'A configuração do seu servidor não inclui a extensão JSON. O Mahara precisa desta extensão de forma a enviar/receber alguns dados para o browser. Por favor certifique-se que a extensão está activada non php.ini, ou instale-a se se não estiver instalada.';
$string['magicquotesgpc'] = 'O seu PHP tem um definição perigosa ativa, magic_quotes_gpc. O Mahara está a tentar contornar este problema, mas por motivos de segurança deveria desativar esta opção. Se estiver a usar alojamento partilhado e o seu fornecedor permite, deveria incluir a seguinte linha no ficheiro .htaccess file:
php_flag magic_quotes_gpc off';
$string['magicquotesruntime'] = 'O seu PHP tem um definição perigosa ativa, magic_quotes_runtime. O Mahara está a tentar contornar este problema, mas por motivos de segurança deveria desativar esta opção. Se estiver a usar alojamento partilhado e o seu fornecedor permite, deveria incluir a seguinte linha no ficheiro .htaccess file:
php_flag magic_quotes_runtime off';
$string['magicquotessybase'] = 'O seu PHP tem um definição perigosa ativa, magic_quotes_sybase. O Mahara está a tentar contornar este problema, mas por motivos de segurança deveria desativar esta opção. Se estiver a usar alojamento partilhado e o seu fornecedor permite, deveria incluir a seguinte linha no ficheiro .htaccess file:
php_flag magic_quotes_sybase off';
$string['missingparamblocktype'] = 'Tente selecionar um tipo de bloco para adicionar primeiro';
$string['missingparamcolumn'] = 'Especificação da coluna em falta';
$string['missingparamid'] = 'Id em falta';
$string['missingparamorder'] = 'Especificação de ordem em falta';
$string['mysqldbextensionnotloaded'] = 'A configuração do seu servidor não inclui a extensão mysql. O Mahara precisa desta extensão de forma a armazenar dados numa base de dados relacional. Por favor certifique-se que a extensão está activada non php.ini, ou instale-a se se não estiver instalada.';
$string['mysqlnotriggerprivilege'] = 'O Mahara necessita de permissão para criar gatilhos de base de dados, mas não o consegue fazer. Por favor assegure-se que a permissão para o fazer foi concedida ao utilizador a apropriado na sua instalação do MySQL. Para obter instruções sobre como fazer isto, consulte https://wiki.mahara.org/index.php/System_Administrator\'s_Guide/Granting_Trigger_Privilege';
$string['nopasswordsaltset'] = 'Não foi definido um salt de senhas para todo o site. Edite o ficheiro config.php e altere o parâmetro "passwordsaltmain"  para uma frase secreta razoável.';
$string['noreplyaddressmissingorinvalid'] = 'O endereço sem reposta está vazio ou possuí um endereço de correio eletrónico inválido. Por favor verifique a configuração nas <a href="%s">definições de correio eletrónico das opções do site</a>.';
$string['notartefactowner'] = 'Este artefacto não lhe pertence';
$string['notenoughsessionentropy'] = 'A definição PHP session.entropy_length é muito pequena. Defina-a para que tenha pelo menos 16 no seu ficheiro php.ini por forma a assegurar que os IDs de sessão gerados são suficientemente aleatórios e imprevisíveis.';
$string['notfound'] = 'Não encontrado';
$string['notfoundexception'] = 'A página que procurava não foi encontrada';
$string['onlyoneblocktypeperview'] = 'Não pode colocar mais do que um tipo de bloco %s numa página';
$string['onlyoneprofileviewallowed'] = 'Apenas é permitida uma página de perfil';
$string['openbasedirenabled'] = 'O seu servidor tem a restrição php open_basedir ativa.';
$string['openbasedirpaths'] = 'O Mahara apenas pode abrir ficheiros dentro do seguinte caminho(s): %s';
$string['openbasedirwarning'] = 'Alguns pedidos de sites externos podem falhar a conclusão. Isto irá prevenir certos canais de se atualizarem, entre outras coisas.';
$string['parameterexception'] = 'Um parâmetro necessário está em falta';
$string['passwordsaltweak'] = 'O salt de senhas para todo o site não é forte o suficiente. Edite o ficheiro config.php e altere o parâmetro "passwordsaltmain" para uma frase secreta mais longa.';
$string['pgsqldbextensionnotloaded'] = 'A configuração do seu servidor não inclui a extensão pgsql. O Mahara precisa desta extensão de forma a armazenar dados numa base de dados relacional. Por favor certifique-se que a extensão está activada non php.ini, ou instale-a se se não estiver instalada.';
$string['phpversion'] = 'O Mahara não se executa em PHP < %s. Por favor atualize a versão do PHP, ou mova o Mahara para outro anfitrião.';
$string['pleaseloginforjournals'] = 'Precisa de terminar a sessão e reiniciá-la antes de ver todas as suas mensagens e os diários.';
$string['plpgsqlnotavailable'] = 'A linguagem PL/pgSQL não está ativa na sua instalação Postgres, e o Mahara não consegue ativa-la. Por favor instale manualmente o PL/pgSQL na sua base de dados. Para obter instruções sobre como fazer isto, consulte https://wiki.mahara.org/index.php/System_Administrator\'s_Guide/Enabling_Plpgsql';
$string['postmaxlessthanuploadmax'] = 'A definição do PHP post_max_size (%s) é mais pequena que a definição upload_max_filesize (%s). Envios maiores do que %s irão falhar sem mostrar um erro. Geralmente o post_max_size deveria ser muito maior do que o upload_max_filesize.';
$string['registerglobals'] = 'O seu PHP tem um definição perigosa ativa, register_globals. O Mahara está a tentar contornar este problema, mas por motivos de segurança deveria desativar esta opção. Se estiver a usar alojamento partilhado e o seu fornecedor permite, deveria incluir a seguinte linha no ficheiro .htaccess file:
php_flag register_globals off';
$string['safemodeon'] = 'O seu servidor parece estar a funcionar em safe mode. O Mahara não suporta a execução em safe mode. Tem que desativar esta opção no ficheiro php.ini, ou nas configurações do apache para o site.

Se estiver num alojamento partilhado, é provável que não possa fazer nada para desativar o safe_mode, excetuando contactar o fornecedor de alojamento. Deverá também considerar mudar de alojamento.';
$string['sessionextensionnotloaded'] = 'A configuração do seu servidor não inclui a extensão session. O Mahara precisa desta extensão de forma a poder suportar a autenticação dos utilizadores. Por favor certifique-se que a extensão está activada non php.ini, ou instale-a se se não estiver instalada.';
$string['smallpostmaxsize'] = 'A definição do PHP post_max_size (%s) é muito pequena. Envios mariores do que %s irão falhar sem mostrar nenhum erro.';
$string['themenameinvalid'] = 'O nome do tema \'%s\' contém caracteres inválidos.';
$string['timezoneidentifierunusable'] = 'O PHP no seu sitem não fornece um valor útil para o identificador da zona temporal (%%z) - algumas formatações de datas, como a exportação LEPA2A, não funcionarão. %%z é um código de formatação de datas em PHP. Este problema é geralmente devido a uma limitação de correr o PHP em Windows.';
$string['unabletosetmultipleblogs'] = 'Ocorreu um erro ao ativar múltiplos diários para o utilizador %s ao copiar a página %s . Isto poderá ser definido manualmente página <a href="%s">conta</a> .';
$string['unknowndbtype'] = 'A configuração do seu servidor faz referência a um tipo desconhecido de base de dados. Os valores válidos são "postgres8" e "mysql5". Por favor altere o tipo de base de dados no config.php.';
$string['unrecoverableerror'] = 'Ocorreu um erro irrecuperável. Isto provavelmente significa que encontrou um bug no sistema.';
$string['unrecoverableerrortitle'] = '%s - Site Indisponível';
$string['versionphpmissing'] = 'O ficheiro version.php está em falta para o plugin %s %s!';
$string['viewnotfound'] = 'A página com o id %s não foi encontrada';
$string['viewnotfoundexceptionmessage'] = 'Tentou aceder a uma página que não existe!';
$string['viewnotfoundexceptiontitle'] = 'Página não encontrada';
$string['wwwrootnothttps'] = 'O wwwroot definido, %s, não é HTTPS. No entanto algumas definições (como sslproxy) para a sua instalação requerem que o wwwroot seja um endereço HTTPS.

Por favor atualize o wwwroot para um endereço HTTPS ou corrija a definição incorreta.';
$string['xmlextensionnotloaded'] = 'A configuração do seu servidor não inclui a extensão %s. O Mahara precisa desta extensão de forma a poder analisar dados XML de uma variedade de fontes. Por favor certifique-se que a extensão está activada non php.ini, ou instale-a se se não estiver instalada.';
$string['youcannotviewthisusersprofile'] = 'Não tem autorização para ver o perfil deste utilizador';
