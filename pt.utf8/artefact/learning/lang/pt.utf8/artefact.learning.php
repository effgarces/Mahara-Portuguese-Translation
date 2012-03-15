<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
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
 * @copyright  (C) 2009 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Aprendizagem';
$string['mylearning'] = 'Aprendizagem';

$string['learningsaved'] = 'Questionário de aprendizagens salvo com sucesso';
$string['learningsavefailed'] = 'Ocorreu um erro ao actualizar o seu questionário de aprendizagens';

$string['multipleintelligences'] = 'Inteligências Múltiplas ';
$string['multipleintelligencesdesc'] = '
<p>A teoria das inteligências múltiplas foi desenvolvida em 1983 pelo Dr. Howard Gardner. Esta teoria sugere que a noção tradicional de inteligência, baseada no quociente de inteligência, é muito limitada. Em vez disso, o Dr. Gardner propõe sete inteligências para lidar com o alcance do potêncial humano em crianças e adultos. Uma oitava inteligência foi definida e colocada por Gardner em meados dos anos 90. Estas inteligências são:
<ul>
<li><b>Verbal-linguística.</b> Caracteriza-se por um domínio e gosto especial pelos idiomas e pelas palavras e por um desejo em os explorar.</li>
<li><b>Lógico-matemática.</b> A capacidade de confrontar e avaliar objetos e abstrações, discernindo as suas relações e princípios subjacentes.</li>
<li><b>Visual-Espacial.</b> Expressa-se pela capacidade de compreender o mundo visual com precisão, permitindo transformar, modificar percepções e recriar experiências visuais até mesmo sem estímulos físicos.</li>
<li><b>Corporal-cinestésica.</b> Traduz-se na maior capacidade de controlar e orquestrar movimentos do corpo.</li>
<li><b>Musical.</b> Identificável pela habilidade para compor e executar padrões musicais, executando pedaços de ouvido, em termos de ritmo e timbre, mas também escutando-os e discernindo-os.</li>
<li><b>Interpessoal.</b> Expressa pela habilidade de entender as intenções, motivações e desejos dos outros.</li>
<li><b>Intrapessoal.</b> Expressa na capacidade de se conhecer.</li>
<li><b>Naturalista.</b> Traduz-se na sensibilidade para compreender e organizar os objectos, fenómenos e padrões da natureza, como reconhecer e classificar plantas, animais, minerais, incluindo rochas e gramíneas e toda a variedade de fauna, flora, meio-ambiente e seus componentes.</li>
</ul>
</p>
';
$string['learningstyles'] = 'Estilos de Aprendizagem';
$string['learningstylesdesc'] = '
<p>Os estilos de aprendizagem são simplesmente diferentes abordagens ou formas de aprendizagem. 
Eles envolvem métodos de educação que são particulares para um índividuo e presume-se que permitem que o ínvidviduo aprenda melhor. Os estilos de aprendizagem pelos quais as pessoas aprendem melhor são:
<ul>
<li><b>Os visuais.</b> São aquelas pessoas que aprendem melhor ao ver, como por exemplo assistindo a um vídeo, vendo uma imagem, etc.</li>
<li><b>Os auditivos.</b> Aprendem melhor ouvindo, como por exemplo uma aula teórica de um professor numa sala de aula.</li>
<li><b>Os cinestésicos</b> Aprendem melhor quando, por exemplo, assistem a uma palestra mas simultâneamente manipulam uma caneta, ou escrevem aquilo que ouvem ou quando executam algo prático</li>
</ul>
</p>
';

$string['legend'] = 'Legenda';
$string['dateadded'] = 'Adicionado em: ';

// Multiple Intelligences
$string['intelligenceA'] = 'Inteligência Verbal-linguística';
$string['intelligenceB'] = 'Inteligência Lógico-matemática';
$string['intelligenceC'] = 'Inteligência Visual-espacial';
$string['intelligenceD'] = 'Inteligência Corporal-cinestésica';
$string['intelligenceE'] = 'Inteligência Musical';
$string['intelligenceF'] = 'Inteligência Interpessoal';
$string['intelligenceG'] = 'Inteligência Intrapessoal';
$string['intelligenceH'] = 'Inteligência Naturalista';
$string['true'] = 'Verdadeiro';
$string['false'] = 'Falso';

