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

$string['pluginname'] = 'Ficheiros';

$string['sitefilesloaded'] = 'Os ficheiros do site foram carregados';
$string['addafile'] = 'Adicionar ficheiros';
$string['archive'] = 'Arquivo';
$string['bytes'] = 'bytes';
$string['cannoteditfolder'] = 'Não tem permissões para adicionar conteúdos a esta pasta';
$string['cannoteditfoldersubmitted'] = 'Não pode adicionar conteúdos numa pasta de uma Página submetida.';
$string['cannotremovefromsubmittedfolder'] = 'Não pode eliminar conteúdos de uma pasta que esteja numa Página submetida.';
$string['changessaved'] = 'Alterações salvas';
$string['clickanddragtomovefile'] = 'Clique a arraste para mover %s';
$string['contents'] = 'Conteúdos';
$string['copyrightnotice'] = 'Aviso de Direitos de Autor';
$string['create'] = 'Criar';
$string['Created'] = 'Criado';
$string['createfolder'] = 'Criar pasta';
$string['confirmdeletefile'] = 'Tem a certeza que deseja eliminar este ficheiro?';
$string['confirmdeletefolder'] = 'Tem a certeza que deseja eliminar esta pasta?';
$string['confirmdeletefolderandcontents'] = 'Tem a certeza que deseja eliminar esta pasta e todos os seus conteúdos?';
$string['customagreement'] = 'Acordo Personalizado';
$string['Date'] = 'Data';
$string['defaultagreement'] = 'Acordo Padrão';
$string['defaultquota'] = 'Quota Padrão';
$string['defaultquotadescription'] = 'Pode definir o espaço em disco disponível para a quota dos novos utilizadores aqui. As quotas já existentes não serão alteradas.';
$string['maxquotaenabled'] = 'Definir quota máxima global';
$string['maxquota'] = 'Quota Máxima';
$string['maxquotatoolow'] = 'A quota máxima não pode ser menor que a quota padrão.';
$string['maxquotaexceeded'] = 'Especificou uma quota superior á definição máxima disponivel para este site (%s). Experimente especificar um valor maix baixo ou contacte o administrador para aumentar a quota máxima.';
$string['maxquotaexceededform'] = 'Especifique uma quota de ficheiros menor que %s.';
$string['maxquotadescription'] = 'Pode definir a quota máxima que um administrador pode dar a um utilizador. As quotas de utilizadores existentes não serão afectadas.';
$string['deletingfailed'] =  'Ocorreu uma erro na eliminação: o ficheiro ou a pasta já não existem';
$string['deletefile?'] = 'Tem a certeza que deseja eliminar este ficheiro?';
$string['deletefolder?'] = 'Tem a certeza que deseja eliminar esta pasta?';
$string['Description'] = 'Descrição';
$string['destination'] = 'Destino';
$string['Details'] = 'Detalhes';
$string['Download'] = 'Descarregar';
$string['downloadfile'] = 'Descarregar %s';
$string['downloadoriginalversion'] = 'Descarregue a versão original';
$string['editfile'] = 'Editar ficheiro';
$string['editfolder'] = 'Editar pasta';
$string['editingfailed'] = 'Ocorreu um erro na edição: o ficheiro ou pasta já não existe';
$string['emptyfolder'] = 'Pasta vazia';
$string['file'] = 'Ficheiro'; // Capitalised to be consistent with names of all the other artefact types
$string['File'] = 'Ficheiro';
$string['fileadded'] = 'Ficheiro seleccionado';
$string['filealreadyindestination'] = 'O ficheiro que moveu já está nessa pasta';
$string['fileappearsinviews'] = 'Este ficheiro aparece em uma ou mais das suas páginas.';
$string['fileattached'] = 'Este ficheiro está anexado a %s outros item(s) no seu portefólio.';
$string['fileremoved'] = 'Ficheiro eliminado';
$string['files'] = 'ficheiros';
$string['Files'] = 'Ficheiros';
$string['fileexists'] = 'O ficheiro já existe';
$string['fileexistsoverwritecancel'] =  'Um ficheiro com esse nome já existe. Pode tentar um nome diferente, ou sobrescrever o ficheiro existente.';
$string['filelistloaded'] = 'Lista de ficheiros carregada';
$string['filemoved'] = 'Ficheiro movido com sucesso';
$string['filenamefieldisrequired'] = 'O campo do ficheiro é necessário';
$string['fileinstructions'] = 'Envie as suas imagens, documentos, ou outros ficheiros para inclusão nas páginas. Arraste e largue os ícones para mover os ficheiros entre pastas.';
$string['filethingdeleted'] = '%s eliminado';
$string['filewithnameexists'] = 'Um ficheiro ou pasta com o nome "%s" já existe.';
$string['folder'] = 'Pasta';
$string['Folder'] = 'Pasta';
$string['folderappearsinviews'] = 'Esta pasta aparece em uma ou mais das suas páginas.';
$string['Folders'] = 'Pastas';
$string['foldernotempty'] = 'Esta pasta não está vaziaThis folder is not empty.';
$string['foldercreated'] = 'Pasta criada';
$string['foldernamerequired'] = 'Escolha um nome para a nova pasta.';
$string['gotofolder'] = 'Vá para %s';
$string['groupfiles'] = 'Ficheiros de Grupo';
$string['home'] = 'Entrada';
$string['htmlremovedmessage'] = 'Está a visualizar <strong>%s</strong> por <a href="%s">%s</a>. O ficheiro exibido abaixo foi filtrado para remoção de conteúdo malicioso, e é apenas uma and is only a representação aproximada do original.';
$string['htmlremovedmessagenoowner'] = 'Está a visualizar <strong>%s</strong>. O ficheiro exibido abaixo foi filtrado para remoção de conteúdo malicioso, e é apenas uma representação aproximada do original.';
$string['image'] = 'Imagem';
$string['Images'] = 'Imagens';
$string['lastmodified'] = 'Última Alteração';
$string['myfiles'] = 'Os meus ficheiros';
$string['Name'] = 'Nome';
$string['namefieldisrequired'] = 'O campo nome é necessário';
$string['maxuploadsize'] = 'Tamanho máximo de envio';
$string['movefaileddestinationinartefact'] = 'Não pode colocar uma pasta dentro dela própria.';
$string['movefaileddestinationnotfolder'] = 'Apenas pode mover ficheiro para dentro de pastas.';
$string['movefailednotfileartefact'] = 'Apenas artefactos de ficheiros, pastas e imagens podem ser movidos.';
$string['movefailednotowner'] = 'Não tem permissões para mover o ficheiro para esta pasta';
$string['movefailed'] = 'Ocorreu um erro ao mover.';
$string['movingfailed'] = 'Ocorreu um erro ao mover: o ficheiro ou pasta já não existe';
$string['nametoolong'] = 'O nome é muito longo. Por favor escolha um mais curto.';
$string['nofilesfound'] = 'Não foram encontrados ficheiros';
$string['notpublishable'] = 'Não tem permissões para publicar este ficheiro';
$string['overwrite'] = 'sobrescrever';
$string['Owner'] = 'Proprietário';
$string['parentfolder'] = 'Pasta acima';
$string['Preview'] = 'Pré-visualização';
$string['requireagreement'] = 'Acordo Obrigatório';
$string['removingfailed'] = 'Ocorreu um erro ao eliminar: o ficheiro ou pasta já não existe';
$string['savechanges'] = 'Guardar alterações';
$string['selectafile'] = 'Seleccione um ficheiro';
$string['selectingfailed'] = 'Ocorreu um erro ao seleccionar: o ficheiro ou pasta já não existe';
$string['Size'] = 'Tamanho';
$string['spaceused'] = 'Espaço utilizado';
$string['timeouterror'] = 'Ocorreu um erro ao enviar o ficheiro: tente enviar o ficheiro novamenet';
$string['title'] = 'Nome';
$string['titlefieldisrequired'] = 'O campo nome é necessário';
$string['Type'] = 'Tipo';
$string['upload'] = 'Enviar';
$string['uploadagreement'] = 'Acordo de Envio';
$string['uploadagreementdescription'] = 'Active esta opção se desejar forçar os utilizadores a concordar com o texto abaixo antes que possam enviar um ficheiro para o site.';
$string['uploadexceedsquota'] = 'Se enviar este ficheiro irá exceder a sua quota. Tente eliminar alguns ficheiros que enviou.';
$string['uploadfile'] =  'Enviar ficheiros';
$string['uploadfileexistsoverwritecancel'] =  'Um ficheiro com esse nome já existe. Pode renomear o ficheiro que está prestes a enviar, ou sobrescrever o ficheiro existente.';
$string['uploadingfiletofolder'] =  'Enviando %s para %s';
$string['uploadoffilecomplete'] = 'O envio de %s foi concluído';
$string['uploadoffilefailed'] =  'Ocorreu um erro no envio de %s';
$string['uploadoffiletofoldercomplete'] = 'O envio de %s para %s foi concluído';
$string['uploadoffiletofolderfailed'] = 'Ocorreu um erro no envio de %s para %s';
$string['usecustomagreement'] = 'Uitilizar Acordo Personalizado';
$string['youmustagreetothecopyrightnotice'] = 'Tem que concordar com o aviso de Direitos de Autor';
$string['fileuploadedtofolderas'] = '%s enviado para %s como "%s"';
$string['fileuploadedas'] = '%s enviado como "%s"';


