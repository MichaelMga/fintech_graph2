<!DOCTYPE html>
<html>

  <head>

      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <link rel='stylesheet' href='style/style.css'>
    
  </head>

   
   <body>
       

   <div id='myDiv'>
      <canvas id="myChart"></canvas>
   </div>





   <script>


   window.onload = function(){

    boardGraph();
   }


  function boardGraph(){

     
     
    let context = document.getElementById('myChart').getContext('2d');

     
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'bar',
        
         // The data for our dataset
         data: {
            labels: ['January', 'February', 'March', 'April', 'May' , 'June', 'July', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Expenses/month', 
                backgroundColor: ["rgb(0,184,255,0.35)", "rgb(255,0,0,0.35)",  "rgb(0,255,0,0.35)", "rgb(255,157,95,0.35)", "rgb(255,0,255,0.35)",  "rgb(0,89,78,0.55)", "rgb(55,13,74,0.35)", "rgb(55,69,75,0.7)",  "rgb(0,255,0,0.35)", "rgb(255,47,58,0.35)", "rgb(74,0,255,0.35)" , "rgb(255,85,255,0.35)" ],
                borderColor: 'rgb(255,0,0)',
                data: [17.5,15,20,28,25, 12,18,11,32,28,19,25]
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }
          }]
        }
        }
   );
        



  }



   
   
   </script>


   </body>



</html>
