<?php defined('_JEXEC') or die; ?>
   
      <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>
 
 
      <div id = "container" style = "width: 150px; height: 100px; margin: 0 auto">
      </div>
      <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Browser');
            data.addColumn('number', 'Percentage');
            data.addRows([
				['wordpres',  12],
               ['joomla', 30],
               ['drupal', 20],
               ['wordpres',  <?php echo $text1; ?>],
               ['joomla',  <?php echo $text2; ?>],
               ['drupal', <?php echo $text3; ?>],
            ]);
               
            // Set chart options
            var options = {
               'title':'Browser market shares at a specific website, 2014',
               'width':350,
               'height':200
            };

            // Instantiate and draw the chart.
            var chart = new google.visualization.PieChart(document.getElementById('container'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>
   