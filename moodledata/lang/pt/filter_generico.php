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
 * Strings for component 'filter_generico', language 'pt', version '4.4'.
 *
 * @package     filter_generico
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['appauthorised'] = 'Site com autorização Cloud Poodll.';
$string['appnotauthorised'] = 'Site sem autorização Cloud Poodll.';
$string['bundle'] = 'Pacote';
$string['cleartemplate'] = 'Limpar modelo';
$string['commonpageheading'] = 'Configurações gerais';
$string['cpapi_heading'] = 'Configurações da API Cloud Poodll';
$string['cpapi_heading_desc'] = 'Cloud Poodll permite que incorpore gravadores nos widgets diretamente de cloud.poodll.com. É opcional e não é necessário preencher.';
$string['cpapisecret'] = 'Chave secreta da API Cloud Poodll';
$string['cpapisecret_details'] = 'Chave secreta especial que pode ser obtida no <a href=\'https://support.poodll.com/support/solutions/articles/19000083076-cloud-poodll-api-secret\'>separador API</a> da área reservada em Poodll.com.';
$string['cpapiuser'] = 'Utilizador da API Cloud Poodll';
$string['cpapiuser_details'] = 'Igual ao seu nome de utilizador em Poodll.com.';
$string['credentialsinvalid'] = 'Com o nome de utilizador e a chave da API inseridos não foi possível obter acesso. Por favor, verifique os dados.';
$string['dataset'] = 'Conjunto de dados';
$string['dataset_desc'] = 'Generico permite obter um conjunto de dados da base de dados para usar no seu modelo. É um recurso avançado. Digite aqui a parte sql de um pedido $DB->get_records_sql.';
$string['datasetvars'] = 'Variáveis do conjunto de dados';
$string['datasetvars_desc'] = 'Indique uma lista de variáveis, separadas por vírgulas, que compõem as variáveis para o SQL. Pode, e provavelmente vai querer, usar variáveis aqui.';
$string['displaysubs'] = '{$a->subscriptionname} : expira {$a->expiredate}';
$string['filterdescription'] = 'Converter sequências de caracteres do filtro em modelos misturados com dados';
$string['filtername'] = 'Generico';
$string['generico:managetemplates'] = 'Gerir modelos Generico';
$string['genericotemplatesadmin'] = 'Gestão de modelos Generico';
$string['jumpcat_explanation'] = 'O conjunto completo de configurações do filtro Generico pode ser consultado <a href="{$a}">aqui</a>.';
$string['jumpcat_heading'] = 'Configurações do filtro Generico';
$string['noapisecret'] = 'Nenhum chave secreta da API foi inserida.';
$string['noapiuser'] = 'Nenhum nome de utilizador da API foi inserido.';
$string['notokenincache'] = 'Atualize as informações da licença Cloud Poodll para ver os detalhes.';
$string['pluginname'] = 'Generico';
$string['presets'] = 'Modelo de preenchimento automático com predefinição';
$string['presets_desc'] = 'O filtro Generico contém algumas configurações predefinidas que pode usar de imediato ou para o ajudar a usar os seus modelos. Escolha um ou crie o seu próprio modelo a partir do zero. Pode exportar um modelo como um pacote se clicar na caixa verde acima. Pode importar um pacote arrastando-o para a caixa verde.';
$string['privacy:metadata'] = 'O módulo Filtro Generico não armazena quaisquer dados pessoais.';
$string['refreshtoken'] = 'Atualizar as informações da licença Cloud Poodll.';
$string['template'] = 'Corpo do modelo {$a}';
$string['template_desc'] = 'Insira o modelo aqui, defina as variáveis e limite cada variável com @@. Exemplo: @@variável@@';
$string['templatealternate'] = 'Conteúdo alternativo';
$string['templatealternate_desc'] = 'Conteúdo que pode ser usado quando o conteúdo CSS e JavaScript personalizado, que já foi carregado, não está disponível. Atualmente, é usado quando o modelo é processado por um web service, provavelmente por conteúdo na aplicação móvel';
$string['templatealternate_end'] = 'Fim alternativo do conteúdo (modelo {$a})';
$string['templatealternate_end_desc'] = 'Tags de fecho alternativo de conteúdo para modelos que incluem conteúdo do utilizador e tags Generico de início e fim';
$string['templatecount'] = 'Número de modelos';
$string['templatecount_desc'] = 'O número máximo de modelos que pode disponibilizar. O valor predefinido é 20.';
$string['templatedefaults'] = 'Predefinições das variáveis (modelo {$a})';
$string['templatedefaults_desc'] = 'Defina os valores predefinidos para os conjuntos nome=valor, separados por vírgulas. Por exemplo: largura=800,altura=900,feeling=joy';
$string['templateend'] = 'Tags de finalização (modelo {$a})';
$string['templateend_desc'] = 'Se o seu modelo incluir conteúdo do utilizador, por exemplo, uma caixa de informações, coloque as tags de finalização aqui. O utilizador digitará algo como {GENERICO:mytag_end} para fechar o filtro.';
$string['templateheading'] = 'Configurações para o modelo Generico \'{$a}\'';
$string['templateheadingcss'] = 'Configurações CSS/Estilo';
$string['templateheadingjs'] = 'Configurações do Javascript';
$string['templateinstructions'] = 'Instruções (modelo {$a})';
$string['templateinstructions_desc'] = 'Quaisquer instruções inseridas aqui serão mostradas no formulário Generico do editor Atto quando este modelo for exibido. Para uma melhor visualização, use um texto simples e curto.';
$string['templatekey'] = 'A chave que identifica o modelo {$a}';
$string['templatekey_desc'] = 'A chave deve ser uma palavra e apenas pode conter números, letras, underscores, hífens e pontos.';
$string['templatename'] = 'Nome do modelo';
$string['templatename_desc'] = 'Nome deste modelo';
$string['templatepageheading'] = 'Modelo: {$a}';
$string['templaterequire_amd'] = 'Carregar via AMD';
$string['templaterequire_amd_desc'] = 'AMD é um mecanismo de carregamento de Javascript. Se carregar ou vincular bibliotecas Javascript no seu modelo, talvez seja necessário desmarcar esta opção. Apenas aplicável na versão Moodle 2.9 ou superior';
$string['templaterequire_css'] = 'Requer CSS (modelo {$a})';
$string['templaterequire_css_desc'] = 'Uma hiperligação (apenas 1) para um ficheiro CSS externo exigido por este modelo. Opcional.';
$string['templaterequire_js'] = 'Requer JavaScript (modelo {$a})';
$string['templaterequire_js_desc'] = 'Uma hiperligação (apenas 1) para um ficheiro JS externo exigido por este modelo. Opcional.';
$string['templaterequirejsshim'] = 'Requer exportação Shim';
$string['templaterequirejsshim_desc'] = 'Deixe em branco a menos que saiba o que significa';
$string['templates'] = 'Modelos';
$string['templatescript'] = 'JavaScript personalizado (modelo {$a})';
$string['templatescript_desc'] = 'Se o seu modelo precisar de executar Javascript personalizado, insira o código aqui. Será executado assim que todos os elementos da página forem carregados.';
$string['templatestyle'] = 'CSS personalizado (modelo {$a})';
$string['templatestyle_desc'] = 'Insira aqui qualquer CSS personalizado que o seu modelo utilize. As variáveis do modelo não funcionarão aqui. Use apenas código CSS simples.';
$string['templateupdated'] = '{$a} modelos Poodll atualizados.';
$string['templateuploadjsshim'] = 'Carregar a exportação Shim';
$string['templateuploadjsshim_desc'] = 'Deixe em branco a menos que saiba o que significa';
$string['templateversion'] = 'A versão deste modelo {$a}';
$string['templateversion_desc'] = 'Use a semântica da versão, por exemplo, 1.0.0. O Generico mostrará um botão de atualização quando a versão predefinida for superior à versão do modelo.';
$string['updateall'] = 'Atualizar todos';
$string['updatetoversion'] = 'Atualizar para a versão: {$a}';
$string['uploadcss'] = 'Carregar CSS (modelo {$a})';
$string['uploadcss_desc'] = 'Pode enviar um ficheiro CSS que será carregado para o seu modelo. Apenas um.';
$string['uploadjs'] = 'Carregar JavaScript (modelo {$a})';
$string['uploadjs_desc'] = 'Pode enviar um ficheiro de biblioteca JS que será carregado para o seu modelo. Apenas um.';
