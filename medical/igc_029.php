<?php
	include_once('./_common.php');
$g5['title'] = '시험/화학 분석';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area h2.title:before{position:absolute; top:15px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #009999; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/clinicaltest_NutritionandSupplementFacts_02.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/clinicaltest_NutritionandSupplementFacts_03.jpg);}
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
	<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:00px;width:100%;">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;">식품 영양분석</span></h1>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		<ul>
		   <li>   
             <h2>
               <span style="display:block;font-size:1.3em;text-align:left;color:#009999;"> <span style="display:block;font-size:0.2em;color:#009999;line-height:90px;height:30px;">&#9632; </span>
                 &nbsp; &nbsp; 식품 영양분석 개요
               </span> 
             </h2> 
           </li>
        </ul>
		<br>
		2016년 5월 미국 FDA는 최종 연방 법안 ‘식품 라벨링: 식품 및 건강보조식품의 영양성분표 개정안(Food Labeling: Revision of the Nutrition and Supplement Facts Labels)’을 발표하면서, 소비자들의 건강한 식습관을 돕기 위해 업데이트된 영양정보를 식품 및 건강보조식품의 영양성분표에 표기하게끔 라벨 규정을 수정했습니다.<br><br>
        제품에 영양성분표 라벨링을 해야하는 식품 및 건강보조식품 제조회사는 모두 관련 법규를 준수해야 하는 대상입니다.<br><br>
        <div>
            <h2><img src="images/clinicaltest_NutritionandSupplementFacts_01.jpg" alt="식품 영양분석"></h2>
            <br><br>
        </div>
        미국 시장 진출을 위한 식품 시험중 영양 분석 시험의 경우 AOAC 검증 방법이 있을 경우 AOAC 방법의 사용을 요구하고 있습니다.<br><br>
        AOAC, BAM등의 시험법으로 ISO/IEC 17025 인정받은 IGCLAB의 식품 영양분석 시험을 통해 미국에서 요구하는 14대 영양성분에 대한 시험 및 검증이 가능하며 영양 함량 정보가 포함된 샘플 라벨을 제공받을 수 있습니다.
		</h3>
	</section>
	
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">식품 시험소 소개 (TL-832)</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                     IGC 식품 시험소는 미국 IAS로부터 ISO ISO/IEC 17025 인정을 취득한 시험기관입니다.<br> 
                     제품 및 생산 현장의 시험 관련 법률적 요구사항 준수를 기본으로 품질 및 지속적인 요구사항을 추가적으로 만족하는 국제 공인 시험성적서 발행을 품질방침으로 하여 미국 수출 국내 기업의 시장 진출을 위한 영양성분, 화학적, 미생물학적 시험 성적서를 발급합니다.
					</span>
				</div>
			</li>
			<br>
          </ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">시험 항목 – 영양성분 검사 / 중금속 검사</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:35px;">
                      &#10070; Calories / Calories from fat / Carbohydrates / Other carbohydrates <br>
                      &#10070; Fat (crude) / Total fat-sum of fatty acids<br>
                      &#10070; Dietary Fiber (include soluble, insoluble fiber)<br>
                      &#10070; Sugar – Total<br>
                      &#10070; Added sugar<br>
                      &#10070; Cholesterol<br>
                      &#10070; Moisture<br>
                      &#10070; Protein (crude)<br>
                      &#10070; Vitamin A IU<br>
                      &#10070; Vitamin-B1 Thiamin<br>
                      &#10070; Vitamin-B2 Riboflavin<br>
                      &#10070; Vitamin-B3 Niacin<br>
                      &#10070; Vitamin-B5 Pantothenic Acid<br>
                      &#10070; Vitamin-B6<br>
                      &#10070; Vitamin C<br>
                      &#10070; Vitamin D IU<br>
                      &#10070; Vitamin E IU<br>
                      &#10070; Total fat-sum of fatty acids<br>
                      &#10070; Calcium / Copper / Iron / Magnesium / Phosphorus / Potassium / sodium / zinc<br>
                      &#10070; Selenium / Cadmium / Arsenic / Lead
					</span>
				</div>
			</li>
		</ul>
        </div>
	</section>
	
	<section class="page_title">
		<h3 class="sub_txt" style="display:block;text-align:justify;">
        <ul>
		   <li>   
             <h2>
               <span style="display:block;font-size:1.3em;text-align:left;color:#009999;"> <span style="display:block;font-size:0.2em;color:#009999;line-height:90px;height:30px;">&#9632; </span>
                 &nbsp; &nbsp; 미국 식품 영양성분 표시규정
               </span> 
             </h2> 
           </li>
        </ul>
		
		<br>
           1993년 이후 23년만에 새롭게 영양분석표 양식이 변경되었습니다.<br><br>
           식품 제조업체들에 대한 의무 적용은 2018년 7월 26일 시작되지만 연 매출 1000만 달러 미만 업체는 이보다 1년 후부터 의무 적용됩니다.<br><br>
           새롭게 변경된 영양분석표 양식의 가장 두드러진 특징은 칼로리 함량, 1인분의 양(serving size), 몇 인분용 포장인지를 크고 굵게 표기해 소비자들이 잘 볼 수 있도록 한 점입니다.<br><br>
           그 이외에 자연적 당분 외에 추가된 설탕(added sugars) 함량과 이 성분이 하루 권장 칼로리 섭취량(2000칼로리)에서 차지하는 비율도 별도 항목으로 명시하도록 하였습니다.<br><br>
           
           <ul>
               <li>
                   <h2>
                   <img src="images/clinicaltest_Nutrition&analysis_01.jpg" alt="FDA 영양성분표 개정 양식"><br>
                   FDA 영양성분표 개정 양식 
                   </h2><br>
               </li>
           </ul>
           FDA는 추가 설탕 섭취로 인한 칼로리가 전체 섭취 칼로리의 10%를 넘길 경우 하루 섭취 허용 기준인 2000칼로리 이하를 유지하기 어려운 것으로 파악했는데, 그 이유는 연구 결과 미국인의 평균 하루 섭취 칼로리의 약 13%를 추가 설탕에서 섭취하는 것으로 나타났기 때문입니다.<br><br>
           반면 현재 지방 섭취 자체보다 칼로리 섭취량과 당분 섭취량이 비만과 심장병 등 만성질환의 주 원인이라는 최근 연구결과들을 적극 반영하여 레이블에서 강조되고 있는 지방 성분 함량 표시의 비중은 줄었습니다. 또한 '지방 섭취에 따른 칼로리(calories from fat)' 항목은 제외시키고 지금처럼 총 지방, 포화지방(saturated fat), 트랜스 지방(trans fat)을 구분해서 표시하도록 하였습니다.<br><br>
           <ul>
               <li>
                   <h2><img src="images/clinicaltest_Nutrition&analysis_02.jpg" alt="FDA 영양성분표 개정 전 후 비교"><br>
                   FDA 영양성분표 개정 전 후 비교
                   </h2><br>
               </li>
           </ul>
           또 새 영양성분표에는 부족하면 만성질환 발병 위험이 커지는 비타민D와 포타슘(Potassium) 함량이 표기되는 대신 비타민A와 비타민C 함량 표기는 없어집니다. FDA는 미국인들의 비타민D와 포타슘 섭취량이 부족한 대신 비타민A, C 섭취가 부족한 경우는 드물기 때문이라고 설명했습니다. 다만 제조업체가 자율적으로 비타민A, C 함량 등을 표시할 수는 있고, 칼슘과 철분 함량은 현행과 같이 표시됩니다.<br><br>
           영양성분표 규정은 포장된 거의 모든 식품에 적용되지만 농무부 관할인 일부 육류 및 가금류 등은 제외됩니다.<br><br>
		</h3>
	</section>
	
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:1%;width:100%;color:">
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