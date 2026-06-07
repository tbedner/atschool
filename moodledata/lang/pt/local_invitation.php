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
 * Strings for component 'local_invitation', language 'pt', version '4.4'.
 *
 * @package     local_invitation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['available_from'] = 'Disponível desde:';
$string['available_to'] = 'Disponível até:';
$string['back_to_course'] = 'Voltar à disciplina';
$string['clipboard'] = 'Área de transferência';
$string['consent'] = 'Consentimento (opcional)';
$string['consent_help'] = 'Se definir um texto de consentimento, uma caixa de seleção aparecerá aos utilizadores convidados que deve ser marcada por eles.';
$string['consent_title'] = 'Confirmação';
$string['current_invitation'] = 'Convite atual';
$string['current_invitation_note'] = 'Se criar um novo convite, o antigo ficará automaticamente inválido.';
$string['delete_after_logout'] = 'Apagar após sair';
$string['delete_after_logout_help'] = 'Apagar o utilizador imediatamente após terminar sessão. Se ativar esta opção, não poderá ver este utilizador nos registos da disciplina.';
$string['delete_confirmation'] = 'Tem a certeza de que pretende apagar este convite? Depois disso, a hiperligação do convite deixará de poder ser usada.';
$string['delete_invitation'] = 'Apagar convite';
$string['edit_invitation'] = 'Convite para acesso temporário à disciplina';
$string['error_could_not_create_and_enrol'] = 'Erro: não foi possível criar e inscrever um novo utilizador!';
$string['error_invalid_invitation'] = 'Erro: este convite não é válido!';
$string['error_invitation_not_active'] = 'Erro: a funcionalidade de convite não está ativada neste sistema.';
$string['error_timeend_can_not_be_before_timestart'] = 'O convite não pode terminar antes de começar.';
$string['error_timeend_can_not_be_in_past'] = 'O convite não pode terminar no passado.';
$string['error_userrole_not_defined'] = 'O papel do utilizador não está definido na configuração. Contacte o seu administrador!';
$string['expiration_time'] = 'Prazo de validade (dias)';
$string['expiration_time_help'] = 'Uma conta de utilizador criada por este módulo irá expirar após o número de dias aqui definido. Uma conta expirada será tornada anónima e apagada posteriormente.';
$string['free_slots'] = 'Vagas livres:';
$string['guestuser_suffix'] = '(Visitante)';
$string['info_already_loggedin'] = 'Já está autenticado. Se continuar, a sessão será terminada.';
$string['invitation'] = 'Convite';
$string['invitation:manage'] = 'Gerir convites';
$string['invitation_created'] = 'Convite criado com sucesso.';
$string['invitation_delete_note_timeandlogout'] = 'A conta temporária e os dados associados são apagados automaticamente assim que o utilizador terminar a sessão (sair), no mais tardar após {$a}.';
$string['invitation_delete_note_timeonly'] = 'O acesso temporário e os dados associados são apagados automaticamente após {$a}.';
$string['invitation_deleted'] = 'Convite apagado com sucesso.';
$string['invitation_note'] = 'Pode usar a funcionalidade de convite para conceder acesso temporário a esta disciplina. A hiperligação de convite criada permite que utilizadores sem uma conta normal possam aceder a esta disciplina.';
$string['invitation_updated'] = 'Convite atualizado com sucesso.';
$string['invite_participants'] = 'Convite para acesso temporário à disciplina';
$string['join'] = 'Aceder';
$string['link_copied'] = 'A hiperligação foi copiada para a área de transferência.';
$string['max_users'] = 'Máximo de utilizadores';
$string['max_users_per_invitation'] = 'Máximo de utilizadores por convite';
$string['nameinfo'] = 'Informação do nome';
$string['nameinfo_help'] = 'Com este texto pode definir uma breve explicação de como usar o campo Nome no formulário de adesão.';
$string['note'] = 'Observação:';
$string['pluginname'] = 'Convite';
$string['preventactions'] = 'Ações preventivas';
$string['preventactions_help'] = '<strong>Nota:</strong> Pode definir o URL ou partes de URL que os utilizadores convidados não podem aceder.<br>
Se o utilizador convidado tentar aceder ao URL, será redirecionado para a página da disciplina ou para a página inicial do Moodle.<br>
Não deve incluir nesta lista o Painel do utilizador ou a página inicial!';
$string['qrcode'] = 'Código QR';
$string['remove_old_invitations'] = 'Remover utilizadores antigos';
$string['showqrcode'] = 'Mostrar código QR';
$string['single_name_field'] = 'Apenas nome';
$string['single_name_field_help'] = 'Se ativar esta opção, o utilizador só precisa de especificar um nome e não um nome e apelido. Além disso, um sufixo é anexado ao nome.';
$string['systemrole'] = 'Papel no sistema';
$string['systemrole_help'] = 'Se for definido um papel no sistema, o papel será atribuído ao utilizador convidado. Pode ser usado para restringir o utilizador convidado no nível do sistema.';
$string['timeend'] = 'Fim';
$string['timestart'] = 'Início';
$string['usedslots'] = 'Vagas usadas:';
$string['userrole'] = 'Papel do utilizador';
$string['welcome_note'] = 'Bem-vindo(a) {$a->firstname} {$a->lastname}!';
