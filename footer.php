</main> <!-- close main content area -->

<footer class="alert alert-info">

    <div class="col-sm-8">&copy; 2016 | COMP1006 Intro to Web Programming | Rich Freeman</div>
    <!-- weather widget start -->
    <div id="m-booked-small-t3-66813">
        <div class="booked-weather-120x36 w120x36-06" style="background-color:#2071C9; color:#FFFFFF; border-radius:4px;
         -moz-border-radius:4px;"><a style="color:#FFFFFF;" href="//www.booked.net/weather/barrie-w631790"
                                     class="booked-weather-120x36-city">Barrie</a>
            <div class="booked-weather-120x36-degree">-12...-2&deg; C</div>
        </div>
    </div>
    <script type="text/javascript">
        var css_file = document.createElement("link");
        css_file.setAttribute("rel", "stylesheet");
        css_file.setAttribute("type", "text/css");
        css_file.setAttribute("href", '//s.bookcdn.com/css/w/bw-120-36.css?v=0.0.1');
        document.getElementsByTagName("head")[0].appendChild(css_file);
        function setWidgetData(data) {
            if (typeof(data) != 'undefined' && data.results.length > 0) {
                for (var i = 0; i < data.results.length; ++i) {
                    var objMainBlock = document.getElementById('m-booked-small-t2-66813');
                    if (objMainBlock !== null) {
                        var copyBlock = document.getElementById('m-bookew-weather-copy-' + data.results[i].widget_type);
                        objMainBlock.innerHTML = data.results[i].html_code;
                        if (copyBlock !== null) objMainBlock.appendChild(copyBlock);
                    }
                }
            } else {
                alert('data=undefined||data.results is empty');
            }
        } </script>
    <script type="text/javascript" charset="UTF-8"
            src="http://widgets.booked.net/weather/info/?action=get_weather_info&cityID=&type=12&scode=2&domid=w209&cmetric=1&wlangID=1&color=2071c9&wwidth=118&header_color=2071c9&text_color=ffffff&link_color=ffffff&border_form=0&footer_color=2071c9&footer_text_color=ffffff&transparent=0"></script>
    <!-- weather widget end -->

</footer>

</body>
</html>