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
 * Strings for component 'childcourse', language 'fr', version '4.4'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = 'Inscription automatique à l’accès';
$string['autoenrol_help'] = 'Si activé, le plugin inscrira automatiquement l’utilisateur dans le cours enfant lorsqu\'il l’ouvrira via cette activité. Les inscriptions sont créées à l\'aide d\'une instance d’inscription manuelle dédiée afin qu\'elles puissent être suivies et réversibles plus tard (selon la politique de suppression). Si désactivé, le plugin n’essaiera pas d’inscrire les utilisateurs automatiquement.';
$string['childcourse'] = 'Cours enfant';
$string['childcourse:addinstance'] = 'Ajouter une nouvelle activité de cours enfant';
$string['childcourse:manage'] = 'Gérer les paramètres du cours enfant';
$string['childcourse:sync'] = 'Synchroniser les notes et l’achèvement du cours enfant';
$string['childcourse:view'] = 'Voir l’activité du cours enfant';
$string['childcourse_help'] = 'Sélectionnez le cours qui sera lié à cette activité. Ce choix contrôle tous les paramètres spécifiques à la règle (groupes, règles d’achèvement, sélecteurs d’activités, synchronisation des notes). Une fois l’activité enregistrée, le cours enfant devient immuable afin de maintenir la cohérence des mappages et de l’historique de synchronisation.';
$string['childcoursenotset'] = 'Le cours enfant n’a pas été défini.';
$string['completionmissing'] = 'L’achèvement du cours enfant n’est pas activé.';
$string['completionrule'] = 'Règle d’achèvement basée sur le cours enfant';
$string['completionrule_allactivities'] = 'Terminer lorsque 100% des activités suivies sont terminées';
$string['completionrule_coursecompleted'] = 'Terminer lorsque le cours enfant est terminé';
$string['completionrule_help'] = 'Définit comment cette activité est automatiquement marquée comme terminée en fonction de la progression de l’utilisateur dans le cours enfant.

