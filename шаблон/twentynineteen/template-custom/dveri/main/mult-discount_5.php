<!--sms-discount_5.php-->
<div class="b-sms_bg sms-discount es3_balcons mult-discount template">
    <div class="container ">
        <div class="flex-container">
            <div class="b-sms-form">
                <div class="b-sms__text">
                    МУЛЬТВАРКА В ПОДАРОК
                </div>
                <div class="b-sms__undertext">
                    Впишите свой номер телефона и получите гарантированный подарок при заказе кухни!
                </div>
                <div class="b-sms__form">

                    <!-- ######### СМС-СКИДКА ######### -->
                    <!-- ######### СМС-СКИДКА ######### -->
                    <!-- ######### СМС-СКИДКА ######### -->
                    <form action="//<?php echo $_SERVER['SERVER_NAME']; ?>/php/mail.php" method="POST">
                        <input type="hidden" name="lang" value="СМС-СКИДКА" />
                        <div class="b-sms_input b-sms_input_tel form-group">
                            <input type="text" class="phonemask input-phone" data-validation="required"
                                placeholder="Ваш телефон" id="form_text_11" name="phone" value="" size="0" />
                        </div>
                        <div class="b-sms_but">
                            <button class="red-button" type="submit">отправить</button>
                        </div>
                    </form>
                    <!-- ######### СМС-СКИДКА ######### -->
                    <!-- ######### СМС-СКИДКА ######### -->
                    <!-- ######### СМС-СКИДКА ######### -->

                    <p><span style="display: block;">Оставляя свои контактные данные, вы подтверждаете свое</span> совершеннолетие, соглашаетесь на обработку персональных данных в соответствии с <a href="#">Правовой информацией</a></p>

                </div>
            </div>
            
            <div class="b-sms_phone">
                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/myltivarka_prez.png" alt="">
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.b-sms_bg -->