// File types
$string['ai'] = 'Documento Postscript';
$string['aiff'] = 'Ficheiro de áudio AIFF';
$string['application'] = 'Aplicação Desconhecida';
$string['au'] = 'Ficheiro de áudio AU';
$string['avi'] = 'Ficheiro de vídeo AVI';
$string['bmp'] = 'Imagem Bitmap';
$string['doc'] = 'Docuemnto MS Word';
$string['dss'] = 'Ficheiro de áudio Digital Speech Standard';
$string['gif'] = 'Imagem GIF';
$string['html'] = 'Ficheiro HTML';
$string['jpg'] = ' Imagem JPEG';
$string['jpeg'] = ' Imagem JPEG';
$string['js'] = 'Ficheiro Javascript';
$string['latex'] = 'Documento LaTeX';
$string['m3u'] = 'Ficheiro de áudio M3U';
$string['mp3'] = 'Ficheiro de áudio MP3';
$string['mp4_audio'] = 'Ficheiro de áudio MP4';
$string['mp4_video'] = 'Ficheiro de vídeo MP4';
$string['mpeg'] = 'Filme MPEG';
$string['odb'] = 'Base de dados Openoffice';
$string['odc'] = 'Ficheiro Openoffice Calc';
$string['odf'] = 'Ficheiro Openoffice Formula';
$string['odg'] = 'Ficheiro Openoffice Graphics';
$string['odi'] = 'Imagem Openoffice';
$string['odm'] = 'Ficheiro Openoffice Master Document';
$string['odp'] = 'Apresentação Openoffice';
$string['ods'] = 'Folha de Cálculo Openoffice';
$string['odt'] = 'Documento Openoffice';
$string['oth'] = 'Documento Web Openoffice';
$string['ott'] = 'Documento Modelo Openoffice';
$string['pdf'] = 'Documento PDF';
$string['png'] = 'Imagem PNG';
$string['ppt'] = 'Documento MS Powerpoint';
$string['quicktime'] = 'Filme Quicktime';
$string['ra'] = 'Ficheiro de áudio Real Audio';
$string['rtf'] = 'Documento RTF';
$string['sgi_movie'] = 'Ficheiro SGI Movie';
$string['sh'] = 'Script de Shell';
$string['tar'] = 'Arquivo TAR';
$string['gz'] = 'Ficheiro Comprimido Gzip';
$string['bz2'] = 'Ficheiro Comprimido Bzip2';
$string['txt'] = 'Ficheiro de Texto';
$string['wav'] = 'Ficheiro de áudio WAV';
$string['wmv'] = 'Ficheiro de vídeo WMV';
$string['xml'] = 'Ficheiro XML';
$string['zip'] = 'Arquivo ZIP';
$string['swf'] = 'Filme Flash SWF';
$string['flv'] = 'Filme Flash FLV';
$string['mov'] = 'Filme MOV Quicktime';
$string['mpg'] = 'Filme MPG';
$string['ram'] = 'Filme RAM Real Player';
$string['rpm'] = 'Filme RPM Real Player';
$string['rm'] = 'FilmeRM Real Player';
$string['mm'] = 'Mapa mental do FreeMind';


