<?php
include_once('./_common.php');
$g5['title'] = '사이트맵';
include_once(G5_THEME_PATH.'/head.php');
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
    /*자료실-사이트맵 페이지 시작-YR 210727*/
    .container_title{display:none;}
    .sitemap1>span{ /*메뉴클릭시 이동한다는 안내메세지*/
        font-size:1rem;
        font-weight:400;
        height:40px;
        line-height:40px;
    }
    .sitemap1 .material-icons{
        vertical-align:middle;
        font-size:1.2em;
        padding-right:4px;
    }
    /*테이블 시작*/
    table{
        width:100%;
        min-width:250px;
        overflow-x: auto;
        margin-top:5px;
        font-size:0.9rem;
        line-height:1.4rem;
    }
    th,td{
        border: 1px solid #555;
        border-left:none;
        padding:5px;
        margin-top:-10px;
    }
    table tr{
        height:40px;
        color:#333;
        font-weight:400;
    }
    table a{transition:all 0.2s;} /* 210721 전산팀 yr*/
    table td:hover a{color:#fff}
    table td{transition:all 0.2s;} /* 210721 전산팀 yr*/
    table td:hover{background:#ed7b70;}
    table td.empty_block:hover{background:#fff;cursor:default;}
    
    .table_tt, .table_tt_2{ /*상단 주메뉴 제목*/
        text-align:center;
        font-weight:500;
        color:#222;
        font-size:1.15rem;
        background:#efaea9;
        height:45px; 
    }
    .table_tt_2{height:40px;}
    .menu_2depth{
        font-weight:400;
        color:#222;
        font-size:1.05rem;
        background:#f5f5f5;
    }
    .last_row{border-right:none;}

/*자료실-사이트맵 페이지 종료*/

 
    
    /* -----------------------------------------------------반응형 시작 -210803 yr*/  
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {}
    
    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
        th,td{padding:5px 0.6%;}
        
        .table_tt, .table_tt_2{ /*상단 주메뉴 제목*/
            font-size:1.1rem;
        }
        .menu_2depth{
            font-size:1rem;
        }
    }
    

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .sub_top_tt{display:none;} /*탭메뉴와 중복되어서 안보이게함*/
        
        th,td{padding:5px 0.6%;}
        table{text-align:center;}
        
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .sitemap1>span{ /*메뉴클릭시 이동한다는 안내메세지*/
            font-size:0.7rem;
        }
        table{font-size:0.7rem;}
        th,td{padding:4px 0.4%;}
        .table_tt, .table_tt_2{ /*상단 주메뉴 제목*/
            font-size:0.8rem;
            color:#333;
            background:#c8c8f3;
        }
        .menu_2depth{
            font-size:0.75rem;
            background:#f7f7f7;
        }
        a:visited{color:inherit;}
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) {  
        .sitemap1>span{ /*메뉴클릭시 이동한다는 안내메세지*/
            font-size:0.7rem;
        }
        th,td{padding:4px 0.6%;}
    }  
    
/*---------------------------------------------------------------반응형 끝*/
</style>

<div class="content_wrap">

    <section class="vision_type1">
        <img src="./images/gpc_sitemap_banner.png" alt="사이트맵 배너" title="gpc_sitemap_banner"><br><br><br>

        <div class="sitemap1">
             <span style="display:block;text-align:right;color:#8f84c9;"> <span class="material-icons">open_in_new</span>메뉴를 클릭하시면 관련내용을 확인하실 수 있습니다.</span>
             
                <table cellspacing="0" cellpadding="0">
                    <col width="168" span="6">
                    <tr>
                        <td class="table_tt"><a href="../company/introduce.php">회사안내</a></td>
                        <td class="table_tt" colspan="2"><a href="../service/01_auditor.php">제공서비스</a></td>
                        <td class="table_tt"><a href="/bbs/board.php?bo_table=notice">자료실</a></td>
                        <td class="table_tt"><a href="/bbs/board.php?bo_table=notification">고객센터</a></td>
                        <td class="table_tt last_row"><a href="/bbs/board.php?bo_table=gallery">인재채용</a></td>
                    </tr>
                    <tr>
                        <td class="menu_2depth"><a href="../company/introduce.php">회사소개</a></td>
                        <td class="menu_2depth" rowspan="5" ><a href="../service/01_auditor.php">심사원 인증</a></td>
                        <td><a href="../service/01_auditor.php">심사원 인증규격</a></td>
                        <td class="menu_2depth"><a href="/bbs/board.php?bo_table=notice">자료파일</a></td>
                        <td class="menu_2depth"><a href="/bbs/board.php?bo_table=notification">공지사항</a></td>
                        <td class="menu_2depth last_row"><a href="/bbs/board.php?bo_table=gallery">채용공고</a></td>
                    </tr>
                    <tr>
                        <td class="menu_2depth"><a href="../company/code_of_conduct.php">행동강령</a></td>
                        <td><a href="../service/01_auditor.php">등급/요구사항</a></td>
                        <td class="menu_2depth"><a href="/bbs/board.php?bo_table=introduce">뉴스레터</a></td>
                        <td class="menu_2depth"><a href="/bbs/board.php?bo_table=qa">인증문의</a></td>
                        <td class="empty_block last_row" rowspan="5"></td> <!--인재채용 공백-->
                    </tr>
                    <tr>
                        <td class="menu_2depth"><a href="../company/impartiality.php">공정성</a></td>
                        <td><a href="../service/01_auditor.php">심사원 인증절차</a></td>
                        <td class="menu_2depth"><a href="/bbs/board.php?bo_table=igcglobal">협력업체</a></td>
                        <td class="empty_block" rowspan="100"></td> <!-- Contact us 공백-->
                    </tr>
                     <tr>
                        <td class="menu_2depth"><a href="../company/logo.php">CI &amp; Mark</a></td>
                        <td><a href="../service/01_auditor.php">심사원 인증비용</a></td>
                        <td class="menu_2depth"><a href="../info/sitemap.php">사이트맵</a></td>
                    </tr>
                    <tr>
                        <td class="menu_2depth"><a href="../company/appeal.php">이의제기</a></td>
                        <td><a href="../service/01_auditor.php">FAQ</a></td>
                        <td class="empty_block" rowspan="109"></td> <!--자료실 공백-->
                    </tr>
                    <tr>
                        <td class="menu_2depth"><a href="../company/location.php">오시는길</a></td>
                        <td class="menu_2depth" rowspan="4"><a href="../service/02_training.php">연수기관 지정</a></td>
                        <td><a href="../service/02_training.php">연수기관 지정소개</a></td>
                    </tr>
                    <tr>
                        <td class="empty_block" rowspan="108"></td> <!--회사안내 공백-->
                        <td><a href="../service/02_training.php">연수기관 지정절차</a></td>
                        <td class="table_tt last_row"><a href="#" onclick="return false">기타</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/02_training.php">시험감독관</a></td>
                        <td class="last_row"><a href="/bbs/content.php?co_id=privacy">개인정보처리방침</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/02_training.php">FAQ</a></td>
                        <td class="last_row"><a href="/bbs/content.php?co_id=provision">서비스이용약관</a></td>
                    </tr>
                    <tr>
                        <td class="menu_2depth" rowspan="3"><a href="../service/03_exam.php">시험</a></td>
                         <td><a href="../service/03_exam.php">GPC 시험 소개</a></td>
                         <td class="last_row"><a href="/bbs/qalist.php">1:1상담</a></td>
                    </tr>
                     <tr>
                        <td><a href="../service/03_exam.php">GPC 시험응시 절차</a></td>
                        <td class="last_row"><a href="/bbs/search.php?sfl=wr_subject%7C%7Cwr_content&sop=and&stx=">게시판 전체 검색</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/03_exam.php">FAQ</a></td>
                        <td width="168"  class="last_row"><a href="/bbs/register.php">회원가입 페이지</a></td>
                    </tr>
                    <tr>
                        <td class="menu_2depth" rowspan="3"><a href="../service/04_edu.php">교육</a></td>
                        <td><a href="../service/04_edu.php">교육과정소개</a></td>
                        <td width="168"  class="last_row"><a href="/bbs/login.php">로그인 페이지</a></td> 
                    </tr>
                     <tr>
                        <td><a href="../service/04_edu.php">교육진행절차</a></td>
                        <td width="168"  class="last_row"></td> 
                    </tr>
                    <tr>
                        <td><a href="../service/04_edu.php">FAQ</a></td>
                        <td class="table_tt_2 last_row"><a href="https://gicertorg1.cafe24.com/gpc_eng/">영문홈페이지</a></td>
                    </tr>
                </table>
        </div>
        <br>
	</section>	
</div> <!--------------------------// class="content_wrap" //------------------------------->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>