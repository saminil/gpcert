<?php
	include_once('./_common.php');
$g5['title'] = '시스템 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<!------ Existing File Codings  시작----->

<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style>
<!------ Existing File Codings  종료----->

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /* 컨텐츠 페이지별 css */
	.fc_pointer {color:#87bf78 }
    .point_b1 { font-size: 2em; font-weight: 500; text-align: center; margin-bottom: 30px }
    .point_b2 { display: block;font-size: 1.1em; font-weight: 500; margin-bottom: 15px }
    
    .con_txt { width:80%; margin: 30px auto; border-top:1px solid #ddd; font-size:1em; color:#555; background:#f8f8f8; word-break: keep-all;text-align: justify}
	.con_txt ul { width: 90%;margin: 0 auto;padding: 25px }/* 중앙 하단 텍스트 들어갈 박스 */

    .con_img {width: 100%;text-align: center;margin: 70px auto}
    .con_img img {width: 40%;}
    
    /* 컨텐츠 공통 css */   
    .page_con { width: 90%;margin: 0 auto }
    
	.page_title { margin-bottom:70px; }
	.page_title .sub_tit { width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600; }
	.page_title .sub_tit:after { content:""; clear:both; display:block; width:30px; margin:40px auto 0; border:1px solid #000; }
	.page_title .sub_tit2 { width:100%; margin:70px auto; text-align:center; font-size:2em; font-weight:600; }
	.sub_txt { width: 100%;margin: 70px auto;text-align: justify }
    
    .page_con {  margin-bottom:70px; }
    
    .con_arrow { padding-bottom:20px; text-align: left; }
    .con_arrow p { position:relative; width: 100%; font-size:2em; color:#000; margin: 70px auto 20px; }
    .con_box { margin-bottom:100px; padding:20px 0; border-top:1px solid #000 }
    .con_box:after { content:""; display:block; clear:both; }
    .con_box ul { padding:0; margin:0; }
    .con_box ul li { float: left; width: 50%; list-style:none; margin:10px 0; }
    .con_box ul li p { display:table; width:100%; }
    .con_box ul li p > em,.con_box p > span { display:table-cell; vertical-align:top; }
    .con_box ul li p > em { width:30px; }
    .con_box ul li p > em > strong { display:inline-block; width:30px; height:30px; line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500; }
    .con_box ul li p > span { font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px; padding:0 15px; }

    

	@media screen and (max-width:992px){		
		.content_wrap {width:100%;}
		.page_title {margin-bottom:50px;}	
		.page_title .sub_tit {font-size:2em;}
		.page_title .sub_tit2 {font-size:1em;}
        .txt03 {position:relative !important; margin-top:40px;}
		.txt03 span {height:auto;}
	}

	@media all and (max-width:768px){
		
	}

	@media all and (max-width:480px){
		
	}
    
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
            
            $("#con4-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con5-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con7-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con8-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con13-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            
            $(target).addClass('on'); // 선택된 탭 버튼에 활성화 클래스인 on 추가
        });
    })
</script>
<!-- 탭 메뉴 구현 끝 -->
<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">품질</a></li>
			<li><a href="javascript:;">환경</a></li>
			<li><a href="javascript:;">안전보건</a></li>
			<li><a href="javascript:;">보건 및 의료기기</a></li>
			<li><a href="javascript:;">식품</a></li>
			<li><a href="javascript:;">에너지</a></li>
			<li><a href="javascript:;">정보 보안</a></li>
			<li><a href="javascript:;">부패 방지</a></li>
			<li><a href="javascript:;">교육</a></li>
			<li><a href="javascript:;">사업연속성</a></li>
			<li><a href="javascript:;">이벤트 지속성</a></li>
			<li><a href="javascript:;">화장품</a></li>
			<li><a href="javascript:;">고객 만족</a></li>
			<li><a href="javascript:;">시설관리</a></li>
			<li><a href="javascript:;">공급사슬 보안</a></li>
			<li><a href="javascript:;">사회적 책임</a></li>
		</ul>
	</div>
	
	<hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
    
    <div class="tab_con">
		
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <div class="page_title">
                <h1 class="sub_tit">품질 ISO 9001</h1>
                <h2 class="sub_tit2 fc_pointer">품질경영시스템 인증</h2>
                <p class="sub_txt">
                    오늘날 많은 기업은 고객의 요구를 단순히 충족시키는 것뿐만 아니라 더욱 향상된 제품 및 서비스를 제공하기를 원하고 있습니다. 또한, 비용 절감을 통해 경쟁력을 유지하기 원합니다. 대기업이든 중소기업이든 품질 및 가격 경쟁력을 개선하기 위한 종합적인 솔루션이 필요하고, ISO 9001은 이러한 기업에게 효과적인 품질경영 프로세스를 제공합니다.<br><br>
                    소프트웨어 개발은 식품제조나 상담서비스 제공과는 다릅니다. 그러나 ISO 9001은 모든 산업에 적용될 수 있습니다. 제조 회사, 소프트웨어 개발 회사, 거래 조직, 서비스 조직, 경찰서, 프로 축구 팀 및 시의회 등 다양한 조직이 ISO 9001:2015 시스템을 성공적으로 적용하였습니다. 이처럼 ISO 9001의 요구사항은 포괄적이며, 조직의 형태, 규모 또는 제공되는 제품 및 서비스에 관계없이 모든 조직에 적용될 수 있습니다. 그렇기에, 이 표준은 전세계적으로 가장 보편적으로 사용되고 있는 품질 경영 표준입니다.
                </p>
            </div>
            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_9001_01.jpg" alt="ISO 9001:2015 요구사항">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 9001:2015 요구사항</h3>
                                <p>
                                    조직의 목적과 목표를 뒷받침하는 ISO 9001은 품질 방침과 목표를 달성하기 위한 프로세스, 절차 및 책임사항을 문서화합니다. ISO 9001:2015는 High Level Structure가 적용되어, 다른 High Level Structure가 적용된 규격과 통합하여 관리할 수 있습니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 적용범위</li>
                                        <li>2. 인용표준</li>
                                        <li>3. 용어와 정의</li>
                                        <li>4. 조직 상황</li>
                                        <li>5. 리더십</li>
                                        <li>6. 기획</li>
                                        <li>7. 지원</li>
                                        <li>8. 운용</li>
                                        <li>9. 성과평가</li>
                                        <li>10. 개선</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_9001_02.jpg" alt="ISO 9001의 중요성">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 9001의 중요성</h3>
                                <p>
                                    오늘날의 서비스 부문 중심 경제에서 점점 더 많은 회사들이 ISO 9001을 비즈니스 도구로 사용하고 있습니다. 적절하게 명시된 품질 목표, 고객 만족도 조사 및 지속적인 개선 프로그램을 통해 기업은 효율성과 수익성을 높일 수 있습니다.<br>
                                    즉, 적절한 품질 관리는 비즈니스를 향상 시키며, 투자, 시장 점유율, 매출 증가, 매출 이윤, 경쟁 우위 및 소송 회피에 긍정적인 영향을 미칩니다.
                                </p>
                                <div class="con_txt">
                                    <ul><span class="point_b2">ISO 9001을 비즈니스 도구로 사용한다면 다음과 같은 이점이 있습니다.</span>
                                        <li>1. 보다 효율적이고 효과적인 운영</li>
                                        <li>2. 마케팅 강화</li>
                                        <li>3. 이익 증가</li>
                                        <li>4. 직원 동기 부여, 인식 및 사기 개선</li>
                                        <li>5. 국제 무역 촉진</li>
                                        <li>6. 고객 만족도 및 고객 유지력 향상</li>
                                        <li>7. 폐기물 감소 및 생산성 향상</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC 인증원의 역량</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. GIC는 미국의 인정기구인 IAS로부터 ISO 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다.</li>
                                        <li>2. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                        <li>3. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 9001은 물론 환경경영 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li>
                                        <li>4. GIC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                </ul>
            </div>
            <strong class="con_arrow">
                <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
            </strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   

        <article><!--+++++ 컨텐츠 02 시작 +++++--> 
             <div class="page_title">
                <h1 class="sub_tit">환경 ISO 14001</h1>
                <h2 class="sub_tit2 fc_pointer">환경경영시스템 인증</h2>
                <p class="sub_txt">
                    ISO 14001:2015는 환경경영시스템(EMS)를 위한 국제 규격으로 환경경영시스템 구성 및 유지를 위한 요구사항을 명시한 주요 경영시스템 규격입니다. 한국 내 많은 기업들이 조직의 환경경영을 위해 인증을 받고 있으며, 전 세계적으로는 25만개 이상의 인증서가 발행되고 있습니다.<br><br>
                    ISO 14001은 환경경영시스템에 대한 원칙, 시스템 및 지원 기술에 관한 일반 가이드라인과 함께 환경경영시스템 수립, 시행, 유지 및 개선과 같은 이슈들을 다룹니다. 이는 귀사의 환경측면을 통제하고, 환경영향을 감소시키며, 법규 준수를 보장합니다.
                </p>
            </div>
            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_04-01.jpg" alt="ISO 14001:2015 요구사항">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 14001:2015 요구사항</h3>
                                <p>
                                    ISO14001:2015은 ISO 9001:2015 등의 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 적용범위</li>
                                        <li>2. 인용표준</li>
                                        <li>3. 용어와 정의</li>
                                        <li>4. 조직 상황</li>
                                        <li>5. 리더십</li>
                                        <li>6. 기획</li>
                                        <li>7. 지원</li>
                                        <li>8. 운용</li>
                                        <li>9. 성과평가</li>
                                        <li>10. 개선</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_04-02.jpg" alt="ISO 14001:2015 인증 이익">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 14001의 중요성</h3>
                                <p>
                                    거의 모든 사업이 ISO 14001 규격 인증 취득을 통해 이익을 얻을 수 있습니다. 인증은 모든 산업 또는 분야 내 조직에 상당한 이익을 제공하기에 충분하며, 관련 지속 가능한 실례를 수행하는 특정 기반을 제공합니다. ISO 14001 인증 취득 장점은 다음과 같습니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li class="point_b2">
                                            1. 환경관리 향상
                                            <p>
                                                ISO 14001을 준수하는 환경경영시스템은 잠재적 영향 파악에 도움을 주며, 리스크를 최소화하기 위한 관리 및 조치를 수행합니다. ISO 14001은 자원활용 감소 및 귀사 사업의 전반적 효율성을 향상시키기 위해, 그리고 귀사 운영의 더 큰 역량을 최고화하기 위해 정량화 및 측정 가능한 도구를 제공합니다.
                                            </p>
                                        </li>
                                        <li class="point_b2">
                                            2. 사업 역량 증대
                                            <p>
                                                최종고객은 종종 납품 조건으로 인증서를 요구합니다. 따라서, 인증 취득은 사업 확장 역량이 됩니다. 새로운 시장 부문으로 귀사의 사업을 확장하는 경우, 인증은 프로세스를 빈틈없이 만드는 가장 최고의 도구입니다.
                                            </p>
                                        </li>
                                        <li class="point_b2">
                                            3. 증명된 사업 신뢰도
                                            <p>
                                                인정된 규격에 대한 독립적 심사는 많은 것을 보여주며, 귀사 브랜드를 향상시킵니다. ISO 14001을 준수하는 조직은 많은 시간과 노력이 듭니다. 바이어 및 기타 주주들은 이를 인식하고 누구와 새로 추진할지에 대한 의사결정을 할 때 이를 참고합니다.
                                            </p>
                                        </li>
                                        <li class="point_b2">
                                            4. 주주 관계 개선
                                            <p>
                                                환경을 우선시하게 되면 사람들은 귀사에 긍정적으로 반응할 것입니다. ISO 14001 인증은 전 세계적으로 인정 받고 있습니다. 귀사의 사업을 다른 지역으로 확장하려고 하는 경우, 인증은 귀사가 책임을 다하기 위해 적극적 조치를 취하고 있다는 것을 잠재적 고객에게 보이기 위한 최선의 방법입니다.
                                            </p>
                                        </li>
                                        <li class="point_b2">
                                            5. 운영 비용 감소
                                            <p>
                                                에너지 및 물 사용량 효율성 달성 및 폐기물 최소화는 비용 절감을 의미합니다.
                                            </p>
                                        </li>
                                        <li class="point_b2">
                                            6. 법규 준수
                                            <p>
                                                법적/규제적 요구사항이 어떻게 귀사에 영향을 끼치는지 이해한다면, 법을 지키는 것이 더욱 쉽고 합리적일 것입니다. ISO 14001 또한 귀사가 미래 법적 규제들을 충족하도록 합니다. 이는 지속적으로 변화하는 법적 상황에 대해 매우 큰 장점입니다.
                                            </p>
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
                                <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC 인증원의 역량</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. GIC는 미국의 인정기구인 IAS로부터 ISO 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다.</li>
                                        <li>2. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                        <li>3. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 9001은 물론 환경경영 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li>
                                        <li>4. GIC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                </ul>
            </div>
            <strong class="con_arrow">
                <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
            </strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 02 종료 +++++--> 

        <article><!--+++++ 컨텐츠 03 시작 +++++-->
            <div class="page_title">
                <h1 class="sub_tit">안전보건 ISO 45001</h1>
                <h2 class="sub_tit2 fc_pointer">안전/보건 경영시스템 인증</h2>
                <p class="sub_txt">
                    ISO 45001은 안전보건경영시스템으로, 기존의 OHSAS 18001:2007 규격이 2018년 ISO 45001로 대체되었습니다. 이는 ISO 9001 및 14001 관리 시스템과 호환되는 산업 보건 및 안전 관리 시스템을 통해 보건 및 안전 관리 책임을 관리하기 위한 프레임워크를 제공합니다. 이 표준은 국제적 사용을 위해 개발되었으며 조직이 보건 및 안전 위험을 제어하고 성능을 향상시킬 수 있도록 합니다.<br><br>
                    효과적인 안전보건 관리시스템은 직원 및 기타 이해 관계자에 대한 위험을 줄이고 법규 준수를 지원합니다. 기존 OHSAS 18001 규격이 2021년 3월 만료됨에 따라 신규 고객의 경우 2020년 3월부터는 ISO 45001로 진행되어야 하고, 기존 OHSAS 18001 인증 고객은 ISO 45001로 전환되어야 합니다.
                </p>
            </div>
            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO 45001_01.jpg" alt="ISO 45001 요구사항">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 45001:2018 요구사항</h3>
                                <p>
                                    ISO 45001:2018은 ISO 9001:2015 등의 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 적용범위</li>
                                        <li>2. 인용표준</li>
                                        <li>3. 용어와 정의</li>
                                        <li>4. 조직 상황</li>
                                        <li>5. 리더십과 근로자 참여</li>
                                        <li>6. 기획</li>
                                        <li>7. 지원</li>
                                        <li>8. 운용</li>
                                        <li>9. 성과평가</li>
                                        <li>10. 개선</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO 45001_02.jpg" alt="ISO 4500의 중요성">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 45001의 중요성</h3>
                                <p>
                                    ISO 45001은 127개국 이상의 9만개 이상 조직에게 적합합니다. 만약에 귀사의 조직이 책임이 있는 사람들의 안전관리의 '모범 사례'를 보여야 한다면 ISO 45001은 귀사에게 적합할 것입니다. GIC는 관공서, 제조업, 서비스업, 식품회사, 프랜차이즈점을 포함한 다양한 분야의 다양한 조직에게 인증을 부여하고 있습니다.
                                </p>
                                <div class="con_txt">
                                    <ul><span class="point_b2">이 규격은 다음 사항들에 도움을 줍니다.</span>
                                        <li>1. 작업장 유해물질 파악 및 효과적인 예방관리 수행</li>
                                        <li>2. 작업장 내 부상 및 건강 악화 방지</li>
                                        <li>3. 현장 사고 감소를 통해 비용 절감</li>
                                        <li>4. 법적 요구사항 준수 평가</li>
                                        <li>5. 안전 환경 개선</li>
                                        <li>6. 교육훈련 및 적격성 요구사항 분야 파악</li>
                                        <li>7. 생산성 증가</li>
                                        <li>7. 고객사의 사전 등록 프로세스 보완</li>
                                        <li>7. 기업 책임 촉진</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC 인증원의 역량</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. GIC는 미국의 인정기구인 IAS로부터 ISO 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다.</li>
                                        <li>2. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                        <li>3. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 9001은 물론 환경경영 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li>
                                        <li>4. GIC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                </ul>
            </div>
            <strong class="con_arrow">
                <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
            </strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 03 종료 +++++--> 
 
        
<!--===========================================================================================================================-->
   
        <article><!--+++++ 컨텐츠 04 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="fir_menu on"><a data-slide-index="0">ISO 13485</a></li>
                    <li><a data-slide-index="1">ISO 15378</a></li>
                    <li><a data-slide-index="2">ISO 14155</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con4-1" class="roll roll01 on"><!-- 4depth 컨텐츠 04-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">보건 및 의료기기 ISO 13485</h1>
                        <h2 class="sub_tit2 fc_pointer">의료기기 품질경영시스템 인증</h2>
                        <p class="sub_txt">
                            ISO 13485는 의료기기의 설계 및 개발, 생산, 설치 및 부가서비스를 제공하는 조직의 품질 경영 시스템에 대한 요구사항을 규정한 규격입니다. 또한 이 규격은 의료기기 조직에 멸균, 교정, 판매 등의 서비스를 제공하는 외부 조직에도 적용될 수 있어, 의료기기 및 관련 서비스 제공 조직에 품질 경영 시스템의 기반을 제공합니다.
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 13485_01.jpg" alt="ISO 13485 요구사항">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 13485:2016 요구사항</h3>
                                        <p>
                                            조직의 목적과 목표를 뒷받침하는 ISO 13485는 ISO 9001을 근간으로 하여 의료기기에 관련된 사항을 추가하여 제정된 의료기기 산업의 품질경영시스템에 대한 국제 표준입니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 적용범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어와 정의</li>
                                                <li>4. 품질 경영 시스템</li>
                                                <li>5. 경영 책임</li>
                                                <li>6. 자원 관리</li>
                                                <li>7. 제품 실현</li>
                                                <li>8. 측정, 분석 및 개선</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 13485_02.jpg" alt="ISO 13485 인증의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 13485의 중요성</h3>
                                        <p>
                                            의료기기는 인간의 생명 및 건강에 직접 영향을 끼치기 때문에 다른 어떤 제품보다도 높은 수준의 안정성에 대한 보장이 필요합니다. 그래서 의료기기 산업은 국내 규제제도, 국제적인 표준 및 다른 기타 요구사항 등 충족해야 하는 규제가 다양합니다.<br>
                                            EU 의료기기 지침의 요구사항 충족을 위해서는 품질 시스템을 구축하여야 하며, 캐나다 등 일부 국가에서는 제품 판매를 위해 ISO 13485 인증을 요구하고 있습니다.<br>
                                            의료기기 제조사는 ISO 13485 시스템인증을 통해 조직의 시스템이 품질경영시스템에 대한 포괄적인 요구사항 및 의료기기에 대한 특별한 요구사항에 부합함을 입증할 수 있습니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">이 규격은 다음 사항들에 도움을 줍니다.</span>
                                                <li>1. ISO 13485 품질 경영 시스템을 통한 조직의 전 프로세스 관리</li>
                                                <li>2. 작업 환경 개선</li>
                                                <li>3. 사전 예방적 품질관리</li>
                                                <li>4. 전 직원의 품질 관리 시스템 인식 개선</li>
                                                <li>5. 비용 절감 및 효율성 증가</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. GIC는 미국의 인정기구인 IAS로부터 ISO 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다.</li>
                                                <li>2. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                                <li>3. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 9001은 물론 환경경영 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li>
                                                <li>4. GIC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                <section id="con4-2"  class="roll roll02"><!-- 4depth 컨텐츠 04-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">보건 및 의료기기 ISO 15378</h1>
                        <h2 class="sub_tit2 fc_pointer">의약품용 1차 포장제품 인증</h2>
                        <p class="sub_txt">
                            ISO 15378:2017은 의약품의 1차 포장재에 대한 규격으로써 재료 공급 업체에 품질관리시스템을 입증하기 위해 개발된 비인정 규격입니다. 1차 포장재란 약품, 의료기기 및 화장품 등과 같은 내용물과 직접 접촉하는 포장재로써 유리, 플라스틱, 고무, 알루미늄 등이 있습니다.<br><br>
                            ISO 9001의 요구사항과 GMP(Good Manufacturing Practice)의 요구사항을 적용하여야 하며, ISO 15378:2017 표준에 품질 경영 시스템의 요구사항을 설계, 제조 및 공급을 위한 GMP 원칙과 통합한 것입니다. 조직 내에서 1차 포장재의 관리에서 GMP 원칙을 실현하는 것은 직접적으로 제품과 접촉하는 의약품을 사용하는 환자의 안전을 위해 매우 중요합니다.<br><br>
                            ISO 15378:2017 인증을 받기 위해서는 다음 사항을 준수하여야 합니다.<br><br>
                            <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;법적 요구사항 준수</span>
                            <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;오염 및 제조 오류를 포함한 위험의 식별 및 감소, 제어</span>
                            <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;시스템의 효과적인 모니터링을 위한 프로세스의 접근</span>
                            <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;제품 및 프로세스의 전반적인 개선을 위한 지속적인 개선 제공</span>
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 15378-2017_04.jpg" alt="ISO 15378:2017 요구사항">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 15378:2017 요구사항</h3>
                                        <p>
                                            ISO 15378:2017 표준은 동일한 10의 상위 레벨 구조로 구성되어 있으며, 관련 규격의 요구사항 및 국제 표준을 포함하여 고객의 요구사항을 일관되게 충족하여야 합니다. ISO 15378:2017 규격은 10개의 장과 4개의 부록으로 이루어져 있습니다. 품질경영시스템을 잘 이해하고 수행하고 있는 제조업체의 경우 추가적인 요구사항의 이해와 반영을 통해 ISO 15378 규격을 인증 받을 수 있습니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 적용범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어와 정의</li>
                                                <li>4. 조직 상황</li>
                                                <li>5. 리더십</li>
                                                <li>6. 기획</li>
                                                <li>7. 지원</li>
                                                <li>8. 운용</li>
                                                <li>9. 성과평가</li>
                                                <li>10. 개선</li>
                                            </ul>
                                            <ul><span class="point_b2">다음은 ISO 15378:2017의 추가 요구사항입니다.</span>
                                                <li>4.3 구체적인 문서 관리조건 : 문서에 서명하고 필요시 보안문서로 지정하여야 하며, 식별할 수 있어야 합니다.</li>
                                                <li>4.4 중요공정 기록관리는 이중으로 체크하여야 합니다.</li>
                                                <li>5.2 고객의 심사를 수락하여야 하고 요구사항을 충족하여야 합니다.</li>
                                                <li>5.5 직원의 서명 리스트를 유지하고 품질부서의 독립성을 강조하여야 합니다.</li>
                                                <li>5.5.3 내부 의사소통 시 법규사항을 포함하고 중요 품질상황은 적시에 소통하여야 합니다.</li>
                                                <li>5.8.3 경영검토 회의 시 교육훈련에 대한 효과성을 파악하여야 합니다.</li>
                                                <li>6.2 GMP 교육훈련이 강조되었습니다.</li>
                                                <li>6.4 클린룸 및 작업환경의 기준을 수립하여야 하고 오염관리, 해충관리, 유틸리티, 유지보수 활동을 기술하여야 합니다.</li>
                                                <li>7.1 위험평가를 실시하여야 합니다.</li>
                                                <li>7.2 제품에 변경사항이 있을 시 통보하여야 하며 폐기되는 포장재 처리를 위한 고객의 요구사항을 문서화하여야 합니다.</li>
                                                <li>7.2.3 아직 발견되지 않은 제품의 문제를 고객에게도 통보하여야 합니다.</li>
                                                <li>7.3 설계, 개발 단계에서도 위험평가를 실시하여야 하며 설계의 변경이 있을 시 고객에게 통보하여야 합니다.</li>
                                                <li>7.4 외주 업체를 관리하여야 하며 특히 실험을 하는 업체는 능력을 평가하여야 합니다. 핵심 공급 물품에 대해서는 품질부서의 승인이 필요합니다.</li>
                                                <li>7.5.1 제조일자를 관리하고 생산 환경조건을 고객이 승인하여야 합니다. 용기 및 충진과 포장라인이 식별되어야 하며, 재가공 재료도 고객의 승인이 필요합니다. 다음 작업을 위한 라인 점검을 수행하여야 하며, 변경 관리 절차를 수립하여야 합니다.</li>
                                                <li>7.5.2 제품 공정의 타당성을 확인하고 실행하여야 하며, 변경 사항이 있을 시 다시 타당성 확인을 실시하여야 합니다. 또한 이러한 타당성은 기록으로 유지하여야 하며 소프트웨어 사용시 기능 테스트 결과, 정확도 등의 데이터를 보관하고 유지하여야 합니다.</li>
                                                <li>7.5.3 중요공정데이터를 포함한 생산 공정 제품의 식별 및 추적이 가능하여야 합니다.</li>
                                                <li>7.5.5 보존기간 및 창고 보관 조건을 명시하여야 합니다.</li>
                                                <li>7.6 자동 검사장비의 부하를 시험하여야 하고, 고객 요청이 있을 시 생산 데이터를 제공하여야 하며, 중요 측정장비는 검교정을 해야 합니다.</li>
                                                <li>8.2.4 일탈 및 입고검사, 공정검사, 최종검사, 보관품에 대한 기록을 관리하여야 합니다.</li>
                                                <li>8.3 재작업품의 위험성을 평가하고 재작업 시 품질부서의 승인을 받아야 하며 고객 승인하에 부적합을 관리하여야 합니다.</li>
                                                <li>8.5.2 시정할 사항의 조치는 가능한 신속하게 규정된 일정에 수행하여야 합니다.</li>
                                            </ul>
                                            <ul><span class="point_b2">* 적용범위</span>
                                                <li>1. 의약품 1차 포장재를 제공하는 조직의 능력을 입증할 필요가 있는 경우, 품질경영시스템에 대한 요구사항을 명시하여야 합니다.</li>
                                                <li>2. 의약품을 위한 1차 포장재의 설계, 제조 및 공급에 적용하는 규격이며, 이 규격은 인증 목적으로도 사용할 수 있습니다.</li>
                                                <li>3. 이 규격의 모든 요구사항은 일반적이며, 제품에 관련 없이 모든 조직에 적용 가능하도록 개발되고, 규격의 요구사항이 조직 및 제품에 적용될 수 없다면 그 조항을 제외할 수 있습니다.</li>
                                            </ul>
                                            <ul><span class="point_b2">* ISO 9001:2015 외 추가 요구사항</span>
                                                <li>ISO 15378:2017 규격은 10개의 장과 4개의 부록으로 이루어져 있습니다. 품질경영시스템을 잘 이해하고 수행하고 있는 제조업체의 경우 추가적인 요구사항의 이해와 반영을 통해 ISO 15378 규격을 인증 받을 수 있습니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 15378-2017_000.jpg" alt="ISO 15378:2017 인증">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 15378의 중요성</h3>
                                        <p>
                                            GMP 및 품질경영시스템의 요구사항을 적용하는 1차 포장재에 대한 인증은 전세계적으로 인정받고 있으며 의약품과 직접 접촉하는 1차 포장재는 의약품을 사용하는 사람이나 동물의 건강과 직접적으로 관련되기 때문에 그 중요성이 더욱 부각되고 있습니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">ISO 15378 인증의 장점은 아래와 같습니다.</span>
                                                <li>1. 제조 시 오염, 혼합 및 제조 오류와 폐기물을 최소화하고 생산성을 향상시켜 비용을 절감할 수 있습니다.</li>
                                                <li>2. 위험 관리 및 검증에 대한 지침을 제공함으로써 제품의 오염, 혼합 및 오류로 식별된 위험을 완화하고 제품 효능 및 유효기간을 보장할 수 있습니다.</li>
                                                <li>3. ISO 15378:2017 표준에 따라 GMP 요구사항을 준수함으로써 생산 프로세스의 숙련도를 향상시킬 수 있습니다.</li>
                                                <li>4. 품질경영시스템의 요구사항 및 GMP 요구사항을 준수하여 제품을 생산함으로써 고품질의 제품을 보증하고 이것이 고객의 만족도 향상으로 이어질 수 있고, 최적화된 품질경영시스템 요구사항을 구현할 수 있습니다.</li>
                                                <li>5. 조직의 브랜드 및 이미지를 주요 이해 관계자와 함께 향상시키고 조직의 품질 및 안정성을 보장하는데 도움을 줌으로써 브랜드를 보호하는 효과를 가져올 수 있습니다.</li>
                                                <li>6. ISO 15378 심사 프로세스 전반에 걸쳐 조직이 리스크를 식별, 제어 및 관리할 수 있도록 지원함으로써 효율적인 리스크 관리를 할 수 있도록 도와줍니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. GIC는 미국의 인정기구인 IAS로부터 ISO 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다.</li>
                                                <li>2. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                                <li>3. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 9001은 물론 환경경영 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li>
                                                <li>4. GIC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                <section id="con4-3" class="roll roll03"><!--4depth 컨텐츠 04-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">보건 및 의료기기 ISO 14155</h1>
                        <h2 class="sub_tit2 fc_pointer">의료기기 임상조사계획 자발적 평가 인증</h2>
                        <p class="sub_txt">
                            ISO 14155는 ‘인체 대상 의료기기 임상시험에 대한 국제표준 – GCP(Good Clinical Practice)’으로 임상 시험 원칙, 수행 절차 및 수집할 정보에 대한 가이드라인을 제공합니다.<br>
                            ISO 14155에 따른 임상시험을 진행하면 피험자의 안전 및 보건을 보호하는 한편, 객관적이고 신뢰할 수 있는 과학적 임상 데이터를 수집할 수 있습니다. 또한 EU 뿐만 아니라, 미국, 캐나다, 브라질, 호주, 일본, 중국, 러시아에서도 ISO 14155에 기반한 의료기기 임상시험 및 임상데이터를 인정하고 있기 때문에 그 중요성과 효율성은 날로 더 커질 것입니다.
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_14155_01.jpg" alt="ISO 14155 요구사항">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 14155:2011 요구사항</h3>
                                        <p>
                                            ISO 14155:2011은 임상시험 관리 기준(GCP)뿐 아니라 임상 품질 관리 과정과 관련하여 의뢰자, 연구자, 현장의 연구 심사 개념을 도입한 규격입니다. 이는 윤리적 고려사항과 임상 조사에 대한 단계적 접근으로 정확하고 신뢰가능한 임상데이터 수집이 가능합니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 적용범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어와 정의</li>
                                                <li>4. GCP원리 요약</li>
                                                <li>5. 윤리적 고려사항</li>
                                                <li>6. 임상조사계획</li>
                                                <li>7. 임상조사실시</li>
                                                <li>8. 임상 조사 중단, 종료 및 폐쇄</li>
                                                <li>9. 스폰서의 책임</li>
                                                <li>10. 주요 조사의 책임</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_14155_02.jpg" alt="ISO 14155의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 14155의 중요성</h3>
                                        <p>
                                            임상 조사 계획의 적절한 설계는 필수적입니다. 데이터 수집을 위한 적절한 규칙과 절차를 밝히지 않는 과정은 의료기기 제조사의 안전 및 성능에 관한 주장을 충분히 뒷받침하지 못하는 결과를 초래할 수 있으므로 매우 중요합니다. 또한, 이 표준을 준수한다는 것은 시험 대상자의 권리, 안정성, 복리가 보장되며 임상 시험 데이터를 신뢰할 수 있다는 아주 중요한 증거입니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">이 규격은 다음 사항들에 도움을 줍니다.</span>
                                                <li>1. 의료기기와 관련된 모든 위험 가능성 식별</li>
                                                <li>2. 안전 및 성능과 관련된 임상 데이터 수집가능</li>
                                                <li>3. 환자의 안전과 복지 보호</li>
                                                <li>4. 기기의 적합성 평가</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_14155_03.jpg" alt="ISO 14155의 기대효과">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 14155 기대효과</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    <span class="point_b2">1. 품질 경영 시스템 인증 및 심사 스페셜리스트</span>
                                                    일반적으로 의료기기 승인에 있어서 품질 경영 시스템 구현이 필요합니다. GIC인증원은 대부분의 국제 규정 및 표준에 따라 품질 경영 시스템 인증, 감사 및 공장 심사를 수행하여 고객이 시간 및 비용을 줄이고 통합 검사 및 심사를 받으실 수 있습니다.<br><br>
                                                </li>
                                                <li>
                                                    <span class="point_b2">2. 최상의 솔루션 제공</span>
                                                    GIC인증원은 국제 표준 및 규정에 따라 주요 의료기기 시장 진입에 필요한 시험 서비스를 제공합니다.<br><br>
                                                </li>
                                                <li>
                                                    <span class="point_b2">3. 전문집단과의 파트너쉽</span>
                                                    GIC인증원은 오랜 기간 의료기기에 대한 기술 및 규제에 관한 전문지식을 축적해 왔으며, 글로벌 제조사에서부터 지역 연구소에 이르기까지 다양한 조직으로부터 변함없는 신뢰를 받고 있습니다.
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
                                        <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <p>
                                            MDR이 본격 적용되는 2020년 5월부터는 EU지역으로의 의료기기 수출을 위해 반드시 ISO 14155 기반의 임상데이터와 조사결과가 필요하게 됩니다. GIC의 의료기기 임상 전문가들은 귀하의 임상 시험에 대해 GCP 준수 검토를 시행하고 시정 조치 권고 사항을 제공합니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">GIC는 다음과 같은 최고의 역량을 갖추고 있습니다.</span>
                                                <li>1. 의료기기 임상 시험 관리 및 모니터링</li>
                                                <li>2. 의료기기 임상 시험 연구 디자인 및 프로토콜 개발 지원</li>
                                                <li>3. 임상 조사 보고서 검토</li>
                                                <li>4. 임상 시험 기본 문서 파일(Trial Master File) 검토</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                </div><!----div class="slider" 종료-------->
            </div>
        </article><!--+++++ 컨텐츠 04 종료 +++++--> 
        
<!--============================================================================================================================-->
   
        <article><!--+++++ 컨텐츠 05 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 22000</a></li>
                    <li><a data-slide-index="1">FSSC 22000</a></li>
                    <li><a data-slide-index="2">FDA FSMA</a></li>
                    <li><a data-slide-index="3">Global HACCP</a></li> 
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con5-1" class="roll roll01 on"><!-- 4depth 컨텐츠 05-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">식품 ISO 22000</h1>
                        <h2 class="sub_tit2 fc_pointer">식품안전 경영시스템 인증</h2>
                        <p class="sub_txt">
                            ISO 22000은 장비의 생산, 재료 포장, 세제, 첨가제 및 원료 등의 관련 기업을 포함하여 전체 식품 체인 비즈니스에 적합한 국제적인 표준입니다. ISO 22000은 ISO 9001 및 HACCP의 주요 내용이 혼합 및 보완된 규격으로, 이로 인해 식품안전경영시스템(FSMS)의 개발, 수행 및 지속적 개선을 위한 효과적인 프레임워크를 제공합니다.<br><br>
                            2018년 6월 ISO 22000이 전면 개정됨에 따라, 기존 ISO 22000:2005 인증서는 2021년 6월 1일에 만료됩니다. 기존 ISO 22000:2005 고객은 만료일 이전까지 ISO 22000:2018로의 전환이 완료되어야 하며, 2020년 6월 이후로 모든 신규, 갱신 고객은 ISO 22000:2018로 인증을 받아야 합니다.<br><br>
                            ISO 22000:2018의 주요한 변경사항은 다음과 같습니다.<br><br>
                            <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;리더십의 책임에 관한 보다 강력한 강조</span>
                            <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;식품안전 경영시스템 개발에서의 리스크 기반 접근법을 적용</span>
                            <span style="display: block;text-indent: 1.2em">
                                &#10020;&nbsp;&nbsp;다음을 포함한 주요 개념의 명백화
                                <span style="display: block;text-indent: 1.8em">
                                    -&nbsp;&nbsp;계획-실행-확인-조치(Plan-Do-Check-Act) 사이클: 하나는 경영 시스템을 다루고, 하나는 HACCP원칙을 다루는 두 개의 개별 사이클을 가지고 이 표준 내에서 함께 작동
                                </span>
                                <span style="display: block;text-indent: 1.8em">
                                    -&nbsp;&nbsp;중요관리점(CCPs), 운용선행요건프로그램(Operational PRPs), 선행요건 프로그램(PRPs)를 포함한 주요 용어의 차별화
                                </span>
                            </span>
                            <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;High Level Structure 구조를 가진 표준의 내용 재배치를 통해 다른 ISO 경영 시스템과의 개선된 범용성</span>
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_22000_01.jpg" alt="ISO 22000 요구사항">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000:2018 요구사항</h3>
                                        <p>
                                            ISO 22000:2018은 ISO 9001:2015 등 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 적용범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어와 정의</li>
                                                <li>4. 조직 상황</li>
                                                <li>5. 리더십</li>
                                                <li>6. 기획</li>
                                                <li>7. 지원</li>
                                                <li>8. 운용</li>
                                                <li>9. 성과 평가</li>
                                                <li>10. 개선</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_22000_02.jpg" alt="ISO 22000의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000의 중요성</h3>
                                        <p>
                                            ISO 22000은 국제식품규격위원회가 개발한 위해요소중점관리기준(HACCP) 시스템의 원칙과 적용단계를 통합하고 있습니다. 이 표준은 프로세스 형태 및 사용시설과 관련될 수 있는 위해요소를 포함하여, 식품사슬에서 발생할 것이 예측되는 모든 위해요소를 파악하고 평가하도록 요구하고 있습니다. 따라서 ISO 22000은 파악된 위해요소 중 관리될 필요가 있는 것과 없는 것을 구분하도록 도와주고 문서화를 위한 수단을 제공합니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">이 규격은 다음 사항들에 도움을 줍니다.</span>
                                                <li>1. 구축과정에서 효과적인 식품안전 경영시스템 관리수단의 확립 및 위험 최소화</li>
                                                <li>2. 고객 신뢰성 확보</li>
                                                <li>3. 종업원의 책임의식 향상</li>
                                                <li>4. 비즈니스의 지속가능성 향상</li>
                                            </ul>
                                            <ul><span class="point_b2">이 규격은 다음을 포함한 식품 체인 내 직접 또는 간접 관여된 모든 조직에 적용 가능합니다.</span>
                                                <li>1. 농장, 어류 및 낙농장</li>
                                                <li>2. 고기, 어류 및 사료 생산</li>
                                                <li>3. 빵, 씨리얼, 음료 및 냉동식품 제조사</li>
                                                <li>4. 레스토랑, 패스트푸드 체인점, 병원, 호텔 및 출장 연회를 포함한 식품 서비스 제공자</li>
                                                <li>5. 식품 보관 및 납품, 식품 가공 기계, 첨가제, 원재료, 청소 및 살균 제품 및 포장지 납품업체</li><br>
                                                <span>결론적으로 일부 또는 모든 ISO 22000 요구사항들은 식품 산업 또는 식품 체인 관련 모든 제품에 적용될 것입니다.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_22000_03.jpg" alt="ISO 22000 인증의 기대효과">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000 기대효과</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    <span class="point_b2">1. 고객 만족</span>
                                                    품질, 안전 및 적법성을 포함한 고객 요구사항을 지속적으로 충족하는 제품 납품을 통해 달성<br><br>
                                                </li>
                                                <li>
                                                    <span class="point_b2">2. 운영 비용 감소</span>
                                                    지속적 프로세스 개선 및 운영 효율성으로 인한 비용 감소<br><br>
                                                </li>
                                                <li>
                                                    <span class="point_b2">3. 운영 효율성</span>
                                                    선행 요건 (PRPs &amp; OPRPs) 및 ISO 9001 계획-실행-검토-조치 철학 통합을 통해, 식품안전경영시스템 효과성 증가<br><br>
                                                </li>
                                                <li>
                                                    <span class="point_b2">4. 주주 관계 개선</span>
                                                    직원, 고객 및 납품업체 포함<br><br>
                                                </li>
                                                <li>
                                                    <span class="point_b2">5. 법규 준수</span>
                                                    내부심사 및 경영검토를 통해 법적/규제적 요구사항이 어떻게 귀사, 고객 및 시험 규정 준수에 영향을 끼치는지 이해<br><br>
                                                </li>
                                                <li>
                                                    <span class="point_b2">6. 리스크 관리 개선</span>
                                                    제품 일치성 및 추적성 증가를 통해 달성<br><br>
                                                </li>
                                                <li>
                                                    <span class="point_b2">7. 검증된 사업 신뢰도</span>
                                                    인정된 규격에 대한 독립적 검증을 통해 달성<br><br>
                                                </li>
                                                <li>
                                                    <span class="point_b2">8. 사업 확대</span>
                                                    특히 고객은 납품 조건으로 인증서를 요구하는 경우 해당
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
                                        <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <p>
                                            GIC는 미국의 인정기구인 IAS로부터 ISO 22000에 대한 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. GIC는 글로벌 경쟁력을 기반으로 ISO 22000 인증 외에 식품분야에 대하여 다양한 서비스를 제공하고 있습니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. FSSC 22000 인증</li>
                                                <li>2. ISO 22000 심사원 교육</li>
                                                <li>3. Vegan 인증</li>
                                                <li>4. 식품 시험 (ISO 17025인정)</li>
                                                <li>5. FDA FSMA 3자 인증기관</li>
                                                <li>6. PCQI Lead Instructor 보유 (2명)</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                <section id="con5-2" class="roll roll02"><!-- 4depth 컨텐츠 05-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">식품 FSSC 22000</h1>
                        <h2 class="sub_tit2 fc_pointer">식품안전 시스템 인증</h2>
                        <p class="sub_txt">
                            FSSC 22000 (Food Safety System Certification) 표준은 식품제조회사들에게 가장 영향력 있는 국제식품안전기구 (GFSI: Global Food Safety Initiative)가 식품산업 전반에 적합한 식품안전인증제도를 도입하기 위하여 승인한 식품 안전 표준입니다.<br><br>
                            세계 인구가 증가함에 따라 저렴하고 안전하며 양질의 식품에 대한 수요가 증가하고 있습니다. 이러한 요구를 충족시키기 위해 FSSC 22000은 신뢰할 수 있는 식품 안전 플랫폼을 식품 업계에 제공합니다. FSSC 22000은 ISO 22000을 기반으로 식품 및 그 성분의 공급자에 대한 분야별 선행요건 프로그램(PRPs)과 추가적인 FSSC 22000 요구사항을 조합한 것으로, 조직의 규모, 복잡성, 위치에 관계없이 모든 식품 제조기업에 적용됩니다. 또한, 수송 및 생산현장에서의 보관도 인증 범위에 포함됩니다.<br><br>
                            <span class="con_img">
                                <img src="./image/FSSC22000_01.jpg" alt="FSSC 22000 식품안전 시스템 인증">
                            </span>
                            <span>
                                GIC는 IAS로부터 인정받은 FSSC 22000 인증 기관으로써, 국내 인증원 중 가장 많은 FSSC 22000 인증 scope와 고객 수를 보유하고 있습니다. 따라서, FSSC 22000 인증을 받은 식품 제조 업체는 GFSI 승인 규격의 국제적 수요 증가에 따라 바이어들로부터 많은 신뢰를 받을 수 있고, 특히 GIC에서 받은 FSSC 22000 인증서를 통해 신뢰성 있는 인증원으로부터 인증서를 획득하였다는 점을 증명함으로써 업체의 이미지 제고 및 경쟁력 강화에 도움이 될 수 있습니다.
                            </span>
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 15378-2017_04.jpg" alt="ISO 15378:2017 요구사항">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 15378:2017 요구사항</h3>
                                        <p>
                                            ISO 15378:2017 표준은 동일한 10의 상위 레벨 구조로 구성되어 있으며, 관련 규격의 요구사항 및 국제 표준을 포함하여 고객의 요구사항을 일관되게 충족하여야 합니다. ISO 15378:2017 규격은 10개의 장과 4개의 부록으로 이루어져 있습니다. 품질경영시스템을 잘 이해하고 수행하고 있는 제조업체의 경우 추가적인 요구사항의 이해와 반영을 통해 ISO 15378 규격을 인증 받을 수 있습니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 적용범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어와 정의</li>
                                                <li>4. 조직 상황</li>
                                                <li>5. 리더십</li>
                                                <li>6. 기획</li>
                                                <li>7. 지원</li>
                                                <li>8. 운용</li>
                                                <li>9. 성과평가</li>
                                                <li>10. 개선</li>
                                            </ul>
                                            <ul><span class="point_b2">다음은 ISO 15378:2017의 추가 요구사항입니다.</span>
                                                <li>4.3 구체적인 문서 관리조건 : 문서에 서명하고 필요시 보안문서로 지정하여야 하며, 식별할 수 있어야 합니다.</li>
                                                <li>4.4 중요공정 기록관리는 이중으로 체크하여야 합니다.</li>
                                                <li>5.2 고객의 심사를 수락하여야 하고 요구사항을 충족하여야 합니다.</li>
                                                <li>5.5 직원의 서명 리스트를 유지하고 품질부서의 독립성을 강조하여야 합니다.</li>
                                                <li>5.5.3 내부 의사소통 시 법규사항을 포함하고 중요 품질상황은 적시에 소통하여야 합니다.</li>
                                                <li>5.8.3 경영검토 회의 시 교육훈련에 대한 효과성을 파악하여야 합니다.</li>
                                                <li>6.2 GMP 교육훈련이 강조되었습니다.</li>
                                                <li>6.4 클린룸 및 작업환경의 기준을 수립하여야 하고 오염관리, 해충관리, 유틸리티, 유지보수 활동을 기술하여야 합니다.</li>
                                                <li>7.1 위험평가를 실시하여야 합니다.</li>
                                                <li>7.2 제품에 변경사항이 있을 시 통보하여야 하며 폐기되는 포장재 처리를 위한 고객의 요구사항을 문서화하여야 합니다.</li>
                                                <li>7.2.3 아직 발견되지 않은 제품의 문제를 고객에게도 통보하여야 합니다.</li>
                                                <li>7.3 설계, 개발 단계에서도 위험평가를 실시하여야 하며 설계의 변경이 있을 시 고객에게 통보하여야 합니다.</li>
                                                <li>7.4 외주 업체를 관리하여야 하며 특히 실험을 하는 업체는 능력을 평가하여야 합니다. 핵심 공급 물품에 대해서는 품질부서의 승인이 필요합니다.</li>
                                                <li>7.5.1 제조일자를 관리하고 생산 환경조건을 고객이 승인하여야 합니다. 용기 및 충진과 포장라인이 식별되어야 하며, 재가공 재료도 고객의 승인이 필요합니다. 다음 작업을 위한 라인 점검을 수행하여야 하며, 변경 관리 절차를 수립하여야 합니다.</li>
                                                <li>7.5.2 제품 공정의 타당성을 확인하고 실행하여야 하며, 변경 사항이 있을 시 다시 타당성 확인을 실시하여야 합니다. 또한 이러한 타당성은 기록으로 유지하여야 하며 소프트웨어 사용시 기능 테스트 결과, 정확도 등의 데이터를 보관하고 유지하여야 합니다.</li>
                                                <li>7.5.3 중요공정데이터를 포함한 생산 공정 제품의 식별 및 추적이 가능하여야 합니다.</li>
                                                <li>7.5.5 보존기간 및 창고 보관 조건을 명시하여야 합니다.</li>
                                                <li>7.6 자동 검사장비의 부하를 시험하여야 하고, 고객 요청이 있을 시 생산 데이터를 제공하여야 하며, 중요 측정장비는 검교정을 해야 합니다.</li>
                                                <li>8.2.4 일탈 및 입고검사, 공정검사, 최종검사, 보관품에 대한 기록을 관리하여야 합니다.</li>
                                                <li>8.3 재작업품의 위험성을 평가하고 재작업 시 품질부서의 승인을 받아야 하며 고객 승인하에 부적합을 관리하여야 합니다.</li>
                                                <li>8.5.2 시정할 사항의 조치는 가능한 신속하게 규정된 일정에 수행하여야 합니다.</li>
                                            </ul>
                                            <ul><span class="point_b2">* 적용범위</span>
                                                <li>1. 의약품 1차 포장재를 제공하는 조직의 능력을 입증할 필요가 있는 경우, 품질경영시스템에 대한 요구사항을 명시하여야 합니다.</li>
                                                <li>2. 의약품을 위한 1차 포장재의 설계, 제조 및 공급에 적용하는 규격이며, 이 규격은 인증 목적으로도 사용할 수 있습니다.</li>
                                                <li>3. 이 규격의 모든 요구사항은 일반적이며, 제품에 관련 없이 모든 조직에 적용 가능하도록 개발되고, 규격의 요구사항이 조직 및 제품에 적용될 수 없다면 그 조항을 제외할 수 있습니다.</li>
                                            </ul>
                                            <ul><span class="point_b2">* ISO 9001:2015 외 추가 요구사항</span>
                                                <li>ISO 15378:2017 규격은 10개의 장과 4개의 부록으로 이루어져 있습니다. 품질경영시스템을 잘 이해하고 수행하고 있는 제조업체의 경우 추가적인 요구사항의 이해와 반영을 통해 ISO 15378 규격을 인증 받을 수 있습니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 15378-2017_000.jpg" alt="ISO 15378:2017 인증">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 15378의 중요성</h3>
                                        <p>
                                            GMP 및 품질경영시스템의 요구사항을 적용하는 1차 포장재에 대한 인증은 전세계적으로 인정받고 있으며 의약품과 직접 접촉하는 1차 포장재는 의약품을 사용하는 사람이나 동물의 건강과 직접적으로 관련되기 때문에 그 중요성이 더욱 부각되고 있습니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">ISO 15378 인증의 장점은 아래와 같습니다.</span>
                                                <li>1. 제조 시 오염, 혼합 및 제조 오류와 폐기물을 최소화하고 생산성을 향상시켜 비용을 절감할 수 있습니다.</li>
                                                <li>2. 위험 관리 및 검증에 대한 지침을 제공함으로써 제품의 오염, 혼합 및 오류로 식별된 위험을 완화하고 제품 효능 및 유효기간을 보장할 수 있습니다.</li>
                                                <li>3. ISO 15378:2017 표준에 따라 GMP 요구사항을 준수함으로써 생산 프로세스의 숙련도를 향상시킬 수 있습니다.</li>
                                                <li>4. 품질경영시스템의 요구사항 및 GMP 요구사항을 준수하여 제품을 생산함으로써 고품질의 제품을 보증하고 이것이 고객의 만족도 향상으로 이어질 수 있고, 최적화된 품질경영시스템 요구사항을 구현할 수 있습니다.</li>
                                                <li>5. 조직의 브랜드 및 이미지를 주요 이해 관계자와 함께 향상시키고 조직의 품질 및 안정성을 보장하는데 도움을 줌으로써 브랜드를 보호하는 효과를 가져올 수 있습니다.</li>
                                                <li>6. ISO 15378 심사 프로세스 전반에 걸쳐 조직이 리스크를 식별, 제어 및 관리할 수 있도록 지원함으로써 효율적인 리스크 관리를 할 수 있도록 도와줍니다.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. GIC는 미국의 인정기구인 IAS로부터 ISO 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다.</li>
                                                <li>2. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                                <li>3. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 9001은 물론 환경경영 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li>
                                                <li>4. GIC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                <section id="con5-3" class="roll roll03"><!-- 4depth 컨텐츠 05-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">식품 FDA FSMA</h1>
                        <h2 class="sub_tit2 fc_pointer">식품안전 경영시스템 인증</h2>
                        <p class="sub_txt"><span class="point_b2">FSMA (식품안전현대화법, Food Safety Modernization Act)</span>
                            2011년 01월 04일, 미국정부는 사전예방을 통한 식품공급 안전성 및 국민건강 보호를 목적으로 식품안전현대화법 (Food Safety Modernization Act, FSMA)을 제정하였습니다. 이에 따라 FDA는 FSMA 제정으로 식품안전문제를 예방하는데 초점을 맞출 수 있게 되었습니다. FSMA의 적용대상은 식품이나 사료를 제조, 가공, 포장 또는 보관하는 시설입니다. 또한 생산농가, US 수입업체, 화주업체, 수취업체, 선적업체, 운송업체 등 미국으로 식품을 보내는 업체도 FSMA를 준수해야 합니다. 따라서 업체들은 FSMA에 따라 위해요소 분석에 기반한 예방관리가 포함된 식품안전시스템을 구축하고, 문서화된 식품안전계획서를 작성하는 등의 각종 준비가 필요합니다.
                        </p>
                        <p class="con_img">
                            <img src="./image/FDA_FSMA_01.jpg" alt="세계식품 안전 기구 로고">
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FDA_FSMA_02.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FSMA 제 3자 인증</h3>
                                        <p>
                                            GIC는 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 제 3자 인증기관으로 인정받았습니다.
                                        </p>
                                        <div class="sub_txt">
                                            <span class="point_b2">인정 정보 확인 Click</span>
                                            <a href="https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification" style="color: dodgerblue;text-decoration: underline">
                                                https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification
                                            </a>
                                            <p style="margin-top: 30px">
                                                FSMA에는 ‘공인된 제 3자 인증 프로그램 (Accredited Third-Party Certification Program)’이라는 규정이 있습니다. 본 프로그램은 미국 외 지역에서 생산되어 미국으로 수입되는 식품들의 생산시설들이 FSMA에서 요구하는 규정을 잘 준수하고 있는지 공인된 제 3의 기관이 심사를 하여 요구사항을 충족하는 경우 인증서를 발행하는 프로그램입니다. 이렇게 발행된 인증서는 자발적 적격 수입업자 프로그램 (Voluntary Qualified Importer Program, VQIP)의 참여 자격을 얻는데 사용하거나 미국 소비자들에게 위해가 될 수 있는 식품의 반입을 예방하기 위해 FDA가 인증서를 요구할 경우 사용됩니다.
                                            </p>
                                            <p style="margin-top: 30px"><span class="point_b2">1. VQIP (Voluntary Qualified Importer Program)</span>
                                                FDA가 식품 수입 업체들에게 통관 혜택을 주어 해당 식품을 미국에 신속하게 들여올 수 있도록 하는 프로그램
                                            </p>
                                            <p style="margin-top: 30px"><span class="point_b2">2. 인증절차</span>
                                                인증 신청 ⇒ 계약 체결 ⇒ 심사비 납부 ⇒ 서류 제출 ⇒ 1단계 심사 ⇒ 인증심의 (1단계) ⇒ 2단계 심사 ⇒ 인증 심의 (2단계) ⇒ 인증서 발행 ⇒ 사후심사 ⇒ 재인증 심사
                                            </p>
                                            <p style="margin-top: 30px"><span class="point_b2">3. 제 3자 인증 프로세스</span>
                                                <span class="con_img" style="display: block;margin: 0 auto">
                                                    <img src="./image/FDA_FSMA_04.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플2">
                                                </span>
                                                <span style="display:block;text-align:center;">미국 식품안전현대화법 대응 가이드북</span>
                                            </p>
                                            <p style="margin-top: 30px"><span class="point_b2">4. 공인된 제3자 인증의 면제 대상 ★</span>
                                                - 특정 상황에서 외국 시설에서 제조한 알코올 음료<br>
                                                - 수입시점에서 USDA가 감독하는 특정 육류, 가금류 및 계란제품
                                            </p>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FDA_FSMA_05.jpg" alt="FDA FSMA 제3자 인증 준비사항">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FSMA 제3자 인증 준비사항</h3>
                                        <p>
                                            식품시설은 위해요소 분석과 위해를 기반으로 한 예방관리를 포함하는 식품안전시스템을 구축하고 실행해야 합니다. 또한 식품안전계획서를 반드시 서면으로 작성하고 식품안전계획서는 자격을 갖춘 식품예방관리전문가 (PCQI, Preventive Control Qualified Individual)에 의해 검토되어야 합니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">식품안전시스템에는 다음의 내용을 포함하는 식품안전계획을 설정하여야 합니다.</span>
                                                <li>1. 위해요소 분석</li>
                                                <li>2. 예방관리 (공정, 식품 알레르기 유발물질, 위생, 공급망 및 기타, 회수계획)</li>
                                                <li>3. 예방관리의 감시 및 운영</li>
                                                <li>4. 시정조치 및 시정</li>
                                                <li>5. 검증</li>
                                            </ul>
                                        </div>
                                        <p>
                                            식품안전계획에는 회수계획을 세워 식품안전에 문제가 되는 제품에 대해서는 회수조치 가능하도록 작성해야 합니다. 이에 대응해 GIC는 미국시장에 수출하고 있거나 수출을 계획 중인 식품업체들을 위한 식품예방관리전문가 (PCQI) 교육과정 또한 마련하고 있습니다.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FDA_FSMA_06.jpg" alt="FDA FSMA 제3자 인증 준비사항">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FSMA 제3자 인증의 중요성</h3>
                                        <p>
                                            FSMA는 식품 안전의 중점을 예방에 둠으로써, 미국 및 미국 이외 국가의 식품 제조업자, 시설 및 수입업체에 새로운 사항들을 요구합니다. 따라서 미국 시장에 제품을 판매하고 유통하려면 새로운 요구사항을 준수해야 합니다. 이와 같이 FSMA에 대응해 미국시장에 식품 수출을 원활히 추진하기 위해서는 미국으로 식품을 수출하는 기업들의 세심한 준비가 필요합니다.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. GIC는 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 3자 인증기관으로 인정받았습니다.</li>
                                                <li>2. GIC는 식품 시험소 운영 및 다양한 식품 관련 인증을 진행하고 있기에 식품안전 규정에 관한 광범위한 지식을 보유하고 있습니다.</li>
                                                <li>3. GIC는 고객들을 위해 빠르고 정확한 서비스를 제공하며, 고객이 올바른 선택을 하고 FSMA 준수 서비스를 통해 실사를 입증하도록 도와드립니다.</li>
                                                <li>4. GIC는 FDA FSMA 3자 인증의 선두기관으로서 빠르고 정확한 인증서비스를 제공합니다.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                <section id="con5-4" class="roll roll04"><!-- 4depth 컨텐츠 05-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">식품 Global HACCP</h1>
                        <h2 class="sub_tit2 fc_pointer">식품 안전에 대한 국제 권장 사항</h2>
                        <p class="sub_txt">
                            국제식품규격위원회 (CODEX)에서는 HACCP 적용을 위한 지침을 제시하여 전 세계적으로 이 지침에 의거하여 HACCP을 적용하고 있습니다.<br>
                            HACCP 은 원료 생산, 조달 및 취급에서 완제품 제조 및 유통, 소비에 이르기까지 생물학적, 화학적, 물리적 위험에 대한 분석 및 제어를 통해 식품안전을 다루는 관리 시스템입니다.<br>
                            HACCP 기반 시스템은 1 차 생산을 제외하고는 모든 국가에서 미국과 EU를 포함한 여러 국가에서 법적 요구사항입니다.<br>
                            HACCP 준수를 통해 식품안전에 대한 진정한 의지를 증명하는 것은 브랜드를 변화시키고 효과적인 시장 진출 도구로서의 역할을 수행하여 전세계의 새로운 비즈니스 기회를 열어줍니다.
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Global HACCP_01.jpg" alt="Global HACCP7원칙">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Global HACCP 7원칙</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">국제식품규격위원회 (CODEX)에서는 HACCP 적용을 위한 7원칙 지침을 제시하였다</span>
                                                <li>1. 위해요소분석 실시</li>
                                                <li>2. 중요관리점 결정</li>
                                                <li>3. 한계기준 결정</li>
                                                <li>4. 중요관리점에 대한 모니터링 방법 설정</li>
                                                <li>5. 모니터링 결과 중요관리점 관리 상태 위반시 개선조치 설정</li>
                                                <li>6. HACCP가 효과적으로 시행되는지 검증</li>
                                                <li>7. HACCP원칙 및 적용에 대한 문서화 및 기록 방법 설정</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Global HACCP_02.jpg" alt="HACCP의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">HACCP의 중요성</h3>
                                        <p>
                                            국제식품규격위원회 (CODEX)가 개발한 위해요소중점관리기준(HACCP) 시스템의 원칙은 ISO 22000, FSSC 22000, FSMA 등 많은 인증 스킴의 기반이 되고 있습니다. 이 지침은 프로세스 형태 및 사용시설과 관련될 수 있는 위해요소를 포함하여, 식품사슬에서 발생할 것이 예측되는 모든 위해요소를 파악하고 평가하도록 요구하고 있습니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">Global HACCP를 통하여 조직은 다음과 같은 효과를 기대할 수 있습니다.</span>
                                                <li>1. 구축과정에서의 효과적인 식품안전 경영 시스템 관리수단의 확립 및 위험 최소화</li>
                                                <li>2. 고객 신뢰성 확보</li>
                                                <li>3. 종업원의 책임의식 향상</li>
                                                <li>4. 비즈니스의 지속 가능성 향상</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Global HACCP_03.jpg" alt="GIC의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <p>
                                            GIC는 풍부한 경험과 전문지식을 보유한 다수의 숙달된 심사원을 보유하고 있습니다.<br>
                                            GIC는 ISO 22000, FSSC 22000 및 EAC인증과 FSVP, PCQI 전문가 양성 과정을 통한 추가지원으로 귀사의 성장을 위해 필요한 과정을 빠르고 정확하게 지원합니다.
                                        </p>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                </div><!----div class="slider" 종료-------->
            </div>
        </article><!--+++++ 컨텐츠 05 종료 +++++--> 
   
        <article><!--+++++ 컨텐츠 06 시작 +++++--> 
             <div class="page_title">
                <h1 class="sub_tit">에너지 ISO 50001</h1>
                <h2 class="sub_tit2 fc_pointer">에너지 경영시스템 인증</h2>
                <p class="sub_txt">
                    이 표준의 목적은 조직이 에너지 효율, 이용 및 사용량을 포함한 에너지 성과를 개선하기 위하여 필요한 시스템과 프로세스를 수립할 수 있도록 하는 것입니다. 체계적인 에너지 관리를 통하여 온실가스 배출량, 에너지 비용 및 그 밖의 관련된 환경영향을 저감시킬 수 있습니다. 이 표준은 지역적, 문화적, 사회적 조건에 무관하게 모든 종류 및 규모의 조직에 적용될 수 있습니다. 성공적인 실행을 위해서는 고객 조직의 모든 부서와 기능, 특히 최고경영자의 의지가 중요합니다.<br><br>
                    조직은 이 요구사항을 바탕으로 에너지방침을 개발하고 실행할 수 있으며, 중요에너지 이용과 관련된 법적 요구사항 및 정보를 고려한 목표, 세부목표 및 실행계획을 수립할 수 있습니다. EnMS(Energy Management Systems)는 조직이 조직의 방침 의지를 달성하고, 에너지성과 개선에 필요한 활동을 하고 이 표준의 요구사항에 그 시스템의 적합성을 실증하는 것을 가능하게 합니다. 이 표준은 조직의 관리하에 있는 활동들에 대하여 적용되며, 이 표준의 적용은 시스템 복잡성, 문서화 정도 및 자원을 포함하는 조직의 특정 요구사항에 맞도록 조정될 수 있습니다.
                </p>
            </div>
            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_50001_09.jpg" alt="ISO 50001:2011 요구사항">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 50001:2011 요구사항</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 적용범위</li>
                                        <li>2. 인용표준</li>
                                        <li>3. 용어와 정의</li>
                                        <li>4. 조직의 환경</li>
                                        <li>5. 리더십</li>
                                        <li>6. 계획</li>
                                        <li>7. 지원</li>
                                        <li>8. 운영</li>
                                        <li>9. 성과 평가</li>
                                        <li>10. 개선</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_50001_01.jpg" alt="ISO 5001의 목적">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 50001의 중요성</h3>
                                <div class="con_txt">
                                    <ul><span class="point_b2">ISO 50001 인증 취득을 통해 조직은 다음과 같은 혜택을 얻을 수 있습니다.</span>
                                        <li>1. 조직이 에너지 효율성, 에너지 사용과 소비를 개선</li>
                                        <li>2. 에너지 자원의 관리에 있어 보다 투명하고 효과적인 의사소통</li>
                                        <li>3. 에너지 관리의 우수사례가 확산되도록 촉진</li>
                                        <li>4. 시설에 대한 새로운 에너지 효율성 기술을 적용하기 위한 평가 및 우선순위 검토를 지원</li>
                                        <li>5. 공급망 내의 에너지 효율성을 높이기 위한 프레임워크를 제공</li>
                                        <li>6. 온실가스 배출 저금 프로젝트에 대한 에너지 관리 개선을 실행</li><br>
                                        <span>
                                            이 표준의 국제적인 활용은 가용 에너지원의 보다 효율적인 이용, 경쟁력 향상, 온실가스 배출량 및 그 밖의 환경영향의 저감에 기여합니다. 이 표준은 사용되는 에너지의 종류에 무관하게 적용될 수 있다는 장점이 있습니다.<br><br>
                                        </span>
                                        <span>
                                            이는, 에너지의 효율적인 활용을 통하여 조직의 경제적 이익에도 기여할 뿐만 아니라 세계적인 화두로 급부상하고 있는 환경문제에 대하여 긍정적인 영향을 끼칠 수 있습니다.
                                        </span>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                </ul>
            </div>
            <strong class="con_arrow">
                <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
            </strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 06 종료 +++++--> 

 
<!--==============================================================================================================================================================-->
                   
       

        <article><!--+++++ 컨텐츠 07 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO/IEC 27001</a></li>
                    <li><a data-slide-index="1">ISO/IEC 27701</a></li>
                    <li><a data-slide-index="2">ISO/IEC 20001-1</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con7-1" class="roll roll01 on"><!-- 4depth 컨텐츠 07-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">정보 보안 ISO/IEC 27001</h1>
                        <h2 class="sub_tit2 fc_pointer">개인 정보 보안 경영시스템 인증</h2>
                        <p class="sub_txt">
                            ISO/IEC 27001은 국제표준화기구 (ISO: International Organization for Standardization) 및 국제 전기기술 위원회 (IEC: International Electrotechnical Commission)에서 제정한 정보보호 관리체계에 대한 국제 표준이자 정보보호 분야에서 가장 권위 있는 국제 인증표준으로, 정보보호 정책, 물리적 보안, 정보 접근 통제 등 정보 보안 관련 11개 영역, 133개 항목을 다루고 있습니다.
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC 27001_02.jpg" alt="ISO/IEC 27001 구조">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27001:2013 요구 사항</h3>
                                        <p>
                                            ISO/IEC 27001은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가, 개선의 10가지 항목과 14가지의 통제항목 (통제 항목은 ISO/IEC 27002를 참조)으로 구성되어 있습니다. 이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 적용범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어와 정의</li>
                                                <li>4. 조직 상황</li>
                                                <li>5. 리더십</li>
                                                <li>6. 기획</li>
                                                <li>7. 지원</li>
                                                <li>8. 운용</li>
                                                <li>9. 성과 평가</li>
                                                <li>10. 개선</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC 27001_01.jpg" alt="ISO/IEC 27001 구조">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27001의 중요성</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">ISO/IEC 27001 인증 취득을 통해 조직은 다음과 같은 혜택을 얻을 수 있습니다.<br><br></span>
                                                <li><span class="point_b2">1. 고객 만족</span>
                                                    고객 정보를 안전하게 보호함으로써 고객만족 도모<br><br>
                                                </li>
                                                <li><span class="point_b2">2. 비즈니스 연속성</span>
                                                    리스크 관리, 법규 준수 및 미래 보안 이슈 및 우려사항에 대한 경계를 통해 사업의 안정성 확보<br><br>
                                                </li>
                                                <li><span class="point_b2">3. 법규 준수</span>
                                                    법적/규제적 요구 사항이 어떻게 귀사 및 고객에 영향을 끼치며, 법적 제재에 따른 리스크를 감소시키는 방법 이해<br><br>
                                                </li>
                                                <li><span class="point_b2">4. 리스크 관리 증대</span>
                                                    고객 기록, 회계 정보 및 지적재산권이 체계적인 프레임워크를 통해 손실, 절도 및 손상으로부터 보호됨을 보장<br><br>
                                                </li>
                                                <li><span class="point_b2">5. 증명된 사업 신뢰도</span>
                                                    인정된 글로벌 산업 규격에 대한 독립적 검증으로 신뢰성 확보<br><br>
                                                </li>
                                                <li><span class="point_b2">6. 사업 확대</span>
                                                    고객은 종종 납품 조건으로 인증서를 요구하기 때문에 인증을 통한 사업 확대 가능
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
                                        <img src="./image/ISO_IEC 27001_04.jpg" alt="ISO/IEC 27001 GIC인증원의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <div class="con_txt">
                                            <ul>
                                                GIC는 정보 보안을 포함하여 다양한 산업 분야의 품질경영시스템에 대한 인증활동에 많은 지식과 풍부한 경험을 보유하고 있습니다.<br><br>
                                                여러 국제 표준에서 요구되는 IT 시험 및 인증을 종합적으로 수행한 노하우를 바탕으로 빠르고 정확한 인증 서비스를 제공합니다.
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                <section id="con7-2" class="roll roll02"><!-- 4depth 컨텐츠 07-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">정보보안 ISO/IEC 27701</h1>
                        <h2 class="sub_tit2 fc_pointer">개인 정보 경영시스템 인증</h2>
                        <p class="sub_txt">
                            데이터 수집 및 처리가 현저하게 늘어나는 가운데 개인 정보 위협을 줄이기 위해 데이터를 관리하고 처리해야 하는 방법에 대한 요구가 더욱 증가하고 있습니다.<br><br>
                            이는 국제 표준인 ISO/IEC 27701 표준의 제정의 배경이 되었습니다.<br><br>
                            ISO/IEC 27701은 ISO/IEC 27001 및 ISO/IEC 27002의 확장 형태로서 조직의 프라이버시 관리를 위해 PIMS(Privacy Information Management System)를 수립, 구현, 유지관리 및 지속적으로 개선하기 위한 요구 사항 및 지침을 제공합니다.<br><br>
                            또한 개인식별정보(PII, Personally Identifiable Information) 처리에 대한 책임과 책임을 갖는 PII 컨트롤러와 PII 프로세서에 대한 지침을 제공합니다.<br><br>
                            ISO/IEC 27701은 ISO/IEC 27001을 기반으로 한 Information Security Management System (ISMS) 내에서 PII를 처리하는 PII 컨트롤러 또는 PII 프로세서를 포함하는 공공 및 민간 기업, 정부 기관 및 비영리 조직을 포함한 모든 유형의 조직과 규모에 적용될 수 있습니다.
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC 27701_02.jpg" alt="ISO/IEC 27701:2019 표준">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27701:2019 표준</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어, 정의, 약어</li>
                                                <li>4. 일반사항</li>
                                                <li>5. ISO/IEC 27001과 관련된 PIMS 고유의 요규사항</li>
                                                <li>6. ISO/IEC 27002와 관련된 PIMS 고유 지침</li>
                                                <li>7. PII 컨트롤러에 대한 추가 ISO/IEC 27002 지침</li>
                                                <li>8. PII 프로세서에 대한 추가 ISO/IEC 27002 지침</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC 27701_03.jpg" alt="ISO/IEC 27701의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27701의 중요성</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 개인 정보 관리 능력에 대한 신뢰를 구축</li>
                                                <li>2. 조직 내 역할과 책임의 명확화</li>
                                                <li>3. 내부 역량 향상 및 프로세스 개선을 통한 위반 방지</li>
                                                <li>4. 프라이버시 관리를 위한 확립된 통제 및 투명성 제공</li>
                                                <li>5. 비즈니스 파트너와의 합의를 촉진</li>
                                                <li>6. 선도적인 정보보안 표준 ISO/IEC 27001과 쉽게 통합 가능</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC 27701_04.jpg" alt="ISO/IEC 27701의 기대효과">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27701의 기대효과</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 범용 운영 제어 집합을 사용하여 여러 규제 요구 사항을 조정하여 일관되고 효율적인 구현을 가능하게 합니다.</li>
                                                <li>2. PIMS는 여러 규정 요구 사항에 대해 평가함으로써 인증 심사에 소모되는 비용을 절감할 수 있습니다.</li>
                                                <li>3. 대부분의 조직들이 전 세계에 걸쳐 퍼져 있기 때문에 ISO 국제 표준을 사용하여 규정 준수를 관리하는 것이 좋습니다.</li><br>
                                                <span>
                                                    이러한 규정 준수에 대한 의존도로 인해 표준에 대한 인증의 중요성은 높아집니다.<br>
                                                    특히 많은 양의 중요한 데이터 처리가 관련된 경우에는 파트너 및 공급업체로부터 이익을 얻을 수 있습니다.
                                                </span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 풍부한 경험을 통해 인정된 경영시스템 인증을 제공하는 GIC는 정보 보안을 포함하여 다양한 산업 분야의 품질경영시스템에 대한 인증활동에 많은 지식과 풍부한 경험을 보유하고 있습니다.</li>
                                                <li>2. 여러 국제 표준에서 요구되는 IT 시험 및 인증을 종합적으로 수행한 노하우를 바탕으로 빠르고 정확한 인증 서비스를 제공합니다.</li>
                                                <li>3. ISO 9001: 품질경영시스템, ISO/IEC 20000-1: 서비스경영시스템, ISO/IEC 27001: 정보보호 경영시스템의 관련 서비스와 연계하여 조직의 효과적인 시스템을 구현할 수 있는 서비스를 제공합니다.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                <section id="con7-3" class="roll roll03"><!-- 4depth 컨텐츠 07-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">정보보안 ISO/IEC 20000-1</h1>
                        <h2 class="sub_tit2 fc_pointer">IT서비스경영시스템 인증</h2>
                        <p class="sub_txt">
                            Service Management System(SMS)는 조직이 수행하는 IT서비스의 설계, 계획, 제공, 운영 및 제어하기 위해 수행되는 활동에 적용됩니다. ISO/IEC 20000-1은 이러한 유형에 적용되는 최초의 국제 표준이며, 2005년 제정되어 2011년과 2018년 2번의 개정을 거쳐왔습니다.<br>
                            ISO/IEC 20000-1은 서비스 요구 사항을 충족하고 가치를 제공하기 위한 서비스 계획, 디자인, 전환, 제공 및 개선이 포함됩니다.
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso20000-1_1.jpg" alt="ISO IEC 20000-1 표준구조">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 20000-1:2018 요구 사항</h3>
                                        <p>
                                            ISO/IEC 20000-1은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가 및 개선의 10가지 항목으로 구성되어 있습니다.<br><br>
                                            가이드 문서는 ISO/IEC 20000-3을, 모범사례는 ISO/IEC 20000-5를 참조하십시오.<br><br>
                                            이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 서비스를 제공하는 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 적용범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어와 정의</li>
                                                <li>4. 조직 상황</li>
                                                <li>5. 리더십</li>
                                                <li>6. 기획</li>
                                                <li>7. 서비스경영시스템의 지원</li>
                                                <li>8. 서비스경영시스템의 운용</li>
                                                <li>9. 성과 평가</li>
                                                <li>10. 개선</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso20000-1_2.jpg" alt="ISO/IEC 20000-1의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 20000-1의 중요성</h3>
                                        <p>
                                            조직은 ISO/IEC 20000-1 인증을 통하여 다음과 같은 효과를 얻을 수 있습니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>a) 서비스 품질 향상</li>
                                                <li>b) 일관된 서비스 품질 수준 유지</li>
                                                <li>c) 서비스의 기획, 설계, 전환, 전달 및 개선에 대한 능력을 입증</li>
                                                <li>d) SMS 및 서비스의 모니터링, 측정 및 검토</li>
                                                <li>e) 서비스 상품화, 서비스 통합, 업체별 공급업체 관리, 고객의 서비스 가치결정</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    GIC의 심사원은 부문별 IT 경험과 기술적 자격을 갖춘 전문가로서 ISO/IEC 20000-1 경영시스템의 구현 및 효과에 대한 철저하고 정직한 심사를 제공합니다.<br><br>
                                                    또한 귀사의 비즈니스 요구에 부합하는 지식과 역량을 갖추고 있으므로 경영시스템의 효과적이고 철저한 심사를 제공합니다.
                                                </li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 07 종료 +++++--> 
        
    
