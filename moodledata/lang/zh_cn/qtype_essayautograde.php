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
 * Strings for component 'qtype_essayautograde', language 'zh_cn', version '4.4'.
 *
 * @package     qtype_essayautograde
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmultiplephrases'] = '再添加 {$a} 个目标短语';
$string['addpartialgrades'] = '奖励部分成绩？';
$string['addpartialgrades_help'] = '如果启用此选项，将为部分完成的成绩分段添加成绩。';
$string['addsinglephrase'] = '再添加 1 个目标词组';
$string['aiassistant'] = 'AI 助手';
$string['aiassistant_help'] = '选择要用于为学生提交生成反馈和初步成绩的 AI 评分助手（如果有）。';
$string['aiassistantnotenabled'] = '此 Moodle 站点上目前没有启用文本生成 AI 助手。请让您的 Moodle 管理员为 AI 提供程序添加设置（AI > 站点管理）';
$string['aipercent'] = 'ai分数';
$string['aipercent_help'] = '选择 AI 成绩占此问题总成绩的百分比。';
$string['aiprompt'] = 'AI 提示';
$string['aiprompt_help'] = '添加适合发送给 AI 助手的提示，以便为学生提交的作业获取反馈和成绩。';
$string['aisettings'] = 'AI 设置';
$string['allowsimilarity'] = '允许相似性？';
$string['allowsimilarity_help'] = '学生的响应与响应模板或示例响应之间允许的最大相似度。此值越高，学生的响应与模板或样本的相似度就越高。相反，值越低，学生的回答必须与模板或样本的差异越大。调整此值可能会影响学生在回答中要求的原创性和详细信息级别。';
$string['allowsimilaritypercent'] = '是 - 允许高达 {$a}% 的相似度';
$string['auto'] = '自动';
$string['autograding'] = '自动评分';
$string['bandtext'] = '对于 {$a->count} 或更多项目，奖励问题成绩的 {$a->percent}。';
$string['chars'] = '字数';
$string['charspersentence'] = '每句话的字符数';
$string['commonerror'] = '常见错误';
$string['commonerrors'] = '常见错误';
$string['commonerrors_help'] = '常见错误在与此问题相关的 “Glossary of errors” 中定义。';
$string['correctresponse'] = '要获得这道题的满分，您必须满足以下条件：';
$string['countcharslabel'] = '当前字符计数';
$string['countfileslabel'] = '当前文件计数';
$string['countparagraphslabel'] = '当前段落计数';
$string['countsentenceslabel'] = '当前句子计数';
$string['countwordslabel'] = '当前字数';
$string['enableautograde'] = '启用自动评分';
$string['enableautograde_help'] = '启用或禁用自动评分';
$string['errorbehavior'] = '错误匹配行为';
$string['errorbehavior_help'] = '这些设置优化了常见错误词汇表中条目的匹配行为。';
$string['errorcmid'] = '错误词汇表';
$string['errorcmid_help'] = '选择包含常见错误列表的 Glossary（词汇表）。

每次在作文回答中发现一个错误时，将从学生对此问题的成绩中扣除指定的处罚。';
$string['errorpercent'] = '每个错误的罚分';
$string['errorpercent_help'] = '选择应为响应中发现的每个错误扣除的总成绩百分比。';
$string['excludecommonerrors'] = '请勿在 <a href="{$a->href}" target="_blank">{$a->name}</a> 中犯任何常见错误';
$string['explanationautopercent'] = '这超出了正常的百分比范围，因此被调整为 {$a->autopercent}%。';
$string['explanationcommonerror'] = '{$a->percent}%，因为包含了 “{$a->error}”，这是一个常见错误';
$string['explanationcompleteband'] = '完成等级分段的 {$a->percent}% [{$a->gradeband}]';
$string['explanationfiles'] = '提交 {$a->filecount} / {$a->itemcount} 个文件的 {$a->percent}%';
$string['explanationfirstitems'] = '第一个 {$a->count} {$a->itemtype} {$a->percent}%';
$string['explanationgrade'] = '因此，这篇论文的计算机生成的成绩被设置为 {$a->finalgrade} = （{$a->finalpercent}{$a->maxgrade}的百分比）。';
$string['explanationitems'] = '{$a->count} {$a->itemtype} 的 {$a->percent}%';
$string['explanationmaxgrade'] = '本题的最高成绩为 {$a->maxgrade}。';
$string['explanationnotenough'] = '{$a->计数}{$a->itemtype} 小于获得等级所需的最低数量。';
$string['explanationoverride'] = '后来，{$a->datetime}，这篇文章的成绩被手动设置为 {$a->manualgrade}。';
$string['explanationpartialband'] = '{$a->percent}% 表示部分完成分段等级 [{$a->gradeband}]';
$string['explanationpenalty'] = '但是，在提交之前检查响应会扣减 {$a->penaltytext}。';
$string['explanationrawpercent'] = '本文的原始百分比等级为 {$a->rawpercent}% <br /> = {$a->details}。';
$string['explanationremainingitems'] = '剩余的 {$a->count} {$a->itemtype} {$a->percent}%';
$string['explanationseecomment'] = '（见下面的评论）';
$string['explanationtargetphrase'] = '{$a->percent} 包含短语“{$a->phrase}”';
$string['feedback'] = '反馈';
$string['feedbackhintbreaks'] = '您是否使用了太多换行符？';
$string['feedbackhintchars'] = '您是否编写了所需的字符数？';
$string['feedbackhinterrors'] = '您是否犯了任何常见错误？';
$string['feedbackhintfiles'] = '您是否附加了所需数量的文件？';
$string['feedbackhintparagraphs'] = '您写的段落数够吗？';
$string['feedbackhintphrases'] = '您是否包含了所有目标短语？';
$string['feedbackhints'] = '提高成绩的提示';
$string['feedbackhintsentences'] = '你写了所需的句子数吗？';
$string['feedbackhintwords'] = '您是否达到了字数目标？';
$string['files'] = '文件';
$string['fogindex'] = 'fogindex 指数';
$string['fogindex_help'] = 'Gunning fog index是衡量可读性的指标。其计算公式如下：

