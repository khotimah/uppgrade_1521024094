<table border='1'>
	<tr>
		<th rowspan="2">INPUT</th>
		<th colspan="5">OUTPUT</th>
	</tr>
	<tr>
		<th>A</th>
		<th>E</th>
		<th>I</th>
		<th>U</th>
		<th>O</th>
	</tr>
	<tr>
		<td>
			<?php
			$n1="KHUSNUL KHOTIMAH";
			echo $n1;
			?>
		</td>
		<td>
			<?php
			$hsl=substr_count($n1, "A");
			echo $hsl;
			?>
		</td>
		<td>
			<?php
			$hsl=substr_count($n1, "E");
			echo $hsl;
			?>
		</td>
		<td>
			<?php
			$hsl=substr_count($n1, "I");
			echo $hsl;
			?>
		</td>
		<td>
			<?php
			$hsl=substr_count($n1, "U");
			echo $hsl;
			?>
		</td>
		<td>
			<?php
			$hsl=substr_count($n1, "O");
			echo $hsl;
			?>
		</td>
	</tr>
</table>