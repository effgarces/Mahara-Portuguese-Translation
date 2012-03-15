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

$string['internal'] = 'Interno';
$string['title'] = 'Interno';
$string['description'] = 'Autenticação através da base de dados do Mahara';

$string['completeregistration'] = 'Concluir Registo';
$string['emailalreadytaken'] = 'Este email já se encontra registado';
$string['iagreetothetermsandconditions'] = 'Concordo com os Termos e Condições';
$string['passwordformdescription'] = 'A sua senha deverá ter pelo menos 6 caracteres e conter pelo menos um digito e duas letras';
$string['passwordinvalidform'] = 'A sua senha deverá ter pelo menos 6 caracteres e conter pelo menos um digito e duas letras';
$string['registeredemailsubject'] = 'Registou-se em %s';
$string['registeredemailmessagetext'] = 'Olá %s,

Obrigado por criar uma conta em %s. Por favor siga a seguinte hiperligaçlão para concluir
o processo de registo:

%sregister.php?key=%s

A hiperligação irá expirar dentro 24 horas.

--
Atentamente,
A equipa %s';
$string['registeredemailmessagehtml'] = '<p>Olá %s,</p>
<p>Obrigado por criar uma conta em %s. Por favor siga a seguinte hiperligaçlão para concluir:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>A hiperligação irá expirar dentro 24 horas.</p>

<pre>--
Atentamente,,
A equipa %s</pre>';
$string['registeredok'] = '<p>Efectuou o registo com sucesso. Por favor verifique o seu email para obter instruções sobre como activar a sua conta.</p>';
$string['registrationnosuchkey'] = 'Desculpe, não foi encontrado um registo com esta chave. Provavelmente já passaram mais de 24 horas desde que efectuou o registo? Caso contrário, poderá ser um problema no nosso site';
$string['registrationunsuccessful'] = 'Desculpe, a sua tentativa de registo não foi bem sucedida. O problema deve-se ao nosso site. Por favor tente novamente mais tarde.';
$string['usernamealreadytaken'] = 'Desculpe, este nome de utilizador já se encontra registado';
$string['usernameinvalidform'] = 'Os nomes de utilizador podem conter letras, números e a maioria dos símbolos e terão que ter entre 3 a 30 caracteres de dimensão. Não são permitidos espaços.';
$string['usernameinvalidadminform'] = 'Os nomes de utilizador podem conter letras, números, a maioria dos símbolos e têm que ter entre 3 a236 caracteres de tamanho. Espaços não são permitidos.';
$string['youmaynotregisterwithouttandc'] = 'Não pode efctuar o registo a não ser que concorde com <a href="terms.php">Termos e Condições</a>';
