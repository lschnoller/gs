	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.4.2.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>css/calendar.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url();?>js/coda.js"></script>
	<table cellspacing="0" width="390">
		<thead>
		<tr>
			<th>Mon</th>
			<th>Tues</th>
			<th>Wed</th>
			<th>Thr</th>
			<th>Fri</th>
			<th>Sat</th>
			<th>Sun</th>
		</tr>
		</thead>
		<tr>
			<?php
			if($day == 0)
				$day = -6;
			else
				$day++;
			//echo $day;
			for($i=0; $i< $total_rows; $i++)
			{
				for($j=0; $j<7;$j++)
				{
					$day++;					
					
					if($day>0 && $day<=$total_days_of_current_month)
					{
						//YYYY-MM-DD date format
						$date_form = "$current_year/$current_month/$day";
						
						echo '<td';
						
						//check if the date is today
						if($date_form == $today)
						{
							echo ' id="today"';
						}
						
						//check if any event stored for the date
						if(array_key_exists($day,$events))
						{
							//adding the date_has_event class to the <td> and close it
							echo ' class="date_has_event"> '.$day;
							
							//adding the eventTitle and eventContent wrapped inside <span> & <li> to <ul>
							echo '<div class="cal-events"><ul>';
							
							foreach ($events as $key=>$event){
								if ($key == $day){
							  	foreach ($event as $single){
							  		echo '<li>'; 					
									echo '<a href="/actividades/getevent/calendar/'.$single->id.'" rel="facebox"><span class="title">'.$single->eventTitle.'('.$single->user.')</span><span class="desc">'.substr($single->eventContent,0,100).'</span></a>';						
									echo '</li>';
  								} // end of for each $event
								}
  								
							} // end of foreach $events
							
							
							echo '</ul></div>';
						} // end of if(array_key_exists...)
					
						else 
						{
							//if there is not event on that date then just close the <td> tag
							echo '> '.$day;
						}
						echo "</td>";
					}
					else 
					{
						//showing empty cells in the first and last row
						echo '<td class="padding">&nbsp;</td>';
					}
				}
				echo "</tr><tr>";
			}
			
			?>
		</tr>
		<tfoot>		
			<th>
			<?php echo anchor('actividades/calendario/'.$previous_year,'&laquo;&laquo;', array('title'=>$previous_year_text));?>
			</th>
			<th>
			<?php echo anchor('actividades/calendario/'.$previous_month,'&laquo;', array('title'=>$previous_month_text));?>
			</th>
			<th style="background: none;" colspan="3"><p><?=$current_month_text?></p></th>
			
			<th>
			<?php echo anchor('actividades/calendario/'.$next_month,'&raquo;', array('title'=>$next_month_text));?>
			</th>
			<th>
			<?php echo anchor('actividades/calendario/'.$next_year,'&raquo;&raquo;', array('title'=>$next_year_text));?>
			
			</th>		
		</tfoot>
	</table>