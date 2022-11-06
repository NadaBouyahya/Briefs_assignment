
var search_btn = document.querySelector("#search");
var promotion_data = document.getElementById('promotion_data');

search_btn.addEventListener("keyup", function () {

    fetch('index_search/' + search_btn.value, {
        method: "GET"
    })
        .then((response => {
            return response.text()
        })).then((data) => {
            console.log(data);
            promotion_data.innerHTML = data;

        })

})