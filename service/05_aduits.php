<?php
	include_once('./_common.php');
$g5['title'] = '심사원인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /* 컨텐츠 페이지별 css */
	.fc_pointer { color:#1194a8 }/*각 서브페이지의 포인트 컬러*/
    .link:hover { color: blue;text-decoration: underline }/* 링크에 대한 css */
    
    /* 각 페이지 탭메뉴 css */
    .tab_menu.tab01 ul li { width: 33.3% }
    .tab_menu.tab02 ul li a { background: #1194a8; border: 1px solid #025159 }
    .tab_menu.tab02 ul li:last-child a { border-right: 1px solid #025159 }
    .tab_menu.tab02 ul li:hover a { background: rgba(17,148,168,0.5) }
    
    /* 컨텐츠 공통 css */ 
    .content_wrap {width:100%; max-width:1200px; margin:0 auto; font-size: 1.2em !important;font-weight: 400;line-height: 1.5 }/* 서브페이지 전체 레이아웃 */
    section, article { margin-bottom: 70px }    
    
    .point_b1 { font-size: 2em; font-weight: 500; text-align: center; margin-bottom: 30px }/* 문단 제목 css */
    .point_b2 { display: block;font-size: 1.1em; font-weight: 500; margin-bottom: 15px }/* 본문의 강조부분 css */
    .nbsp {display: inline-block; text-indent: 0.4em }/* 리스트 자간 조절 */
    .center-diamond { border: 0; height: 2px; width: 100%; position: relative; margin: 50px auto 0; background: rgba(17,148,168,0.5) }/* 문단 처음과 끝부분 수평 가로선, fc_pointer와 동일한 색 적용 */
    .center-diamond::before { content: ""; width: 10px;height: 10px;background: #1194a8; display: inline-block; border: 2px solid #1194a8; position: absolute;top: -5px;left: 50%;margin: 0 0 0 -3px; -webkit-transform: rotate(45deg) }/* 문단 처음과 끝부분 선 위에 다이아몬드모양, fc_pointer와 동일한 색 적용 */
    
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
	    <h2>심사원인증 서비스</h2>
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">Part 1</a></li>
			<li><a href="javascript:;">Part 2</a></li>
            <li><a href="javascript:;">Part 3</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <article style="display:block"><!--+++++ 컨텐츠 01 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 9001</a></li>
                    <li><a data-slide-index="1">ISO 14001</a></li>
                    <li><a data-slide-index="2">ISO 13485</a></li>
                    <li><a data-slide-index="3">ISO 45001</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con1-1" class="roll roll01 on"><!-- 4depth 컨텐츠 01-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 1</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 9001:2015 품질경영시스템 (QMS) | 심사원 인증</h2>
                        <p class="sub_txt">
                            GIC는 ISO/IEC 17024를 기반으로 하는 공인 개인 인증 기관인 GPC (Global Personnel Certification)와의 협력을 바탕으로 ISO 9001 품질 경영시스템 심사원보, 심사원, 선임 심사원, 내부 심사원, 검증 심사원 등의 인증 서비스를 제공합니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 9001:2015 인증 개요</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 9001은 품질 경영시스템 (QMS)을 위해 국제적으로 인정된 규격입니다. 이는 전 세계적으로 가장 많이 사용되는 규격인 동시에, 178개 국가 내 고객들로부터 1,100만개 이상의 인증서가 발행되고 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>오늘날 많은 기업은 고객의 요구를 단순히 충족시키는 것에서 그치지 않고 더욱 향상된 제품 및 서비스를 제공하기를 원하고 있습니다. 또한, 비용 절감을 통해 타 기업과의 경쟁력을 유지하기 원합니다. </li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>기업의 규모와 관계없이 품질 및 가격 경쟁력을 개선하기 위한 종합적인 솔루션이 필요하고, ISO 9001은 기업에게 효과적인 품질 경영 프로세스를 제공할 수 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>소프트웨어 개발은 식품 제조나 상담 서비스 제공과는 다른 문제입니다. 그러나 ISO 9001은 모든 산업에 적용될 수 있기 때문에 제조 회사, 소프트웨어 개발 회사, 거래 조직, 서비스 조직, 경찰서, 프로 축구 팀 및 시의회 등 다양한 조직이 ISO 9001:2015 시스템을 성공적으로 적용하였습니다. </li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>이처럼 ISO 9001의 요구사항은 포괄적이며, 조직의 형태, 규모 또는 제공되는 제품 및 서비스에 관계없이 모든 조직에 적용될 수 있습니다. 그렇기에, 이 규격은 전 세계에서 가장 보편적으로 사용되고 있는 품질 경영 규격입니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 9001 심사원 인증 요구사항</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>기본 요구사항</span>
                                                <li>- <span class="nbsp">&nbsp;</span>중등 교육 이상의 학력</li>
                                                <li>- <span class="nbsp">&nbsp;</span>공인된 교육 기관에서의 교육 수료 및 시험 합격</li><br><br>
                                                <span style="display:block;font-weight:600">※ <span class="nbsp">&nbsp;</span>신청자는 신청할 심사원의 등급을 결정하여 신청서를 작성한 뒤 자격 증명을 위해 증빙 서류를 제출합니다. (증빙 자료가 불충분할 경우 추가 자료 증빙을 통해 입증 가능해야 합니다.)</span>
                                            </ul>
                                            <ul>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>검증 심사 평가 기록</li><br><br>
                                                <span style="display:block;font-weight:600">※ <span class="nbsp">&nbsp;</span>신청자는 평가 대상자로서, 지식 및 인성 시험을 통과할 경우 자격이 부여되며 수용 가능한 교육 수료 기준은 다음과 같습니다.</span>
                                            </ul>
                                            <ul>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임 심사원 교육 과정 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>ISO/IEC 17024기반 공인 기관으로부터 지정 받은 교육 연수 기관이 제공하는 경영시스템 심사원/선임 심사원 교육 과정 수료증</li><br><br>
                                                <span style="display:block;font-weight:600">※ <span class="nbsp">&nbsp;</span>인증은 발행일로부터 3년간 유효하며, 매년 인증 받은 주기에 따라 유지 비용을 지불해야 하고 3년 차인 갱신 주기에는 추가 요구사항을 충족해야 합니다.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-2" class="roll roll02"><!-- 4depth 컨텐츠 01-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 1</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 14001 | 환경 경영시스템 (EMS) 심사원 인증</h2>
                        <p class="sub_txt">
                            GIC는 ISO/IEC 17024를 기반으로 하는 공인 개인 인증 기관인 GPC (Global Personnel Certification)와의 협력을 바탕으로 ISO 14001 환경 경영시스템 심사원보, 심사원, 선임 심사원, 내부 심사원, 검증 심사원 등의 인증 서비스를 제공합니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_01.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 14001:2015 인증 개요</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 14001:2015는 환경 경영시스템 (EMS)를 위한 국제 규격으로서 환경 경영시스템의 구성 및 유지를 위해 요구되는 사항을 명시한 주요 경영시스템 규격입니다. 한국 내 많은 기업들이 조직의 원활한 환경 경영을 위해 인증 받고 있으며, 전 세계적으로는 25만개 이상의 인증서가 발행되고 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 14001은 환경 경영시스템에 대한 원칙, 시스템 및 지원 기술에 관한 일반 가이드라인과 함께 환경 경영시스템의 수립, 시행, 유지 개선과 같은 이슈를 다룹니다. 이는 고객 사의 환경 측면을 통제하고, 환경 영향을 감소시키며, 법규 준수를 보장할 수 있도록 지원합니다</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 14001 심사원 인증 요구사항</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>기본 요구사항</span>
                                                <li>- <span class="nbsp">&nbsp;</span>중등 교육 이상의 학력</li>
                                                <li>- <span class="nbsp">&nbsp;</span>공인된 교육 기관에서의 교육 수료 및 시험 합격</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 14001 심사원 인증 절차</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>신청자는 신청할 심사원의 등급을 결정하여 신청서를 작성한 뒤 자격 증명을 위해 증빙 서류를 제출합니다. (증빙 자료가 불충분할 경우 추가 자료 증빙을 통해 입증 가능해야 합니다.)</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>검증 심사 평가 기록</li>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>신청자는 평가 대상자로서, 지식 및 인성 시험을 통과할 경우 자격이 부여되며 수용 가능한 교육 수료 기준은 다음과 같습니다.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임 심사원 교육 과정 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>ISO/IEC 17024기반 공인 기관으로부터 지정 받은 교육 연수 기관이 제공하는 경영시스템 심사원/선임 심사원 교육 과정 수료증</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>인증은 발행일로부터 3년간 유효하며, 매년 인증 받은 주기에 따라 유지 비용을 지불해야 하고 3년 차인 갱신 주기에는 추가 요구사항을 충족해야 합니다.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-3" class="roll roll03"><!-- 4depth 컨텐츠 01-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 1</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 13485:2016 의료기기 품질 경영시스템 (MDQMS) 심사원 인증</h2>
                        <p class="sub_txt">
                            GIC는ISO/IEC 17024를 기반으로 하는 공인 개인 인증 기관인 GPC (Global Personnel Certification)와의 협력을 바탕으로 ISO 13485 의료기기 경영시스템 심사원보, 심사원, 선임 심사원, 내부 심사원, 검증 심사원 등의 인증 서비스를 제공합니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 13485 인증 개요</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 13485는 의료기기의 설계 및 개발, 생산, 설치 및 부가 서비스를 제공하는 조직의 품질 경영시스템에 대한 요구사항을 규정한 규격입니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>이 규격은 의료기기의 멸균, 교정, 판매 서비스를 제공하는 외부 조직에도 적용될 수 있어, 의료기기 및 관련 서비스 제공 조직에 품질 경영 시스템의 기반을 제공합니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>의료기기는 인간의 생명 및 건강에 직접적인 영향을 끼칠 수 있기 때문에 다른 제품보다도 높은 수준의 안정성에 대한 보장이 필요합니다. 그래서 의료기기 산업은 국내 규제 제도, 국제적인 표준 및 기타 요구사항 등 충족해야 하는 규제가 다양합니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>EU 의료기기 지침의 요구사항을 충족하기 위해서는 품질 시스템을 구축하여야 하며, 캐나다 등 일부 국가에서는 제품을 판매하기 위해ISO 13485 인증을 요구하고 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 13485 경영시스템 인증을 통해 의료기기 제조사는 조직의 시스템이 품질 경영시스템에 대한 포괄적인 요구사항 및 의료기기에 대한 특별한 요구사항에 부합함을 입증할 수 있습니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 13485 심사원 인증 요구사항</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>기본 요구사항</span>
                                                <li>- <span class="nbsp">&nbsp;</span>중등 교육 이상의 학력</li>
                                                <li>- <span class="nbsp">&nbsp;</span>공인된 교육 기관에서의 교육 수료 및 시험 합격</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>ISO 13485:2016 심사원 요구사항</span>
                                                <li>- <span class="nbsp">&nbsp;</span>학력: 대학교 (4년제) 졸업 이상</li>
                                                <li>- <span class="nbsp">&nbsp;</span>전공: 생물학, 미생물학, 화학, 생화학, 컴퓨터 및 소프트웨어 기술, 전기, 전자, 기계, 생물 공학, 인간생리학, 약학, 물리학</li>
                                                <li>- <span class="nbsp">&nbsp;</span>경력: 의료기기, 의료 연구 분야에서 4년 이상 정규직으로 일한 경력</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>특별 요구사항 및 기술적 역량</span>
                                                <li>
                                                    <dl>
                                                        <dt><span class="point_b2">1. <span class="nbsp">&nbsp;</span>의료기기에 대한 기본 지식과 다음을 포함한 관련 생산활동의 이해</span></dt>
                                                        <dd>- <span class="nbsp">&nbsp;</span>사용 목적</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>위험 분석을 포함한 의료기기의 분류</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>법적 규제 프레임 워크와 인증 기관의 역할</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>의료기기 위험 평가 (ISO 14971)</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>의료기기 평가 관련 제품 규격</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>인증 기관의 ISO 13485 인증</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>의료기기 사업/기술에 대한 지식</dd>
                                                    </dl><br><br>
                                                    <dl>
                                                        <dt><span class="point_b2">2. <span class="nbsp">&nbsp;</span>통계 분석</span></dt>
                                                        <dd>- <span class="nbsp">&nbsp;</span>신뢰성, 표준 편차 등을 고려한 샘플링 및 트렌드 분석에 따른 확률과 통계에 대한 기본 지식</dd>
                                                    </dl><br><br>
                                                    <dl>
                                                        <dt><span class="point_b2">3. <span class="nbsp">&nbsp;</span>다음 사항에 대한 지식</span></dt>
                                                        <dd>- <span class="nbsp">&nbsp;</span>멸균 기술 및 검증 기술</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>미생물학 및 BIO-Burden 모니터링</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>생체 적합성 및 검증</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>클린룸 운영</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>환경 모니터링 및 제어</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>포장 기술</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>안정성 시험</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>위험 관리 기반</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>세척 및 소독</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>의료기기의 생물학적 평가</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>의료기기의 임상 평가</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>의료기기의 물리적, 화학적 평가</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>공정 검증 관행에 대한 지식</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>소프트웨어 검증 기술</dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 13485 심사원 인증 절차</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>신청자는 신청할 심사원의 등급을 결정하여 신청서를 작성한 뒤 자격 증명을 위해 증빙 서류를 제출합니다. (증빙 자료가 불충분할 경우 추가 자료 증빙을 통해 입증 가능해야 합니다.)</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>검증 심사 평가 기록</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>신청자는 평가 대상자로서, 지식 및 인성 시험을 통과할 경우 자격이 부여되며 수용 가능한 교육 수료 기준은 다음과 같습니다.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임 심사원 교육 과정 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>ISO/IEC 17024기반 공인 기관으로부터 지정 받은 교육 연수 기관이 제공하는 경영시스템 심사원/선임 심사원 교육 과정 수료증</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>인증은 발행일로부터 3년간 유효하며, 매년 인증 받은 주기에 따라 유지 비용을 지불해야 하고 3년 차인 갱신 주기에는 추가 요구사항을 충족해야 합니다.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-4" class="roll roll04"><!-- 4depth 컨텐츠 01-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 1</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 45001:2018 안전보건 경영시스템 (OHMS) 심사원 인증</h2>
                        <p class="sub_txt">
                            GIC는 ISO/IEC 17024를 기반으로 하는 공인 개인 인증 기관인 GPC (Global Personnel Certification)와의 협력을 바탕으로 ISO 45001 안전보건 경영시스템 심사원보, 심사원, 선임 심사원, 내부 심사원, 검증 심사원 등의 인증 서비스를 제공합니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 45001 인증 개요</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 45001은 안전보건 경영시스템으로, 기존의 OHSAS 18001:2007 규격이 2018년 이후 ISO 45001로 대체되었습니다. 이는 ISO 9001 및 14001 경영 시스템과 호환 가능한 산업 보건 및 안전 경영 시스템을 통해 보건 및 안전 관리 책임을 관리하기 위한 프레임워크를 제공합니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>이 규격은 국제적 사용을 위해 개발되었으며, 조직이 보건 및 안전 위험을 제어하는 동시에 성과를 향상시킬 수 있도록 지원합니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 45001은 12개국의 9만개 이상 조직에게 적합합니다. 만약에 귀사가 조직 내 책임이 있는 사람들의 안전 관리 '모범 사례'를 증명해야 한다면 귀사에게 적합할 것입니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC는 프랜차이즈점, 관공서, 제조업, 서비스업, 식품 회사 등을 포함한 다양한 분야의 조직에게 인증을 부여하고 있습니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 45001 심사원 인증 절차</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>신청자는 신청할 심사원의 등급을 결정하여 신청서를 작성한 뒤 자격 증명을 위해 증빙 서류를 제출합니다. (증빙 자료가 불충분할 경우 추가 자료 증빙을 통해 입증 가능해야 합니다.)</span>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>신청자는 평가 대상자로서, 지식 및 인성 시험을 통과할 경우 자격이 부여되며 수용 가능한 교육 수료 기준은 다음과 같습니다.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임 심사원 교육 과정 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>ISO/IEC 17024기반 공인 기관으로부터 지정 받은 교육 연수 기관이 제공하는 경영시스템 심사원/선임 심사원 교육 과정 수료증</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>인증은 발행일로부터 3년간 유효하며, 매년 인증 받은 주기에 따라 유지 비용을 지불해야 하고 3년 차인 갱신 주기에는 추가 요구사항을 충족해야 합니다.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                </div><!----div class="slider" 종료-------->
            </div>
        </article><!--+++++ 컨텐츠 01 종료 +++++--> 
        
<!--=================================================================================================================== -->

        <article><!--+++++ 컨텐츠 02 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO/IEC 20000-1</a></li>
                    <li><a data-slide-index="1">ISO/IEC 27001</a></li>
                    <li><a data-slide-index="2">ISO 22716</a></li>
                    <li><a data-slide-index="3">ISO 50001</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con2-1" class="roll roll01 on"><!-- 4depth 컨텐츠 02-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 2</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 20000-1:2018 IT 서비스 경영시스템 I</h2>
                        <p class="sub_txt">
                            GIC는 ISO/IEC 17024를 기반으로 하는 공인 개인 인증 기관인 GPC (Global Personnel Certification)와의 협력을 바탕으로 ISO/IEC 20000-1 IT 서비스 경영시스템 심사원보, 심사원, 선임 심사원, 내부 심사원, 검증 심사원 등의 인증 서비스를 제공합니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_01.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 20000-1:2018 인증 개요</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO/IEC 20000-1은 서비스 제공자가 SMS를 계획, 수립, 구현, 운용, 감시, 검토, 유지, 개선하기 위한 요구사항을 명시하고 있으며, 서비스 관리를 위한 최초의 국제 규격입니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>이 표준은 서비스 제공자가 고객에게 제공하는 서비스의 품질을 개발하는 방법을 식별할 수 있도록 하는 두 가지 주요 부분을 포함하고 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Part 1은 서비스 경영시스템의 개발 및 구현에 대한 요구사항을 명시하고 있으며, Part 2는 ISO/IEC 20000-1의 범위 내에서 서비스 경영 시스템의 적용과 관련된 지침이 포함되어 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>IT Infrastructure Library (ITIL)에서 ISO/IEC 20000 규격을 필요로 하며, 동일한 서비스 품질 수준을 달성할 수 있는 모범 사례를 설명하고 있지만, ISO/IEC 20000은 보통 개인에게 적용되는 ITL 인증에 반해 전체 기업에 대한 인증을 가능하도록 지원합니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 20000-1 심사원 인증 요구사항</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>심사원 등록 제출 서류</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사원증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력 로그시트 작성</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 20000-1 심사원 인증 절차</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>신청자는 신청할 심사원의 등급을 결정하여 신청서를 작성한 뒤 자격 증명을 위해 증빙 서류를 제출합니다. (증빙 자료가 불충분할 경우 추가 자료 증빙을 통해 입증 가능해야 합니다.)</span>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>신청자는 평가 대상자로서, 지식 및 인성 시험을 통과할 경우 자격이 부여되며 수용 가능한 교육 수료 기준은 다음과 같습니다.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임 심사원 교육 과정 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>ISO/IEC 17024기반 공인 기관으로부터 지정 받은 교육 연수 기관이 제공하는 경영시스템 심사원/선임 심사원 교육 과정 수료증</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>인증은 발행일로부터 3년간 유효하며, 매년 인증 받은 주기에 따라 유지 비용을 지불해야 하고 3년 차인 갱신 주기에는 추가 요구사항을 충족해야 합니다.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con2-2" class="roll roll02"><!-- 4depth 컨텐츠 02-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 2</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 27001:2013 정보보안 경영시스템 I</h2>
                        <p class="sub_txt">
                            GIC는 ISO/IEC 17024를 기반으로 하는 공인 개인 인증 기관인 GPC (Global Personnel Certification)와의 협력을 바탕으로 ISO/IEC 27001(ISMS) 정보보안 경영시스템 심사원보, 심사원, 선임 심사원, 내부 심사원, 검증 심사원 등의 인증 서비스를 제공합니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_01.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27001:2013 인증 개요</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO/IEC 27001은 국제 전기 기술 위원회 (IEC: International Electrotechnical Commission) 및 국제 표준화 기구 (ISO: International Organization for Standardization)에서 제정한 정보 보호 관리 체계에 대한 국제 규격이자 정보 보호 분야에서 가장 권위 있는 국제 인증 규격입니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>이 규격은 정보 보호 정책, 물리적 보안, 정보 접근 통제 등의 정보 보안 관련 11개 영역 및 133개 항목을 다루고 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO/IEC 27001은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가, 개선의 10가지 항목과 14가지의 통제 항목 (통제 항목은 ISO/IEC 27002를 참조)으로 구성되어 있습니다. 이 규격의 요구사항은 조직의 유형, 규모, 특성에 상관없이 모든 조직에 적용 가능하도록 일반적인 내용으로 수립되었습니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27001 심사원 인증 요구사항</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>심사원 등록 제출 서류</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사원증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력 로그시트 작성</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27001 심사원 인증 절차</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>신청자는 신청할 심사원의 등급을 결정하여 신청서를 작성한 뒤 자격 증명을 위해 증빙 서류를 제출합니다. (증빙 자료가 불충분할 경우 추가 자료 증빙을 통해 입증 가능해야 합니다.)</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>검증 심사 평가 기록</li>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>신청자는 평가 대상자로서, 지식 및 인성 시험을 통과할 경우 자격이 부여되며 수용 가능한 교육 수료 기준은 다음과 같습니다.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임 심사원 교육 과정 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>ISO/IEC 17024기반 공인 기관으로부터 지정 받은 교육 연수 기관이 제공하는 경영시스템 심사원/선임 심사원 교육 과정 수료증</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>인증은 발행일로부터 3년간 유효하며, 매년 인증 받은 주기에 따라 유지 비용을 지불해야 하고 3년 차인 갱신 주기에는 추가 요구사항을 충족해야 합니다.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con2-3" class="roll roll03"><!-- 4depth 컨텐츠 02-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 2</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 22716:2007 화장품 GMP 우수 제조 및 품질 관리 기준에 대한 가이드 라인</h2>
                        <p class="sub_txt">
                            GIC는 ISO/IEC 17024를 기반으로 하는 공인 개인 인증 기관인 GPC (Global Personnel Certification)와의 협력을 바탕으로 ISO 22716 cGMP 심사원보, 심사원, 선임 심사원, 내부 심사원, 검증 심사원 등의 인증 서비스를 제공합니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_01.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22716:2007 인증 개요</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 22716규격은 화장품을 위한 GMP (Good Manufacturing Practices) 가이드를 제공하는 데 목적을 두고 있습니다. 또한 이 가이드 라인은 화장품 제조 분야의 특정 요구를 고려하여 마련되었습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 22716 은 제품의 품질에 영향을 미칠 수 있는 요인들의 관리에 있어서 조직적이고 실질적인 조언을 제공합니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 22716은 화장품의 수출을 위한 필수 조건으로서 적용되고 있습니다. 특히 유럽의 새로운 화장품 EU regulation에서는 화장품 제조사에게 harmonized standard를 준수하도록 요구하고 있는데 이 harmonized standard가 의미하는 바가 ISO 22716 규격입니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22716 심사원 인증 요구사항</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>심사원 등록 제출 서류</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사원증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력 로그시트 작성</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22716 심사원 인증 절차</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>신청자는 신청할 심사원의 등급을 결정하여 신청서를 작성한 뒤 자격 증명을 위해 증빙 서류를 제출합니다. (증빙 자료가 불충분할 경우 추가 자료 증빙을 통해 입증 가능해야 합니다.)</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>검증 심사 평가 기록</li>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>신청자는 평가 대상자로서, 지식 및 인성 시험을 통과할 경우 자격이 부여되며 수용 가능한 교육 수료 기준은 다음과 같습니다.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임 심사원 교육 과정 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>ISO/IEC 17024기반 공인 기관으로부터 지정 받은 교육 연수 기관이 제공하는 경영시스템 심사원/선임 심사원 교육 과정 수료증</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>인증은 발행일로부터 3년간 유효하며, 매년 인증 받은 주기에 따라 유지 비용을 지불해야 하고 3년 차인 갱신 주기에는 추가 요구사항을 충족해야 합니다.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con2-4" class="roll roll04"><!-- 4depth 컨텐츠 02-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 2</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 50001:2018 에너지 경영시스템 (EMS)</h2>
                        <p class="sub_txt">
                            GIC는 ISO/IEC 17024를 기반으로 하는 공인 개인 인증 기관인 GPC (Global Personnel Certification)와의 협력을 바탕으로 ISO 50001:2018 에너지 경영시스템 심사원보, 심사원, 선임 심사원, 내부 심사원, 검증 심사원 등의 인증 서비스를 제공합니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_01.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 50001:2018 인증 개요</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>'ISO 50001'은 국제 표준화 기구 (ISO)가 2011년 6월에 발효한 에너지 경영시스템 국제 규격으로, 에너지 효율화와 절감을 위한 프로세스 및 요구사항을 규정하고 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>고유가 체제의 장기화와 국제적인 에너지 환경 변화의 대응으로 효율적인 에너지 경영이 중요한 이슈로 대두되고 있기 때문에 이러한 산업의 요구와 필요성으로 ISO 50001인증 수요가 지속적으로 증가하고 있으며, 이에 따라 ISO 50001에 대한 전문가와 심사원의 수요 또한 증가하고 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>조직은 이 요구사항을 기반으로 에너지 방침을 개발하고 실행할 수 있으며, 중요 에너지 이용과 관련된 법적 요구사항 및 정보를 고려하여 목표, 세부 목표 및 실행 계획을 수립할 수 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>EnMS (Energy Management Systems)는 조직이 방침 의지를 달성하고, 에너지 성과 개선에 필요한 활동을 수행하여 이 표준의 요구사항에 시스템의 적합성을 실증할 수 있도록 지원합니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>이 표준은 조직의 관리하에 있는 활동들에 대하여 적용되며, 이 표준의 적용은 시스템 복잡성, 문서화 정도 및 자원을 포함하는 조직의 특정 요구사항에 맞도록 조정될 수 있습니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 50001 심사원 인증 요구사항</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>심사원 등록 제출 서류</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사원증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력 로그시트 작성</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 50001 심사원 인증 절차</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>신청자는 신청할 심사원의 등급을 결정하여 신청서를 작성한 뒤 자격 증명을 위해 증빙 서류를 제출합니다. (증빙 자료가 불충분할 경우 추가 자료 증빙을 통해 입증 가능해야 합니다.)</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>검증 심사 평가 기록</li>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>신청자는 평가 대상자로서, 지식 및 인성 시험을 통과할 경우 자격이 부여되며 수용 가능한 교육 수료 기준은 다음과 같습니다.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임 심사원 교육 과정 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>ISO/IEC 17024기반 공인 기관으로부터 지정 받은 교육 연수 기관이 제공하는 경영시스템 심사원/선임 심사원 교육 과정 수료증</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>인증은 발행일로부터 3년간 유효하며, 매년 인증 받은 주기에 따라 유지 비용을 지불해야 하고 3년 차인 갱신 주기에는 추가 요구사항을 충족해야 합니다.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                </div><!----div class="slider" 종료-------->
            </div>
        </article><!--+++++ 컨텐츠 02 종료 +++++-->
        
<!--=================================================================================================================== -->
       
        <article><!--+++++ 컨텐츠 03 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 22000</a></li>
                    <li><a data-slide-index="1">FSSC 22000</a></li>
                    <li><a data-slide-index="2">FDA FSMA</a></li>
                    <li><a data-slide-index="3">PCQI</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con3-1" class="roll roll01 on"><!-- 4depth 컨텐츠 03-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 3</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 22000:2018 식품안전 경영시스템 (FSMS)</h2>
                        <p class="sub_txt">
                            GIC 는 ISO/IEC 17024를 기반으로 하는 공인 개인 인증 기관인 GPC (Global Personnel Certification)와의 협력을 바탕으로 ISO 22000 식품안전 경영시스템 심사원보, 심사원, 선임 심사원, 내부 심사원, 검증 심사원 등의 인증 서비스를 제공합니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_01.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000 인증 개요</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 22000 규격은 국제 식품 규격 위원회가 개발한 위해 요소 중점 관리 기준 (HACCP) 시스템의 원칙 및 적용 단계를 통합하고 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>또한 이 표준은 프로세스 형태 및 사용 시설과 관련될 수 있는 위해 요소를 포함하여, 식품 사슬에서 발생될 수 있을 것으로 예측되는 모든 위해 요소들을 파악하고 평가하도록 요구하고 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>따라서 ISO 22000은 파악된 위해 요소 중 관리의 필요 여부를 구분하도록 도와주고 문서화를 위한 수단을 제공합니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000 심사원 인증 요구사항</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>심사원 등록 제출 서류</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사원증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력 로그시트 작성</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000 심사원 인증 절차</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>신청자는 신청할 심사원의 등급을 결정하여 신청서를 작성한 뒤 자격 증명을 위해 증빙 서류를 제출합니다. (증빙 자료가 불충분할 경우 추가 자료 증빙을 통해 입증 가능해야 합니다.)</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>검증 심사 평가 기록</li>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>신청자는 평가 대상자로서, 지식 및 인성 시험을 통과할 경우 자격이 부여되며 수용 가능한 교육 수료 기준은 다음과 같습니다.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임 심사원 교육 과정 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>ISO/IEC 17024기반 공인 기관으로부터 지정 받은 교육 연수 기관이 제공하는 경영시스템 심사원/선임 심사원 교육 과정 수료증</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>인증은 발행일로부터 3년간 유효하며, 매년 인증 받은 주기에 따라 유지 비용을 지불해야 하고 3년 차인 갱신 주기에는 추가 요구사항을 충족해야 합니다.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con3-2" class="roll roll02"><!-- 4depth 컨텐츠 03-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 3</h1>
                        <h2 class="sub_tit2 fc_pointer">FSSC 22000 Version 5 | 식품안전시스템 (FSSC)</h2>
                        <p class="sub_txt">
                            GIC와 협력 기관인 IGC는 FSSC의 공식 Training Organization으로 등록되어 있는 교육 기관으로서 FSSC 22000 심사원 등록 서비스를 제공하고 있습니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_01.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FSSC 22000 version 5 인증 개요</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000 (Food Safety System Certification) 규격은 식품 제조 회사들에게 가장 영향력 있는 국제 식품 안전 기구 (GFSI: Global Food Safety Initiative)가 식품 산업 전반에 적합한 식품 안전 인증 제도의 도입을 위하여 승인한 식품 안전 규격입니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>세계 인구가 점차 증가함에 따라서, 저렴하고 안전한 동시에 양질의 식품에 대한 기대 및 수요가 증가하고 있습니다. 이러한 요구를 충족시키기 위하여 FSSC 22000은 식품 업계에 신뢰할 수 있는 식품 안전 플랫폼을 제공합니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000은 ISO 22000규격을 기반으로 식품 및 성분의 공급자에 대한 분야별 선행 요건 프로그램 (PRPs)과 FSSC 22000 요구사항을 추가하여 조합한 것으로, 조직의 규모, 복잡성, 위치와 무관하게 모든 식품 제조 기업에 적용됩니다. 또한, 수송 및 생산 현장에서의 보관도 인증 범위에 포함됩니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000 심사원 인증 요구사항</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>심사원 등록 제출 서류</span>
                                                <li>- <span class="nbsp">&nbsp;</span>졸업 증명서 및 경력 증명서</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사원증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>교육 수료증</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사 이력 로그시트 작성</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FSSC 22000 심사원 자격 부여 프로세스</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>실무 경력</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>식품 생산 또는 제조업, 소매업 및 식품 검사 또는 식품 관련법을 진행하거나, 이와 동등한 분야에서 품질 보증을 담당한 경력</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>식품 안전 기능과 관련하여 최소 2 년의 상근 근무 경력을 포함하는 식품 또는 관련 산업 분야의 경력</li>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>학력</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>교육 기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임 심사원 교육 과정 수료증</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO/IEC 17024기반 공인 기관으로부터 지정 받은 교육 연수 기관이 제공하는 경영시스템 심사원/선임 심사원 교육 과정 수료증</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>교육 훈련</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FSMS 또는 QMS 선임 심사원 과정- 시험을 포함하여 최소 40 시간</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>HACCP 교육 훈련 - 시험을 포함하여 최소 16 시간</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 22000 규격 – 시험을 포함하여 최소 8 시간 (선임 심사원 과정에 ISO 22000 규격에 대한 부분이 포함되지 않은 경우)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>식품 방어 리스크의 평가 방법, 완화 조치를 다루는 식품 방어 교육 훈련 (시험 포함)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>식품 사기 취약성의 평가 방법, 완화 조치를 다루는 식품 사기 교육 훈련 (시험 포함)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>표준 – 스킴과 관련된 모든 요구사항 (시험 포함): ISO/TS 22003 (부속서 C), ISO 19011, ISO/IEC 17021-1 (시험을 포함하여 인증 기관 심사 프로세스에 적용 가능한 표준들)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>관련 PRP 표준에 대한 교육 훈련</li>
                                            </ul>
                                            <ul><span class="point_b2">4. <span class="nbsp">&nbsp;</span>기타</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>심사: 최소 10 일의 심사 경력과 5회의 ISO 22000 심사 이력</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>최소 1회의 FSSC 22000 심사를 포함하여 특정 산업 분야와 관련된 GFSI의 인정된 스킴 심사</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GFSI 시험: 모든 심사원은 재단이 규정한 기한 내에 GFSI 시험을 통과하여야 하며, 새로운 심사원들은 FSSC 22000에 대한 자격을 부여 받기 전에 GFSI 시험을 통과하여야 합니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>범주 I 관련: 포장 관련 기본 자격증, 포장 기술 관련 학위</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>상위 자격증과 식품 기술, 식품 위생 및 관련 과학 분야 자격증 또는 식품 기술, 식품 안전/위생, 관련 과학 분야 기본 자격증 및 세계 포장 협회의 교육 훈련 (최소 30 시간)과 세계 포장 협회가 규정한 요구사항을 충족하는 포장 기술에 대한 자격증</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000 - 품질: ISO/TS 22003 범주 및 ISO 9001 식품 분야 코드에 따라 인정된 ISO 9001 인증과 관련하여 ISO/IEC 17021-1에 대한 자격이 부여된 심사원</li>
                                            </ul>
                                            <ul><span class="point_b2">5. <span class="nbsp">&nbsp;</span>심사원의 최초 평가 및 승인</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>적격성의 달성 여부를 확인하기 위해 심사원에 대한 FSSC 22000 입회 심사</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>모든 FSSC 22000 심사원은 (교육 훈련 중에 있는 심사원 포함) 재단 지침에 따라 포탈에 등록되어야 합니다.</li>
                                            </ul>
                                            <ul><span class="point_b2">6. <span class="nbsp">&nbsp;</span>소분류에 대한 인증 수행 범위 부여 (최초 및 확대)</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>최초 심사원 자격을 부여 받은 후, 심사원은 각각의 Category와 관련하여 자격을 부여/승인 받아야 하며, 인증 기관은 심사원에 대하여 Category code를 부여하기 위해 다음 요구사항에 심사원이 적합함을 실증하여야 합니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>해당 소분류에 대한 6개월 간의 실무 경력 또는 해당 소분류에 대하여 자격을 보유한 심사원의 감독 하에 훈련자나 심사원으로서 부여 받고자 하는 새로운 Category (post-farm gate only except for food chain category A) 관련 GFSI 가 인정한 스킴에 대한 심사 5회</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>5회의 심사 중 최소 1회의 심사는 FSSC 22000 심사로 진행되어야 합니다. (사후 또는 갱신 심사 2 단계) 실무 경력의 입증을 위해 자문 업무가 활용되는 경우, 총 자문 일수는 6개월 실무 경력에 합산되어야 합니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>소분류에 대한 구체적인 적격성 실증</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>소분류에 대한 인증 기관 자체 적격성 기준 충족</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">제공하는 교육</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000 이해</span>
                                                <li>이 과정은 조직, 인증 기관, 컨설턴트 및 FSSC 22000 요구 사항과 관련하여 일반적인 지식에 관심이 있고, 다른 식품 사슬 조직에 적용하는 방법에 대해서 이해 가능한 사람들을 대상으로 합니다.</li>
                                            </ul>
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000 실행</span>
                                                <li>위의 과정을 토대로 이루어진 조직, 컨설턴트 및 기타의 경우 다양한 식품 사슬 범주 내에서 FSSC 22000을 구현할 수 있는 방법을 보여줍니다.</li>
                                            </ul>
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000 내부 심사원 과정</span>
                                                <li>FSSC 22000을 구현하는 조직이 내부 심사원의 교육 요구 사항을 충족하도록 하기 위해 설계되었습니다. 이 교육은 ISO 19011:2018에 지정된 모든 요소에 대해 다루고 있습니다.</li>
                                            </ul>
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000 선임 심사원 과정</span>
                                                <li>이 과정은 선임 심사원 등록을 희망하시는 분을 위하여 개최되는 과정으로, 내부 심사원 및 컨설턴트에도 적용될 수 있습니다. 교육은 FSSC 22000 요구사항, ISO 19011: 2018, ISO/IEC 17021-1: 2015 및 ISO/TS 22003: 2013의 내용을 다루며 연습 과정 (예: Case study) 및 필기 시험을 포함합니다. 총 교육 시간은 40 시간입니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con3-3" class="roll roll03"><!-- 4depth 컨텐츠 03-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 3</h1>
                        <h2 class="sub_tit2 fc_pointer">FDA FSMA 식품안전현대화법</h2>
                        <p class="sub_txt">
                            GIC와 협력 기관인IGC는 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 제 3자 인증 기관으로서 인정 받아 심사원 등록 서비스를 제공하고 있습니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_01.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FDA FSMA인증 개요</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>2011년 01월 04일, 미국 정부는 사전 예방을 통해 식품 공급의 안정성을 보장하고 국민의 건강을 보호하고자 식품 안전 현대화 법 (Food Safety Modernization Act, FSMA)을 제정하였습니다. FSMA 제정으로 인해 FDA는 식품 안전 문제를 예방하는데 초점을 맞출 수 있게 되었습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FSMA은 식품이나 사료를 제조 및 가공, 포장 또는 보관하는 시설에게 적용될 수 있습니다. 또한 생산 농가, US 수입 업체, 화주 업체, 수취 업체, 선적 업체, 운송 업체 등 미국으로 식품을 수출하는 업체 역시 FSMA를 준수해야 합니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>따라서 업체들은 FSMA를 기반으로 위해 요소 분석에 기반한 예방 관리가 포함된 식품안전 경영시스템을 구축하고, 문서화된 식품 안전 계획서를 작성하는 등 철저하게 준비해야 합니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_01.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FSMA 심사원 인증의 중요성</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>미국은 한국의 매우 중요한 식품 수출 시장이기 때문에 FSMA 제 3자 인증은 식품 업체가 미국으로의 수출을 확대하는 기회로서 작용되고 있습니다.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>공인된 제 3의 기관이 FSMA에서 요구하는 규정을 잘 준수하고 있는지에 관한 심사를 수행하기 위해서는 FSMA 심사원 인증이 필요합니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FSMA 심사원 교육과정</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>GIC와 협력 기관인 IGC의 FSMA 제 3자 인증 심사원 교육 과정 내용</span>
                                                <li>- <span class="nbsp">&nbsp;</span>FDA FSMA 3자 인증 프로그램</li>
                                                <li>- <span class="nbsp">&nbsp;</span>심사원 적격성 기준</li>
                                                <li>- <span class="nbsp">&nbsp;</span>FSMA 3자 인증 심사 점검 항목</li>
                                                <li>- <span class="nbsp">&nbsp;</span>FSMA Human Food Category 별 특징 및 심사 적용 방법</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Low Acid and Acidified Foods (산성 식품)</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Fisheries/Seafood Products (수산 식품)</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Fruit or Vegetable Juices, Other Beverages Including Water (과채 주스)</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Starch Products (전분, 밀가루 식품)</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Food Additives (식품 첨가제)</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Nuts and Edible Seed Products (견과, 씨앗류)</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con3-4" class="roll roll04"><!-- 4depth 컨텐츠 03-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 3</h1>
                        <h2 class="sub_tit2 fc_pointer">PCQI | 심사원 인증 (Preventive Controls Qualified Individual)</h2>
                        <p class="sub_txt">
                            미국에 식품을 수출하기를 희망하는 업체는 FSMA 요구사항을 기반으로 식품 안전 예방 관리 전문가 (PCQI: Preventive Controls Qualified Individual)를 선임하여 HARPC (위해 요소 예방 관리 시스템)을 운영하여야 합니다.<br><br>
                            FSMA 규정에 따르면 식품 제조 회사는 전통적인 위해 요소의 분석뿐만 아니라 잠재적인 위험성을 사전에 예방 관리하기 위한 식품 안전 계획을 수립하여 운영하도록 요구하고 있습니다.<br><br>
                            또한 예방 관리 전문가에 의해 식품 안전 계획이 수립되어야 하고, 예방 관리의 유효성이 확인되어야 하며 관련 기록은 정기적으로 재검토할 것을 요구하고 있습니다.<br><br>
                            PCQI 자격증은 FSPCA (The food safety preventive Controls Alliance)가 승인한 교육 과정을 성공적으로 수료한 이후 FSPCA를 통해 발급 받을 수 있습니다.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">PCQI란?</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>Preventive Controls Qualified Individual</span>
                                                <li>최소한 FDA가 적합하다고 인정하여 표준화된 커리큘럼에 따라 동등한 위험을 기반으로 하는 예방 통제의 개발 및 적용 교육을 성공적으로 완료했거나, 그렇지 않은 경우 식품 안전 시스템을 개발하고 적용하기 위한 직무 경험을 통해 자격을 갖춘 사람을 의미합니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">PCQI의 책임</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>신청서와 함께 제출이 요구되는 증빙 서류는 아래와 같습니다.</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>식품 안전 계획의 작성</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>예방 조치의 유효성 확인</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>기록 검토</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>식품 안전 계획의 재분석</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>기타 식품에 적합한 활동을 감독 또는 수행</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">PCQI에 대한 교육 여건을 갖추어 식품 안전 생산에 관여할 실무자</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>식품 안전 담당 부사장</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>유지 보수 관리자</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>생산 감독 책임자 및 관리자</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>위생 감독자</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>품질 보증 책임자 및 관리자</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>안전 관리자</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>교육 감독자</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>기술 책임자</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>포장 감독자 및 관리자</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>법규 및 규제 담당자</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/testing_5-2_02.jpg" alt="위생 테스트의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">PCQI 교육 내용</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FSMA 대응을 위한 예방 관리 개념 교육</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>식품 안전 계획 개요</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GMP와 기타 선행요건 프로그램 운영</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>생물학적 식품안전 위해요소</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>화학적, 물리적, 경제적 측면에서의 식품안전 위해요소</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>식품 안전 계획의 개발을 위한 사전 단계</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>식품 안전 계획의 준비를 위한 지원 (자료)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>위해요소 분석과 예방 관리점의 결정 - 개요</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>위해요소 분석과 예방 관리점의 결정</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>예방관리</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>식품의 알러지원 예방 관리</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>위생 예방 관리</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>공급망 예방 관리</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>검증 및 유효성 확인 절차</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>기록의 보관 및 관리</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>회수 계획</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>법규 개요 (cGMP, 위험성 분석, 위험성 기반의 예방 관리)</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                </div><!----div class="slider" 종료-------->
            </div>
        </article><!--+++++ 컨텐츠 03 종료 +++++-->
    </div><!-------div class="tab_con" 종료------>
</div><!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>