<?php
	include_once('./_common.php');
$g5['title'] = '시험/건축자재';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/clinicaltest_construction_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/clinicaltest_construction_02.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/clinicaltest_construction_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/clinicaltest_construction_04.jpg);}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background-image:url(images/clinicaltest_construction_05.jpg);}
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
        .vision_type5 .vision_area span.stitle{font-size:1em; width:100%;}
        .vision_type5 .vision_area ul li {width:100%;}
        .vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */
	}
</style>

<div class="content_wrap">
<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:10px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;">건축자재 인증시험</span></h1>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		
		<ul>
		   <li>   
             <h2>
               <span style="display:block;font-size:1.3em;text-align:left;color:#009999;"> <span style="display:block;font-size:0.2em;color:#009999;line-height:90px;height:30px;">&#9632; </span>
                 &nbsp; &nbsp; 건축자재 인증 시험 개요
               </span> 
             </h2> 
           </li>
        </ul>
		
		<br>
          경쟁이 치열한 건축자재 산업에서 제조업체와 공급업체는 제품의 품질과 가격에 균형을 맞추는 동시에 국내 및 국제 건축 규격 및 법률을 준수하여 법률적인 위험을 피하고 건설 공기를 단축하여 프로젝트 지연을 예방해야 합니다.<br><br>
          저희 IGC는 여러 수출 시장의 다양한 요구사항을 만족할 수 있는 원스톱 서비스를 제공하고 있습니다.
		</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">건축자재 인증 시험이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                       CPR(Construction products regulation(EU) No305/2013)에 따라 건축자재 제조업체는 유럽표준(hEN)또는 유럽 기술평가(ETA)가 적용되는 제품에 CE 마크를 적용해야 합니다. <br><br>
                       
                       건축자재 인증 시험이란, 건물 및 토목공사를 포함하는 건축물의 영구적인 일부분을 구성하는 모든 제품을 의미합니다. <br><br> 
                       
                       건축자재 품목에는 환기 구조 설비, 플라스틱 연도, 천장복사 냉난방 패널, 문, 창문관련 제품 및 단열재류, 바닥재류, 시멘트류, 모르타르, 타일류, 접착제류, 회전문, 화재감지기류, 닥트, 밸브 및 캡, 파이프, 누수방지설비, 탱크, 목재, 골재 및 충진재, 구조용 베어링 토목 섬유등 건물 및 토목공사 목적물을 포함하는 모든 제품을 포함합니다.<br>
					</span>
				</div>
			</li>
			<br>
          </ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">건축자재 인증 시험 종류</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:15px;">
                       1) 벽체 시험 및 인증<br><br>
                       2) 지붕체 및 보행데그 시험<br><br>
                       3) 내부 표면재 시험 및 인증<br><br>
                       4) 배관 제품 시험<br><br>
                       5) 내후성 및 시란트 시험<br><br>
                       6) 창문과 문 시험<br><br>
					</span>
				</div>
			</li>
			<br>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">건축자재 인증의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                      유럽경제지역(EEA)내의 모든 건축 제품은 EU 건축자재 규정을 준수해야 합니다. 이 법은 유럽에서 거래 또는 판매되는 모든 제품의 경우 해당 제품에 유럽조화규격이 있을 때 CE 마크를 부착해야 한다고 규정하고 있습니다. <br><br>
                      이 CE마크는 반드시 제품이 모든 최종 용도에 적합함을 의미하지는 않지만 제조업체에서 제조할 때 해당 제품이 성능 선언(DoP)과 일치함을 나타냅니다.<br><br>
                      또한 CE 마크가 있는 건축 제품은 EEA 전체에서 거래할 수 있습니다.
                      <br><br>
                      <img src="images/ce-EEA.png" alt="CE 마크가 있는 건축 제품은 EEA 전체에서 거래" style="display:block;max-width;100%;height:auto;margin: 0px auto;">
                      
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">왜 IGC인가?</h2>
		 <ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 30px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                       IGC는 제조사들이 경쟁사보다 더 혁신적이면서도, 더 높은 효율성과 지속가능성을 보유한 제품을 개발하고, 제품을 신속하고 안전하게 시장에 출시하기 위해 겪게 되는 지속적인 압력을 잘 알고 있습니다. <br><br>
                       IGC는 시험 및 인증 업체로서 건축 업계 최고의 전문성을 갖춘 서비스를 제공합니다. <br><br>
                       당사는 CE마크를 획득하는 전 과정을 지원하는데 필요한 역량과 책임을 보유하고 있으며 CPR 요구사항에 따라 제품 인증, 공장 생산 제어 인증, 연구실 테스트를 제공할 수 있습니다. <br><br>
                       IGC는 광범위한 분야에서 폭넓은 건축 제품에 대한 포괄적인 시험 서비스를 제공합니다. <br><br>
                       IGC의 로고는 고객이 변화하는 시장과 트렌드에 맞는 비즈니스를 개척하도록 도와드립니다. <br>
                       이를 통해 IGC의 고객이 경쟁사와 차별화하고 제품에 대한 신뢰성과 안정성을 입증하며, 시장에서 제품의 효율성과 신뢰도를 강화할 수 있습니다.
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