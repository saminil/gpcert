<?php
	include_once('./_common.php');
$g5['title'] = '시험';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /* ---------------------- 시작: 컨텐츠 페이지별 css ---------------------- */ 
    
	.point_col { color:#0f8a75;border-color: #0f8a75 }/*각 서브페이지의 포인트 컬러*/
    .point_b1 { display: inline-block;color: #d63217; font-size: 1rem; font-weight: 500; margin-bottom: 10px }/* 본문의 강조부분 css */
    .link:hover { color: blue;text-decoration: underline }/* 링크에 대한 css */
    
    /* 문단 부분에 대한 css */
    .page_con .con_txt .con_txt_li p { padding: 15px 0 }
    .page_con .con_txt .con_txt_li ul { margin: 0 3% }
    .page_con .con_txt .con_txt_li .con_li_tt { font-size: 1.05rem;font-weight: 500;padding: 50px 0 0;position: relative }
    .page_con .con_txt .con_txt_li .con_li_tt::before { content: '';display: inline-block;width: 20px;height: 3px;background: #0f8a75;position: absolute;left: 0;top: 35px }/* point_col와 동일한 색 적용 */
    
    /* 컨텐츠 02 GPC 시험응시 절차에 대한 css */
    .arrow { position: relative;margin: 0 0 50px }
    .triangle { display: inline-block;position: absolute;left: -16px;top: 15px;width: 0;height: 0;border-left: 30px solid transparent;border-right: 30px solid transparent;border-bottom: 30px solid #fff;transform: rotate(90deg);}
    .arrow_tit { font-size:1.1rem;font-weight: 500;margin-bottom: 10px }
    .arrow_txt { display: inline-block;width: 100%;height: 60px;background: #0f8a75;text-align: center;font-size: 1.15rem;font-weight: bold;line-height: 60px;color: #fff; }/* point_col와 동일한 색 적용 */
    .step_wrap { display: flex;margin: 20px 0 50px }
    .step { flex: 1;padding: 20px }
    .icon { width: 40%;text-align: center;margin: 0 auto 30px }
    
    .con_txt .step_wrap:nth-child(2) .step {flex: 0.315}/* .step의 갯수가 홀수여서 사이즈 변경 */
    
    
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
    
    .faq_wrap .accordion { border-bottom: 1px solid #0f8a75;color: #0f8a75;cursor: pointer;padding: 14px 25px;width: 100%;text-align: left;transition: 0.4s;margin-bottom:10px; }/* point_col와 동일한 색 적용 */
    .faq_wrap .accordion.active, .faq_wrap .accordion:hover { background-color: #0f8a75;color: #fff }/* 아코디언 클래스를 클릭, 호버될 경우 배경색 변경 / point_col와 동일한 색 적용 */
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
			<li class="on"><a href="javascript:;">GPC 시험 소개</a></li>
			<li><a href="javascript:;">GPC 시험응시 절차</a></li>
            <li><a href="javascript:;">FAQ</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <div class="page_title">
                <h1 class="top_tt point_col">GPC 시험 소개</h1>
                <!--<h2 class="top_stt">ISO 9001:2015</h2>-->
                <p class="top_txt">
                    GPC로부터 심사원 인증을 받거나 유지하기 위해서는 반드시 해당 표준과 관련해 시험을 치러야 합니다. 시험 장소와 시간은 미리 통보되며, 통상 토요일 오전 10시에 진행됩니다. 시험 응시자는 시험 시작 10분 전에 도착해야 하며, 지각 또는 결석 시 자동으로 0점 처리됩니다. 시험 응시자는 시험을 위해 신분증(사진 포함)을 제시해야 합니다. 시험 응시자는 시험에 있어 사용이 금지된 물건을 감독관에게 미리 맡겨야 합니다. 부정행위가 확인될 경우, 시험 감독관은 퇴실을 요구할 수 있으며 더 이상의 시험은 불가합니다.
                </p>
            </div>
            <div class="page_con">
                <ul>
                    <li class="con">
                        <dl>
                            <dt>
                                <h3 class="con_tt point_col"><i class="fas fa-check-circle" style="margin-right:10px"></i>GPC 시험</h3>
                            </dt>
                            <dd>
                                <div class="con_img inside">
                                    <img src="./image/test_01.jpeg" alt="GPC 시험">
                                </div>
                                <div class="con_txt">
                                    시험은 지식 및 인성시험으로 구성되어 있으며, 배정된 시간은 총 100분입니다. 지식 시험은 오픈북으로 진행됩니다.
                                    <div class="con_txt_li">
                                        <h4 class="con_li_tt point_col">1. 지식시험</h4>
                                        <p>
                                            지식 시험은 ISO 표준에 대한 지식을 평가하기 위한 시험으로 심사활동을 수행하고자 하는 후보자의 적격성 및 자질을 평가합니다.<br>
                                            지식 시험은 총 50문항으로, 4개의 섹션으로 구성되어 있으며, 아래 합격 기준을 모두 충족하여야 합격으로 인정됩니다.
                                        </p>
                                        <ul class="point_col">
                                            <li>- 섹션 별 정답률 40% 이상</li>
                                            <li>- 총 70점 이상 취득</li>
                                        </ul>
                                        <p>
                                            시험에 통과하지 못할 경우, 1번의 재시험 기회가 주어집니다.<br>
                                            연속으로 시험에 불합격할 경우, 시험 응시자는 1년간 지식 시험을 다시 치를 수 없습니다.
                                        </p>
                                    </div>
                                    <div class="con_txt_li">
                                        <h4 class="con_li_tt point_col">2. 인성 시험</h4>
                                        <p>
                                            인성 시험은 ISO 19011:2018에 기초하고 있으며, 심사원으로서 자격과 특성을 평가합니다. 또한 시험 응시자가 문항에 대해 어느 정도 이해하고 있는지를 파악합니다.
                                        </p>
                                        <p>
                                            인성 시험은 총 25문항으로, 70점 이상일 경우 합격입니다.<br>
                                            각 문항에 대해 최대 4점을 부여하며, 정답에서 멀어질수록 1점씩 감점됩니다. (미 선택 시, 0점) 시험 응시자들은 정답이라고 생각되는 것을 지체 없이 선택해야 합니다.
                                        </p>
                                        <p>
                                            시험에 통과하지 못할 경우, 1번의 면접의 기회가 주어집니다.<br>
                                            면접에 통과하지 못할 경우, 1년간 인성시험을 다시 치를 수 없습니다.
                                        </p>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <!--<hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">-->
                    <li class="con">
                        <dl>
                            <dt>
                                <h3 class="con_tt point_col"><i class="fas fa-check-circle" style="margin-right:10px"></i>시험 방법</h3>
                            </dt>
                            <dd>
                                <div class="con_img inside">
                                    <img src="./image/test_02.jpg" alt="시험 방법">
                                </div>
                                <div class="sub_txt">
                                    <ul><span class="point_b1"><i class="far fa-edit"></i> <span class="nbsp">&nbsp;</span>GPC시험은 3가지의 방법을 통해 진행될 수 있습니다.</span>
                                        <li>
                                            <span class="number">1. </span>연수기관
                                            <span style="display:block">- GPC로부터 지정 받은 연수기관에서 교육과 시험을 동시에 진행할 수 있습니다.</span>
                                        </li>
                                        <li>
                                            <span class="number">2. </span>GPC 방문
                                            <span style="display:block">- GPC본사에 직접 방문하여 시험을 치를 수 있습니다.</span>
                                            <span style="display:block">- GPC는 사전에 접수된 인원에 대해 매달 마지막 주 토요일 오전 10시에 시험을 진행합니다.</span>
                                        </li>
                                        <li>
                                            <span class="number">3. </span>개별 시험
                                            <span style="display:block">- 1, 2번의 시험 방법이 제한되는 경우, GPC의 절차에 따라 온라인으로 시험을 진행할 수 있습니다.</span>
                                            <span style="display:block">- 단, 시험을 성실히 진행하겠다는 선언 및 보안 준수 서약서가 요구되며, 위의 1, 2번의 시험 방법이 제한됨을 증명해야 합니다.</span>
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
                <h1 class="top_tt point_col">GPC 시험응시 절차</h1>
                <!--<h2 class="top_stt">ISO 45001:2018</h2>-->
                <!--<p class="top_txt"></p>-->
            </div>
            <div class="page_con">
                <ul>
                    <li class="con">
                        <dl>
                            <dt>
                                <h3 class="con_tt point_col"><i class="fas fa-check-circle" style="margin-right:10px"></i>시험 프로세스</h3>
                            </dt>
                            <dd class="con_txt" >
                                <div class="step_wrap">
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 1</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/form.png" alt="GPC 지식 및 인성 시험 신청">
                                        </div>
                                        <h4 class="arrow_tit">1. GPC 지식 및 인성 시험 신청</h4>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 2</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/paper.png" alt="신청 서류 검토">
                                        </div>
                                        <h4 class="arrow_tit">2. 신청 서류 검토</h4>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 3</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/date.png" alt="시험 일정 안내">
                                        </div>
                                        <h4 class="arrow_tit">3. 시험 일정 안내</h4>
                                    </div>
                                </div>
                                <div class="step_wrap">
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 4</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/test.png" alt="GPC 지식 및 인성 시험 진행">
                                        </div>
                                        <h4 class="arrow_tit">4. GPC 지식 및 인성 시험 진행</h4>
                                    </div>
                                    <div class="step">
                                        <div class="arrow">
                                            <span class="triangle"></span>
                                            <span class="arrow_txt"><span style="display: inline-block;width: 20px"></span>Step 5</span>
                                        </div>
                                        <div class="icon">
                                            <img src="./image/certificate.png" alt="합격증 발행">
                                        </div>
                                        <h4 class="arrow_tit">5. 합격증 발행</h4>
                                    </div>
                                </div>
                                <div class="sub_txt">
                                    <ul>
                                        GPC 시험을 진행하기 위해서는 꼭 신청서를 제출해야 합니다. 신청서에는 개인 정보 및 교육 수료를 증빙할 수 있는 내용을 기재해야 합니다. 신청 서류 검토 후 추가적인 보완이 필요없을 경우 시험 일정을 안내해드립니다. 추가적인 문의 사항이 있는 경우, <a href="mailto:info@gpcert.org" class="link">info@gpcert.org</a>로 연락해주시기 바랍니다.
                                    </ul>
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

                <p class="accordion active">Q1. ISO 9001 심사원 교육을 수료하였는데, 시험은 따로 응시하지 않았습니다. GPC에 심사원보로 등록하기 전에 시험을 보려고 하는데 어떤 방식으로 진행되나요?</p>
                <div class="panel show">
                    A. 교육 수료 후 시험을 응시하지 않은 경우, GPC에서 직접 시험 응시가 가능하며 다음 절차로 진행됩니다.
                    <ul>
                        <li>1)	GPC에 시험 신청 (신청서 및 수료증 제출)</li>
                        <li>2)	시험비용 청구</li>
                        <li>3)	시험장소 및 시간 통보</li>
                        <li>4)	시험 응시</li>
                        <li>5)	시험 합격증 발행</li>
                    </ul>
                </div>

                <p class="accordion">Q2. 시험 합격 기준은 어떻게 되나요?</p>
                <div class="panel">
                    A. 심사원 지식 시험의 경우, 총 4개 섹션으로 구성되어 있으며 아래와 같은 합격 기준을 모두 충족하여야 합격으로 인정됩니다.
                    <ul>
                        <li>1)	섹션 별 정답률 40% 이상</li>
                        <li>2)	총 70점 이상 취득</li>
                    </ul>
                    또한 심사원 인성 시험의 경우 총 70점 이상 취득하여야 합격으로 인정됩니다. 지식시험 불합격 시 한 번의 재시험 기회가 주어지며, 인성시험 불합격 시 한 번의 면접 기회가 주어집니다.
                </div>

                <p class="accordion">Q3. 시험 응시료는 어떻게 납부하나요?</p>
                <div class="panel">
                    A. GPC에 시험 응시 신청해주시면 접수 후 인보이스 형태로 시험 응시 비용을 안내 드리고 있습니다. 비용은 한 규격 당 40,000원(부가세 별도)이며 인보이스 하단의 계좌 정보로 계좌이체 또는 무통장입금 해주시면 됩니다.
                </div>

                <p class="accordion">Q4. 시험 응시 후 시험 결과는 언제 알 수 있나요?</p>
                <div class="panel">A. 시험 응시일 이후 1주일 이내로 시험 결과 통보 및 시험 합격증이 발행됩니다.</div>
                
                <p class="accordion">Q5. GPC 심사원 지식 시험과 인성 시험에 합격했습니다. 심사원으로 바로 등록할 수 있나요?</p>
                <div class="panel">A. 다른 심사원 등록 요구사항을 모두 충족하는 경우 신청서류 및 관련 자료를 제출해주시면 심사원으로 등록하실 수 있습니다.</div>
            </div>
        </article><!--+++++ 컨텐츠 03 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        
        
    </div><!-------div class="tab_con" 종료------>
    
</div><!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>