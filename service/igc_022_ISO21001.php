<?php
	include_once('./_common.php');
$g5['title'] = '교육 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    /* *:lang(en) {} */ 
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
		<h1><span>ISO</span> 21001</h1>
		<h2>교육기관 경영시스템 인증</h2>		
		<p style="display:inline-block;text-align:justify;">
            ISO 21001은 모든 교육, 학습 또는 연구를 통해 역량 개발을 지원하는 조직에 적용할 수 있도록 고안되었습니다. 교육용 제품을 생산하거나 제조하는 조직은 ISO 21001이 적용되지 않습니다.<br><br>
            
            ISO 21001은 EOMS (Educational Organization Managements System)에 대한 요구 사항을 규정합니다. 
            조직은 학습자에게 지속적으로 지식을 제공, 공유 및 촉진하는 능력을 갖추어야 하며, 시스템 개선 프로세스를 포함하여 EOMS를 효과적으로 적용하여 학습자, 다른 고객 및 직원의 만족도를 높이는 것을 목표로 하여야 합니다.

		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/iso_21001_01.jpg" alt="iso 21001 표준구조">
					</dt>
					<dd>
						<strong><span>ISO</span> 21001:2018 요구사항</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                           ISO/IEC 20000-1은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가 및 개선의 10가지 항목으로 구성되어 있습니다.<br>
                           (인증 가이드는 ISO/IEC 20000-3을, 모범사례는 ISO/IEC 20000-5를 참조하십시오.)<br><br>
                           이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 서비스를 제공하는 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.<br>
                       </span><br><br>
                       
                        <span>
                           1.적용범위<br><br>
                           2.인용표준<br><br>
                           3.용어와 정의<br><br>
                           4.조직 상황<br><br>
                           5.리더십<br><br>
                           6.기획<br><br>
                           7.서비스경영시스템의 지원<br><br>
                           8.서비스경영시스템의 운용<br><br>
                           9.성과 평가<br><br>
                           10.개선
                        </span>
                        <br><br>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_21001_02.jpg" alt="iso 21001 인증 효과">
					</dt>
					<dd>
						<strong><span>ISO</span> 21001의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                          1) 방침(미션 및 비전 포함)과 목표 및 활동의 연계 향상<br><br>
                          2) 모든 사람에게 포용적이고 공평한 양질의 교육을 제공함으로써 사회적 책임 강화<br><br>
                          3) 모든 학습자, 특히 특수 교육 요구, 원격 학습자 및 평생 학습 기회가 있는 학습자에 대한 개인화 된 학습 및 효과적인 대응<br><br>
                          4) 효과 및 효율성을 입증하고 증가시키기 위한 일관된 프로세스 및 평가 도구<br><br>
                          5) 조직의 신뢰성 증가<br><br>
                          6) 교육 기관이 효과적인 교육 관리 관행에 대한 헌신을 보여줄 수 있는 수단<br><br>
                          7) 국제적 틀 내에서 지역, 국가, 공개, 독점 및 기타 표준의 조화<br><br>
                          </span>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_21001_03.jpg" alt="IGC인증원의 역량">
					</dt>
					<dd>
						<strong>IGC 인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                      IGC의 심사원은 교육과 관련 기술적 자격을 갖춘 전문가로서 ISO 21001 경영시스템의 구현 및 효과에 대한 철저하고 정직한 심사를 제공합니다.
                      또한 귀사의 비즈니스 요구에 부합하는 지식과 역량을 갖추고 있으며 효과적이고 철저한 심사를 제공합니다.
                       </span><br><br>
					</dd>
				</dl>	
			</li>
			
		</ul>
	</section>
<br><br><br><br><br><br>

	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="text-align:justify;margin-right:10px;display:inline-block;width:100%;">
        <h2 class="con_arrow" style="font-size:0.7em;">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box" style="">
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