// Profile icons
$string['cantcreatetempprofileiconfile'] = 'Não foi possível guardar uma foto de perfil temporária em %s';
$string['profileiconsize'] = 'Tamanho da Foto do Perfil';
$string['profileicons'] = 'Fotos do Perfil';
$string['Default'] = 'Padrão';
$string['deleteselectedicons'] = 'Eliminar fotos selecionadas';
$string['profileicon'] = 'Fotos do Perfil';
$string['noimagesfound'] = 'Não foram encontradas imagens';
$string['uploadedprofileiconsuccessfully'] = 'Nova foto de perfil enviada com sucesso';
$string['profileiconsetdefaultnotvalid'] = 'Não foi possível definir a foto de perfil padrão, a escolha não é válida';
$string['profileiconsdefaultsetsuccessfully'] = 'Foto de perfil padrão definida com sucesso';
$string['profileiconsdeletedsuccessfully'] = 'Foto(s) do perfil eliminada(s) com sucesso';
$string['profileiconsnoneselected'] = 'Não foram seleccionadas fotos de perfil para serem eliminadas';
$string['onlyfiveprofileicons'] = 'Apenas pode enviar cinco fotos de perfil';
$string['or'] = 'ou';
$string['profileiconuploadexceedsquota'] = 'Se enviar esta foto de perfil irá exceder a sua quota de disco. Tente eliminar alguns ficheiros que tenha enviado';
$string['profileiconimagetoobig'] = 'A imagem que enviou é muito grande (%sx%s pixels). Não pode ser maior do que %sx%s pixels';
$string['uploadingfile'] = 'enviando ficheiro...';
$string['uploadprofileicon'] = 'Enviar Foto de Perfil';
$string['profileiconsiconsizenotice'] = 'Pode enviar até <strong>cinco</strong> fotos de perfil, e escolher qual a que deseja exibir como a sua foto padrão. As suas fotos deverão ter entre 16x16 e %sx%s pixels.';
$string['setdefault'] = 'Definir como padrão';
$string['Title'] = 'Título';
$string['imagetitle'] = 'Título da Imagem';
$string['usenodefault'] = 'Não usar padrão';
$string['usingnodefaultprofileicon'] = 'Não está a usar uma foto de perfil padrão';
$string['wrongfiletypeforblock'] = 'O ficheiro que enviou não é do tipo correcto para este bloco.';

// Unzip
$string['Contents'] = 'Conteúdos';
$string['Continue'] = 'Continuar';
$string['extractfilessuccess'] = 'Foram criados %s pastas e %s ficheiros.';
$string['filesextractedfromarchive'] = 'Ficheiros extraídos do arquivo';
$string['filesextractedfromziparchive'] = 'Ficheiros extraídos do arquivo Zip';
$string['fileswillbeextractedintofolder'] = 'Os ficheiros serão extraídos para %s';
$string['insufficientquotaforunzip'] = 'A sua quota restante é muito pequena para poder descomprimir este ficheiro.';
$string['invalidarchive'] = 'Ocorreu um erro ao ler este arquivo.';
$string['pleasewaitwhileyourfilesarebeingunzipped'] = 'Por favor aguarde enquanto os seu ficheiros estão a ser descomprimidos.';
$string['spacerequired'] = 'Espaço Necessário';
$string['Unzip'] = 'Descomprimir';
$string['unzipprogress'] = '%s ficheiros/pastas criadas.';

// Group file permissions
$string['filepermission.view'] = 'Ver';
$string['filepermission.edit'] = 'Editar';
$string['filepermission.republish'] = 'Publicar';
?>
