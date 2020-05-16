<p>Report status of <?=$detail['your_name']?></p>
<table>
	<tr>
		<th>Date Of Report : </th>
		<td><?=$detail['rpt_date']?$detail['rpt_date']:'NA'?></td>
	</tr>
	<tr>
		<th>Clock Out Time : </th>
		<td><?=$detail['rpt_out_time']?></td>
	</tr>
	<tr>
		<th>Did You Meet Your Goals Today : </th>
		<td><?php echo isset($detail['rpt_meet_goals'])?$detail['rpt_meet_goals']:'NA'?></td>
	</tr>
	<tr>
		<th>Problem Or Issues : </th>
		<td><?=$detail['rpt_issues']?$detail['rpt_issues']:'NA'?></td>
	</tr>
	<tr>
		<th>Daily Report Summary : </th>
		<td><?=$detail['rpt_summary']?$detail['rpt_summary']:'NA'?></td>
	</tr>
	<tr>
		<th>Task 1 : </th>
		<td><?=$detail['rpt_task1']?$detail['rpt_task1']:'NA'?></td>
	</tr>
	<tr>
		<th>Task 2 : </th>
		<td><?=$detail['rpt_task2']?$detail['rpt_task2']:'NA'?></td>
	</tr>
	<tr>
		<th>Task 3 : </th>
		<td><?=$detail['rpt_task3']?$detail['rpt_task3']:'NA'?></td>
	</tr>
	<tr>
		<th>Goals For Tomorrow : </th>
		<td><?=$detail['rpt_tomorrow_goals']?$detail['rpt_tomorrow_goals']:'NA'?></td>
	</tr>
	<tr>
		<th>Complaints & question & comments : </th>
		<td><?=$detail['rpt_complaints']?$detail['rpt_complaints']:'NA'?></td>
	</tr>
</table>
