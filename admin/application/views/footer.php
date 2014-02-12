<!-- javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo base_url(); ?>js/jquery-1.4.2.min.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery-ui-1.8.2.custom.min.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery-ui-1.8.16.custom.min.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.ui.touch-punch.js"></script> 
<script src="<?php echo base_url(); ?>js/bootstrap.js"></script> 
<script src="<?php echo base_url(); ?>js/prettify.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.sparkline.min.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.nicescroll.min.js"></script> 
<script src="<?php echo base_url(); ?>js/accordion.jquery.js"></script> 
<script src="<?php echo base_url(); ?>js/smart-wizard.jquery.js"></script> 
<script src="<?php echo base_url(); ?>js/vaidation.jquery.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery-dynamic-form.js"></script> 
<script src="<?php echo base_url(); ?>js/fullcalendar.js"></script> 
<script src="<?php echo base_url(); ?>js/raty.jquery.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.noty.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.cleditor.min.js"></script> 
<script src="<?php echo base_url(); ?>js/data-table.jquery.js"></script> 
<script src="<?php echo base_url(); ?>js/TableTools.min.js"></script> 
<script src="<?php echo base_url(); ?>js/ColVis.min.js"></script> 
<script src="<?php echo base_url(); ?>js/plupload.full.js"></script> 
<script src="<?php echo base_url(); ?>js/elfinder/elfinder.min.js"></script> 
<script src="<?php echo base_url(); ?>js/chosen.jquery.js"></script> 
<script src="<?php echo base_url(); ?>js/uniform.jquery.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.tagsinput.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.colorbox-min.js"></script> 
<script src="<?php echo base_url(); ?>js/check-all.jquery.js"></script> 
<script src="<?php echo base_url(); ?>js/inputmask.jquery.js"></script> 
<script src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script> 
<script src="<?php echo base_url(); ?>js/plupupload/jquery.plupload.queue/jquery.plupload.queue.js"></script> 
<script src="<?php echo base_url(); ?>js/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.jqplot.min.js"></script> 
<script src="<?php echo base_url(); ?>js/chart/jqplot.highlighter.min.js"></script> 
<script src="<?php echo base_url(); ?>js/chart/jqplot.cursor.min.js"></script> 
<script src="<?php echo base_url(); ?>js/chart/jqplot.dateAxisRenderer.min.js"></script> 
<script src="<?php echo base_url(); ?>js/custom-script.js"></script> 
<!-- html5.js for IE less than 9 --> 
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
<script>
$(function(){
  var line1=[['23-May-08', 299.14], ['20-Jun-08', 320.45], ['25-Jul-08', 480.88], ['22-Aug-08', 509.84],
      ['26-Sep-08', 654.13], ['24-Oct-08', 779.75], ['21-Nov-08', 803], ['26-Dec-08', 908.56],
      ['23-Jan-09', 501.14], ['20-Feb-09', 1056.51], ['20-Mar-09', 1225.99], ['24-Apr-09', 1386.15]];
  var plot1 = $.jqplot('chart1', [line1], {
      title:'THIS MONTH REVENUE',
      axes:{
        xaxis:{
          renderer:$.jqplot.DateAxisRenderer,
          tickOptions:{
            formatString:'%b&nbsp;%#d'
          }
        },
        yaxis:{
          tickOptions:{
            formatString:'$%.2f'
            }
        }
      },
	  seriesDefaults: {
        show: true,     // wether to render the series.
        xaxis: 'xaxis', // either 'xaxis' or 'x2axis'.
        yaxis: 'yaxis', // either 'yaxis' or 'y2axis'.
        color: '#196795',      // CSS color spec to use for the line.  Determined automatically.
        lineWidth: 3, // Width of the line in pixels.
        shadow: false  // show shadow or not.
	  },
      highlighter: {
        show: true,
        sizeAdjust: 7.5
      },
	   grid: {
            background: '#fff',
            drawBorder: false,
            shadow: false,
            gridLineColor: '#ccc',
            gridLineWidth: 1
        },
      cursor: {
        show: false
      }
  });
});
	$(function() {
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		$('#calendar-widget').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			buttonText: {
			prev: 'Prev',
			next: 'Next',
			today: 'Today',
			month: 'Month',
			week: 'Week',
			day: 'Day'
		},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
	});
</script>
<script src="<?php echo base_url(); ?>js/respond.min.js"></script>
<script src="<?php echo base_url(); ?>js/ios-orientationchange-fix.js"></script>
</body>
</html>