with(document.formu) {
    onsubmit = function() {
    abdeb = (date_debut_cours.value.split(/[- //]/));
    tabfin = (date_fin_cours.value.split(/[- //]/));
    Odeb = new Date(tabdeb[2],tabdeb[1],tabdeb[0]);
    Ofin = new Date(tabfin[2],tabfin[1],tabfin[0]);
        if(Odeb > Ofin) {
            alert('Date fin du cours doit etre superieure a la date du debut')
                date_debut_cours.focus(); date_fin_cours.style.backgroundColor='#F00';
                return false 
        };
    };
};