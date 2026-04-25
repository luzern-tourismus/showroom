document.addEventListener("DOMContentLoaded", function () {


    //document.getElementById("demo").innerHTML = "HTML is loaded!";


    document.getElementById("title").innerHTML = "Welcome to Lucerne";
    document.body.style.backgroundImage = "url('img/background.png')";

    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundPosition = "center";
    document.body.style.backgroundRepeat = "no-repeat";


    //let domain = 'https://data.luzern.com';
    let domain = 'http://localhost:45404';


    //http://localhost:45404/en/public/show-room-api/category
    let url = domain + "/en/public/show-room-api/category";
    //measurement

    fetch(url, {
        method: "GET", headers: {
            "Accept": "application/json",
            "Content-Type": "application/json",
        }
    })
        .then(response => response.json())
        .then(data => {


                //console.log(data);

                for (const element of data) {

                    console.log(element["category"]);

                    //(new PoiListing()).showHome();

                    const button = document.createElement("button");
                    button.textContent = element["category"];
                    button.className = "category_button";

                    button.addEventListener("click", () => {
                        //alert(element["id"]);

                        (new PoiListing()).showPoiList();

                    });

                    document.body.appendChild(button);


                }


            }
        )
        .catch(error => console.error('Error:', error));


});


class PoiListing {


    showHome() {


        const div = document.createElement("button");
        div.textContent = "Home";
        div.className = "home_button";

        div.addEventListener("click", () => {
            //alert(element["id"]);

            document.body.innerHTML = "";

        });

        document.body.appendChild(div);


    }


    showPoiList() {

        let domain = 'http://localhost:45404';

        //http://localhost:45404/en/public/show-room-api/category
        let url = domain + "/en/public/show-room-api/poi";
        //measurement


        fetch(url, {
            method: "GET", headers: {
                "Accept": "application/json",
                "Content-Type": "application/json",
            }
        })
            .then(response => response.json())
            .then(data => {


                    document.body.innerHTML = "";
                    (new PoiListing()).showHome();

                    for (const element of data) {

                        //console.log(element["poi"]);

                        const div = document.createElement("div");

                        const h2 = document.createElement("h2");
                        h2.textContent = element["poi"];
                        //button.className = "category_button";

                        div.addEventListener("click", () => {
                            //alert(element["id"]);
                        });

                        div.appendChild(h2);
                        
                        document.body.appendChild(div);


                    }


                }
            )
            .catch(error => console.error('Error:', error));


    }


}



