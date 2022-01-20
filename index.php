<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div id="main_visual" class="main_sec">	
	<div class="slider">
	
		<div class="roll roll01">
			<div class="black"></div>
			<!------영상일 경우 : video src="http://a01.sgedu.co.kr/theme/a01/img/visual01.mp4" autoplay="autoplay" loop="loop" muted="muted"></video------->
            <div class="roll_wrap">
                <h2>GPC인증원</h2>
                <hr>
                <p>세계적인 수준의 개인인증기관<br class="mobile_no" /></p>
                <a href="javascript:" class="btn_more">더보기</a>
            </div>
		</div>		
		
		<div class="roll roll02">
            <div class="roll_wrap">
                <h2>GPC인증원</h2>
                <hr>
                <p>경쟁력과 전문성을 갖춘 심사원 양성<br class="mobile_no" /></p>
                <a href="javascript:" class="btn_more">더보기</a>
            </div>
		</div>
		<div class="roll roll03">
            <div class="roll_wrap">
                <h2>지피씨인증원</h2>
                <hr>
                <p>GPC는 IAS로부터 인정을 취득하여 <br>고객에게 신뢰적인 개인인증 서비스를 <br class="s_mobile_only" />제공합니다.<br></p>
                <a href="javascript:" class="btn_more">더보기</a>
            </div>
		</div>
		
		<div class="roll roll04">
            <div class="roll_wrap">
                <h2>지피씨인증원</h2>
                <hr>
                <p>GPC는 ISO/IEC 17024의 요구사항을 이해하고 <br class="s_mobile_only" />고객만족을 달성하는 <br>세계적인 수준의 개인인증 기관입니다.</p>
                <a href="javascript:" class="btn_more">더보기</a>
             </div>
		</div>
	</div>	
</div>

<!-------메인페이지 로고 하단 클릭했을 때 인증서검색 바로가기/// -------->
<div id="certification_search"></div>
        
	
	<!-- 메인 이벤트 /theme/테마/skin/latest/event/latest.skin.php -->
	<!----?php echo latest('theme/event', 'event', 1, 10); ?---->
	<!-- /메인 이벤트 -->		

<?
$v = @$_GET['view'];
if($v != 'dev'){
?>

<style type="text/css">
    
 /*기본CSS, 시작*/	
	
    
    
    
    /* ------------------------ 인증서 검색 영역 css 시작 ------------------------ */
    
    
    .main_cert .form_wrap{/* 검색 입력폼 & 검색 버튼 영역*/
        width: 90%;	
        max-width: 500px;
        align-items: center;
        margin: 0px auto;
        text-align: center;

    }
    .main_cert .form_wrap input{/* 검색 입력폼 */
        width: 70%;
        box-shadow: inset 0 2px 4px 0 hsla(0,0%,0%, 0.2);
        border: 1px solid hsl(0deg 0% 0% / 40%);
    }
    .main_cert .form_wrap button{/* 검색 버튼 */
        margin-left: 15px;
        padding:7px 15px;
        border:1px solid #aca3da;
        background: #fff;
        vertical-align: top;
        color:#222;
        font-size: 1em;
        font-weight: 500;
        box-shadow: 0 2px 6px 0 rgb(0 0 0 / 25%)
    }

    .main_cert #cert_rst{/* 검색 결과 전체 영역 */
        position:relative;
        top:0px;
        text-align: left;
        font-size: 1.05em;
        margin: 0px auto;
        max-width: 800px;
        color:#333;
        padding: 50px 0 50px;

    }

    .main_cert #cert_rst div {/* 검색 결과값 문단 */
        padding: 4px 0;
        display: flex;/* 문단의 제목과 내용을 분리시킴 */
    }
    

    .main_cert #cert_rst div b {/* 검색 결과값 문단의 제목(구분) */
        font-size: 1.1rem;
        font-weight: 300;
        color: #d63217;
        flex: 1
    }

    .main_cert #cert_rst p{
        text-align: center;
    }

    .main_cert #cert_rst b::before{
        content: '';
        margin-right: 10px;
        margin-bottom: 2px;
        width: 10px;
        height: 10px;
        display: inline-block;
        border: 1px solid #999;
        border-radius: 2px

    }
    .main_cert #cert_rst span{/* 검색 결과값 문단의 내용 */
        display: inline-block;
        margin-left: 14px;
        font-size: 1rem;
        font-weight: 300;
        color: #333;
        flex: 2.6;
    }
    
/* ------------------------ 인증서 검색 영역 css 시작 ------------------------ */  
    
   
    
/* ------------------------ 인증서 검색 영역 반응형 시작 ------------------------ */     

@media (max-width: 1280px){
	.main_product.main_cert { 
	    padding: 50px 0;
	}
    
}
    
    
@media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .main_cert #cert_rst {
            padding: 30px;/* 전체 레이아웃에(.wrap에 패딩값: 0 30px) 맞춰서 사이드 30px 적용 */
    }
}    
  
    
@media all and (max-device-width : 640px) {
        .main_cert #cert_rst div {/* 태블릿 해상도에 맞춰 결과값 내용에 display: flex 제거 */
            display: block;
    }
}
    

