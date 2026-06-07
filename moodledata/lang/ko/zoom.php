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
 * Strings for component 'zoom', language 'ko', version '4.4'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountid'] = 'Zoom 계정 ID';
$string['actions'] = '활동';
$string['activitydate:ended'] = '종료:';
$string['activitydate:started'] = '시작:';
$string['activitydate:starts'] = '시작:';
$string['addparticipant'] = '참가자 추가하기';
$string['addparticipantgroup'] = '참가자 그룹 추가하기';
$string['addroom'] = '방 추가하기';
$string['addroomalert'] = '클릭하여 방을 추가하세요';
$string['addtocalendar'] = '일정에 추가하기';
$string['allmeetings'] = '모든 회의';
$string['allmeetings_desc'] = '이 설정을 사용하면 모든 활동 인스턴스 개요 페이지의 하단에 Zoom 활동 인덱스 페이지로의 링크를 표시할지 여부를 제어할 수 있습니다. 이 설정은 Zoom 활동 개요 페이지에서 링크의 표시에만 영향을 미칩니다. 링크를 표시하지 않기로 결정하더라도 사용자는 코스 내의 다른 링크를 통해 Zoom 활동 인덱스 페이지에 액세스할 수 있습니다.';
$string['allmeetings_disable'] = '모든 회의 링크 비활성화';
$string['allmeetings_enable'] = '모든 회의 링크 활성화';
$string['alternative_hosts'] = '대체 호스트';
$string['alternative_hosts_desc'] = '이 설정을 사용하면 활동 인스턴스 설정에서 대체 호스트를 선택하는 옵션을 사용자에게 표시할지 여부를 제어할 수 있습니다. 두 가지 유형의 위젯을 사용할 수 있습니다. 쉼표로 구분된 이메일 주소를 허용하는 일반 입력 필드. 그리고 코스에 등록하고 Zoom 계정이 있으며 {$a->roles}에서 역할을 가진 사용자를 쉽게 선택할 수 있는 자동 완성 기능이 있는 사용자 선택기. 교사가 Zoom에서 직접 설정했을 수 있지만 Moodle 사용자 선택기에서 선택할 수 없는 대체 호스트는 여전히 활동 개요 페이지에 표시되며 Moodle에서 회의가 업데이트될 때도 보존됩니다.';
$string['alternative_hosts_disable'] = '대체 호스트 옵션 비활성화';
$string['alternative_hosts_help'] = '대체 호스트 옵션을 사용하면 회의를 예약하고 다른 Zoom 사용자를 지정하여 회의를 시작할 수도 있습니다. 이러한 사용자는 Zoom에서 대체 호스트로 추가되었다는 알림 이메일과 회의를 시작할 수 있는 링크를 받게 됩니다.\\n\\n입력 형식으로 대체 호스트의 이메일 주소를 입력하세요. 여러 이메일을 쉼표(공백 없음)로 구분할 수 있습니다.';
$string['alternative_hosts_picker_placeholder'] = '사용자 선택';
$string['cachedef_zoomid'] = '사용자 Zoom ID';
$string['calendariconalt'] = '달력 아이콘';
$string['connectionfailed'] = '연결 실패:';
$string['connectionok'] = '연결중.';
$string['connectionsettings'] = '연결 설정';
$string['connectionstatus'] = '연결상태';
$string['defaultsettings'] = '기본값으로 변경';
$string['displaypassword'] = '패스코드 표시';
$string['downloadical'] = 'iCal 다운로드';
$string['duration'] = '길이 (분)';
$string['enddate'] = '종료 날짜';
$string['endtime'] = '종료 시간';
$string['err_duration_too_long'] = '길이는 150시간을 초과할 수 없습니다.';
$string['err_invalid_password'] = '패스코드에 유효하지 않은 문자가 포함되어 있습니다.';
$string['err_password'] = '패스코드는 다음 문자들을 포함합니다:  [a-z A-Z 0-9 @ - _ *]. 최대 10글자입니다.';
$string['err_password_required'] = '패스코드가 요구됩니다.';
$string['err_repeat_monthly_interval'] = '월간 회의의 최대 간격은 3개월입니다.';
$string['err_repeat_weekly_interval'] = '주간 회의의 최대 간격은 12주입니다.';
$string['err_start_time_past'] = '시작일은 현재보다 과거일 수 없습니다.';
$string['err_start_time_past_recurring'] = '정기 회의의 경우, 이 필드의 날짜는 다음 회의가 가능한 가장 빠른 날짜입니다. 이 날짜는 오늘 혹은 이후여야 합니다.';
$string['err_weekly_days'] = '주간 정기 회의 날짜를 선택해주세요.';
$string['erroraddinstance'] = '새로운 Zoom 회의를 만들지 못했습니다. 유효하지 않은 정기 회의 옵션 선택입니다.';
$string['errorwebservice'] = 'Zoom 웹서비스 에러: {$a}.';
$string['errorwebservice_badrequest'] = '잘못된 요청: {$a}';
$string['errorwebservice_notfound'] = '리소스가 존재하지 않습니다: {$a}';
$string['export'] = '내보내기';
$string['externaluser'] = '외부 사용자';
$string['getmeetingrecordings'] = 'Zoom으로부터 회의 녹화 받기';
$string['getmeetingreports'] = 'Zoom으로부터 회의 보고서 받기';
$string['globalsettings'] = '글로벌 설정';
$string['host'] = '호스트';
$string['join'] = '입장하기';
$string['join_meeting'] = '회의 입장하기';
$string['media'] = '미디어';
$string['meeting_finished'] = '종료됨';
$string['meeting_started'] = '회의중';
$string['meeting_time'] = '시작 시간';
$string['modulename'] = 'Zoom 회의';
$string['modulenameplural'] = 'Zoom 회의';
$string['nozooms'] = '회의 없음';
$string['off'] = '끄기';
$string['oldmeetings'] = '종료된 회의';
$string['on'] = '켜기';
$string['option_audio'] = '소리옵션';
$string['option_proxyhost'] = '프록시 사용';
$string['participants'] = '참여자';
$string['password'] = '패스코드';
$string['password_allowed_char'] = '패스코드는 다음 문자만을 포함해야 합니다. [a-z A-Z 0-9 @ - _ *]';
$string['password_letter'] = '패스코드는 최소 1개의 문자를 포함해야 합니다.';
$string['password_lower_upper'] = '패스코드는 대문자와 소문자를 모두 포함해야 합니다.';
$string['password_number'] = '패스코드는 최소 1개의 숫자를 포함해야 합니다.';
$string['password_special'] = '패스코드는 최소 1개의 특수문자를 포함해야 합니다. (@-_*)';
$string['pluginadministration'] = 'Zoom 회의 관리';
$string['pluginname'] = 'Zoom 회의';
$string['privacy:metadata:zoom_meeting_participants:name'] = '참여자 이름';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = '참여자 이메일';
$string['recurrence_option_daily'] = '';
$string['recurrence_option_monthly'] = '';
$string['start'] = '시작하기';
$string['starttime'] = '시작 시간';
$string['status'] = '상태';
$string['title'] = '제목';
$string['topic'] = '주제';
$string['unavailable'] = '지금 참여할 수 없습니다.';
$string['unavailablefinished'] = '회의가 이미 종료되었습니다.';
$string['unavailablefirstjoin'] = '시작 시간의 {$a->mins}분 전부터 입장할 수 있습니다.';
$string['unavailablenotstartedyet'] = '회의가 아직 시작하지 않았습니다.';
$string['zoom:addinstance'] = '새로운 Zoom 회의 추가';
