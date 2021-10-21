var resizeTime;
var resizeTimeout = false;
var resizeDelta = 200;

function resize()
{
    let margin = 25;

    // reset
    $(".video-item").css({"margin-top": margin + "px", "margin-left": margin + "px"});

    // resize
    let containerWidth = $(".videos-container").width();
    let videoItemWidth = $(".video-item").width();
    let itemsPerRow = (containerWidth - margin) / (videoItemWidth + margin);
    itemsPerRow = Math.floor(itemsPerRow);

    var occupiedSpace = itemsPerRow * (videoItemWidth + margin) - margin;
    var shoulder = (containerWidth - occupiedSpace) / 2;
    let lastRowCount = Math.floor($(".video-item").length / itemsPerRow);
    lastRowCount *= itemsPerRow;
    lastRowCount = $(".video-item").length - lastRowCount;

    let lastRowMargin = lastRowCount * (videoItemWidth + margin) - margin;
    lastRowMargin = (containerWidth - lastRowMargin) / 2;
    
    for (let i = 0; i < $(".video-item").length; i++)
    {        
        // first video in every row
        if (i % itemsPerRow == 0) {
            $($(".video-item")[i]).css("margin-left", shoulder + "px");
        }
        // the first row
        if (i < itemsPerRow) {
            $($(".video-item")[i]).css("margin-top", "0px");
        }
        // the first video in the last row
        if ($(".video-item").length - i == lastRowCount) {
            $($(".video-item")[i]).css("margin-left", lastRowMargin + "px");
        }
    }
}

// wait for the resize event to end, then reposition the elements according to the window size
function resizeEndded() 
{
    if (new Date() - resizeTime < resizeDelta) {
        setTimeout(resizeEndded, resizeDelta);
    } 
    else 
    {
        resizeTimeout = false;                        
        resize();
    }               
}

$(window).on("resize", function()
{         
    resize();
    resizeTime = new Date();
    if (resizeTimeout === false)
    {
        resizeTimeout = true;
        setTimeout(resizeEndded, resizeDelta);
    }                                 
});

$(window).on("load", function() {
    resize();
});

$(document).ready(function() {
    resize();
});
