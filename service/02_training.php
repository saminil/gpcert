<?php
	include_once('./_common.php');
$g5['title'] = '연수기관 지정';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /* ---------------------- 시작: 컨텐츠 페이지별 css ---------------------- */ 
    
	.point_col { color:#6b8a0f;border-color: #6b8a0f }/*각 서브페이지의 포인트 컬러*/
    .point_b1 { display: block;color: #d63217; font-size: 1rem; font-weight: 500; margin-bottom: 10px }/* 본문의 강조부분 css */
    
    /* 컨텐츠 02 연수기관 지정 절차에 대한 css */
    .arrow { position: relative;margin: 0 0 50px }
    .triangle { display: inline-block;position: absolute;left: -16px;top: 15px;width: 0;height: 0;border-left: 30px solid transparent;border-right: 30px solid transparent;border-bottom: 30px solid #fff;transform: rotate(90deg);}
    .arrow_tit { font-size:1.1rem;font-weight: 500;margin-bottom: 10px }
    .arrow_txt { display: inline-block;width: 100%;height: 60px;background: #6b8a0f;text-align: center;font-size: 1.15rem;font-weight: bold;line-height: 60px;color: #fff; }/* point_col와 동일한 색 적용 */
    .step_wrap { display: flex;margin: 20px 0 50px }
    .step { flex: 1;padding: 20px }
    .icon { width: 40%;text-align: center;margin: 0 auto 30px }
    
    /* 테이블(Table)에 대한 css */
    /* type01 : 줄노트형식 */
    table.type01 { border-collapse: collapse;text-align: left;line-height: 1.6;border-top: 3px solid #6b8a0f;border-bottom: 3px solid #6b8a0f }/* point_col와 동일한 색 적용 */
    table.type01 th { padding: 10px 0 10px 20px;vertical-align: middle }
    table.type01 td { padding: 10px 0 10px 20px;vertical-align: top }
    table.type01 .even { background: #f4f4f4 }
    
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
    .con_img { width: 60%;text-align: center;margin: 70px auto }/* 문단에 쓰이는 이미지의 css */
    .con_img img { width: 100%; }/* 문단의 쓰이는 이미지의 크기 */
    
    /* 부가설명박스에 대한 css */
    .sub_txt { width:90%; margin: 30px auto;font-size:0.95rem; color:#555; background:#f7f7f7;border-radius: 5px;text-align: justify}
	.sub_txt ul { width: 100%;margin: 0 auto;padding: 25px }
	.sub_txt ul li { padding-left: 20px;position: relative }
	.sub_txt ul li .number { content: '';display: inline-block;width: 5px;height: 5px;position: absolute;left: 0;top: 0 }/* 문단 리스트 스타일 : 숫자 */
    .sub_txt ul li .bullet { content: '';display: inline-block;width: 5px;height: 5px;background: #222;border-radius: 50%;position: absolute;left: 0;top: 10px }/* 문단 리스트 스타일 : 불릿 */
    
    /* FAQ에 대한 css */
    .faq_bg { width: 100%;height: 300px;background: url(./image/faq_bg.png)no-repeat center;background-size: cover; margin: 0 0 50px;position: relative }
    /*.faq_bg h3 { position: absolute;display: block;width: 100%;top: 50%;transform: translateY(-50%);text-align: center }*/
    
    .faq_wrap .accordion { border-bottom: 1px solid #6b8a0f;color: #6b8a0f;cursor: pointer;padding: 14px 25px;width: 100%;text-align: left;transition: 0.4s;margin-bottom:10px; }/* point_col와 동일한 색 적용 */
    .faq_wrap .accordion.active, .faq_wrap .accordion:hover { background-color: #6b8a0f;color: #fff }/* 아코디언 클래스를 클릭, 호버될 경우 배경색 변경 / point_col와 동일한 색 적용 */
    .faq_wrap .accordion::before { content: '';float: right;width: 15px;height: 15px; margin-left: 20px; border-bottom:2px solid #ccc;border-right:2px solid #ccc;transform: rotate(45deg) }/* 열림 버튼 생성 */
    .faq_wrap .accordion.active::before { transform: rotate(-135deg);margin-top: 10px }/* 숨기기 버튼 생성 */

    .faq_wrap .panel { background-color: inherit;max-height: 0;overflow: hidden;transition: 0.4s ease-in-out;opacity: 0;margin-bottom:10px; }
    .faq_wrap .panel ul { padding: 8px 18px; }
    .faq_wrap .panel.show { opacity: 1;max-height: 500px;padding: 20px 25px;box-shadow: 0 4px 6px 0 rgb(0 0 0 / 25%) }/* 패널에 클래스 show 붙을 경우 */
    
    
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
			<li class="on"><a href="javascript:;">연수기관 지정 소개</a></li>
			<li><a href="javascript:;">연수기관 지정 절차</a></li>
			<li><a href="javascript:;">시험감독관</a></li>
            <li><a href="javascript:;">FAQ</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <div class="page_title">
                <h1 class="top_tt point_col">연수기관 지정 소개</h1>
                <!--<h2 class="top_stt"></h2>-->
                <p class="top_txt">
                    GPC는 IPC와 경영시스템 심사원 인증 및 연수기관 지정과 관련하여 MLA를 체결함으로써 연수기관 지정에 대한 권한을 승인받았습니다. GPC에 등록된 심사원/선임심사원 교육 과정은 ISO/IEC 17021-1 및 ISO 19011을 기반으로 한 심사 수행에 대한 지침 및 ISO 표준 요구사항에 대한 내용으로 구성되어 있으며, 현재 아래와 같은 교육 과정이 등록되어 있습니다.
                </p>
            </div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/training_01.jpg" alt="심사원 교육 과정">
                            </dt>
                            <dd style="margin:0 0 70px">
                                <h3 class="con_stt point_col">
                                    <i class="fas fa-check-circle" style="margin-right:10px"></i>심사원 교육 과정
                                </h3>
                                <table class="type01">
                                    <tbody>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 9001:2015</p>
                                            </th>
                                            <td width="70%">
                                                <p>품질경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 13485:2016</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>의료기기 품질경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 14001:2015</p>
                                            </th>
                                            <td width="70%">
                                                <p>환경경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 22000:2018</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>식품안전경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 45001:2018</p>
                                            </th>
                                            <td width="70%">
                                                <p>안전보건경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 21001:2018</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>교육기관경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 22301:2019</p>
                                            </th>
                                            <td width="70%">
                                                <p>비즈니스연속성경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO/IEC 27001:2013</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>정보보안경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO/IEC 27701:2019</p>
                                            </th>
                                            <td width="70%">
                                                <p>개인정보경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 37001:2016</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>부패방지경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 22716:2007</p>
                                            </th>
                                            <td width="70%">
                                                <p>우수화장품 제조 및 품질관리시스템 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 21384-3:2019</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>무인항공시스템 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 50001:2018</p>
                                            </th>
                                            <td width="70%">
                                                <p>에너지경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row" class="even">
                                                <p>ISO 55001:2014</p>
                                            </th>
                                            <td width="70%" class="even">
                                                <p>자산경영시스템 인증 심사원</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" scope="row">
                                                <p>ISO 37301:2021</p>
                                            </th>
                                            <td width="70%">
                                                <p>컴플라이언스경영시스템 인증 심사원</p>
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
                <h1 class="top_tt point_col">연수기관 지정 절차</h1>
                <!--<h2 class="top_stt">ISO 45001:2018</h2>-->
                <!--<p class="top_txt"></p>-->
            </div>
            <div class="page_con">
                <ul>
                    <li class="con">
                        <dl>
                            <dt>
                                <h3 class="con_tt point_col"><i class="fas fa-check-circle" style="margin-right:10px"></i>연수기관 프로세스</h3>
                            </dt>
                            <dd class="con_txt" >
                                <div class="step_wrap">
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 1</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/form.png" alt="신청서 접수">
                                        </div>
                                        <h4 class="arrow_tit">1. 신청서 접수</h4>
                                        <p>신청서 및 계약서 작성 후 관련 자료와 함께 서류를 메일로 제출합니다.</p>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 2</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/invoice.png" alt="비용 납부">
                                        </div>
                                        <h4 class="arrow_tit">2. 비용 납부</h4>
                                        <p>연수기관 지정 비용에 대한 인보이스가 발행됩니다.</p>
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
                                        <p>제출된 서류를 검토하여, 필요할 경우 서류 보완이 요구됩니다.</p>
                                    </div>
                                </div>
                                <div class="step_wrap">
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 4</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/audit.png" alt="현장심사">
                                        </div>
                                        <h4 class="arrow_tit">4. 현장심사</h4>
                                        <p>서류 심사 통과 후 연수기관의 교육 현장 및 시험 절차를 평가합니다.</p>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 5</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/compliant.png" alt="최종 승인">
                                        </div>
                                        <h4 class="arrow_tit">5. 최종 승인</h4>
                                        <p>현장심사 결과를 바탕으로 연수기관 지정에 대하여 최종 승인합니다.</p>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 6</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/certificate.png" alt="지정서 발행">
                                        </div>
                                        <h4 class="arrow_tit">6. 지정서 발행</h4>
                                        <p>최종 승인을 받은 연수기관에 공인 연수기관 지정서를 발행합니다.</p>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 02 종료 +++++--> 

        <article><!--+++++ 컨텐츠 03 시작 +++++-->
            <div class="page_title">
                <h1 class="top_tt point_col">시험감독관</h1>
                <!--<h2 class="top_stt">ISO 45001:2018</h2>-->
                <p class="top_txt">
                    GPC 지정 연수기관에서는 교육 과정 완료 후 시험을 같이 진행하고 있습니다. 따라서 연수기관에서는 반드시 GPC에 시험감독관 등록을 해야 합니다.
                </p>
            </div>
            <div class="page_con">
                <ul>
                    <li class="con">
                        <dl>
                            <dt>
                                <h3 class="con_tt point_col"><i class="fas fa-check-circle" style="margin-right:10px"></i>시험감독관 등록</h3>
                            </dt>
                            <dd>
                                <div class="con_img inside">
                                    <img src="./image/training_02.jpg" alt="시험감독관 등록">
                                </div>
                                <div class="sub_txt">
                                    <ul><span class="point_b1"><i class="far fa-edit"></i> <span class="nbsp">&nbsp;</span>응시자 20명 당 최소 1명의 시험감독관이 배정되며, 시험감독관은 다음과 같은 업무를 수행합니다.</span>
                                        <li><span class="bullet"></span>응시자들의 신분 확인</li>
                                        <li><span class="bullet"></span>시험 안내(제한시간, 유의사항, 부정행위 금지, 응시자의 권리, 이의제기 방법, 합격 기준 등)</li>
                                        <li><span class="bullet"></span>시험 감독</li>
                                        <li><span class="bullet"></span>부정행위자 색출 및 조치</li>
                                        <li><span class="bullet"></span>시험지, 답안지의 배포 및 회수</li>
                                        <li><span class="bullet"></span>회수된 시험지 및 답안지의 밀봉, 제출</li>
                                    </ul>
                                </div>
                                <div class="sub_txt">
                                    <ul>
                                        시험감독관 또한 공정성을 유지해야 하며 응시자들과 이해관계가 없어야 합니다.<br>
                                        GPC는 시험감독관 신청자에 대한 간단한 이력 확인 및 내부절차에 따른 평가를 통하여 시험감독관으로 등록하고 있습니다.<br>
                                        ** 시험과 관련한 모든 권한은 GPC에게 있습니다.
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 03 종료 +++++--> 
 
        
<!--===========================================================================================================================-->
   
        
        <article><!--+++++ 컨텐츠 04 시작 +++++--> 
            <div class="faq_wrap"> 
                <div class="faq_bg"></div>

                <p class="accordion active">Q1. GPC 연수기관으로 등록하려고 합니다. 필요한 서류는 무엇인가요?</p>
                <div class="panel show">
                    A. GPC 연수기관으로 등록할 경우 다음 자료를 제출해 주셔야 합니다.
                    <ul>
                        <li>1)	연수기관 운영 매뉴얼 및 절차서</li>
                        <li>2)	강사 적격성 자료 (학력, 경력, 심사이력 등)</li>
                        <li>3)	교육 교재</li>
                        <li>4)	교육 수료증 샘플</li>
                    </ul>
                </div>

                <p class="accordion">Q2. 서류 검토 후 현장심사에서는 어떤 것을 평가하나요?</p>
                <div class="panel">
                    A. 교육 현장 및 시험 절차를 평가합니다. 교육이 진행되는 장소의 적합성 확인, 교육을 진행하는 강사 및 시험감독관과의 인터뷰를 시행하며 필요한 경우 교육에 대한 입회를 수행합니다.
                </div>

                <p class="accordion">Q3. 교육 수료증에는 어떤 내용이 포함되어야 하나요?</p>
                <div class="panel">
                    A. 교육 수료증에는 아래와 같은 내용이 포함되어야 합니다.
                    <ul>
                        <li>1)	교육 수료자 성명</li>
                        <li>2)	연수기관명</li>
                        <li>3)	교육과정명</li>
                        <li>4)	교육완료일자</li>
                        <li>5)	고유 식별 번호</li>
                        <li>6)	교육과정 기간</li>
                        <li>7)	인증서 발행일</li>
                    </ul>
                </div>

                <p class="accordion">Q4. ISO 9001 심사원 교육 과정을 등록하였는데, ISO 14001 교육 과정을 추가로 등록하고자 합니다. 필요한 서류가 무엇인가요?</p>
                <div class="panel">A. 규격을 추가하는 경우, 추가하려는 규격에 대한 교육 교재 및 강사 적격성 평가 자료가 필요합니다.</div>
                
                <p class="accordion">Q5. 연수기관 등록 이후 매년 연회비를 납부해야 하나요?</p>
                <div class="panel">A. 연회비는 매년 납부해야 하며, 매년 주기에 맞추어 메일로 안내 드리고 있습니다.</div>
            </div>
        </article><!--+++++ 컨텐츠 04 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        
        
    </div><!-------div class="tab_con" 종료------>
    
</div><!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>