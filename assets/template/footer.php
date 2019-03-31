<footer class="footer">
    <div class="container">
        <div class="sp-social-container">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </div>
        <div class="sp-credit">
            <p> Powered by <span> SeriousSajan.Inc </span> </p>
        </div>
    </div>


</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type='text/javascript'>
    //<![CDATA[
    $(document).ready(function () {
        var $body = $(document.body);
        var _SCROLL_FIXED_CUTOFF = _SCROLL_FIXED_CUTOFF || (
                $(window).height() >= 825 ?
                300 :
                75
            ),
            _HEADER_HEIGHT = _HEADER_HEIGHT || 825;
        $(window).scroll(function (e) {
            if ($('nav.top[data-no-scroll]').length)
                return;
            if (this.pageYOffset >= _SCROLL_FIXED_CUTOFF && !$body.hasClass('scrolled')) {
                $body.addClass('scrolled');
            } else if (this.pageYOffset < _SCROLL_FIXED_CUTOFF && $body.hasClass('scrolled')) {
                $body.removeClass('scrolled');
            }
            if (this.pageYOffset >= _HEADER_HEIGHT) {
                _header_carousel_active = false;
            } else {
                _header_carousel_active = true;
            }
        });
    });

    //]]>
</script>

</body>