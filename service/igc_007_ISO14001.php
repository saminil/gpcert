<?php
	include_once('./_common.php');
$g5['title'] = '환경경영인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
		<h1><span>ISO </span> 14001</h1>
		<h2>환경경영시스템 인증</h2>		
		<p style="display:inline-block;text-align:justify;">
            
            <span>ISO</span> 14001:2015는 환경경영시스템(EMS)를 위한 국제 규격으로 환경경영시스템 구성 및 유지를 위한 요구사항을 명시한 주요 경영시스템 규격입니다. 한국 내 많은 기업들이 조직의 환경경영을 위해 인증을 받고 있으며, 전 세계적으로는 25만개 이상의 인증서가 발행되고 있습니다. 
            <br><br>
            
            <span>ISO</span> 14001은 환경경영시스템에 대한 원칙, 시스템 및 지원 기술에 관한 일반 가이드라인과 함께 환경경영시스템 수립, 시행, 유지 및 개선과 같은 이슈들을 다룹니다. 이는 귀사의 환경측면을 통제하고, 환경영향을 감소시키며, 법규 준수를 보장합니다.    
		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_04-01.jpg" alt="ISO 14001:2015 요구사항">
					</dt>
					<dd>
						<strong><span>ISO</span> 14001:2015 요구사항</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                      <span>ISO</span>14001:2015 환경 경영 시스템 요구사항<br>
                      <span>ISO</span>14001:2015은 <span>ISO</span> 9001:2015 등의 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                      <br><br>
                       </span><br><br>
 
                        <span>1.적용범위</span><br><br>
                        <span>2.인용표준</span><br><br>
                        <span>3.용어와 정의</span><br><br>
                        <span>4.조직 상황</span><br><br>
                        <span>5.리더십</span><br><br>
                        <span>6.기획</span><br><br>
                        <span>7.지원</span><br><br>
                        <span>8.운용</span><br><br>
                        <span>9.성과평가</span><br><br>
                        <span>10.개선</span><br><br>

					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_04-02.jpg"alt="ISO 14001:2015 인증 이익">
					</dt>
					<dd>
						<strong><span>ISO</span> 14001의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;fon">
                          거의 모든 사업이 <span>ISO</span> 14001 규격 인증 취득을 통해 이익을 얻을 수 있습니다. 인증은 모든 산업 또는 분야 내 조직에 상당한 이익을 제공하기에 충분하며, 관련 지속 가능한 실례를 수행하는 특정 기반을 제공합니다. ISO 14001 인증 취득 장점은 다음과 같습니다:
                        </span><br><br>
                       
                        <span style="text-align:justify;margin-right:10px;display:inline-block;fon"><span style="font-weight:bold;">1.환경관리 향상</span><br>
                          <span>ISO</span> 14001을 준수하는 환경경영시스템은 잠재적 영향 파악에 도움을 주며, 리스크를 최소화하기 위한 관리 및 조치를 수행합니다. <span>ISO</span> 14001은 자원활용 감소 및 귀사 사업의 전반적 효율성을 향상시키기 위해, 그리고 귀사 운영의 더 큰 역량을 최고화하기 위해 정량화 및 측정 가능한 도구를 제공합니다.</span><br><br>
                        
                        
                        <span style="text-align:justify;margin-right:10px;display:inline-block;fon"><span style="font-weight:bold;">2.사업 역량 증대</span><br>
                          최종고객은 종종 납품 조건으로 인증서를 요구합니다. 따라서, 인증 취득은 사업 확장 역량이 됩니다. 새로운 시장 부문으로 귀사의 사업을 확장하는 경우, 인증은 프로세스를 빈틈없이 만드는 가장 최고의 도구입니다.</span><br><br>
                        
                        <span style="text-align:justify;margin-right:10px;display:inline-block;fon"><span style="font-weight:bold;">3.증명된 사업 신뢰도 </span><br>
                          인정된 규격에 대한 독립적 심사는 많은 것을 보여주며, 귀사 브랜드를 향상시킵니다. <span>ISO</span> 14001을 준수하는 조직은 많은 시간과 노력이 듭니다. 바이어 및 기타 주주들은 이를 인식하고 누구와 새로 추진할지에 대한 의사결정을 할 때 이를 참고합니다.  </span><br><br>
                        
                        <span style="text-align:justify;margin-right:10px;display:inline-block;fon"><span style="font-weight:bold;">4.주주 관계 개선  </span><br>  
                          환경을 우선시하게 되면 사람들은 귀사에 긍정적으로 반응할 것입니다. <span>ISO</span> 14001 인증은 전 세계적으로 인정 받고 있습니다. 귀사의 사업을 다른 지역으로 확장하려고 하는 경우, 인증은 귀사가 책임을 다하기 위해 적극적 조치를 취하고 있다는 것을 잠재적 고객에게 보이기 위한 최선의 방법입니다.  </span><br><br>
                        
                        
                        <span style="text-align:justify;margin-right:10px;display:inline-block;fon"><span style="font-weight:bold;">5.운영 비용 감소</span><br>
                                    	
                          에너지 및 물 사용량 효율성 달성 및 폐기물 최소화는 비용 절감을 의미합니다.  </span><br><br>
                        
                        
                        
                        <span style="text-align:justify;margin-right:10px;display:inline-block;fon"><span style="font-weight:bold;">6.법규 준수</span><br>
                          법적/규제적 요구사항이 어떻게 귀사에 영향을 끼치는지 이해한다면, 법을 지키는 것이 더욱 쉽고 합리적일 것입니다. <span>ISO</span> 14001 또한 귀사가 미래 법적 규제들을 충족하도록 합니다. 이는 지속적으로 변화하는 법적 상황에 대해 매우 큰 장점입니다. </span><br><br>
					</dd>
				</dl>	
			</li>

		</ul>
	</section>
    <br><br><br><br>
    
    <!----IGC 역량 시작-------->
	<section class="partner_type2" style="font-size:1.3em;text-align:justify;margin-right:10px;display:inline-block;">
        <h2 class="con_arrow" style="font-size:0.7em;">
			<p>IGC 인증원의 역량</p>
		</h2>
		<span style="font-size:1.0em;text-align:justify;margin-right:10px;display:inline-block;fon">
		<li> <span>IGC</span>는 미국의 인정기구인 IAS로부터 <span>ISO</span> 14001에 대한 인정을 받아 환경경영시스템에 대한 인증 서비스를 제공하고 있습니다.</li> <br>
        <li> <span>IGC</span>의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.</li><br>
        <li> <span>IGC</span>는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 <span>ISO</span> 14001은 물론 품질 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.</li> <br>
        <li> <span>IGC</span>는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li><br>
		</span>
   </section>
   <!----IGC 역량 종료ㅗ-------->	
    
 <div style="height:100px;"></div>
    
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;">
        <h2 class="con_arrow" style="font-size:0.7em;">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
                  <ul>
                   	<li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
                   	<li><p><em><strong>02</strong></em><span>환경경영 인증</span></p></li>
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
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>