// Multiple Intelligences: Verbal-Linguistic intelligence
$string['multipleintelligences.A1'] = 'É fácil para mim explicar as minhas ideias a outros.';
$string['multipleintelligences.A2'] = 'Aprendo muito a partir de conversas, palestras e ouvindo os outros.';
$string['multipleintelligences.A3'] = 'Eu gosto de falar em público e de participar em debates.';
$string['multipleintelligences.A4'] = 'Tirar notas ajuda-me a lembrar e perceber.';
// Multiple Intelligences: Logical-Mathematical intelligence
$string['multipleintelligences.B1'] = 'Direcções passo-a-passo são uma grande ajuda.';
$string['multipleintelligences.B2'] = 'A resolução de problemas e jogos lógicos são fáceis para mim.';
$string['multipleintelligences.B3'] = 'Eu consigo facilmente visualizar padrões e relações entre experiências e coisas.';
$string['multipleintelligences.B4'] = 'Eu consigo efectuar cálculos rapidamente na minha cabeça.';
// Multiple Intelligences: Visual-Spatial intelligence
$string['multipleintelligences.C1'] = 'Sou bom a ler mapas e plantas.';
$string['multipleintelligences.C2'] = 'Consigo lembrar-me melhor se utilizar gráficos, tabelas e esquemas.';
$string['multipleintelligences.C3'] = 'Consigo visualizar ideias na minha mente.';
$string['multipleintelligences.C4'] = 'Consigo lembrar-me de coisas ou cenas como imagens mentais.';
// Multiple Intelligences: Bodily-Kinesthetic intelligence
$string['multipleintelligences.D1'] = 'Gosto de fazer coisas com as minhas mãos.';
$string['multipleintelligences.D2'] = 'Consigo aprender melhor fazendo algo por conta própria.';
$string['multipleintelligences.D3'] = 'Tenho um bom sentido de equilíbrio e gosto de estar em movimento.';
$string['multipleintelligences.D4'] = 'A inactividade torna-me mais cansado do que estar muito ocupado.';
// Multiple Intelligences: Musical intelligence
$string['multipleintelligences.E1'] = 'Lembrar-me de letras de músicas e melodias é fácil para mim.';
$string['multipleintelligences.E2'] = 'Consigo alegrar-me com música quando estou triste.';
$string['multipleintelligences.E3'] = 'Consigo distinguir instrumentos individuais em obras musicais complexas.';
$string['multipleintelligences.E4'] = 'Gosto de cantar ou tocar um instrumento musical.';
// Multiple Intelligences: Interpersonal intelligence
$string['multipleintelligences.F1'] = 'Muitas vezes sirvo como líder entre pares e colegas.';
$string['multipleintelligences.F2'] = 'Gosto de eventos de grupo e sociais.';
$string['multipleintelligences.F3'] = 'Sou sensível ao humor e sentimentos das pessoas que me rodeiam.';
$string['multipleintelligences.F4'] = 'Sou um \'jogador de equipa\' e aprendo melhor interagindo com outros.';
// Multiple Intelligences: Intrapersonal intelligence
$string['multipleintelligences.G1'] = 'Acredito que sou responsável pelas minhas acções e por quem sou.';
$string['multipleintelligences.G2'] = 'Preciso de saber porque devo aprender algo antes de concordar em aprender.';
$string['multipleintelligences.G3'] = 'Gosto de estar sozinho e pensar sobre a minha vida e sobre mim.';
$string['multipleintelligences.G4'] = 'Trabalhar sozinho pode ser tão produtivo como trabalhar em grupo.';
// Multiple Intelligences: Naturalistic intelligence
$string['multipleintelligences.H1'] = 'A classificação ajuda-me a dar sentido a novos dados.';
$string['multipleintelligences.H2'] = 'Gosto de cuidar das minhas plantas e animais de estimação.';
$string['multipleintelligences.H3'] = 'Gosto de observar fenómenos naturais como a lua e as marés e ouvir explicações sobre os mesmos.';
$string['multipleintelligences.H4'] = 'Gosto de aprender sober a natureza, especialmente sobre biologia, botânica e/ou zoologia.';


