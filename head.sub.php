<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
    $g5_head_title .= " | ".$config['cf_title'];
}

$g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title);

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="imagetoolbar" content="no">

<!--<link rel = "icon" type="image/x-icon" href = "<?php echo G5_URL ?>/img/favicon.ico">--> <!----- 파비콘 수정. 2021.07.01 전산: 이혜정 ------>


<!----- 파비콘 변경. 2021.07.21 출처: https://formito.com/tools/favicon 전산: 이혜정 ------>
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%23d63217%22></rect><path fill=%22%23fff%22 d=%22M33.91 48.94L33.91 61.78Q32.17 63.72 28.82 64.90Q25.46 66.08 21.47 66.08L21.47 66.08Q15.32 66.08 11.65 62.32Q7.98 58.56 7.72 51.86L7.72 51.86L7.70 49.15Q7.70 44.53 9.33 41.08Q10.96 37.64 14.00 35.78Q17.04 33.92 21.04 33.92L21.04 33.92Q26.88 33.92 30.12 36.59Q33.35 39.27 33.89 44.58L33.89 44.58L26.63 44.58Q26.24 41.95 24.95 40.84Q23.66 39.72 21.30 39.72L21.30 39.72Q18.46 39.72 16.91 42.13Q15.37 44.53 15.35 49.00L15.35 49.00L15.35 50.89Q15.35 55.58 16.95 57.93Q18.55 60.28 21.98 60.28L21.98 60.28Q24.93 60.28 26.37 58.97L26.37 58.97L26.37 54.11L21.13 54.11L21.13 48.94L33.91 48.94ZM50.64 55.04L45.83 55.04L45.83 65.65L38.29 65.65L38.29 34.37L50.77 34.37Q54.36 34.37 57.12 35.69Q59.88 37.01 61.40 39.45Q62.91 41.89 62.91 44.98L62.91 44.98Q62.91 49.56 59.64 52.30Q56.36 55.04 50.64 55.04L50.64 55.04ZM45.83 40.19L45.83 49.22L50.77 49.22Q52.96 49.22 54.11 48.12Q55.26 47.02 55.26 45.03L55.26 45.03Q55.26 42.83 54.08 41.52Q52.90 40.21 50.86 40.19L50.86 40.19L45.83 40.19ZM84.74 55.06L92.24 55.06Q92.09 58.33 90.48 60.83Q88.87 63.33 85.95 64.71Q83.04 66.08 79.30 66.08L79.30 66.08Q73.14 66.08 69.59 62.06Q66.05 58.05 66.05 50.72L66.05 50.72L66.05 49.17Q66.05 44.58 67.65 41.13Q69.25 37.68 72.26 35.80Q75.27 33.92 79.22 33.92L79.22 33.92Q84.91 33.92 88.37 36.92Q91.83 39.91 92.30 45.18L92.30 45.18L84.78 45.18Q84.70 42.32 83.34 41.07Q81.99 39.83 79.22 39.83L79.22 39.83Q76.40 39.83 75.09 41.93Q73.78 44.04 73.72 48.66L73.72 48.66L73.72 50.87Q73.72 55.88 74.98 58.02Q76.23 60.17 79.30 60.17L79.30 60.17Q81.90 60.17 83.28 58.95Q84.65 57.72 84.74 55.06L84.74 55.06Z%22></path></svg>" />


<?
if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<title><?php echo $g5_head_title; ?></title>
<link rel="stylesheet" href="<?php echo run_replace('head_css_url', G5_THEME_CSS_URL.'/default.css?ver='.G5_CSS_VER, G5_THEME_URL); ?>">
<link rel="stylesheet" href="<?php echo run_replace('head_css_url', G5_THEME_CSS_URL.'/fotorama.css?ver='.G5_CSS_VER, G5_THEME_URL); ?>">
<link rel="stylesheet" href="<?php echo run_replace('head_css_url', G5_THEME_CSS_URL.'/design.css?ver='.G5_CSS_VER, G5_THEME_URL); ?>">
<link rel="stylesheet" href="<?php echo run_replace('head_css_url', G5_THEME_CSS_URL.'/animations.css?ver='.G5_CSS_VER, G5_THEME_URL); ?>">
<link rel="stylesheet" href="<?php echo run_replace('head_css_url', G5_THEME_CSS_URL.'/responsive.css?ver='.G5_CSS_VER, G5_THEME_URL); ?>">

<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
</script>
<?php
add_javascript('<script src="'.G5_JS_URL.'/jquery-1.12.4.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery-migrate-1.4.1.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.menu.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/placeholders.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 0);
add_javascript('<script src="'.G5_THEME_URL.'/js/jquery.touchSlider.js"></script>', 0);
add_javascript('<script src="'.G5_THEME_URL.'/js/fotorama.js"></script>', 0);
add_javascript('<script src="'.G5_THEME_URL.'/js/design.js"></script>', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/font-awesome/css/font-awesome.min.css">', 0);

if(G5_IS_MOBILE) {
    add_javascript('<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>', 1); // overflow scroll 감지
}
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
?>

<!----구글 아이콘 사용 (추가_20210602 / 4팀-전산:이혜정)----->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!----폰트 어썸 fas 사용 (추가_20210715 / 4팀-전산:이혜정)----->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}
?>