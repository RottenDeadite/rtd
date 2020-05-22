<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-53512164-2', 'auto');
ga('send', 'pageview');

$(document).ready(function(){
    $('a.imgModal').click(function(e){
        let link = $(this).attr('href');
        showModal();
        $('#modalContent').addClass('visible').html('<img src="' + link + '"/>');
        e.preventDefault();
    });
    $('a.htmlModal').click(function(e){
        let id = $(this).attr('href');
        let $content = $('#' + id);
        showModal();
        $('#htmlContent').addClass('visible').html($content.clone(true,true));
        e.preventDefault();
    });
    $('#modalBg').click(function(e){
        hideModal();
    });
    $('#modalClose').click(function(e){
        hideModal();
    });
    function showModal(){
        $('body').css('overflow', 'hidden');
        let $modal = $('#modalWrapper');
        $('#modalBg').addClass('visible');
        $modal.children('.visible').removeClass('visible');
        $modal.addClass('visible').attr('aria-hidden', 'false');

        return true;
    }
    function hideModal(){
        let $modal = $('#modalWrapper');
        $('#modalBg').removeClass('visible');
        $modal.children('.visible').removeClass('visible');
        $modal.removeClass('visible').attr('aria-hidden', 'true');
        $('#htmlContent').html('');
        $('#modalContent').html('');
        $('body').css('overflow', 'visible');
        return true;
    }
});

 
</script>
<!-- End Google Analytics -->