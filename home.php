<?php

$bootcamp_members_db = new mysqli("localhost", "root", "", "codeweekend");


// $mysql_query = $bootcamp_members_db->query(' INSERT INTO bootcamp_members (full_name, email, phone) VALUES ("Abdul Rafi Muhammadi", "abdul.muhammadid@gmail.com", "+9378259090"); ');

// $mysql_query = $bootcamp_members_db->query(' INSERT INTO bootcamp_members (full_name, email, phone, city) VALUES ("Abdul Hamid Alkozai", "abdulhamidalkozai@gmail.com", null, "Herat"); ');

// $mysql_query = $bootcamp_members_db->query(' INSERT INTO bootcamp_members (full_name, email, phone, city, occupation) VALUES ("Abdullah", "abdullah123@yahoo.com", null, "Herat", "teacher"); ');

// $mysql_query = $bootcamp_members_db->query(' INSERT INTO bootcamp_members (full_name, email, phone, city, occupation) VALUES ("Adiba Danish", "danish.adiba@yahoo.com", "+9239847651", "Islam Abad", "Web Developer"); ');

// $mysql_query = $bootcamp_members_db->query(' INSERT INTO bootcamp_members (full_name, email, phone, occupation) VALUES ("Adiba nabizada", "nabizada9080.adiba@yahoo.com", "+9289734351", "Software Developer"); ');

// $mysql_query = $bootcamp_members_db->query(' INSERT INTO bootcamp_members (full_name, email, phone) VALUES ("Adeeba", "adeennyadeeba@gmail.com", null); ');

// $mysql_query = $bootcamp_members_db->query(' INSERT INTO bootcamp_members (full_name, email, phone, city) VALUES ("Murtaza Nikzad", "nikzad123murtaza@gmail.com", "+93778987672", "Ghazni"); ');

// $mysql_query = $bootcamp_members_db->query(' DELETE FROM bootcamp_members WHERE id = 7 ANd full_name = "murtaza nikzad"; ');

// $mysql_query = $bootcamp_members_db->query(' UPDATE bootcamp_members SET email = "adeeba3333@yahoo.com" WHERE id = 6 AND email = "adeennyadeeba@gmail.com"; ');

$mysql_query = $bootcamp_members_db->query(' SELECT * FROM bootcamp_members; ');

echo "<pre>";
$bootcamp_members_data = $mysql_query->fetch_all(MYSQLI_ASSOC);
echo "</pre>";
?>

<table border="2">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th></th>
        <th>City</th></th>
        <th>Occupation</th>
    </tr>

    <tbody>
        <?php
            foreach ($bootcamp_members_data as $bootcamp_members_records) {
                echo    '<tr>
                            <td>'. $bootcamp_members_records["id"] .'</td>
                            <td>'. $bootcamp_members_records["full_name"] .'</td>
                            <td>'. $bootcamp_members_records["email"] .'</td>
                            <td>'. $bootcamp_members_records["phone"] .'</td>
                            <td>'. $bootcamp_members_records["city"] .'</td>
                            <td>'. $bootcamp_members_records["occupation"] .'</td>
                        </tr>';
            }
        ?>
    </tbody>
</table>

<style>


    table {
        border: solid purple 1px;
        margin: 0 auto;
        border-radius: 10px;
        padding: 0.5em;
    }

    th {
        color: darkblue;
        border-radius: 4px;
    }

    td {
        color: darkcyan;
        font-weight: 600;
        text-align: center;
        border-top-right-radius: 4px;
        border-bottom-left-radius: 6px;
    }

    tr {
        border-radius: 5px;
        background-color: palegoldenrod;
    }

</style>