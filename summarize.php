<?php
	function summarize(){
		exec("java -jar summarizer_1.jar ",$output);
		return true;
	}
?>