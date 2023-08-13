
const ctx = document.getElementById('myChart');

var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', "http://localhost/Assignment/OpenReviewSkeleton/graph_data.php");
ourRequest.onload = function() {
    var ourData = JSON.parse(ourRequest.responseText);
    //console.log(ourData);
    var total_rating_list = [];
    var company_name_list = [];

    for(var i in ourData) {
        total_rating_list.push(ourData[i].overall_rating);
        company_name_list.push(ourData[i].company_name);
    }
    console.log(total_rating_list);
    console.log(company_name_list);

    const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: company_name_list,
                datasets: [{
                    label: 'Overall Rating',
                    data: total_rating_list,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1,
                    barThickness: 38,
                    scaleFontColor: "#ffffff"
                }]
            },
            options: {
                scales: {
                    x: {
                        ticks: {
                            color: "white"
                        }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: "white"
                        }
                    }
                },
                responsive: true
            }
    });
};
ourRequest.send();