- **Ne rien faire :** l’achèvement de cette activité n’a aucune relation avec l’achèvement du cours enfant.
- **Lorsque le cours enfant est terminé :** dès que le cours enfant est terminé, cette activité l’est aussi.
- **Lorsque 100% des activités suivies sont terminées :** toutes les activités du cours enfant dont le suivi de l’achèvement est activé doivent être terminées pour que cette activité soit terminée.';
$string['completionrule_none'] = 'Ne rien faire';
$string['enrolinstancename'] = 'Lien du cours enfant #{$a}';
$string['error_manualenrolnotavailable'] = 'Le plugin d’inscription manuelle n’est pas disponible.';
$string['grade_approval'] = 'Envoyer la note depuis';
$string['grade_approval_no'] = 'Ne pas envoyer la note';
$string['grade_approval_yes'] = 'Utiliser la note du cours enfant';
$string['gradebookmissing'] = 'Le carnet de notes du cours enfant n’est pas configuré (le total du cours est manquant).';
$string['hideinmycourses'] = 'Masquer le cours enfant dans Mes cours';
$string['hideinmycourses_help'] = 'Si activé, les utilisateurs inscrits par cette activité verront le cours enfant caché dans le menu « Mes cours ». Cela aide à imposer la navigation à travers ce cours. Ce réglage n’affecte que les utilisateurs inscrits par ce plugin (suivi par le plugin).';
$string['inheritgroups'] = 'Hériter des groupes du cours parent';
$string['inheritgroups_help'] = 'Si activé, le plugin essaiera de répliquer les adhésions aux groupes de l’utilisateur du cours parent vers le cours enfant, en les faisant correspondre par les noms de groupes. Si un nom de groupe n’existe pas dans le cours enfant, il peut être créé. Cela s’applique lors de l’auto-inscription. Ce n’est pas une synchronisation continue à moins que vous implémentiez plus tard une routine de ré-synchronisation dédiée.';
$string['keeprole_help'] = 'Si activé, le plugin essaiera de maintenir une parité de rôle simplifiée : les utilisateurs avec des capacités de niveau enseignant dans le cours parent seront inscrits comme enseignant (editingteacher/teacher lorsque disponibles) ; sinon, comme estudante.';
$string['label_childcourse'] = 'Cours enfant';
$string['label_lastsynccompletion'] = 'Dernière synchronisation de l’achèvement';
$string['label_lastsyncgrade'] = 'Dernière synchronisation des notes';
$string['lastsync'] = 'Dernière synchronisation';
$string['lockedcoursewarning'] = 'Le cours enfant ne peut pas être modifié après l’enregistrement.';
$string['manage_header_actions'] = 'Actions';
$string['manage_header_name'] = 'Nom';
$string['missingcourse'] = 'Cours manquant';
$string['modulename'] = 'Cours enfant';
$string['modulenameplural'] = 'Cours enfants';
$string['never'] = 'Jamais';
$string['nogroup'] = 'Aucun groupe';
$string['openchildcourse'] = 'Ouvrir le cours enfant';
$string['opennewtab'] = 'Ouvrir dans un nouvel onglet';
$string['opennewtab_help'] = 'Si activé, le bouton ouvrira le cours enfant dans un nouvel onglet. Cela ne modifie pas l\'inscription ou le comportement de synchronisation, seulement la manière dont le cours est ouvert pour l\'utilisateur.';
$string['pluginadministration'] = 'Administration du cours enfant';
$string['pluginname'] = 'Cours enfant';
$string['privacy:metadata:childcourse_map'] = 'Stocke les données de correspondance créées par l\'activité du cours lié afin de permettre une désinscription sûre et un audit.';
$string['privacy:metadata:childcourse_map:childcourseid'] = 'L\'ID du cours enfant lié.';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = 'L\'ID de l\'instance d\'activité du cours lié.';
$string['privacy:metadata:childcourse_map:groupidsjson'] = 'La liste des IDs de groupes du cours enfant attribués par le plugin (JSON).';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = 'Indique si le plugin a défini la préférence pour masquer le cours enfant dans Mes cours.';
$string['privacy:metadata:childcourse_map:manualenrolid'] = 'L\'ID de l\'inscription utilisée par le plugin pour inscrire l\'utilisateur.';
$string['privacy:metadata:childcourse_map:parentcourseid'] = 'L\'ID du cours parent où l\'activité existe.';
$string['privacy:metadata:childcourse_map:roleid'] = 'L\'ID du papel assigné par le plugin dans le cours enfant.';
$string['privacy:metadata:childcourse_map:timeenrolled'] = 'L\'heure à laquelle l\'utilisateur a été inscrit via le lien.';
$string['privacy:metadata:childcourse_map:timemodified'] = 'L\'heure de la dernière modification de l\'enregistrement de correspondance.';
$string['privacy:metadata:childcourse_map:userid'] = 'L\'ID de l\'utilisateur inscrit via le lien.';
$string['privacy:metadata:childcourse_state'] = 'Stocke l\'état en cache par utilisateur pour prendre en charge la synchronisation incrémentielle des notes et des achèvements.';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = 'L\'ID de l\'instance d\'activité du cours lié.';
$string['privacy:metadata:childcourse_state:coursecompleted'] = 'Indicateur mis en cache indiquant si la règle d\'achèvement a été satisfaite pour l\'utilisateur.';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = 'Horodatage de la dernière modification des données d\'achèvement source pour la synchronisation incrémentielle.';
$string['privacy:metadata:childcourse_state:finalgrade'] = 'Note mise en cache (pourcentage) synchronisée à partir du total du cours enfant.';
$string['privacy:metadata:childcourse_state:grade_source'] = 'Identifiant de la source de la note (par exemple course_total).';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = 'Horodatage de la dernière modification de l\'élément de note source pour la synchronisation incrémentielle.';
$string['privacy:metadata:childcourse_state:timemodified'] = 'L\'heure de la dernière modification de la ligne d\'état mise en cache.';
$string['privacy:metadata:childcourse_state:userid'] = 'L\'ID de l\'utilisateur.';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = 'Une préférence utilisateur utilisée pour masquer un cours enfant dans Mes cours (nom de préférence par défaut : block_myoverview_hidden_course_{courseid}).';
$string['settings_heading'] = 'Paramètres du cours enfant';
$string['syncdone'] = 'Synchronisation terminée.';
$string['syncnow'] = 'Synchroniser maintenant';
$string['targetgroup'] = 'Inscrire dans le groupe';
$string['targetgroup_help'] = 'Si sélectionné, l\'utilisateur sera ajouté à ce groupe spécifique dans le cours enfant au moment de l\'auto-inscription. Le groupe doit exister dans le cours enfant. Si « Hériter des groupes du cours parent » est également activé, les deux comportements s\'appliquent (le groupe sélectionné et les groupes hérités).';
$string['unenrolaction'] = 'Lorsque le lien est supprimé.';
$string['unenrolaction_help'] = 'Contrôle ce qui arrive aux inscriptions créées par cette activité lorsque l\'activité liée est supprimée. « Désinscrire » (Unenrol) n\'enlèvera que les inscriptions qui ont été créées par cette activité (suivies dans la table de correspondance). « Conserver les inscriptions » (Keep enrolments) laissera les utilisateurs inscrits dans le cours enfant.';
$string['unenrolaction_keep'] = 'Conserver les inscriptions';
$string['unenrolaction_unenrol'] = 'Désinscrire les utilisateurs inscrits via ce lien.';
