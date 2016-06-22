<html>
<table>
    <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Hair Color</th>
    </thead>
    <tbody>
    <?php
        foreach($this->results as $item){
    ?>
    <tr>
        <td><?php echo $item['id'] ?></td>
        <td><?php echo $item['username'] ?></td>
        <td><?php echo $item['email'] ?></td>
        <td><?php echo $item['paymant'] ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</html>