<?php
	include_once('./_common.php');
$g5['title'] = '연수기관';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /* 컨텐츠 페이지별 css */
	.fc_pointer { color:#00d4d4 }/*각 서브페이지의 포인트 컬러*/
    .link:hover { color: blue;text-decoration: underline }/* 링크에 대한 css */
    
    /* 각 페이지 탭메뉴 css */
    .tab_menu.tab01 ul li { width: 33.3% }
    .tab_menu.tab02 ul li a { background: #00d4d4; border: 1px solid #03a696 }
    .tab_menu.tab02 ul li:last-child a { border-right: 1px solid #03a696 }
    .tab_menu.tab02 ul li:hover a { background: rgba(0,212,212,0.5) }
    
    /* 연수기관 지정 절차(컨텐츠 02) 페이지에 대한 css */
    .ordinal { display:flex;margin-top: 50px }
    .ordinal li { flex: 1;background: rgba(0,212,212,0.5);text-align: center;padding: 10px;margin: 0 50px 0 0;position: relative }
    .ordinal li::before { content: '';display: block;width: 20px;height: 20px;border-bottom: 2px solid #222;border-right: 2px solid #222;transform:rotate(-45deg);position: absolute;top: 13px;right: -30px }
    .ordinal li:last-child { margin: 0 }
    .ordinal li:last-child::before { top: 55px;right: 50%;transform:rotate(45deg) }
    .ordinal:last-child li:nth-child(1)::before { right: -37px;transform:rotate(135deg) }
    .ordinal:last-child li:nth-child(2)::before { right: -37px;transform:rotate(135deg) }
    .ordinal:last-child li:nth-child(3)::before { display: none }
    
    /* 컨텐츠 공통 css */ 
    .content_wrap {width:100%; max-width:1200px; margin:0 auto; font-size: 1.2em !important;font-weight: 400;line-height: 1.5 }/* 서브페이지 전체 레이아웃 */
    section, article { margin-bottom: 70px }
    
    .point_b1 { font-size: 2em; font-weight: 500; text-align: center; margin-bottom: 30px }/* 문단 제목 css */
    .point_b2 { display: block;font-size: 1.1em; font-weight: 500; margin-bottom: 15px }/* 본문의 강조부분 css */
    .nbsp {display: inline-block; text-indent: 0.4em }/* 리스트 자간 조절 */
    .center-diamond { border: 0; height: 2px; width: 100%; position: relative; margin: 50px auto 0; background: rgba(0,212,212,0.5) }/* 문단 처음과 끝부분 수평 가로선, fc_pointer와 동일한 색 적용 */
    .center-diamond::before { content: ""; width: 10px;height: 10px;background: #00d4d4; display: inline-block; border: 2px solid #00d4d4; position: absolute;top: -5px;left: 50%;margin: 0 0 0 -3px; -webkit-transform: rotate(45deg) }/* 문단 처음과 끝부분 선 위에 다이아몬드모양, fc_pointer와 동일한 색 적용 */
    
    .con_txt { width:80%; margin: 30px auto; border-top:1px solid #ddd; font-size:1em; line-height: 1.6; color:#555; background:#f8f8f8;text-align: justify}/* 부가설명박스의 레이아웃 */
	.con_txt ul { width: 90%;margin: 0 auto;padding: 25px }/* 부가설명박스의 css */

    .con_img {width: 100%;text-align: center;margin: 70px auto }/* 문단에 쓰이는 이미지의 css */
    .con_img img {width: 40%;}/* 문단의 쓰이는 이미지의 크기 */
      
    .page_con { width: 90%;margin: 0 auto 70px }/* 컨텐츠 부분 레이아웃 */
    
	.page_title { margin:70px auto }/* 제목 문단의 레이아웃 */
	.page_title .sub_tit { width:100%; margin:0 auto; text-align:center; font-size:2.2em; font-weight:600; }/* 소제목 css */
	.page_title .sub_tit:after { content:""; clear:both; display:block; width:30px; margin:40px auto 0; border:1px solid #000; }/* 소제목의 arrow css */
	.page_title .sub_tit2 { width:100%; margin:70px auto; text-align:center; font-size:2.5em; font-weight:600; }/* 대제목 css */
	.sub_txt { width: 100%;margin: 70px auto;text-align: justify }/* 본문의 레이아웃 */
    

    
    /* ------------------------ 시작: 반응형 css ------------------------ */   

	@media screen and (max-width:768px) {	
        .con_img { width: 50% }
        .con_txt { width: 100% }
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; }
        .page_con { width: 100% }
        .con_txt ul { width: 100% }
        .container_title { display:none !important }
	}
    
    @media screen and (max-width:640px) {	
        .con_img { width: 90% }
        .page_con .con_txt { margin: 20px auto }
        .step_wrap { display: block;margin: 0 }
        .step { margin: 0 auto 30px }
        .arrow_tit { font-size: 1rem }
       
	}

	@media all and (min-width:360px) and (max-device-width : 414px) {
        .page_title .sub_tit2 { font-size: 2.2em; font-weight: 600; }
        .page_title .sub_tit { font-size: 1.6em }
        .page_con { width: 100% }
        .con_txt ul { width: 100% }
        

	}
    
    /* ------------------------ 종료: 반응형 css ------------------------ */  
    
    
    
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */    
    
</style>

<!-- 
    탭 메뉴 구현
    2021.06.09 
-->
<style>
    /* 화면(VIEW) 영역 기본값 및 활성화 값을 위한 CSS 설정 */
    .tab_con2 .roll{display:none !important;}
    .tab_con2 .roll.on{display:block !important;}
</style>
<script>
    $(function(){
        $(".tab_menu.tab")
        // 탭 버튼 클릭 이벤트 연동
        $(".tab_menu.tab02 li").on('click', function(e){
            // 현재 선택된 탭
            var target = $(e.currentTarget);

            // 모든 활성화 상태 초기화
            $(".tab_menu.tab02 li").removeClass('on'); // 모든 탭 버튼에 활성화 클래스인 on 삭제
            $(".tab_con2 .roll").removeClass('on'); // 모든 섹션(화면)에 활성화 클래스인 on 삭제

            // 선택된 탭 버튼과 섹션 활성화
            var index = Number(target.index()) + 1; // 현재 선택된 탭의 인덱스 (몇번째인지)
            
            $("#con1-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con2-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con3-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            
            $(target).addClass('on'); // 선택된 탭 버튼에 활성화 클래스인 on 추가
        });
    })

</script>
<!-- 탭 메뉴 구현 끝 -->
<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->

<div class="content_wrap">
	<div class="tab_menu tab01">
	    <h2>연수기관 서비스</h2>
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">개요</a></li>
			<li><a href="javascript:;">연수기관 지정 절차</a></li>
			<li><a href="javascript:;">연수기관 시험감독관</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <div class="page_title">
                <h1 class="sub_tit">연수기관/개요</h1>
                <h2 class="sub_tit2 fc_pointer">연수기관이란?</h2>
                <p class="sub_txt">
                    다양한 산업분야에 종사하는 모든 인원들에게 산업분야에 적용되는 표준에 근거하여 전문 인력 양성을 위한 교육 서비스를 제공하는 기관을 의미합니다.<br><br>
                    IPC (International Personnel Certification Association)는 IPC의 활동분야 (개인인증 및 연수기관 지정)에 대하여 IAF (International Accreditation Forum)와 MLA를 체결하였고 IPC의 정회원인 국제 개인인증기관 GPC(Global Personnel Certification)은 IAF MLA를 통해 연수기관 지정에 대한 업무를 수행하고 있습니다.<br><br>
                    GIC는 IGC인증원, GPC인증원과의 협력을 바탕으로, 심사원 교육 및 인증 서비스를 제공합니다.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt style="margin-bottom: 70px"></dt>
                            <dd>
                                <h3 class="point_b1">협력기관 IGC의 역량</h3>
                                <p class="sub_txt">
                                    IGC는 GPC로부터 공식 연수기관 지정을 받아 다양한 산업분야에 대해 교육서비스를 제공하고 있습니다. IGC가 제공하는 교육서비스는 국내는 물론 전 세계 어디서나 동일하게 인정받을 수 있는 국제적인 서비스로 높은 신뢰성을 확보하고 있습니다.<br><br>
                                    IGC는 다양한 인증스킴 확보를 토대로 다음과 같은 다양한 서비스의 제공이 가능합니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>ISO 경영시스템 심사원/선임심사원/내부심사원 양성 교육</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>FSSC 22000 교육 (FSSC 본사 공인 교육기관)</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>FDA, FSMA 교육 (FSVP, PCQI)</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>전기 전자 시험 교육</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>식품 영양 시험 교육 (화학, 생물학적)</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>CE/MDR 교육</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>ISO/IEC 17021 교육</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>ISO/IEC 17025 교육</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>ISO 19011 교육</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt style="margin-bottom: 70px"></dt>
                            <dd>
                                <h3 class="point_b1">협력기관 GPC의 역량</h3>
                                <p class="sub_txt">
                                    GPC는 다양한 인증스킴 확보를 토대로 다음과 같은 다양한 서비스의 제공이 가능합니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>GPC는 ISO/IEC 17024에 의거하여 미국에 소재한 International Accreditation Service (IAS)로부터 인정받은 개인의 자격을 인증해주는 국제적인 개인인증 기관입니다.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>개인인증은 적용되는 표준에 근거하여 능력의 적합성을 평가한 이후 인증서를 발행합니다.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>IAF 산하의 지역기구인 EA (유럽인정기관협력기구), APAC (유럽인정기관협력기구)가 개인인증에 대한 MLA가 체결된 상태이며 나머지 지역기구인 IAAC (미주지역인정기관협력기구)까지 MLA 체결 시 모든 개인자격 인증 또한 IAF 로고가 적용된 개인인증서를 발행할 수 있도록 요청할 예정입니다.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>GPC는 다양한 인증스킴 확보를 통해 개인의 자격을 위한 다양한 서비스를 제공함으로써 수준 높은 전문인력을 양성하기 위한 지속적인 노력을 할 것입니다.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   

        <article><!--+++++ 컨텐츠 02 시작 +++++--> 
             <div class="page_title">
                <h1 class="sub_tit">연수기관/지정 절차</h1>
                <h2 class="sub_tit2 fc_pointer">연수기관 지정 절차</h2>
                <p class="sub_txt">
                    연수기관 지정을 위해서는 연수기관 운영을 위한 관리시스템 및 강의장소를 정기적으로 평가받아야 합니다.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt style="margin-bottom: 70px"></dt>
                            <dd>
                                <h3 class="point_b1">연수기관 신청 시 제출서류</h3>
                                <p class="sub_txt">
                                    협력기관인 GPC로부터 연수기관 지정 시 검토되어야 하는 항목은 다음과 같습니다. 이는 기관에 대한 평가자료로 활용되며, GPC 보안절차에 의해 보호됩니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>매뉴얼 및 절차서</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>해당할 경우 외주업체 정보</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>강사 이력 및 증빙자료</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>강의 관련 자료, 장소, 기준, 전체계획표, 교재 등</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>케이스 스터디 및 시나리오 등 워크샵 자료</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>개인 또는 팀 활동 평가 기술절차</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>교육 수료증 샘플</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>교육과정 중 지속적 평가 자료</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt style="margin-bottom: 70px"></dt>
                            <dd>
                                <h3 class="point_b1">신청 절차</h3>
                                <ul class="ordinal">
                                    <li>신청서 접수</li>
                                    <li>비용납부</li>
                                    <li>서류검토</li>
                                </ul>
                                <ul class="ordinal">
                                    <li>지정서 발행</li>
                                    <li>최종 승인</li>
                                    <li>현장심사</li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 02 종료 +++++--> 

        <article><!--+++++ 컨텐츠 03 시작 +++++-->
            <div class="page_title">
                <h1 class="sub_tit">연수기관/시험감독관</h1>
                <h2 class="sub_tit2 fc_pointer">연수기관 시험감독관 등록 제공서비스</h2>
                <p class="sub_txt">
                    전기를 사용하는 제품의 안전성을 입증하는 것은 전 세계 모든 시장 진입 시 필수적으로 요구되는 중요한 사항입니다.<br>
                    세계 최대 시장 중 하나인 유럽 시장에 진입하려는 전기/전자제품 제조업체는 시장 진입을 위해 자사의 제품의 안전성이 입증이 되어야 합니다. 유럽 지역에 수입되고 판매되는 많은 전기 및 전자 제품은 저전압 지침 요구사항을 따라야 합니다.<br>
                    CE 마크를 부착한 제품은 저전압 지침 및 적용되는 다른 지침 (EMC 지침 등)의 요구사항을 준수하고 있다고 간주되며 EC 회원국 시장에 법적으로 접근이 보장됩니다.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt style="margin-bottom: 70px"></dt>
                            <dd>
                                <h3 class="point_b1">연수기관 시험 감독관 등록</h3>
                                <p class="sub_txt">
                                    연수기관에서 협력기관인 GPC의 시험을 치르는 경우 공평성을 위해 반드시 GPC에 시험감독관 등록을 해야 합니다.<br>
                                    <span class="fc_pointer">※ 시험과 관련한 모든 권한은 GPC에게 있습니다.</span>
                                </p>
                                <div class="con_txt">
                                    <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>응시자 20명 당 최소 1명의 시험감독관이 배정되며, 시험감독관은 다음과 같은 업무를 수행합니다.</span>
                                        <li>- <span class="nbsp">&nbsp;</span>응시자들의 신분 확인</li>
                                        <li>- <span class="nbsp">&nbsp;</span>시험 안내 (제한시간, 유의사항, 부정행위 금지, 응시자의 권리, 이의제기 방법, 합격 기준 등)</li>
                                        <li>- <span class="nbsp">&nbsp;</span>시험 감독</li>
                                        <li>- <span class="nbsp">&nbsp;</span>부정행위자 색출 및 조치</li>
                                        <li>- <span class="nbsp">&nbsp;</span>시험지 답안지의 배포 및 회수</li>
                                        <li>- <span class="nbsp">&nbsp;</span>회수된 시험지 및 답안지의 밀봉, 제출</li><br><br>
                                        <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>시험감독관 또한 공정성을 유지해야 하며 응시자들과 이해관계가 없어야 합니다.</span><br><br>
                                        <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>GPC는 시험감독관으로 신청한 후보자에 대한 간단한 이력 확인 및 내부절차에 따라 평가 후 등록될 수 있습니다.</span><br><br>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 03 종료 +++++--> 
    </div><!-------div class="tab_con" 종료------>
</div><!---------/class="content_wrap" 종료/------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>