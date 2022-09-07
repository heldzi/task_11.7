<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <title>Таблица стравнений PHP</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        
    <h1>Таблица истинности PHP</h1>
    
    <table>
        <tr>
            <td>A</td>
            <td>B</td>
            <td>!A</td>
            <td>A || B</td>
            <td>A && B</td>
            <td>A xor B</td>
        </tr>
    </table>

    <table>
        <tr>
            <td>0</td>
            <td>0</td>
            <td> <?php 
            $a = 0;
            $rez1 = !$a;
            echo $rez1; ?></td>
            <td>
                <?php 
                $a1 = 0;
                $b1 = 0;
                if ($a1 < $a1 || $a1 > $b1){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
            <td>
            <?php 
                $a6 = 0;
                $b6 = 0;
                if ($a6 == $b6 && $a6 == 0){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
            <td>
            <?php 
                $a12 = 0;
                $b12 = 0;
                if ($a12 == 0 xor $b12 == 0){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td>0</td>
            <td>1</td>
            <td><?php 
            $b = 0;
            $rez2 = !$b;
            echo $rez2; ?></td>
            <td>
            <?php 
                $a2 = 0;
                $b2 = 1;
                if ($a2 < $b2 || $a2 > $b2){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
            <td>
            <?php 
                $a5 = 0;
                $b5 = 1;
                if ($a5 < $b5 && $a5 > $b5){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
            <td>
            <?php 
                $a11 = 0;
                $b11 = 1;
                if ($a11 == 1 xor $b11 == 1){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td>1</td>
            <td>0</td>
            <td><?php 
            $c = 1;
            $rez3 = !$c;
            echo 0;?></td>
            <td>
            <?php 
                $a3 = 1;
                $b3 = 0;
                if ($a3 < $b3 || $a3 > $b3){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
            <td>
            <?php 
                $a7 = 1;
                $b7 = 0;
                if ($a7 < $b7 && $a7 > $b7){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
            <td>
            <?php 
                $a10 = 1;
                $b10 = 0;
                if ($a10 == 1 xor $b10 == 1){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td>1</td>
            <td>1</td>
            <td><?php 
            $d = 1;
            $rez4 = !$d;
            echo 0; ?></td>
            <td>
            <?php 
                $a4 = 1;
                $b4 = 1;
                if ($a4 < $b4 || $a4 > $b4){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
            <td>
            <?php 
                $a8 = 1;
                $b8 = 1;
                if ($a8 == $b8 && $a8 == 1){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
            <td>
            <?php 
                $a9 = 1;
                $b9 = 1;
                if ($a9 == 1 xor $b9 == 1){
                    echo 'true';
                } else echo 'false';
                ?>
            </td>
        </tr>
    </table>

    <h1>Таблица сравнения PHP</h1>

    <h2>Гибкое сравнение в PHP "=="</h2>

    <table class="table2">
        <tr>
            <td></td>
            <td>true</td>
            <td>false</td>
            <td>1</td>
            <td>0</td>
            <td>-1</td>
            <td>"1"</td>
            <td>null</td>
            <td>"php"</td>
        </tr>

        <tr>
            <td>true</td>
            <td><?php
            $g = true;
            $f = true;
            if ($g == $f) {
            echo "true";
            } else "false"
            ?>
            </td>
            <td><?php
            $g1 = true;
            $f1 = false;
            if ($g1 == $f1) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g2 = true;
            $f2 = 1;
            if ($g2 == $f2) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g3 = true;
            $f3 = 0;
            if ($g3 == $f3) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g4 = true;
            $f4 = -1;
            if ($g4 == $f4) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g5 = true;
            $f5 = "1";
            if ($g5 == $f5) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g6 = true;
            $f6 = null;
            if ($g6 == $f6) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g7 = true;
            $f7 = "php";
            if ($g7 == $f7) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>false</td>
            <td><?php
            $g8 = false;
            $f8 = true;
            if ($g8 == $f8) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g9 = false;
            $f9 = false;
            if ($g9 == $f9) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g10 = false;
            $f10 = 1;
            if ($g10 == $f10) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g11 = false;
            $f11 = 0;
            if ($g11 == $f11) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g12 = false;
            $f12 = -1;
            if ($g12 == $f12) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g13 = false;
            $f13 = "1";
            if ($g13 == $f13) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g14 = false;
            $f14 = null;
            if ($g14 == $f14) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g15 = false;
            $f15 = "php";
            if ($g15 == $f15) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>1</td>
            <td><?php
            $g16 = 1;
            $f16 = true;
            if ($g16 == $f16) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g17 = 1;
            $f17 = false;
            if ($g17 == $f17) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g18 = 1;
            $f18 = 1;
            if ($g18 == $f18) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g19 = 1;
            $f19 = 0;
            if ($g19 == $f19) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g20 = 1;
            $f20 = -1;
            if ($g20 == $f20) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g21 = 1;
            $f21 = "1";
            if ($g21 == $f21) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g22 = 1;
            $f22 = null;
            if ($g22 == $f22) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g23 = 1;
            $f23 = "php";
            if ($g23 == $f23) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>0</td>
            <td><?php
            $g24 = 0;
            $f24 = true;
            if ($g24 == $f24) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g25 = 0;
            $f25 = false;
            if ($g25 == $f25) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g26 = 0;
            $f26 = 1;
            if ($g26 == $f26) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g27 = 0;
            $f27 = 0;
            if ($g27 == $f27) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g28 = 0;
            $f28 = -1;
            if ($g28 == $f28) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g29 = 0;
            $f29 = "1";
            if ($g29 == $f29) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g30 = 0;
            $f30 = null;
            if ($g30 == $f30) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g31 = 0;
            $f31 = "php";
            if ($g31 == $f31) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>-1</td>
            <td><?php
            $g32 = -1;
            $f32 = true;
            if ($g32 == $f32) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g33 = -1;
            $f33 = false;
            if ($g33 == $f33) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g34 = -1;
            $f34 = 1;
            if ($g34 == $f34) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g35 = -1;
            $f35 = 0;
            if ($g35 == $f35) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g36 = -1;
            $f36 = -1;
            if ($g36 == $f36) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g37 = -1;
            $f37 = "1";
            if ($g37 == $f37) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g38 = -1;
            $f38 = null;
            if ($g38 == $f38) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g39 = -1;
            $f39 = "php";
            if ($g39 == $f39) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>"1"</td>
            <td><?php
            $g40 = "1";
            $f40 = true;
            if ($g40 == $f40) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g41 = "1";
            $f41 = false;
            if ($g41 == $f41) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g42 = "1";
            $f42 = 1;
            if ($g42 == $f42) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g43 = "1";
            $f43 = 0;
            if ($g43 == $f43) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g44 = "1";
            $f44 = -1;
            if ($g44 == $f44) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g45 = "1";
            $f45 = "1";
            if ($g45 == $f45) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g46 = "1";
            $f46 = null;
            if ($g46 == $f46) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g47 = "1";
            $f47 = "php";
            if ($g47 == $f47) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>null</td>
            <td><?php
            $g48 = null;
            $f48 = true;
            if ($g48 == $f48) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g49 = null;
            $f49 = false;
            if ($g49 == $f49) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g50 = null;
            $f50 = 1;
            if ($g50 == $f50) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g51 = null;
            $f51 = 0;
            if ($g51 == $f51) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g52 = null;
            $f52 = -1;
            if ($g52 == $f52) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g53 = null;
            $f53 = "1";
            if ($g53 == $f53) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g54 = null;
            $f54 = null;
            if ($g54 == $f54) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g55 = null;
            $f55 = "php";
            if ($g55 == $f55) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>"php"</td>
            <td><?php
            $g56 = "php";
            $f56 = true;
            if ($g56 == $f56) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g57 = "php";
            $f57 = false;
            if ($g57 == $f57) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g58 = "php";
            $f58 = 1;
            if ($g58 == $f58) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g59 = "php";
            $f59 = 0;
            if ($g59 == $f59) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g60 = "php";
            $f60 = -1;
            if ($g60 == $f60) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g61 = "php";
            $f61 = "1";
            if ($g61 == $f61) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g62 = "php";
            $f62 = null;
            if ($g62 == $f62) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g63 = "php";
            $f63 = "php";
            if ($g63 == $f63) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>
    
        </table>

    <h2>Жесткое сравнение в PHP "==="</h2>

    <table class="table2">
        <tr>
            <td></td>
            <td>true</td>
            <td>false</td>
            <td>1</td>
            <td>0</td>
            <td>-1</td>
            <td>"1"</td>
            <td>null</td>
            <td>"php"</td>
        </tr>

        <tr>
            <td>true</td>
            <td><?php
            $g64 = true;
            $f64 = true;
            if ($g64 === $f64) {
            echo "true";
            } else "false"
            ?>
            </td>
            <td><?php
            $g65 = true;
            $f65 = false;
            if ($g65 === $f65) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g66 = true;
            $f66 = 1;
            if ($g66 === $f66) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g67 = true;
            $f67 = 0;
            if ($g67 === $f67) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g68 = true;
            $f68 = -1;
            if ($g68 === $f68) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g69 = true;
            $f69 = "1";
            if ($g69 === $f69) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g70 = true;
            $f70 = null;
            if ($g70 === $f70) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g71 = true;
            $f71 = "php";
            if ($g71 === $f71) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>false</td>
            <td><?php
            $g72 = false;
            $f72 = true;
            if ($g72 === $f72) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g73 = false;
            $f73 = false;
            if ($g73 === $f73) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g74 = false;
            $f74 = 1;
            if ($g74 === $f74) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g75 = false;
            $f75 = 0;
            if ($g75 === $f75) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g76 = false;
            $f76 = -1;
            if ($g76 === $f76) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g77 = false;
            $f77 = "1";
            if ($g77 === $f77) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g78 = false;
            $f78 = null;
            if ($g78 === $f78) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g79 = false;
            $f79 = "php";
            if ($g79 === $f79) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>1</td>
            <td><?php
            $g80 = 1;
            $f80 = true;
            if ($g80 === $f80) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g81 = 1;
            $f81 = false;
            if ($g81 === $f81) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g82 = 1;
            $f82 = 1;
            if ($g82 === $f82) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g83 = 1;
            $f83 = 0;
            if ($g83 === $f83) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g84 = 1;
            $f84 = -1;
            if ($g84 === $f84) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g85 = 1;
            $f85 = "1";
            if ($g85 === $f85) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g86 = 1;
            $f86 = null;
            if ($g86 === $f86) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g87 = 1;
            $f87 = "php";
            if ($g87 === $f87) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>0</td>
            <td><?php
            $g88 = 0;
            $f88 = true;
            if ($g88 === $f88) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g89 = 0;
            $f89 = false;
            if ($g89 === $f89) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g90 = 0;
            $f90 = 1;
            if ($g90 === $f90) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g91 = 0;
            $f91 = 0;
            if ($g91 === $f91) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g92 = 0;
            $f92 = -1;
            if ($g92 === $f92) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g93 = 0;
            $f93 = "1";
            if ($g93 === $f93) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g94 = 0;
            $f94 = null;
            if ($g94 === $f94) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g95 = 0;
            $f95 = "php";
            if ($g95 === $f95) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>-1</td>
            <td><?php
            $g96 = -1;
            $f96 = true;
            if ($g96 === $f96) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g97 = -1;
            $f97 = false;
            if ($g97 === $f97) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g98 = -1;
            $f98 = 1;
            if ($g98 === $f98) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g99 = -1;
            $f99 = 0;
            if ($g99 === $f99) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g100 = -1;
            $f100 = -1;
            if ($g100 === $f100) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g101 = -1;
            $f101 = "1";
            if ($g101 === $f101) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g102 = -1;
            $f102 = null;
            if ($g102 === $f102) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g103 = -1;
            $f103 = "php";
            if ($g103 === $f103) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>"1"</td>
            <td><?php
            $g104 = "1";
            $f104 = true;
            if ($g104 === $f104) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g105 = "1";
            $f105 = false;
            if ($g105 === $f105) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g106 = "1";
            $f106 = 1;
            if ($g106 === $f106) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g107 = "1";
            $f107 = 0;
            if ($g107 === $f107) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g108 = "1";
            $f108 = -1;
            if ($g108 === $f108) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g109 = "1";
            $f109 = "1";
            if ($g109 === $f109) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g110 = "1";
            $f110 = null;
            if ($g110 === $f110) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g111 = "1";
            $f111 = "php";
            if ($g111 === $f111) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>null</td>
            <td><?php
            $g112 = null;
            $f112 = true;
            if ($g112 === $f112) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g113 = null;
            $f113 = false;
            if ($g113 === $f113) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g114 = null;
            $f114 = 1;
            if ($g114 === $f114) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g115 = null;
            $f115 = 0;
            if ($g115 === $f115) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g116 = null;
            $f116 = -1;
            if ($g116 === $f116) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g117 = null;
            $f117 = "1";
            if ($g117 === $f117) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g118 = null;
            $f118 = null;
            if ($g118 === $f118) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g119 = null;
            $f119 = "php";
            if ($g119 === $f119) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

        <tr>
            <td>"php"</td>
            <td><?php
            $g120 = "php";
            $f120 = true;
            if ($g120 === $f120) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g121 = "php";
            $f121 = false;
            if ($g121 === $f121) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td> <?php
            $g122 = "php";
            $f122 = 1;
            if ($g122 === $f122) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g123 = "php";
            $f123 = 0;
            if ($g123 === $f123) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g124 = "php";
            $f124 = -1;
            if ($g124 === $f124) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g125 = "php";
            $f125 = "1";
            if ($g125 === $f125) {
            echo "true";
            } else echo "false";
            ?></td>
            <td><?php
            $g126 = "php";
            $f126 = null;
            if ($g126 === $f126) {
            echo "true";
            } else echo "false";
            ?>
            </td>
            <td><?php
            $g127 = "php";
            $f127 = "php";
            if ($g127 === $f127) {
            echo "true";
            } else echo "false";
            ?>
            </td>
        </tr>

    </table>

    </body>
    <footer>

    </footer>
</html>