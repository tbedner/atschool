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
 * Strings for component 'paygw_stripe', language 'ja', version '4.4'.
 *
 * @package     paygw_stripe
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowpromotioncodes'] = 'プロモーションコードを許可する';
$string['anchoredbilling'] = '固定請求日をサブスクリプションインターバルの開始日として使用する';
$string['anchoredbilling_help'] = '例：月額プランの場合、請求は毎月1日に行われます。ユーザーが月の途中で加入した場合、登録日から月末までの日割り計算で課金されます。
※一般的なサブスクにしたい（購入日を開始日として指定したインターバル日数を保ち、次回請求日を翌月の同日とする）場合はこのチェックを外してください。';
$string['apikey'] = 'APIキー';
$string['apikey_help'] = 'Stripeの識別に使用するAPIキーです';
$string['cancel'] = 'キャンセル';
$string['cancelsubscription'] = 'サブスクリプションをキャンセルする';
$string['cancelsubscriptionconfirm'] = '本当にこのサブスクリプションをキャンセルしてもよろしいですか？';
$string['cancelsubscriptions'] = 'サブスクリプションの登録を変更する';
$string['customerdescription'] = 'Moodle User ID: {$a}';
$string['customsubscriptioninterval'] = 'カスタムのサブスクリプションピリオド';
$string['customsubscriptioninterval:day'] = '日';
$string['customsubscriptioninterval:month'] = '月';
$string['customsubscriptioninterval:week'] = '週';
$string['customsubscriptioninterval:year'] = '年';
$string['customsubscriptionintervalcount'] = 'サブスクリプションの期間をカスタムする';
$string['customsubscriptionintervalcount_help'] = 'サブスクリプションの期間を自由に設定できます。';
$string['defaulttaxbehavior'] = 'デフォルトの税';
$string['defaulttaxbehavior_help'] = '税金のデフォルト設定（税込、税抜）。Stripeダッシュボードで変更可能です。';
$string['enableautomatictax'] = '自動課税を有効にする';
$string['enableautomatictax_desc'] = '自動課税は、Stripeダッシュボードで有効にして設定する必要があります。';
$string['failedtosetdefaultpaymentmethod'] = 'サブスクリプションの支払い方法の設定に失敗しました。もう一度お試しください。';
$string['fee'] = '金額';
$string['gatewaydescription'] = 'Stripeは、クレジットカード取引を処理するための公認決済ゲートウェイプロバイダーです。';
$string['gatewayname'] = 'Stripe';
$string['messageprovider:payment_failed'] = '支払遅延の通知に失敗しました';
$string['messageprovider:payment_successful'] = '支払遅延確認通知に成功しました';
$string['payment:failed:message'] = '決済に失敗しました。お支払いの詳細をご確認の上、もう一度やり直してください。';
$string['payment:failed:subject'] = '決済に失敗しました';
$string['payment:successful:message'] = '決済が完了しました。あなたは次のコースにアクセスできます。 {$a->url}';
$string['payment:successful:subject'] = '決済が完了しました';
$string['paymentcancelled'] = '支払いはキャンセルされました';
$string['paymentmethod:alipay'] = 'Alipay';
$string['paymentmethod:bancontact'] = 'Bancontact';
$string['paymentmethod:card'] = 'クレジットカード';
$string['paymentmethod:eps'] = 'EPS';
$string['paymentmethod:giropay'] = 'giropay';
$string['paymentmethod:ideal'] = 'iDEAL';
$string['paymentmethod:p24'] = 'P24';
$string['paymentmethod:sepa_debit'] = 'SEPA Direct Debit';
$string['paymentmethod:upi'] = 'UPI';
$string['paymentmethod:wechat_pay'] = 'WeChat Pay';
$string['paymentmethods'] = '支払い方法';
$string['paymentpending'] = 'お支払いは保留中です。お支払いが完了次第、コースに登録され利用開始できます。';
$string['paymentsuccessful'] = 'お支払いが完了しました。';
$string['paymenttype'] = '支払いタイプ';
$string['paymenttype:onetime'] = '一括';
$string['paymenttype:subscription'] = 'サブスクリプション';
$string['pluginname'] = 'Stripe';
$string['pluginname_desc'] = 'Stripeプラグインを使用すると、Stripe経由で支払いを受け取ることができます。';
$string['privacy:metadata:stripe_customers'] = 'MoodleユーザとStripeカスタマーオブジェクトのリレーションを保存します。';
$string['privacy:metadata:stripe_customers:customerid'] = 'Stripeから返される顧客ID';
$string['privacy:metadata:stripe_customers:userid'] = 'Moodle user ID';
$string['privacy:metadata:stripe_subscriptions'] = 'MoodleのサブスクリプションからStripeのサブスクリプションオブジェクトへのリレーションを保存します。';
$string['privacy:metadata:stripe_subscriptions:userid'] = 'Moodle user ID';
$string['product'] = '課金中のコース';
$string['profilecat'] = 'Stripe支払いサブスクリプション';
$string['scheduledrenewal'] = '次回課金日';
$string['secretkey'] = 'シークレットキー';
$string['secretkey_help'] = 'Stripe認証用シークレットキー';
$string['status'] = 'ステータス';
$string['stripeaccount'] = 'StripeアカウントID';
$string['stripeaccount_help'] = 'ダイレクト支払いのブランディングページの作成';
$string['subscriptionerror'] = 'サブスクリプション作成にエラーが発生しました。サイト管理者にお問い合わせください。';
$string['subscriptioninterval'] = 'サブスクリプション期間';
$string['subscriptionperiod:custom'] = 'カスタム';
$string['subscriptionperiod:daily'] = '毎日';
$string['subscriptionperiod:every3months'] = '3ヶ月ごと';
$string['subscriptionperiod:every6months'] = '6ヶ月ごと';
$string['subscriptionperiod:monthly'] = '毎月';
$string['subscriptionperiod:weekly'] = '毎週';
$string['subscriptionperiod:yearly'] = '毎年';
$string['subscriptions'] = 'サブスクリプション';
$string['subscriptionssubheading'] = '購入したコースを一覧表示します。ここでサブスクリプションをキャンセルすることができます。</br>
※キャンセルは直ちに処理され、再び同じコースに入ることはできません。</br>
※間違って購入した場合は管理者にお問い合わせください。';
$string['subscriptionstatus:active'] = 'アクティブ';
$string['subscriptionstatus:canceled'] = 'キャンセル済み';
$string['subscriptionstatus:incomplete'] = '完了していません';
$string['subscriptionstatus:incomplete_expired'] = '期限切れ';
$string['subscriptionstatus:past_due'] = '決済期限切れ';
$string['subscriptionstatus:paused'] = '一時停止';
$string['subscriptionstatus:trialing'] = 'トライアル期間';
$string['subscriptionstatus:unpaid'] = '未払い';
$string['subscriptionsuccessful'] = 'サブスクリプション登録に成功しました';
$string['taxbehavior:exclusive'] = '外税（税抜）';
$string['taxbehavior:inclusive'] = '内税（税込）';
$string['trialperiod'] = 'トライアル期間';
$string['trialperiod_help'] = '例：初月を無料にします。サブスクリプションが4月24日に作成された場合、1ヶ月間は無料となり、課金は5月24日に開始されます。
上記（初月を日割り計算する）項目にチェックが入っている場合、無料期間は当月のみになります。ユーザーが4月24日に登録した場合、4月は無料となり、課金は5月1日に開始されます。';
$string['updatepaymentmethod'] = '支払い方法の更新';
