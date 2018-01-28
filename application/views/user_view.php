<?php
//
//echo "this is about use details";
?>

<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>
                    Contact ID
                </th>
                <th>
                    Contact Name
                </th>
                <th>
                    Contact Number 1
                </th>
                <th>
                    Contact Number 2
                </th>
                <th>
                    Email
                </th>
                <th>
                    Address
                </th>
            </tr>
            <?php
             foreach ($contact_array as $key=>$value){
                 echo "<tr>
                    <td>".$value['Contact_ID']."</td>
                    <td>".$value['Contact_Name']."</td>
                    <td>".$value['Contact_Num1']."</td>
                    <td>".$value['Contact_Num2']."</td>
                    <td>".$value['Contact_email']."</td>
                    <td>".$value['Contact_Address']."</td>
                    </tr>";
             }
            ?>


        </table>
    </body>
</html>

