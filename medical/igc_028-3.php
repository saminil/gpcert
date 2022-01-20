<?php
	include_once('./_common.php');
$g5['title'] = '시험/의료기기';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	/*.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; } */
    .vision_type5 .vision_area h2.title:before{position:absolute; top:15px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #009999; background:#ffff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/clinicaltest_medicalclinical_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/clinicaltest_medicalclinical_02.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/clinicaltest_medicalclinical_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/clinicaltest_medicalclinical_04.jpg);}
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
<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:10px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>

	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> 의료기기 시험</span></h1>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
        
        <ul>
		   <li>   
             <h2>
               <span style="display:block;font-size:1.3em;text-align:left;color:#009999;"> <span style="display:block;font-size:0.2em;color:#009999;line-height:90px;height:30px;">&#9632; </span>
                 &nbsp; &nbsp; 의료기기 시험 개요
               </span> 
             </h2> 
           </li>
        </ul>
		
		<br>
		모든 의료기기는 전기안전 시험을 거쳐야 합니다. 보통 많은 제조업체/설계자들이 1등급 품목, 즉 위험 등급이 낮은 제품들은 허가를 받지 않아도 되기 때문에 전기안전 규정도 지키지 않아도 된다고 잘못 생각하기 쉽지만 1등급 제품들도 전기안전 요구사항을 만족하여야 합니다.<br><br>
        대부분의 사용자들은 제품 출시 이전에 전기안전 시험을 의무화하고 있는 것이 좋은 일이라고 생각하고 있습니다. 바로 그 전기안전 시험의 표준이 되는 규격이 우리가 잘 아는 IEC60601-1입니다. 이제 전 세계 모든 국가의 규제당국이 IEC60601-1 표준의 제3판 규격에 의하여 적합성을 입증하도록 요구하고 있습니다. 중요한 점은 제3판 규격의 경우 위험 개념이 추가됨으로써 과거와 같이 시험방법에 따라 수행하기만 하면 적부가 확인되는 시험이 더 이상 아니라는 것입니다.<br>
		</h3>
	</section>
	
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">IEC 60601-1 안전 테스트</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                     전기 의료기기 제품 승인을 위해 장비가 IEC/EN 60601 안전 표준을 준수하는 시험으로, 기본 안전 및 필수 성능을 입증하기위한 제품 안전 요구 사항 준수에 의거한 전기 의료 기기 시험입니다. <br><br>
                     모든 의료 기기는 일반적으로 승인된 실험실의 시험 결과를 필요로 하고 엄격한 지역 승인 절차에 의해 제어됩니다. 전기 의료 기기와 관련하여 이러한 요구 사항은 국제적으로 IEC 60601 표준 규격의 기준에 따라 문서화되어야 합니다.<br><br>
                     현재 IEC 60601-1 제3판은 전 세계 대부분의 규제 체계에서 전기 의료 기기의 승인 절차를 위한 기반입니다. 유럽 연합의 EN 60601 표준 규격과 동일한 요구조건으로 인해 IEC는 의료 기기 지침 MDD(Medical Device Directive) 93/42/EEC에 대한 적합성을 정의합니다.<br><br>
                     저희 시험소는 유럽 및 국제 표준은 전기 의료 기기의 평가를 위해 일반적으로 허용되는 시험 방법, 시험 한계 및 시험 수준을 제공하며, 60601-1 시리즈 표준규격에 따라 모든 제품 안전 테스트를 제공합니다. <br><br>
                     IGC 시험소는 전기 의료 기기의 IEC/EN 60601 안전 표준 규격에 따라 시험을 수행하고 전기 의료 기기에 대한 제품 안전 인증을 얻는 데 사용할 수 있는 IEC 국제 표준에 대한 시험 성적서를 발행합니다. <br><br>
					</span>
				</div>
			</li>
			<br>
          </ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">IGC 시험소의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>            
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                       ✿ IGC는 미국의 인정기구인 IAS로부터 경영시스템 분야의 인정을 받아 경영시스템 인증 서비스를 제공하고 있습니다.<br><br>
                       ✿ IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                       ✿ IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
                       <br>
                       저희 IGC는 고객감동의 가치아래 <sapn style="fot-weight:bold;color:red;">17년 이상의 기술</sapn>, Know-How 및 풍부한 인증 경험을 바탕으로 고객사의 인증획득에 필요한 시험검사 업무를 지원하고자 시험소를 운영하고 있습니다. 의료기기, 전기전자 제품 및 기계류에 대한 시험업무를 시작으로 지속적인 발전을 달성하여 식품에 대한 시험 업무로 영역을 확대하였습니다.<br><br>
                       앞으로도 저희 IGC는 신뢰할 수 있는 전문적인 시험 및 인증 기관으로서, 도전과 연구 개발하는 자세로 변화에 능동적으로 대응하며 초심을 잃지 않고 노력하여 고객사의 신뢰와 믿음으로 함께 성장해가도록 노력하겠습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
	</section>
    
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:0px;width:100%;color:">
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