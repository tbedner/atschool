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
 * Strings for component 'local_kopere_wpbridge', language 'pt', version '4.4'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['adminnotification_body'] = 'Foi detetado um problema na ponte WooCommerce.

{$a}';
$string['adminnotification_subject'] = 'Problema da Ponte WP';
$string['back'] = 'Voltar';
$string['dashboard_laststatus'] = 'Estado da ligação';
$string['dashboard_mappingcount'] = 'Mapeamentos';
$string['dashboard_openui'] = 'Mapeamentos abertos';
$string['dashboard_pendingcount'] = 'Itens pendentes';
$string['dashboard_processedcount'] = 'Itens processados';
$string['dashboard_settings'] = 'Definições';
$string['dashboard_subtitle'] = 'Sincronizar as vendas concluídas nos cursos e nas coortes do Moodle.';
$string['dashboard_title'] = 'Ponte WooCommerce para Moodle';
$string['error_configmissing'] = 'As definições do WooCommerce estão incompletas.';
$string['error_invalidsignature'] = 'Assinatura do webhook do WooCommerce inválida.';
$string['error_invalidwebhooktoken'] = 'Token do webhook inválido.';
$string['error_missingemail'] = 'O pedido não inclui um e-mail do cliente.';
$string['error_missingorderid'] = 'Falta o ID do pedido do WooCommerce.';
$string['error_nomanualenrol'] = 'Não foi encontrada nenhuma instância de matrícula manual ativa no curso.';
$string['error_nomapping'] = 'Não foi encontrado nenhum mapeamento ativo para este produto.';
$string['manage'] = 'Gerir a ponte WooCommerce.';
$string['mapping_add'] = 'Adicionar mapeamento';
$string['mapping_cohort'] = 'Coorte';
$string['mapping_course'] = 'Curso';
$string['mapping_delete'] = 'Eliminar mapeamento';
$string['mapping_delete_confirm'] = 'Tem a certeza de que pretende eliminar este mapeamento?';
$string['mapping_deleted'] = 'Mapeamento eliminado com sucesso.';
$string['mapping_edit'] = 'Editar mapeamento';
$string['mapping_enabled'] = 'Ativado';
$string['mapping_itemtype'] = 'Tipo de destino';
$string['mapping_itemtype_cohort'] = 'Coorte';
$string['mapping_itemtype_course'] = 'Curso';
$string['mapping_missingcohort'] = 'Selecione uma coorte para o mapeamento de coorte.';
$string['mapping_missingcourse'] = 'Selecione um curso para o mapeamento de cursos.';
$string['mapping_productid'] = 'ID do produto do WooCommerce';
$string['mapping_role'] = 'Papel para matrícula no curso';
$string['mapping_saved'] = 'Mapeamentos guardados com sucesso.';
$string['mappings'] = 'Mapeamentos';
$string['messageprovider_syncnotification'] = 'Notificações WP Bridge';
$string['ordernotification_body'] = 'Olá {$a->firstname},

O seu pedido {$a->orderid} foi processado com sucesso.

Acesso aplicado:
{$a->items}

Pode agora aceder ao Moodle em:
{$a->siteurl}

Cumprimentos,
{$a->sitename}';
$string['ordernotification_subject'] = 'O seu acesso ao Moodle já está disponível.';
$string['pluginname'] = 'Kopere WP Bridge';
$string['privacy:metadata'] = 'O plugin armazena dados de encomenda do WooCommerce para processamento de matrícula no Moodle.';
$string['savechanges'] = 'Guardar alterações';
$string['settings_consumerkey'] = 'Chave do consumidor';
$string['settings_consumersecret'] = 'Segredo do consumidor';
$string['settings_debug'] = 'Modo de depuração';
$string['settings_notconfigured'] = 'A ligação ainda não está configurada.';
$string['settings_section'] = 'Conexão WooCommerce';
$string['settings_statusheading'] = 'Último teste de ligação';
$string['settings_storeurl'] = 'URL do WooCommerce';
$string['settings_storeurl_desc'] = 'Exemplo: https://example.com';
$string['settings_testfailed'] = 'Teste de ligação falhou: {$a}';
$string['settings_testok'] = 'Teste de ligação concluído com sucesso e a verificação do webhook terminou.';
$string['settings_webhookheading'] = 'Endpoint do webhook';
$string['settings_webhookheading_desc'] = 'Utilize esta URL no WooCommerce. O token é sempre obrigatório na string de consulta.';
$string['settings_webhookurl'] = 'URL do webhook';
$string['status_error'] = 'Erro';
$string['status_failed'] = 'Falhou';
$string['status_ignored'] = 'Ignorado';
$string['status_ok'] = 'OK';
$string['status_pending'] = 'Pendente';
$string['status_processed'] = 'Processado';
$string['task_syncorders'] = 'Sincronizar encomendas concluídas do WooCommerce';
$string['wpbridge'] = 'WP Bridge';
