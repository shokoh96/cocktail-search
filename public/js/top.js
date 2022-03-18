//SVGアニメーションの描画
var stroke;
stroke = new Vivus('mask', {
    start:'manual',
    type: 'scenario-sync',
    duration: 80,
    forceRender: false,
    animTimingFunction:Vivus.EASE,
}
);

$(window).on('load',function(){
    $("#splash").delay(2000).fadeOut('slow');
    $("#splash_logo").delay(2000).fadeOut('slow');
        stroke.play();
});
