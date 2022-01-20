<?php
	include_once('./_common.php');
$g5['title'] = '연수기관 개요';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다. 
	*/ 
?>
<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:0px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
    
    /* 신규 테이블 삽입   */
    table{width:80%;min-width:240px;border: 1px solid #444444;overflow-x: auto;}
    th,td{border: 1px solid #444444;font-size:100%;padding:20px;}

    /*심사원의 종류*/
    .txtBox00, .txtBox01, .txtBox02, .txtBox03, .txtBox04 { 
        border-width: 2px; 
        padding: 12px; 
        margin:20px;
        word-break: break-all; 
        width:250px;
        text-align:center;
        float:left;
        border-radius:15px;
    } 
    .txtBox00 { background-color:LightGray;} 
    .txtBox01 { background-color:#e0ecf3;} 
    .txtBox02 { background-color:#99ffff;} 
    .txtBox03 { clear:both;background-color:#ffcc99;} 
    .txtBox04 { background-color:#ffcccc;}
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding-left:10px;}
    td {font-size:96%;padding-left:10px;}
    
</style>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	.fc_pointer {color:#ff9900; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.business_type2{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type2:after{content:""; display:block; clear:both;}
	.business_type2 .business_info { width:100%; background:#fff; margin-bottom:80px; }
	.business_type2 .business_info:after{content:""; display:block; clear:both;}
	.business_type2 .business_info ul{ padding:0; margin:0;}
	.business_type2 .business_info ul li{ padding:0; margin:0;}
	.business_type2 .business_info ul li.left_box { float:left; width:500px; height:500px; overflow:hidden; }/* 컨텐츠 좌측 이미지  */
	.business_type2 .business_info ul li.left_box img{ width:90%; height:100%; }
	.business_type2 .business_info ul li.right_box{position:relative; float:right; width:45%; height:auto;}/* 컨텐츠 우측 텍스트  */
	.business_type2 .business_info ul li.right_box .txt03{ position:absolute; left:0; bottom:0; width:100%; border-top:1px solid #ddd; font-size:0.9em; color:#555; line-height:1.5em; text-transform: uppercase; background:#f8f8f8; overflow:hidden;}
	.business_type2 .business_info ul li.right_box .txt03 span {display:block; padding:20px 25px; height:100px; }
	.business_type2 .txt_area { width:100%; padding-top:40px; border-top:2px solid #000; }
	.business_type2 .txt_area:after{content:""; display:block; clear:both;}
	.business_type2 .txt_area .txt01 { float:left; width:100%; word-break: keep-all; }
	.business_type2 .txt_area .txt01 p { padding:0; margin:0; margin-bottom:15px; padding:0;}
	.business_type2 .txt_area .txt01 span.tit { display:block; font-size:2.2em; color:#000; font-weight:700; line-height:1.2em;  }
	.business_type2 .txt_area .txt01 span.txt { display:block; font-size:1.15em; color:#333; font-weight:400; line-height:1.4em; }
	.business_type2 .txt_area .txt02 { float:left; width:100%; margin-top:20px;}
	.business_type2 .txt_area .txt02 ul {margin:0; padding:0; }
	.business_type2 .txt_area .txt02 ul li { position:relative; color:#555; font-weight:400; line-height:1.5em; list-style:none; padding-left:3%; margin-bottom:5px;}
	.business_type2 .txt_area .txt02 ul li:before {position:absolute; top:8px; left:0; content:""; display:inline-block; width:4px; height:4px; background:#555; margin-right:10px; vertical-align:middle;}
	.business_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.business_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.business_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.business_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}
	.business_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.business_type2 .con_box:after{content:""; display:block; clear:both;}
	.business_type2 .con_box ul { padding:0; margin:0; }
	.business_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.business_type2 .con_box ul li p{display:table; width:100%; }
	.business_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.business_type2 .con_box ul li p > em{ width:30px; }
	.business_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.business_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    
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
		.s_tit{font-size:1.2em;}
		.business_type2 .business_info{margin-bottom:0px;}
		.business_type2 .business_info ul li.left_box { width:100%; height:300px;  }
		.business_type2 .business_info ul li.right_box{ width:100%; }
		.business_type2 .business_info ul li.right_box .txt03 {position:relative !important; margin-top:40px;}
		.business_type2 .business_info ul li.right_box .txt03 span {height:auto;}
		.business_type2 .txt_area { width:90%; margin:0 auto; border-top:0;}
		.business_type2 .txt_area .txt01 span.tit {font-size:1.85em;}
		.business_type2 .con_arrow{width:95%; margin:0 auto;}
		.business_type2 .con_box{width:95%; margin:0 auto;}
	}

	@media screen and (max-width:480px){
		.business_type2 .con_arrow p{ font-size:1.5em; margin-top:30px;}
		.business_type2 .con_box ul li { width:100%; }
	}
</style>

<div class="content_wrap">
	<section class="page_title">
	<hr style="border-top: 15px solid #ff9900;;display:inline-block;margin-bottom:0px;margin-top:50px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
	
		<h1 class="sub_tit"><span class="fc_pointer">연수기관</span> 개요</h1>
		
		<br><br>
		<h2 class="sub_txt" style="color:#ff9900;text-align:left;font-size:1.6em;">연수기관이란?</h2>
		다양한 산업분야에 종사하는 모든 인원들에게 산업분야에 적용되는 표준에 근거하여 전문 인력 양성을 위한 교육 서비스를 제공하는 기관을 의미합니다.<br><br>
        IPC (International Personnel Certification Association)는 IPC의 활동분야 (개인인증 및 연수기관 지정)에 대하여 IAF (International Accreditation Forum)와 MLA를 체결하였고 IPC의 정회원인 국제 개인인증기관 GPC(Global Personnel Certification)은 IAF MLA를 통해 연수기관 지정에 대한 업무를 수행하고 있습니다.<br><br>
        
            <h2 style="margin:0 auto; height:auto;resize:both;max-width:300px;">
              <img src="images/traininginstitutions_01.jpg" alt="연수기관 개요">
            </h2>
        <br><br>
        이에 IGC는 GPC로부터 공식 연수기관 지정을 받아 다양한 산업분야에 대해 교육서비스를 제공하고 있습니다. IGC가 제공하는 교육서비스는 국내는 물론 전 세계 어디서나 동일하게 인정받을 수 있는 국제적인 서비스로 높은 신뢰성을 확보하고 있습니다.
        <br><br>
	</section>

	<section class="business_type2">
		<div class="business_info">
		<ul>
			<li class="left_box"><img src="images/traininginstitutions_02.jpg" alt="연수기관이란-IGC인증원 교육프로그램"></li>
			<li class="right_box">
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit" style="color:#ff9900;">IGC 교육 분야</span></p>
						<p><span class="txt">IGC는 다양한 인증스킴 확보를 토대로 다음과 같은 다양한 서비스의 제공이 가능합니다.</span></p>
					</div>
					<div class="txt02">
					<ul style="list-style:none;padding-left:-10px;">
                      1. ISO 경영시스템 심사원/선임심사원/내부심사원 양성 교육<br><br>
                      2. FSSC 22000 교육 (FSSC 본사 공인 교육기관)<br><br>
                      3. FDA, FSMA 교육 (FSVP, PCQI)<br><br>
                      4. 전기 전자 시험 교육 <br><br>
                      5. 식품 영양 시험 교육 (화학, 생물학적)<br><br>
                      6. CE/MDR 교육<br><br>
                      7. ISO/IEC 17021 교육<br><br>
                      8. ISO/IEC 17025 교육<br><br>
                      9. ISO 19011 교육<br>
					</ul>
					</div>
				</div>
			</li>
		</ul>
		<br>
		</div>
		
		<span style="display:block;margin-top:15%;"></span>
		
		<div class="business_info">
		<ul>
			<li class="left_box"><img src="images/traininginstitutions_03.jpg" alt="연수기관이란-IGC인증원 교육프로그램"></li>
			<li class="right_box">
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit" style="color:#ff9900;">협력기관 GPC의 역량</span></p>
						<p><span class="txt">GPC는 다양한 인증스킴 확보를 토대로 다음과 같은 다양한 서비스의 제공이 가능합니다.</span></p>
					</div>
					<div class="txt02">
					<ul style="list-style:none;padding-left:-10px;">
                       &#10057; GPC는 ISO/IEC 17024에 의거하여 미국에 소재한 International Accreditation Service (IAS)로부터 인정받은 개인의 자격을 인증해주는 국제적인 개인인증 기관입니다.<br><br>
                       &#10057; 개인인증은 적용되는 표준에 근거하여 능력의 적합성을 평가한 이후 인증서를 발행합니다.<br><br>
                       &#10057; IAF 산하의 지역기구인 EA (유럽인정기관협력기구), APAC (유럽인정기관협력기구)가 개인인증에 대한 MLA가 체결된 상태이며 나머지 지역기구인 IAAC (미주지역인정기관협력기구)까지 MLA 체결 시 모든 개인자격 인증 또한 IAF 로고가 적용된 개인인증서를 발행할 수 있도록 요청할 예정입니다.<br><br>
                       &#10057; GPC는 다양한 인증스킴 확보를 통해 개인의 자격을 위한 다양한 서비스를 제공함으로써 수준 높은 전문인력을 양성하기 위한 지속적인 노력을 할 것입니다.
					</ul>
					</div>
				</div>
			</li>
		</ul>
		<br>
		</div>
    
	<!----(주)아이지씨인증원 사업영역 시작-------->
    <section class="partner_type2">
        <h2 class="con_arrow">
    	<p>우리가 제공하는 관련 서비스</p>
        </h2>
            <div class="con_box">
              <ul>
              	<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
              	<li><p><em><strong>02</strong></em><span>시험</span></p></li>
              	<li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
              	<li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
              	<li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
              	<li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
              </ul>
            </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------> 
	</section>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>