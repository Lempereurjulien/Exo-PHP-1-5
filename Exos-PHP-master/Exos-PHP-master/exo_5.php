<head>
    <link href="Css_5.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <table>

        <?php
        for ($j = 1; $j <= 12; $j++) {
            ?>
        <th><td><?php echo $j ?></td></th>
            <tr>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    $totale = $i * $j;
                    ?>
                <td><?php echo $totale ?></td>
                </tr>
                <?php
                
            }
        }
        ?>
    </table>
</<body>

