<?php
	include_once('./_common.php');
$g5['title'] = '고객만족 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 10002</a></li>
			<li><a href="javascript:;">ISO 10004</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
	<div class="tab_con">
		
		<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
<article style="display:block;">
	
	<section class="business_type5" class="area">
		<h1><span>ISO</span> 10002</h1>
		<h2>고객만족 경영시스템 지침</h2>		
		<p style="text-align:justify;">
          ISO 10002는 전자상거래를 포함한 모든 유형의 상업적 또는 비상업적 활동에 대하여 기획, 설계, 운영, 유지 및 개선을 포함한 조직 내의 제품 관련 불만처리 프로세스에 대한 지침을 제공합니다. 그리고 기술된 불만처리 프로세스를 전체 품질경영시스템 중 하나의 프로세스로 활용하는 것도 적절합니다.<br><br>
          
          효과적이고 효율적인 불만처리 프로세스는 제품을 공급하는 조직과 그 제품을 받는 이들 모두의 요구를 반영합니다. 또한, 불만처리 프로세스를 통해 얻은 정보는 제품 및 프로세스의 개선을 이끌 수 있고 적절하게 불만이 처리된 경우에는 조직의 규모, 지역 및 산업 분야와 관계없이 조직의 명성이 높아질 수 있습니다.<br><br>
          
          이와 관련된 국제적인 표준은 일관된 불만 처리에 대한 확신을 주기 때문에 국제 시장에서 이 표준의 가치는 점점 높아지고 있습니다.
		</p>
		<br><br><br><br>
		<ul>
		    <li>
				<dl>
					<dt>
						<img src="./image/iso_10002_03.jpg" alt="ISO 1002 규격의 요구사항">
					</dt>
					<dd>
						<strong><span>ISO</span> 10002:2014 요구사항</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                      <br>
                         1. 적용범위<br><br>
                         2. 인용표준<br><br>
                         3. 용어와 정의<br><br>
                         4. 불만처리 기본 원칙<br><br>
                         5. 불만처리의 체제 및 구조<br><br>
                         6. 기획 및 설계<br><br>
                         7. 불만처리 프로세스의 운영<br><br>
                         8. 유지 및 개선
                        </span>
					</dd>
				</dl>	
			</li>
		
			<li>
				<dl>
					<dt>
						<img src="./image/iso_10002_01.jpg" alt="ISO 1002 도입의 필요성">
					</dt>
					<br>
					<dd>
						<strong><span>ISO</span> 10002의 중요성</strong>
						<span style="text-align:justify;">
                       <br><br>
                         ❅ 시장개방에 따른 기업들의 무한경쟁 상황 하에서 생존 및 발전을 위한 경쟁력 제고의 필요성 인식<br><br>
                         ❅ 고객 서비스 개선을 통한 기존 고객의 이탈방지<br><br>
                         ❅ 고객 수준의 향상과 소비자 권리의식의 증대<br><br>
                         ❅ 상품 및 서비스 다양화에 따른 고객 문의에 대한 응대<br><br>
                         ❅ 고객과의 관계 개선<br><br>
                         ❅ 고객 관점의 만족도 향상<br><br>
                         ❅ 고객 상담원 및 영업사원의 중요성 대두<br><br>
                         ❅ 공공기관의 고객만족도 조사 강화<br><br>
                         ❅ 제조사의 제조물 책임에 따른 대응능력 강화<br><br>
                        </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_10002_02.jpg" alt="ISO 10002의 기대효과">
					</dt>
					<dd>
						<strong><span>ISO</span>10002의 기대효과</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                        
                        <br><br>          
                         &#10054;  공개적이며 신속히 대응하는 불만처리 프로세스를 불만제기자에게 제공<br><br>
                         &#10054;  일관성 있고 체계적이며 신속히 대응하는 방식으로 불만을 해결하여 불만제기자 및 조직이 만족할 수 있도록 하는 조직의 능력을 증진<br><br>
                         &#10054;  동향 파악, 불만의 원인 제거 및 조직의 운영 개선에 대한 조직의 능력을 증진<br><br>
                         &#10054;  불만 해결을 위한 고객중심 접근방법을 조직이 수립하도록 하고, 고객업무에 대한 관련 인원의 숙련도가 향상되도록 권장<br><br>
                         &#10054;  불만처리 프로세스의 지속적인 검토 및 분석, 불만 해결 그리고 프로세스 개선에 대한 근거를 제공<br><br>
                         </span>
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
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
	
</article><!--+++++ /컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->	
	


<article><!--+++++ 컨텐츠 02 +++++-->	

<!-----------http://igcert.net/theme/rt_igcert/manage/igc_006.php에서 이 부분으로 바로 연결 시작------------>
<div id="ISO10004"><!----탭메뉴 직접 이동 시작--------->

