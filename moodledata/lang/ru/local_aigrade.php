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
 * Strings for component 'local_aigrade', language 'ru', version '4.4'.
 *
 * @package     local_aigrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ai_error'] = 'Ошибка ИИ-сервиса: {$a}';
$string['ai_name'] = 'Название ИИ-ассистента';
$string['ai_name_desc'] = 'Настройте свое название для ИИ-ассистента (например, «Оценщик» или «ИИ-профессор»). Это название будет отображаться на кнопках и во всем интерфейсе.
По умолчанию установлено «ИИ».';
$string['aigrade'] = 'Оценивание с помощью ИИ';
$string['aigrade:grade'] = 'Использовать ИИ для оценивания работ слушателей';
$string['aigrade_button'] = 'Ответы, предоставленные на оценку ИИ';
$string['aigrade_disabled'] = 'Для этой работы недоступно оценивание с помощью ИИ';
$string['aigrade_help'] = 'Для этого задания можно включить оценивание с помощью ИИ-ассистента. Необходимо загрузить PDF-файл с критериями оценки.';
$string['aigrade_instructions'] = 'Инструкции для оценивания ИИ';
$string['aigrade_instructions_desc'] = 'Инструкции для оценивания ИИ по умолчанию при оценивании работ слушателей';
$string['aigrade_instructions_help'] = 'Настройте инструкции, которые будут даны ИИ для оценивания работ. ИИ будет использовать эти инструкции вместе с загруженными критериями оценивания.';
$string['aigrade_instructions_with_rubric'] = 'Инструкции для ИИ по умолчанию (с критериями оценивания ИИ)';
$string['aigrade_instructions_with_rubric_desc'] = 'Инструкции по умолчанию используются, когда в элемент курса «Задание» загружен PDF-файл с критериями оценивания ИИ.
При включенном плагине этот текст будет скопирован в новые задания.';
$string['aigrade_instructions_with_rubric_field'] = 'Инструкции для ИИ (с загруженными критериями оценивания ИИ)';
$string['aigrade_instructions_with_rubric_field_help'] = 'Инструкции для ИИ при оценивании с использованием критериев оценивания ИИ. ИИ будет использовать эти инструкции вместе с критериями, загруженными в PDF-файле.';
$string['aigrade_instructions_without_rubric'] = 'Инструкции для ИИ по умолчанию (без критериев оценивания ИИ)';
$string['aigrade_instructions_without_rubric_desc'] = 'Инструкции по умолчанию используются, когда в элементе курса «Задание» НЕТ критериев оценивания ИИ.
В этом случае оценка ИИ будет основана на описании элемента курса «Задание».
При включенном плагине этот текст будет скопирован в новые задания.';
$string['aigrade_instructions_without_rubric_field'] = 'Инструкции для ИИ (без критериев оценивания ИИ)';
$string['aigrade_instructions_without_rubric_field_help'] = 'Инструкции для ИИ при оценивании БЕЗ использования критериев оценивания ИИ. ИИ будет использовать эти инструкции вместе с описанием элемента курса «Задание».';
$string['aigrade_rubric'] = 'Критерии оценивания ИИ';
$string['aigrade_rubric_help'] = 'Загрузите файл с критериями оценивания ИИ (в форматах PDF, TXT, DOCX или DOC), которые будут использоваться при оценивании работ студентов.';
$string['aigrade_single'] = 'Оценить этот ответ с помощью ИИ';
$string['aigrade_warning'] = 'Предупреждение об оценке с помощью ИИ';
$string['aigrade_warning_text'] = '<strong>Важно:</strong> всегда проверяйте оценки и отзывы, сгенерированные ИИ!
Лучше всего оценивание ИИ работает с текстовыми ответами. ИИ не может оценивать изображения, оформление или визуальный дизайн';
$string['assignment_instructions_label'] = 'Инструкции к элементу курса «Задание»:';
$string['back'] = 'Вернуться к работе';
$string['button_grade_bulk'] = 'Оценить все {$a}';
$string['button_grade_single'] = 'Оценить {$a}';
$string['confirm_bulk_grade'] = 'Оценить все неоцененные ответы с помощью ИИ? Это может занять какое-то время.';
$string['confirm_grade'] = 'Оценить все неоцененные ответы ({$a}) с помощью ИИ?';
$string['criteria_accuracy'] = 'Точность: Это правильная информация?';
$string['criteria_completeness'] = 'Полнота: Слушатель выполнил все требования?';
$string['criteria_presentation'] = 'Презентация: Насколько понятны содержание и структура?';
$string['criteria_quality'] = 'Качество: Насколько ответ содержательный и структурированный?';
$string['default_grading_criteria'] = 'Оценить работы, основываясь на академических критериях качества, полноты и точности.';
$string['error_invalid_action'] = 'Недопустимое действие';
$string['error_no_feedback'] = 'ИИ не предоставил отзыв.';
$string['error_server_communication'] = 'Ошибка соединения с сервером: {$a}';
$string['error_unknown'] = 'Неизвестная ошибка';
$string['error_with_message'] = 'Ошибка: {$a}';
$string['evaluation_criteria'] = 'Оценить ответ по следующим критериям:';
$string['feedback_label'] = 'Отзыв:';
$string['file_extraction_error'] = 'Не удалось извлечь текст из файла: {$a}';
$string['google_doc_access_error'] = 'Нет доступа к Google Документу. Пожалуйста, убедитесь, что документ доступен всем, у кого есть ссылка.';
$string['google_slides_access_error'] = 'Нет доступа к Google Презентации. Пожалуйста, убедитесь, что презентация доступна всем, у кого есть ссылка.';
$string['grade_label'] = 'Оценка:';
$string['grade_level'] = 'Уровень студента по шкале Lexile';
$string['grade_level_10'] = 'Уровень 10 (Lexile 1080L)';
$string['grade_level_11'] = 'Уровень 11 (Lexile 1185L)';
$string['grade_level_12'] = 'Уровень 12 (Lexile 1385L)';
$string['grade_level_3'] = 'Уровень 3 (Lexile 420L)';
$string['grade_level_4'] = 'Уровень 4 (Lexile 650L)';
$string['grade_level_5'] = 'Уровень 5 (Lexile 830L)';
$string['grade_level_6'] = 'Уровень 6 (Lexile 925L)';
$string['grade_level_7'] = 'Уровень 7 (Lexile 970L)';
$string['grade_level_8'] = 'Уровень 8 (Lexile 1010L)';
$string['grade_level_9'] = 'Уровень 9 (Lexile 1050L)';
$string['grade_level_help'] = 'Выберите уровень по шкале Lexile, к которому относятся слушатели курса. Так ИИ сможет предоставить отзыв, соответствующий возрасту слушателя, и подобрать подходящую лексику.';
$string['grading_error'] = 'Ошибка при отправке оценки: {$a}';
$string['grading_in_progress'] = 'Оценивание всех предоставленных ответов...';
$string['grading_rubric_label'] = 'Критерии оценивания ИИ:';
$string['grading_single_in_progress'] = 'Оценивание...';
$string['grading_strictness'] = 'Строгость оценивания';
$string['grading_strictness_help'] = 'Вы можете контролировать строгость оценивания работ с помощью ИИ. «Стандартная строгость» предполагает соблюдение требований, соответствующих уровню обучения. Вы можете переопределить это значение, если хотите оценить работы более строго или менее строго вне зависимости от уровня слушателя.';
$string['grading_success'] = 'Оценено ответов: {$a}';
$string['grading_with_rubric'] = 'Вы оцениваете ответ слушателя, используя предоставленные критерии оценивания ИИ.';
$string['grading_without_rubric'] = 'Вы оцениваете ответ слушателя, основываясь на требованиях к работе и общих академических стандартах.';
$string['instructions_label'] = 'Инструкции:';
$string['no_rubric'] = 'Не найдено PDF-файла с критериями оценивания ИИ. Прикрепите PDF-файл к элементу курса «Задание».';
$string['no_rubric_warning'] = 'Не найдено критериев оценивания ИИ. При оценивании ИИ будет опираться на описание элемента курса «Задание» и инструкции.';
$string['no_ungraded'] = 'Нет ответов, требующих оценки.';
$string['pdf_rubric_fallback'] = 'PDF-файл с критериями оценивания ИИ: {$a}';
$string['pluginname'] = 'Оценивание с помощью ИИ';
$string['privacy:metadata:ai_provider'] = 'Ответы слушателей отправляются в настроенный ИИ-провайдер для анализа и оценки. Данные обрабатываются внешним ИИ-сервисом, и не хранятся плагином на постоянной основе.';
$string['privacy:metadata:ai_provider:assignmentinstructions'] = 'Инструкции к работе, отправленные для понимания критериев оценивания ИИ.';
$string['privacy:metadata:ai_provider:assignmentname'] = 'Название работы, отправленное для обеспечения контекста системы оценивания ИИ.';
$string['privacy:metadata:ai_provider:gradelevel'] = 'Уровень слушателя  по шкале Lexile (3-12), указанный для того, чтобы помочь ИИ скорректировать адекватность отзыва.';
$string['privacy:metadata:ai_provider:rubric'] = 'Критерии оценивания ИИ (если загружены), отправленные для управления оцениванием с помощью ИИ.';
$string['privacy:metadata:ai_provider:submissiontext'] = 'Текстовое содержимое ответа слушателя, отправляемое для оценивания с помощью ИИ.';
$string['processing'] = 'Обработка...';
$string['rubric_parse_error'] = 'Ошибка анализа критериев оценивания ИИ в PDF-файле: {$a}';
$string['strictness_lenient'] = 'Мягкая — щедро награждает баллами';
$string['strictness_rigorous'] = 'Строгая — высокие требования';
$string['strictness_standard'] = 'Стандартная для уровня (рекомендовано)';
$string['strictness_very_lenient'] = 'Очень мягкая — вознаграждает все разумные усилия';
$string['strictness_very_rigorous'] = 'Очень строгая — стандарты уровня ВУЗа';
$string['student_submission_label'] = 'Ответ слушателя:';
$string['success_graded_count'] = 'Успешно оцененных ответов: {$a}';
$string['unsupported_file_type'] = 'Тип файла не поддерживается для оценивания с помощью ИИ: {$a}';
