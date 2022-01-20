<?php
	include_once('./_common.php');
$g5['title'] = '교육';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /* ---------------------- 시작: 컨텐츠 페이지별 css ---------------------- */ 

	.point_col { color:#8a380f;border-color: #8a380f }/*각 서브페이지의 포인트 컬러*/
    .point_b1 { display: block;color: #d63217; font-size: 1rem; font-weight: 500; margin-bottom: 10px }/* 본문의 강조부분 css */
    
    /* 컨텐츠 02 GPC 교육 진행 절차에 대한 css */
    .arrow { position: relative;margin: 0 0 50px }
    .triangle { display: inline-block;position: absolute;left: -16px;top: 15px;width: 0;height: 0;border-left: 30px solid transparent;border-right: 30px solid transparent;border-bottom: 30px solid #fff;transform: rotate(90deg);}
    .arrow_tit { font-size:1.1rem;font-weight: 500;margin-bottom: 10px }
    .arrow_txt { display: inline-block;width: 100%;height: 60px;background: #8a380f;text-align: center;font-size: 1.15rem;font-weight: bold;line-height: 60px;color: #fff; }/* point_col와 동일한 색 적용 */
    .step_wrap { display: flex;margin: 20px 0 50px }
    .step { flex: 1;padding: 20px }
    .icon { width: 40%;text-align: center;margin: 0 auto 30px }
    
    
    
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
    
    .faq_wrap .accordion { border-bottom: 1px solid #8a380f;color: #8a380f;cursor: pointer;padding: 14px 25px;width: 100%;text-align: left;transition: 0.4s;margin-bottom:10px; }/* point_col와 동일한 색 적용 */
    .faq_wrap .accordion.active, .faq_wrap .accordion:hover { background-color: #8a380f;color: #fff }/* 아코디언 클래스를 클릭, 호버될 경우 배경색 변경 / point_col와 동일한 색 적용 */
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
			<li class="on"><a href="javascript:;">교육과정 소개</a></li>
			<li><a href="javascript:;">교육 진행 절차</a></li>
            <li><a href="javascript:;">FAQ</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <div class="page_title">
                <h1 class="top_tt point_col">교육과정 소개</h1>
                <!--<h2 class="top_stt">ISO 9001:2015</h2>-->
                <p class="top_txt">
                    GPC는 경영시스템 심사원 인증 및 연수기관 지정과 관련한 IPC와의 MLA 체결을 통하여 ISO 경영시스템 심사원 교육 서비스를 제공하고 있습니다. 또한 IPC의 Scheme 및 ISO/IEC 17024의 요구사항 등 교육과 관련된 국제 공인 표준을 기반으로 LMS (Learning Management System)를 개발하여 온라인을 통한 전문인력 교육 서비스를 제공합니다. 온라인 심사원 교육 과정을 수료하면 ISO/IEC 17024를 기반으로 수립된 심사원 등록 요구사항에 따라 평가 과정을 거쳐 심사원(보) 자격을 취득할 수 있으며, 전문인력 양성 교육 과정을 통하여 전문가의 실무 능력 및 경영시스템 심사 스킬을 향상할 수 있을 뿐만 아니라 심사원 자격 갱신 요구사항으로 규정되어 있는 CPD (Continuing Professional Development) 활동으로 인정될 수 있습니다.
                </p>
            </div>
            <div class="page_con">
                <ul>
                    <li class="con">
                        <dl>
                            <dt>
                                <h3 class="con_tt point_col"><i class="fas fa-check-circle" style="margin-right:10px"></i>심사원 교육 과정</h3>
                            </dt>
                            <dd>
                                <div class="con_img inside">
                                    <img src="./image/edu_01.jpg" alt="심사원 교육 과정">
                                </div>
                                <div class="sub_txt">
                                    <ul>
                                        <li>
                                            <span class="number">1. </span>공통교육과정
                                            <span style="display:block">- 경영시스템 심사 수행에 대한 가이드라인 교육</span>
                                            <span style="display:block">- 심사원 또는 선임심사원으로 활동하기 위해서는 필수적으로 수료해야 하는 교육</span>
                                        </li>
                                        <li>
                                            <span class="number">2. </span>정규교육과정
                                            <span style="display:block">- 규격 별 요구사항 및 경영시스템 심사 수행에 대한 가이드라인 교육</span>
                                            <span style="display:block">- 교육 수료 후 ISO/IEC 17024 기반 심사원 등록 요구사항에 따라 평가 과정을 거쳐 심사원보 자격 취득 가능</span>
                                        </li>
                                        <li>
                                            <span class="number">3. </span>자격확대과정
                                            <span style="display:block">- 규격 별 요구사항에 대한 교육</span>
                                            <span style="display:block">- 교육 수료 후 ISO/IEC 17024 기반 심사원 등록 요구사항에 따라 평가 과정을 거쳐 심사원보 자격 취득 가능</span>
                                            <span style="display:block">- 타 표준 심사원보 이상 자격자 대상</span>
                                        </li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   

        <article><!--+++++ 컨텐츠 02 시작 +++++-->
            <div class="page_title">
                <h1 class="top_tt point_col">교육 진행 절차</h1>
                <!--<h2 class="top_stt">ISO 45001:2018</h2>-->
                <!--<p class="top_txt"></p>-->
            </div>
            <div class="page_con">
                <ul>
                    <li class="con">
                        <dl>
                            <dt>
                                <h3 class="con_tt point_col"><i class="fas fa-check-circle" style="margin-right:10px"></i>교육 프로세스</h3>
                            </dt>
                            <dd class="con_txt" >
                                <div class="step_wrap">
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 1</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/web.png" alt="교육 신청 접수">
                                        </div>
                                        <h4 class="arrow_tit">1. 교육 신청 접수</h4>
                                        <p>온라인 교육 홈페이지에 회원 가입 및 수강을 원하는 교육 과정 선택</p>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 2</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/bill_02.png" alt="교육 비용 납부">
                                        </div>
                                        <h4 class="arrow_tit">2. 교육 비용 납부</h4>
                                        <p>페이팔 또는 계좌 이체를 통하여 교육 비용 납부</p>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 3</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/online-learning.png" alt="동영상 강의 수강">
                                        </div>
                                        <h4 class="arrow_tit">3. 동영상 강의 수강</h4>
                                        <p>각 유닛마다 동영상 강의 수강 후 교육 이해도를 평가하기 위한 유닛 테스트 진행</p>
                                    </div>
                                </div>
                                <div class="step_wrap">
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 4</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/open-book.png" alt="교육 성취도 평가">
                                        </div>
                                        <h4 class="arrow_tit">4. 교육 성취도 평가</h4>
                                        <p>주어진 사례에서 부적합 사항을 찾아내는 케이스스터디 및 워크샵을 통해 ISO 경영시스템 요구사항에 대한 이해도 및 응용력 평가</p>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 5</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/test.png" alt="최종 시험">
                                        </div>
                                        <h4 class="arrow_tit">5. 최종 시험</h4>
                                        <p>ISO 경영시스템 요구사항에 대한 지식, 심사활동을 수행하고자 하는 후보자의 적격성 및 자질을 평가</p>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 6</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/certificate.png" alt="교육 수료증 발행">
                                        </div>
                                        <h4 class="arrow_tit">6. 교육 수료증 발행</h4>
                                        <dl>
                                            <dt>두 기준을 모두 충족할 경우 교육 수료</dt>
                                            <dd>1) 교육 진행률 100%</dd>
                                            <dd>2) 최종 시험 정답률 70%</dd>
                                        </dl>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 02 종료 +++++--> 

        <article><!--+++++ 컨텐츠 03 시작 +++++--> 
            <div class="faq_wrap"> 
                <div class="faq_bg"></div>

                <p class="accordion active">Q1. 정규교육과정과 자격확대과정의 차이가 무엇인가요?</p>
                <div class="panel show">
                    A. 정규교육과정은 ISO 19011 및 ISO/IEC 17021-1에서 다루고 있는 ISO 경영시스템 심사 수행에 관한 내용과 해당 ISO 표준 요구사항에 대한 내용으로 구성되어 있습니다.<br><br>
                    예시) ISO 9001 정규교육과정: ISO 9001 요구사항 + ISO 경영시스템 심사 수행(ISO 19011 및 ISO/IEC 17021-1)<br><br>
                    자격확대과정은 해당 ISO 표준 요구사항에 대해서만 다뤄지는 교육 과정으로, 타 표준 심사원보 이상의 자격자를 대상으로 합니다. 따라서 이전에 ISO 심사원 정규교육과정 또는 ISO 19011 및 ISO/IEC 17021-1에 대한 교육을 수료하지 않은 경우에 자격확대과정을 수강하면 심사원(보) 자격 등록이 어렵습니다.

                </div>

                <p class="accordion">Q2. 최종 시험에 불합격할 경우 시험을 다시 응시할 수 있나요?</p>
                <div class="panel">
                    A. 시험에 불합격할 경우 1번의 재시험 기회가 주어집니다.
                </div>
            </div>
        </article><!--+++++ 컨텐츠 03 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        
        
    </div><!-------div class="tab_con" 종료------>
    
</div><!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>