// Learning Styles
$string['learningtypeV'] = 'Visual';
$string['learningtypeA'] = 'Auditivo';
$string['learningtypeK'] = 'Cinestésico';
$string['never'] = 'Nunca';
$string['rarely'] = 'Raramente';
$string['sometimes'] = 'Ocasionalmente';
$string['often'] = 'Frequentemente';
$string['always'] = 'Sempre';

// Learning Styles: Visual type
$string['learningstyles.V01'] = 'Na sala de aula mantenho contacto visual com o professor.';
$string['learningstyles.V02'] = 'Utilizo cor (lápis, marcador, etc.) quando escrevo num bloco de notas ou quando leio os materiais didáticos.';
$string['learningstyles.V03'] = 'Prefiro desenhar mapas do que a descrição do caminho que tenho de percorrer.';
$string['learningstyles.V04'] = 'Consigo perceber e ler facilmente mapas, tabelas, gráficos etc.';
$string['learningstyles.V05'] = 'O som do rádio ligado incomoda-me, quando estou a fazer alguma coisa.';
$string['learningstyles.V06'] = 'Eu tiro muitas notas quando leio ou ouço uma explicação.';
$string['learningstyles.V07'] = 'Quando faço um teste, consigo facilmente ver a página do bloco de notas ou livro onde aprendi as respostas.';
$string['learningstyles.V08'] = 'Quando tiro notas, lembro-me melhor.';
$string['learningstyles.V09'] = 'Se quero lembrar-me de alguma coisa, por exemplo o número de telefone de alguém, ajuda-me se criar uma imagem mental do que me quero recordar.';
$string['learningstyles.V10'] = 'Consigo imaginar nos meus pensamentos o que estou a ler ou a escutar.';
$string['learningstyles.V11'] = 'Prefiro ler sozinho, em vez de alguém ler para mim.';
// Learning Styles: Auditory type
$string['learningstyles.A01'] = 'Compreendo algo mail facilmente quando falo sobre isso com outras pessoas.';
$string['learningstyles.A02'] = 'Prefiro instrucções orais a escritas.';
$string['learningstyles.A03'] = 'Prefiro escutar um texto em cassete ou CD Áudio, em vez de lê-lo..';
$string['learningstyles.A04'] = 'Tenho um desempenho pior em testes escritos do em orais.';
$string['learningstyles.A05'] = 'É díficil para mim imaginar objectos estranhos, eventos, instalações.';
$string['learningstyles.A06'] = 'Adoro contar anedotas e consigo facilmente lembrar-me delas.';
$string['learningstyles.A07'] = 'Consigo seguir uma explicação facilmente, apesar de não manter contacto visual com o professor.';
$string['learningstyles.A08'] = 'Gosto de falar enquanto escrevo.';
$string['learningstyles.A09'] = 'Quando leio, ouço as minhas palavras na minha mente.';
$string['learningstyles.A10'] = 'Não me lembro bem da aparência das pessoas, lembro-me melhor das suas palavras.';
$string['learningstyles.A11'] = 'Se aprender em voz alta, então lembro-me melhor do material.';
// Learning Styles: Kinesthetic type
$string['learningstyles.K01'] = 'Tenho boas ideias quando estou fisicamente activo.';
$string['learningstyles.K02'] = 'Quando aprendo, não gosto de estar sentado á mesa, prefiro estar em lugares diferentes (ex. no chão, na cama ...).';
$string['learningstyles.K03'] = 'Tiro notas, mas são um pouco desorganizadas.';
$string['learningstyles.K04'] = 'Não consigo estar parado por um longo período.';
$string['learningstyles.K05'] = 'Gosto de fazer coisas com as minhas mãos.';
$string['learningstyles.K06'] = 'Preciso de muitas pausas, quando estou a aprender.';
$string['learningstyles.K07'] = 'Quando falo, utilizado linguagem corporal (ex. gestos).';
$string['learningstyles.K08'] = 'Em vez de ouvir as instrucções sobre como fazer um produto, prefiro produzi-lo imediatamente.';
$string['learningstyles.K09'] = 'Enquanto ouço uma explicação, muitas vezes escrevo rabiscos no papel ou no banco.';
$string['learningstyles.K10'] = 'Gosto de criar modelos a partir do que estou aprendendo.';
$string['learningstyles.K11'] = 'Prefiro fazer trabalho de projecto, em vez de redacções e resumos.';

?>
