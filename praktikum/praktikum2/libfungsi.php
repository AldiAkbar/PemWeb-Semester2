<?php 


function grade($nilaitotal) {
    if ($nilaitotal < 36) {
        return 'E';
    } elseif ($nilaitotal >= 36 && $nilaitotal < 56) {
        return 'D';
    } elseif ($nilaitotal >= 56 && $nilaitotal < 70) {
        return 'C';
    } elseif ($nilaitotal >= 70 && $nilaitotal < 85) {
        return 'B';
    } elseif ($nilaitotal >= 85 && $nilaitotal < 100) {
        return 'A';
    } else {
        return 'I';
    }  
}

function kelulusan($nilaitotal) {
    if ($nilaitotal > 55) {
        return 'LULUS';
    } else {
        return 'TIDAK LULUS';
    }
}

function predikat($grade) {
    if ($grade == 'E') {
        return 'Sangat Kurang';
    } elseif ($grade == 'D') {
        return 'Kurang';
    } elseif ($grade == 'C') {
        return 'Cukup';
    } elseif ($grade == 'B') {
        return 'Baik';
    } else {
        return 'Sangat Baik';
    }   
}

?>