document.querySelectorAll(".container")[1].addEventListener("click", (e) => {
    if(e.target.classList.contains('title')) {
        e.preventDefault();
        let el = e.target;
        (e.target.getAttribute("data-toggle") == 0 ? e.target.setAttribute("data-toggle", 1) : e.target.setAttribute("data-toggle", 0) );
    }
});