<!--==================================================================================================-->
        
        <article><!--+++++ 컨텐츠 08 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 37001</a></li>
                    <li><a data-slide-index="1">ISO 37301</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <section style="display:block" id="con8-1" class="roll roll01 on"><!-- 4depth 컨텐츠 08-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">부패 방지 ISO 37001</h1>
                        <h2 class="sub_tit2 fc_pointer">부패 방지 경영시스템 인증</h2>
                        <p class="sub_txt">
                            부패 방지 경영 시스템 (Anti-bribery management system)은 국제표준화기구 (ISO, International Organization for Standardization)가 2016년 10월에 발표한 국제 표준으로 부패 방지를 위해 각국 기업이 실행해야 하는 구체적인 실행방안을 담고 있습니다.<br><br>
                            조직의 활동 전 부문에서 발생할 수 있는 부패 방지를 위한 요구 사항으로 부패 방지 관리 시스템의 수립을 통해 전 세계적으로 부패에 대한 긍정적인 인식을 이끌어 나갈 수 있으며 이해관계자들 간의 법규 위반 리스크를 감소하여 신뢰를 증대시킬 수 있는 효과를 기대할 수 있습니다.
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO15378-2017_000.jpg" alt="ISO 37001:2016 요구 사항">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 37001:2016 요구 사항</h3>
                                        <p>
                                            ISO 37001:2016은 ISO 9001:2015 등 표준에 적용되는 High Level Structure가 적용되어, 다른 표준과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 적용범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어와 정의</li>
                                                <li>4. 조직 상황</li>
                                                <li>5. 리더십</li>
                                                <li>6. 기획</li>
                                                <li>7. 지원</li>
                                                <li>8. 운용</li>
                                                <li>9. 성과 평가</li>
                                                <li>10. 개선</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_37001_02.jpg" alt="ISO 37001의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 37001의 중요성</h3>
                                        <p class="sub_txt">
                                            국제 반부패회의 (International Anti-Corruption Conference)는 반부패 경험과 정보의 교환, 국제적 협력 필요성 증대에 따라 1983년 워싱턴에서 처음 개최한 이래 격년제로 개최하고 있습니다. 세계에서 가장 큰 규모의 국제 반부패 회의로서 2020년 제19차 회의를 한국에서 개최할 예정입니다.<br><br>
                                            이를 기점으로 국내 정부, 공공 기관 및 다양한 산업분야에 부패 방지, 컴플라이언스, 사회적 책임 등의 인증 수요가 증가할 것으로 보입니다.
                                        </p>
                                        <h3 class="point_b1">ISO 기대효과</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    1. 개인 및 조직 차원에서 뇌물수수로 인한 법규 위반 등에 따른 리스크 감소
                                                </li>
                                                <li>
                                                    2. 조직 및 사업 활동에 대한 고객으로부터의 신뢰 증대
                                                </li>
                                                <li>
                                                    3. 파트너십 관계에 있는 조직 및 기관으로부터의 신뢰를 바탕으로 협력관계 향상
                                                </li>
                                                <li>
                                                    4. 직원 및 협력회사에 부패방지 인식 공유
                                                </li>
                                                <li>
                                                    5. 공공기관을 포함한 다양한 입찰에서 강화되는 부패방지 시스템 충족
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
                                        <img src="./image/iso_37001_03.jpg" alt="GIC인증원의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                                <li>2. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 37001은 물론 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li>
                                                <li>3. GIC는 전 세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                <section id="con8-2" class="roll roll02"><!-- 4depth 컨텐츠 08-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">부패 방지 ISO 37301</h1>
                        <h2 class="sub_tit2 fc_pointer">부패 방지 경영시스템 인증</h2>
                        <p class="sub_txt">
                            부패 방지 경영 시스템 (Anti-bribery management system)은 국제표준화기구 (ISO, International Organization for Standardization)가 2016년 10월에 발표한 국제 표준으로 부패 방지를 위해 각국 기업이 실행해야 하는 구체적인 실행방안을 담고 있습니다.<br><br>
                            조직의 활동 전 부문에서 발생할 수 있는 부패 방지를 위한 요구 사항으로 부패 방지 관리 시스템의 수립을 통해 전 세계적으로 부패에 대한 긍정적인 인식을 이끌어 나갈 수 있으며 이해관계자들 간의 법규 위반 리스크를 감소하여 신뢰를 증대시킬 수 있는 효과를 기대할 수 있습니다.
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO15378-2017_000.jpg" alt="ISO 37001:2016 요구 사항">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 37001:2016 요구 사항</h3>
                                        <p>
                                            ISO 37001:2016은 ISO 9001:2015 등 표준에 적용되는 High Level Structure가 적용되어, 다른 표준과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 적용범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어와 정의</li>
                                                <li>4. 조직 상황</li>
                                                <li>5. 리더십</li>
                                                <li>6. 기획</li>
                                                <li>7. 지원</li>
                                                <li>8. 운용</li>
                                                <li>9. 성과 평가</li>
                                                <li>10. 개선</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_37001_02.jpg" alt="ISO 37001의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 37001의 중요성</h3>
                                        <p class="sub_txt">
                                            국제 반부패회의 (International Anti-Corruption Conference)는 반부패 경험과 정보의 교환, 국제적 협력 필요성 증대에 따라 1983년 워싱턴에서 처음 개최한 이래 격년제로 개최하고 있습니다. 세계에서 가장 큰 규모의 국제 반부패 회의로서 2020년 제19차 회의를 한국에서 개최할 예정입니다.<br><br>
                                            이를 기점으로 국내 정부, 공공 기관 및 다양한 산업분야에 부패 방지, 컴플라이언스, 사회적 책임 등의 인증 수요가 증가할 것으로 보입니다.
                                        </p>
                                        <h3 class="point_b1">ISO 기대효과</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    1. 개인 및 조직 차원에서 뇌물수수로 인한 법규 위반 등에 따른 리스크 감소
                                                </li>
                                                <li>
                                                    2. 조직 및 사업 활동에 대한 고객으로부터의 신뢰 증대
                                                </li>
                                                <li>
                                                    3. 파트너십 관계에 있는 조직 및 기관으로부터의 신뢰를 바탕으로 협력관계 향상
                                                </li>
                                                <li>
                                                    4. 직원 및 협력회사에 부패방지 인식 공유
                                                </li>
                                                <li>
                                                    5. 공공기관을 포함한 다양한 입찰에서 강화되는 부패방지 시스템 충족
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
                                        <img src="./image/iso_37001_03.jpg" alt="GIC인증원의 역량">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC 인증원의 역량</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                                <li>2. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 37001은 물론 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li>
                                                <li>3. GIC는 전 세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
            </div>
        </article><!--+++++ 컨텐츠 08 종료 +++++-->  
         
        
