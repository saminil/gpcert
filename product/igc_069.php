 <?php
	include_once('./_common.php');
$g5['title'] = '제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
    /* 목록이미지 정렬+순수, 2020년3월26일  */
	.partner_type2 .con_area:nth-child(2n){float:left; }
	.partner_type2 .con_area:after{content:""; clear:both; display:block;}
	.partner_type2 .con_area .thumb{position:relative;float:left; width:300px; height:240px; overflow:hidden;}
	.partner_type2 .con_area .thumb img{width:100%; max-width:750px;} 
	.partner_type2 .con_area .txtArea{float:left; width:300px; padding-left:40px;}
	.partner_type2 .con_area .txtArea .tit{font-size:2em; color:#023059; margin-top:10px;}
	.partner_type2 .con_area .txtArea ul{margin-top:20px; color:#023059;}
    .partner_type2 .con_area .txtArea ul a {color:#404953;}
	.partner_type2 .con_area .txtArea ul li{margin-top:15px;}
	.partner_type2 .con_area .txtArea ul li:first-child{margin-top:0}
	.partner_type2 .con_area .txtArea ul li span{font-weight:700; margin-right:10px; }
	.partner_type2 .con_area .txtArea ul li p{display:inline-block; }
    
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
		.content_wrap{width:96%;}
		.page_title{margin-bottom:40px;}
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.partner_type2 .con_area .thumb{float:none; width:90%; height:auto; margin:0 auto; }
        .partner_type2 .con_arrow{width:95%; margin:0 auto;}
        .partner_type2 .con_box{width:95%; margin:0 auto;}
	}

	@media screen and (max-width:480px){
		.partner_type2 .con_area{width:100%; height:auto; 
            float:none;text-align:}
        .partner_type2 .con_arrow p{ font-size:1.5em; margin-top:30px;}
        .partner_type2 .con_box ul li { width:100%; }
	}
    
 /* 서브페이지 컨텐츠 최상위 타이틀 배경 시작 */
    .sub_tit{ 
        background: linear-gradient( to top, #404953, #404953 );
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
        background: linear-gradient( to top, #404953, #404953); 
        padding: 10px 30px; 
        border-radius: 0px;
        width:100%;
        height:20%;
        color:#fff;
        text-align:center;
    }  
 
    /* 목록 앞에 화살표 기호 시작  */
    .arrow {display:inline-block; background:#404953; position:relative;}
    .arrow:after {content:''; position:absolute; width:0; height:0; border-style:solid;}
    /*.arrow.test_4 {width:20px; height:10px;}*/
    .arrow.test_4:after {border-color:transparent transparent transparent #404953; top:-15px; left:-20px;border-width:10px 10px;}
    /*.arrow.test_4:after {border-width:15px 20px;} */
</style>

<div class="content_wrap">
	<section class="page_title">
		<h3 class="sub_tit"><span>제품인증</span>&nbsp; / 서비스 목록</h3>
		<h2 class="sub_txt" ><a href="/theme/rt_igcert/igc/process02_product.php" style="position:relative;top:-40px;color:#023059;">제품 인증절차 미리보기 Click!</a></h2>
	</section>	
	<section class="partner_type2">
<!--
      <div class="txt"><span style="color:#404953;">제품인증 서비스란? </span>
		<br>
		<strong style="font-weight:bold;">품질을 보증하는 인증 마크</strong><br>
          <p style="text-align:justify;text-justify: inter-word;">
            제품 인증 프로세스는 안전, 품질 및 기타 제품 특성이 규격 및 표준을 준수하고 있는지를 평가하기 위한 효과적인 방법입니다. 사전 시장 승인 및 인증은 세계 주요 시장에 진출하기를 원하는 다양한 유형의 제품, 부품 및 액세서리 제조업체의 법적 요구사항입니다. 또한, 제조업체는 필수 요구사항 충족뿐만 아니라 자발적 표준의 기술 요구사항 준수에 대한 제품 시험을 수행할 수도 있습니다. 추가적인 자발적 시험 및 인증을 통해 기업은 그들의 제품을 경쟁사와 차별화 하고, 사용하기 안전한 제품의 품질에 대한 노력과 의지를 소비자와 구매자에게 보여줄 수 있습니다.</p><br>
          <p style="text-align:justify;text-justify: inter-word;">IGC는 전세계적으로 인정받고 있는 제품인증 지원 기관으로 강제 및 자발적 인증 및 승인 제도에 따라 독립적인 인증 지원 서비스를 제공합니다.  IGC를 통해 획득한 인증 마크는 품질과 안전의 상징으로 전세계 구매자 및 소비자에게 인정받고 있습니다.  </p>
        </div>
-->
				
		<!-----1line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_069_CEMDD.php">
			    <h3>유럽제품 인증</h3>
				<img src="../image/products_01.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">유럽제품 인증 - 1라인 좌측</p------>
				<ul>
					<li><a href="./igc_069_CEMDD.php"><span><div class="arrow test_4"></div>CE MDD</span></a></li>
					<li><a href="./igc_070_CEMDR.php"><span><div class="arrow test_4"></div>CE MDR</span></a></li>
					<li><a href="./igc_071_PMS.php"><span><div class="arrow test_4"></div>임상평가</span></a></li>
					<li><a href="./igc_072_CE-IVD-IVDR.php"><span><div class="arrow test_4"></div>CE IVD/IVDR</span></a></li>
					<li><a href="./igc_073_CE-LVD-EMC.php"><span><div class="arrow test_4"></div>CE LVD/EMC</span></a></li>
					<li><a href="./igc_074_CE-Machinery.php"><span><div class="arrow test_4"></div>CE Machinery</span></a></li>
					<li><a href="./igc_075_PED.php"><span><div class="arrow test_4"></div>CE PED</span></a></li>
					<li><a href="./igc_076_SPVD.php"><span><div class="arrow test_4"></div>CE SPVD</span></a></li>
					<li><a href="./igc_077_Hot-water-boiler.php"><span><div class="arrow test_4"></div>Hot-water boiler</span></a></li>
					<li><a href="./igc_078_Gas-Appliance.php"><span><div class="arrow test_4"></div>Gas Appliance</span></a></li>
<!--					<li><a href="./igc_078_e-mark.php"><span><div class="arrow test_4"></div>E-MARK</span></a></li>-->
				</ul>
			</div>
		</div>	
			
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_079_EAC-Certification.php">
			    <h3>유라시아 제품인증</h3>
				<img src="../image/products_02.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">유라시아 제품인증 - 1라인 중앙</p------>
				<ul>
					<li><a href="./igc_079_EAC-Certification.php"><span><div class="arrow test_4"></div>EAC 인증</span></a></li>
					<li><a href="./igc_080_01.php"><span><div class="arrow test_4"></div>의료기기</span></a></li>
					<li><a href="./igc_081_01.php"><span><div class="arrow test_4"></div>식품</span></a></li>
					<li><a href="./igc_082_01.php"><span><div class="arrow test_4"></div>화장품</span></a></li>
					<li><a href="./igc_083_01.php"><span><div class="arrow test_4"></div>의약품</span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
				</ul>
			</div>
		</div>
  
  		<div class="con_area">
			<div class="thumb">
              <a href="igc_084_GOST-R.php">
			    <h3>러시아 제품인증</h3>
				<img src="../image/products_03.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">품질경영 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_084_GOST-R.php"><span><div class="arrow test_4"></div>GOST-R</span></a></li>
					<li><a href="./igc_085_01.php"><span><div class="arrow test_4"></div>의료기기 러시아 등록</span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
				</ul>
			</div>
		</div>

		<!-----2line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_086_FDA.php">
			    <h3>미주 제품인증</h3>
				<img src="../image/products_04.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 의료기기</p------>
				<ul>
					<li><a href="./igc_086_FDA.php"><span><div class="arrow test_4"></div>FDA</span></a></li>
					<li><a href="./igc_087_01.php"><span><div class="arrow test_4"></div>의료기기</span></a></li>
					<li><a href="./igc_088_01.php"><span><div class="arrow test_4"></div>전자 및 방사선 장치</span></a></li>
					<li><a href="./igc_089_01.php"><span><div class="arrow test_4"></div>의약품</span></a></li>
					<li><a href="./igc_090_01.php"><span><div class="arrow test_4"></div>식음료품</span></a></li>
					<li><a href="./igc_091_01.php"><span><div class="arrow test_4"></div>건강 보조 식품</span></a></li>
					<li><a href="./igc_092_01.php"><span><div class="arrow test_4"></div>화장품</span></a></li>
				</ul>
			</div>
		</div>

		<div class="con_area">
			<div class="thumb">
              <a href="./igc_093_CFDA.php">
			    <h3>중국 제품인증</h3>
				<img src="../image/products_05.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">식품</p------>
				<ul>
					<li><a href="./igc_093_CFDA.php"><span><div class="arrow test_4"></div>CFDA</span></a></li>
					<li><a href="./igc_094_01.php"><span><div class="arrow test_4"></div>식품 위생 등록</span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
				</ul>
			</div>
		</div>

		
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_095_01.php">
			    <h3>동남아시아 제품인증</h3>
				<img src="../image/products_06.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">에너지 경영</p------>
				<ul>
					<li><a href="./igc_095_01.php"><span><div class="arrow test_4"></div>태국 의료기기 등록</span></a></li>
					<li><a href="./igc_096_01.php"><span><div class="arrow test_4"></div>대만 의료기기 등록</span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
				</ul>
			</div>
		</div>

        <!-----3line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_097_VeganSociety.php">
			    <h3>Vegan 인증</h3>
				<img src="../image/products_07.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_097_VeganSociety.php"><span><div  class="arrow test_4"></div>Vegan Society 소개</span></a></li>
					<li><a href="./igc_098_01.php"><span><div class="arrow test_4"></div>식품 &amp; Restaurant</span></a></li>
					<li><a href="./igc_099_01.php"><span><div class="arrow test_4"></div>화장품</span></a></li>
				</ul>
			</div>
		</div>
 
 		<div class="con_area">
			<div class="thumb">
              <a href="./igc_101_HALAL.php">
			    <h3>HALAL 인증</h3>
				<img src="../image/products_08.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">정보보안</p------>
				<ul>
					<li><a href="./igc_101_HALAL.php"><span><div class="arrow test_4"></div>HALAL</span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
				</ul>
			</div>
		</div>
		
 		<div class="con_area">
			<div class="thumb">
              <a href="./igc_102_EWG.php">
			    <h3>화장품 인증</h3>
				<img src="../image/products_09.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="./igc_102_EWG.php"><span><div class="arrow test_4"></div>EWG</span></a></li>
					<li><a href="./igc_103_CPNP.php"><span><div class="arrow test_4"></div>CPNP</span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
				</ul>
			</div>
		</div>
		
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_078_kc.php">
			    <h3>한국 KC 인증</h3>
				<img src="../image/products_09_02.jpg" alt="KC 인증,이미지">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">KC 인증 - 1라인 좌측</p------>
				<ul>
					<li><a href="./igc_078_kc.php"><span><div class="arrow test_4"></div>안전/전자파 인증</span></a></li>
<!--
					<li><a href="./igc_103_CPNP.php"><span><div class="arrow test_4"></div>CPNP</span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
					<li><a href="#"><span><div class=""></div></span></a></li>
-->
				</ul>
			</div>
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