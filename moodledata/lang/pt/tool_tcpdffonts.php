<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_tcpdffonts', language 'pt', version '4.4'.
 *
 * @package     tool_tcpdffonts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:font:add'] = 'Adicionar tipo de letra (TTF/OTF)';
$string['action:font:addzippedfont'] = 'Adicionar tipo de letra a partir de ficheiro ZIP';
$string['action:font:delete'] = 'Apagar tipo de letra';
$string['action:font:download'] = 'Descarregar tipo de letra';
$string['action:font:preview'] = 'Pré-visualizar tipo de letra';
$string['action:initcustomfonts'] = 'Inicializar a pasta de tipos de letra personalizada';
$string['action:resetcorefonts'] = 'Repor a pasta TCPDF Fonts';
$string['addfont:explain'] = 'As configurações abaixo permitem que personalize como será gerada o tipo de letra.<br/>
Se não está familiarizado com estas configurações, mantenha os valores predefinidos (serve para a maioria dos casos padrão).<br/>
Só deve ajustar estas configurações se sabe exatamente o que as configurações significam ou foi instruído com quais configurações deve ser convertido o tipo de letra true type/open type.';
$string['backtolist'] = 'Voltar para visão global';
$string['bold'] = 'Aplicar negrito ao tipo de letra';
$string['defaultpreviewtext'] = 'O rato roeu a rolha do rei da Rússia.';
$string['err:font:otf-otto'] = 'TCPDF não pode processar/adicionar tipos de letra do tipo OTF (OTTO)';
$string['err:font:zip'] = 'O ficheiro carregado não parece ser um ficheiro ZIP válido';
$string['err:zipopen'] = 'Ocorreu um erro ao tentar criar o ficheiro para descarregar.<br/>
Pode tentar atualizar esta página. Se o erro persistir, contacte o administrador do sistema.';
$string['family'] = 'Família do tipo de letra';
$string['folderstate:custom'] = 'A pasta TCPDF Fonts está personalizada e pronta para receber tipos de letra personalizadas.';
$string['folderstate:default'] = 'A pasta TCPDF Fonts ainda não foi personalizada. Não pode usar as ações especializadas fornecidas por esta ferramenta (como por exemplo, adicionar tipos de letras personalizadas) <i>antes</i> de inicializar a pasta de tipos de letras usando a ação de inicialização abaixo.';
$string['font:add'] = 'Adicionar tipo de letra';
$string['font:addfont:fail'] = 'Não foi possível adicionar o tipo de letra {$a}';
$string['font:addfont:success'] = 'Tipo de letra {$a} adicionado com sucesso';
$string['font:delete'] = 'Apagar tipo de letra';
$string['font:delete:body'] = 'Está prestes a apagar o de tipo de letra personalizado {$a}.<br/>
Este processo é irreversível e não pode ser desfeito. Todos os dados do tipo de letra serão apagados.<br/>
Tem a certeza de que pretende continuar?';
$string['font:delete:confirmation'] = 'Sim, entendo e pretendo apagar este tipo de letra.';
$string['font:delete:fail'] = 'Não foi possível apagar tipo de letra';
$string['font:delete:header'] = 'Apagar tipo de letra';
$string['font:delete:success'] = 'Tipo de letra apagado com sucesso';
$string['font:family:delete:body'] = 'Está prestes a apagar a família de tipos de letra personalizada {$a}.<br/>
Este processo é irreversível e não pode ser desfeito. Todos os dados dos tipos de letra serão apagados.<br/>
Tem a certeza de que pretende continuar?';
$string['font:family:delete:confirmation'] = 'Sim, entendo e pretendo apagar esta família de tipos de letra.';
$string['font:family:delete:fail'] = 'Não foi possível apagar a família de tipos de letra.';
$string['font:family:delete:header'] = 'Apagar a família de de tipos de letra {$a}';
$string['font:family:delete:success'] = 'Família de tipos de letra apagada com sucesso';
$string['font:initcustom:body'] = 'Está prestes a inicializar a personalização dos tipos de letra TCPDF .<br/>
Esta ação corresponde a:<ul>
<li>criar uma pasta personalizada (fonts) na sua pasta de dados Moodle</li>
<li>copiar todos os tipos de letra de base (com autorização do Moodle, caso contrário, <i>irá</i> voltar a usar a pasta core do Moodle)</li>
</ul>
Pode executar esta ação com segurança e remover a personalização a qualquer momento para voltar à implementação original do Moodle.<br/>
Tem a certeza de que pretende continuar?';
$string['font:initcustom:confirmation'] = 'Sim, entendo e pretendo inicializar a personalização dos tipos de letra TCPDF.';
$string['font:initcustom:fail'] = 'Ocorreu um erro ao inicializar a personalização dos tipos de letra TCPDF. Erro: {$a}';
$string['font:initcustom:header'] = 'Inicializar a personalização dos tipos de letra TCPDF';
$string['font:initcustom:success'] = 'Personalização dos tipos de letra TCPDF inicializada com sucesso.';
$string['font:resetcore:body'] = 'Está prestes a repor a personalização TCPDF Fonts para o core do Moodle.<br/>
Isto significa que retornará para o TCPDF do core interno do Moodle com os tipos de letra que vieram com a instalação.<br/>
<b>Aviso</b>: Todos os seus tipos de letra personalizados serão removidas e não será possível voltar atrás depois desta ação estar concluída.<br/>
Tem certeza que deseja continuar?';
$string['font:resetcore:confirmation'] = 'Sim, entendo e pretendo repor todas as personalizações dos tipos de letra.';
$string['fontaddcbbox'] = 'Adicionar informações da caixa delimitadora?';
$string['fontaddcbbox_help'] = 'Se ativar esta opção, será adicionada informação da caixa delimitadora aos ficheiros de tipo de letra gerados.';
$string['fontenc'] = 'Tabela de codificação';
$string['fontencid'] = 'ID da codificação';
$string['fontfile'] = 'Ficheiro de tipo de letra';
$string['fontflags'] = '';
$string['fontforceoverwrite'] = 'Substituir o tipo de letra se já existir (em oposição à saída antecipada).';
$string['fontplatid'] = 'ID da plataforma';
$string['fonttype'] = 'Tipo';
$string['fonttype_help'] = 'Selecione o tipo ou deixe em deteção automática.';
$string['ft:autodetect'] = 'Deteção automática';
$string['italic'] = 'Aplicar itálico ao tipo de letra';
$string['missing:ctg-file'] = 'Em falta a versão compactada do mapeamento CID para GID do tipo de letra {$a}';
$string['missing:z-file'] = 'Em falta a versão compactada do código fonte do tipo de letra {$a}';
$string['nonsymbolfont'] = 'Tipo de letra Não-Symbol';
$string['pluginname'] = 'Tipos de letra TCPDF';
$string['previewfor'] = 'Pré-visualização do tipo de letra {$a}';
$string['previewtext'] = 'Pré-visualização do texto';
$string['settings'] = 'Configurações do tipo de letra TCPDF';
$string['size'] = 'Tamanho do tipo de letra';
$string['styles'] = 'Estilos';
$string['symbolfont'] = 'Tipo de letra Symbol';
$string['tcpdffonts:managefonts'] = 'Gerir tipos de letra PDF';
$string['tcpdffonts:viewfonts'] = 'Ver tipos de letra PDF';
$string['toggle:familyview:off'] = 'Agrupar por família: OFF';
$string['toggle:familyview:on'] = 'Agrupar por família: ON';
$string['toggle:subset'] = 'Aplicar subconjuntos do tipo de letra';
$string['type'] = 'Tipo';
$string['updatepreview'] = 'Atualizar pré-visualização';
$string['upload:font:exists'] = 'O tipo de letra {$a} já foi processado e não será substituído. Se pretender substituir o tipo de letra, apague o tipo de letra já existente ou marque a opção para forçar a substituição do tipo de letra.';
$string['uploadfontfile:description'] = 'Pode carregar novos tipos de letras com ficheiro TTF ou OTF e indicar as configurações corretas para gerar o(s) ficheiro(s) de tipo de letra TCPDF';
$string['uploadfontfile:header'] = 'Carregar ficheiro de tipo de letra';
$string['uploadzipfile:description'] = 'Pode carregar um ficheiro compactado contendo os ficheiros de tipo de letra TCPDF que consiste num ficheiro PHP que define o tipo de letra, um ficheiro .z que é basicamente o código fonte do tipo de letra gz compactado e, opcionalmente, o ficheiro ctg.z que contém qualquer mapeamento CID para GID.<br/>
<div class="alert alert-danger"><strong>AVISO:</strong> Nunca deve simplesmente confiar em qualquer ficheiro de um tipo de letra externo no Moodle, especialmente quando ele contém ficheiros PHP, uma vez que implica um grande risco à segurança.<br/>
Deve ter a certeza absoluta de que o conteúdo do ficheiro zip que carregou aqui foi verificado e validado! Embora sejam realizadas algumas verificações rudimentares para determinar a validade do ficheiro de definição do tipo de letra baseado em PHP para TCPDF, isto não garante absolutamente nada. Devido à falta de um mecanismo de validação totalmente desenvolvido (ou literalmente qualquer outro ficheiro de definição que não seja um ficheiro PHP, uma definição codificada em JSON, por exemplo, teria sido melhor), é sua total responsabilidade garantir que o ficheiro zip carregado não contém qualquer código malicioso.</div>';
$string['uploadzipfile:header'] = 'Carregar ficheiro ZIP com tipo de letra';
