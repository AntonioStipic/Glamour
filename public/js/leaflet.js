// var videoSrc = $("#dvoranaVideo").attr("src");
//
// $(document).ready(function () {
//     $("#dvoranaVideo").attr("src", videoSrc + "?controls=0&showinfo=0&rel=0&autoplay=1&loop=1");
// });
//


// var tag = document.createElement('script');
//
// tag.src = "https://www.youtube.com/iframe_api";
// var firstScriptTag = document.getElementsByTagName("script")[0];
// firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
//
// // 3. This function creates an <iframe> (and YouTube player)
// //    after the API code downloads.
// var player;
// function onYouTubeIframeAPIReady() {
//     player = new YT.Player('player', {
//         videoId: '92k1_ByaNqg',
//         events: {
//             'onReady': onPlayerReady,
//             'onStateChange': onPlayerStateChange
//         }
//     });
// }
//
// // 4. The API will call this function when the video player is ready.
// function onPlayerReady(event) {
//     event.target.playVideo();
// }
//
// // 5. The API calls this function when the player's state changes.
// //    The function indicates that when playing a video (state=1),
// //    the player should play for six seconds and then stop.
// var done = false;
// function onPlayerStateChange(event) {
//     if (event.data == YT.PlayerState.PLAYING && !done) {
//         setTimeout(stopVideo, 6000);
//         done = true;
//     }
// }
// function stopVideo() {
//     player.stopVideo();
// }







var tag = document.createElement('script');
tag.src = 'https://www.youtube.com/iframe_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var tv,
    playerDefaults = {autoplay: 0, autohide: 1, modestbranding: 0, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 1, iv_load_policy: 3, loop: 1, playlist: "92k1_ByaNqg"};
var vid = [
        {'videoId': '92k1_ByaNqg', 'startSeconds': 0, 'endSeconds': 90, 'suggestedQuality': 'hd720'}
    ],
    randomVid = Math.floor(Math.random() * vid.length),
    currVid = randomVid;

$('.hi em:last-of-type').html(vid.length);

function onYouTubePlayerAPIReady(){
    tv = new YT.Player('tv', {events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, playerVars: playerDefaults});
}

function onPlayerReady(){
    tv.loadVideoById(vid[currVid]);
    tv.mute();
    $("#videoLoading").css("visibility", "hidden");
}

function onPlayerStateChange(e) {
    if (e.data === 1){
        $('#tv').addClass('active');
        $('.hi em:nth-of-type(2)').html(currVid + 1);
    } else if (e.data === 2){
        $('#tv').removeClass('active');
        if(currVid === vid.length - 1){
            currVid = 0;
        } else {
            currVid++;
        }
        tv.loadVideoById(vid[currVid]);
        tv.seekTo(vid[currVid].startSeconds);
    }
}

function vidRescale(){

    var w = $(window).width()+200,
        h = $(window).height()+200;

    if (w/h > 16/9){
        tv.setSize(w, w/16*9);
        $('.tv .screen').css({'left': '0px'});
    } else {
        tv.setSize(h/9*16, h);
        $('.tv .screen').css({'left': -($('.tv .screen').outerWidth()-w)/2});
    }
}

$(window).on('load resize', function(){
    vidRescale();
});

$('.hi span:first-of-type').on('click', function(){
    $('#tv').toggleClass('mute');
    $('.hi em:first-of-type').toggleClass('hidden');
    if($('#tv').hasClass('mute')){
        tv.mute();
    } else {
        tv.unMute();
    }
});

$('.hi span:last-of-type').on('click', function(){
    $('.hi em:nth-of-type(2)').html('~');
    tv.pauseVideo();
});









var mymap = L.map("mapid").setView([45.492104, 18.101176], 16);


let token = "pk.eyJ1IjoiYW50b25pb3N0aXBpYyIsImEiOiJjamxldHpqN2Qwbm8xM2ttdGpvMzhsaWk3In0.3G_8rxv1EZwrSaCdYYR8Jw";
// let token = "";
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=' + token, {
    attribution: '<span class="mapData">Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a></span>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);

var marker = L.marker([45.492104, 18.101176]).addTo(mymap);