<section class="business_type5" class="area">
   
    
		<h1><span>ISO</span> 10004</h1>
		<h2>고객만족 경영시스템 지침</h2>	
		
		<br>
		<ul>	
		<!------------strong style="font-size:2.0em;"><span>ISO</span> 10004의 개요</strong------------>	
		<p style="text-align:justify;">
          ISO 10004는 조직에 고객만족도를 모니터링하고 측정하기 위한 효과적인 절차를 수립하는 데 도움을 주는 가이드를 제공합니다. 모든 규모 및 산업 분야에 대한 적용을 목표로 합니다. 이 규격을 적용함으로써 얻어질 수 있는 많은 이득 중에 중요한 부분은, 고객과의 관계 개선을 위한 고객의 불평, 고객 만족, 고객 중심, 개인 동기부여의 해결책을 확인할 수 있습니다.<br><br>
       
          특히 공공 또는 민간 조직으로부터 제품이나 서비스를 받는 개인이나 조직의 만족도를 정확하게 파악하고 이에 대해 적절한 대응을 통해 조직이 발전해 나가도록 하는 것이 이 표준의 주안점입니다.
		</p>
		</ul>
		
		<br><br>
		
		<ul>
		
		    <li>
				<dl>
					<dt>
						<img src="./image/iso_10002_03.jpg" alt="ISO 1002 규격의 요구사항">
					</dt>
					<dd>
						<strong><span>ISO </span>10004:2018 요구사항</strong>
						<span style="text-align:justify;display:inline-block;padding-right:15px;">
                      <br><br>
                         1.	적용범위<br><br>
                         2.	인용표준<br><br>
                         3.	용어와 정의<br><br>
                         4.	컨셉과 안내 원리<br><br>
                         5.	고객 만족도 모니터링 및 측정을 위한 프레임워크<br><br>
                         6.	계획<br><br>
                         7.	운영<br><br>
                         8.	유지관리 및 개선
                        </span>
					</dd>
				</dl>	
			</li>
		
		
			<li>
				<dl>
					<dt style="padding:10px;">
						<img src="./image/iso10004_01.jpg" alt="ISO 10004의 중요성">
					</dt>
		
					<dd style="padding-bottom:10px;padding-left:0px;">
						<strong><span>ISO</span> 10004의 중요성</strong>
						<span style="text-align:justify;display:inline-block;padding-right:25px;">
                        ISO 10004는 고객의 기대치를 상회하고자 하는 어떠한 조직에도 적절하며, 그 조직이 개인적 성격, 공공의 성격 혹은 자발적인 성향이 있던 상관없이, 모든 형태와 규모의 다양한 산업 분야에 도 적용이 가능한 가장 기본적인 요구조건입니다.<br><br>
                        
                        고객 만족은 조직(기업)으로부터 공급된 제품에 대한 고객의 기대치와 고객이 느끼는 인식의 차이에 의하여 결정됩니다. 고객 만족을 달성하기 위하여, 기업(조직)은 최우선으로 고객의 기댓값을 이해해야 합니다. 공급된 제품, 고객의 기대심리를 만족하는 제품의 정도가 고객 만족의 정도를 결정합니다. 전달된 제품의 품질에 대한 조직의 관점과 고객의 인식 사이에 특징이 있는 것이 중요합니다. 왜냐하면, 이 특징이 차후에 고객 만족 정도를 결정하기 때문입니다.<br><br>
                    
                        <span style="font-weight:bold;">&#10017; 고객만족 달성을 위한 조직의 수행항목</span><br><br>
                        &nbsp; &nbsp;❆고객의 기대를 식별 및 파악<br><br>
                        &nbsp; &nbsp;❆고객 만족 정보를 수집<br><br>
                        &nbsp; &nbsp;❆고객 만족 정보를 분석<br><br>
                        &nbsp; &nbsp;❆고객 만족 향상을 위한 의견의 제시<br><br>
                        &nbsp; &nbsp;❆고객 만족의 진행 상태에 대한 관리 감독<br><br>
                        </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso10004_02.jpg" alt="ISO 10004의 효과">
					</dt>
					<dd>
						<strong><span>ISO</span> 10004의 기대효과</strong>
						<span style="text-align:justify;display:inline-block;padding-right:15px;"><br>
                          &#10054; 새로운 기대에 대한 정보 획득<br><br>
                          &#10054; 불만과 조직의 만족에 대한 불만 해결<br><br>
                          &#10054; 고객의 경향을 파악하고 그로 인하여 불만족 사항의 원인 제거<br><br>
                          &#10054; 불만사항 해결에 관한 고객 중심 접근<br><br>
                          &#10054; 고객과 직원들의 고객 대응에 따른 능력 향상<br><br>
                          &#10054; 불만처리 절차에 대한 지속적인 검토 및 분석에 관한 토대 확립
                        </span>
					</dd>
				</dl>	
			</li>
		</ul>
	</section>
<br><br>
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
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
    
</div><!----탭메뉴 직접 이동 종료--------->		
</article><!--+++++ /컨텐츠 02 시작  +++++-->				
				
 </div> <!----class="tab_con------>
</div> <!-----div class="content_wrap------>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>