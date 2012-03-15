<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
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
 * @copyright  (C) 2011 Geoffrey Rowland, geoff.rowland@yeovil.ac.uk
 *
 * This plugin depends on the NIH NCI/CADD Chemical Identifier Resolver
 * http://cactus.nci.nih.gov/chemical/structure
 */

defined('INTERNAL') || die();

$string['title'] = 'Chem 2D NIH';
$string['description'] = 'Insira estruturas químicas em 2D a partir do NIH NCI/CADD';
$string['chemnihsearch'] = 'Termo de procura';
$string['view'] = 'Ver imagem';
$string['chemnihsearchdescription2'] = 'Introduza o termo a pesquisar.';
$string['chemnihsearchpatterns'] = 'Poderá ser um <a target="blank" href="http://cactus.nci.nih.gov/chemical/structure/documentation">Nome químico</a> (nome trivial, nome sistemático ou sinónimo),uma referência <a target="blank" title="SMILES reference" href="http://www.daylight.com/dayhtml/doc/theory/theory.smiles.html">SMILES</a>,um <a target="blank" href="http://www.iupac.org/inchi/release102final.html">InChI</a> ou o formato <a target="blank" href="http://www.iupac.org/inchi/release102final.html">Standard InChIKey</a>.
<br />NB Alguns termos poderão não devolver a estereoquímica  ou tautomerismo correcto ';
$string['showdescription'] = 'Mostrar descrição?';
$string['width'] = 'Largura';
$string['height'] = 'Altura';
$string['invalidurl'] = 'URL inválido';
$string['displayedformula'] = 'Formula apresentada';
$string['full'] = 'Completo (todos os átomos e rótulos)';
$string['skeletal'] = 'Esquelético (Sem rótulos nos átomos de carbono e sem átomos de hidrogénio ligados)';
?>