<!--=================================================================================================================== -->
        

        <article><!--+++++ 컨텐츠 09 시작 +++++--> 
            <div class="page_title">
                <h1 class="sub_tit">교육 ISO 21001</h1>
                <h2 class="sub_tit2 fc_pointer">교육기관 경영시스템 인증</h2>
                <p class="sub_txt">
                    ISO 21001은 모든 교육, 학습 또는 연구를 통해 역량 개발을 지원하는 조직에 적용할 수 있도록 고안되었습니다. 교육용 제품을 생산하거나 제조하는 조직은 ISO 21001이 적용되지 않습니다.<br><br>
                    ISO 21001은 EOMS (Educational Organization Managements System)에 대한 요구 사항을 규정합니다. 조직은 학습자에게 지속적으로 지식을 제공, 공유 및 촉진하는 능력을 갖추어야 하며, 시스템 개선 프로세스를 포함하여 EOMS를 효과적으로 적용하여 학습자, 다른 고객 및 직원의 만족도를 높이는 것을 목표로 하여야 합니다.
                </p>
            </div>
            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_21001_01.jpg" alt="iso 21001 표준구조">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 21001:2018 요구사항</h3>
                                <p>
                                    ISO/IEC 20000-1은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가 및 개선의 10가지 항목으로 구성되어 있습니다. (인증 가이드는 ISO/IEC 20000-3을, 모범사례는 ISO/IEC 20000-5를 참조하십시오.)<br><br>
                                    이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 서비스를 제공하는 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 적용범위</li>
                                        <li>2. 인용표준</li>
                                        <li>3. 용어와 정의</li>
                                        <li>4. 조직 상황</li>
                                        <li>5. 리더십</li>
                                        <li>6. 기획</li>
                                        <li>7. 서비스경영시스템의 지원</li>
                                        <li>8. 서비스경영시스템의 운용</li>
                                        <li>9. 성과평가</li>
                                        <li>10. 개선</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_21001_02.jpg" alt="iso 21001 인증 효과">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 21001의 중요성</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 방침(미션 및 비전 포함)과 목표 및 활동의 연계 향상</li>
                                        <li>2. 모든 사람에게 포용적이고 공평한 양질의 교육을 제공함으로써 사회적 책임 강화</li>
                                        <li>3. 모든 학습자, 특히 특수 교육 요구, 원격 학습자 및 평생 학습 기회가 있는 학습자에 대한 개인화 된 학습 및 효과적인 대응</li>
                                        <li>4. 효과 및 효율성을 입증하고 증가시키기 위한 일관된 프로세스 및 평가 도구</li>
                                        <li>5. 조직의 신뢰성 증가</li>
                                        <li>6. 교육 기관이 효과적인 교육 관리 관행에 대한 헌신을 보여줄 수 있는 수단</li>
                                        <li>7. 국제적 틀 내에서 지역, 국가, 공개, 독점 및 기타 표준의 조화</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC 인증원의 역량</h3>
                                <div class="con_txt">
                                    <ul>
                                        GIC의 심사원은 교육과 관련 기술적 자격을 갖춘 전문가로서 ISO 21001 경영시스템의 구현 및 효과에 대한 철저하고 정직한 심사를 제공합니다. 또한 귀사의 비즈니스 요구에 부합하는 지식과 역량을 갖추고 있으며 효과적이고 철저한 심사를 제공합니다.
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                </ul>
            </div>
            <strong class="con_arrow">
                <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
            </strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 09 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        <article><!--+++++ 컨텐츠 10 시작 +++++--> 
            <div class="page_title">
                <h1 class="sub_tit">사업연속성 ISO 22301</h1>
                <h2 class="sub_tit2 fc_pointer">비즈니스연속성 경영시스템 인증</h2>
                <p class="sub_txt">
                    ISO 22301은 비즈니스 연속성 관리 시스템으로, 시장의 위험뿐만 아니라 도난, 자연재해, 질병 등 중단적 사고가 발생했을 때 조직이 이에 대한 방어, 발생 가능성의 감축, 대비, 대응 및 복구를 위해 문서화된 경영시스템을 수립하고 이 시스템을 실행, 운영, 모니터링 및 지속적인 개선활동을 하기위한 요구사항을 규정하고 있습니다.<br><br>
                    비즈니스 연속성 관리 시스템은 모든 산업 분야 및 활동에 적용할 수 있으며 조직의 각종 위협에 대한 영향을 파악하고, 효과적인 대응능력 및 조직 회복 능력을 구축하는 프레임워크를 제공합니다. 이 표준은 영업 중단 이후의 비즈니스 운영을 지속하기 위한 비즈니스 연속성의 지침을 제공하며, 중단 시 제품 및 서비스가 즉시 제공되고 복구될 수 있도록 보장하여 제품 및 서비스에 미치는 영향을 최소화하고자 합니다.<br><br>
                    2012년 발행되었던 ISO 22301:2012는 2019년 10월 31일부로 ISO 22301:2019로 개정되었으며 2022년 10월까지 3년간의 전환 유예 기간을 거칩니다. 2021년 5월 1일부터 모든 비즈니스 연속성 관리 시스템 심사는 ISO 22301:2019 버전을 적용합니다. 2012 버전은 2021년 4월 30일까지만 심사 수행이 가능합니다.
                </p>
            </div>
            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_22301_01.jpg" alt="ISO 22301 요구사항">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 22301:2019 요구사항</h3>
                                <p>
                                    이 국제규격은 조직의 존재에 중요한 영향을 끼치는 제품과 서비스를 식별하고 중단이 발생할 경우에 필요한 대응이 무엇인지 수립하는 데 도움을 줍니다. 또한, 사업 중단의 경우도 적절하게 대응할 수 있는 기능도 제공합니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 적용범위</li>
                                        <li>2. 인용표준</li>
                                        <li>3. 용어와 정의</li>
                                        <li>4. 조직 상황</li>
                                        <li>5. 리더십</li>
                                        <li>6. 기획</li>
                                        <li>7. 지원</li>
                                        <li>8. 운용</li>
                                        <li>9. 성과평가</li>
                                        <li>10. 개선</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_22301_02.jpg" alt="ISO 22301의 중요성">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 22301의 중요성</h3>
                                <p>
                                    ISO 22301은 위험하거나 복잡한 환경에서 운영되거나 빠른 일 처리를 할 수 있는 능력이 중점적인 글로벌 기업에 적합합니다.<br>
                                    이 규격의 목표는 다음 사항을 포함하는 광범위한 범위의 잠재적인 위협 및 중단을 보호하는 데 있습니다.

                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 기술 실패</li>
                                        <li>2. 주요 자원의 갑작스러운 손실</li>
                                        <li>3. 자연 재난</li>
                                        <li>4. 테러 공격</li>
                                        <li>5. 기타 긴급 상황</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_22301_03.jpg" alt="ISO 22301 기대효과">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 22301 기대효과</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li><span class="point_b2">1. 고객 만족</span>
                                            고객에게 귀사의 서비스는 신뢰할 수 있고 항상 의지할 수 있다는 고객의 신뢰를 제공합니다.
                                        </li>
                                        <li><span class="point_b2">2. 비즈니스 탄력성</span>
                                            위기, 비상대비 및 비상계획에 대한 효율적인 관리로 다운타임과 재정적 손실을 피할 수 있습니다.
                                        </li>
                                        <li><span class="point_b2">3. 법규 준수</span>
                                            법적/규제적 요구사항이 귀사와 고객사들에게 끼치는 영향을 이해할 수 있습니다.
                                        </li>
                                        <li><span class="point_b2">4. 향상된 리스크 관리</span>
                                            위험 관리 및 위기 상황에서 빠르게 회복하며 귀하의 평판을 보호할 수 있습니다.
                                        </li>
                                        <li><span class="point_b2">5. 사업 자격 증명 입증</span>
                                            인증받은 사업 군에 대한 독립적인 검증은 귀하의 브랜드를 향상시킵니다.
                                        </li>
                                        <li><span class="point_b2">6.  더 많은 사업 조달 능력</span>
                                            조달 사양은 종종 공급 조건으로 인증이 필요하므로, 인증 획득과 함께 문이 열립니다.
                                        </li>
                                        <li><span class="point_b2">7. 국제 인정</span>
                                            귀하는 전 세계적으로 인정받고 평가될 것입니다.
                                        </li>
                                        <li><span class="point_b2">8. KS A ISO 22301 국내인증 취득을 통한 국제공신력 확보 및 대내외 이미지 제고</span>
                                        </li>
                                        <li><span class="point_b2">9. BCMS 체계 구축으로 선도적인 재난안전관리 체계 및 문화정착 확산</span>
                                        </li>
                                        <li><span class="point_b2">10. 주주가치보호 및 이해관계자의 기대충족으로 기업 가치 상승</span>
                                        </li>
                                        <li><span class="point_b2">11. 향후 인증을 통한 초기시장 선점 및 저변 확대</span>
                                        </li>
                                        <li><span class="point_b2">12. 재난 발생 시 효율적 대응 능력 확보</span>
                                        </li>
                                        <li><span class="point_b2">13. 재난으로부터 조직의 경영체계 연속성 확보</span>
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
                                <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC 인증원의 역량</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>
                                            1. GIC는 비즈니스 연속성 관리 시스템에 대한 인증 서비스를 제공하고 있습니다.</li><li>2. 여러 국제 표준에서 요구되는 IT 시험 및 인증을 종합적으로 수행한 노하우를 바탕으로 빠르고 정확한 인증 서비스를 제공합니다.
                                        </li>
                                        <li>2. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                        <li>3. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 미국의 인정기구인 IAS로부터 다양한 규격에 대해 인정받아 인증 서비스를 제공하고 있습니다.</li>
                                        <li>
                                            4. GIC는 전 세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다
                                        </li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                </ul>
            </div>
            <strong class="con_arrow">
                <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
            </strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 10 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        <article><!--+++++ 컨텐츠 11 시작 +++++--> 
            <div class="page_title">
                <h1 class="sub_tit">이벤트 지속성 ISO 22301</h1>
                <h2 class="sub_tit2 fc_pointer">이벤트 지속성 인증</h2>
                <p class="sub_txt">
                    ISO 22301은 비즈니스 연속성 관리 시스템으로, 시장의 위험뿐만 아니라 도난, 자연재해, 질병 등 중단적 사고가 발생했을 때 조직이 이에 대한 방어, 발생 가능성의 감축, 대비, 대응 및 복구를 위해 문서화된 경영시스템을 수립하고 이 시스템을 실행, 운영, 모니터링 및 지속적인 개선활동을 하기위한 요구사항을 규정하고 있습니다.<br><br>
                    비즈니스 연속성 관리 시스템은 모든 산업 분야 및 활동에 적용할 수 있으며 조직의 각종 위협에 대한 영향을 파악하고, 효과적인 대응능력 및 조직 회복 능력을 구축하는 프레임워크를 제공합니다. 이 표준은 영업 중단 이후의 비즈니스 운영을 지속하기 위한 비즈니스 연속성의 지침을 제공하며, 중단 시 제품 및 서비스가 즉시 제공되고 복구될 수 있도록 보장하여 제품 및 서비스에 미치는 영향을 최소화하고자 합니다.<br><br>
                    2012년 발행되었던 ISO 22301:2012는 2019년 10월 31일부로 ISO 22301:2019로 개정되었으며 2022년 10월까지 3년간의 전환 유예 기간을 거칩니다. 2021년 5월 1일부터 모든 비즈니스 연속성 관리 시스템 심사는 ISO 22301:2019 버전을 적용합니다. 2012 버전은 2021년 4월 30일까지만 심사 수행이 가능합니다.
                </p>
            </div>
            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_22301_01.jpg" alt="ISO 22301 요구사항">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 22301:2019 요구사항</h3>
                                <p>
                                    이 국제규격은 조직의 존재에 중요한 영향을 끼치는 제품과 서비스를 식별하고 중단이 발생할 경우에 필요한 대응이 무엇인지 수립하는 데 도움을 줍니다. 또한, 사업 중단의 경우도 적절하게 대응할 수 있는 기능도 제공합니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 적용범위</li>
                                        <li>2. 인용표준</li>
                                        <li>3. 용어와 정의</li>
                                        <li>4. 조직 상황</li>
                                        <li>5. 리더십</li>
                                        <li>6. 기획</li>
                                        <li>7. 지원</li>
                                        <li>8. 운용</li>
                                        <li>9. 성과평가</li>
                                        <li>10. 개선</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_22301_02.jpg" alt="ISO 22301의 중요성">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 22301의 중요성</h3>
                                <p>
                                    ISO 22301은 위험하거나 복잡한 환경에서 운영되거나 빠른 일 처리를 할 수 있는 능력이 중점적인 글로벌 기업에 적합합니다.<br>
                                    이 규격의 목표는 다음 사항을 포함하는 광범위한 범위의 잠재적인 위협 및 중단을 보호하는 데 있습니다.

                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 기술 실패</li>
                                        <li>2. 주요 자원의 갑작스러운 손실</li>
                                        <li>3. 자연 재난</li>
                                        <li>4. 테러 공격</li>
                                        <li>5. 기타 긴급 상황</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_22301_03.jpg" alt="ISO 22301 기대효과">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 22301 기대효과</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li><span class="point_b2">1. 고객 만족</span>
                                            고객에게 귀사의 서비스는 신뢰할 수 있고 항상 의지할 수 있다는 고객의 신뢰를 제공합니다.
                                        </li>
                                        <li><span class="point_b2">2. 비즈니스 탄력성</span>
                                            위기, 비상대비 및 비상계획에 대한 효율적인 관리로 다운타임과 재정적 손실을 피할 수 있습니다.
                                        </li>
                                        <li><span class="point_b2">3. 법규 준수</span>
                                            법적/규제적 요구사항이 귀사와 고객사들에게 끼치는 영향을 이해할 수 있습니다.
                                        </li>
                                        <li><span class="point_b2">4. 향상된 리스크 관리</span>
                                            위험 관리 및 위기 상황에서 빠르게 회복하며 귀하의 평판을 보호할 수 있습니다.
                                        </li>
                                        <li><span class="point_b2">5. 사업 자격 증명 입증</span>
                                            인증받은 사업 군에 대한 독립적인 검증은 귀하의 브랜드를 향상시킵니다.
                                        </li>
                                        <li><span class="point_b2">6.  더 많은 사업 조달 능력</span>
                                            조달 사양은 종종 공급 조건으로 인증이 필요하므로, 인증 획득과 함께 문이 열립니다.
                                        </li>
                                        <li><span class="point_b2">7. 국제 인정</span>
                                            귀하는 전 세계적으로 인정받고 평가될 것입니다.
                                        </li>
                                        <li><span class="point_b2">8. KS A ISO 22301 국내인증 취득을 통한 국제공신력 확보 및 대내외 이미지 제고</span>
                                        </li>
                                        <li><span class="point_b2">9. BCMS 체계 구축으로 선도적인 재난안전관리 체계 및 문화정착 확산</span>
                                        </li>
                                        <li><span class="point_b2">10. 주주가치보호 및 이해관계자의 기대충족으로 기업 가치 상승</span>
                                        </li>
                                        <li><span class="point_b2">11. 향후 인증을 통한 초기시장 선점 및 저변 확대</span>
                                        </li>
                                        <li><span class="point_b2">12. 재난 발생 시 효율적 대응 능력 확보</span>
                                        </li>
                                        <li><span class="point_b2">13. 재난으로부터 조직의 경영체계 연속성 확보</span>
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
                                <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC 인증원의 역량</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>
                                            1. GIC는 비즈니스 연속성 관리 시스템에 대한 인증 서비스를 제공하고 있습니다.</li><li>2. 여러 국제 표준에서 요구되는 IT 시험 및 인증을 종합적으로 수행한 노하우를 바탕으로 빠르고 정확한 인증 서비스를 제공합니다.
                                        </li>
                                        <li>2. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                        <li>3. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 미국의 인정기구인 IAS로부터 다양한 규격에 대해 인정받아 인증 서비스를 제공하고 있습니다.</li>
                                        <li>
                                            4. GIC는 전 세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다
                                        </li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                </ul>
            </div>
            <strong class="con_arrow">
                <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
            </strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 11 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        
        <article><!--+++++ 컨텐츠 12 시작 +++++--> 
            <div class="page_title">
                <h1 class="sub_tit">화장품 ISO 22716</h1>
                <h2 class="sub_tit2 fc_pointer">화장품 GMP 우수 화장품 제조 및 품질관리 기준에 대한 가이드라인</h2>
                <p class="sub_txt">
                    ISO 22716은 우수 화장품 제조 및 품질관리 기준에 대한 가이드라인 ‘GMP(Good Manufacturing Practices)’ 로 화장품의 생산, 관리, 보관과 출하를 위한 지침을 제공하는데 목적이 있습니다.<br>
                    ISO 22716에서는 제품의 품질에 영향을 미치는 요인들 관리에 있어서 조직적이고 실질적인 조언을 제공하고자 하며, 원료의 수령에서부터 출하까지의 제품의 흐름에 따라 그 목적에 도달하기 위한 방법을 포함하고 있습니다.
                </p>
            </div>
            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_22716_01.jpg" alt="ISO 22716 요구사항 구성">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 22716:2007 요구사항</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 적용범위</li>
                                        <li>2. 용어와 정의</li>
                                        <li>3. 인적 자원</li>
                                        <li>4. 건물</li>
                                        <li>5. 설비</li>
                                        <li>6. 원료와 포장재</li>
                                        <li>7. 생산</li>
                                        <li>8. 완제품</li>
                                        <li>9. 품질관리</li>
                                        <li>10. 규격 외 제품의 처리</li>
                                        <li>11. 폐기물</li>
                                        <li>12. 도급계약</li>
                                        <li>13. 일탈</li>
                                        <li>14. 불만과 리콜</li>
                                        <li>15. 변경관리</li>
                                        <li>16. 내부감사</li>
                                        <li>17. 문서관리</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_22716_02.jpg" alt="ISO 22716 중요성">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 22716의 중요성</h3>
                                <p>
                                    ISO 22716은 화장품 수출을 위한 필수 조건으로 변화하고 있습니다. 특히 유럽의 새로운 화장품 EU regulation에서는 화장품 제조사에게 harmonized standard를 준수하도록 요구하고 있는데 이 harmonized standard가 ISO 22716입니다.
                                </p>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/iso_22716_03.jpg" alt="ISO 22716 인증의 기대 효과">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 22716의 기대효과</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li><span class="point_b2">고객</span>
                                            1. 신뢰할 수 있는 브랜드를 통해 신뢰구축<br>
                                            2. 품질과 순도에 부합하는 제품
                                        </li>
                                        <li><span class="point_b2">판매자</span>
                                            1. GMP 요구사항, 품질 등의 기준에 부합함<br>
                                            2. 배치의 일관성으로 공정의 재현성/ 안정성 보증<br>
                                            3. 오염과 오류의 위험 최소화<br>
                                            4. 브랜드 &amp; 명성의 보호<br>
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
                                <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC 인증원의 역량</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>
                                            1. GIC는 화장품을 생산, 관리, 보관 출하하는 조직이 ISO 22716 인증을 구현하고 달성하도록 지원합니다.
                                        </li>
                                        <li>2. GIC의 풍부한 경험을 갖춘 전문가들이 현장 심사에서 인증까지의 프로세스에 걸쳐 조직의 생산 라인을 ISO 22716 지침에 따라 잠재적 위험을 최소화할 수 있도록 지원하고 있습니다.</li>
                                        <li>3. GIC는 인증 이외에도 기존 절차를 개선하고 기존 능력을 강화하길 원하는 조직에게 가장 효과적인 방법으로 정기적 피드백을 제공합니다.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                </ul>
            </div>
            <strong class="con_arrow">
                <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
            </strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 12 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
      
      
