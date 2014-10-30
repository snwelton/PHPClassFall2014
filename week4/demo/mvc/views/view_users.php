<?php

echo '<table border="1">'; 
                echo '<tr><th>Index</th><th>ID</th><th>Email</th>';
                echo '<th>fullname</th><th>phone</th><th>ZIP</th></tr>';
                foreach ($users as $key => $value) {
                    echo '<tr>';
                     echo '<td>', $key ,'</td>';
                     echo '<td>', $value['id'] ,'</td>';
                     echo '<td>', $value['email'] ,'</td>';
                     echo '<td>', $value['fullname'] ,'</td>';
                     echo '<td>', $value['phone'] ,'</td>';
                     echo '<td>', $value['zip'] ,'</td>';                                      
                    echo '</tr>';
                }
                echo '</table>';