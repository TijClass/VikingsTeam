document.getElementById("toggle").onclick = function(){
    clickme()
};

function clickme(){
    if (document.getElementById("nav").style.display === 'none'){
        document.getElementById("nav").style.display === 'block';
    }else {
        document.getElementById("nav").style.display === 'none';
    }
}