<!DOCTYPE html>
<html lang="ko">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../dist/main.css">
</head>
<body>    
    <?php include './Include/header-black.php';?>

    <div class="contactus">
        <div class="contactus-bg"></div>
        <div class="wrapper clearfix">
            <h1 class="contactus-tit m:tit-xxl t:tit-xl d:tit-xxxl unna">
                <span>Yolllley studio</span>
                <span>Contact Us</span>
            </h1>
            <div class="contactus-inner">
                <div class="address">
                    <h2 class="m:tit-md t:tit-lg unna">Address</h2>
                    <p class="address-desc m:tit-xxxxxs t:tit-xxxxs">
                        서울 서대문구 연희동 136-31 <br/>
                        301’ ,136-31, Yeonhui-dong , Seodaemun-gu, <br/>
                        Seoul 
                    </p>
                </div>
                <div class="number">
                    <h2 class="m:tit-md t:tit-lg unna">Number</h2>
                    <span class="number-desc m:tit-xxxxxs t:tit-xxxxs">(+82)10-9274-5052</span>
                    <span class="number-desc m:tit-xxxxxs t:tit-xxxxs">(+82)10-4274-6242</span>
                </div>
                <form action="/" method="post">
                    <article class="info-components clearfix">
                        <h2 class="m:tit-md t:tit-lg unna">Contact us</h2>
                        <div class="info-inner clearfix">
                            <div>
                                <input class="input input-sm input-block" type="text" placeholder="이름*">
                            </div>
                            <div>
                                <input class="input input-sm input-block" type="text" placeholder="연락처*">
                            </div>
                        </div>

                        <div class="check-box__wrap">
                            <label class="check-box__component all-chacked" for="check1">
                                <input type="checkbox" name="vehicle" class="chack" value="check" id="check1">
                                <div class="check-box__inner">
                                    <i class="material-icons">check_box_outline_blank</i>
                                    <span class="m:tit-xxxxxs">상업</span>
                                </div>
                            </label>
                            <label class="check-box__component all-chacked" for="check2">
                                <input type="checkbox" name="vehicle" class="chack" value="check" id="check2">
                                <div class="check-box__inner">
                                    <i class="material-icons">check_box_outline_blank</i>
                                    <span class="m:tit-xxxxxs">주거</span>
                                </div>
                            </label>
                            <label class="check-box__component all-chacked" for="check3">
                                <input type="checkbox" name="vehicle" class="chack" value="check" id="check3">
                                <div class="check-box__inner">
                                    <i class="material-icons">check_box_outline_blank</i>
                                    <span class="m:tit-xxxxxs">외</span>
                                </div>
                            </label>
                        </div>

                        <input class="input input-sm input-block" type="text" placeholder="업체명*">
                        <div class="info-inner clearfix">
                            <div>
                                <input class="input input-sm input-block" type="text" placeholder="이메일*">
                            </div>
                            <div>
                                <input class="input input-sm input-block" type="text" placeholder="예상 예산*">
                            </div>
                        </div>
                        <textarea  placeholder="문의내용*" class="input input-sm input-block" autocomplete="off" class="textarea_touch_general" id="textarea_deltaone_note" maxlength="2500" minlength="25" name="Write message:" required spellcheck="false" tabindex="5" wrap="soft"></textarea>
                        <div class="btn-inner">
                            <button class="btn btn-sm btn-block btn-b">Send</button>
                        </div>
                    </article>
                </form>
            </div>
        </div>
    </div>
    
   <?php include './Include/footer.php';?>

    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="/src/js/common.js"></script>
    <script type="text/javascript">
        $(function(){
            var handler = function(e) {
                if($(e.target).prop("checked") === true) { 
                    $(e.currentTarget).next('.check-box__inner').find('.material-icons').text('check_box');
                } else {
                    $(e.currentTarget).next('.check-box__inner').find('.material-icons').text('check_box_outline_blank');
                }
            }
            $('.info-components').on('click','.chack', handler)
        })
    </script>
</body>
</html>