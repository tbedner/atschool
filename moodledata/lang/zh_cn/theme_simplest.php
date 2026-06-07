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
 * Strings for component 'theme_simplest', language 'zh_cn', version '4.4'.
 *
 * @package     theme_simplest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundimage'] = '背景图';
$string['backgroundimage_desc'] = '作为网站背景显示的图像。您在此处上传的背景图像将覆盖主题预设文件中的背景图像。';
$string['brandcolor'] = '品牌颜色';
$string['brandcolor_desc'] = '强调色。';
$string['change_style'] = '更改主题风格';
$string['choosereadme'] = 'Theme Simplest 是 Classic 的子主题。';
$string['configtitle'] = '最简单';
$string['disableinspirationalquotes'] = '禁用引用块';
$string['disableinspirationalquotesdesc'] = '选中此框将禁用引号块';
$string['enddate'] = '结束日期';
$string['enddate_desc'] = '样式将被禁用的日期。';
$string['errordate'] = '日期错误。您必须按照 YYYY-MM-DD 格式输入日期，例如2022年3月17日。';
$string['errormonth'] = '天数错误。今年 {$a->year} 的这个月只有 {$a->days} 天。';
$string['generalsettings'] = '常规设置';
$string['inspirationalquotes'] = '励志名言';
$string['inspirationalquotesdef'] = '如果一台计算机能够欺骗人类相信它是人类，那么它就应该被称为智能计算机|en|阿兰·图灵
不愿意承认人类在这方面可能有任何对手
智力。这种情况在知识分子中和在知识分子中一样常见。
其他人：他们会失去更多。|en|艾伦·图灵”
数学推理可以被简单地视为两种设施的组合的运用，我们可以称之为直觉和独创性|en|艾伦·图灵
年轻人，在数学中你不明白事情。你只是习惯了它们|en|约翰·冯·诺依曼
数字计算机背后的想法可以这样解释：这些机器旨在执行人类计算机可以完成的任何操作。|en|阿兰·图灵
与其说我害怕人工智能，不如说我害怕天生的愚蠢。|en|joel de rosnay
到 2029 年，计算机将能够达到人类水平的阅读能力，并且也将开始具有不同的人类特征，|en|Raymond Kurzweil
人工智能比核武器危险得多。|en|埃隆·马斯克
未来 100 年内，计算机将在人工智能方面超越人类|en|斯蒂芬·霍金
成功创造人工智能将是人类历史上最大的事件，不幸的是，这也可能是最后一个事件，除非我们学会如何避免风险。|en|斯蒂芬·霍金
我想象一个人工智能将使我们工作效率更高、寿命更长、能源更清洁的世界。|en|Fei - Fei Li';
$string['inspirationalquotesdesc'] = '每个引用必须换行。<br>
尝试获取报价不要太长！
<br>此外，您可以在符号“<strong>|</strong>”后添加标签，以扩展报价以显示在特定语言和报价作者上。
<br>示例：
<br><div style="border:solid 1px #DEDEDE;background:#f8f9fa;color:#222222;padding:4px;"><pre>
<br>第一句话。<strong>|</strong>en<strong>|</strong>Joel de Rosnay
<br>第一个波兰语引言。<strong>|</strong>pl<strong>|</strong>Joel de Rosnay
<br>第二段引用，无作者。<strong>|</strong>en
<br>所有语言的报价。<strong>||</strong>Joel de Rosnay</pre></div>
<br>您的平台支持的语言：<strong> {$a} </strong>';
$string['inspirationalquotesduration'] = '静默持续时间';
$string['inspirationalquotesdurationdesc'] = '持续时间可见引号。';
$string['inspirationalquotessettings'] = '励志名言设置';
$string['limitedbydate'] = '启用受日期限制的样式';
$string['limitedbydate_desc'] = '在指定日期启用给定样式。过了这个时间，它恢复为默认样式';
$string['madeby'] = '由制成';
$string['navbardark'] = '使用深色风格的导航栏';
$string['navbardark_desc'] = '在深色和浅色之间交换页面顶部导航栏的文本和背景颜色。';
$string['othersettings'] = '其他设置';
$string['pluginname'] = '最简单';
$string['preset'] = '主题预设';
$string['preset:christmas'] = '圣诞节';
$string['preset:default'] = '默认';
$string['preset:easter'] = '复活节';
$string['preset:mourning'] = '丧';
$string['preset:spring'] = '春天';
$string['preset:valentinesday'] = '情人节';
$string['preset_desc'] = '选择一个预设来广泛改变主题的外观。';
$string['presettemporary'] = '临时风格';
$string['presettemporary_desc'] = '选择要在给定时间段内设置的样式。';
$string['privacy:metadata'] = '最简单的主题不存储任何个人数据。';
$string['rawscss'] = '原始SCSS';
$string['rawscss_desc'] = '使用此字段提供将在样式表末尾注入的 SCSS 或 CSS 代码。';
$string['rawscsspre'] = '原始初始 SCSS';
$string['rawscsspre_desc'] = '在此字段中，您可以提供初始化 SCSS 代码，它将在其他所有内容之前注入。大多数时候您将使用此设置来定义变量。';
$string['redir'] = '重定向到课程';
$string['redir_desc'] = '如果用户只注册了一门课程，则立即重定向到课程。';
$string['region-side-post'] = '正确的';
$string['region-side-pre'] = '左边';
$string['settingsother'] = '其他设置：';
$string['settingspresettemporary'] = '预设临时设置：';
$string['simpleusermenu'] = '简化用户菜单';
$string['simpleusermenu_desc'] = '隐藏仪表板和个人资料链接。添加更改密码的链接。';
$string['startdate'] = '开始日期';
$string['startdate_desc'] = '启用样式的日期。';
