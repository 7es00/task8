<table>
    <thead>
        <tr>
            <?php foreach (array_keys($collection[0]) as $header) : ?>
                <th>
                    <?php $header ?>
                </th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($collection as $data) : ?>
            <tr>
                <?php foreach ($data as $key => $value) : ?>
                    <td><?= $value ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>