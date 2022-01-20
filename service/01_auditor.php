<?php
	include_once('./_common.php');
$g5['title'] = '심사원 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /* ---------------------- 시작: 컨텐츠 페이지별 css ---------------------- */ 
    
	.point_col { color:#0f618a;border-color: #0f618a }/*각 서브페이지의 포인트 컬러*/
    .point_b1 { display: block;color: #d63217; font-size: 1rem; font-weight: 500; margin-bottom: 10px }/* 본문의 강조부분 css */
    
    /* 컨텐츠 03 심사원 인증 절차에 대한 css */
    .arrow { position: relative;margin: 0 0 50px }
    .triangle { display: inline-block;position: absolute;left: -16px;top: 15px;width: 0;height: 0;border-left: 30px solid transparent;border-right: 30px solid transparent;border-bottom: 30px solid #fff;transform: rotate(90deg);}
    .arrow_tit { font-size:1.1rem;font-weight: 500;margin-bottom: 10px }
    .arrow_txt { display: inline-block;width: 100%;height: 60px;background: #0f618a;text-align: center;font-size: 1.15rem;font-weight: bold;line-height: 60px;color: #fff; }/* point_col와 동일한 색 적용 */
    .step_wrap { display: flex;margin: 20px 0 50px }
    .step { flex: 1;padding: 20px }
    .icon { width: 40%;text-align: center;margin: 0 auto 30px }
    
    /* 테이블(Table)에 대한 css */
    /* type01 : 줄노트형식 */
    table.type01 { border-collapse: collapse;text-align: left;line-height: 1.6;border-top: 3px solid #0f618a;border-bottom: 3px solid #0f618a }/* point_col와 동일한 색 적용 */
    table.type01 th { padding: 10px 0 10px 20px;vertical-align: middle }
    table.type01 td { padding: 10px 0 10px 20px;vertical-align: top }
    table.type01 .even { background: #f4f4f4 }
    /* type02 : 헤더에 배경색/왼쪽-항목명/오른쪽-내용 기본테이블형식 */
    table.type02 { border-collapse: collapse;line-height: 1.6;border-bottom: 3px solid #0f618a }/* point_col와 동일한 색 적용 */
    table.type02 thead th { padding: 10px;vertical-align: middle;color: #fff;background: #0f618a }/* point_col와 동일한 색 적용 */
    table.type02 tbody th { padding: 10px;vertical-align: middle;font-weight: 500;border-bottom: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1 }
    table.type02 tbody td { padding: 10px;vertical-align: top;border-bottom: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1 }
    table.type02 tbody td.none { border-bottom: none;border-right: none }
    /* type03 : 항목명 왼쪽에 보더 굵게 넣어 강조한 형식 */
    table.type03 { border-collapse: collapse;text-align: left;line-height: 1.6 }
    table.type03 th { padding: 10px;vertical-align: top;font-weight: 500;border-left: 3px solid #0f618a }/* point_col와 동일한 색 적용 */
    table.type03 td { padding: 10px 0 10px 20px;vertical-align: top;background: #f4f4f4 }
    
    
    /* ---------------------- 종료: 컨텐츠 페이지별 css ---------------------- */ 
    
    /* ------------------------ 시작: 컨텐츠 공통 css ------------------------ */ 
    
    .content_wrap {width:100%; max-width:1200px; margin:0 auto;font-size: 1rem; font-weight: 400;line-height: 1.6 }/* 서브페이지 전체 레이아웃 */
    section, article { margin-bottom: 70px }/* 문단 하단 부분과 푸터와의 마진 */
    .nbsp {display: inline-block; text-indent: 0.4em }/* 리스트 자간 조절 */
    
    /* 페이지 제목에 대한 css */
    .container_title { display: block !important; color:#555; font-size:1.6rem; line-height:1; font-weight:700; text-align:center; border-radius:15px; background:#fff; box-shadow: 1px 2px 8px #eee; width:100%; padding:30px 0; margin: 0 0 50px; }/* 서브페이지 페이지 타이틀 생성 / 20210730 전산: 이혜정 */
    
    /* 상단 제목에 대한 css */
    .page_title { margin:70px auto }
    .page_title .top_tt { width:100%; margin:70px auto 0; text-align:center; font-size:2.2rem; font-weight:600; }/* 상단 제목 css */
	.page_title .top_tt::after { content:""; clear:both; display:block; width:40px; margin:50px auto 0; border:1px solid #999; }/* 상단 제목의 arrow css */
	.page_title .top_stt { width:100%; margin:0 auto 70px; padding: 40px 0 0; text-align:center; font-size:1.8rem; font-weight:600; }/* 상단 부제목 css */
	.page_title .top_txt { width: 100%;margin: 70px auto;text-align: justify }/* 개요부분 css */
    
    /* 문단 부분에 대한 css */
    .page_con { width: 100%;margin: 70px auto }
    .page_con .con { border: 2px solid #d8d8d8;margin-top: 50px }
    .page_con .con_tt { font-size: 1.5rem; font-weight: 500; text-align: left; margin: 0 auto 30px auto;width: 90%;padding: 30px 0 20px;border-bottom: 2px solid }/* 문단 제목 css */
    .page_con .con_stt { font-size: 1.15rem; font-weight: 500; text-align: left; margin: 0 auto 20px auto;width: 100%; }/* 문단 부제목 css */
    .page_con .con_txt { width: 90%;margin: 70px auto;text-align: justify }/* 본문 css */
    
    /* 이미지에 대한 css */
    .con_img {width: 60%;text-align: center;margin: 70px auto }/* 문단에 쓰이는 이미지의 css */
    .con_img img {width: 100%;}/* 문단의 쓰이는 이미지의 크기 */
    
    /* 부가설명박스에 대한 css */
    .sub_txt { width:90%; margin: 30px auto;font-size:0.95rem; color:#555; background:#f7f7f7;border-radius: 5px;text-align: justify}
	.sub_txt ul { width: 100%;margin: 0 auto;padding: 25px }
	.sub_txt ul li { padding-left: 20px;position: relative }
	.sub_txt ul li .number { content: '';display: inline-block;width: 5px;height: 5px;position: absolute;left: 0;top: 0 }/* 문단 리스트 스타일 : 숫자 */
    .sub_txt ul li .bullet { content: '';display: inline-block;width: 5px;height: 5px;background: #222;border-radius: 50%;position: absolute;left: 0;top: 10px }/* 문단 리스트 스타일 : 불릿 */
    
    /* FAQ에 대한 css */
    .faq_bg { width: 100%;height: 300px;background: url(./image/faq_bg.png)no-repeat center;background-size: cover; margin: 0 0 50px;position: relative }
    /*.faq_bg h3 { position: absolute;display: block;width: 100%;top: 50%;transform: translateY(-50%);text-align: center }*/
    
    .faq_wrap .accordion { border-bottom: 1px solid #0f618a;color: #0f618a;cursor: pointer;padding: 12px 25px 12px 15px;width: 100%;text-align: left;transition: 0.4s; }/* point_col와 동일한 색 적용 */
    .faq_wrap .accordion.active, .faq_wrap .accordion:hover { background-color: #0f618a;color: #fff }/* 아코디언 클래스를 클릭, 호버될 경우 배경색 변경 / point_col와 동일한 색 적용 */
    .faq_wrap .accordion::before { content: '';float: right;width: 10px;height: 10px; margin-left: 20px; border-bottom:2px solid #ccc;border-right:2px solid #ccc;transform: rotate(45deg) }/* 열림 버튼 생성 */
    .faq_wrap .accordion.active::before { transform: rotate(-135deg);margin-top: 10px }/* 숨기기 버튼 생성 */

    .faq_wrap .panel { background-color: inherit;max-height: 0;overflow: hidden;transition: 0.4s ease-in-out;opacity: 0;margin-bottom:10px; }
    .faq_wrap .panel ul { padding: 8px 18px; }
    .faq_wrap .panel.show { opacity: 1;max-height: 500px;padding: 15px 25px;box-shadow: 0 4px 6px 0 rgb(0 0 0 / 25%) }/* 패널에 클래스 show 붙을 경우 */
    
    
    /* ------------------------ 종료: 컨텐츠 공통 css ------------------------ */ 
    
    

    
    /* ------------------------ 시작: 반응형 css ------------------------ */   

	@media (max-width:1024px) {
        .page_title .top_tt { font-size: 1.85rem }
    }

	@media screen and (max-width:768px) {	
        .con_txt { width: 100% }
        .con_txt ul { width: 100% }
        .container_title { display:none !important }
	}
    
    @media screen and (max-width:640px) {	
        .con_img { width: 100% }
        .con_img.inside { width: 90% }
        .page_con .con_txt { margin: 20px auto }
        .step_wrap { display: block;margin: 0 }
        .step { margin: 0 auto 30px;border: 1px solid #d1d1d1;padding: 30px }
        .arrow_tit { font-size: 1rem }
       
	}

	@media all and (min-width:360px) and (max-device-width : 414px) {
        .content_wrap {font-size: 0.95rem}
        .page_title .top_tt { font-size: 1.35rem }
        .con_img { width: 100% }
        .page_con .con_tt { font-size: 1.05rem;width: 100%;margin: 0 }
        .page_con .con_stt { font-size: 1.05rem }
        .page_con .con dl { width: 90%;margin: 0 auto 30px }
        .sub_txt { width: 100%;margin: 0;font-size: 0.9rem }
        .faq_bg { margin: 70px 0;background: url(./image/m_faq_bg.png)no-repeat center; }
        .faq_wrap .accordion { margin-bottom: 0 }
        .faq_wrap .accordion::before { width: 10px;height: 10px;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc }
        .faq_wrap .panel { margin-bottom: 0 }
        .faq_wrap .panel.show { box-shadow: none;background: #f4f4f4; }

	}
    
    /* ------------------------ 종료: 반응형 css ------------------------ */   
    
    
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */   
    
</style>

<!-- 
    아코디언 FAQ 구현
    2021.08.02 
    From H.J
-->

<script>
    
// 한 번에 하나의 아코디언 탭만 열림  
document.addEventListener("DOMContentLoaded", function(event) { 

// 지정된 클래스 이름을 가진 모든 요소를 가져옵니다.
var acc = document.getElementsByClassName("accordion"); // 아코디언 클래스리스트를 가져온다.
var panel = document.getElementsByClassName('panel'); // 패널 클래스리스트를 가져온다.


for (var i = 0; i < acc.length; i++) {
    acc[i].onclick = function() { // 아코디언 클릭 시 이벤트
        var setClasses = !this.classList.contains('active'); // 아코디언에 액티브 클래스 포함 여부 확인.
        setClass(acc, 'active', 'remove'); // 모든 아코디언 상태 초기화
        setClass(panel, 'show', 'remove'); // 모든 패널 상태 초기화

        if (setClasses) {
            this.classList.toggle("active"); // 현재 아코디언에 액티브 클래스를 추가하거나 삭제함. 
            this.nextElementSibling.classList.toggle("show"); //현재 아코디언의 다음 요소인 패널에 쇼 클래스를 추가하거나 삭제함.
        }
    }
}

function setClass(els, className, fnName) {
    for (var i = 0; i < els.length; i++) {
        els[i].classList[fnName](className);
    }
}

});
// 아코디언 FAQ 종료
    
</script>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->

<div class="content_wrap">
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">심사원 인증 규격</a></li>
			<li><a href="javascript:;">등급/요구사항</a></li>
			<li><a href="javascript:;">심사원 인증 절차</a></li>
			<li><a href="javascript:;">심사원 인증비용</a></li>
            <li><a href="javascript:;">FAQ</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <div class="page_title">
                <h1 class="top_tt point_col">심사원 인증 규격</h1>
                <!--<h2 class="top_stt">ISO 9001:2015</h2>-->
                <!--<p class="top_txt"></p>-->
            </div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/auditor_01.jpg" alt="심사원 인증 규격">
                            </dt>
                            <dd style="margin:0 0 70px">
                                <h3 class="con_stt point_col">
                                    <i class="fas fa-check-circle" style="margin-right:10px"></i>GPC는 국제인정기관 IAS로부터 아래와 같은 인증 Scheme을 인정받아 심사원 자격 인증 서비스를 제공하고 있습니다.
                                </h3>
                                <table class="type01">
                                    <tbody>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 9001:2015</p>
                                            </th>
                                            <td width="70%">
                                                <p>품질경영시스템<br>Quality Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 14001:2015</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>환경경영시스템<br>Environmental Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 13485:2016</p>
                                            </th>
                                            <td width="70%">
                                                <p>의료기기품질경영시스템<br>Medical Devices-Quality Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 22000:2018</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>식품안전경영시스템<br>Food Safety Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO/IEC 27001:2013</p>
                                            </th>
                                            <td width="70%">
                                                <p>정보보안경영시스템<br>Information Security Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 45001:2018</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>안전보건경영시스템<br>Occupational Health and Safety Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 21001:2018</p>
                                            </th>
                                            <td width="70%">
                                                <p>교육기관경영시스템<br>Educational Organizations Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 22301:2019</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>비즈니스연속성경영시스템<br>Business Continuity Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO/IEC 27701:2019</p>
                                            </th>
                                            <td width="70%">
                                                <p>개인정보경영시스템<br>Privacy Information Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 37001:2016</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>부패방지경영시스템<br>Anti-Bribery Management Systems</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                            <dd style="margin:0 0 70px">
                                <h3 class="con_stt point_col">
                                    <i class="fas fa-check-circle" style="margin-right:10px"></i>GPC는 자체 인증 Scheme의 개발을 통해 아래와 같은 심사원 자격 인증 서비스를 제공하고 있습니다.
                                </h3>
                                <table class="type01">
                                    <tbody>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 50001:2018</p>
                                            </th>
                                            <td width="70%">
                                                <p>에너지경영시스템<br>Energy Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 37301:2021</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>준법경영시스템<br>Compliance Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 22716:2007</p>
                                            </th>
                                            <td width="70%">
                                                <p align="left">화장품 제조산업의 우수제조관리기준(GMP)<br>Cosmetics - Good Manufacturing Practices (cGMP)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO/IEC 20000-1:2018</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>IT서비스경영시스템<br>Information Technology - Service Management Systems</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 55001:2014</p>
                                            </th>
                                            <td width="70%">
                                                <p>자산경영시스템<br>Asset Management Systems</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>			
                    </li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   

        <article><!--+++++ 컨텐츠 02 시작 +++++--> 
             <div class="page_title">
                <h1 class="top_tt point_col">등급/요구사항</h1>
                <!--<h2 class="top_stt">ISO 14001:2015</h2>-->
                <!--<p class="top_txt"></p>-->
            </div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/auditor_02.jpg" alt="등급/요구사항">
                            </dt>
                            <dd style="margin:0 0 70px">
                                <h3 class="con_stt point_col">
                                    <i class="fas fa-check-circle" style="margin-right:10px"></i>심사원 자격 구분 및 등록 요건
                                </h3>
                                <table class="type02">
                                    <thead>
                                        <tr>
                                            <th width="15%" scope="cols">
                                                <p>등급</p>
                                            </th>
                                            <th width="55%" scope="cols">
                                                <p>요구되는 경력</p>
                                            </th>
                                            <th width="30%" scope="cols">
                                                <p>공통 사항</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th width="15%" scope="row">
                                                <p>심사원보</p>
                                            </th>
                                            <td width="55%">
                                                <p>해당 사항 없음</p>
                                            </td>
                                            <td width="30%" rowspan="5" style="vertical-align: middle" class="none">
                                                <ul>
                                                    <li>1) 중등 교육 졸업 이상의 학력</li><br>
                                                    <li>2) GPC 지식 및 인성 시험 합격</li><br>
                                                    <li>
                                                        3) ISO 심사원/선임심사원과정 교육 수료<br>
                                                        - 3년 이내, 공인된 개인 인증기관 혹은 그로부터 지정 받은 연수기관의 수료증만 수용 가능
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="15%" scope="row">
                                                <p>심사원</p>
                                            </th>
                                            <td width="55%">
                                                <ul>
                                                    <li>
                                                        1) 업무 경력<br>
                                                        - 총 5년 이상의 업무 경력 (신청 표준과 관련하여 품질 혹은 환경 분야 경력 최소 2년 이상)
                                                    </li><br>
                                                    <li>2) 최근 3년 이내 20M/D 이상의 심사 이력*</li><br>
                                                    <li>
                                                        *검증방식으로 신청할 경우 : 신청 표준 경영시스템을 수립한 업체에서의 검증심사 기록</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="15%" scope="row">
                                                <p>선임 심사원</p>
                                            </th>
                                            <td width="55%">
                                                <ul>
                                                    <li>
                                                        1) 업무 경력<br>
                                                        - 총 5년 이상의 업무 경력 (신청 표준과 관련하여 품질 혹은 환경 분야 경력 최소 2년 이상)
                                                    </li><br>
                                                    <li>
                                                        2) 최근 3년 이내 35M/D 이상의 심사 이력<br>
                                                        (그 중 15M/D 이상은 선임심사원으로서 심사 이력)
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="15%" scope="row">
                                                <p>검증 심사원</p>
                                            </th>
                                            <td width="55%">
                                                <ul>
                                                    <li>
                                                        1) 업무 경력<br>
                                                        - 총 10년 이상의 업무 경력 (신청 표준과 관련하여 품질 혹은 환경 분야 경력 최소 5년 이상)
                                                    </li><br>
                                                    <li>
                                                        2) 최근 3년 이내 선임심사원으로서 15M/D 이상의 심사 이력<br>
                                                        (공인된 개인 인증 기관으로부터 선임 심사원 자격 취득 후의 심사 이력만 가능)
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="15%" scope="row">
                                                <p>내부 심사원</p>
                                            </th>
                                            <td width="55%">
                                                <ul>
                                                    <li>
                                                        1) 업무 경력<br>
                                                        - 총 3년 이상의 업무 경력 (신청 표준과 관련하여 품질 혹은 환경 분야 경력 최소 1년 이상)
                                                    </li><br>
                                                    <li>
                                                        2) 최근 3년 이내 내부 심사 5회 이상, 최소 15M/D 이상의 내부 심사 이력
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                            <dd style="margin:0 0 70px">
                                <h3 class="con_stt point_col">
                                    <i class="fas fa-check-circle" style="margin-right:10px"></i>전환 등록 요건
                                </h3>
                                <table class="type03">
                                    <tbody>
                                        <tr>
                                            <th width="15%" scope="row">
                                                <p>전환</p>
                                            </th>
                                            <td width="85%">
                                                <p>신청일 기준 유효한 심사원 자격 인증서</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                            <dd style="margin:0 0 70px">
                                <h3 class="con_stt point_col">
                                    <i class="fas fa-check-circle" style="margin-right:10px"></i>자격 갱신 요건
                                </h3>
                                <table class="type02">
                                    <thead>
                                        <tr>
                                            <th width="20%" scope="cols">
                                                <p>등급</p>
                                            </th>
                                            <th width="40%" scope="cols">
                                                <p>추가 요구사항</p>
                                            </th>
                                            <th width="40%" scope="cols">
                                                <p>공통 사항</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th width="20%" scope="row">
                                                <p>심사원</p>
                                            </th>
                                            <td width="40%">
                                                <p>해당 사항 없음</p>
                                            </td>
                                            <td width="40%" rowspan="3" style="vertical-align: middle" class="none">
                                                <ul>
                                                    <li>
                                                        1) 3년 간 10M/D 이상의 심사 이력
                                                    </li><br>
                                                    <li>
                                                        2) 3년 간 16시간 이상의 CPD 활동 이력
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="20%" scope="row">
                                                <p>선임심사원</p>
                                            </th>
                                            <td width="40%">
                                                <p>최소 한 번 이상 선임심사원으로서의 심사 이력</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="20%">
                                                <p>검증심사원</p>
                                            </th>
                                            <td width="40%">
                                                <p>최소 한 번 이상 선임심사원으로서의 심사이력 및 검증 활동 이력</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <span style="display:block;font-size:0.85rem">*갱신은 모든 등급에 한하여 최초 발행일로부터 3년 주기에 맞춰 이루어져야 합니다.</span>
                                <span style="display:block;font-size:0.85rem">*심사원보의 경우 자격 갱신 시 서류 제출이 요구되지 않습니다.</span>
                            </dd>
                        </dl>			
                    </li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 02 종료 +++++--> 

        <article><!--+++++ 컨텐츠 03 시작 +++++-->
            <div class="page_title">
                <h1 class="top_tt point_col">심사원 인증 절차</h1>
                <!--<h2 class="top_stt">ISO 45001:2018</h2>-->
                <!--<p class="top_txt"></p>-->
            </div>
            <div class="page_con">
                <ul>
                    <li class="con">
                        <dl>
                            <dt>
                                <h3 class="con_tt point_col"><i class="fas fa-check-circle" style="margin-right:10px"></i>심사원 인증 프로세스</h3>
                            </dt>
                            <dd class="con_txt" >
                                <div class="step_wrap">
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 1</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/contract_02.png" alt="신청 서류 접수">
                                        </div>
                                        <h4 class="arrow_tit">1. 신청 서류 접수</h4>
                                        <p>신청자는 GPC 신청서 및 계약서와 신청 규격에 따른 추가 서류를 제출합니다.</p>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 2</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/invoice.png" alt="등록 비용 청구">
                                        </div>
                                        <h4 class="arrow_tit">2. 등록 비용 청구</h4>
                                        <p>인보이스를 통해 심사원 등록 비용이 청구됩니다.</p>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 3</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/document.png" alt="서류 검토">
                                        </div>
                                        <h4 class="arrow_tit">3. 서류 검토</h4>
                                        <p>신청서 및 제반 자료를 검토하여 추가적인 증빙이 필요할 경우 자료 보완을 요청합니다.</p>
                                    </div>
                                </div>
                                <div class="step_wrap">
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 4</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/test.png" alt="GPC 시험 수행">
                                        </div>
                                        <h4 class="arrow_tit">4. GPC 시험 수행</h4>
                                        <p>자격요건을 충족하면 신청자는 평가대상자로서 GPC 지식 및 인성시험을 응시할 수 있는 자격이 부여되며, 모든 평가 대상자는 해당 시험을 모두 합격하여야 합니다.</p>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 5</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/paper.png" alt="인증결정위원회의 검토">
                                        </div>
                                        <h4 class="arrow_tit">5. 인증결정위원회의 검토</h4>
                                        <p>인증결정위원회는 신청 표준 및 심사원 등급과 관련하여 신청자가 모든 요구사항에 충족하는지 최종적인 검토를 진행합니다.</p>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 6</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/certificate.png" alt="인증서 발행">
                                        </div>
                                        <h4 class="arrow_tit">6. 인증서 발행</h4>
                                        <p>인증결정위원회로부터 인증등록이 결정되면 인증서가 발행되어 신청자에게 전달됩니다.</p>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 03 종료 +++++--> 
 
        
<!--===========================================================================================================================-->
   
        
        <article><!--+++++ 컨텐츠 04 시작 +++++--> 
             <div class="page_title">
                <h1 class="top_tt point_col">심사원 인증비용</h1>
                <!--<h1 class="top_stt">ISO 50001:2018</h1>-->
                <!--<p class="top_txt"></p>-->
            </div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt></dt>
                            <dd style="margin:0 0 70px">
                                <table class="type02">
                                    <thead>
                                        <tr>
                                            <th width="16.5%" scope="cols">
                                                <p>등급</p>
                                            </th>
                                            <th width="16.7%" scope="cols">
                                                <p>신청비용</p>
                                            </th>
                                            <th width="16.7%" scope="cols">
                                                <p>등록비용</p>
                                            </th>
                                            <th width="16.7%" scope="cols">
                                                <p>연회비용</p>
                                            </th>
                                            <th width="16.7%" scope="cols">
                                                <p>승급비용</p>
                                            </th>
                                            <th width="16.7%" scope="cols">
                                                <p>시험비용</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th width="16.5%" scope="row">
                                                <p>내부심사원</p>
                                            </th>
                                            <td width="16.7%" rowspan="5" style="vertical-align: middle">
                                                <p>50,000</p>
                                            </td>
                                            <td width="16.7%">
                                                <p>50,000</p>
                                            </td>
                                            <td width="16.7%">
                                                <p>50,000</p>
                                            </td>
                                            <td width="16.7%">
                                                <p>-</p>
                                            </td>
                                            <td width="16.7%" rowspan="5" style="vertical-align: middle" class="none">
                                                <p>40,000</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="16.5%" scope="row">
                                                <p>심사원보</p>
                                            </th>
                                            <td width="16.7%">
                                                <p>50,000</p>
                                            </td>
                                            <td width="16.7%">
                                                <p>-</p>
                                            </td>
                                            <td width="16.7%">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="16.5%" scope="row">
                                                <p>심사원</p>
                                            </th>
                                            <td width="16.7%">
                                                <p>200,000</p>
                                            </td>
                                            <td width="16.7%">
                                                <p>140,000</p>
                                            </td>
                                            <td width="16.7%">
                                                <p>100,000</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="16.5%" scope="row">
                                                <p>선임심사원</p>
                                            </th>
                                            <td width="16.7%">
                                                <p>250,000</p>
                                            </td>
                                            <td width="16.7%">
                                                <p>170,000</p>
                                            </td>
                                            <td width="16.7%">
                                                <p>100,000</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="16.5%" scope="row">
                                                <p>검증심사원</p>
                                            </th>
                                            <td width="16.7%">
                                                <p>300,000</p>
                                            </td>
                                            <td width="16.7%">
                                                <p>250,000</p>
                                            </td>
                                            <td width="16.7%">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <span style="display:block;font-size:0.85rem">*비용단위: KRW(원)</span>
                                <span style="display:block;font-size:0.85rem">*부가세 별도</span>
                                
                                <div class="sub_txt">
                                    <ul>
                                        <li>
                                            <span class="bullet"></span>검증방식으로 심사원 자격을 신청하는 경우 검증심사비와 문서 검토비가 추가로 발생합니다.
                                            <span style="display:block">- 검증심사비용 (조건에 따라 상이함)</span>
                                            <span style="display:block">- 검증심사 문서 검토비용 100,000</span>
                                        </li>
                                        <li>
                                            <span class="bullet"></span>ISO/IEC 17024 공인 기관의 등록자에 한하여 GPC로 심사원 전환 등록이 가능하며, 전환 등록비용은 연회비용과 동일합니다.
                                        </li>
                                        <li>
                                            <span class="bullet"></span>신청비 및 연회비는 일체 환불되지 않습니다.
                                        </li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 04 종료 +++++--> 

 
<!--==============================================================================================================================================================-->
        

        <article><!--+++++ 컨텐츠 05 시작 +++++--> 
            <div class="faq_wrap"> 
                <div class="faq_bg"></div>

                <p class="accordion active">Q1. 심사원 등록 요건이 어떻게 되나요?</p>
                <div class="panel show">
                    A. 심사원 등록 시 다음 요구사항을 충족해야 합니다.
                    <ul>
                        <li>1)	중등 교육 졸업 이상의 학력</li>
                        <li>2)	총 5년 이상의 업무 경력 (2년 이상 신청 표준 관련 경력 포함)</li>
                        <li>3)	최근 3년 이내 공인된 기관에서 신청 표준에 대한 심사원 교육 과정 수료</li>
                        <li>4)	최근 3년 이내 20M/D 이상의 심사이력</li>
                        <li>5)	GPC 지식 및 인성시험 합격</li>
                    </ul>
                </div>

                <p class="accordion">Q2. 업무경력을 증빙할 수 있는 자료로 재직증명서나 경력증명서 제출이 어려운 데 어떤 서류로 대체할 수 있나요?</p>
                <div class="panel">A. 건강보험납입증명서 또는 국민보험가입증명서 등으로 대체하실 수 있습니다.</div>

                <p class="accordion">Q3. GPC 외 타 기관의 심사원 교육 과정도 인정되나요?</p>
                <div class="panel">
                    A. 공인된 기관에서의 심사원 교육 과정의 경우 인정되며, 해당 기관의 교육 자료 평가 절차를 통해 수용 여부를 결정하고 있습니다.<br>
                    신청자는 교육 자료 평가 절차를 위하여 교육 커리큘럼 또는 교육 교재 등을 제출해야 합니다.
                </div>

                <p class="accordion">Q4. 재직중인 회사에서 수행한 내부심사 이력도 인정되나요?</p>
                <div class="panel">
                    A. 신청하시는 표준과 유사한 심사일 경우 심사이력으로 수용이 가능합니다. 따라서 신청 표준과의 동등성 평가를 위하여, 수행하신 심사와 관련된 자료(심사 기준, 심사 체크리스트, 심사 보고서 등)를 제출해 주셔야 합니다.
                </div>
                
                <p class="accordion">Q5. 심사원보 등록 요건이 어떻게 되나요?</p>
                <div class="panel">
                    A. 심사원보 등록 시 다음 요구사항을 충족해야 합니다.
                    <ul>
                        <li>1)	중등 교육 졸업 이상의 학력</li>
                        <li>2)	최근 3년 이내 공인된 기관에서 신청 표준에 대한 심사원 교육 과정 수료</li>
                        <li>3)	GPC 지식 및 인성시험 합격</li>
                    </ul>
                </div>
                
                <p class="accordion">Q6. ISO 9001 심사원으로 등록했는데, ISO 14001 심사원으로 추가 등록하려고 합니다. 요건은 동일한가요?</p>
                <div class="panel">
                    A. 요건은 동일하나, 환경경영시스템과 관련된 이력에 대한 증빙이 필요합니다. ISO 14001 심사원 등록 시 다음 요구사항을 충족해야 합니다.
                    <ul>
                        <li>1)	중등 교육 졸업 이상의 학력</li>
                        <li>2)	총 5년 이상의 업무 경력 (2년 이상 환경경영시스템 관련 경력 포함)</li>
                        <li>3)	최근 3년 이내 공인된 기관에서 ISO 14001 심사원 교육 과정 수료</li>
                        <li>4)	최근 3년 이내 20M/D 이상의 ISO 14001 심사이력</li>
                        <li>5)	GPC 지식 및 인성시험 합격</li>
                    </ul>
                </div>
                
                <p class="accordion">Q7. 신청서와 계약서에 서명은 어떻게 해야 하나요?</p>
                <div class="panel">A. 서류 상에 전자 서명을 해 주시거나, 또는 서류를 인쇄하시어 자필로 서명하신 후 스캔하여 보내주시면 됩니다.</div>
                
                <p class="accordion">Q8. 서류는 어떻게 제출하면 되나요?</p>
                <div class="panel">
                    A. 메일, 팩스, 우편 등으로 보내주시면 됩니다.
                    <ul>
                        메일: info@gpcert.org<br>
                        팩스: 02-6749-0711<br>
                        우편 주소: 서울시 금천구 서부샛길 638 대륭테크노타운 7차 501-1호 GPC인증원
                    </ul>
                </div>
                
                <p class="accordion">Q9. ISO 22000 심사원으로 등록하려고 하는데, 식품 안전 관련 업무 경력은 없지만 ISO 22000 인증 컨설팅 업무를 했습니다. 컨설팅 이력은 관련 경력으로 인정되나요?</p>
                <div class="panel">A. 컨설팅 관련 증빙자료(계약서, 작업 문서 등)의 검토 후 수용 여부가 결정됩니다.</div>
                
                <p class="accordion">Q10. 이번에 ISO 9001 심사원 교육 과정을 수료하였습니다. 언제까지 심사원보로 등록해야 하나요?</p>
                <div class="panel">A. GPC 심사원 등록 시 수용 가능한 교육 수료증은 신청일 기준 3년 이내 발행된 교육 수료증입니다. 따라서 교육 수료 후 3년 이내에 심사원보로 등록해주시면 됩니다.</div>
                
                <p class="accordion">Q11. 심사원 자격 등록 현황은 어떻게 확인할 수 있나요?</p>
                <div class="panel">A. GPC 홈페이지 첫 화면에서 인증서 번호를 검색해주세요. 등록된 심사원 자격의 현황(유지/정지/취소)을 확인하실 수 있습니다.</div>
                
                <p class="accordion">Q12. 심사원 자격증이 발행되나요?</p>
                <div class="panel">A. PDF 파일로 인증서가 발행되며, 인증서 원본 및 심사원증(카드)이 택배로 송부됩니다. 심사원 이상 등급의 경우, 연회비를 납부하시면 매년 인증서 원본 및 심사원증이 발송됩니다.</div>
                
                <p class="accordion">Q13. 다른 기관에서 심사원 자격을 받았습니다. GPC로 자격을 전환할 수 있나요?</p>
                <div class="panel">A. 타 기관에서 발행된 심사원 자격이 신청일 기준 유효한 경우 GPC로 전환 신청하실 수 있습니다.</div>
                
                <p class="accordion">Q14. ISO 9001 심사원으로 등록했습니다. 선임심사원으로 등급을 변경하려면 어떻게 해야 하나요?</p>
                <div class="panel">
                    A. 선임심사원 승급 요구사항은 다음과 같습니다.
                    <ul>
                        <li>-	심사원 등록일 이후 15M/D 이상 선임심사원으로서의 심사이력</li>
                    </ul>
                    GPC 심사로그시트 양식에 위와 같이 선임심사원으로서 수행하신 심사이력을 작성하여 승급 신청해주시면 선임심사원으로 등급을 변경하실 수 있습니다.
                </div>
                
                <p class="accordion">Q15. 검증방식을 통하여 선임심사원으로 등록할 수 있나요?</p>
                <div class="panel">
                    A. 검증방식은 심사원 등록 요구사항 중 심사이력 20M/D 이상을 보유하지 못한 경우에 신청할 수 있는 심사원 등록 방식입니다. 검증방식을 통해 등록할 수 있는 등급은 심사원이며, 선임심사원 등록을 원하시는 경우 검증방식을 통한 심사원 등록 이후에 추가로 15M/D 이상의 선임심사원으로서의 심사이력을 보유해야 합니다.
                </div>
                
                <p class="accordion">Q16. 작년에 ISO 9001 심사원으로 등록했습니다. 자격 유지 조건이 어떻게 되나요?</p>
                <div class="panel">
                    A. 심사원 이상 등급의 경우 매년 연회비가 발생하며, 3년 마다 자격 갱신이 요구됩니다. 심사원 등록 이후 1, 2년차에는 연회비를 납부해주시면 자격 유지를 하실 수 있으며, 심사원 인증서 원본 및 심사원증이 새로 발송됩니다.
                </div>
                
                <p class="accordion">Q17. 심사원 자격 갱신은 3년마다 진행되나요?</p>
                <div class="panel">
                    A. 심사원 자격 등록일 이후 3년 마다 자격 갱신이 요구되며, 갱신 신청 시 다음 요구사항을 충족해야 합니다.
                    <ul>
                        <li>-	등록일로부터 3년 간 10M/D 이상의 심사이력<br>(선임심사원의 경우 추가로 최소 한 번 이상 선임심사원으로서의 심사이력 필요, 검증심사원의 경우 추가로 최소 한 번 이상 선임심사원으로서의 심사이력 및 검증활동 이력 필요)</li>
                        <li>-	등록일로부터 3년 간 16시간 이상의 CPD 이력</li>
                    </ul>
                </div>
                
                <p class="accordion">Q18. 3년 전에 ISO 9001 심사원보로 등록하였었는데, 곧 만료일입니다. 갱신 요건이 어떻게 되나요?</p>
                <div class="panel">
                    A. 심사원보의 경우 자격 갱신 시 요구되는 사항이 없습니다. 심사원보 등록일로부터 3년 간 학력, 경력, 교육 이력 등에 변경사항이 있는 경우 신청서에 해당 내용 작성해주시면 자격 갱신하실 수 있습니다.
                </div>
                
                <p class="accordion">Q19. CPD 이력으로 인정되는 활동에는 어떤 것들이 있나요?</p>
                <div class="panel">
                    A. 등록하신 표준과 관련한 내용을 다루고 있는 교육, 세미나, 워크샵 등의 활동이 인정됩니다. 증빙 자료로는 참여증, 수료증 등을 제출해 주셔야 합니다.
                </div>
            </div>
        </article><!--+++++ 컨텐츠 05 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        
        
    </div><!-------div class="tab_con" 종료------>
    
</div><!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>