<!--===============================================================================================  -->
    

        <article><!--+++++ 컨텐츠 13 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 10002</a></li>
                    <li><a data-slide-index="1">ISO 10004</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <section style="display:block" id="con13-1" class="roll roll01 on"><!-- 4depth 컨텐츠 13-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">고객만족 인증 ISO 10002</h1>
                        <h2 class="sub_tit2 fc_pointer">고객만족 경영시스템 지침</h2>
                        <p class="sub_txt">
                            ISO 10002는 전자상거래를 포함한 모든 유형의 상업적 또는 비상업적 활동에 대하여 기획, 설계, 운영, 유지 및 개선을 포함한 조직 내의 제품 관련 불만처리 프로세스에 대한 지침을 제공합니다. 그리고 기술된 불만처리 프로세스를 전체 품질경영시스템 중 하나의 프로세스로 활용하는 것도 적절합니다.<br><br>
                            효과적이고 효율적인 불만처리 프로세스는 제품을 공급하는 조직과 그 제품을 받는 이들 모두의 요구를 반영합니다. 또한, 불만처리 프로세스를 통해 얻은 정보는 제품 및 프로세스의 개선을 이끌 수 있고 적절하게 불만이 처리된 경우에는 조직의 규모, 지역 및 산업 분야와 관계없이 조직의 명성이 높아질 수 있습니다.<br><br>
                            이와 관련된 국제적인 표준은 일관된 불만 처리에 대한 확신을 주기 때문에 국제 시장에서 이 표준의 가치는 점점 높아지고 있습니다.
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_10002_03.jpg" alt="ISO 1002 규격의 요구사항">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 10002:2014 요구사항</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 적용범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어와 정의</li>
                                                <li>4. 불만처리 기본 원칙</li>
                                                <li>5. 불만처리의 체제 및 구조</li>
                                                <li>6. 기획 및 설계</li>
                                                <li>7. 불만처리 프로세스의 운영</li>
                                                <li>8. 유지 및 개선</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_10002_01.jpg" alt="ISO 1002 도입의 필요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 10002의 중요성</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 시장개방에 따른 기업들의 무한경쟁 상황 하에서 생존 및 발전을 위한 경쟁력 제고의 필요성 인식</li>
                                                <li>2. 고객 서비스 개선을 통한 기존 고객의 이탈방지</li>
                                                <li>3. 고객 수준의 향상과 소비자 권리의식의 증대</li>
                                                <li>4. 상품 및 서비스 다양화에 따른 고객 문의에 대한 응대</li>
                                                <li>5. 고객과의 관계 개선</li>
                                                <li>6. 고객 관점의 만족도 향상</li>
                                                <li>7. 고객 상담원 및 영업사원의 중요성 대두</li>
                                                <li>8. 공공기관의 고객만족도 조사 강화</li>
                                                <li>9. 제조사의 제조물 책임에 따른 대응능력 강화</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_10002_02.jpg" alt="ISO 10002의 기대효과">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO10002의 기대효과</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 공개적이며 신속히 대응하는 불만처리 프로세스를 불만제기자에게 제공</li>
                                                <li>2. 일관성 있고 체계적이며 신속히 대응하는 방식으로 불만을 해결하여 불만제기자 및 조직이 만족할 수 있도록 하는 조직의 능력을 증진</li>
                                                <li>3. 동향 파악, 불만의 원인 제거 및 조직의 운영 개선에 대한 조직의 능력을 증진</li>
                                                <li>4. 불만 해결을 위한 고객중심 접근방법을 조직이 수립하도록 하고, 고객업무에 대한 관련 인원의 숙련도가 향상되도록 권장</li>
                                                <li>5. 불만처리 프로세스의 지속적인 검토 및 분석, 불만 해결 그리고 프로세스 개선에 대한 근거를 제공</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
                <section id="con13-2"  class="roll roll02"><!-- 4depth 컨텐츠 13-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">고객만족 인증 ISO 10004</h1>
                        <h2 class="sub_tit2 fc_pointer">고객만족 경영시스템 지침</h2>
                        <p class="sub_txt">
                            ISO 10004는 조직에 고객만족도를 모니터링하고 측정하기 위한 효과적인 절차를 수립하는 데 도움을 주는 가이드를 제공합니다. 모든 규모 및 산업 분야에 대한 적용을 목표로 합니다. 이 규격을 적용함으로써 얻어질 수 있는 많은 이득 중에 중요한 부분은, 고객과의 관계 개선을 위한 고객의 불평, 고객 만족, 고객 중심, 개인 동기부여의 해결책을 확인할 수 있습니다.<br><br>
                            특히 공공 또는 민간 조직으로부터 제품이나 서비스를 받는 개인이나 조직의 만족도를 정확하게 파악하고 이에 대해 적절한 대응을 통해 조직이 발전해 나가도록 하는 것이 이 표준의 주안점입니다.
                        </p>
                    </div>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso_10002_03.jpg" alt="ISO 1002 규격의 요구사항">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 10004:2018 요구사항</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 적용범위</li>
                                                <li>2. 인용표준</li>
                                                <li>3. 용어와 정의</li>
                                                <li>4. 컨셉과 안내 원리</li>
                                                <li>5. 고객 만족도 모니터링 및 측정을 위한 프레임워크</li>
                                                <li>6. 계획</li>
                                                <li>7. 운영</li>
                                                <li>8. 유지관리 및 개선</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso10004_01.jpg" alt="ISO 10004의 중요성">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 10004의 중요성</h3>
                                        <p>
                                            ISO 10004는 고객의 기대치를 상회하고자 하는 어떠한 조직에도 적절하며, 그 조직이 개인적 성격, 공공의 성격 혹은 자발적인 성향이 있던 상관없이, 모든 형태와 규모의 다양한 산업 분야에 도 적용이 가능한 가장 기본적인 요구조건입니다.<br><br>
                                            고객 만족은 조직(기업)으로부터 공급된 제품에 대한 고객의 기대치와 고객이 느끼는 인식의 차이에 의하여 결정됩니다. 고객 만족을 달성하기 위하여, 기업(조직)은 최우선으로 고객의 기댓값을 이해해야 합니다. 공급된 제품, 고객의 기대심리를 만족하는 제품의 정도가 고객 만족의 정도를 결정합니다. 전달된 제품의 품질에 대한 조직의 관점과 고객의 인식 사이에 특징이 있는 것이 중요합니다. 왜냐하면, 이 특징이 차후에 고객 만족 정도를 결정하기 때문입니다.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">고객만족 달성을 위한 조직의 수행항목</span>
                                                <li>1. 고객의 기대를 식별 및 파악</li>
                                                <li>2. 고객 만족 정보를 수집</li>
                                                <li>3. 고객 만족 정보를 분석</li>
                                                <li>4. 고객 만족 향상을 위한 의견의 제시</li>
                                                <li>5. 고객 만족의 진행 상태에 대한 관리 감독</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso10004_02.jpg" alt="ISO 10004의 효과">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 10004의 기대효과</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. 새로운 기대에 대한 정보 획득</li>
                                                <li>2. 불만과 조직의 만족에 대한 불만 해결</li>
                                                <li>3. 고객의 경향을 파악하고 그로 인하여 불만족 사항의 원인 제거</li>
                                                <li>4. 불만사항 해결에 관한 고객 중심 접근</li>
                                                <li>5. 고객과 직원들의 고객 대응에 따른 능력 향상</li>
                                                <li>6. 불만처리 절차에 대한 지속적인 검토 및 분석에 관한 토대 확립</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                        </ul>
                    </div>
                    <strong class="con_arrow">
                        <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
                    </strong>
                    <div class="con_box">
                        <ul>
                            <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                            <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                            <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                            <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                            <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                            <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                            <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                            <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                            <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                            <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                            <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                            <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                            <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                        </ul>
                    </div>
                </section>
            </div>
        </article><!--+++++ 컨텐츠 13 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        


          
