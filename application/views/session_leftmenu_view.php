<?php
echo "<marquee behavior='slide' >";
echo "Active : " . $this->session->userdata('tahunAjr_active') . " (smst: ". $this->session->userdata('semester_active') .")";
echo "</marquee>";
?>