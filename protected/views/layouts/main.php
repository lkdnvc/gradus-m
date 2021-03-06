﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="ru"/>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div class="modal fade" data-width="600">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Заказать обратный звонок</h4>
            </div>
            <div class="modal-body">
                <?php $this->renderPartial('application.views.site._callback', array('model' => $this->callback)) ?>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div id="wrap" class="maxwidth">
    <div id="header">
        <!-- Header -->
        <div id="top-line">
            <div class="top-contacts">
                <div class="description">Телефон для связи</div>
                <div class="phone"><span class="code"></span><span
                        class="phone-number"><?php echo $this->contacts['tel']; ?></span></div>
                <div>
                    <a href="#callback" class="callback-link">Заказать обратный звонок</a>
                </div>
            </div>
            <a class="logo" href="<?php echo $this->createAbsoluteUrl('index'); ?>"></a>
        </div>

        <!-- Menu -->
        <?php $this->renderPartial('application.views.layouts._menu', array('current_item' => 'about')) ?>
    </div>

    <div id="content">
        <?php echo $content; ?>
        <div class="anchor"></div>
    </div>
    <div class="anchor"></div>
    <div id="all-site-menu" onclick="stopPrepagenation(event)">
        <table id="full-menu">
            <tr>
                <td width="80">
                    <a class="full-menu-section" href="/site/about">О компании</a>
                    <?php foreach ($this->menu['about'] as $value): ?>
                        <a href="<?php echo $value['href']; ?>"><?php echo $value['title']; ?></a>
                    <?php endforeach; ?>
                </td>
                <td width="130">
                    <a class="full-menu-section" href="/site/equipment">Оборудование</a>

                    <?php foreach ($this->menu['equipment'] as $value): ?>
                        <a href="<?php echo $value['href']; ?>"><?php echo $value['title']; ?></a>
                    <?php endforeach; ?>
                </td>
                <td width="145">
                    <a class="full-menu-section" href="/site/equipment">Услуги</a>
                    <?php foreach ($this->menu['services'] as $value): ?>
                        <a href="<?php echo $value['href']; ?>"><?php echo $value['title']; ?></a>
                    <?php endforeach; ?>
                </td>
                <td width="90">
                    <a class="full-menu-section" href="/site/works">Работы</a>
                    <?php foreach ($this->menu['works'] as $value): ?>
                        <a href="<?php echo $value['href']; ?>"><?php echo $value['title']; ?></a>
                    <?php endforeach; ?>
                </td>
                <td width="40">
                    <a class="full-menu-section" href="/site/about#contact">Контакты</a>
                </td>
            </tr>
        </table>
    </div>
    <div class="push"></div>
</div>
<div id="footer" class="maxwidth">
    <div class="copyright"><?php echo $this->contacts['coperite']; ?></div>
    <div class="company-name"><?php echo $this->contacts['full_name']; ?></div>
    <table class="contacts">
        <tr>
            <td>
                <?php echo $this->contacts['anschrift']; ?><br/>
                Телефон:  <?php echo $this->contacts['tel']; ?><br/>
                Электронная почта: <a
                    href="mailto:<?php echo $this->contacts['email']; ?>"> <?php echo $this->contacts['email']; ?></a>
            </td>
            <td>
                Тел. горячей линии:  <?php echo $this->contacts['tel_hotline']; ?><br/>
                <?php if (!empty($this->contacts['tel_handy'])) {
                    echo "Тел. мобильный: " . $this->contacts['tel_handy'];
                } ?>
            </td>
        </tr>
    </table>
</div>

<!-- Yandex.Metrika counter -->
<?php if (true): ?>
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter22202273 = new Ya.Metrika({id: 22202273,
                        webvisor: true,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true});
                } catch (e) {
                }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");
    </script>
<?php endif; ?>
<noscript>
    <div><img src="//mc.yandex.ru/watch/22202273" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
