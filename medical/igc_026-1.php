<?php
	include_once('./_common.php');
$g5['title'] = '시험/전기전자';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	body{padding-top:0px; padding-bottom:50px;}
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
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type5 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type5:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type5 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type5 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type5 .vision_area h2.title:before{position:absolute; top:15px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #009999; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/clinicaltest_electricsafety_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/clinicaltest_electricsafety_02.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/clinicaltest_electricsafety_04.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/clinicaltest_electricsafety_03.jpg);}
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
    
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:50px 40px;line-height:auto;} /* 텍스트 내용 상하 */
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
     /* (주)아이지씨인증원 사업영역 CSS 시작  */
    .partner_type2 .con_area .txtArea ul li{margin-top:15px;}
    .partner_type2 .con_area .txtArea ul li:first-child{margin-top:0}
    .partner_type2 .con_area .txtArea ul li span{font-weight:700; margin-right:10px; }
    .partner_type2 .con_area .txtArea ul li p{display:inline-block; }
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
    /* (주)아이지씨인증원 사업영역 CSS 종료  */

	@media screen and (max-width:768px){
		
		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		/*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type5 .vision_area h2.title { font-size:1.5em; }
        .vision_type5 .vision_area span.stitle{font-size:1em; width:90%;}
        .vision_type5 .vision_area ul li {width:100%;}
        .vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
        .vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃 설정  */
	}
</style>

