function AddSiteTitle(){
    const siteTitle = document.getElementsByClassName('site-title')

    for (var i = 0; i < siteTitle.length; i++) {
        var span = document.createElement('span')
        var spanText = document.createTextNode("5 Freedoms Ranch") 
        var br = document.createElement('br')
        var newSiteTitle = document.createTextNode("Rescue & Rehabilitation Society")
        span.appendChild(spanText)

        siteTitle[i].appendChild(span)
        siteTitle[i].appendChild(br)
        siteTitle[i].appendChild(newSiteTitle)
    }
    
}
AddSiteTitle()


const link = document.querySelector('.intro-bg .read-more')
if(link){
    link.addEventListener('click', (e)=>{
        var text = document.querySelector('.read-more-text')
        if(text.classList.contains('show-text')){
            text.classList.remove('show-text')
        }
        else {
            text.classList.add('show-text')
        }

        e.preventDefault()
    })
}



function AboutMissionVission(e, sectName) {
    
    var i, x, tablinks;
    x = document.getElementsByClassName('ms-content');
    for (i = 0; i < x.length; i++) {
        if(x[i].classList.contains('show-section')){
            x[i].classList.remove('show-section')
        }
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
    
    document.getElementById(sectName).classList.add('show-section')
    
    e.currentTarget.className += " dk-blue";
}



function addDonateRevealSvg() {
    const donateRevealBtn = document.querySelector('.give-btn-reveal')
    const icon = document.createElement('i')
    icon.setAttribute('class', 'fa-solid fa-chevron-right' )
    if(donateRevealBtn){
        donateRevealBtn.append(icon)
    }
}
addDonateRevealSvg()


function addImageDonateOption(){
    const image = document.getElementsByClassName('donate-option-image')[0]
    const donateForm = document.querySelector('.donate-option-form .give-form-wrap .give-form-content-wrap')
    const wishlistForm = document.querySelector('.donate-option-form .wpcf7')
    
    if(donateForm){
        donateForm.append(image)
    }
    
    if(wishlistForm){
        wishlistForm.append(image)
    }
}
addImageDonateOption()