<?php
	include_once('./_common.php');
$g5['title'] = '사회적 책임 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	<section class="business_type5" class="area">
		<h1><span>SA 8000</span> 인증</h1>
        <h2>사회적 책임 인증</h2>		
		<p style="display:inline-block;text-align:justify;">
            최근 전 세계적으로 기업 활동과 정책이 윤리적이고 사회 규범적 영향을 고려하는 것에 관한 관심과 개발도상국과 같은 제품이 생산되는 장소 및 작업 환경에 관한 관심이 높아지고 있습니다. 이러한 사회적 문제에 관심이 있는 소비자들 또한 증가하고 있습니다.<br><br>
            직원을 포함한 비정부 기구, 투자 분석가 및 다른 이해 관계자들은 공정하고 공평한 작업 환경과 투명한 업무 관행을 보장하기 위하여 점점 더 기업의 노력을 평가하고 있습니다. 이러한 환경은 기업이 사회적 책임을 보이기 위해 더 많이 요청될 것임을 의미합니다.
<br>
		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/sa8000_01.png">
					</dt>
					<dd>
						<strong><span>SA 8000 인증이란</span> </strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                          SA 8000 인증은 강제 및 아동 노동, 직장 내 건강 및 안전, 집회의 자유 및 단체 협상, 차별, 징계 관행, 업무 시간, 상여 및 경영 시스템을 비롯한 제반 문제를 다룹니다.<br>
                          SA 8000은 전 세계적으로 작업장 표준을 세울 뿐만 아니라 국제 노동 기구, 세계 인권 선언 및 유엔 아동 권리 협약을 포함한 기존 국제 협정을 포괄합니다.<br><br>
                          이 표준은 1989년에 경제 최우선 협의회(CEP, Council on Economic Priorities) 산하 기관인 사회적 책임 국제기구(SAI, Social Accountability International)에 의하여 개발되었으며, 세계적으로 가장 인정받는 독립적인 작업장 표준으로 간주되고 있습니다. 작업 환경의 개선을 위한 표준으로 범위, 산업 및 장소에 관계없이 전 세계 모든 규모의 회사에 적용될 수 있습니다.<br><br>
                          SA8000은 국제 노동 기구 (ILO)의 세계 인권 선언과 유엔 (UN)의 아동의 권리에 관한 국제 협정을 기반으로 합니다. 이 표준은 아동 노동, 강제 노동, 보건 및 안전, 결사의 자유 및 단체 교섭권, 차별, 징계 관행, 근로 시간, 보수 및 공급망 모니터링 시스템과 같은 경영 시스템, 외부 커뮤니케이션 및 기타 정책 등과 같은 다양한 내용을 포함하고 있습니다.<br>
                        </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dd>
						<strong>SA 8000 요구사항</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                       SA 8000 표준은 기존 ISO 표준과 동일하게 ISO 17021-1 표준을 기반으로 하며, High level structure가 아닌 독자적인 형태로 구성되어 있습니다.<br><br>
                       SA 8000의 목적은 UN 인권선언, ILO 및 기타 국제 노동법 등에 따라 심사 가능한 표준을 제공하여 조직의 모든 직원에게 권한을 부여하고 보호하는 것입니다. <br><br>
                       SA 8000의 다음 9요소에 대한 요구사항은 올바른 구현, 모니터링 및 시행의 핵심이 됩니다. 이것에 대한 경영시스템은 조직이 SA 8000을 완벽하고 지속적으로 준수하면서 개선할 수 있도록 하며 사회적 성과의 지표가 됩니다.<br><br>
                        </span><br><br>
                        <span>SA 8000의 요소는 다음과 같습니다:</span><br><br>
                          1. 아동 근로자<br>
                          2. 강제 노동<br>
                          3. 건강과 안전<br>
                          4. 노동 조합 및 단체 교섭권<br>
                          5. 차별<br> 
                          6. 근무시간<br>
                          7. 징계 사례<br>
                          8. 보수<br>
                          9. 경영시스템<br>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dd>
						<strong>SA 8000 인증 프로세스</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                           <img src="./image/sa8000_04.png" alt="SA 8000 인증 프로세스" style="display:block;width:90%;"> <br><br>
                       IGC의 SA 8000 인증 프로세스는 상기 그림과 같습니다.<br><br>
                        </span><br><br>
                        <span>SA 8000 인증을 위해서는 다음 사항을 준비하여야 합니다.</span><br><br>
                          1. 요구 사항에 대해 숙지해야 합니다. 여기에는 법적 요구 사항을 관리하고 기존 관행을 SA8000 표준의 요구 사항과 비교하는 것이 포함됩니다.<br>
                          2. 비교가 끝난 후 차이를 줄이며 표준의 요구 사항을 구현할 수 있습니다.<br>
                          3. 강제 이행 절차가 만들어 지고 기업의 기존 경영 시스템과 통합되어야 합니다.<br>
                          4. 내부 모니터링 프로세스를 적용하고 완료한 후 인증 절차를 시작할 수 있습니다.<br>
					</dd>
				</dl>			
			</li>

    		<li>
				<dl>
					<dt>
						<img src="./image/sa8000_02.png">
					</dt>
					<dd>
						<strong><span>SA 8000의 중요성</span> </strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                          SA 8000 인증 채택은 기업이 사업체 운영으로 인한 사회적 영향뿐만 아니라 직원, 파트너 및 공급자가 운영하는 조건을 고려하고 있습니다. <br>
                          SA 8000은 규모, 지리적 위치 또는 산업 분야와 상관없이 모든 유형의 조직에 보편적으로 적용할 수 있습니다.<br><br>
                          SA8000은 자발적인 사회적 책임 준수 표준으로 인도적 작업 환경과 책임 생산에 대한 기업의 의지를 보여줍니다. 이 표준을 준수함으로써 귀사가 얻을 수 있는 혜택은 다음과 같습니다.<br><br>
                          1. 기업과 노동자 간의 고용 관계가 국제 규범에 따라 공정하고 적법하게 운영함을 증명<br>
                          2. 공급망의 관리 및 성능을 개선합니다.<br>
                          3. 글로벌 표준과의 적합성을 보장하고, 의무 불이행, 공개 및 소송 발생 가능성을 줄입니다.<br>
                          4. 해외 계약에 입찰하거나 현지에서 새로운 비즈니스 수용을 위한 확장 시 적절한 사회적 책임을 입증합니다.<br>
                        </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/sa8000_03.png">
					</dt>
					<dd>
						<strong><span>SA 8000의 기대효과</span> </strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                          그림과 같이 SA8000 인증은 중국, 인도, 이탈리아 등 여러 국가에서 수요가 높으며, 개발도상국가에서도 그 중요성이 부각되고 있습니다.<br> 
                          섬유 및 의류 분야의 기업들이 인증을 받고 있으며 건축, 식품, 소비재, 인프라 등 다양한 분야의 기업들 또한 인증을 취득하고 있습니다.<br><br>
                          이 외의 SA 8000 인증에 대한 기대효과는 다음과 같습니다.<br><br>
                          1. 기업과 노동자 간의 고용 관계가 국제 규범에 따라 공정하고 적법하게 운영함을 증명 가능<br>
                          2. 기업의 사회적 책임에 대한 국내외적인 요구에 대한 대응 가능<br>
                          3. 협력업체, 공급업체, 하청업체 등에 대한 사회적 책임 준수 증명 가능<br>
                          4. 사회적 문제들에 대한 시스템적인 접근 가능<br>
                        </span>
					</dd>
				</dl>
			</li>

			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_03.jpg">
					</dt>
					<dd>
						<strong>IGC 인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                         IGC를 통하여 기업의 유지관리 및 적용할 수 있는 국제적인 인증 표준인 SA 8000을 검증받고 고객의 기대치를 충족하고 귀사의 성능을 증진할 수 있습니다.<br><br>
                          
                         당사의 숙련된 심사원들과 협력하여 가장 세계적으로 인정받는 작업장 표준을 구현함으로써 계약 입찰 및 조직 확장 시 사회적 책임을 입증할 수 있게 됩니다.<br><br>
                         
                         또한, IGC와의 협력을 통해 인증을 획득하면 성과 프로세스를 개선하고, 유용한 재능과 일관되고 적합한 공급망 및 보다 지속 가능한 고객 관계를 증진하며 수익성 높은 경쟁력을 제공할 수 있습니다.
                       </span><br><br>

					</dd>
				</dl>	
			</li>
			
		</ul>
	</section>
<br><br>

	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="text-align:justify;margin-right:10px;display:inline-block;width:100%">
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
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>