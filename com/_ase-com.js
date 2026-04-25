import * as echarts from './js/echarts/echarts.esm.js';

class LtagAse extends HTMLElement {

    connectedCallback() {

        let main = document.createElement("div");
        main.style = "width: 100%;height:400px;";
        this.appendChild(main);

        let location = this.getAttribute("location");
        var chart = echarts.init(main);

        let domain = 'https://data.luzern.com';
        //let domain = 'http://localhost:22687';

        let url = domain + "/public/ase-api/measurement?location=" + location;
        //measurement

        fetch(url, {
            method: "GET", headers: {
                "Accept": "application/json",
                "Content-Type": "application/json",
            }
        })
            .then(response => response.json())
            .then(data => {

                    let location;

                    let valueList = [];
                    let xList = [];

                    for (const element of data) {

                        //valueList = [];
                        //xList = [];

                        location = element["location"];

                        for (const element2 of element["data"]) {

                            let value = element2["count"];
                            valueList.push(value);
                            xList.push(element2["date"]+ ' '+element2["time"]);

                        }

                    }

                    console.log(xList);
                    console.log(valueList);


                    var option = {
                        title: {
                            text: location
                        },
                        tooltip: {},
                        animation: false,
                        xAxis: {
                            type: 'category',
                            data: xList
                        },
                        yAxis: {
                            type: 'value'
                        },
                        series: [
                            {
                                name: 'Wert',
                                type: 'line',
                                data: valueList
                            }
                        ]
                    };

                    chart.setOption(option);

                }
            )
            .catch(error => console.error('Error:', error));

    }

}

customElements.define('ltag-ase', LtagAse);
