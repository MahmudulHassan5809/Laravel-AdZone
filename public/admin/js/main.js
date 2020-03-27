jQuery(document).ready(function($) {
     if ($('#category_ads_count_array').length != 0){
        var category_ads_count_array = JSON.parse($('#category_ads_count_array').text());

        var labels = [];
        var data = [];

        $.each(category_ads_count_array, function(key, value) {
            labels.push(key);
            data.push(value);
        });

        new Chart(document.getElementById("category_ads_count_bar_chart"), {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [
              {

                barThickness: 20,
                  label: "Ads Per Category",
                  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                  data: data
              }
              ]
          },
          options: {
                legend: { display: false },
                  title: {
                    display: true,
                    text: 'Ads Per Category'
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        });
    }
});
