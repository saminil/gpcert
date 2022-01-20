<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<?php if (!defined("_INDEX_")) { ?>
		</div>
	</div>
</div>
<? } ?>

<script src="<?php echo G5_THEME_URL ?>/js/css3-animate-it.js"></script>


<!-- 하단 시작 { -->
<footer id="footer" <?php if (defined("_INDEX_")) { ?>class="main"<? }?>>
    <hr style="display:block;position:absolute;left:0;top:0;width:100%;height:3px;background:#d63217;z-index:90">
    <hr style="display:block;position:absolute;left:0;bottom:0px;width:100%;height:1px;background:#d63217;z-index:90">
	<div class="wrap footer_wrap">
		<h1><a href="/"></a></h1>
		
		<nav class="gnb" style="margin-top:-5px;float:left;">
			<ul style="position:relative;right:-3px;">
  
				<li class="sites" style="padding:0px 0 20px 8px;display: none">
				   <select onchange="copyrtChgUrl(this.value)" style="font-size:0.9rem;background-color:#93a2bf;color:#fff;width:183px;" class="site2">
	                  <option value=""> 관련사이트 </option>
	                  <option value="http://dna-tec.org">DNA-TEC</option>
	                  <option value="http://rus-test.org">RUS-TEST</option>
	                  <option value="https://www.gicert.org/?l=ko">GIC</option>
	                  <option value="https://www.gpcert.org/">GPC</option>
	                  <option value="http://www.patscorp.com/">PATSCORP</option>
	                  <option value="https://www.asiaitc.com/">ASIAITC</option>
                      <option value="http://aemiworld.com/">AEMIWORLD</option>
                      <option value="http://igcert.net/">(구) IGC</option>
<!--                  <option value="https://data.igcert.org/">WWW.DATACERTORG</option>-->
                      <option value="https://blog.naver.com/kate_0432">NAVER Blog1</option>
                      <option value="https://blog.naver.com/woheni19">NAVER Blog2</option>
                      <option value="https://blog.naver.com/djrrlforyou">NAVER Blog3</option>
                      <option value="https://blog.naver.com/kate_0432">NAVER Blog4</option>
                   </select>
				</li>
				
			</ul>			
		</nav>
		<br class="s_mobile_only" />
		
		<div class="f_left">
            <hr class="hr03"><!------관련사이트 상단 라인------>
            <div class="privacyprovision">
				<a href="<?php echo get_pretty_url('content', 'privacy'); ?>"><span style="color:#fff;">개인정보처리방침</span></a>
				<a href="<?php echo get_pretty_url('content', 'provision'); ?>"><span style="color:#fff;">서비스이용약관</span></a>
            </div><br>
			<dl class="address">
				<dt>회사명 : 주식회사 지피씨인증원</dt>&nbsp; &nbsp;<br class="s_mobile_only" />			
				<dt class="mobile_no">주소 : </dt> 
				<dt>서울특별시 금천구 서부샛길 638, 501-1호(가산동, 대륭테크노타운7차)</dt><br />
				<dt>대표 : </dt>
				<dt>공길택</dt>&nbsp; &nbsp;
				<dt>사업자등록번호 : </dt>
				<dt>778-87-00837</dt>&nbsp; &nbsp;  <br class="s_mobile_only" />
				<a href="tel:02-6749-0723" style="color: #fff">
				<dt>TEL : </dt>
				<dt>02) 6749-0710</dt>
				</a>&nbsp; &nbsp;
				<dt>Fax : </dt>
				<dt>02) 6749-0711</dt> &nbsp; &nbsp; <br>
				<a href="mailto:info@igcert.org" style="color: #fff">
				<dt>E-mail : </dt>
				<dt>info@gpcert.org</dt><br><br>
				<dt style="color:#a0a0a0">Copyright &copy; 2017 Global Personnel Certification All Rights Reserved.</dt>
				</a>
			</dl>
		</div>
		<div class="f_right">
            <div class="cs_area">
                <span>Customer Service Center</span>
                <strong>02-6749-0710</strong>
                <span>AM 9:00 ~ PM 6:00</span>
                <span>토,일요일 및 공휴일은 휴무입니다.</span>
            </div>
		</div>
	</div>
	
<!--
    <div>
        <p class="copyright">Copyright &copy; 2017 Global Personnel Certification All Rights Reserved.</p>
    </div>
-->
   
    <a href="javascript:" id="top_btn"><i class="fa fa-angle-up" aria-hidden="true"></i><span style="display:block;font-size:1rem">TOP</span> </a>
    
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '1000');
            return false;
        });
    });
    </script>
    
    <!---FamilySites 시작------>
    <script>
    function copyrtChgUrl(url){
	if(url){
		window.open(url);
	}
    }
    <!---FamilySites 종료------>
</script>
</footer>
<!-- } 하단 끝 -->

<!-- 20200402 QuickMenu -->

<!----------
tail.php 60라인~ 추가
head.php 204,207라인 추가
design.css 564라인~ 추가
------>

<!----퀵메뉴 영역----->
<!-- 모바일_하단고정 -->
	<div class="request">
		<div class="floating">
			<div class="inner">
				<div class="btn_col">
					<span><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=qa" class="btn_type1">1:1문의</a></span>
					<span><a href="tel:02-6749-1185" class="btn_type2">전화바로상담</a></span>
				</div>
			</div>
		</div>
	</div>
	<!-- 모바일_하단고정 //-->
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>