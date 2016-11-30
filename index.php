<script src="node_modules/chart.js/dist/Chart.js"></script>
<script src="node_modules/chart.js/dist/Chart.bundle.js"></script>
	<script>
	
var first= Math.floor((Math.random() * 255) + 1);
var second= Math.floor((Math.random() * 255) + 1);
var third= Math.floor((Math.random() * 255) + 1);

</script>
<canvas id="myChart" width="0" height="0"></canvas>





<script>
	
var ctx = document.getElementById("myChart");


var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July","August","September","Oktober","November","December"],
        datasets: [{
             label: "# last seen in the month of:",
            fill: false,
            lineTension: 0.1,
            backgroundColor:[ 


            // ctx.fillStyle = "rgba(32, 45, 21, " + r_a + ")"; 
            		 "rgba("+first+","+second+", "+third+", 0.2 )",		
            		 "rgba("+first+","+second+", "+third+", 0.2 )",		
            		 "rgba("+first+","+second+", "+third+", 0.2 )",		
            		 "rgba("+first+","+second+", "+third+", 0.2 )",		
            		 "rgba("+first+","+second+", "+third+", 0.2 )",		
            		 "rgba("+first+","+second+", "+third+", 0.2 )",		
            		 "rgba("+first+","+second+", "+third+", 0.2 )",		
            		 "rgba("+first+","+second+", "+third+", 0.2 )",		
            		 "rgba("+first+","+second+", "+third+", 0.2 )",		
            		 "rgba("+first+","+second+", "+third+", 0.2 )",		
            		 "rgba("+first+","+second+", "+third+", 0.2 )",	
            		 "rgba("+first+","+second+", "+third+", 0.2 )",		

            				 // 'rgba(75,192,192,0.4)', 		  //jan
             				//  'rgba(54, 162, 235, 0.2)', 	  //feb
               		// 		 'rgba(255, 206, 86, 0.2)', 	  //mar
                	// 		 'rgba(75, 192, 192, 0.2)', 	  //apr
                 //             'rgba(153, 102, 255, 0.2)',	  //may
                 //              // "rgba("r", 192, 192, 0.2)",		//june
                 //             "rgba("+first+","+second+", "+third+", 0.2 )",		  //june
                 //             'rgba(255, 159, 64, 0.2)',	      //july
                 //             'rgba(255, 159, 64, 0.2)',       //augst
                 //             'rgba(255, 159, 64, 0.2)',       //sept
                 //             'rgba(255, 159, 64, 0.2)',       //okt
                 //             'rgba(255, 159, 64, 0.2)',       //nov
                 //             'rgba(255, 159, 64, 0.2)',        //dec

                            


                             ],

                             // document.body.style.backgroundColor = 'rgb(' + a + ',' + b + ',' + c + ')';

            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [65, 59, 80, 81, 56, 55, 40,30,32,31,74,23],
            spanGaps: false,
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

