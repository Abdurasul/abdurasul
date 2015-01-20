<?php
    $result = getKassa($_GET['id']);
?>
<form action="" method="post" name="form">
<div class="form-group">
    <?php if ($result['tahlilihun']->kassa != '') {
        printf("<div class='alert alert-success'><label for=''>Тахлили хун:</label>
                 <input type='text' class='form-control input-sm' value='%s' disabled>", $result['tahlilihun']->kassa);
        printf("<input type='hidden' value='%s' name='p1'>", $result['tahlilihun']->kassa);
    }else {
    echo "<div class='alert alert-info'><label for=''>Тахлили хун:</label>
            <input type='text' class='form-control input-sm' name='p1'>";
    }
    echo '</div>';
    
    if ($result['tahlilikandihun']->kassa !='') {
        printf("<div class='alert alert-success'><label for=''>Тахлили канди хун:</label>
            <input type='text' class='form-control input-sm' value='%s' disabled>", $result['tahlilikandihun']->kassa);
        printf("<input type='hidden' value='%s' name='p2'>", $result['tahlilikandihun']->kassa);
    }else {
        echo "<div class='alert alert-info'><label for=''>Тахлили хун:</label>
            <input type='text' class='form-control input-sm' name='p2'>";
    } 
    echo '</div>';
    
    if ($result['tahlilimochevinaihun']->kassa != '') {
        printf("<div class='alert alert-success'><label for=''>Тахлили мочевинаи хун:</label>
            <input type='text' class='form-control input-sm' value='%s' disabled>", $result['tahlilimochevinaihun']->kassa);
        printf("<input type='hidden' value='%s' name='p3'>", $result['tahlilimochevinaihun']->kassa);
    }
    else {
        echo "<div class='alert alert-info'><label for=''>Тахлили мочевинаи хун:</label>
            <input type='text' class='form-control input-sm' name='p3'>";
    }
    echo '</div>';
    
    if ($result['ozmoishigohi_i']->kassa != '') {
        printf("<div class='alert alert-success'><label for=''>Озмоишигохи имунологи:</label>
            <input type='text' class='form-control input-sm'  value='%s' disabled>", $result['ozmoishigohi_i']->kassa);
        printf("<input type='hidden' value='%s' name='p4'>", $result['ozmoishigohi_i']->kassa);
    }else 
    {
        echo "<div class='alert alert-info'><label for=''>Озмоишигохи имунологи:</label>
            <input type='text' class='form-control input-sm' name='p4'>";
    }
    echo '</div>';
    
    if ($result['ozmoishikliniki']->kassa !='') {
         printf("<div class='alert alert-success'><label for=''>Озмоигохи клиники:</label>
            <input type='text' class='form-control input-sm' value='%s' disabled>", $result['ozmoishikliniki']->kassa);
         printf("<input type='hidden' value='%s' name='p5'>", $result['ozmoishikliniki']->kassa);
    }
    else {
        echo "<div class='alert alert-info'><label for=''>Озмоигохи клиники:</label>
            <input type='text' class='form-control input-sm' name='p5'>";
    }
    echo '</div>';
    
    if ($result['peshob']->kassa !='') {
        printf("<div class='alert alert-success'><label for=''>Тахлили пешоб:</label>
            <input type='text' class='form-control input-sm'  value='%s' disabled>", $result['peshob']->kassa);
        printf("<input type='hidden' value='%s' name='p6'>", $result['peshob']->kassa);
    }
    else {
        echo "<div class='alert alert-info'><label for=''>Тахлили пешоб:</label>
            <input type='text' class='form-control input-sm' name='p6'>";
    }
    echo '</div>';
    
    if ($result['tahlilifazla']->kassa !='') {
        printf("<div class='alert alert-success'><label for=''>Тахлили фазла:</label>
            <input type='text' class='form-control input-sm' value='%s' disabled>", $result['tahlilifazla']->kassa);
        printf("<input type='hidden' value='%s' name='p7'>", $result['tahlilifazla']->kassa);
    }else {
        echo "<div class='alert alert-info'><label for=''>Тахлили фазла:</label>
            <input type='text' class='form-control input-sm' name='p7'>";
    }
    echo '</div>';
    
    if ($result['tahshisifarosadoi']->kassa !='') {
     printf("<div class='alert alert-success'><label for=''>Ташхиси фаросадонии узвхои дохила:</label>
            <input type='text' class='form-control input-sm'  value='%s' disabled>", $result['tahshisifarosadoi']->kassa);
     printf("<input type='hidden' value='%s' name='p8'>", $result['tahshisifarosadoi']->kassa);
     
    }else {
        echo "<div class='alert alert-info'><label for=''>Ташхиси фаросадонии узвхои дохила:</label>
            <input type='text' class='form-control input-sm' name='p8'>";
    }
    echo '</div>';
    
    if ($result['lahtashaviihun']->kassa !='') {
     printf("<div class='alert alert-success'><label for=''>Тахлили лахташавии хун:</label>
            <input type='text' class='form-control input-sm' value='%s' disabled>", $result['lahtashaviihun']->kassa);
     
     printf("<input type='hidden' value='%s' name='p9'>", $result['lahtashaviihun']->kassa);
    }
    else {
        echo "<div class='alert alert-info'><label for=''>Тахлили лахташавии хун:</label>
            <input type='text' class='form-control input-sm' name='p9'>";
    }
    echo '</div>';
    
    if ($result['virus']->kassa !='') {
        printf("<div class='alert alert-success'><label for=''>Озмоишгохи вирусологи:</label>
            <input type='text' class='form-control input-sm' value='%s' disabled>", $result['virus']->kassa);
        
         printf("<input type='hidden' value='%s' name='p10'>", $result['virus']->kassa);
    }
    else {
        echo "<div class='alert alert-info'><label for=''>Озмоишгохи вирусологи:</label>
            <input type='text' class='form-control input-sm' name='p10'>";
    }
    echo '</div>';
    ?>
</div>
    <input type="hidden" name="sid" value=<?=$bemor->id; ?>>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>