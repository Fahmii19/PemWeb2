<?php


function kelulusan($nilai)
{
    if ($nilai > 55) {
        return 'LULUS';
    } else {
        return 'TIDAK LULUS';
    }
}

function grade($nilai)
{
    if ($nilai > 100) {
        return 'I';
    } else if ($nilai >= 85) {
        return 'A';
    } else if ($nilai >= 70) {
        return 'B';
    } else if ($nilai >= 56) {
        return 'C';
    } else if ($nilai >= 36) {
        return 'D';
    } else if ($nilai >= 0) {
        return 'E';
    } else {
        return 'I';
    }
}

function predikat($nilai)
{
    if ($nilai > 100) {
        return 'Tidak ada';
    } else if ($nilai >= 85) {
        return 'Sangat Memuaskan';
    } else if ($nilai >= 70) {
        return 'Memuaskan';
    } else if ($nilai >= 56) {
        return 'Cukup';
    } else if ($nilai >= 36) {
        return 'Kurang';
    } else if ($nilai >= 0) {
        return 'Sangat Kurang';
    } else {
        return 'Tidak ada';
    }
}
