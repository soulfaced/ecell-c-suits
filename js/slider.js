document.querySelector("#perks-header").onmouseover = function ()
{
    if (document.querySelector("#perks-header .slider-underline").classList.contains("width-full") == false)
    {
        document.querySelector("#perks-header .slider-underline").classList.toggle("width-full");
        document.querySelector("#startups-header .slider-underline").classList.toggle("width-full");
    }
}
document.querySelector("#perks-header").onmouseout = function ()
{
    if (document.querySelector("#perks").classList.contains("invisible") == true)
    {
        document.querySelector("#perks-header .slider-underline").classList.toggle("width-full");
        document.querySelector("#startups-header .slider-underline").classList.toggle("width-full");
    }
}




document.querySelector("#startups-header").onmouseover = function ()
{
    if (document.querySelector("#startups-header .slider-underline").classList.contains("width-full") == false)
    {
        document.querySelector("#perks-header .slider-underline").classList.toggle("width-full");
        document.querySelector("#startups-header .slider-underline").classList.toggle("width-full");
    }
}

document.querySelector("#startups-header").onmouseout = function ()
{
    if (document.querySelector("#startups").classList.contains("invisible") == true)
    {
        document.querySelector("#perks-header .slider-underline").classList.toggle("width-full");
        document.querySelector("#startups-header .slider-underline").classList.toggle("width-full");
    }
}


document.querySelector("#startups-header").onclick = function () {
    if (document.querySelector("#startups").classList.contains("invisible") == true)
    {
        document.querySelector("#startups").classList.toggle("invisible");
        document.querySelector("#perks").classList.toggle("invisible");
    }
}


document.querySelector("#perks-header").onclick = function () {
    if (document.querySelector("#perks").classList.contains("invisible") == true)
    {
        document.querySelector("#startups").classList.toggle("invisible");
        document.querySelector("#perks").classList.toggle("invisible");
    }
}