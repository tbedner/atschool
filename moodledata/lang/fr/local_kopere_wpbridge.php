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
 * Strings for component 'local_kopere_wpbridge', language 'fr', version '4.4'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['adminnotification_body'] = 'Un problème a été détecté dans le pont WooCommerce.

{$a}';
$string['adminnotification_subject'] = 'Problème de passerelle WP';
$string['back'] = 'Retour';
$string['dashboard_laststatus'] = 'État de la connexion';
$string['dashboard_mappingcount'] = 'Correspondances';
$string['dashboard_openui'] = 'Correspondances ouvertes';
$string['dashboard_pendingcount'] = 'Éléments en attente';
$string['dashboard_processedcount'] = 'Éléments traités';
$string['dashboard_settings'] = 'Paramètres';
$string['dashboard_subtitle'] = 'Synchroniser les ventes terminées dans les cours Moodle et les cohortes.';
$string['dashboard_title'] = 'Passerelle WooCommerce vers Moodle';
$string['error_configmissing'] = 'Les paramètres de WooCommerce sont incomplets.';
$string['error_invalidsignature'] = 'Signature du webhook WooCommerce invalide.';
$string['error_invalidwebhooktoken'] = 'Jeton de webhook invalide.';
$string['error_missingemail'] = 'La commande ne contient pas d\'adresse e-mail du client.';
$string['error_missingorderid'] = 'Identifiant de commande WooCommerce manquant.';
$string['error_nomanualenrol'] = 'Aucune instance d’inscription manuelle active n’a été trouvée dans le cours.';
$string['error_nomapping'] = 'Aucune correspondance active trouvée pour ce produit.';
$string['manage'] = 'Gérer la passerelle WooCommerce';
$string['mapping_add'] = 'Ajouter une correspondance';
$string['mapping_cohort'] = 'Cohorte';
$string['mapping_course'] = 'Cours';
$string['mapping_delete'] = 'Supprimer la correspondance';
$string['mapping_delete_confirm'] = 'Voulez-vous vraiment supprimer cette correspondance ?';
$string['mapping_deleted'] = 'Correspondance supprimée avec succès.';
$string['mapping_edit'] = 'Modifier la correspondance';
$string['mapping_enabled'] = 'Activé';
$string['mapping_itemtype'] = 'Type de destination';
$string['mapping_itemtype_cohort'] = 'Cohorte';
$string['mapping_itemtype_course'] = 'Cours';
$string['mapping_missingcohort'] = 'Sélectionner une cohorte pour la correspondance de cohorte.';
$string['mapping_missingcourse'] = 'Sélectionner un cours pour la cartographie des cours.';
$string['mapping_productid'] = 'Identifiant du produit WooCommerce';
$string['mapping_role'] = 'Rôle pour l\'inscription au cours';
$string['mapping_saved'] = 'Cartographie enregistrée avec succès.';
$string['mappings'] = 'Cartographies';
$string['messageprovider_syncnotification'] = 'Notifications de WP Bridge';
$string['ordernotification_body'] = 'Bonjour {$a->firstname},

Votre commande {$a->orderid} a été traitée avec succès.

Accès attribué :
{$a->items}

Vous pouvez désormais accéder à Moodle à l\'adresse suivante :
{$a->siteurl}

Cordialement,
{$a->sitename}';
$string['ordernotification_subject'] = 'Votre accès Moodle est prêt';
$string['pluginname'] = 'Kopere WP Bridge';
$string['privacy:metadata'] = 'Le plugin stocke les données de commande WooCommerce pour le traitement des inscriptions Moodle.';
$string['savechanges'] = 'Enregistrer les modifications';
$string['settings_consumerkey'] = 'Clé consommateur';
$string['settings_consumersecret'] = 'Secret consommateur';
$string['settings_debug'] = 'Mode de débogage';
$string['settings_notconfigured'] = 'La connexion n\'est pas encore configurée.';
$string['settings_section'] = 'Connexion WooCommerce';
$string['settings_statusheading'] = 'Dernier test de connexion';
$string['settings_storeurl'] = 'URL WooCommerce';
$string['settings_storeurl_desc'] = 'Exemple : https://example.com';
$string['settings_testfailed'] = 'Échec du test de connexion : {$a}';
$string['settings_testok'] = 'Le test de connexion a réussi et la vérification du webhook est terminée.';
$string['settings_webhookheading'] = 'Point de terminaison du webhook';
$string['settings_webhookheading_desc'] = 'Utiliser cette URL dans WooCommerce. Le jeton est toujours requis dans la chaîne de requête.';
$string['settings_webhookurl'] = 'URL du webhook';
$string['status_error'] = 'Erreur';
$string['status_failed'] = 'Échoué';
$string['status_ignored'] = 'Ignoré';
$string['status_ok'] = 'OK';
$string['status_pending'] = 'En attente';
$string['status_processed'] = 'Traitée';
$string['task_syncorders'] = 'Synchroniser les commandes WooCommerce terminées';
$string['wpbridge'] = 'WP Bridge';
