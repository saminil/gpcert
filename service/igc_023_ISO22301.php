<?php
	include_once('./_common.php');
$g5['title'] = '사업연속성 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.page_title h2{width:100%; margin:0 auto; text-align:center;  color:#666; margin-top:20px; }
		
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
    .partner_type2{width: 100%;}
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
		.s_tit{}
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
	<section class="business_type5" class="area">
		<h1><span>ISO</span> 22301</h1>
		<h2>비즈니스연속성 경영시스템 인증</h2>		
		<p style="display:inline-block;text-align:justify;">
            ISO 22301은 비즈니스 연속성 관리 시스템으로, 시장의 위험뿐만 아니라 도난, 자연재해, 질병 등 중단적 사고가 발생했을 때 조직이 이에 대한 방어, 발생 가능성의 감축, 대비, 대응 및 복구를 위해 문서화된 경영시스템을 수립하고 이 시스템을 실행, 운영, 모니터링 및 지속적인 개선활동을 하기위한 요구사항을 규정하고 있습니다.<br><br>
            
            비즈니스 연속성 관리 시스템은 모든 산업 분야 및 활동에 적용할 수 있으며 조직의 각종 위협에 대한 영향을 파악하고, 효과적인 대응능력 및 조직 회복 능력을 구축하는 프레임워크를 제공합니다. 이 표준은 영업 중단 이후의 비즈니스 운영을 지속하기 위한 비즈니스 연속성의 지침을 제공하며, 중단 시 제품 및 서비스가 즉시 제공되고 복구될 수 있도록 보장하여 제품 및 서비스에 미치는 영향을 최소화하고자 합니다.<br><br>
            
            2012년 발행되었던 ISO 22301:2012는 2019년 10월 31일부로 ISO 22301:2019로 개정되었으며 2022년 10월까지 3년간의 전환 유예 기간을 거칩니다. 2021년 5월 1일부터 모든 비즈니스 연속성 관리 시스템 심사는 ISO 22301:2019 버전을 적용합니다. 2012 버전은 2021년 4월 30일까지만 심사 수행이 가능합니다. <br><br>
		</p>
		<br><br><br><br>
		
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/iso_22301_01.jpg" alt="ISO 22301 요구사항">
					</dt>
					<dd>
						<strong><span>ISO</span> 22301:2019 요구사항</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                       이 국제규격은 조직의 존재에 중요한 영향을 끼치는 제품과 서비스를 식별하고 중단이 발생할 경우에 필요한 대응이 무엇인지 수립하는 데 도움을 줍니다. 또한, 사업 중단의 경우도 적절하게 대응할 수 있는 기능도 제공합니다.<br><br>
                        1. 적용범위<br><br>
                        2. 인용표준<br><br>
                        3. 용어와 정의<br><br>
                        4. 조직 상황<br><br>
                        5. 리더십<br><br>
                        6. 기획<br><br>
                        7. 지원<br><br>
                        8. 운용<br><br>
                        9. 성과평가<br><br>
                        10. 개선<br><br>
                       </span><br><br>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_22301_02.jpg" alt="ISO 22301의 중요성">
					</dt>
					<dd>
						<strong><span>ISO</span> 22301의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                          ISO 22301은 위험하거나 복잡한 환경에서 운영되거나 빠른 일 처리를 할 수 있는 능력이 중점적인 글로벌 기업에 적합합니다.<br><br>
<!--                          IGC는 관공서, 제조업, 서비스업, 식품회사, 프랜차이즈점을 포함한 다양한 분야의 다양한 조직에 인증을 부여하고 있습니다.<br><br>-->
                          이 규격의 목표는 다음 사항을 포함하는 광범위한 범위의 잠재적인 위협 및 중단을 보호하는 데 있습니다.<br><br>
                          1)기술 실패<br><br>
                          2)주요 자원의 갑작스러운 손실<br><br>
                          3)자연 재난<br><br>
                          4)테러 공격<br><br>
                          5)기타 긴급 상황<br><br>
                        </span><br><br>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_22301_03.jpg" alt="ISO 22301 기대효과">
					</dt>
					<dd>
						<strong><span>ISO</span> 22301 기대효과</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                          <br>
                           1) 고객 만족 : 고객에게 귀사의 서비스는 신뢰할 수 있고 항상 의지할 수 있다는 고객의 신뢰를 제공합니다.<br><br>
                           2) 비즈니스 탄력성 : 위기, 비상대비 및 비상계획에 대한 효율적인 관리로 다운타임과 재정적 손실을 피할 수 있습니다.<br><br>
                           3) 법규 준수 : 법적/규제적 요구사항이 귀사와 고객사들에게 끼치는 영향을 이해할 수 있습니다.<br><br>
                           4) 향상된 리스크 관리 : 위험 관리 및 위기 상황에서 빠르게 회복하며 귀하의 평판을 보호할 수 있습니다.<br><br>
                           5) 사업 자격 증명 입증 : 인증받은 사업 군에 대한 독립적인 검증은 귀하의 브랜드를 향상시킵니다.<br><br> 
                           6) 더 많은 사업 조달 능력 : 조달 사양은 종종 공급 조건으로 인증이 필요하므로, 인증 획득과 함께 문이 열립니다.<br><br>
                           7) 국제 인정 : 귀하는 전 세계적으로 인정받고 평가될 것입니다.<br><br>
                           8) KS A ISO 22301 국내인증 취득을 통한 국제공신력 확보 및 대내외 이미지 제고<br><br>
                           9) BCMS 체계 구축으로 선도적인 재난안전관리 체계 및 문화정착 확산<br><br>
                           10) 주주가치보호 및 이해관계자의 기대충족으로 기업 가치 상승<br><br>
                           11) 향후 인증을 통한 초기시장 선점 및 저변 확대<br><br>
                           12) 재난 발생 시 효율적 대응 능력 확보<br><br>
                           13) 재난으로부터 조직의 경영체계 연속성 확보<br><br>
                        </span><br><br>
					</dd>
				</dl>			
			</li>

			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_03.jpg">
					</dt>
					<dd>
						<strong style="">IGC 인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                          &#10052; IGC는 비즈니스 연속성 관리 시스템에 대한 인증 서비스를 제공하고 있습니다. <br><br>
                          &#10052; IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                          &#10052; IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 미국의 인정기구인 IAS로부터 다양한 규격에 대해 인정받아 인증 서비스를 제공하고 있습니다. <br><br>
                          &#10052; IGC는 전 세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
                       </span><br><br>
					</dd>
				</dl>	
			</li>
		</ul>
	</section>
<br><br><br><br><br><br>

	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="text-align:justify;margin-right:10px;display:inline-block;">
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
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>