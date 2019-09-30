<?php
    function moeda($numero, $sigla) {
        return $sigla . " " . number_format($numero, 2, ",", ".");
    }
?>