@media all and (min-width:360px) and (max-device-width : 414px) {
        .main_cert #cert_rst span {/* 모바일 해상도에 맞춰 결과값 내용을 분리시킴 */
            display: block;
    }
}
    
/* ------------------------ 인증서 검색 영역 반응형 종료 ------------------------ */  
    
    
</style>

<!-----// 인증서검색 시작,  맨 아래 코드 추가 참조, 개발 2021년6월22일 //------------>
<section class="main_sec main_cert">
	<div class="wrap"> <!---- style="margin-top:-0.1%;------->
      <h2>인 증 서 검 색
		  <span>GPC Certification Search</span>
	  </h2>
		<div class="form_wrap">
			<input type="text" name="cert_code" id="cert_code" placeholder="GPC 인증서 번호를 입력해주세요." />
			<button id="cert_btn">검색</button>
		</div>
	</div>
	<div id="cert_rst" class="wrap"></div>
</section>

<?
}
?>
<!-----// 인증서검색 종료 //------------>

<section class="main_sec main_bbs" style="background-color: #fff;">
	<div class="wrap">
	<!-- 질문과답변 최근글 /theme/테마/skin/latest/qna/latest.skin.php---->
<section><?php echo latest('theme/qna', 'notification', 3, 40); ?></section>
		<!-- 일반 최근글 /theme/테마/skin/latest/basic/latest.skin.php>----->
<section><?php echo latest('theme/basic', 'introduce', 3, 40); ?></section>
		<!-- 일반 최근글 /theme/테마/skin/latest/basic/latest.skin.php -->
<section><?php echo latest('theme/basic', 'notice', 3, 40); ?></section>
	</div>
</section>


<section class="main_sec main_about">
    <hr style="display:block;position:absolute;left:0;top:0;width:100%;height:1px;background:#d63217">
	<div class="flex_wrap animatedParent animateOnce" data-sequence="500">
		<div class="img animated fadeInRightShort" data-id="1">
            <!--<img src="<?php echo G5_THEME_URL ?>/img/main_about_img01.jpg" alt="Global Inter Certification" />-->
		   
			<!----br--->
			<!--- style="display:block;margin-left:-10px;"  ----->
			
		</div>
		<div class="text animated fadeInUpShort" data-id="2">
			<div class="animatedParent animateOnce" data-sequence="250">
				<h2 class="animated fadeInUpShort" data-id="1"><!---about----> <strong>Global Personnel Certification</strong></h2>
				<!----------h3 class="animated fadeInUpShort" data-id="2" style="color:#333333;">고객님의 성공을 위한 큰 힘이 되겠습니다.</h3---------->
				<p class="animated fadeInUpShort" data-id="2">GPC는<br> 고객의 전문 역량 제고에 기여하는 <br>공인된 개인 자격 인증 기관입니다.</p>
				<p class="animated fadeInUpShort" data-id="3">공정하고 객관적인 역량 검증 및 <br> 양질의 교육훈련을 통하여 <br>공신력 있는 자격 관리 서비스를 제공하고 있습니다.</p>
				<div class="btn_area animated fadeInUpShort" data-id="4">
					<a href="<?php echo G5_THEME_URL ?>/company/introduce.php">회사소개</a>
					<a href="<?php echo G5_THEME_URL ?>/company/location.php">오시는길</a>
				</div>
				<div class="cs animated fadeInUpShort" data-id="5">
				    <div class="cs_area">
				        <p class="title">대표번호</p>
				        <p class="tel">02-6749-0710<small>평일 AM 09:00 ~ PM 06:00</small></p>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<hr style="display:block;position:absolute;left:0;bottom:0;width:100%;height:1px;background:#d63217">
</section>

