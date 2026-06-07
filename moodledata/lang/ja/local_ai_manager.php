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
 * Strings for component 'local_ai_manager', language 'ja', version '4.4'.
 *
 * @package     local_ai_manager
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinstance'] = 'AIツールを追加する';
$string['addnavigationentry'] = 'ナビゲーションエントリを追加する';
$string['addnavigationentrydesc'] = '主ナビゲーションからAIマネージャ設定にアクセスできるようにする場合は有効にしてください。';
$string['ai_info_table_row_highlighted'] = 'ハイライトされているAIツールはあなたがこのページへのリンククリック時点で使用していたプラグインで使用されていたものです。';
$string['ai_manager:manage'] = 'テナントのAIマネージャを設定する';
$string['ai_manager:managetenants'] = 'すべてのテナントのAIマネージャを設定する';
$string['ai_manager:managevertexcache'] = 'Google Vertex AIのキャッシュステータスを取得および設定変更する';
$string['ai_manager:use'] = 'ai_managerを使用する';
$string['ai_manager:viewprompts'] = 'ユーザのプロンプトを表示する';
$string['ai_manager:viewpromptsdates'] = 'ユーザのプロンプトのタイムスタンプを表示する';
$string['ai_manager:viewstatistics'] = '統計を表示する';
$string['ai_manager:viewtenantprompts'] = 'テナントコンテクスト (コース外) で使用されたユーザのプロンプトを表示する';
$string['ai_manager:viewusage'] = '利用情報を表示する';
$string['ai_manager:viewusernames'] = '統計で匿名化されていないユーザ名を表示する';
$string['ai_manager:viewuserstatistics'] = '単一ユーザの統計を表示する';
$string['aiadministrationlink'] = 'AIツール管理';
$string['aicourseeditheader'] = 'AI機能';
$string['aiinfotitle'] = 'あなたのテナントのAIツール';
$string['aiisbeingused'] = 'あなたはAIツールを使用しています。入力されたデータは外部AIツールに送信されます。';
$string['aipurposeplugins'] = 'AI活用プラグイン';
$string['airesponse'] = 'AIレスポンス';
$string['aitool'] = 'AIツール';
$string['aitooldeleted'] = 'AIツールが削除されました。';
$string['aitoolplugins'] = 'AIツールプラグイン';
$string['aitoolsaved'] = 'AIツールデータが保存されました。';
$string['aiwarning'] = 'AI生成コンテンツは常に検証されるべきです。';
$string['aiwarningurl'] = 'AI生成コンテンツに関する警告へのリンク';
$string['aiwarningurldesc'] = 'あなたはAI生成コンテンツの問題に関する追加情報を含むURLを指定できます。';
$string['allowedtenants'] = '許可されるテナント';
$string['allowedtenantsdesc'] = '許可されるテナントのリストを指定してください: 1行に1識別子';
$string['alltime'] = 'すべてのプロンプト';
$string['anonymized'] = '匿名化済み';
$string['apikey'] = 'APIキー';
$string['applyfilter'] = 'フィルタを適用する';
$string['assignpurposes'] = '目的を割り当てる';
$string['assignrole'] = 'ロールを割り当てる';
$string['basicsettings'] = '基本設定';
$string['basicsettingsdesc'] = 'AIマネージャプラグイン基本設定';
$string['cachedef_googleauth'] = 'Google OAuth2アクセストークンのキャッシュ';
$string['changeconfirmstate'] = '利用規約の変更確認';
$string['changelockstate'] = 'ロックステータスを変更する';
$string['changescope'] = '利用範囲を変更する';
$string['choosecontext'] = 'ユーザに表示するコンテクストを選択する';
$string['configure_instance'] = 'AIツールインスタンスを設定する';
$string['configureaitool'] = 'AIツールを設定する';
$string['configurepurposes'] = '目的を設定する';
$string['confirm'] = '確認';
$string['confirmaitoolsusage_heading'] = 'AI機能の利用';
$string['confirmationstatuschanged'] = 'あなたの確認ステータスが保存されました。';
$string['confirmed'] = '承認済み';
$string['confirmtermsofuse'] = '私は利用規約に同意します。';
$string['consentdataprocessing'] = '私はデータ処理に同意します。';
$string['context'] = 'コース/活動';
$string['contextdeleted'] = 'すでに削除済み';
$string['currentlyusedaitools'] = '現在設定済みのAIツール';
$string['dataprocessingsetting'] = 'データ処理同意';
$string['dataprocessingsettingdesc'] = 'ここであなたはAIマネージャを使用する際のデータ処理に対する同意を追加できます。';
$string['defaultrole'] = 'デフォルトロール';
$string['defaulttenantname'] = 'デフォルトテナント';
$string['empty_api_key'] = '空のAPIキー';
$string['enable_ai_integration'] = 'AI統合を有効にする';
$string['endpoint'] = 'APIエンドポイント';
$string['error_confirmtermsofuse'] = 'あなたは利用規約を承認する必要があります。';
$string['error_consentdataprocessing'] = 'あなたはデータ処理に同意する必要があります。';
$string['error_http400'] = '渡されたオプションのサニタイズ中にエラーが発生しました。';
$string['error_http400contextmissing'] = 'コンテクストが欠けています。';
$string['error_http403blocked'] = 'あなたのテナントマネージャがAIツールへのアクセスをブロックしています。';
$string['error_http403coursesonly'] = 'あなたにはコース外でのAIツール使用のパーミッションがありません。';
$string['error_http403disabled'] = 'あなたのテナントマネージャがAIツール機能を有効にしていません。';
$string['error_http403nocapability'] = 'あなたにはAIマネージャを使用するケイパビリティ (local/ai_manager:use) がありません。';
$string['error_http403notconfirmed'] = 'あなたはまだ利用規約を承認していません。';
$string['error_http403usertype'] = 'あなたのテナントマネージャはあなたのユーザタイプに対してこの目的を無効にしています。';
$string['error_http409'] = 'アイテムID {$a} は既に取得されています。';
$string['error_http429'] = 'あなたのリクエスト数が上限に達しました。あなたは {$a->period} の間に {$a->count} リクエストの送信のみ許可されます。';
$string['error_limitreached'] = 'あなたのこの目的に対するリクエスト数が上限に達しました。カウンタがリセットされるまでお待ちください。';
$string['error_noaitoolassignedforpurpose'] = 'この目的「 {$a} 」に割り当てられたAIツールはありません。';
$string['error_pleaseconfirm'] = 'ご利用の前に承諾してください。';
$string['error_purposenotconfigured'] = 'この目的のために設定されたAIツールはありません。テナントマネージャにご連絡ください。';
$string['error_revokebothconfirmations'] = 'あなたは利用規約承認およびデータ処理同意の一方だけの取り消しはできません。';
$string['error_sendingrequestfailed'] = 'AIツールへのリクエスト送信に失敗しました。';
$string['error_tenantdisabled'] = 'あなたのテナントではAIツールが有効にされていません。あなたのテナントマネージャにご連絡ください。';
$string['error_unavailable_noselection'] = 'このツールはテキストが選択されている場合のみ使用できます。';
$string['error_unavailable_selection'] = 'このツールはテキストが選択されていない場合のみ使用できます。';
$string['error_userlocked'] = 'あなたのユーザはテナントマネージャによってロックされました。';
$string['error_usernotconfirmed'] = 'あなたはまだ利用規約を承認していません。';
$string['error_vertexai_serviceaccountjsonempty'] = 'あなたはサービスアカウント作成時にダウンロードしたJSONファイルのコンテンツをGoogle Cloudコンソールに貼り付ける必要があります。';
$string['error_vertexai_serviceaccountjsoninvalid'] = '無効なフォーマットです。有効なJSONにする必要があります。';
$string['error_vertexai_serviceaccountjsoninvalidmissing'] = '無効なフォーマットです。エントリ「 {$a} 」がありません。';
$string['exception_badmessageformat'] = 'メッセージが無効なフォーマットで送信されました。';
$string['exception_changestatusnotallowed'] = 'あなたはこのユーザのステータスを変更すべきではありません。';
$string['exception_curl'] = '外部APIエンドポイントへの接続エラーが発生しました。';
$string['exception_curl28'] = 'APIがあなたのリクエスト処理に時間を要し過ぎたか、合理的な時間内に到達できませんでした。';
$string['exception_default'] = 'AIツールへのリクエスト送信中に一般的なエラーが発生しました。';
$string['exception_editinstancedenied'] = 'あなたはこのAIツール (インスタンス) を編集できません。';
$string['exception_http401'] = '認証情報が無効であるため、APIへのアクセスが拒否されました。';
$string['exception_http429'] = '一定時間内にAIツールに送信されたリクエストが多過ぎるか、大き過ぎます。後でもう一度お試しください。';
$string['exception_http500'] = 'AIツールの内部サーバエラーが発生しました。';
$string['exception_instanceidmissing'] = 'あなたはAIツール (インスタンス) のIDを指定する必要があります。';
$string['exception_instancenotexists'] = 'ID {$a} のAIツール (インスタンス) は存在しません。';
$string['exception_invalidpurpose'] = '無効な目的です。';
$string['exception_notenantmanagerrights'] = 'あなたにはAIツールを管理する権限がありません。';
$string['exception_novalidconnector'] = '有効なコネクタが指定されていません。';
$string['exception_retrievingaccesstoken'] = 'アクセストークン取得中にエラーが発生しました。';
$string['exception_retrievingcachestatus'] = 'キャッシュステータス取得中にエラーが発生しました。';
$string['exception_tenantaccessdenied'] = 'あなたはこのテナント ({$a}) にアクセスしてはいけません。';
$string['exception_tenantnotallowed'] = 'テナントは管理者によって許可されていません。';
$string['exception_usernotexists'] = 'ユーザが存在しません。';
$string['executeaction'] = 'アクションを実行する';
$string['executebulkuseractions'] = '選択されたユーザに対してアクションを実行する';
$string['female'] = '女性';
$string['filterroles'] = 'ロールをフィルタする';
$string['formvalidation_editinstance_azureapiversion'] = 'あなたのAzureリソースのAPIバージョンを指定する必要があります。';
$string['formvalidation_editinstance_azuredeploymentid'] = 'あなたのAzureリソースのデプロイメントIDを指定する必要があります。';
$string['formvalidation_editinstance_azureresourcename'] = 'あなたのAzureリソースのリソース名を提供する必要があります';
$string['formvalidation_editinstance_endpointnossl'] = 'セキュリティおよびデータプライバシー上の理由から、HTTPSエンドポイントのみ許可されています。';
$string['formvalidation_editinstance_name'] = 'AIツール名を入力してください。';
$string['formvalidation_editinstance_temperaturerange'] = '温度値は0から1の間にする必要があります。';
$string['general_information_heading'] = '一般情報';
$string['general_information_text'] = '現在のところ、あなたのmoodleインスタンスはAIツールを提供していません。しかし、moodleインスタンスはAIツールをmoodleインスタンス内で使用するためのインタフェースを提供します。これをテナントすべてのユーザに可能にするためにはテナントがそのようなツールを取得するか、提供する必要があります。テナントマネージャは設定ページでアクセスデータを保存して、moodleインスタンスで提供されるAI機能を有効にできます。';
$string['general_user_settings'] = '一般ユーザ設定';
$string['get_ai_response_failed'] = 'AIレスポンス取得に失敗しました。';
$string['get_ai_response_failed_desc'] = '外部AIツールのエンドポイントからの結果取得中にエラーが発生しました。';
$string['get_ai_response_succeeded'] = '正常にAIレスポンスを受信しました。';
$string['get_ai_response_succeeded_desc'] = '外部AIツールのエンドポイントから正常にレスポンスを取得しました。';
$string['heading_home'] = 'AIツール';
$string['heading_purposes'] = '目的';
$string['heading_statistics'] = '統計';
$string['infolink'] = '詳細情報へのリンク';
$string['instanceaddmodal_heading'] = 'どのAIツールを追加しますか?';
$string['instancedeleteconfirm'] = '本当にこのAIツールを削除してもよろしいですか?';
$string['instancename'] = '内部識別子';
$string['landscape'] = 'ランドスケープ';
$string['large'] = '大';
$string['lastday'] = '過去24時間';
$string['lastmonth'] = '過去30日間';
$string['lastweek'] = '過去7日間';
$string['legalroles'] = '合法的に確認できるロール';
$string['legalrolesdesc'] = '利用規約を法的に確認できるユーザのロールを選択してください。選択されたロールを持つユーザには「termsofuse」の代わりに「termsofuselegal」の内容が表示されます。また「dataprocessing」設定でデータ処理に同意する必要があります。';
$string['lock'] = 'ロック';
$string['locked'] = 'ロック済み';
$string['male'] = '男性';
$string['max_request_time_window'] = '最大リクエスト数の時間ウィンドウ';
$string['max_requests_purpose'] = '時間ウィンドウあたりの最大リクエスト数 ({$a})';
$string['max_requests_purpose_heading'] = '目的 {$a}';
$string['medium'] = '中';
$string['model'] = 'モデル';
$string['namepattern'] = '氏名';
$string['nodata'] = '表示するデータはありません。';
$string['noprompts'] = '表示するプロンプトはありません。';
$string['notconfirmed'] = '未承認';
$string['notselected'] = '無効';
$string['per'] = 'ごと';
$string['pluginname'] = 'AIマネージャ';
$string['portrait'] = 'ポートレート';
$string['preconfiguredmodel'] = '事前設定モデル';
$string['privacy:metadata'] = 'ローカルai_managerプラグインはいかなる個人データも保存しません。';
$string['privacy_table_description'] = '以下のテーブルではあなたの教育機関が設定したAIツールの概要を閲覧できます。あなたのテナントマネージャが各AIツールの利用規約およびプライバシーに関する注意事項を「情報リンク」欄に記載している場合があります。';
$string['privacy_terms_description'] = '以下はデータプライバシーおよび利用規約に関する注意事項です。これはあなたがAI機能を使用するために承認済み、または現在も承認しなければならないものと同一形式です。';
$string['privacy_terms_heading'] = 'プライバシーおよび利用規約';
$string['privacy_terms_missing'] = '利用規約は定められていません。';
$string['privacy_terms_missing_enable_anyway'] = '承認する必要のある追加利用規約はありません。あなたのアカウントのAIツールを有効化を承認してください。';
$string['privilegedroles'] = '特別ロール';
$string['privilegedrolesdesc'] = 'システムコンテクスト上でこれらのロールを持つユーザのプロンプトはテナントマネージャを含む他のユーザには表示できません。さらにこれらのロールを持つユーザの氏名はユーザ統計で匿名化されます。';
$string['prompt'] = 'プロンプト';
$string['promptcompletitionfilesnotavailable'] = '生成されたファイルはプロンプトビューでは利用できません。';
$string['promptsmodalheading'] = 'コンテクスト {$a->contextDisplayName} 内のユーザ {$a->userDisplayName} に対するプロンプトおよび完了です。';
$string['purpose'] = '目的';
$string['purposesdescription'] = 'あなたの設定済みAIツールのうち、どのツールをどの目的に使用しますか?';
$string['purposesheading'] = '{$a->role} ({$a->currentcount}/{$a->maxcount} assigned) の目的';
$string['quotaconfig'] = '制限設定';
$string['quotadescription'] = 'ここで時間ウィンドウおよび学生・教師ごとの最大リクエスト数を設定してください。時間ウィンドウが終了した場合、リクエスト数は自動的にリセットされます。';
$string['request_count'] = 'リクエスト数';
$string['requesttimeout'] = 'AIエンドポイントに対するリクエストのタイムアウト';
$string['requesttimeoutdesc'] = '外部AIエンドポイントへのリクエストの最大時間 (秒) です。';
$string['resetfilter'] = 'フィルタをリセットする';
$string['resetuserusagetask'] = 'AIマネージャのユーザ利用データをリセットする';
$string['restricttenants'] = '特定のテナントへのアクセスをロックする';
$string['restricttenantsdesc'] = '「allowedtenants」設定オプションで定義できる特定のテナントにAIツールを制限できるようにします。';
$string['revokeconfirmation'] = '承認を取り消す';
$string['rightsconfig'] = '権利設定';
$string['role'] = 'ロール';
$string['role_basic'] = 'ベースロール';
$string['role_extended'] = '拡張ロール';
$string['role_unlimited'] = '無制限ロール';
$string['scope'] = '利用範囲';
$string['scope_courses'] = 'コース内のみ';
$string['scope_everywhere'] = 'どこでも';
$string['select_tool_for_purpose'] = '目的 {$a}';
$string['selecteduserscount'] = '{$a} 選択済み';
$string['serviceaccountjson'] = 'GoogleサービスアカウントのJSONファイルのコンテンツ';
$string['small'] = '小';
$string['squared'] = '四角形';
$string['statistics_for'] = '{$a} の統計';
$string['statisticsoverview'] = 'グローバル概要';
$string['subpluginspageheading'] = 'AIマネージャサブプラグイン';
$string['subplugintype_aipurpose'] = 'AI目的';
$string['subplugintype_aipurpose_plural'] = 'AI目的';
$string['subplugintype_aitool'] = 'AIツール';
$string['subplugintype_aitool_plural'] = 'AIツール';
$string['table_heading_infolink'] = '情報リンク';
$string['table_heading_instance_name'] = 'AIツール名';
$string['table_heading_model'] = 'モデル';
$string['table_heading_purpose'] = '目的';
$string['technical_function_heading'] = '技術機能';
$string['technical_function_step1'] = 'テナントマネージャは特定の目的のために設定を保存します。例えばテナントがOpenAIと契約しているため、Dall-Eツールを使用できるように画像生成オプションを設定します。';
$string['technical_function_step2'] = 'このテナントのユーザはmoodleインスタンスで対応するAI機能、例えばエディタで直接プロンプトを介して画像を生成およびエディタに挿入する機能を利用できます。';
$string['technical_function_step3'] = 'ユーザがこの関数を使用した場合、プロンプトはmoodleインスタンスのサーバに送信された上でサーバに評価されます。';
$string['technical_function_step4'] = 'moodleインスタンスのサーバはテナントのAIツールの保存されたアクセスデータを使用します。そしてユーザの代わりに外部AIツールのサーバにリクエストを送信します。';
$string['technical_function_step4_emphasized'] = 'このプロセスではmoodleインスタンスは外部ツールのエンドユーザとして動作します。つまり、外部ツールはどのユーザがAIツールに対応するリクエストを送信したか追跡できません。ユーザが属するテナントのみAIツールに対して識別可能です。';
$string['technical_function_step5'] = 'AIツールからのレスポンスはmoodleインスタンスによりユーザに返送されるか、または生成された画像等の結果はそれぞれの活動に直接統合されます。';
$string['technical_function_text'] = 'このmoodleインスタンス内でAI機能を使用する場合、技術的なプロセスは次のとおりです:';
$string['temperature_creative_balanced'] = 'バランスのとれた';
$string['temperature_custom_value'] = 'カスタム値（0から1の間）';
$string['temperature_defaultsetting'] = '温度デフォルト';
$string['temperature_desc'] = 'これは「ランダム性」または「創造性」を表します。温度が低い場合、より首尾一貫的であり予測可能なテキストが生成されます。高い数値はより創造的ではあるものの、正確ではないことを意味します。範囲は0から1までです。';
$string['temperature_more_creative'] = 'かなり創造的';
$string['temperature_more_precise'] = 'かなり正確';
$string['temperature_use_custom_value'] = 'カスタムテンプレート値を使用する';
$string['tenant'] = 'テナント';
$string['tenantcolumn'] = 'テナントカラム';
$string['tenantcolumndesc'] = 'ユーザが関連付けられるべきテナントの識別子を含むユーザテーブルのカラムです。';
$string['tenantconfig_heading'] = 'あなたのテナントのAI';
$string['tenantdisabled'] = '無効';
$string['tenantenabled'] = '有効';
$string['tenantenabledescription'] = 'テナントユーザがmoodleインスタンスのすべてのAI機能にアクセスできるようにする場合、あなたはここで機能を有効化および設定する必要があります。';
$string['tenantenablednextsteps'] = 'moodleインスタンスのAI機能があなたのテナントで有効にされました。あなたが機能を実際に使用するためにはツールおよび目的を定義する必要があることに留意してください。
<br>
すべてのユーザがAI機能にアクセスできます。しかし、あなたは {$a} でユーザを無効にできます。';
$string['tenantenableheading'] = 'あなたのテナントでのAIツール';
$string['tenantnotallowed'] = 'この機能はあなたのテナントでグローバルに無効にされているため、使用できません。';
$string['termsofuselegalsetting'] = '利用規約 (法的関連性を含む)';
$string['termsofuselegalsettingdesc'] = 'ここであなたはAIマネージャに対する特定の利用規約を追加できます。「termsofuse」設定と比較した場合、これらの設定にはユーザが法的に受け入れられる利用規約が含まれているはずです。これは「rollslegal」設定でロールが選択されているユーザにのみ表示されます。もし空の場合、「termsofuse 」設定が使用されます。';
$string['termsofusesetting'] = '利用規約';
$string['termsofusesettingdesc'] = 'ここであなたはAIマネージャーに対する特定の利用規約を追加できます。AIツールを使用する前にこの利用規約を承認する必要があります。';
$string['unconfirmed'] = '未承認';
$string['unit_count'] = 'リクエスト';
$string['unit_token'] = 'トークン';
$string['unlock'] = 'ロック解除';
$string['unlockaitools'] = '私のアカウントでのAIツールのロック解除を希望します。';
$string['updatelist'] = 'リストを更新する';
$string['usage'] = '利用';
$string['use_openai_by_azure_apiversion'] = 'AzureリソースのAPIバージョン';
$string['use_openai_by_azure_deploymentid'] = 'AzureリソースのデプロイメントID';
$string['use_openai_by_azure_heading'] = 'Azure経由でOpenAIを利用する';
$string['use_openai_by_azure_name'] = 'Azureリソース名';
$string['userconfig'] = 'ユーザ設定';
$string['userconfirmation_headline'] = 'AIツールの利用確認';
$string['userstatistics'] = 'ユーザ概要';
$string['userstatusupdated'] = 'ユーザステータスが更新されました。';
$string['userwithusageonlyshown'] = 'このテーブルにはすでにこの目的を利用したユーザのみ表示されています。';
$string['verifyssl'] = 'SSL証明書を検証する';
$string['verifyssldesc'] = 'この設定を有効にした場合、証明書が適切に検証できる場合のみ、AIツールへの接続が確立されます。開発用途の場合のみ無効化を推奨します!';
$string['vertex_cachingdisabled'] = 'キャッシング無効';
$string['vertex_cachingenabled'] = 'キャッシング有効';
$string['vertex_disablecaching'] = 'キャッシングを無効にする';
$string['vertex_enablecaching'] = 'キャッシングを有効にする';
$string['vertex_error_cachestatus'] = 'Vertex AIキャッシング設定の照会/更新中にエラーが発生しました。';
$string['vertex_nocachestatus'] = '現在のVertex AIキャッシュステータスを照会するには更新ボタンをクリックしてください。';
$string['vertexcachestatus'] = 'Vertex AIキャッシュステータスを照会および変更する';
$string['viewprompts'] = 'プロンプトを表示する';
$string['within'] = '範囲内';
