function AddSiteTitle(){
    const siteTitle = document.getElementsByClassName('site-title')[0]
    // const siteTitleLink = siteTitle.childNodes[0]
    

    var span = document.createElement('span')
    var spanText = document.createTextNode("5 Freedoms Ranch") 
    var br = document.createElement('br')
    var newSiteTitle = document.createTextNode("Rescue & Rehabilitation Society")
    span.appendChild(spanText)

    siteTitle.appendChild(span)
    siteTitle.appendChild(br)
    siteTitle.appendChild(newSiteTitle)

    // console.log(siteTitleLink)
}
AddSiteTitle()


function toggleIntroReadMore() {
    document.querySelector('.intro-bg .read-more').addEventListener('click', toggle)

    function toggle(e) {
        var text = document.querySelector('.read-more-text')
        if(text.classList.contains('show-text')){
            text.classList.remove('show-text')
        }
        else {
            text.classList.add('show-text')
        }

        e.preventDefault()
    }
}
toggleIntroReadMore()


function AboutMissionVission(e, sectName) {
    
    var i, x, tablinks;
    x = document.getElementsByClassName('ms-content');
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName('ms-title');
    
        for (i = 0; i < x.length; i++) {
            if(tablinks[i].classList.contains(' dk-blue')) {
                tablinks[i].className = tablinks[i].className.replace("", " dk-blue");
            }
            else {
                tablinks[i].className = tablinks[i].className.replace(" dk-blue", "");
            }
        }
    
    document.getElementById(sectName).style.display = "block";
    e.currentTarget.className += " dk-blue";
}