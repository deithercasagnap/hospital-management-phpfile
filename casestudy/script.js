const display_home_page = () => {
    
    document.querySelector('#patient-page').setAttribute('class', 'row mt-5 d-none')
    document.querySelector('#home-page').setAttribute('class', 'row justify-content-center align-items-center');
    
}

const display_patients_page = () => {

    document.querySelector('#home-page').setAttribute('class', 'row justify-content-center align-items-center mt-5 d-none')
    document.querySelector('#patient-page').setAttribute('class', 'row mt-5 d-block')
}



