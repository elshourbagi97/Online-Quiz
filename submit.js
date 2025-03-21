let sub = document.getElementById('sub');
let res = document.getElementById('res')

sub.onclick = () => {
    setTimeout(() => {
        res.style.display = "flex";
        res.style.zIndex = "8";  
    }, 500);

};
