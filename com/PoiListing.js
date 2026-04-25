class PoiListing {


    showPoiList() {

        let domain = 'http://localhost:45404';


        //http://localhost:45404/en/public/show-room-api/category
        let url = domain + "/en/public/show-room-api/poi";
        //measurement

        (new PoiListing()).showHome();

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

                        //console.log(element["poi"]);


                        const div = document.createElement("h2");
                        div.textContent = element["poi"];
                        //button.className = "category_button";

                        div.addEventListener("click", () => {
                            //alert(element["id"]);
                        });

                        document.body.appendChild(div);



                    }


                }
            )
            .catch(error => console.error('Error:', error));




    }


}
