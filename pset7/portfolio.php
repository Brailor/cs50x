

    <table class="table table-striped">

    <thead>
        <tr>
            <th>Symbol</th>
            <th>Name</th>
            <th>Shares</th>
            <th>Price</th>
            <th>TOTAL</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach($positions as $position): ?>
            <tr>
                <td><?= $position["symbol"] ?></td>
                <td><?= $position["name"] ?></td>
                <td><?= $position["shares"] ?></td>
                <td><?= $position["price"] ?>$</td>
                <td><?= $position["shares"] * $position["price"] ?>$</td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td colspan="4">CASH</td>
            <td><?= number_format((float)$penz["cash"] , 2, '.', ',')?>$</td>
        </tr>
    

    </tbody>

    </table>




    