* ((每句单词数) + (每句长单词数)) x 0.4

更多信息，请参阅：<https://en.wikipedia.org/wiki/Gunning_fog_index>';
$string['forceupgrade'] = '强制升级';
$string['gradeband'] = '等级等级 [{no}]';
$string['gradeband_help'] = '指定要应用的此等级的最小可计数项目数，以及应用此等级时要授予的等级。';
$string['gradebands'] = '分段等级';
$string['gradecalculation'] = '等级计算';
$string['gradeforthisquestion'] = '本题的成绩';
$string['hidden'] = '隐藏';
$string['hidesample'] = '隐藏样本';
$string['itemcount'] = '预期项数';
$string['itemcount_help'] = '为了达到此问题的最高成绩，论文文本中必须包含的最小可计数项目数。

请注意，下面定义的等级分段（如果有）可能会使此值无效。';
$string['itemtype'] = '可计数项目的类型';
$string['itemtype_help'] = '在论文文本中选择有助于自动评分的项目类型。';
$string['lexicaldensity'] = '词汇密度';
$string['lexicaldensity_help'] = '词法密度是使用以下公式计算的百分比。

* 100 x （唯一单词数） / （总单词数）

因此，重复许多单词的文章具有较低的词汇密度，而具有许多独特单词的文章具有较高的词汇密度。';
$string['longwords'] = '长词';
$string['longwords_help'] = '“长词”是具有三个或更多音节的词。请注意，用于确定音节数的算法仅产生近似结果。';
$string['longwordspersentence'] = '每个句子的长字数';
$string['maximumfilecount'] = '最大文件数：{$a}';
$string['maximumfilesize'] = '最大文件大小：{$a}';
$string['maxwordserror'] = '哎呀，你写的字太多了！';
$string['maxwordslabel'] = '最大字数';
$string['maxwordswarning'] = '哎呀，你写的字太多了！';
$string['minimumfilecount'] = '最小文件数：{$a}';
$string['minwordserror'] = '哎呀！你写的字不够多。';
$string['minwordslabel'] = '最小字数';
$string['minwordswarning'] = '继续！你还没写够字。';
$string['missing'] = '缺失的';
$string['overflow'] = '溢出';
$string['paragraphs'] = '段落';
$string['phrasebehavior'] = '目标短语 [{no}] 行为';
$string['phrasebehavior_help'] = '这些设置优化了此目标短语的匹配行为。';
$string['phrasecasesensitiveno'] = 'Match 不区分大小写。';
$string['phrasecasesensitiveyes'] = 'Match 区分大小写。';
$string['phrasefullmatchno'] = '匹配完整或部分单词。';
$string['phrasefullmatchyes'] = '仅匹配完整单词。';
$string['phraseignorebreaksno'] = '识别换行符。';
$string['phraseignorebreaksyes'] = '忽略换行符。';
$string['phrasematch'] = '词组匹配';
$string['phrasepercent'] = '短语百分比';
$string['phrasepercentdividedby'] = '除以 {$a}';
$string['phrasepercentexactly'] = '确切地';
$string['phrasetext'] = '如果使用 {$a->phrase}，则奖励问题成绩的 {$a->percent}。';
$string['phrasetext1'] = '如果';
$string['pleaseattachfiles'] = '请附上所需数量的文件。';
$string['pleaseinputtext'] = '请在文本框中输入您的回答。';
$string['pluginname'] = '简答题（自动评分）';
$string['pluginname_help'] = '在回答可能包含图像的问题时，受访者写下一个或多个段落的答案。最初，系统会根据字符、单词、句子或段落的数量以及是否存在某些目标短语来自动授予等级。教师稍后可能会覆盖自动评分。';
$string['pluginname_link'] = 'question/type/essayautograde';
$string['pluginnameadding'] = '添加 Essay （自动评分） 问题';
$string['pluginnameediting'] = '编辑 Essay （自动评分） 题';
$string['pluginnamesummary'] = '允许将包含多个句子或段落的文章作为问题回答提交。论文会自动评分。该成绩稍后可能会被覆盖。';
$string['present'] = '目前';
$string['privacy:metadata'] = 'Essay（自动评分）问题类型插件不存储任何个人数据。';
$string['requiredfilecount'] = '所需文件数：{$a}';
$string['responseisnotoriginal'] = '请使您的文本更具原创性。';
$string['responsesample'] = '示例响应';
$string['responsesample_help'] = '如果学生单击问题文本中的“显示样本”链接，则此处的任何文本都将显示为示例响应。';
$string['responsesampleformat'] = '样本论文格式';
$string['responsesampleformat_help'] = '选择示例响应文本的格式。';
$string['rewriteresubmit'] = '并再次提交。';
$string['rewriteresubmitbreaks'] = '删除所有换行符';
$string['rewriteresubmitchars'] = '添加更多字符';
$string['rewriteresubmiterrors'] = '修复常见错误，';
$string['rewriteresubmitfiles'] = '附加所需数量的文件';
$string['rewriteresubmitparagraphs'] = '添加更多段落';
$string['rewriteresubmitphrases'] = '添加缺失的短语';
$string['rewriteresubmitsentences'] = '添加更多句子';
$string['rewriteresubmitwords'] = '添加更多单词';
$string['sentences'] = '句子数';
$string['sentencesperparagraph'] = '每段句子数';
$string['showcalculation'] = '显示成绩计算？';
$string['showcalculation_help'] = '如果启用此选项，则评分和复查页面上将显示自动生成成绩的计算说明。';
$string['showfeedback'] = '显示学生反馈？';
$string['showfeedback_help'] = '如果启用此选项，评分和复查页面上将显示一个可作的反馈表。可作的反馈是告诉学生他们需要做什么来改进的反馈。';
$string['showgradebands'] = '显示部分成绩？';
$string['showgradebands_help'] = '如果启用此选项，成绩分段的详细信息将显示在评分和复查页面上。';
$string['showsample'] = '显示示例';
$string['showtargetphrases'] = '显示目标短语？';
$string['showtargetphrases_help'] = '如果启用此选项，则目标短语的详细信息将显示在评分和复查页面上。';
$string['showtextstats'] = '显示文本统计信息？';
$string['showtextstats_help'] = '如果启用此选项，将显示有关文本的统计信息。';
$string['showtostudentsonly'] = '是，仅向学生显示';
$string['showtoteachersandstudents'] = '是的，向教师和学生展示';
$string['showtoteachersonly'] = '是，仅向教师显示';
$string['targetphrase'] = '目标短语 [{no}]';
$string['targetphrase_help'] = '指定此目标短语出现在论文中时将添加的成绩。

> **例如** 如果使用 [Finally]，则奖励 [问题成绩的 10%。

目标短语可以是单个短语，也可以是由逗号“”或单词“OR”（大写）分隔的列表短语。

> **例如** 如果使用 [Finally OR Lastly]，则奖励 [问题成绩的 10%。

短语中的问号 “？” 匹配任何单个字符，而星号 “*” 匹配任意数量的字符（包括零个字符）。

> **例如** 如果使用 [First\\*Then\\*Finally]，则奖励 [问题成绩的 50%。';
$string['targetphrases'] = 'Target 短语';
$string['textstatistics'] = '文本统计';
$string['textstatitems'] = '统计项目';
$string['textstatitems_help'] = '在此处选择您希望显示在评分和复查页面上显示的文本统计数据中的任何项目。';
$string['uniquewords'] = '唯一字';
$string['uploadfiles'] = '上传文件';
$string['visible'] = '可见';
$string['words'] = '词数';
$string['wordspersentence'] = '每句话字数';
