<footer class="ls-footer" role="contentinfo">
                <nav class="ls-footer-menu">
                    <h2 class="ls-title-footer">suporte e ajuda</h2>
                    <ul class="ls-footer-list">
                        <li>
                            <a href="<?php echo base_url() ?>contato/listar" class="bg-customer-support">
                                <span class="visible-lg">Atendimento</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>home/ajuda" target="_blank" class="bg-help-desk">
                                <span class="visible-lg">Central de Ajuda (Wiki)</span>
                            </a>
                        </li>
                    </ul>
                </nav>
               <div class="ls-footer-info">
                     <!--<span class="last-access ls-ico-screen"><strong>Último acesso: </strong>99/99/9999 99:99:99</span>
                    <div class="set-ip"><strong>IP:</strong> 000.00.00.000</div>  -->
                    <p class="ls-copy-right">Copyright © 2014-2016 - COMUNICA | FASES - Fábrica de Software.</p>
                </div>
            </footer>

        </main>


        <aside class="ls-notification">
            <nav class="ls-notification-list" id="ls-notification-curtain">
                <h3 class="ls-title-2">Notificações</h3>
                <ul>
                    <li class="ls-dismissable">
                        <a href="#">Aspernatur laborum eaque dolores deleniti repellat consequatur</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">Error eos deleniti omnis rerum est explicabo</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">Tempore nobis temporibus et deserunt necessitatibus nemo adipisci dignissimos deleniti</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">Fugit velit voluptates non numquam nobis est magnam aspernatur dolorem non</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">Dignissimos incidunt nostrum et repellat</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                </ul>
                <p class="ls-no-notification-message">Não há notificações.</p>
            </nav>
            <nav class="ls-notification-list" id="ls-help-curtain">
                <h3 class="ls-title-2">Feedback</h3>
                <ul>
                    <li><a href="#">> numquam omnis consequatur et quia vel</a></li>
                    <li><a href="#">> praesentium ducimus porro ut voluptas soluta</a></li>
                </ul>
            </nav>
            <nav class="ls-notification-list" id="ls-feedback-curtain">
                <h3 class="ls-title-2">Ajuda</h3>
                <ul>
                    <li class="ls-txt-center hidden-xs">
                        <a href="#" class="ls-btn-dark ls-btn-tour">Fazer um Tour</a>
                    </li>
                    <li><a href="#">> Guia</a></li>
                    <li><a href="#">> Wiki</a></li>
                </ul>
            </nav>
        </aside>


        <script src="<?= base_url() ?>www/js/libs/example.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>www/js/locastyle.js" type="text/javascript"></script>
        <script src="//code.highcharts.com/highcharts.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>www/js/libs/panel-charts.js" type="text/javascript"></script>

        <!-- Usando o CSS do servidor 
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="http://assets.locaweb.com.br/locastyle/3.8.2/javascripts/locastyle.js" type="text/javascript"></script>-->

        <script type="text/javascript">
            $(window).load(function () {
                locastyle.browserUnsupportedBar.init();
            });
        </script>

    </body>
</html>