<section class="main_sec main_focus">
    <div class="wrap">
        <div class="main_focus_title">
            <h2>사업 핵심영역</h2>
            <p class="sub_tit">고객님을 위한 Global Personnel Certification만의 <br class="s_mobile_only" />핵심 가치</p>
        </div>
        <div class="main_focus_con">
            <ul class="main_focus_icon_wrap">
                <li>
                    <a href="<?php echo G5_THEME_URL ?>/service/01_auditor.php">
                        <div class="icon_box"><i class="fas fa-graduation-cap"></i></div>
                        <p class="li_tit">심사원 인증</p>
                        <p class="li_txt">ISO/IEC 17024를 기반으로 하는 <br class="tb_no" /> 경영시스템 심사원 인증입니다.</p>
                        <div class="more_area">
                            <span class="more">MORE VIEW</span>
                            <div class="arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo G5_THEME_URL ?>/service/02_training.php">
                        <div class="icon_box"><i class="fas fa-university"></i></div>
                        <p class="li_tit">연수기관</p>
                        <p class="li_txt">전문 인력 양성을 위한 <br class="tb_no" /> 심사원 교육 및 인증 서비스를 제공합니다.</p>
                        <div class="more_area">
                            <span class="more">MORE VIEW</span>
                            <div class="arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo G5_THEME_URL ?>/service/03_exam.php">
                        <div class="icon_box"><i class="fas fa-pencil-alt"></i></div>
                        <p class="li_tit">시험</p>
                        <p class="li_txt">심사원의 적격성 및 자질 평가를 위한 <br class="tb_no" /> 심사원 시험입니다.</p>
                        <div class="more_area">
                            <span class="more">MORE VIEW</span>
                            <div class="arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo G5_THEME_URL ?>/service/04_edu.php">
                        <div class="icon_box"><i class="fas fa-book"></i></div>
                        <p class="li_tit">교육과정</p>
                        <p class="li_txt">전문 인력을 양성하기 위한 <br class="tb_no" /> 경영시스템 교육과정입니다. </p>
                        <div class="more_area">
                            <span class="more">MORE VIEW</span>
                            <div class="arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="main_sec main_company">
    <div class="wrap">
        <div class="main_company_title">
            <h2>우리의 경쟁력</h2>
            <p>분야별 전문적인 협력업체와 특화된 서비스 수행 능력</p>
        </div>
        <div class="main_company_con">
            <ul class="main_company_con_wrap">
                <li class="big_img_box">
                    <a href="<?php echo G5_THEME_URL ?>/company/introduce.php">
                        <div class="con_img">
                            <img src="<?php echo G5_THEME_URL ?>/img/company_img01.png" alt="세계적인 수준의 개인 인증기관" class="s_mobile_no">
                            <img src="<?php echo G5_THEME_URL ?>/img/company_img04.png" alt="세계적인 수준의 개인 인증기관" class="s_mobile_only">
                        </div>
                        <div class="con_text">
                            <strong class="con_tit">세계적인 수준의 개인 인증기관</strong>
                            <p>㈜지피씨인증원은  <br> ISO/IEC 17024에 의거하여 개인의 자격을 인증해주는 <br>국제적인 개인인증 평가기관입니다.</p>
                        </div>
                        <div class="enter">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li class="small_img_box">
                    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=igcglobal">
                        <div class="con_img">
                            <img src="<?php echo G5_THEME_URL ?>/img/company_img02.png" alt="협력업체">
                        </div>
                        <div class="con_text black">
                            <strong class="con_tit">협력업체</strong>
                            <p>각 분야의 전문가들이 여러 산업분야의 인증 경험으로 <br>인증에 대한 이해도가 높고 능동적인 서비스를 제공합니다.</p>
                        </div>
                        <div class="enter black">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li class="small_img_box">
                    <a href="<?php echo G5_THEME_URL ?>/company/impartiality.php">
                        <div class="con_img">
                            <img src="<?php echo G5_THEME_URL ?>/img/company_img03.png" alt="공정의 약속">
                        </div>
                        <div class="con_text">
                            <strong class="con_tit">공정의 약속</strong>
                            <p>모든 활동이 공정하고 이해 상충이 없도록 <br>모든 노력을 할 것입니다.</p>
                        </div>
                        <div class="enter">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
    
</section>

<section class="main_sec main_product">
	<div class="wrap">
		<h2>자료파일</h2>
		<!-- 제품 슬라이드 /theme/구매테마/skin/latest/pic_block_slide/latest.skin.php -->
		<?php echo latest('theme/pic_block_slide', 'notice', 4, 30); ?>
	</div>
</section>
 <!------style="padding-left:-10px;" ----->

<!-------section class="main_sec main_gallery"----->
<!--
    <h2 style="height: 1px;background-color:#ffffff;"></h2>
	<h2 style="height: 1px;background-color:#ddd9d9;"></h2>
	<h2 style="height: 1px;background-color:#ffffff;"></h2>
-->
	<!-- 포트폴리오 슬라이드 /theme/구매테마/skin/latest/portfolio/latest.skin.php -->
	<!----?php echo latest('theme/portfolio', 'portfolio', 5, 40); ?--->
<!----/section----->

<script type="text/javascript">
$(document).ready(function(){
	$('#main_visual .slider').bxSlider({
		mode: 'fade',
		auto: true,
		autoControls: true,
		stopAutoOnClick: false,
		speed: 800, 
		pager: true,
		touchEnabled: true,		
		pause: 8000
	});
});

<?
$v = @$_GET['view'];
if($v != 'dev'){

//http://igcert.net/?view=dev
?>

const certProxt = {
	data:'',
	getData:function(){
		let cert_code = $('#cert_code').val();
		if(cert_code === ''){
			$('#cert_rst').html('<p>올바른 인증서번호를 입력해주세요.</p>');
			return false;
		}

		$('#cert_rst').html('<p>검색 중...</p>');
		$.get('/lib/certProxy/search.php',{'code':cert_code},function(r){
			//console.log(r);            
			if(r === '') r = '<p>GPC인증서 조회결과가 없습니다.</p>';
			$('#cert_rst').hide().html(r).fadeIn(1500);
		});
	}
}

$('#cert_btn').click(certProxt.getData);

<?
}
?>
</script>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>