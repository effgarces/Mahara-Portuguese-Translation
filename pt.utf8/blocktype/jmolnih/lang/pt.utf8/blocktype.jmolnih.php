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
 *
 * It also uses the Jmol Java applet for interactive 3D rendering of
 * chemical dtructures
 * http://jmol.sf.net
 */

defined('INTERNAL') || die();

$string['title'] = 'Jmol NIH';
$string['description'] = 'Insira estruturas químicas Jmol em 3D a partir do NIH NCI/CADD';
$string['jmolnihsearch'] = 'Termo de procura';
$string['jmolnihsearchdescription2'] = 'Introduza o termo de procura.';
$string['jmolnihsearchpatterns'] = 'Poderá ser um <a target="blank" href="http://cactus.nci.nih.gov/chemical/structure/documentation">Nome químico</a> (nome trivial, nome sistemático ou sinónimo), um nome IUPAC, uma referência <a target="blank" title="SMILES reference" href="http://www.daylight.com/dayhtml/doc/theory/theory.smiles.html">SMILES</a>, um <a target="blank" href="http://www.iupac.org/inchi/release102final.html">InChI</a> ou o formato <a target="blank" href="http://www.iupac.org/inchi/release102final.html">Standard InChIKey</a>.
<br />NB Alguns termos poderão não devolver a estereoquímica  ou tautomerismo correcto';
$string['showdescription'] = 'Mostrar Descrição?';
$string['width'] = 'Largura';
$string['height'] = 'Altura';
$string['download'] = 'Ver/descarregar ficheiro de estrutura';
$string['invalidurl'] = 'URL inválido';
$string['jmolscript'] = 'Script Jmol de arranque';
$string['jmolscriptdescription'] = 'Um <a target="blank" title="Jmol interactive scripting documentation" href="http://chemapps.stolaf.edu/jmol/docs/">script Jmol </a>opcional que será carregado com o applet Jmol para personalizar o aspecto inicial';
$string['controlscript'] = 'JavaScript Jmol.js';
$string['controlscriptdescription'] = 'Um <a target="blank" title="Jmol.js JavaScript Library" href="http://jmol.sourceforge.net/jslibrary/">JavaScript Jmol.js</a> opcional para adicionar controlos personalizados abaixo da applet Jmol<br />
ex. <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolButton">jmolButton</a>, <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolLink">jmolLink</a>, <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolCheckbox">jmolCheckbox</a>, <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolRadioGroup">jmolRadioGroup</a>, <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolMenu">jmolMenu</a>, <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolHtml">jmolHtml</a> and <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolBr">jmolBr</a>.';
?>