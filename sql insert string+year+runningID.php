<?php

$sql = "INSERT INTO example(column1,column2,column3)
					SELECT 
						CASE WHEN MAX(column1) IS NULL
						THEN CONCAT('PRO',YEAR(CURRENT_TIME),'00001')
						ELSE CONCAT('PRO',YEAR(CURRENT_TIME), LPAD((CONVERT(SUBSTRING_INDEX(MAX(column1),CONCAT('PRO',YEAR(CURRENT_TIME)),-1),UNSIGNED INTEGER) + 1),5,'0')) END
					,$column2,$column3
					FROM example
					";

?>