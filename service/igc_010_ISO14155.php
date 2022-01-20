<?php
	include_once('./_common.php');
$g5['title'] = '보건&의료기기 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    /* *:lang(en) {font-family: georgia;} */ 
    /* *:lang(ko) {font-family: 'Noto Sans', sans-serif;} */
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; ; color:#666; margin-top:20px; }

	.business_type5 h1{font-size:3em; font-weight:700; color:#111; text-align:center;  margin:0 auto; margin-bottom:0px; }
	.business_type5 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
	.business_type5 h2:after{display:block; position:relative; bottom:0; left:50%; margin-left:-2px; content:""; width:2px; height:30px; background-color:#195883; margin-top:20px;}
	.business_type5 h3{font-size:1.1em; color:#666; text-align:center; margin-bottom:50px;}
	.business_type5 h3 br.sn{display:none;}
	.business_type5 ul{width:100%;}
	.business_type5 ul > li{width:100%; border-bottom:1px solid #d1d1d1; overflow:hidden;}
	.business_type5 ul > li:first-child{border-top:1px solid #d1d1d1;}
	.business_type5 ul > li:nth-child(odd){background-color:#f4f4f4;}
	.business_type5 ul li dl{display:table;}
	.business_type5 ul li dl dt, .business_type5 ul li dl dd{display:table-cell; vertical-align:middle;}
	.business_type5 ul li dl dt{width:40%; padding-left:5%;}
	.business_type5 ul li dl dt img{max-width:100%; margin:0 auto;}	
	.business_type5 ul li dl dd{width:60%; padding:50px 0; padding-top:30px; padding-left:5%;}
	.business_type5 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type5 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type5 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}
    
    /* (주)아이지씨인증원 사업영역 시작  */	
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}
	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.partner_type2 .con_box ul li p{display:table; width:100%; }
	.partner_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.partner_type2 .con_box ul li p > em{ width:30px; }
	.partner_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
    
	.partner_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    /* (주)아이지씨인증원 사업영역 종료  */
    
	@media screen and (max-width:992px){		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{;}
	}

	@media all and (max-width:768px){
		.business_type5 h1{font-size:2.3em; }
		.business_type5 h2{font-size:1.9em; }
		.business_type5 h3{font-size:1.6em; padding:0 5px;}
		.business_type5 ul li dl, .business_type5 ul li dl dt, .business_type5 ul li dl dd{display:block; width:100%;}
		.business_type5 ul li dl dt{padding:5%;}
		.business_type5 ul li dl dt img{width:91%;}
		.business_type5 ul li dl dd > strong{line-height:30px; font-size:1.3em;}
		.business_type5 ul li dl dd{width:90%; padding:5%; padding-top:0;}
		.business_type5 ul li dl dd > p{line-height:24px; font-size:0.95em;}
		.business_type5 ul li dl dd > p:before{top:10px;}
	}

	@media all and (max-width:480px){
		.business_type5 h3 br.sn{display:inline;}
	}

</style>

<div class="content_wrap">
    <!--+++ 20.05.13 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">ISO 13485</a></li>
			<li><a href="javascript:;">ISO 15378</a></li>
			<li class="on"><a href="javascript:;">ISO 14155</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->
	
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

<!--+++ 20.05.13 탭컨텐츠 영역 시작 +++-->
<div class="tab_con">
  

<article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<section class="business_type5" class="area">
		<h1><span>ISO</span> 13485 </h1>
		<h2>의료기기 품질경영시스템 인증</h2>	
		<p style="display:inline-block;text-align:justify;">                
            <span> ISO</span> 13485는 의료기기의 설계 및 개발, 생산, 설치 및 부가서비스를 제공하는 조직의 품질 경영 시스템에 대한 요구사항을 규정한 규격입니다. 또한 이 규격은 의료기기 조직에 멸균, 교정, 판매 등의 서비스를 제공하는 외부 조직에도 적용될 수 있어, 의료기기 및 관련 서비스 제공 조직에 품질 경영 시스템의 기반을 제공합니다.  
		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/ISO 13485_01.jpg" alt="ISO 13485 요구사항">
					</dt>
					<dd>
						<strong><span>ISO</span> 13485:2016 요구사항</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">조직의 목적과 목표를 뒷받침하는 
                         ISO 13485는 ISO 9001을 근간으로 하여 의료기기에 관련된 사항을 추가하여 제정된 의료기기 산업의 품질경영시스템에 대한 국제 표준입니다.
                        </span><br><br>
                        <span>1.적용범위</span><br><br>
                        <span>2.인용표준</span><br><br>
                        <span>3.용어와 정의</span><br><br>
                        <span>4.품질 경영 시스템</span><br><br>
                        <span>5.경영 책임</span><br><br>
                        <span>6.자원 관리</span><br><br>
                        <span>7.제품 실현</span><br><br>
                        <span>8.측정, 분석 및 개선</span><br><br>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO 13485_02.jpg" alt="ISO 13485 인증의 중요성">
					</dt>
					<dd>
						<strong><span>ISO</span> 13485의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">        
                        의료기기는 인간의 생명 및 건강에 직접 영향을 끼치기 때문에 다른 어떤 제품보다도 높은 수준의 안정성에 대한 보장이 필요합니다. 그래서 의료기기 산업은 국내 규제제도, 국제적인 표준 및 다른 기타 요구사항 등 충족해야 하는 규제가 다양합니다. <br>EU 의료기기 지침의 요구사항 충족을 위해서는 품질 시스템을 구축하여야 하며, 캐나다 등 일부 국가에서는 제품 판매를 위해 ISO 13485 인증을 요구하고 있습니다. <br>의료기기 제조사는 ISO 13485 시스템인증을 통해 조직의 시스템이 품질경영시스템에 대한 포괄적인 요구사항 및 의료기기에 대한 특별한 요구사항에 부합함을 입증할 수 있습니다.
                        </span><br><br>
                        <div style="text-align:justify;margin-right:10px;display:inline-block;">
                        이 규격은 다음 사항들에 도움을 줍니다.<br><br>          
                        1. ISO 13485 품질 경영 시스템을 통한 조직의 전 프로세스 관리<br><br>
                        2. 작업 환경 개선<br><br>
                        3. 사전 예방적 품질관리<br><br>
                        4. 전 직원의 품질 관리 시스템 인식 개선<br><br>
                        5. 비용 절감 및 효율성 증가<br><br>
                        </div>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO 13485_03.jpg" alt="ISO 13485 인증의 기대 효과">
					</dt>
					<dd>
						<strong><span>ISO</span> 13485 기대효과</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">        
                          ISO 13485 인증 취득을 통해 조직은 다음과 같은 혜택을 얻을 수 있습니다.
                        </span><br><br>
                        <div style="text-align:justify;margin-right:10px;display:inline-block;letter-spacing:-1.3px;">                        
                          
                          1. 고객 만족: 품질, 안전 및 법적 요구사항을 포함한 고객 요구사항을 지속적으로 충족하는 제품 납품을 통해 달성<br><br>
                          2. 운영 비용 감소: 지속적 프로세스 개선을 통한 운영 효율성 향상<br><br>
                          3. 주주 관계 개선: 직원, 고객 및 공급업체와 함께 조직 인식 향상<br><br>
                          4. 법규 준수: 조직 및 고객에게 영향을 끼칠 수 있는 법적 및 규제 요구사항 이해<br><br>
                          5. 리스크 관리 개선: 제품 및 서비스의 추적성 향상을 통한 리스크 관리 개선<br><br>
                          6. 사업 신뢰도 검증: 국제 표준에 대한 인증 취득을 통해 비즈니스 자격 증명<br><br>
                          7. 사업 확대: 해외 시장 진출을 위한 요구사항 만족<br><br>
                        </div>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_03.jpg" alt="ICG인증원의 역량">
					</dt>
					<dd>
						<strong>IGC 인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                         IGC는 미국의 인정기구인 IAS로부터 ISO 13485 규격의 시스템 인증에 대한 인정을 받아 경영시스템에 대한 인증서비스를 제공하고 있습니다. <br><br>
                         IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 의료기기 품질 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다. <br><br>
                         IGC는 글로벌 경쟁력을 기반으로 해외 제품인증 기관과의 협력관계 구축을 통해 의료기기의 CE 인증 및 FDA 서비스를 제공하고 있습니다. <br><br>
                         IGC는 이러한 역량을 바탕으로    시스템인증 및 제품인증 업무를 One Stop으로 제공하고 있는 국제공인 인증기관입니다.<br><br>
                       </span><br><br>
					</dd>
				</dl>	
			</li>
		</ul>
	</section>
<br><br><br><br><br><br>
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;width:100%;">
        <h2 class="con_arrow" style="font-size:0.7em;">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
                  <ul>
                   	<li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                   	<li><p><em><strong>02</strong></em><span>환경 인증</span></p></li>
                   	<li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                   	<li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
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
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>	
  </article> <!--------+++++++/ <article style="display:block"> 종료 /++++++++----------->
  
  
   <article><!--+++++ 컨텐츠 02 시스템인증 > 보건 및 의료기기 시작+++++-->
       <section class="business_type5" class="area">
		<h1><span>ISO</span> 15378</h1>
		<h2>의약품용 1차 포장제품 인증</h2>		
		<p style="display:inline-block;text-align:justify;">
          ISO 15378:2017은 의약품의 1차 포장재에 대한 규격으로써 재료 공급 업체에 품질관리시스템을 입증하기 위해 개발된 비인정 규격입니다. 
          1차 포장재란 약품, 의료기기 및 화장품 등과 같은 내용물과 직접 접촉하는 포장재로써 유리, 플라스틱, 고무, 알루미늄 등이 있습니다.<br><br>
          ISO 9001의 요구사항과 GMP(Good Manufacturing Practice)의 요구사항을 적용하여야 하며, ISO 15378:2017 표준에 품질 경영 시스템의 요구사항을 설계, 제조 및 공급을 위한 GMP 원칙과 통합한 것입니다. 조직 내에서 1차 포장재의 관리에서 GMP 원칙을 실현하는 것은 직접적으로 제품과 접촉하는 의약품을 사용하는 환자의 안전을 위해 매우 중요합니다. <br><br>          
          ISO 15378:2017 인증을 받기 위해서는 다음 사항을 준수하여야 합니다.<br><br>
          •	법적 요구사항 준수<br>
          •	오염 및 제조 오류를 포함한 위험의 식별 및 감소, 제어<br>
          •	시스템의 효과적인 모니터링을 위한 프로세스의 접근<br>
          •	제품 및 프로세스의 전반적인 개선을 위한 지속적인 개선 제공<br>   
		</p>
		<br><br><br><br>
		<ul>
		
        <li>
				<dl>
					<dt>
						<img src="./image/ISO 15378-2017_04.jpg" alt="ISO 15378:2017 요구사항">
					</dt>
					<dd>
						<strong><span>ISO</span> 15378:2017  요구사항</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                          ISO 15378:2017 표준은 동일한 10의 상위 레벨 구조로 구성되어 있으며, 관련 규격의 요구사항 및 국제 표준을 포함하여 고객의 요구사항을 일관되게 충족하여야 합니다. ISO 15378:2017 규격은 10개의 장과 4개의 부록으로 이루어져 있습니다. 품질경영시스템을 잘 이해하고 수행하고 있는 제조업체의 경우 추가적인 요구사항의 이해와 반영을 통해 ISO 15378 규격을 인증 받을 수 있습니다.<br><br>
                            <span>1.적용범위</span><br>
                            <span>2.인용표준</span><br>
                            <span>3.용어와 정의</span><br>
                            <span>4.조직 상황</span><br>
                            <span>5.리더십</span><br>
                            <span>6.기획</span><br>
                            <span>7.지원</span><br>
                            <span>8.운용</span><br>
                            <span>9.성과평가</span><br>
                            <span>10.개선</span><br><br>
                        다음은 ISO 15378:2017의 추가 요구사항입니다.<br><br>
                        4.3 구체적인 문서 관리조건 : 문서에 서명하고 필요시 보안문서로 지정하여야 하며, 식별할 수 있어야 합니다. <br><br>
                        4.4 중요공정 기록관리는 이중으로 체크하여야 합니다.<br><br>
                        5.2 고객의 심사를 수락하여야 하고 요구사항을 충족하여야 합니다.<br><br>
                        5.5 직원의 서명 리스트를 유지하고 품질부서의 독립성을 강조하여야 합니다.<br><br>
                        5.5.3 내부 의사소통 시 법규사항을 포함하고 중요 품질상황은 적시에 소통하여야 합니다.<br><br>
                        5.8.3 경영검토 회의 시 교육훈련에 대한 효과성을 파악하여야 합니다.<br><br>
                        6.2 GMP 교육훈련이 강조되었습니다.<br><br>
                        6.4 클린룸 및 작업환경의 기준을 수립하여야 하고 오염관리, 해충관리, 유틸리티, 유지보수 활동을 기술하여야 합니다.<br><br>
                        7.1 위험평가를 실시하여야 합니다.<br><br>
                        7.2 제품에 변경사항이 있을 시 통보하여야 하며 폐기되는 포장재 처리를 위한 고객의 요구사항을 문서화하여야 합니다.<br><br>
                        7.2.3 아직 발견되지 않은 제품의 문제를 고객에게도 통보하여야 합니다.<br><br>
                        7.3 설계, 개발 단계에서도 위험평가를 실시하여야 하며 설계의 변경이 있을 시 고객에게 통보하여야 합니다.<br><br>
                        7.4 외주 업체를 관리하여야 하며 특히 실험을 하는 업체는 능력을 평가하여야 합니다. 핵심 공급 물품에 대해서는 품질부서의 승인이 필요합니다.<br><br>
                        7.5.1 제조일자를 관리하고 생산 환경조건을 고객이 승인하여야 합니다. 용기 및 충진과 포장라인이 식별되어야 하며, 재가공 재료도 고객의 승인이 필요합니다. 다음 작업을 위한 라인 점검을 수행하여야 하며, 변경 관리 절차를 수립하여야 합니다.<br><br>
                        7.5.2 제품 공정의 타당성을 확인하고 실행하여야 하며, 변경 사항이 있을 시 다시 타당성 확인을 실시하여야 합니다. 또한 이러한 타당성은 기록으로 유지하여야 하며 소프트웨어 사용시 기능 테스트 결과, 정확도 등의 데이터를 보관하고 유지하여야 합니다.<br><br>
                        7.5.3 중요공정데이터를 포함한 생산 공정 제품의 식별 및 추적이 가능하여야 합니다.<br><br>
                        7.5.5 보존기간 및 창고 보관 조건을 명시하여야 합니다.<br><br>
                        7.6 자동 검사장비의 부하를 시험하여야 하고, 고객 요청이 있을 시 생산 데이터를 제공하여야 하며, 중요 측정장비는 검교정을 해야 합니다.<br><br>
                        8.2.4 일탈 및 입고검사, 공정검사, 최종검사, 보관품에 대한 기록을 관리하여야 합니다.<br><br>
                        8.3 재작업품의 위험성을 평가하고 재작업 시 품질부서의 승인을 받아야 하며 고객 승인하에 부적합을 관리하여야 합니다.<br><br>
                        8.5.2 시정할 사항의 조치는 가능한 신속하게 규정된 일정에 수행하여야 합니다.<br><br>
                        <strong style="display:inline-block;font-weight:bold;">* 적용범위</strong><br>
                         1. 의약품 1차 포장재를 제공하는 조직의 능력을 입증할 필요가 있는 경우, 품질경영시스템에 대한 요구사항을 명시하여야 합니다.<br><br>
                         2. 의약품을 위한 1차 포장재의 설계, 제조 및 공급에 적용하는 규격이며, 이 규격은 인증 목적으로도 사용할 수 있습니다.<br><br>
                         3. 이 규격의 모든 요구사항은 일반적이며, 제품에 관련 없이 모든 조직에 적용 가능하도록 개발되고, 규격의 요구사항이 조직 및 제품에 적용될 수 없다면 그 조항을 제외할 수 있습니다.<br><br><br>
                        <strong style="display:inline-block;font-weight:bold;">* ISO 9001:2015 외 추가 요구사항</strong><br>
                        <p> ISO 15378:2017 규격은 10개의 장과 4개의 부록으로 이루어져 있습니다. 품질경영시스템을 잘 이해하고 수행하고 있는 제조업체의 경우 추가적인 요구사항의 이해와 반영을 통해 ISO 15378 규격을 인증 받을 수 있습니다.</p> <br><br>
                        </span><br>
					</dd>
				</dl>
        </li>

		<li>
				<dl>
					<dt>
						<img src="./image/ISO 15378-2017_000.jpg" alt="ISO 15378:2017 인증">
					</dt>
					<dd>
						<strong><span>ISO</span> 15378의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                        GMP 및 품질경영시스템의 요구사항을 적용하는 1차 포장재에 대한 인증은 전세계적으로 인정받고 있으며 의약품과 직접 접촉하는 1차 포장재는 의약품을 사용하는 사람이나 동물의 건강과 직접적으로 관련되기 때문에 그 중요성이 더욱 부각되고 있습니다.<br><br>
                         ISO 15378 인증의 장점은 아래와 같습니다.<br><br>
                         1. 제조 시 오염, 혼합 및 제조 오류와 폐기물을 최소화하고 생산성을 향상시켜 비용을 절감할 수 있습니다.<br>
                         2. 위험 관리 및 검증에 대한 지침을 제공함으로써 제품의 오염, 혼합 및 오류로 식별된 위험을 완화하고 제품 효능 및 유효기간을 보장할 수 있습니다.<br>
                         3. ISO 15378:2017 표준에 따라 GMP 요구사항을 준수함으로써 생산 프로세스의 숙련도를 향상시킬 수 있습니다.<br>
                         4. 품질경영시스템의 요구사항 및 GMP 요구사항을 준수하여 제품을 생산함으로써 고품질의 제품을 보증하고 이것이 고객의 만족도 향상으로 이어질 수 있고, 최적화된 품질경영시스템 요구사항을 구현할 수 있습니다.<br>
                         5. 조직의 브랜드 및 이미지를 주요 이해 관계자와 함께 향상시키고 조직의 품질 및 안정성을 보장하는데 도움을 줌으로써 브랜드를 보호하는 효과를 가져올 수 있습니다.<br>
                         6. ISO 15378 심사 프로세스 전반에 걸쳐 조직이 리스크를 식별, 제어 및 관리할 수 있도록 지원함으로써 효율적인 리스크 관리를 할 수 있도록 도와줍니다.<br>
                        </span><br><br>
					</dd>
				</dl>
			</li>

			<li>
				<dl>
					<dt>
						<img src="./image/ISO 15378-2017_05.jpg" alt="아이지씨인증원의 역량">
					</dt>
					<dd>
						<strong style="display:inline-block;">IGC 인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                        1. IGC는 미국의 인정기구인 IAS로부터 ISO 13485와 ISO 9001에 대한 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br><br>
                        2. IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                        3. IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 9001과 ISO 13485는 물론 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다. <br><br>
                        4. IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
                        </span><br><br>
					</dd>
				</dl>	
			</li>
		</ul>
	</section>
<br><br><br>
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow" style="font-size:0.7em;">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
                  <ul>
                   	<li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                   	<li><p><em><strong>02</strong></em><span>환경 인증</span></p></li>
                   	<li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                   	<li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
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
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>	
  </article><!--+++++ 컨텐츠 02 시스템인증 > 보건 및 의료기기 종료+++++-->  

   
   <article style="display:block;"><!--+++++ 컨텐츠 03 시스템인증 > 보건 및 의료기기 시작+++++-->
     <section class="business_type5" class="area">
		<h1><span>ISO</span> 14155</h1>
		<h2>의료기기 임상조사계획 자발적 평가 인증</h2>		
		<p style="display:inline-block;display:inline-block;text-align:justify;">
            ISO 14155는 ‘인체 대상 의료기기 임상시험에 대한 국제표준 – GCP(Good Clinical Practice)’으로 임상 시험 원칙, 수행 절차 및 수집할 정보에 대한 가이드라인을 제공합니다. 
            <br>ISO 14155에 따른 임상시험을 진행하면 피험자의 안전 및 보건을 보호하는 한편, 객관적이고 신뢰할 수 있는 과학적 임상 데이터를 수집할 수 있습니다. 또한 EU 뿐만 아니라, 미국, 캐나다, 브라질, 호주, 일본, 중국, 러시아에서도 ISO 14155에 기반한 의료기기 임상시험 및 임상데이터를 인정하고 있기 때문에 그 중요성과 효율성은 날로 더 커질 것입니다.
		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/iso_14155_01.jpg" alt="ISO 14155 요구사항">
					</dt>
					<dd>
						<strong><span>ISO</span> 14155:2011 요구사항</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                         ISO 14155:2011은 임상시험 관리 기준(GCP)뿐 아니라 임상 품질 관리 과정과 관련하여 의뢰자, 연구자, 현장의 연구 심사 개념을 도입한 규격입니다. 이는 윤리적 고려사항과 임상 조사에 대한 단계적 접근으로 정확하고 신뢰가능한 임상데이터 수집이 가능합니다.
                       <br><br>
                         1. 적용범위<br><br>
                         2. 인용표준<br><br>
                         3. 용어와 정의<br><br>
                         4.	GCP원리 요약<br><br>  
                         5. 윤리적 고려사항<br><br>
                         6. 임상조사계획<br><br>
                         7. 임상조사실시<br><br>
                         8. 임상 조사 중단, 종료 및 폐쇄<br><br>
                         9. 스폰서의 책임<br><br>
                         10. 주요 조사의 책임<br><br>
                         </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_14155_02.jpg" alt="ISO 14155의 중요성">
					</dt>
					<dd>
						<strong><span>ISO</span> 14155의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                       임상 조사 계획의 적절한 설계는 필수적입니다. 데이터 수집을 위한 적절한 규칙과 절차를 밝히지 않는 과정은 의료기기 제조사의 안전 및 성능에 관한 주장을 충분히 뒷받침하지 못하는 결과를 초래할 수 있으므로 매우 중요합니다. 또한, 이 표준을 준수한다는 것은 시험 대상자의 권리, 안정성, 복리가 보장되며 임상 시험 데이터를 신뢰할 수 있다는 아주 중요한 증거입니다.
                       <br><br>
                        이 규격은 다음 사항들에 도움을 줍니다.<br><br>
                        1. 의료기기와 관련된 모든 위험 가능성 식별<br><br>
                        2. 안전 및 성능과 관련된 임상 데이터 수집가능<br><br>
                        3. 환자의 안전과 복지 보호<br><br>
                        4. 기기의 적합성 평가<br><br>
                        </span> 
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_14155_03.jpg" alt="ISO 14155의 기대효과">
					</dt>
					<dd>
						<strong><span>ISO</span> 14155 기대효과</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                            <div >
                               <strong style="font-weight:bold;">1. 품질 경영 시스템 인증 및 심사 스페셜리스트</strong><br>
                                 일반적으로 의료기기 승인에 있어서 품질 경영 시스템 구현이 필요합니다. IGC인증원은 대부분의 국제 규정 및 표준에 따라 품질 경영 시스템 인증, 감사 및 공장 심사를 수행하여 고객이 시간 및 비용을 줄이고 통합 검사 및 심사를 받으실 수 있습니다.<br><br>
                               <strong style="font-weight:bold;">2. 최상의 솔루션 제공</strong><br>
                                 IGC인증원은 국제 표준 및 규정에 따라 주요 의료기기 시장 진입에 필요한 시험 서비스를 제공합니다.<br><br>                       
                               <strong style="font-weight:bold;">3. 전문집단과의 파트너쉽</strong><br>
                                 IGC인증원은 오랜 기간 의료기기에 대한 기술 및 규제에 관한 전문지식을 축적해 왔으며, 글로벌 제조사에서부터 지역 연구소에 이르기까지 다양한 조직으로부터 변함없는 신뢰를 받고 있습니다.<br>
                            </div>
                        </span> 
					</dd>
				</dl>			
			</li>
						
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_03.jpg" alt="IGC의 역량">
					</dt>
					<dd>
						<strong>IGC 인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                          MDR이 본격 적용되는 2020년 5월부터는 EU지역으로의 의료기기 수출을 위해 반드시 ISO 14155 기반의 임상데이터와 조사결과가 필요하게 됩니다. IGC의 의료기기 임상 전문가들은 귀하의 임상 시험에 대해 GCP 준수 검토를 시행하고 시정 조치 권고 사항을 제공합니다. <br><br>
                          
                          IGC는 다음과 같은 최고의 역량을 갖추고 있습니다.<br><br>
                       
                          1. 의료기기 임상 시험 관리 및 모니터링<br><br>
                          2. 의료기기 임상 시험 연구 디자인 및 프로토콜 개발 지원<br><br>
                          3. 임상 조사 보고서 검토<br><br>
                          4. 임상 시험 기본 문서 파일(Trial Master File) 검토<br>
                          </span><br><br>
					</dd>
				</dl>	
			</li>
		</ul>
	</section>
    <br><br><br>
    
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;width:100%">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
                  <ul>
                   	<li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                   	<li><p><em><strong>02</strong></em><span>환경 인증</span></p></li>
                   	<li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
                   	<li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
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
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
  </article><!--+++++ 컨텐츠 03 시스템인증 > 보건 및 의료기기 종료+++++-->  
  </div> <!---------++++++/ <div class="tab_con">  종료 /++++++++++------------>
</div> <!---------------/ <div class="content_wrap" 종료   / ------------------>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>