<div class="content_wrap">
 <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:10px;width:100%;color:"/>
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
    
	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> 전기 안전</span> | 시험</h1>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		<ul>
		   <li>   
             <h2>
               <span style="display:block;font-size:1.3em;text-align:left;color:#009999;"> <span style="display:block;font-size:0.2em;color:#009999;line-height:90px;height:30px;">&#9632; </span>
                 &nbsp; &nbsp; 전기 안전 개요
               </span> 
             </h2> 
           </li>
        </ul>
		<br>
          전기를 사용하는 제품의 안전성을 입증하는 것은 전 세계 모든 시장 진입 시 필수적으로 요구됩니다.<br><br>
          세계 최대 시장 중 하나인 유럽 시장에 진입하려는 전기/전자제품 제조업체는 시장 진입을 위해 자사의 제품의 안전성을 입증하여야 합니다.<br><br>
          유럽 지역에 수입되고 판매되는 많은 전기 및 전자 제품은 저전압 지침 요구사항을 준수해야 합니다.<br><br>
          CE 마크를 부착한 제품은 저전압 지침 및 적용되는 다른 지침 (EMC 지침 등)의 요구사항을 준수하고 있다고 간주되며 EC 회원국 시장에 법적으로 접근이 보장됩니다.<br><br>
		</h3>
	</section>
	
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">시험소 소개</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                     <span style="fojnt-weight;bold;color:#009999;">A Preventive controls qualified individual</span><br>
                      저희 IGC는 다년간의 인증 경험을 바탕으로 축적한 기술 및 노하우를 가지고 설립한 전기전자 시험소를 통해 고객사의 인증획득에 필요한 시험검사 업무를 지원하고 있습니다.<br><br>
                      다년간의 풍부한 경험과 고객 만족, 고객 중심의 마인드를 바탕으로 시험소 전 직원은 고객사의 요구사항을 달성할 수 있도록 필요한 서비스를 지원하고 있습니다.<br><br>
                      또한 저희 시험소는 국제표준인 ISO/IEC 17025 요구사항, 관련법규 등을 기본으로 하여 수립한 품질경영시스템을 준수함으로써 고객에게 최고 수준의 서비스와 신뢰성 있는 시험 성적서를 제공하며 지속적인 고객 요구사항 준수와 만족을 위해 노력하고 있습니다.<br>
					</span>
				</div>
			</li>
			<br>
          </ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">저전압 지침(LVD)란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;">
                      저전압지침(LVD, Low Voltage Directive)은 AC 50~1000V, DC 75~1500V 사이의 전압 규격으로 설계 및 사용되는 전기장비를 대상으로 합니다.<br><br>
                      
                      대부분의 다른 EU 지침과 마찬가지로 저전압 지침은 공표된 기술 표준에 명기된 상세한 기술 사양과 함께 전기 안전 (필수 요구사항)에 대한 폭넓은 목표를 제시합니다. 제조업체는 지침의 핵심 요구 사항 및 관련 표준의 기술 사양의 준수 여부를 시험하고 적합성 선언을 통해 적합성 준수를 입증하고 제품에 CE 마크를 부착할 수 있습니다.<br><br>
                      
                      전기제품 인증분야에서 위험 요소를 사전에 시험 및 검사함으로써 안전성을 확인하고 보증하기 위한 적용 요구사항으로 취급되는 안전규격은 통상적으로 Electrical Safety를 의미합니다. 이것은 예측 또는 예측하지 못한 상황에서 발생할 수 있는 위험요소(Hazard)로부터 인체 및 재산상의 상해나 손실을 예방하기 위한 것입니다. <br><br>
                      
                      의료기기와 같은 특정 범주의 전기 제품 및 완제품에 사용되는 전기 부품은 저전압 지침의 범위에서 제외됩니다.<br><br>
                      
                      2014년 2월 저전압 지침의 개정판 2014/35/EU가 공표되어 2016년 4월부터 전기 제품에 강제적으로 적용되고 있습니다. IGC 시험소는 2014/35/EU 지침에 따라 시험 성적서를 발행하고 있습니다.<br><br>
					</span>
				</div>
			</li>
			<br>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">전자파 적합성 지침(EMC)란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                      자파 적합성 지침(EMC, Electromagnetic Compatibility Directive)은 전자기기의 전자파 적합성을 평가하기 위한 지침으로 전자파를 발생시킬 수 있는 장비를 대상으로 외부로부터 전자기파 간섭에 대한 내성시험을 통해 전자기 장해가 적정 수준인지에 대하여 시험하여 적합성을 인증하는 것입니다.<br><br>
                      산업이 발전함에 따라 전기전자 장비의 사용이 급증하게 되었으며 이로 인해 기기들이 제한된 공간내에서 사용되면서 전자파로 인한 오작동 및 시스템의 기능에 문제가 생길 가능성이 높아지게 되었습니다. 이에 따라 기기가 주변환경에 대한 전자파 간섭의 허용 범위를 준수하는지와 함께 다른 제품에 의해 전자파의 영향을 받지 않는지를 시험하는 것이 필수적 사항이 되었습니다.<br><br>
                      2014년 2월 전자파 적합성 지침 2014/30/EU가 공표되어 2016년 4월부터 전기 제품에 강제적으로 적용되고 있습니다. IGC 시험소는 2014/30/EU 지침에 따라 시험 성적서를 발행하고 있습니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block; display: table-cell; vertical-align: middle;text-align:justify;">
                       IGC의 시험소는 인증에 필요한 시험부터 전기/전자제품에 대한 다양한 인증 취득까지의 과정을 One-Stop 서비스로 제공하고 있습니다.<br><br>
                       IGC의 축적된 노하우와 경쟁력 있는 전문가는 고객사를 위한 맞춤형 가이드를 제시함으로써 고객사 제품의 시장 진입과 수익률 극대화를 위해 노력하고 있습니다
					</span>
				</div>
			</li>
		</ul>
		</div>
	</section>
	
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:50px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
    
    <!----(주)아이지씨인증원 사업영역 시작-------->
	   <section class="partner_type2">
        <h2 class="con_arrow">
	      <p>우리가 제공하는 관련 서비스</p>
        </h2>
        <div class="con_box">
          <ul>
          	<li><p><em><strong>01</strong></em><span>CE LVD/EMC 인증</span></p></li>
          	<li><p><em><strong>02</strong></em><span>유라시아 인증</span></p></li>
          	<li><p><em><strong>03</strong></em><span>제품 등록 (CPNP, FDA)</span></p></li>
          	<li><p><em><strong>04</strong></em><span>시험 및 인증을 위한 기술 지원 서비스 제공</span></p></li>
          </ul>
        </div>
       </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>  
      
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>