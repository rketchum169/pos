let insert = document.querySelector("a.number")
insert.addEventListener("click", (evt)=> {
        evt.preventDefault()
        let numbers = document.querySelectorAll("span.number")
        numbers = [...numbers].map(function(n){
        return parseInt(n.innerText)
        })

        let que = document.querySelector(".ledger")
        let quenumber = insert.numbers
        
})