import './bootstrap';

// UI


// Start right navbar
const getsitesettings = document.getElementById('sitesettings');

getsitesettings.addEventListener('click',function(){
    document.body.classList.toggle("show-nav");
})
// End right navbar


 // Start Navbar
    // start top navbar
    function dropbtn(e){
        // console.log(e.target);
        // console.log(e.target.parentElement.nextElementSibling);

        e.target.parentElement.nextElementSibling.classList.toggle("show");
    }
    // end top navbar
// End Navbar

$(document).ready(function(){
 // Start Navbar
    //start left side bar
        $(".sidebarlinks").click(function(){
            $(".sidebarlinks").removeClass("currents");
            $(this).addClass("currents");
        });
    //end left side bar
 // End Navbar
});


// Start Gauge Area

var gaugeurs = new JustGage({
    id: "gaugeusers", 
    value: 50,
    min: 0,
    max: 100,
    decimals: 2,
    gaugeWidthScale: 0.6
});

var gaugecus = new JustGage({
    id: "gaugecustomers", 
    value: 50,
    min: 0,
    max: 100,
    decimals: 2,
    gaugeWidthScale: 0.6
});

var gaugeempls = new JustGage({
    id: "gaugeemployees", 
    value: 50,
    min: 0,
    max: 100,
    decimals: 2,
    gaugeWidthScale: 0.6
});

var gaugeinvs = new JustGage({
    id: "gaugeinvesters", 
    value: 50,
    min: 0,
    max: 100,
    decimals: 2,
    gaugeWidthScale: 0.6
});

// update the value randomly
setInterval(() => {
    gaugeurs.refresh(Math.random() * 100);
    gaugecus.refresh(Math.random() * 100);
    gaugeempls.refresh(Math.random() * 100);
    gaugeinvs.refresh(Math.random() * 100);
}, 5000)

// End Gauge Area


// Start Expenses Area
const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
        data: [12, 19, 3],
        borderWidth: 1
      }]
    },
    options: {
    }
  });
// End Expenses Area


// Start Earning Area
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Sales Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
// End Earning Area


// start footer
const getyear = document.getElementById('getyear');
const getfullyear = new Date().getFullYear();
getyear.innerText = getfullyear;
// end footer

