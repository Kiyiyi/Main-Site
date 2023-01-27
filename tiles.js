document.getElementById("seo").addEventListener("touchstart", touchHandler, false);
document.getElementById("seo").addEventListener("touchend", touchHandler, false);
document.getElementById("ui").addEventListener("touchstart", touchHandler, false);
document.getElementById("ui").addEventListener("touchend", touchHandler, false);
document.getElementById("accessibility").addEventListener("touchstart", touchHandler, false);
document.getElementById("accessibility").addEventListener("touchend", touchHandler, false);
document.getElementById("digitize").addEventListener("touchstart", touchHandler, false);
document.getElementById("digitize").addEventListener("touchend", touchHandler, false);
document.getElementById("trust").addEventListener("touchstart", touchHandler, false);
document.getElementById("trust").addEventListener("touchend", touchHandler, false);

function touchHandler(e)
{
    if (e.type == "touchstart")
    {
        alert("You touched the screen on ");
    } else if (e.type == "touchend")
    {
        alert("You removed your finger from ");
    }
    else
    {
        alert("none detected");
    }
}