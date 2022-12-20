const filterItem = document.querySelectorAll('.card__item');

document.querySelector('.brand').addEventListener("change", (event)=>{
    
    let filterClass = event.target.dataset['brand'];

    if(event.target.checked){
        
        
        filterItem.forEach(elem => {
            if(!elem.classList.contains(filterClass)){
                if(!elem.classList.contains('checked')){
                    elem.style.position = "absolute";
                    elem.style.display = "none";
                }
                else{
                    elem.style.position = "static";
                    elem.style.display = "flex";
                }

            }
            else{
                elem.classList.add('checked');
                elem.style.position = "static";
                elem.style.display = "flex";
            }
        });
    }
    else{
        filterItem.forEach(elem => {
            if(!elem.classList.contains(filterClass)){
                if(elem.classList.contains('checked')){
                    elem.style.position = "static";
                    elem.style.display = "flex";
                }
                else{
                    elem.style.position = "absolute";
                    elem.style.display = "none";
                }

            }
            else{
                elem.classList.remove('checked');
                elem.style.position = "absolute";
                elem.style.display = "none";
            }
        });
    }
    

});

document.querySelector('.sex').addEventListener("change", (event)=>{
    
    let filterClass = event.target.dataset['sex'];

    if(event.target.checked){
        
        
        filterItem.forEach(elem => {
            if(!elem.classList.contains(filterClass)){
                if(!elem.classList.contains('checked')){
                    elem.style.position = "absolute";
                    elem.style.display = "none";
                }
                else{
                    elem.style.position = "static";
                    elem.style.display = "flex";
                }

            }
            else{
                elem.classList.add('checked');
                elem.style.position = "static";
                elem.style.display = "flex";
            }
        });
    }
    else{
        filterItem.forEach(elem => {
            if(!elem.classList.contains(filterClass)){
                if(elem.classList.contains('checked')){
                    elem.style.position = "static";
                    elem.style.display = "flex";
                }
                else{
                    elem.style.position = "absolute";
                    elem.style.display = "none";
                }

            }
            else{
                elem.classList.remove('checked');
                elem.style.position = "absolute";
                elem.style.display = "none";
            }
        });
    }
    

});