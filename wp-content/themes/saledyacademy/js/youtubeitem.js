var player;
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: $('#player').data('video-id'),
        playerVars: {
            modestbranding: 1,
            cc_load_policy: 0,
            rel:0,
            showinfo: 0,
            fs: 0,
        },
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange,
        }
    });
}
function onPlayerReady(event) {
    event.target.setVolume(100);
}
function onPlayerStateChange(event) {
    if (event.data === 0) {
        $('#next-item-btn').show();
    }
}
$(document).ready(function(){
    $('#video-btn').click(function(){
        player.playVideo();
    });
    var top =  $(window).height() - 0.45*($(window).width());
    top = top/2;
    $('.modal-trigger').leanModal({
        dismissible: true,
        opacity: .9,
        in_duration: 300,
        out_duration: 200,
        ending_top: top + "px",
        ready: function() { player.playVideo();
            top =  $(window).height() - 0.45*($(window).width());
            top = top/2;
            $('#modal1').css({"top": top+"px"});
        },
        complete: function() { player.pauseVideo(); }
    });
    $(window).resize(function(){
        top =  $(window).height() - 0.45*($(window).width());
        top = top/2;
        $('#modal1').css({"top": top+"px"});
    });
});