<!-- ============================================================================================================================================-->

      

        <article><!--+++++ 컨텐츠 14 시작 +++++-->
            <div class="page_title">
                <h1 class="sub_tit">시설관리 ISO 41001</h1>
                <h2 class="sub_tit2 fc_pointer">시설관리 인증</h2>
                <p class="sub_txt">
                    오늘날 많은 기업은 고객의 요구를 단순히 충족시키는 것뿐만 아니라 더욱 향상된 제품 및 서비스를 제공하기를 원하고 있습니다. 또한, 비용 절감을 통해 경쟁력을 유지하기 원합니다. 대기업이든 중소기업이든 품질 및 가격 경쟁력을 개선하기 위한 종합적인 솔루션이 필요하고, ISO 9001은 이러한 기업에게 효과적인 품질경영 프로세스를 제공합니다.<br><br>
                    소프트웨어 개발은 식품제조나 상담서비스 제공과는 다릅니다. 그러나 ISO 9001은 모든 산업에 적용될 수 있습니다. 제조 회사, 소프트웨어 개발 회사, 거래 조직, 서비스 조직, 경찰서, 프로 축구 팀 및 시의회 등 다양한 조직이 ISO 9001:2015 시스템을 성공적으로 적용하였습니다. 이처럼 ISO 9001의 요구사항은 포괄적이며, 조직의 형태, 규모 또는 제공되는 제품 및 서비스에 관계없이 모든 조직에 적용될 수 있습니다. 그렇기에, 이 표준은 전세계적으로 가장 보편적으로 사용되고 있는 품질 경영 표준입니다.
                </p>
            </div>
            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_9001_01.jpg" alt="ISO 9001:2015 요구사항">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 9001:2015 요구사항</h3>
                                <p>
                                    조직의 목적과 목표를 뒷받침하는 ISO 9001은 품질 방침과 목표를 달성하기 위한 프로세스, 절차 및 책임사항을 문서화합니다. ISO 9001:2015는 High Level Structure가 적용되어, 다른 High Level Structure가 적용된 규격과 통합하여 관리할 수 있습니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 적용범위</li>
                                        <li>2. 인용표준</li>
                                        <li>3. 용어와 정의</li>
                                        <li>4. 조직 상황</li>
                                        <li>5. 리더십</li>
                                        <li>6. 기획</li>
                                        <li>7. 지원</li>
                                        <li>8. 운용</li>
                                        <li>9. 성과평가</li>
                                        <li>10. 개선</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_9001_02.jpg" alt="ISO 9001의 중요성">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 9001의 중요성</h3>
                                <p>
                                    오늘날의 서비스 부문 중심 경제에서 점점 더 많은 회사들이 ISO 9001을 비즈니스 도구로 사용하고 있습니다. 적절하게 명시된 품질 목표, 고객 만족도 조사 및 지속적인 개선 프로그램을 통해 기업은 효율성과 수익성을 높일 수 있습니다.<br>
                                    즉, 적절한 품질 관리는 비즈니스를 향상 시키며, 투자, 시장 점유율, 매출 증가, 매출 이윤, 경쟁 우위 및 소송 회피에 긍정적인 영향을 미칩니다.
                                </p>
                                <div class="con_txt">
                                    <ul><span class="point_b2">ISO 9001을 비즈니스 도구로 사용한다면 다음과 같은 이점이 있습니다.</span>
                                        <li>1. 보다 효율적이고 효과적인 운영</li>
                                        <li>2. 마케팅 강화</li>
                                        <li>3. 이익 증가</li>
                                        <li>4. 직원 동기 부여, 인식 및 사기 개선</li>
                                        <li>5. 국제 무역 촉진</li>
                                        <li>6. 고객 만족도 및 고객 유지력 향상</li>
                                        <li>7. 폐기물 감소 및 생산성 향상</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC 인증원의 역량</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. GIC는 미국의 인정기구인 IAS로부터 ISO 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다.</li>
                                        <li>2. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                        <li>3. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 9001은 물론 환경경영 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li>
                                        <li>4. GIC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                </ul>
            </div>
            <strong class="con_arrow">
                <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
            </strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 14 종료 +++++-->   
        
        <article><!--+++++ 컨텐츠 15 시작 +++++--> 
             <div class="page_title">
                <h1 class="sub_tit">공급사슬 보안 ISO 28000</h1>
                <h2 class="sub_tit2 fc_pointer">공급사슬 보안 인증</h2>
                <p class="sub_txt">
                    ISO 14001:2015는 환경경영시스템(EMS)를 위한 국제 규격으로 환경경영시스템 구성 및 유지를 위한 요구사항을 명시한 주요 경영시스템 규격입니다. 한국 내 많은 기업들이 조직의 환경경영을 위해 인증을 받고 있으며, 전 세계적으로는 25만개 이상의 인증서가 발행되고 있습니다.<br><br>
                    ISO 14001은 환경경영시스템에 대한 원칙, 시스템 및 지원 기술에 관한 일반 가이드라인과 함께 환경경영시스템 수립, 시행, 유지 및 개선과 같은 이슈들을 다룹니다. 이는 귀사의 환경측면을 통제하고, 환경영향을 감소시키며, 법규 준수를 보장합니다.
                </p>
            </div>
            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_04-01.jpg" alt="ISO 14001:2015 요구사항">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 14001:2015 요구사항</h3>
                                <p>
                                    ISO14001:2015은 ISO 9001:2015 등의 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 적용범위</li>
                                        <li>2. 인용표준</li>
                                        <li>3. 용어와 정의</li>
                                        <li>4. 조직 상황</li>
                                        <li>5. 리더십</li>
                                        <li>6. 기획</li>
                                        <li>7. 지원</li>
                                        <li>8. 운용</li>
                                        <li>9. 성과평가</li>
                                        <li>10. 개선</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_04-02.jpg" alt="ISO 14001:2015 인증 이익">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 14001의 중요성</h3>
                                <p>
                                    거의 모든 사업이 ISO 14001 규격 인증 취득을 통해 이익을 얻을 수 있습니다. 인증은 모든 산업 또는 분야 내 조직에 상당한 이익을 제공하기에 충분하며, 관련 지속 가능한 실례를 수행하는 특정 기반을 제공합니다. ISO 14001 인증 취득 장점은 다음과 같습니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li class="point_b2">
                                            1. 환경관리 향상
                                            <p>
                                                ISO 14001을 준수하는 환경경영시스템은 잠재적 영향 파악에 도움을 주며, 리스크를 최소화하기 위한 관리 및 조치를 수행합니다. ISO 14001은 자원활용 감소 및 귀사 사업의 전반적 효율성을 향상시키기 위해, 그리고 귀사 운영의 더 큰 역량을 최고화하기 위해 정량화 및 측정 가능한 도구를 제공합니다.
                                            </p>
                                        </li>
                                        <li class="point_b2">
                                            2. 사업 역량 증대
                                            <p>
                                                최종고객은 종종 납품 조건으로 인증서를 요구합니다. 따라서, 인증 취득은 사업 확장 역량이 됩니다. 새로운 시장 부문으로 귀사의 사업을 확장하는 경우, 인증은 프로세스를 빈틈없이 만드는 가장 최고의 도구입니다.
                                            </p>
                                        </li>
                                        <li class="point_b2">
                                            3. 증명된 사업 신뢰도
                                            <p>
                                                인정된 규격에 대한 독립적 심사는 많은 것을 보여주며, 귀사 브랜드를 향상시킵니다. ISO 14001을 준수하는 조직은 많은 시간과 노력이 듭니다. 바이어 및 기타 주주들은 이를 인식하고 누구와 새로 추진할지에 대한 의사결정을 할 때 이를 참고합니다.
                                            </p>
                                        </li>
                                        <li class="point_b2">
                                            4. 주주 관계 개선
                                            <p>
                                                환경을 우선시하게 되면 사람들은 귀사에 긍정적으로 반응할 것입니다. ISO 14001 인증은 전 세계적으로 인정 받고 있습니다. 귀사의 사업을 다른 지역으로 확장하려고 하는 경우, 인증은 귀사가 책임을 다하기 위해 적극적 조치를 취하고 있다는 것을 잠재적 고객에게 보이기 위한 최선의 방법입니다.
                                            </p>
                                        </li>
                                        <li class="point_b2">
                                            5. 운영 비용 감소
                                            <p>
                                                에너지 및 물 사용량 효율성 달성 및 폐기물 최소화는 비용 절감을 의미합니다.
                                            </p>
                                        </li>
                                        <li class="point_b2">
                                            6. 법규 준수
                                            <p>
                                                법적/규제적 요구사항이 어떻게 귀사에 영향을 끼치는지 이해한다면, 법을 지키는 것이 더욱 쉽고 합리적일 것입니다. ISO 14001 또한 귀사가 미래 법적 규제들을 충족하도록 합니다. 이는 지속적으로 변화하는 법적 상황에 대해 매우 큰 장점입니다.
                                            </p>
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
                                <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC 인증원의 역량</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. GIC는 미국의 인정기구인 IAS로부터 ISO 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다.</li>
                                        <li>2. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                        <li>3. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 9001은 물론 환경경영 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li>
                                        <li>4. GIC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                </ul>
            </div>
            <strong class="con_arrow">
                <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
            </strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 15 종료 +++++--> 
        <article><!--+++++ 컨텐츠 16 시작 +++++-->
            <div class="page_title">
                <h1 class="sub_tit">사회적 책임 SA 8000</h1>
                <h2 class="sub_tit2 fc_pointer">사회적 책임 인증</h2>
                <p class="sub_txt">
                    ISO 45001은 안전보건경영시스템으로, 기존의 OHSAS 18001:2007 규격이 2018년 ISO 45001로 대체되었습니다. 이는 ISO 9001 및 14001 관리 시스템과 호환되는 산업 보건 및 안전 관리 시스템을 통해 보건 및 안전 관리 책임을 관리하기 위한 프레임워크를 제공합니다. 이 표준은 국제적 사용을 위해 개발되었으며 조직이 보건 및 안전 위험을 제어하고 성능을 향상시킬 수 있도록 합니다.<br><br>
                    효과적인 안전보건 관리시스템은 직원 및 기타 이해 관계자에 대한 위험을 줄이고 법규 준수를 지원합니다. 기존 OHSAS 18001 규격이 2021년 3월 만료됨에 따라 신규 고객의 경우 2020년 3월부터는 ISO 45001로 진행되어야 하고, 기존 OHSAS 18001 인증 고객은 ISO 45001로 전환되어야 합니다.
                </p>
            </div>
            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO 45001_01.jpg" alt="ISO 45001 요구사항">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 45001:2018 요구사항</h3>
                                <p>
                                    ISO 45001:2018은 ISO 9001:2015 등의 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. 적용범위</li>
                                        <li>2. 인용표준</li>
                                        <li>3. 용어와 정의</li>
                                        <li>4. 조직 상황</li>
                                        <li>5. 리더십과 근로자 참여</li>
                                        <li>6. 기획</li>
                                        <li>7. 지원</li>
                                        <li>8. 운용</li>
                                        <li>9. 성과평가</li>
                                        <li>10. 개선</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO 45001_02.jpg" alt="ISO 4500의 중요성">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 45001의 중요성</h3>
                                <p>
                                    ISO 45001은 127개국 이상의 9만개 이상 조직에게 적합합니다. 만약에 귀사의 조직이 책임이 있는 사람들의 안전관리의 '모범 사례'를 보여야 한다면 ISO 45001은 귀사에게 적합할 것입니다. GIC는 관공서, 제조업, 서비스업, 식품회사, 프랜차이즈점을 포함한 다양한 분야의 다양한 조직에게 인증을 부여하고 있습니다.
                                </p>
                                <div class="con_txt">
                                    <ul><span class="point_b2">이 규격은 다음 사항들에 도움을 줍니다.</span>
                                        <li>1. 작업장 유해물질 파악 및 효과적인 예방관리 수행</li>
                                        <li>2. 작업장 내 부상 및 건강 악화 방지</li>
                                        <li>3. 현장 사고 감소를 통해 비용 절감</li>
                                        <li>4. 법적 요구사항 준수 평가</li>
                                        <li>5. 안전 환경 개선</li>
                                        <li>6. 교육훈련 및 적격성 요구사항 분야 파악</li>
                                        <li>7. 생산성 증가</li>
                                        <li>7. 고객사의 사전 등록 프로세스 보완</li>
                                        <li>7. 기업 책임 촉진</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO_9001_03.jpg" alt="ISO 9001, GIC인증원의 역량">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC 인증원의 역량</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. GIC는 미국의 인정기구인 IAS로부터 ISO 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다.</li>
                                        <li>2. GIC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li>
                                        <li>3. GIC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 9001은 물론 환경경영 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li>
                                        <li>4. GIC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:100%;">
                </ul>
            </div>
            <strong class="con_arrow">
                <p>GIC GLOBAL INTER CERTIFICATION 주요 사업영역</p>
            </strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                    <li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
                    <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                    <li><p><em><strong>04</strong></em><span>보건&amp;의료기기 인증</span></p></li>
                    <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
                    <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
                    <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
                    <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
                    <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
                    <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
                    <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
                    <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
                    <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
                </ul>
            </div>
        </article><!--+++++ 컨텐츠 16 종료 +++++--> 
    </div><!-------div class="tab_con" 종료------>
</div><!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>