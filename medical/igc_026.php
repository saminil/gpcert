<?php
	include_once('./_common.php');
$g5['title'] = '시험';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; max-width:1200px; min-width:320px; margin:0 auto; font-size:1.2em;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }
	.partner_type2{clear:both; width:100%; min-width:320px; margin:0 auto;}
	.partner_type2:after{content:""; clear:both; display:block;}
	.partner_type2 .txt{text-align:left; font-size:1em; line-height:2em; border-left:5px solid #666; padding-left:15px; margin-bottom:50px;}
	.partner_type2 .txt span{font-weight:700; font-size:1.4em;}
	.partner_type2 .con_area{ width:33.2%; float:left;  padding:0; padding-bottom:50px; margin:0 auto; border-bottom:1px solid #eee; margin-bottom:50px;}
	.partner_type2 .con_area:nth-child(2n){float:right; }
	.partner_type2 .con_area:after{content:""; clear:both; display:block;}
	.partner_type2 .con_area .thumb{position:relative;float:left; width:300px; height:240px; overflow:hidden;}
	.partner_type2 .con_area .thumb img{width:100%; max-width:750px;} 
	.partner_type2 .con_area .txtArea{float:left; width:300px; padding-left:40px;}
	.partner_type2 .con_area .txtArea .tit{font-size:2em; color:#023059; margin-top:10px;}
	.partner_type2 .con_area .txtArea ul{margin-top:20px; color:#023059;}
    .partner_type2 .con_area .txtArea ul a {color:#669999;}
    
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

	@media screen and (max-width:992px){	
		.content_wrap{width:96%;}
		.page_title{margin-bottom:40px;}
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.partner_type2 .con_area .thumb{float:none; width:90%; height:auto; margin:0 auto; }
        .partner_type2 .con_arrow{width:95%; margin:0 auto;}
        .partner_type2 .con_box{width:95%; margin:0 auto;}
	}

	@media screen and (max-width:480px){
		.partner_type2 .con_area{width:100%; height:auto;float:none;text-align:}
        .partner_type2 .con_arrow p{ font-size:1.5em; margin-top:30px;}
        .partner_type2 .con_box ul li { width:100%; }
    
	}
    
 /* 서브페이지 컨텐츠 최상위 타이틀 배경 시작 */
    .sub_tit{ 
        background: linear-gradient( to top, #669999, #669999 );
        position:relative;
        width:100%;
        height:5%;
        color:#023059;
        line-height:40px;
        padding-top:10px;
        Font-size:1.5em;
        color:#fff;
    }
    
    /* 서브페이지 컨텐츠 내용, 이미지 위에 텍스트 올려쓰기 시작 */
    h3 {
        position: absolute; 
        left: 50%; 
        top: 10%; 
        transform: translate(-50%, -50%); 
        /*background: rgba(255,255,255,0.5)*/
        background: linear-gradient( to top, #669999, #669999); 
        padding: 10px 30px; 
        border-radius: 0px;
        width:100%;
        height:20%;
        color:#fff;
        text-align:center;
    }  
  
    /* 목록 앞에 화살표 기호 시작  */
    .arrow {display:inline-block; background:#669999; position:relative;}
    .arrow:after {content:''; position:absolute; width:0; height:0; border-style:solid;}
    /*.arrow.test_4 {width:20px; height:10px;}*/
    .arrow.test_4:after {border-color:transparent transparent transparent #669999; top:-15px; left:-20px;border-width:10px 10px;}
    /*.arrow.test_4:after {border-width:15px 20px;} */
</style>

<div class="content_wrap">
	<section class="page_title">
		<h3 class="sub_tit"><span>시험</span>&nbsp;서비스 목록</h3>
	</section>	
	<section class="partner_type2">
<!--
		<div class="txt" style="text-align:justify;">		
		<span style="color:#009999;">시험이란?</span><br>
           <strong style="font-weight:bold;">제품의 확실한 품질 보장</strong><br>
		더 많은 해외 시장으로 진출할 계획을 갖고 계신다면 제품의 품질을 검증받아야 합니다. 독립적인 시험을 통해 제품 개발의 초기 단계에서부터 문제점을 예측하고 파악할 수 있으며, 이러한 문제점을 즉시 해결함으로써 비용을 절감하고 제품의 시장 출시 지연을 방지할 수 있습니다. 또한 제품의 회수와 이에 따른 관련 소송으로부터 회사의 브랜드 이미지와 평판을 지킬 수 있습니다.<br><br>
        
        IGC는 관련 국제 표준 및 규격에 따라 제품을 시험하여 유럽 연합의 CE 마킹 등과 같은 국제적 품질 및 안전 인증 마크 및 시험성적서를 발행하고 있습니다. 또한, IGC는 각 국가별로 시장 진입을 위해 필요한 요구 사항을 충족시키기 위한 EAC, GOST, FDA 등 다양한 해외 인증 서비스를 제공하여 고객의 목표 및 시장의 요구 사항을 효과적이며 효율적인 방법으로 충족시킬 수 있도록 지원해 드립니다.
        <br><br> 
		</div>	
-->
		<!-----1line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_028-3.php">
			    <h3>의료기기</h3>
				<img src="../image/clinical_03medicaldivices_01.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_028-3.php"><span><div  class="arrow test_4"></div>의료기기 인증시험</span></a></li>
				</ul>
			</div>
		</div>	
			
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_026-1.php">
			    <h3>전기전자</h3>
				<img src="../image/clinical_01electrenic_01.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_026-1.php"><span><div  class="arrow test_4"></div>전기 안전</span></a></li>
				</ul>
			</div>
		</div>
  
  		<div class="con_area">
			<div class="thumb">
              <a href="./igc_027-2.php">
			    <h3>기계</h3>
				<img src="../image/clinical_02mechine_01.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">품질경영 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_027-2.php"><span><div  class="arrow test_4"></div>기계 안전</span></a></li>
				</ul>
			</div>
		</div>

		<!-----2line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_029.php">
			    <h3>화학 분석</h3>
				<img src="../image/clinical_04food&chemical_01.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 의료기기</p------>
				<ul>
					<li><a href="./igc_029.php"><span><div  class="arrow test_4"></div>식품 영양분석</span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>

		<div class="con_area">
			<div class="thumb">
              <a href="./igc_036.php">
			    <h3>건축 자재</h3>
				<img src="../image/clinical_06constructionmaterials_01.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">식품</p------>
				<ul>
					<li><a href="./igc_036.php"><span><div  class="arrow test_4"></div>건축자재 인증시험</span></a></li>
					<li><a href="#"><span><div  class=""></div></span></a></li>
				</ul>
			</div>
		</div>

        <div class="con_area">
			<div class="thumb">
              <a href="./igc_030-4.php">
			    <h3>생물학적 시험</h3>
				<img src="../image/clinical_05foodnutrition_01.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">에너지 경영</p------>
				<ul>
					<li><a href="./igc_030-4.php"><span><div  class="arrow test_4"></div>식품 미생물 시험</span></a></li>
					<li><a href="./igc_031-5.php"><span><div  class="arrow test_4"></div>위생테스트</span></a></li>
				</ul>
			</div>
		</div>
		<img src="./images/mainLogo_certificate-of-accreditation01.jpg" alt="(주)아이지씨인증원 국제공인 이미지" style="display:block;margin: 0 auto;"><br><br><br>

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
   </section>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>