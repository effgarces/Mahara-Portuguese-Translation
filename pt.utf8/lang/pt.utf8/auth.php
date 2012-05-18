<?php

defined('INTERNAL') || die();

$string['addauthority'] = 'Adicionar uma Autoridade';
$string['application'] = 'Applicação';
$string['authloginmsg'] = 'Introduza a mensagem a visualizar quando um utilizador tentar efectuar a autenticação via o formulário de autenticação do Mahara';
$string['authname'] = 'Nome da autoridade';
$string['cannotjumpasmasqueradeduser'] = 'Não pode mudar para outra aplicação enquanto assumir a identidade de outro utilizador.';
$string['cannotremove'] = 'Não é possível eliminar este plugin de autenticação, pois é o único plugin de autenticação que existe para esta instituição.';
$string['cannotremoveinuse'] = 'Não é possível eliminar este plugin de autenticação, pois está a ser usado por alguns utilizadores.
Tem que actualizar os registos do utilizadores em questão antes que possa remover este plugin.';
$string['cantretrievekey'] = 'Ocorreu um erro ao tentar obter a chave pública do servidor remoto.<br>Por favor assegure-se que os campos Aplicação e WWW Root estão correctos, e que o serviço de rede está activado no servidor remoto.';
$string['changepasswordurl'] = 'Endereço para alteração da senha';
$string['duplicateremoteusername'] = 'Este nome de utilizador da autenticação externa já está em uso pelo utilizador %s. Os nomes de utilizador de autenticação externa deverão ser únicos no método de autenticação.';
$string['duplicateremoteusernameformerror'] = 'Os nomes de utilizador de autenticação externa deverão ser únicos no método de autenticação.';
$string['editauthority'] = 'Editar uma Autoridade';
$string['errnoauthinstances'] = 'Parece não existir nenhuma instância de plugins de autenticação configurada para o anfitrião em %s';
$string['errnoxmlrpcinstances'] = 'Parece não existir nenhuma instância de plugins de autenticação XMLRPC configurada para o anfitrião em %s';
$string['errnoxmlrpcuser1'] = 'Não fomos capazes de autenticá-lo neste momento. Possíveis motivos podem ser:

    * A sua sessão SSO  poderá ter expirado. Volte à outra aplicação e clique na ligação para iniciar a sessão em %s novamente.
    * Pode não ser autorizado a SSO para %s. Por favor, verifique com o administrador se acha que deveria ser permitido.';
$string['errnoxmlrpcwwwroot'] = 'Não existe nenhum registo de qualquer qualquer anfitrião em %s';
$string['errorcertificateinvalidwwwroot'] = 'Este certificado indica que é para %s, no entanto está a tentar utilizá-lo para %s.';
$string['errorcouldnotgeneratenewsslkey'] = 'Não foi possível gerar uma nova chave SSL. Tem a certeza que o openssl e que o módulo openssl para o PHP estão instalados nesta máquina?';
$string['errornotvalidsslcertificate'] = 'Este não é um Certificado SSL válido';
$string['host'] = 'Nome do anfitrião or endereço';
$string['hostwwwrootinuse'] = 'WWW root já em uso por outra instituição (%s)';
$string['ipaddress'] = 'Endereço IP';
$string['name'] = 'Nome do Site';
$string['noauthpluginconfigoptions'] = 'Não existem opções de configuração associadas com este plugin';
$string['nodataforinstance'] = 'Não foi possível encontrar os dados necessário para efetuar a autenticação na instância ';
$string['parent'] = 'Autoridade superior';
$string['port'] = 'Número de porta';
$string['protocol'] = 'Protocolo';
$string['requiredfields'] = 'Campos de perfil necessários';
$string['requiredfieldsset'] = 'Campos de perfil necessários definidos';
$string['saveinstitutiondetailsfirst'] = 'Por favor salve os detalhes da instituição antes de configurar os plugins de autenticação.';
$string['shortname'] = 'Nome curto para o seu site';
$string['ssodirection'] = 'Direcção SSO';
$string['theyautocreateusers'] = 'Eles criam contas de utilizador automáticamente';
$string['theyssoin'] = 'Pedidos SSO';
$string['toomanytries'] = 'Excedeu o número máximo de tentativas para autenticar-se. Esta conta será bloqueada durante 5 minutos.';
$string['unabletosigninviasso'] = 'Não foi possível autenticar-se via SSO';
$string['updateuserinfoonlogin'] = 'Actualizar dados do utilizador na autenticação';
$string['updateuserinfoonlogindescription'] = 'Acede aos dados do utilizador no servidor remoto e atualiza os dados locais de cada vez que o utilizador efetuar a autenticação.';
$string['weautocreateusers'] = 'Nós criamos conta de utilizador automáticamente';
$string['weimportcontent'] = 'Nós importamos conteúdos';
$string['weimportcontentdescription'] = '(apenas de algumas aplicações)';
$string['wessoout'] = 'Identificar saídas via SSO';
$string['wwwroot'] = 'WWW Root';
$string['xmlrpccouldnotlogyouin'] = 'Desculpe, não foi possível efetuar autenticação :(';
$string['xmlrpccouldnotlogyouindetail1'] = 'Lamentamos, mas não foi possível iniciar sessão em %s neste momento. Tente novamente em breve. Se o problema persistir, contacte o administrador';
$string['xmlrpcserverurl'] = 'Endereço do servidor XML-RPC';
